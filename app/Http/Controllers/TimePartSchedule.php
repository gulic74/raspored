<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\PartTime;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\TimetableFlag;

class TimePartSchedule extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //--------------------------------- SVE DOBIVAM IZ UPITA ---------------- POCETAK ------------------------//
        //return "blabla";
        $request->validate([
            'datumPocetka' => 'required|string'
        ]);
        //return request('neradniDani');

        $smjer = request('smjer');
        $studij = request('studij');
        $godina = intval(request('godina'));
        $semestar = intval(request('semestar'));

        //OVO ĆU SVE DOBITI OD UPITA PRIJE GENERIRANJA RASPOREDA
        //$smjer = 'EITP';   //BS', 'EITP', 'LMPP', 'NTPP', 'TOP'   //LMPP  jardas UDL       //BS
        //$studij = 'DIPL';   //'PRED', 'DIPL'                      //DIPL                   //PRED       
        //$godina = 2;    //1, 2 ili 3                              //1                      //2
        //$semestar = 3;  // 1-6                                    //2                      //3
        if ($godina === 3 && $studij === 'DIPL') {
            $godina = 2;
        }

        $datumPocetkaString = request('datumPocetka');
        //return $datumPocetkaString;
        $datumPocetka = \Carbon\Carbon::createFromFormat('Y-m-d', $datumPocetkaString);
        //return $datumPocetka;
        //OVO ĆU SVE DOBITI OD UPITA PRIJE GENERIRANJA RASPOREDA
        //UPIT KOJI DATUM POČINJE RASPORED
        //$datumPocetka = Carbon::create(2023, 11, 20); // Year, Month, Day
        //return $datumPocetka->format('Y-m-d');

        //OVO ĆU SVE DOBITI OD UPITA PRIJE GENERIRANJA RASPOREDA
        //KOJE DATUME SE NE RADI
        $nemaNastave = request('neradniDani');
        //$nemaNastave = "2023-11-01;2023-12-01";  // upisati 'format Y-m-d' s NULAMA
        $nemaNastaveDatumiArray = explode(';', $nemaNastave);
        //$datumPocetka->addDays(1);
        //return $nemaNastaveDatumiArray;

        //--------------------------------- SVE DOBIVAM IZ UPITA --------------- KRAJ -------------------------//


        //GLAVNA PROBA ---------------- POCETAK -----------------------------------------------------------------------

        /*$partTimesProba = DB::table('part_times')
            ->join('users', 'users.id', '=', 'part_times.user_id')
            ->join('courses', 'courses.id', '=', 'part_times.course_id')
            ->select('date', 'vrijeme', 'part_times.smjer', 'part_times.studij', 'part_times.godina', 'part_times.semestar', 'part_times.tip', 'users.surname', 'courses.ime')
            ->where('part_times.smjer', $smjer)
            ->where('part_times.studij', $studij)
            ->where('part_times.godina', $godina)
            ->where('part_times.semestar', $semestar)
            ->get();

        $partTimesProbaArray = [];

        foreach ($partTimesProba as $partTimeProba) {
            $nema = false;
            foreach ($partTimesProbaArray as $partTimeProbaArray) {
                if ($partTimeProbaArray->date === $partTimeProba->date && $partTimeProbaArray->vrijeme === $partTimeProba->vrijeme) {
                    $nema = true;
                }
            }
            if (!$nema) {
                $partTimesProbaArray[] = $partTimeProba;
            }
        }

        return $partTimesProbaArray;*/

        //GLAVNA PROBA -------------------- KRAJ -------------------------------------------------------------------



        //SVI KOLEGIJI

        $kolegijiZaRaspored = Course::where('smjer', $smjer)
            ->where('razina_studija', $studij)
            ->where('godina', $godina)
            ->where('semestar', $semestar)->get();

        //info('This is a message from the console helper.');
        //return $kolegijiZaRaspored;

        //SAMO AKTIVNI KOLEGIJI
        //rijeseno nize s terms.aktivan


        //GLAVNA FOR PETLJA ZA SVAKI KOLEGIJ
        //--------TO DO--------
        foreach ($kolegijiZaRaspored as $kolegijZaRaspored) {
            //if($kolegijZaRaspored->id == 453){
            $idKolegij = $kolegijZaRaspored->id;  //618-LMPP, 637, 660 jardas 3 kolegija   //460 Panić-Cule
            $terminiRS1 = DB::table('terms')
                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                ->join('users', 'users.id', '=', 'user_term.user_id')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.id as idtermina', 'terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'users.id', 'users.name', 'users.surname')
                ->where('courses.id', $idKolegij)
                ->where('terms.aktivan', '1')
                ->get();

            //return $terminiRS1;

            //OPTREĆENJE SVAKOG KOLEGIJA + TKO IZVODI + DRŽI LI SE ZAJEDNIČKO S NEKIM KOLEGIJEM
            $predavanje = 0;
            $vjezbe = 0;
            $nastavniciPredavanje = [];
            $nastavniciVjezbe = [];
            $idTerminaPredavanje = [];
            $idTerminaVjezbe = [];
            $idZajednickiKolegijPredavanja = [];
            $idZajednickiKolegijVjezbe = [];
            foreach ($terminiRS1 as $terminRS1) {
                if ($terminRS1->tip === "PREDAVANJE") {
                    if (!in_array($terminRS1->idtermina, $idTerminaPredavanje)) {
                        $predavanje += $terminRS1->kraj - $terminRS1->pocetak;
                        $idTerminaPredavanje[] = $terminRS1->idtermina;
                    }
                    if (!in_array($terminRS1->id, $nastavniciPredavanje)) {
                        $nastavniciPredavanje[] = $terminRS1->id;
                    }
                    $zajednickiKolegiji = DB::table('terms')
                        ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                        ->join('courses', 'courses.id', '=', 'course_term.course_id')
                        ->select('courses.id as idkolegij')
                        ->where('terms.id', $terminRS1->idtermina)
                        ->where('terms.aktivan', '1')
                        ->get();
                    foreach ($zajednickiKolegiji as $zajednickiKolegij) {
                        if (!in_array($zajednickiKolegij->idkolegij, $idZajednickiKolegijPredavanja) && $zajednickiKolegij->idkolegij !== $idKolegij) {
                            $idZajednickiKolegijPredavanja[] = $zajednickiKolegij->idkolegij;
                        }
                    }
                    //return $idZajednickiKolegijPredavanja;                        
                } else {
                    if (!in_array($terminRS1->idtermina, $idTerminaVjezbe)) {
                        $vjezbe = $terminRS1->kraj - $terminRS1->pocetak;
                        $idTerminaVjezbe[] = $terminRS1->idtermina;
                    }
                    if (!in_array($terminRS1->id, $nastavniciVjezbe)) {
                        $nastavniciVjezbe[] = $terminRS1->id;
                    }
                    $zajednickiKolegiji = DB::table('terms')
                        ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                        ->join('courses', 'courses.id', '=', 'course_term.course_id')
                        ->select('courses.id as idkolegij')
                        ->where('terms.id', $terminRS1->idtermina)
                        ->where('terms.aktivan', '1')
                        ->get();
                    foreach ($zajednickiKolegiji as $zajednickiKolegij) {
                        if (!in_array($zajednickiKolegij->idkolegij, $idZajednickiKolegijVjezbe) && $zajednickiKolegij->idkolegij !== $idKolegij) {
                            $idZajednickiKolegijVjezbe[] = $zajednickiKolegij->idkolegij;
                        }
                    }
                    //return $zajednickiKolegiji;
                }
            }


            if ($idKolegij == 470 || $idKolegij == 474 || $idKolegij == 532) {
                $predavanje = 2;
                $vjezbe = 1;
            }
            if ($idKolegij == 466) {
                $predavanje = 4;
                $vjezbe = 1;
            }
            if ($idKolegij == 547) {
                $predavanje = 2;
                $vjezbe = 2;
            }
            if ($idKolegij == 459) {
                $predavanje = 3;
                $vjezbe = 0;
            }

            //if($idKolegij == 453){
            //    return $predavanje . " " . $vjezbe;
            //}

            //return $nastavniciPredavanje;

            //return $idZajednickiKolegijPredavanja;

            /*return "Opterećenje predavanja: " . $predavanje . ' + Opterećenje vježbi: ' . $vjezbe
            . " Profesori predavanja: " . implode(', ', $nastavniciPredavanje) . " + Profesori vježbe: " 
            . implode(', ', $nastavniciVjezbe);*/

            //2 booleana za predavanjeGotovo vjezbeGotovo
            $predavanjeGotovo = false;
            $vjezbeGotovo = false;

            //SAMO PROBA
            $popis = [];  //to nam ne treba
            $brojac = 1;   //to nam ne treba to je samo provjera     



            //--------TO DO--------
            //2 IF-A AKO POSTOJE PREDAVANJA, AKO POSTOJE VJEŽBE
            if ($predavanje > 0) {
                //U SVAKOM IF-U
                //NA POČETKU SVAKOG IF-A EXTRA IF
                //AKO SE ZAJEDNO DRŽI S NEČIM ODMAH ISPITATI AKO VEĆ POSTOJI U SUSTAVU I NE UBACIVATI
                $results = PartTime::where('tip', 'Predavanje')
                    ->where('course_id', $idKolegij)
                    ->get();
                if ($results->count() === 0) {
                    //$predavanje - koliko traje
                    //$datumPocetka
                    //DEFINIRATI RANDOM TERMINE ZA SVAKI WHILE ZA PREDAVANJA 
                    //POČEVŠI OD DATUMA DEFINIRANJA TERMINA ZA TU GODINU
                    $pocetakDanaVrijeme = 14;
                    $pocetakDatumaKolegij = $datumPocetka;
                    while (!$predavanjeGotovo /*&& $brojac < 100*/) {
                        //$brojac += 1;
                        $pocetakDanaVrijeme += 1;
                        if ($pocetakDanaVrijeme + $predavanje > 20) {
                            $pocetakDanaVrijeme = 15;
                            $pocetakDatumaKolegij->addDays(1);
                            if ($pocetakDatumaKolegij->isWeekend()) {
                                //return $pocetakDatumaKolegij;
                                $pocetakDatumaKolegij->addDays(2);
                            }
                        }
                        foreach ($nemaNastaveDatumiArray as $nemaNastaveDatumArray) {
                            //$nemaNastaveDate = Carbon::createFromFormat('Y-m-d', $nemaNastaveDatumArray);
                            //return $nemaNastaveDate;
                            if ($pocetakDatumaKolegij->format('Y-m-d') === $nemaNastaveDatumArray) {
                                //return "dada";
                                $pocetakDatumaKolegij->addDays(1);
                            }
                        }
                        //return $pocetakDatumaKolegij;

                        //SREDI DAN DATUMA
                        $dayOfWeekNumber = $pocetakDatumaKolegij->format('w'); // 0 - ned, 1 -pon
                        //return $dayOfWeekNumber;
                        $dayOfWeekText = '';
                        $dayOfWeekFullText = '';
                        switch ($dayOfWeekNumber) {
                            case 1:
                                $dayOfWeekText = 'pon'; // 'pon' for Monday
                                $dayOfWeekFullText = 'Ponedjeljak';
                                break;
                            case 2:
                                $dayOfWeekText = 'uto'; // 'uto' for Tuesday
                                $dayOfWeekFullText = 'Utorak';
                                break;
                            case 3:
                                $dayOfWeekText = 'sri'; // 'sri' for Wednesday
                                $dayOfWeekFullText = 'Srijeda';
                                break;
                            case 4:
                                $dayOfWeekText = 'cet'; // 'cet' for Thursday
                                $dayOfWeekFullText = 'Cetvrtak';
                                break;
                            case 5:
                                $dayOfWeekText = 'pet'; // 'pet' for Friday
                                $dayOfWeekFullText = 'Petak';
                        }
                        //return $dayOfWeekText;

                        $nasaoTermin = true;


                        //$idKolegij
                        //$smjer = 'LMPP';   //BS', 'LMPP', 'EITP', 'NTPP', 'TOP'    //LMPP  jardas UDL    //BS
                        //$studij = 'DIPL';   //'PRED', 'DIPL'                    //DIPL                  //PRED       
                        //$godina = 1;    //1, 2 ili 3                                        //1                 //2
                        //$semestar = 2;
                        //SREDJENO!!!!!!    //ZA TAJ KOLEGIJ AKO JE NEŠTO VEĆ ZAUZETO U RASPOREDU IZVANREDNI
                        $partTimes = PartTime::where('smjer', $smjer)
                            ->where('date', $pocetakDatumaKolegij->format('Y-m-d'))
                            ->where('studij', $studij)
                            ->where('godina', $godina)
                            ->where('semestar', $semestar)
                            ->get();
                        foreach ($partTimes as $partTime) {
                            if ($partTime->vrijeme >= $pocetakDanaVrijeme && $partTime->vrijeme < ($pocetakDanaVrijeme + $predavanje)) {
                                $nasaoTermin = false;
                            }
                        }

                        //SREDJENO!!!!!!    //ZA SVAKI POVEZANI KOLEGIJ VIDJETI AKO SE U TIM IZVANREDNIM RASPOREDIMA NEŠTO PREKLAPA
                        foreach ($idZajednickiKolegijPredavanja as $idKolegijPredavanje) {
                            $course = Course::select('smjer', 'razina_studija as studij', 'godina', 'semestar')
                                ->find($idKolegijPredavanje);
                            $partTimes = PartTime::where('smjer', $course->smjer)
                                ->where('date', $pocetakDatumaKolegij->format('Y-m-d'))
                                ->where('studij', $course->studij)
                                ->where('godina', $course->godina)
                                ->where('semestar', $course->semestar)
                                ->get();
                            foreach ($partTimes as $partTime) {
                                if ($partTime->vrijeme >= $pocetakDanaVrijeme && $partTime->vrijeme < ($pocetakDanaVrijeme + $predavanje)) {
                                    $nasaoTermin = false;
                                }
                            }
                        }
                        //$idZajednickiKolegijPredavanja

                        //SREDJENO!!!!!!    //ZA SVAKOG PROFESORA VIDJETI AKO SE IZVANREDNI RASPORED PREKLAPA
                        foreach ($nastavniciPredavanje as $nastavnikPredavanje) {
                            $partTimes = PartTime::where('user_id', $nastavnikPredavanje)
                                ->where('date', $pocetakDatumaKolegij->format('Y-m-d'))
                                ->get();
                            foreach ($partTimes as $partTime) {
                                if ($partTime->vrijeme >= $pocetakDanaVrijeme && $partTime->vrijeme < ($pocetakDanaVrijeme + $predavanje)) {
                                    $nasaoTermin = false;
                                }
                            }
                            //return $nastavnikPredavanje;
                        }



                        //ZA SVAKOG PROFESORA VIDJETI AKO SE REDOVNI i PPO RASPORED PREKLAPA

                        foreach ($nastavniciPredavanje as $nastavnikPredavanje) {
                            $semestarRijeci = "ZIMSKI";
                            if ($semestar % 2 == 0) {
                                $semestarRijeci = "LJETNI";
                            }

                            //SREDJENO!!!!!!        //REDOVNI
                            $terminiProfesorRedovno = DB::table('terms')
                                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                                ->join('users', 'users.id', '=', 'user_term.user_id')
                                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                                ->select('terms.dan', 'terms.pocetak', 'terms.kraj', 'courses.ime')
                                ->where('terms.semestar', $semestarRijeci)
                                ->where('users.id', $nastavnikPredavanje)
                                ->where('terms.dan', $dayOfWeekText)
                                ->where('terms.aktivan', '1')
                                ->distinct()
                                ->get();

                            foreach ($terminiProfesorRedovno as $terminProfesorRedovno) {
                                //return $terminProfesorRedovno->pocetak;
                                if ($terminProfesorRedovno->pocetak >= $pocetakDanaVrijeme && $terminProfesorRedovno->pocetak < ($pocetakDanaVrijeme + $predavanje)) {
                                    $nasaoTermin = false;
                                }
                                if ($terminProfesorRedovno->kraj > $pocetakDanaVrijeme && $terminProfesorRedovno->kraj <= ($pocetakDanaVrijeme + $predavanje)) {
                                    $nasaoTermin = false;
                                }
                                if ($terminProfesorRedovno->pocetak < $pocetakDanaVrijeme && $terminProfesorRedovno->kraj > ($pocetakDanaVrijeme + $predavanje)) {
                                    $nasaoTermin = false;
                                }
                            }
                            //return $terminiProfesorRedovno;


                            //SREDJENO!!!!!!        //PPO
                            $terminiPanicPPO = DB::table('subject_p_p_s')
                                ->join('user_subject_p_p_s', 'subject_p_p_s.id', '=', 'user_subject_p_p_s.subject_p_p_id')
                                ->join('users', 'users.id', '=', 'user_subject_p_p_s.user_id')
                                ->join('lecture_periods', 'lecture_periods.subjectPP_id', '=', 'subject_p_p_s.id')
                                ->select('lecture_periods.day', 'lecture_periods.hours', 'lecture_periods.week', 'subject_p_p_s.course', 'subject_p_p_s.semester', 'subject_p_p_s.name as kolegij', 'users.name', 'users.surname')
                                ->where('users.id', $nastavnikPredavanje)
                                ->where('subject_p_p_s.semester', $semestarRijeci)
                                ->where('lecture_periods.day', $dayOfWeekFullText)
                                ->distinct()
                                ->get();

                            //


                            //if($nastavnikPredavanje === 9){
                            //return $nastavnikPredavanje;
                            //   return $terminiPanicPPO;
                            //}

                            $terminiDAtum = "";

                            foreach ($terminiPanicPPO as $terminPanicPPO) {
                                $dayOfWeekNumberPPO = 0;
                                $danTekst = $terminPanicPPO->day;

                                if ($danTekst === 'Ponedjeljak') {
                                    $dayOfWeekNumberPPO = 0;
                                } elseif ($danTekst === 'Utorak') {
                                    $dayOfWeekNumberPPO = 1;
                                } elseif ($danTekst === 'Srijeda') {
                                    $dayOfWeekNumberPPO = 2;
                                } elseif ($danTekst === 'Cetvrtak') {
                                    $dayOfWeekNumberPPO = 3;
                                } elseif ($danTekst === 'Petak') {
                                    $dayOfWeekNumberPPO = 4;
                                } else {
                                    // Code for any other day
                                }


                                $datumOdrzavanja = DB::table('weeks')
                                    ->select('start_day')
                                    ->where('name', $terminPanicPPO->week)
                                    ->where('course', $terminPanicPPO->course)
                                    ->where('semester', $terminPanicPPO->semester)
                                    ->distinct()
                                    ->get();

                                //return $datumOdrzavanja[0]->start_day;

                                //$dayOfWeekNumber 1-pom, 2-uto... treba smanjiti za jedan jer kreće od ponedjeljka
                                $datumOdrzavanjaPPOtermin = $datumOdrzavanja[0]->start_day;
                                $datumOdrzavanjaPPOterminDate = Carbon::createFromFormat('Y-m-d', $datumOdrzavanjaPPOtermin);
                                $datumOdrzavanjaPPOterminDate->addDays($dayOfWeekNumberPPO);


                                $hour = substr($terminPanicPPO->hours, 0, 2);
                                $hourInteger = (int)$hour;
                                //return $hourInteger;

                                //TU ISPITATI AKO SE NEKI OD TERMINA POKLAPA S PREDLOŽENIM TERMINOM
                                //imamo datum održavanja $datumOdrzavanjaPPOterminDate
                                //imamo vrijeme $hourInteger
                                if ($datumOdrzavanjaPPOterminDate->format('Y-m-d') === $pocetakDatumaKolegij->format('Y-m-d')) {
                                    if ($hourInteger >= $pocetakDanaVrijeme && $hourInteger < ($pocetakDanaVrijeme + $predavanje)) {
                                        $nasaoTermin = false;
                                    }
                                }

                                //return $datumOdrzavanja[0]->start_day;
                                //$date = \Carbon\Carbon::parse($datumOdrzavanjaPPOterminDate);
                                //$dateString = $date->format('d.m.y');
                                //$terminiDAtum .= "<br>" . $dateString;

                            }

                            //if ($nastavnikPredavanje === 9) {
                            //return $nastavnikPredavanje;
                            // return $terminiDAtum;
                            //}
                        }

                        //SAMO PROBA
                        //$popis[] = "" . $pocetakDanaVrijeme . " " . $pocetakDatumaKolegij->format('Y-m-d');
                        //if($brojac === 99){
                        //    return $popis;
                        //}

                        //AKO JE SVE U REDU, UBACI U RASPORED
                        //ID_PROFESORA, ID_KOLEGIJA, DATUM, VRIJEME_POC, $smjer, $studij, $godina, $semestar, 'Predavanje'
                        if ($nasaoTermin) {
                            $predavanjeGotovo = true;


                            //GLAVNI KOLEGIJ
                            //UBACI ZA SVE PROFESORE, ZA SVA VREMENA
                            //SVO VRIJEME
                            for ($i = $pocetakDanaVrijeme; $i < ($pocetakDanaVrijeme + $predavanje); $i++) {
                                //SVI PROFESORI
                                foreach ($nastavniciPredavanje as $nastavnikPredavanje) {
                                    //GLAVNI KOLEGIJ
                                    $partTime = new PartTime();
                                    $partTime->user_id = $nastavnikPredavanje; // Replace with the actual user_id
                                    $partTime->course_id = $idKolegij; // Replace with the actual course_id
                                    $partTime->date = $pocetakDatumaKolegij; // Replace with the actual date
                                    $partTime->vrijeme = $i; // Replace with the actual vrijeme
                                    $partTime->smjer = $smjer; // Replace with the actual smjer
                                    $partTime->studij = $studij; // Replace with the actual studij
                                    $partTime->godina = $godina; // Replace with the actual godina
                                    $partTime->semestar = $semestar; // Replace with the actual semestar
                                    $partTime->tip = 'Predavanje'; // Replace with the actual tip

                                    // Save the object to the database
                                    $partTime->save();
                                }
                            }

                            //SVI DODATNI KOLEGIJI
                            //UBACI ZA SVE PROFESORE, ZA SVA VREMENA
                            //SVO VRIJEME
                            for ($i = $pocetakDanaVrijeme; $i < ($pocetakDanaVrijeme + $predavanje); $i++) {
                                //SVI PROFESORI
                                foreach ($nastavniciPredavanje as $nastavnikPredavanje) {
                                    //SVI SMJEROVI - DODATNI KOLEGIJI
                                    foreach ($idZajednickiKolegijPredavanja as $idKolegijPredavanje) {
                                        $course = Course::select('smjer', 'razina_studija as studij', 'godina', 'semestar')
                                            ->find($idKolegijPredavanje);

                                        $partTime = new PartTime();
                                        $partTime->user_id = $nastavnikPredavanje; // Replace with the actual user_id
                                        $partTime->course_id = $idKolegijPredavanje; // Replace with the actual course_id
                                        $partTime->date = $pocetakDatumaKolegij; // Replace with the actual date
                                        $partTime->vrijeme = $i; // Replace with the actual vrijeme
                                        $partTime->smjer = $course->smjer; // Replace with the actual smjer
                                        $partTime->studij = $course->studij; // Replace with the actual studij
                                        $partTime->godina = $course->godina; // Replace with the actual godina
                                        $partTime->semestar = $course->semestar; // Replace with the actual semestar
                                        $partTime->tip = 'Predavanje'; // Replace with the actual tip

                                        // Save the object to the database
                                        $partTime->save();
                                    }
                                }
                            }
                        }
                    }
                } else {
                    $predavanjeGotovo = true;
                    //return "već postoji!!!";
                }
            }
            if ($vjezbe > 0) {

                //U SVAKOM IF-U
                //NA POČETKU SVAKOG IF-A EXTRA IF
                //AKO SE ZAJEDNO DRŽI S NEČIM ODMAH ISPITATI AKO VEĆ POSTOJI U SUSTAVU I NE UBACIVATI
                $results = PartTime::where('tip', 'Vjezbe')
                    ->where('course_id', $idKolegij)
                    ->get();
                if ($results->count() === 0) {
                    //$vjezbe - koliko traje
                    //$datumPocetka
                    //DEFINIRATI RANDOM TERMINE ZA SVAKI WHILE ZA VJEŽBE 
                    //POČEVŠI OD DATUMA DEFINIRANJA TERMINA ZA TU GODINU
                    $pocetakDanaVrijeme = 14;
                    $pocetakDatumaKolegij = $datumPocetka;
                    while (!$vjezbeGotovo) {
                        $pocetakDanaVrijeme += 1;
                        if ($pocetakDanaVrijeme + $vjezbe > 20) {
                            $pocetakDanaVrijeme = 15;
                            $pocetakDatumaKolegij->addDays(1);
                            if ($pocetakDatumaKolegij->isWeekend()) {
                                //return $pocetakDatumaKolegij;
                                $pocetakDatumaKolegij->addDays(2);
                            }
                        }
                        foreach ($nemaNastaveDatumiArray as $nemaNastaveDatumArray) {
                            //$nemaNastaveDate = Carbon::createFromFormat('Y-m-d', $nemaNastaveDatumArray);
                            //return $nemaNastaveDate;
                            if ($pocetakDatumaKolegij->format('Y-m-d') === $nemaNastaveDatumArray) {
                                //return "dada";
                                $pocetakDatumaKolegij->addDays(1);
                            }
                        }
                        //return $pocetakDatumaKolegij . " " . $pocetakDanaVrijeme;
                        //SREDI DAN DATUMA
                        $dayOfWeekNumber = $pocetakDatumaKolegij->format('w'); // 0 - ned, 1 -pon
                        //return $dayOfWeekNumber;
                        $dayOfWeekText = '';
                        $dayOfWeekFullText = '';
                        switch ($dayOfWeekNumber) {
                            case 1:
                                $dayOfWeekText = 'pon'; // 'pon' for Monday
                                $dayOfWeekFullText = 'Ponedjeljak';
                                break;
                            case 2:
                                $dayOfWeekText = 'uto'; // 'uto' for Tuesday
                                $dayOfWeekFullText = 'Utorak';
                                break;
                            case 3:
                                $dayOfWeekText = 'sri'; // 'sri' for Wednesday
                                $dayOfWeekFullText = 'Srijeda';
                                break;
                            case 4:
                                $dayOfWeekText = 'cet'; // 'cet' for Thursday
                                $dayOfWeekFullText = 'Cetvrtak';
                                break;
                            case 5:
                                $dayOfWeekText = 'pet'; // 'pet' for Friday
                                $dayOfWeekFullText = 'Petak';
                        }
                        //return $dayOfWeekText;

                        $nasaoTermin = true;

                        //SREDJENO!!!!!!    //ZA TAJ KOLEGIJ AKO JE NEŠTO VEĆ ZAUZETO U RASPOREDU IZVANREDNI
                        $partTimes = PartTime::where('smjer', $smjer)
                            ->where('date', $pocetakDatumaKolegij->format('Y-m-d'))
                            ->where('studij', $studij)
                            ->where('godina', $godina)
                            ->where('semestar', $semestar)
                            ->get();
                        //return $partTimes;
                        foreach ($partTimes as $partTime) {
                            if ($partTime->vrijeme >= $pocetakDanaVrijeme && $partTime->vrijeme < ($pocetakDanaVrijeme + $vjezbe)) {
                                $nasaoTermin = false;
                            }
                        }

                        //SREDJENO!!!!!!    //ZA SVAKI POVEZANI KOLEGIJ VIDJETI AKO SE U TIM IZVANREDNIM RASPOREDIMA NEŠTO PREKLAPA
                        foreach ($idZajednickiKolegijVjezbe as $idKolegijVjezbe) {
                            $course = Course::select('smjer', 'razina_studija as studij', 'godina', 'semestar')
                                ->find($idKolegijVjezbe);
                            $partTimes = PartTime::where('smjer', $course->smjer)
                                ->where('date', $pocetakDatumaKolegij->format('Y-m-d'))
                                ->where('studij', $course->studij)
                                ->where('godina', $course->godina)
                                ->where('semestar', $course->semestar)
                                ->get();
                            foreach ($partTimes as $partTime) {
                                if ($partTime->vrijeme >= $pocetakDanaVrijeme && $partTime->vrijeme < ($pocetakDanaVrijeme + $vjezbe)) {
                                    $nasaoTermin = false;
                                }
                            }
                        }
                        //$idZajednickiKolegijVjezbe

                        //SREDJENO!!!!!!    //ZA SVAKOG PROFESORA VIDJETI AKO SE IZVANREDNI RASPORED PREKLAPA
                        foreach ($nastavniciVjezbe as $nastavnikVjezbe) {
                            $partTimes = PartTime::where('user_id', $nastavnikVjezbe)
                                ->where('date', $pocetakDatumaKolegij->format('Y-m-d'))
                                ->get();
                            foreach ($partTimes as $partTime) {
                                if ($partTime->vrijeme >= $pocetakDanaVrijeme && $partTime->vrijeme < ($pocetakDanaVrijeme + $vjezbe)) {
                                    $nasaoTermin = false;
                                }
                            }
                            //return $nastavnikVjezbe;
                        }

                        //ZA SVAKOG PROFESORA VIDJETI AKO SE REDOVNI i PPO RASPORED PREKLAPA

                        foreach ($nastavniciVjezbe as $nastavnikVjezbe) {
                            $semestarRijeci = "ZIMSKI";
                            if ($semestar % 2 == 0) {
                                $semestarRijeci = "LJETNI";
                            }

                            //SREDJENO!!!!!!        //REDOVNI
                            $terminiProfesorRedovno = DB::table('terms')
                                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                                ->join('users', 'users.id', '=', 'user_term.user_id')
                                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                                ->select('terms.dan', 'terms.pocetak', 'terms.kraj', 'courses.ime')
                                ->where('terms.semestar', $semestarRijeci)
                                ->where('users.id', $nastavnikVjezbe)
                                ->where('terms.dan', $dayOfWeekText)
                                ->where('terms.aktivan', '1')
                                ->distinct()
                                ->get();

                            foreach ($terminiProfesorRedovno as $terminProfesorRedovno) {
                                //return $terminProfesorRedovno->pocetak;
                                if ($terminProfesorRedovno->pocetak >= $pocetakDanaVrijeme && $terminProfesorRedovno->pocetak < ($pocetakDanaVrijeme + $vjezbe)) {
                                    $nasaoTermin = false;
                                }
                                if ($terminProfesorRedovno->kraj > $pocetakDanaVrijeme && $terminProfesorRedovno->kraj <= ($pocetakDanaVrijeme + $vjezbe)) {
                                    $nasaoTermin = false;
                                }
                                if ($terminProfesorRedovno->pocetak < $pocetakDanaVrijeme && $terminProfesorRedovno->kraj > ($pocetakDanaVrijeme + $vjezbe)) {
                                    $nasaoTermin = false;
                                }
                            }
                            //return $terminiProfesorRedovno;


                            //SREDJENO!!!!!!        //PPO
                            $terminiPanicPPO = DB::table('subject_p_p_s')
                                ->join('user_subject_p_p_s', 'subject_p_p_s.id', '=', 'user_subject_p_p_s.subject_p_p_id')
                                ->join('users', 'users.id', '=', 'user_subject_p_p_s.user_id')
                                ->join('lecture_periods', 'lecture_periods.subjectPP_id', '=', 'subject_p_p_s.id')
                                ->select('lecture_periods.day', 'lecture_periods.hours', 'lecture_periods.week', 'subject_p_p_s.course', 'subject_p_p_s.semester', 'subject_p_p_s.name as kolegij', 'users.name', 'users.surname')
                                ->where('users.id', $nastavnikVjezbe)
                                ->where('subject_p_p_s.semester', $semestarRijeci)
                                ->where('lecture_periods.day', $dayOfWeekFullText)
                                ->distinct()
                                ->get();

                            //


                            //if($nastavnikVjezbe === 9){
                            //return $nastavnikVjezbe;
                            //   return $terminiPanicPPO;
                            //}

                            $terminiDAtum = "";

                            foreach ($terminiPanicPPO as $terminPanicPPO) {
                                $dayOfWeekNumberPPO = 0;
                                $danTekst = $terminPanicPPO->day;

                                if ($danTekst === 'Ponedjeljak') {
                                    $dayOfWeekNumberPPO = 0;
                                } elseif ($danTekst === 'Utorak') {
                                    $dayOfWeekNumberPPO = 1;
                                } elseif ($danTekst === 'Srijeda') {
                                    $dayOfWeekNumberPPO = 2;
                                } elseif ($danTekst === 'Cetvrtak') {
                                    $dayOfWeekNumberPPO = 3;
                                } elseif ($danTekst === 'Petak') {
                                    $dayOfWeekNumberPPO = 4;
                                } else {
                                    // Code for any other day
                                }


                                $datumOdrzavanja = DB::table('weeks')
                                    ->select('start_day')
                                    ->where('name', $terminPanicPPO->week)
                                    ->where('course', $terminPanicPPO->course)
                                    ->where('semester', $terminPanicPPO->semester)
                                    ->distinct()
                                    ->get();

                                //return $datumOdrzavanja[0]->start_day;

                                //$dayOfWeekNumber 1-pom, 2-uto... treba smanjiti za jedan jer kreće od ponedjeljka
                                $datumOdrzavanjaPPOtermin = $datumOdrzavanja[0]->start_day;
                                $datumOdrzavanjaPPOterminDate = Carbon::createFromFormat('Y-m-d', $datumOdrzavanjaPPOtermin);
                                $datumOdrzavanjaPPOterminDate->addDays($dayOfWeekNumberPPO);


                                $hour = substr($terminPanicPPO->hours, 0, 2);
                                $hourInteger = (int)$hour;
                                //return $hourInteger;

                                //TU ISPITATI AKO SE NEKI OD TERMINA POKLAPA S PREDLOŽENIM TERMINOM
                                //imamo datum održavanja $datumOdrzavanjaPPOterminDate
                                //imamo vrijeme $hourInteger
                                if ($datumOdrzavanjaPPOterminDate->format('Y-m-d') === $pocetakDatumaKolegij->format('Y-m-d')) {
                                    if ($hourInteger >= $pocetakDanaVrijeme && $hourInteger < ($pocetakDanaVrijeme + $vjezbe)) {
                                        $nasaoTermin = false;
                                    }
                                }

                                //return $datumOdrzavanja[0]->start_day;
                                //$date = \Carbon\Carbon::parse($datumOdrzavanjaPPOterminDate);
                                //$dateString = $date->format('d.m.y');
                                //$terminiDAtum .= "<br>" . $dateString;

                            }

                            //if ($nastavnikVjezbe === 9) {
                            //return $nastavnikVjezbe;
                            // return $terminiDAtum;
                            //}
                        }

                        //SAMO PROBA
                        //$popis[] = "" . $pocetakDanaVrijeme . " " . $pocetakDatumaKolegij->format('Y-m-d');
                        //if($brojac === 99){
                        //    return $popis;
                        //}

                        //AKO JE SVE U REDU, UBACI U RASPORED
                        //ID_PROFESORA, ID_KOLEGIJA, DATUM, VRIJEME_POC, $smjer, $studij, $godina, $semestar, 'Vjezbe'
                        if ($nasaoTermin) {
                            $vjezbeGotovo = true;


                            //GLAVNI KOLEGIJ
                            //UBACI ZA SVE PROFESORE, ZA SVA VREMENA
                            //SVO VRIJEME
                            for ($i = $pocetakDanaVrijeme; $i < ($pocetakDanaVrijeme + $vjezbe); $i++) {
                                //SVI PROFESORI
                                foreach ($nastavniciVjezbe as $nastavnikVjezbe) {
                                    //GLAVNI KOLEGIJ
                                    $partTime = new PartTime();
                                    $partTime->user_id = $nastavnikVjezbe; // Replace with the actual user_id
                                    $partTime->course_id = $idKolegij; // Replace with the actual course_id
                                    $partTime->date = $pocetakDatumaKolegij; // Replace with the actual date
                                    $partTime->vrijeme = $i; // Replace with the actual vrijeme
                                    $partTime->smjer = $smjer; // Replace with the actual smjer
                                    $partTime->studij = $studij; // Replace with the actual studij
                                    $partTime->godina = $godina; // Replace with the actual godina
                                    $partTime->semestar = $semestar; // Replace with the actual semestar
                                    $partTime->tip = 'Vjezbe'; // Replace with the actual tip

                                    // Save the object to the database
                                    $partTime->save();
                                }
                            }

                            //SVI DODATNI KOLEGIJI
                            //UBACI ZA SVE PROFESORE, ZA SVA VREMENA
                            //SVO VRIJEME
                            for ($i = $pocetakDanaVrijeme; $i < ($pocetakDanaVrijeme + $vjezbe); $i++) {
                                //SVI PROFESORI
                                foreach ($nastavniciVjezbe as $nastavnikVjezbe) {
                                    //SVI SMJEROVI - DODATNI KOLEGIJI
                                    foreach ($idZajednickiKolegijVjezbe as $idKolegijVjezbe) {
                                        $course = Course::select('smjer', 'razina_studija as studij', 'godina', 'semestar')
                                            ->find($idKolegijVjezbe);

                                        $partTime = new PartTime();
                                        $partTime->user_id = $nastavnikVjezbe; // Replace with the actual user_id
                                        $partTime->course_id = $idKolegijVjezbe; // Replace with the actual course_id
                                        $partTime->date = $pocetakDatumaKolegij; // Replace with the actual date
                                        $partTime->vrijeme = $i; // Replace with the actual vrijeme
                                        $partTime->smjer = $course->smjer; // Replace with the actual smjer
                                        $partTime->studij = $course->studij; // Replace with the actual studij
                                        $partTime->godina = $course->godina; // Replace with the actual godina
                                        $partTime->semestar = $course->semestar; // Replace with the actual semestar
                                        $partTime->tip = 'Vjezbe'; // Replace with the actual tip

                                        // Save the object to the database
                                        $partTime->save();
                                    }
                                }
                            }
                        }
                    }
                } else {
                    $vjezbeGotovo = true;
                    //return "već postoji!!!";
                }
            }
            //}
        }

        //return "gotovo";
        //VRATIT SE NA STRANICU GDJE SE GENERIRA S DODATNOM PORUKOM
        $smjer = request('smjer');
        $studij = request('studij');
        $godina = intval(request('godina'));
        $semestar = intval(request('semestar'));
        return view('timetableIZV.indexcreate', [
            'success' => 'Uspješno generiran raspored',
            'godina' => ('' . $godina),
            'semestar' => ('' . $semestar),
            'smjer' => $smjer,
            'studij' => $studij,
            'datumPocetka' => $datumPocetkaString,
            'neradniDani' => $nemaNastave
        ]);
    }


    public function deleteschedule(Request $request)
    {
        $smjerDEL = request('smjerDEL');
        $studijDEL = request('studijDEL');
        $godinaDEL = intval(request('godinaDEL'));
        $semestarDEL = intval(request('semestarDEL'));

        if ($godinaDEL === 3 && $studijDEL === 'DIPL') {
            $godinaDEL = 2;
        }

        $kolegijiZaRaspored = Course::where('smjer', $smjerDEL)
            ->where('razina_studija', $studijDEL)
            ->where('godina', $godinaDEL)
            ->where('semestar', $semestarDEL)->get();

        //info('This is a message from the console helper.');
        //return $kolegijiZaRaspored;


        foreach ($kolegijiZaRaspored as $kolegijZaRaspored) {
            //if($kolegijZaRaspored->id == 637){
            $idKolegij = $kolegijZaRaspored->id;  //618-LMPP, 637, 660 jardas 3 kolegija   //460 Panić-Cule
            $terminiRS1 = DB::table('terms')
                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                ->join('users', 'users.id', '=', 'user_term.user_id')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.id as idtermina', 'terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'users.id', 'users.name', 'users.surname')
                ->where('courses.id', $idKolegij)
                ->where('terms.aktivan', '1')
                ->get();

            //return $terminiRS1;

            //OPTREĆENJE SVAKOG KOLEGIJA + TKO IZVODI + DRŽI LI SE ZAJEDNIČKO S NEKIM KOLEGIJEM
            $idZajednickiKolegijPredavanja = [];
            $idZajednickiKolegijVjezbe = [];
            foreach ($terminiRS1 as $terminRS1) {
                if ($terminRS1->tip === "PREDAVANJE") {
                    $zajednickiKolegiji = DB::table('terms')
                        ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                        ->join('courses', 'courses.id', '=', 'course_term.course_id')
                        ->select('courses.id as idkolegij')
                        ->where('terms.id', $terminRS1->idtermina)
                        ->where('terms.aktivan', '1')
                        ->get();
                    foreach ($zajednickiKolegiji as $zajednickiKolegij) {
                        if (!in_array($zajednickiKolegij->idkolegij, $idZajednickiKolegijPredavanja) && $zajednickiKolegij->idkolegij !== $idKolegij) {
                            $idZajednickiKolegijPredavanja[] = $zajednickiKolegij->idkolegij;
                        }
                    }
                    //return $idZajednickiKolegijPredavanja;                        
                } else {
                    $zajednickiKolegiji = DB::table('terms')
                        ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                        ->join('courses', 'courses.id', '=', 'course_term.course_id')
                        ->select('courses.id as idkolegij')
                        ->where('terms.id', $terminRS1->idtermina)
                        ->where('terms.aktivan', '1')
                        ->get();
                    foreach ($zajednickiKolegiji as $zajednickiKolegij) {
                        if (!in_array($zajednickiKolegij->idkolegij, $idZajednickiKolegijVjezbe) && $zajednickiKolegij->idkolegij !== $idKolegij) {
                            $idZajednickiKolegijVjezbe[] = $zajednickiKolegij->idkolegij;
                        }
                    }
                    //return $zajednickiKolegiji;
                }
            }
            PartTime::where('course_id', $idKolegij)->delete();
            foreach ($idZajednickiKolegijVjezbe as $idZajednickiKolegijVjezbeJedan) {
                PartTime::where('course_id', $idZajednickiKolegijVjezbeJedan)
                    ->where('tip', 'Vjezbe') // Additional condition for 'tip' column
                    ->delete();
            }
            foreach ($idZajednickiKolegijPredavanja as $idZajednickiKolegijPredavanjaJedan) {
                PartTime::where('course_id', $idZajednickiKolegijPredavanjaJedan)
                    ->where('tip', 'Predavanje') // Additional condition for 'tip' column
                    ->delete();
            }
            //}
        }
        //return $idZajednickiKolegijPredavanja;  
        //return $idZajednickiKolegijVjezbe;

        return view('timetableIZV.indexcreate', [
            'success' => 'Uspješno izbrisan raspored',
            'godinaDEL' => ('' . $godinaDEL),
            'semestarDEL' => ('' . $semestarDEL),
            'smjerDEL' => $smjerDEL,
            'studijDEL' => $studijDEL
        ]);
    }

    public function deletescheduleall(Request $request)
    {
        $semestarZLJ = request('semestarZLJ');
        $semestriZaBrisanje = [];
        if ($semestarZLJ == 'ZIMSKI') {
            $semestriZaBrisanje = [1, 3, 5];
        } else {
            $semestriZaBrisanje = [2, 4, 6];
        }
        //return $semestriZaBrisanje;

        PartTime::whereIn('semestar', $semestriZaBrisanje)->delete();

        return view('timetableIZV.indexcreate', [
            'success' => 'Uspješno izbrisani rasporedi za ' . $semestarZLJ . " semestar",
        ]);
    }


    public function indexcreate()
    {
        return view('timetableIZV.indexcreate');
    }


    public function indextimetable(Request $request)
    {
        $timeTableFlag = TimetableFlag::all()->first();
        if (auth()->check()) {
            if ($timeTableFlag->aktivanIzvanredni == 0 && auth()->user()->is_admin != 1) {
                return view('timetable.index-construction')->with('poruka', $timeTableFlag->komentarIzvanredni);
            }
        } else {
            if ($timeTableFlag->aktivanIzvanredni == 0) {
                return view('timetable.index-construction')->with('poruka', $timeTableFlag->komentarIzvanredni);
            }
        }



        //--------------------------------- SVE DOBIVAM IZ UPITA ---------------- POCETAK ------------------------//

        $smjer = request('smjerIZV');
        $studij = request('studijIZV');

        $godina = intval(request('godinaIZV'));
        if ($godina === 3 && $studij === 'DIPL') {
            $godina = 2;
        }

        $semestarZimaLjeto = request('semestarIZV');
        //return $semestarZimaLjeto;
        $semestar = 1;
        if ($semestarZimaLjeto === 'LJETNI') {
            $semestar = ($godina - 1) * 2 + 2;
        } else {
            $semestar = ($godina - 1) * 2 + 1;
        }

        $prethodniSljedeci = request('prethodniSljedeci');
        $datumTrenutnogTjednaPon = request('datumTrenutnogTjednaPon');

        //return $prethodniSljedeci;

        //$datumPocetkaString = request('datumPocetka');
        //$datumPocetka = \Carbon\Carbon::createFromFormat('Y-m-d', $datumPocetkaString);
        //OVO ĆU SVE DOBITI OD UPITA PRIJE GENERIRANJA RASPOREDA
        //UPIT KOJI DATUM POČINJE RASPORED
        //$datumPocetka = Carbon::create(2023, 11, 20); // Year, Month, Day
        //return $datumPocetka->format('Y-m-d');

        //OVO ĆU SVE DOBITI OD UPITA PRIJE GENERIRANJA RASPOREDA
        //KOJE DATUME SE NE RADI
        //$nemaNastave = request('neradniDani');
        //$nemaNastave = "2023-11-01;2023-12-01";  // upisati 'format Y-m-d' s NULAMA
        //$nemaNastaveDatumiArray = explode(';', $nemaNastave);
        //$datumPocetka->addDays(1);
        //return $datumPocetka;

        //--------------------------------- SVE DOBIVAM IZ UPITA --------------- KRAJ -------------------------//


        //GLAVNA PROBA ---------------- POCETAK -----------------------------------------------------------------------

        $partTimesProba = DB::table('part_times')
            ->join('users', 'users.id', '=', 'part_times.user_id')
            ->join('courses', 'courses.id', '=', 'part_times.course_id')
            ->select('date', 'vrijeme', 'part_times.smjer', 'part_times.studij', 'part_times.godina', 'part_times.semestar', 'part_times.tip', 'users.surname', 'courses.ime')
            ->where('part_times.smjer', $smjer)
            ->where('part_times.studij', $studij)
            ->where('part_times.godina', $godina)
            ->where('part_times.semestar', $semestar)
            ->get();

        $partTimesProbaArray = [];

        foreach ($partTimesProba as $partTimeProba) {
            $nema = false;
            foreach ($partTimesProbaArray as $partTimeProbaArray) {
                if ($partTimeProbaArray->date === $partTimeProba->date && $partTimeProbaArray->vrijeme === $partTimeProba->vrijeme) {
                    $nema = true;
                }
            }
            if (!$nema) {
                $partTimesProbaArray[] = $partTimeProba;
            }
        }
        //return $partTimesProbaArray;

        if (empty($partTimesProbaArray)) {
            return view('timetableIZV.parttimetable')->with('nemaRasporeda', 'nemaRasporeda');
        }

        //PRONADJI NAJMANJI DATUM OD SVIH
        $dates = [];

        foreach ($partTimesProbaArray as $partTimeProbaArray) {
            $dates[] = $partTimeProbaArray->date;
        }

        $carbonDates = array_map(function ($date) {
            return Carbon::parse($date);
        }, $dates);
        $minDate = min($carbonDates);
        $maxDate = max($carbonDates);
        $minDatePon = $minDate->startOfWeek();

        //return $partTimesProbaArray;

        return view('timetableIZV.parttimetable', [
            'partTimesProbaArray' => $partTimesProbaArray,
            'minDate' => $minDate,
            'maxDate' => $maxDate,
            'minDatePon' => $minDatePon,
            'smjer' => $smjer,
            'studij' => $studij,
            'godina' => $godina,
            'semestar' => $semestar,
            'prethodniSljedeci' => $prethodniSljedeci,
            'datumTrenutnogTjednaPon' => $datumTrenutnogTjednaPon
        ]);

        //GLAVNA PROBA -------------------- KRAJ -------------------------------------------------------------------
    }
}
