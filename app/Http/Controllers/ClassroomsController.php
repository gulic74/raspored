<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Exports\ClassroomsExport;
use Maatwebsite\Excel as Excell;
use Excel;

class ClassroomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ucioniceClass = DB::table('classrooms')
            ->select('id', 'ime', 'broj_mjesta')
            ->orderBy('ime', 'ASC')
            ->get();

        $ucionice = [];
        foreach ($ucioniceClass as $ucionicaClass) {
            $jednaStavka = [$ucionicaClass->id, $ucionicaClass->ime, $ucionicaClass->broj_mjesta];
            array_push($ucionice, $jednaStavka);
        }

        return view('classrooms.index')->with('ucionice', $ucionice);
    }

    public function occupancy()
    {
        //$rasporedZima = [];
        //$rasporedLjeto = [];
        //$osobniPodaci=[1,2,3];
        return view('classrooms.occupancy');
        //return "bravo occupancy";
    }

    public function csv($id, Request $request)
    {

        $val = $this->validate($request, [
            'datumPocetka' => ['required', 'date_format:Y-m-d'],
            'datumZavrsetka' => ['required', 'date_format:Y-m-d', 'after:datumPocetka'],
            'semestar' => ['required', 'string'],
        ]);

        //skupiti podatke
        //ucitati datum pocetka (ponedjeljak) i datum zavrsetka semestra (petak)
        //učitati semestar - opterećenje koji semestar prilikom UPITA U BAZU

        $timestampPocetak = strtotime($request->input('datumPocetka'));
        $danPocetak = (int) date('d', $timestampPocetak);
        $mjesecPocetak = (int) date('m', $timestampPocetak);
        $godinaPocetak = (int) date('Y', $timestampPocetak);

        $timestampKraj = strtotime($request->input('datumZavrsetka'));
        $danKraj = (int) date('d', $timestampKraj);
        $mjesecKraj = (int) date('m', $timestampKraj);
        $godinaKraj = (int) date('Y', $timestampKraj);

        $semestar = $request->input('semestar');

        //učitati cijelo opterećenje i napraviti kratice kolegija
        $terminiSemestar = DB::table('terms')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'courses.smjer', 'courses.razina_studija', 'courses.godina')
            ->where('terms.semestar', $semestar)
            ->where('terms.aktivan', '1')
            ->where('classrooms.id', $id)
            ->get();

        $rasporedSemestar = [];
        foreach ($terminiSemestar as $termin) {
            $nasao = false;
            $godinaStudija = 1;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena, ""];
            if ($termin->razina_studija == "PRED") {
                $jednaStavka[9] = $termin->smjer[0] . $termin->godina;
                $godinaStudija = $termin->godina;
            } else {
                $jednaStavka[9] = $termin->smjer[0] . ($termin->godina + 3);
                $godinaStudija = $termin->godina + 3;
            }
            foreach ($rasporedSemestar as &$rasporedJedan) {
                if ($rasporedJedan[1] === $termin->id) {
                    $nasao = true;
                    if(Str::contains($rasporedJedan[9], ("" . $godinaStudija))){
                        $rasporedJedan[9] = Str::replaceLast(("" . $godinaStudija), ($termin->smjer[0] . "" . $godinaStudija), $rasporedJedan[9]);
                    } else {
                        $rasporedJedan[9] = $rasporedJedan[9] . $termin->smjer[0] . "" . $godinaStudija;
                    }
                }
            }
            if (!$nasao) {
                array_push($rasporedSemestar, $jednaStavka);
            }
        }


        $data=[];
        $brojacReda = 1;
        //return $rasporedSemestar;
        foreach ($rasporedSemestar as &$rasporedJedan) {
            $words = explode(" ", $rasporedJedan[0]);
            $acronym = "";

            foreach ($words as $w) {
                if (strcmp($w, "(I)") == 0) {
                    $acronym .= $w;
                } else {
                    $acronym .= $w[0];
                    if (strlen($w) > 1) {
                        if ($w[0] . $w[1] == 'č') {
                            $acronym .= $w[1];
                        }
                    }
                }
            }

            $rasporedJedan[0] = Str::upper($acronym);
            //PREDAVANJE ili VJEŽBE
            if ($rasporedJedan[3] === "VJEŽBE") {
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
                $rasporedJedan[9] = Str::lower($rasporedJedan[9]);
            }
            foreach ($terminiSemestar as $termin) {
                if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                }
            }
            if (Str::endsWith($rasporedJedan[2], '/')) {
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
            }

            $rasporedJedan[0] = $rasporedJedan[9] . ":" . Str::replaceLast(" VJ", "", $rasporedJedan[0]);

            $daysNumber = 0;
            if($rasporedJedan[5] == 'uto'){
                $daysNumber = 1;
            }else if($rasporedJedan[5] == 'sri'){
                $daysNumber = 2;
            }
            else if($rasporedJedan[5] == 'cet'){
                $daysNumber = 3;
            }
            else if($rasporedJedan[5] == 'pet'){
                $daysNumber = 4;
            }
            else if($rasporedJedan[5] == 'sub'){
                $daysNumber = 5;
            }

            $timestampPocetak = strtotime($request->input('datumPocetka'). ' + ' . $daysNumber . ' days');
            $danPocetak = (int) date('d', $timestampPocetak);
            $mjesecPocetak = (int) date('m', $timestampPocetak);
            $godinaPocetak = (int) date('Y', $timestampPocetak);

            array_push($data, [$brojacReda . "," . $rasporedJedan[0] . ",," . $rasporedJedan[2] . ",Predavanje," . $danPocetak . "," . $mjesecPocetak . "," . $godinaPocetak ."," . $rasporedJedan[6] . ",00,," . $danPocetak . "," . $mjesecPocetak . "," . $godinaPocetak ."," . $rasporedJedan[7] . ",00,,2," . $danKraj . "," . $mjesecKraj . "," . $godinaKraj]);
            $brojacReda++;
        }

        //return $rasporedSemestar; 

        


        // 1) redni broj podatka    -------------- BROJAČ
        // 2) sve u kraticama kao i opterećenje  npr. b4:BPS       -------------- BAZA
        // 3) prazno
        // 4) učionica   -------------- BAZA
        // 5) "Predavanje"
        // 6) dan početka predavanja  -------------- BAZA
        //ako je pon -> dan pocetka semestra -------------------------   INPUT  (+ mjesec i godina početka)
        //ako je uto -> dan pocetka semestra + 1 dan 
        //ako je sri -> dan pocetka semestra + 2 dan
        //ako je cet -> dan pocetka semestra + 3 dan
        //ako je pet -> dan pocetka semestra + 4 dan
        // 7) mjesec početka predavanja     -------------------------   INPUT  
        // 8) godina početka predavanja     -------------------------   INPUT  
        // 9) sat početka predavanja           -------------- BAZA
        // 10) "00" 
        // 11) prazno
        // 12) dan kraja predavanja     -------------------------   INPUT  (+ mjesec i godina početka)
        //ako je pon -> dan pocetka semestra
        //ako je uto -> dan pocetka semestra + 1 dan 
        //ako je sri -> dan pocetka semestra + 2 dan
        //ako je cet -> dan pocetka semestra + 3 dan
        //ako je pet -> dan pocetka semestra + 4 dan
        // 13) mjesec kraja predavanja    -------------------------   INPUT 
        // 14) godina kraja predavanja     -------------------------   INPUT 
        // 15) sat kraja predavanja             -------------- BAZA
        // 16) "00"
        // 17) prazno
        // 18) 2
        // 19) dan kraja semestra  -------------------------   INPUT
        // 20) mjesec kraja semestra  -------------------------   INPUT
        // 21) godina kraja semestra  -------------------------   INPUT        

        $export = new ClassroomsExport($data);

        //return (new ClassroomsExport($data))->array('invoices.csv', \Maatwebsite\Excel\Excel::CSV, [
        // 'Content-Type' => 'text/csv',]);

        return Excel::download($export, 'ucionicaOpterecenje.csv', Excell\Excel::CSV, [
            'Content-Type' => 'text/csv',
        ]);
    }

    public function pdf($id, Request $request)
    {
        $val = $this->validate($request, [
            'semestarPDF' => ['required', 'string'],
        ]);

        $semestar = $request->input('semestarPDF');

        $terminiSemestar = DB::table('terms')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'courses.smjer', 'courses.razina_studija', 'courses.godina')
            ->where('terms.semestar', $semestar)
            ->where('terms.aktivan', '1')
            ->where('classrooms.id', $id)
            ->get();

        $rasporedSemestar = [];
        foreach ($terminiSemestar as $termin) {
            $nasao = false;
            $godinaStudija = 1;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena, ""];
            if ($termin->razina_studija == "PRED") {
                $jednaStavka[9] = $termin->smjer[0] . $termin->godina;
                $godinaStudija = $termin->godina;
            } else {
                $jednaStavka[9] = $termin->smjer[0] . ($termin->godina + 3);
                $godinaStudija = $termin->godina + 3;
            }
            foreach ($rasporedSemestar as &$rasporedJedan) {
                if ($rasporedJedan[1] === $termin->id) {
                    $nasao = true;
                    if(Str::contains($rasporedJedan[9], ("" . $godinaStudija))){
                        $rasporedJedan[9] = Str::replaceLast(("" . $godinaStudija), ($termin->smjer[0] . "" . $godinaStudija), $rasporedJedan[9]);
                    } else {
                        $rasporedJedan[9] = $rasporedJedan[9] . $termin->smjer[0] . "" . $godinaStudija;
                    }
                }
            }
            if (!$nasao) {
                array_push($rasporedSemestar, $jednaStavka);
            }
        }


        $data=[];
        $brojacReda = 1;
        //return $rasporedSemestar;
        foreach ($rasporedSemestar as &$rasporedJedan) {
            $words = explode(" ", $rasporedJedan[0]);
            $acronym = "";

            foreach ($words as $w) {
                if (strcmp($w, "(I)") == 0) {
                    $acronym .= $w;
                } else {
                    $acronym .= $w[0];
                    if (strlen($w) > 1) {
                        if ($w[0] . $w[1] == 'č') {
                            $acronym .= $w[1];
                        }
                    }
                }
            }

            $rasporedJedan[0] = Str::upper($acronym);
            //PREDAVANJE ili VJEŽBE
            if ($rasporedJedan[3] === "VJEŽBE") {
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
                $rasporedJedan[9] = Str::lower($rasporedJedan[9]);
            }
            foreach ($terminiSemestar as $termin) {
                if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                }
            }
            if (Str::endsWith($rasporedJedan[2], '/')) {
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
            }

            $rasporedJedan[0] = $rasporedJedan[9] . ":" . Str::replaceLast(" VJ", "", $rasporedJedan[0]);
        }

        $podaci = [];

        foreach ($rasporedSemestar as &$rasporedJedan) {
            $jednaStavka = [$rasporedJedan[0], $rasporedJedan[2], $rasporedJedan[5], $rasporedJedan[6], $rasporedJedan[7], $semestar];
            array_push($podaci, $jednaStavka);
        }



        

        //return $podaci;
        //return $rasporedSemestar;


        //******************PDF napraviti****************//

        return "pdf";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "bravo detalji + zauzetost";

        $terminiZimski = DB::table('terms')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'courses.smjer', 'courses.razina_studija', 'courses.godina')
            ->where('terms.semestar', 'ZIMSKI')
            ->where('terms.aktivan', '1')
            ->where('classrooms.id', $id)
            ->get();

        //return $terminiZimski;

        $rasporedZima = [];
        foreach ($terminiZimski as $termin) {
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena, ""];
            if ($termin->razina_studija == "PRED") {
                $jednaStavka[9] = $termin->smjer[0] . $termin->godina;
            } else {
                $jednaStavka[9] = $termin->smjer[0] . ($termin->godina + 3);
            }
            foreach ($rasporedZima as $rasporedJedan) {
                if ($rasporedJedan[1] === $termin->id) {
                    $nasao = true;
                }
            }
            if (!$nasao) {
                array_push($rasporedZima, $jednaStavka);
            }
        }
        foreach ($rasporedZima as &$rasporedJedan) {
            $words = explode(" ", $rasporedJedan[0]);
            $acronym = "";

            foreach ($words as $w) {
                if (strcmp($w, "(I)") == 0) {
                    $acronym .= $w;
                } else {
                    $acronym .= $w[0];
                    if (strlen($w) > 1) {
                        if ($w[0] . $w[1] == 'č') {
                            $acronym .= $w[1];
                        }
                    }
                }
            }

            $rasporedJedan[0] = Str::upper($acronym);
            //PREDAVANJE ili VJEŽBE
            if ($rasporedJedan[3] === "VJEŽBE") {
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
            }
            foreach ($terminiZimski as $termin) {
                if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                }
            }
            if (Str::endsWith($rasporedJedan[2], '/')) {
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
            }
        }

        /*$bezVeze = DB::table('terms')
                    ->select('terms.tip', 'terms.grupa')
                    ->where('terms.semestar', 'LJETNI')
                    ->get();*/

        $terminiLjetni = DB::table('terms')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'courses.smjer', 'courses.razina_studija', 'courses.godina')
            ->where('terms.semestar', 'LJETNI')
            ->where('terms.aktivan', '1')
            ->where('classrooms.id', $id)
            ->get();

        $rasporedLjeto = [];
        foreach ($terminiLjetni as $termin) {
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena, ""];
            if ($termin->razina_studija == "PRED") {
                $jednaStavka[9] = $termin->smjer[0] . $termin->godina;
            } else {
                $jednaStavka[9] = $termin->smjer[0] . ($termin->godina + 3);
            }
            foreach ($rasporedLjeto as $rasporedJedanL) {
                if ($rasporedJedanL[1] === $termin->id) {
                    $nasao = true;
                }
            }
            if (!$nasao) {
                array_push($rasporedLjeto, $jednaStavka);
            }
        }
        foreach ($rasporedLjeto as &$rasporedJedanL) {

            $words = explode(" ", $rasporedJedanL[0]);
            $acronym = "";

            foreach ($words as $w) {
                if (strcmp($w, "(I)") == 0) {
                    $acronym .= $w;
                } else {
                    $acronym .= $w[0];
                    if (strlen($w) > 1) {
                        if ($w[0] . $w[1] == 'č') {
                            $acronym .= $w[1];
                        }
                    }
                }
            }

            $rasporedJedanL[0] = Str::upper($acronym);
            //PREDAVANJE ili VJEŽBE
            if ($rasporedJedanL[3] === "VJEŽBE") {
                $rasporedJedanL[0] = $rasporedJedanL[0] . " " . $rasporedJedanL[4];
            }
            foreach ($terminiLjetni as $termin) {
                if ($rasporedJedanL[1] === $termin->id && !Str::contains($rasporedJedanL[2], $termin->ucionica)) {
                    $rasporedJedanL[2] = $rasporedJedanL[2] . $termin->ucionica . "/";
                }
            }
            if (Str::endsWith($rasporedJedanL[2], '/')) {
                $rasporedJedanL[2] = Str::substr($rasporedJedanL[2], 0, Str::length($rasporedJedanL[2]) - 1);
            }
        }

        $ucioniceClass = DB::table('classrooms')
            ->select('id', 'ime', 'broj_mjesta')
            ->where('classrooms.id', $id)
            ->get();

        $ucionice = [];
        foreach ($ucioniceClass as $ucionicaClass) {
            $jednaStavka = [$ucionicaClass->id, $ucionicaClass->ime, $ucionicaClass->broj_mjesta];
            array_push($ucionice, $jednaStavka);
        }

        //return $profesori[0];
        //return $rasporedLjeto;
        //return $rasporedZima;

        return view('classrooms.show')->with('rasporedZima', $rasporedZima)->with('rasporedLjeto', $rasporedLjeto)->with('osobniPodaci', $ucionice[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ucioniceClass = DB::table('classrooms')
            ->select('id', 'ime', 'broj_mjesta')
            ->where('classrooms.id', $id)
            ->get();

        $ucionice = [];
        foreach ($ucioniceClass as $ucionicaClass) {
            $jednaStavka = [$ucionicaClass->id, $ucionicaClass->ime, $ucionicaClass->broj_mjesta];
            array_push($ucionice, $jednaStavka);
        }
        return view('classrooms.edit')->with('ucionice', $ucionice[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
