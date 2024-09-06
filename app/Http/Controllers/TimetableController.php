<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\SubjectPP;
use App\Models\LecturePeriod;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Course;
use App\Models\TimetableFlag;
use App\Models\Week;
use App\Models\InfoPPO;
use PDF;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //OVDJE NAPRAVITI ISPITIVANJE
        $timeTableFlag = TimetableFlag::all()->first();
        if ($timeTableFlag->aktivanRedovni == 0 && auth()->user()->is_admin != 1) {
            return view('timetable.index-construction')->with('poruka', $timeTableFlag->komentarRedovni);
        }

        //return "bravo";
        $godina = $request->input('godina');
        if ($godina === '3' && $request->input('studij') === "DIPL") {
            $godina = '2';
        }
        $termini = DB::table('terms')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id')
            ->where('courses.smjer', $request->input('smjer'))
            ->where('courses.razina_studija', $request->input('studij'))
            ->where('courses.godina', $godina)
            ->where('terms.semestar', $request->input('semestar'))
            ->where('terms.aktivan', '1')
            ->get();

        $raspored = [];
        foreach ($termini as $termin) {
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
            foreach ($raspored as $rasporedJedan) {
                if ($rasporedJedan[1] === $termin->id) {
                    $nasao = true;
                }
            }
            if (!$nasao) {
                array_push($raspored, $jednaStavka);
            }
        }
        foreach ($raspored as &$rasporedJedan) {

            $rasporedJedan[0] = Str::upper($rasporedJedan[0]);
            //PREDAVANJE ili VJEŽBE
            if ($rasporedJedan[3] === "VJEŽBE") {
                $words = explode(" ", $rasporedJedan[0]);
                $acronym = "";

                foreach ($words as $w) {
                    if (strcmp($w, "(I)") == 0) {
                        $acronym .= $w;
                    } else {
                        if (strlen($w) > 1 && $w == 'ČEKANJA') {
                            //if($w[0].$w[1] == 'č'){
                            //        $acronym .= $w[1];
                            //}
                            $acronym .= "Č";
                        } else {
                            $acronym .= $w[0];
                        }
                    }
                }
                $rasporedJedan[0] = $acronym;
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
            }
            foreach ($termini as $termin) {
                if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                }
            }
            if (Str::endsWith($rasporedJedan[2], '/')) {
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
            }
        }

        $podaciRaspored = [];
        array_push($podaciRaspored, $request->input('smjer'));
        array_push($podaciRaspored, $request->input('studij'));
        array_push($podaciRaspored, $request->input('godina'));
        array_push($podaciRaspored, $request->input('semestar'));
        //return $request->input('smjer'); //BS, EITP, LMPP, NTPP, TOP

        $smjer = $request->input('smjer');
        $studij = $request->input('studij');

        if ($smjer === "BS") {
            if ($studij === "DIPL") {
                $smjer = "BRODOSTROJARSTVO I TEHNOLOGIJA POMORSKOG POMETA";
            } else {
                $smjer = "BRODOSTROJARSTVO";
            }
        } else if ($smjer === "EITP") {
            $smjer = "ELEKTRONIČKE I INFORMATIČKE TEHNOLOGIJE U POMORSTVU";
        } else if ($smjer === "LMPP") {
            $smjer = "LOGISTIKA I MENADŽMENT U POMORSTVU I PROMETU";
        } else if ($smjer === "NTPP") {
            $smjer = "NAUTIKA I TEHNOLOGIJA POMORSKOG PROMETA";
        } else {
            //TOP
            $smjer = "TEHNOLOGIJA I ORGANIZACIJA PROMETA";
            if ($godina === '1') {
                $smjer = "PROMET I MOBILNOST";
            }
        }

        if ($studij === "DIPL") {
            $studij = "DIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        } else {
            $studij = "PRIJEDIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        }
        array_push($podaciRaspored, $studij);

        $godinaTekst = "";
        if ($godina === '3') {
            $godinaTekst = "TREĆA STUDIJSKA GODINA";
        } else if ($godina === '2') {
            $godinaTekst = "DRUGA STUDIJSKA GODINA";
        } else {
            $godinaTekst = "PRVA STUDIJSKA GODINA";
        }
        array_push($podaciRaspored, $godinaTekst);
        array_push($podaciRaspored, ($request->input('semestar') . " SEMESTAR"));

        //return $podaciRaspored;
        return view('timetable.index')->with('raspored', $raspored)->with('podaciRaspored', $podaciRaspored);
        //return "bravo";
        //$request->input('zaposlenje_broj'); 
    }

    public function indexstudentPDF(Request $request)
    {
        $smjer = $request->input('smjer');
        $studij = $request->input('studij');
        $smjerTekst = $smjer;
        $studijTekst = $studij;
        $godina = $request->input('godina');
        $semestar = $request->input('semestar');

        $file = public_path('/files') . '/' . 'Raspored-' . $smjerTekst . '-' . $studijTekst . '-' . $godina . '-' . $semestar . '.pdf';
        $headers = array('Content-Type: application/pdf',);
        return response()->download($file, 'Raspored-' . $smjerTekst . '-' . $studijTekst . '-' . $godina . '-' . $semestar . '.pdf', $headers);
    }

    public function indexstudentPPoPDF(Request $request)
    {
        $smjer = $request->input('smjer');
        $semestar = $request->input('semestar');

        $blok = "1-blok";
        if ($semestar == "LJETNI") {
            $blok = "2-blok";
        }

        $file = public_path('/files') . '/' . 'Raspored-PPO-' . $smjer . '-' . $blok . '.pdf';
        $headers = array('Content-Type: application/pdf',);
        return response()->download($file, 'Raspored-PPO-' . $smjer . '-' . $blok . '.pdf', $headers);
    }

    public function timetablegeneratePPoPDF(Request $request)
    {
        $byCourse = $request->input('smjer');
        $bySemester = $request->input('semestar');
        $byWeeks = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'];
        //$weeks = ['1', '2', '3'];

        $byWeek_start = [];
        $byWeek_end = [];

        foreach ($byWeeks as $index => $week) {
            $byWeek_startt = Week::where('name', $week)->where('course', $byCourse)->where('semester', $bySemester)->first();

            if ($byWeek_startt != NULL) {
                $byWeek_start[$index] = date_create_from_format("Y-m-d", $byWeek_startt->start_day)->format("d.m.Y.");
                $byWeek_end[$index] = date('d.m.Y.', strtotime($byWeek_start[$index] . ' + 5 days'));
            }
        }

        $blok = "1-blok";
        if ($bySemester == "LJETNI") {
            $blok = "2-blok";
        }

        $weekDays = [
            '1' => 'Ponedjeljak',
            '2' => 'Utorak',
            '3' => 'Srijeda',
            '4' => 'Cetvrtak',
            '5' => 'Petak',
            '6' => 'Subota'
        ];

        $from = [];
        $timeRange = [];
        for ($i = 0; $i < count($byWeeks); $i++) {
            $lecturePeriods = $this->searchFilter($byCourse, $bySemester, $byWeeks[$i]);

            $from[$i] = '20:00';
            $brojac = 0;
            foreach ($lecturePeriods as $lecturePeriodsOne) {
                $brojac++;
                if (strcmp($lecturePeriodsOne->hours, $from[$i]) < 0) {
                    $from[$i] = $lecturePeriodsOne->hours;
                }
            }

            if ($from[$i] == '20:00') {
                $from[$i] = '08:00';
            }

            $to[$i] = '08:00';
            foreach ($lecturePeriods as $lecturePeriodsOne) {
                if (strcmp($to[$i], $lecturePeriodsOne->hours) < 0) {
                    $to[$i] = $lecturePeriodsOne->hours;
                }
            }

            if ($to[$i] == '08:00') {
                $to[$i] = '20:00';
            }

            if ($brojac == 0) {
                $from[$i] = '14:00';
                $to[$i] = '20:00';
            }


            $time = Carbon::parse($from[$i]);

            $timeRangeOne = [];
            if (strcmp($to[$i], $from[$i]) !== 0) {
                do {
                    array_push($timeRangeOne, [
                        'start' => $time->format("H:i"),
                        'real_start' => $time->addMinutes(15)->format("H:i"),
                        'end' => $time->addMinutes(45)->format("H:i")
                    ]);
                } while ($time->format("H:i") !== $to[$i]);
            }

            if ($brojac != 0) {
                $time2 = Carbon::parse($to[$i]);
                array_push($timeRangeOne, [
                    'start' => $time2->format("H:i"),
                    'real_start' => $time2->addMinutes(15)->format("H:i"),
                    'end' => $time2->addMinutes(45)->format("H:i")
                ]);
            }

            $timeRange[$i] = $timeRangeOne;
        }

        $lecturePeriods = $this->searchFilter2($byCourse, $bySemester);

        $infoPPOone = InfoPPO::all()->first();
        $ciklusPoruka = "";
        if ($byCourse == 'Nautika' && $bySemester == "ZIMSKI") {
            $ciklusPoruka = $infoPPOone->ciklusNB1;
        } else if ($byCourse == 'Nautika' && $bySemester == "LJETNI") {
            $ciklusPoruka = $infoPPOone->ciklusNB2;
        } else if ($byCourse == 'Brodostrojarstvo' && $bySemester == "ZIMSKI") {
            $ciklusPoruka = $infoPPOone->ciklusBB1;
        } else if ($byCourse == 'Brodostrojarstvo' && $bySemester == "LJETNI") {
            $ciklusPoruka = $infoPPOone->ciklusBB2;
        }

        $rasporedSve = [];
        array_push($rasporedSve, $weekDays);
        array_push($rasporedSve, $timeRange);
        array_push($rasporedSve, $byWeeks);
        array_push($rasporedSve, $byWeek_start);
        array_push($rasporedSve, $byWeek_end);
        array_push($rasporedSve, $lecturePeriods);
        array_push($rasporedSve, $byCourse);
        array_push($rasporedSve, $bySemester);
        array_push($rasporedSve, $ciklusPoruka);

        //*******************ZA SPREMANJE****************//
        view()->share('rasporedSve', $rasporedSve);
        $pdf = PDF::loadView('timetablePPO.indexRasporedPDF', $rasporedSve);
        $pdf->setPaper('A4', 'landscape');
        $pdf->save(public_path('/files') . '/' . 'Raspored-PPO-' . $byCourse . '-' . $blok . '.pdf');
        //*******************ZA SPREMANJE****************//

        //return $weekDays;

        //return view('timetablePPO.indexRaspored', compact('weekDays','timeRange','byWeeks', 'byWeek_start', 'byWeek_end', 'lecturePeriods', 'byCourse','bySemester'));
    }

    public function timetablegeneratePDF(Request $request)
    {
        $smjer = $request->input('smjer');
        $studij = $request->input('studij');
        $smjerTekst = $smjer;
        $studijTekst = $studij;
        $godina = $request->input('godina');
        $semestar = $request->input('semestar');


        //$file = public_path('/files') . '/' . 'Raspored-' . $smjerTekst . '-' . $studijTekst . '-' . $godina . '-' . $semestar . '.pdf';
        //$headers = array('Content-Type: application/pdf',);
        //return response()->download($file, 'Raspored-BS-PRED-1-ZIMSKI.pdf', $headers);


        //provjeriti smjer studij godina semestar ako su dobre vrijednosti
        $dobrevrijednosti = true;
        if (!in_array($smjer, array('BS', 'LMPP', 'EITP', 'NTPP', 'TOP'))) {
            $dobrevrijednosti = false;
        }
        if (!in_array($studij, array('PRED', 'DIPL'))) {
            $dobrevrijednosti = false;
        }
        if (!in_array($godina, array(1, 2, 3))) {
            $dobrevrijednosti = false;
        }
        if (!in_array($semestar, array('ZIMSKI', 'LJETNI'))) {
            $dobrevrijednosti = false;
        }
        //return "" . $request->input('smjer') . " " . $request->input('studij') . " " . $request->input('godina') . " " . $request->input('semestar');

        //ako nisu vratiti prazan PDF
        //ako jesu, napraviti upit i vratiti raspored

        if ($dobrevrijednosti) {
            if ($godina === '3' && $studij === "DIPL") {
                $godina = '2';
            }
            $termini = DB::table('terms')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id')
                ->where('courses.smjer', $smjer)
                ->where('courses.razina_studija', $studij)
                ->where('courses.godina', $godina)
                ->where('terms.semestar', $semestar)
                ->where('terms.aktivan', '1')
                ->get();

            $raspored = [];
            foreach ($termini as $termin) {
                $nasao = false;
                $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
                foreach ($raspored as $rasporedJedan) {
                    if ($rasporedJedan[1] === $termin->id) {
                        $nasao = true;
                    }
                }
                if (!$nasao) {
                    array_push($raspored, $jednaStavka);
                }
            }
            foreach ($raspored as &$rasporedJedan) {

                $rasporedJedan[0] = Str::upper($rasporedJedan[0]);
                //PREDAVANJE ili VJEŽBE
                if ($rasporedJedan[3] === "VJEŽBE") {
                    $words = explode(" ", $rasporedJedan[0]);
                    $acronym = "";

                    foreach ($words as $w) {
                        if (strcmp($w, "(I)") == 0) {
                            $acronym .= $w;
                        } else {
                            if (strlen($w) > 1 && $w == 'ČEKANJA') {
                                //if($w[0].$w[1] == 'č'){
                                //        $acronym .= $w[1];
                                //}
                                $acronym .= "Č";
                            } else {
                                $acronym .= $w[0];
                            }
                        }
                    }
                    $rasporedJedan[0] = $acronym;
                    $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
                }
                foreach ($termini as $termin) {
                    if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                        $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                    }
                }
                if (Str::endsWith($rasporedJedan[2], '/')) {
                    $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
                }
            }

            $podaciRaspored = [];

            if ($smjer === "BS") {
                if ($studij === "DIPL") {
                    $smjer = "BRODOSTROJARSTVO I TEHNOLOGIJA POMORSKOG POMETA";
                } else {
                    $smjer = "BRODOSTROJARSTVO";
                }
            } else if ($smjer === "EITP") {
                $smjer = "ELEKTRONIČKE I INFORMATIČKE TEHNOLOGIJE U POMORSTVU";
            } else if ($smjer === "LMPP") {
                $smjer = "LOGISTIKA I MENADŽMENT U POMORSTVU I PROMETU";
            } else if ($smjer === "NTPP") {
                $smjer = "NAUTIKA I TEHNOLOGIJA POMORSKOG PROMETA";
            } else {
                //TOP
                $smjer = "TEHNOLOGIJA I ORGANIZACIJA PROMETA";
                if ($godina === '1') {
                    $smjer = "PROMET I MOBILNOST";
                }
            }

            if ($studij === "DIPL") {
                $studij = "DIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
            } else {
                $studij = "PRIJEDIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
            }
            array_push($podaciRaspored, $studij);

            $godinaTekst = "";
            if ($godina === '3') {
                $godinaTekst = "TREĆA STUDIJSKA GODINA";
            } else if ($godina === '2') {
                $godinaTekst = "DRUGA STUDIJSKA GODINA";
            } else {
                $godinaTekst = "PRVA STUDIJSKA GODINA";
            }
            array_push($podaciRaspored, $godinaTekst);
            array_push($podaciRaspored, ($semestar . " SEMESTAR"));
        }

        $rasporedSve = [];
        array_push($rasporedSve, $raspored);
        array_push($rasporedSve, $podaciRaspored);


        //*******************ZA SPREMANJE****************//
        view()->share('rasporedSve', $rasporedSve);
        $pdf = PDF::loadView('timetable.indexstudentPDF', $rasporedSve);
        $pdf->setPaper('A4', 'landscape');
        $pdf->save(public_path('/files') . '/' . 'Raspored-' . $smjerTekst . '-' . $studijTekst . '-' . $godina . '-' . $semestar . '.pdf');
        //*******************ZA SPREMANJE****************//

        // download PDF file with download method
        //return $pdf->download('Raspored-' . $smjerTekst . '-' . $studijTekst . '-' . $godina . '-' . $semestar . '.pdf');
    }

    public function indexstudent(Request $request)
    {

        //OVDJE NAPRAVITI ISPITIVANJE
        $timeTableFlag = TimetableFlag::all()->first();
        if ($timeTableFlag->aktivanRedovni == 0) {
            return view('timetable.index-construction')->with('poruka', $timeTableFlag->komentarRedovni);
        }

        $godina = $request->input('godina');
        if ($godina === '3' && $request->input('studij') === "DIPL") {
            $godina = '2';
        }
        $termini = DB::table('terms')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id')
            ->where('courses.smjer', $request->input('smjer'))
            ->where('courses.razina_studija', $request->input('studij'))
            ->where('courses.godina', $godina)
            ->where('terms.semestar', $request->input('semestar'))
            ->where('terms.aktivan', '1')
            ->get();

        $raspored = [];
        foreach ($termini as $termin) {
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
            foreach ($raspored as $rasporedJedan) {
                if ($rasporedJedan[1] === $termin->id) {
                    $nasao = true;
                }
            }
            if (!$nasao) {
                array_push($raspored, $jednaStavka);
            }
        }
        foreach ($raspored as &$rasporedJedan) {

            $rasporedJedan[0] = Str::upper($rasporedJedan[0]);
            //PREDAVANJE ili VJEŽBE
            if ($rasporedJedan[3] === "VJEŽBE") {
                $words = explode(" ", $rasporedJedan[0]);
                $acronym = "";

                foreach ($words as $w) {
                    if (strcmp($w, "(I)") == 0) {
                        $acronym .= $w;
                    } else {
                        if (strlen($w) > 1 && $w == 'ČEKANJA') {
                            //if($w[0].$w[1] == 'č'){
                            //        $acronym .= $w[1];
                            //}
                            $acronym .= "Č";
                        } else {
                            $acronym .= $w[0];
                        }
                    }
                }
                $rasporedJedan[0] = $acronym;
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
            }
            foreach ($termini as $termin) {
                if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                }
            }
            if (Str::endsWith($rasporedJedan[2], '/')) {
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
            }
        }

        //$z = ['me','you', 'he'];
        //array_push($z, 'she', 'it');
        //print_r($z);

        $podaciRaspored = [];
        array_push($podaciRaspored, $request->input('smjer'));
        array_push($podaciRaspored, $request->input('studij'));
        array_push($podaciRaspored, $request->input('godina'));
        array_push($podaciRaspored, $request->input('semestar'));
        //return $request->input('smjer'); //BS, EITP, LMPP, NTPP, TOP

        $smjer = $request->input('smjer');
        $studij = $request->input('studij');

        if ($smjer === "BS") {
            if ($studij === "DIPL") {
                $smjer = "BRODOSTROJARSTVO I TEHNOLOGIJA POMORSKOG POMETA";
            } else {
                $smjer = "BRODOSTROJARSTVO";
            }
        } else if ($smjer === "EITP") {
            $smjer = "ELEKTRONIČKE I INFORMATIČKE TEHNOLOGIJE U POMORSTVU";
        } else if ($smjer === "LMPP") {
            $smjer = "LOGISTIKA I MENADŽMENT U POMORSTVU I PROMETU";
        } else if ($smjer === "NTPP") {
            $smjer = "NAUTIKA I TEHNOLOGIJA POMORSKOG PROMETA";
        } else {
            //TOP
            $smjer = "TEHNOLOGIJA I ORGANIZACIJA PROMETA";
            if ($godina === '1') {
                $smjer = "PROMET I MOBILNOST";
            }
        }

        if ($studij === "DIPL") {
            $studij = "DIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        } else {
            $studij = "PRIJEDIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        }
        array_push($podaciRaspored, $studij);

        $godinaTekst = "";
        if ($godina === '3') {
            $godinaTekst = "TREĆA STUDIJSKA GODINA";
        } else if ($godina === '2') {
            $godinaTekst = "DRUGA STUDIJSKA GODINA";
        } else {
            $godinaTekst = "PRVA STUDIJSKA GODINA";
        }
        array_push($podaciRaspored, $godinaTekst);
        array_push($podaciRaspored, ($request->input('semestar') . " SEMESTAR"));

        return view('timetable.indexstudent')->with('raspored', $raspored)->with('podaciRaspored', $podaciRaspored);
        //return "bravo";
        //$request->input('zaposlenje_broj'); 
    }

    public function indexadmin($id)
    {
        $kolegij = Course::find($id);
        $semestar = "ZIMSKI";
        if ($kolegij->semestar % 2 == 0) {
            $semestar = "LJETNI";
        }

        $termini = DB::table('terms')
            ->join('user_term', 'terms.id', '=', 'user_term.term_id')
            ->join('users', 'users.id', '=', 'user_term.user_id')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'users.name', 'users.surname')
            ->where('courses.smjer', $kolegij->smjer)
            ->where('courses.razina_studija', $kolegij->razina_studija)
            ->where('courses.godina', $kolegij->godina)
            ->where('terms.semestar', $semestar)
            ->where('terms.aktivan', '1')
            ->get();

        $raspored = [];
        foreach ($termini as $termin) {
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
            foreach ($raspored as $rasporedJedan) {
                if ($rasporedJedan[1] === $termin->id) {
                    $nasao = true;
                }
            }
            if (!$nasao) {
                array_push($raspored, $jednaStavka);
            }
        }
        foreach ($raspored as &$rasporedJedan) {

            $rasporedJedan[0] = Str::upper($rasporedJedan[0]);
            //PREDAVANJE ili VJEŽBE
            if ($rasporedJedan[3] === "VJEŽBE") {
                $words = explode(" ", $rasporedJedan[0]);
                $acronym = "";

                foreach ($words as $w) {
                    if (strcmp($w, "(I)") == 0) {
                        $acronym .= $w;
                    } else {
                        if (strlen($w) > 1 && $w == 'ČEKANJA') {
                            //if($w[0].$w[1] == 'č'){
                            //        $acronym .= $w[1];
                            //}
                            $acronym .= "Č";
                        } else {
                            $acronym .= $w[0];
                        }
                    }
                }
                $rasporedJedan[0] = $acronym;
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
            }
            foreach ($termini as $termin) {
                if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                }
            }
            if (Str::endsWith($rasporedJedan[2], '/')) {
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
            }
        }

        $podaciRaspored = [];
        array_push($podaciRaspored, $kolegij->smjer);
        array_push($podaciRaspored, $kolegij->razina_studija);
        array_push($podaciRaspored, $kolegij->godina);
        array_push($podaciRaspored, $semestar);
        //return $request->input('smjer'); //BS, EITP, LMPP, NTPP, TOP

        $smjer = $kolegij->smjer;
        $studij = $kolegij->razina_studija;
        $godina = $kolegij->godina;


        if ($smjer === "BS") {
            if ($studij === "DIPL") {
                $smjer = "BRODOSTROJARSTVO I TEHNOLOGIJA POMORSKOG POMETA";
            } else {
                $smjer = "BRODOSTROJARSTVO";
            }
        } else if ($smjer === "EITP") {
            $smjer = "ELEKTRONIČKE I INFORMATIČKE TEHNOLOGIJE U POMORSTVU";
        } else if ($smjer === "LMPP") {
            $smjer = "LOGISTIKA I MENADŽMENT U POMORSTVU I PROMETU";
        } else if ($smjer === "NTPP") {
            $smjer = "NAUTIKA I TEHNOLOGIJA POMORSKOG PROMETA";
        } else {
            //TOP
            $smjer = "TEHNOLOGIJA I ORGANIZACIJA PROMETA";
            if ($godina === '1') {
                $smjer = "PROMET I MOBILNOST";
            }
        }

        if ($studij === "DIPL") {
            $studij = "DIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        } else {
            $studij = "PRIJEDIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        }
        array_push($podaciRaspored, $studij);

        $godinaTekst = "";
        if ($kolegij->godina === 3) {
            $godinaTekst = "TREĆA STUDIJSKA GODINA";
        } else if ($kolegij->godina === 2) {
            $godinaTekst = "DRUGA STUDIJSKA GODINA";
        } else {
            $godinaTekst = "PRVA STUDIJSKA GODINA";
        }
        array_push($podaciRaspored, $godinaTekst);
        array_push($podaciRaspored, ($semestar . " SEMESTAR"));

        //$z = ['me','you', 'he'];
        //array_push($z, 'she', 'it');
        //print_r($z);

        return view('timetable.index')->with('raspored', $raspored)->with('podaciRaspored', $podaciRaspored);;
    }

    public function searchFilter($byCourse, $bySemester, $byWeek)
    {
        $kolegiji_svi = SubjectPP::where('course', $byCourse)->where('semester', $bySemester)->pluck('id');
        $lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $kolegiji_svi)->where('week', $byWeek)->get();

        return $lecturePeriods;
    }

    public function searchFilter2($byCourse, $bySemester)
    {
        $kolegiji_svi = SubjectPP::where('course', $byCourse)->where('semester', $bySemester)->pluck('id');
        $lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $kolegiji_svi)->get();

        return $lecturePeriods;
    }
}
