<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TermsController extends Controller
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
        $termini = DB::table('terms')
            ->join('user_term', 'terms.id', '=', 'user_term.term_id')
            ->join('users', 'users.id', '=', 'user_term.user_id')
            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
            ->join('courses', 'courses.id', '=', 'course_term.course_id')
            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.aktivan', 'terms.kraj', 'terms.komentar', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'courses.smjer', 'terms.id', 'users.name', 'users.surname')
            ->get();

        $raspored = [];
        foreach ($termini as $termin) {
            $nasao = false;
            //$jednaStavka = ["", $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, "", $termin->komentar, $termin->napomena];
            foreach ($raspored as $rasporedJedan) {
                if ($rasporedJedan[1] === $termin->id) {
                    $nasao = true;
                }
            }
            if (!$nasao) {
                $jednaStavka = ["", $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, "", $termin->komentar, $termin->napomena, $termin->kraj, $termin->aktivan];
                array_push($raspored, $jednaStavka);
            }
        }
        foreach ($raspored as &$rasporedJedan) {
            foreach ($termini as $termin) {
                if ($rasporedJedan[1] === $termin->id) {
                    if (!Str::contains($rasporedJedan[2], $termin->ucionica)) {
                        $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                    }
                    if (!Str::contains($rasporedJedan[7], ($termin->surname . " " . $termin->name))) {
                        $rasporedJedan[7] = $rasporedJedan[7] . $termin->surname . " " . $termin->name . "/";
                    }
                    if (!Str::contains($rasporedJedan[0], ($termin->ime . " " . $termin->smjer))) {
                        $rasporedJedan[0] = $rasporedJedan[0] . $termin->ime . " " . $termin->smjer . "/";
                    }
                }
            }
            if (Str::endsWith($rasporedJedan[2], '/')) {
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
            }
            if (Str::endsWith($rasporedJedan[7], '/')) {
                $rasporedJedan[7] = Str::substr($rasporedJedan[7], 0, Str::length($rasporedJedan[7]) - 1);
            }
            if (Str::endsWith($rasporedJedan[0], '/')) {
                $rasporedJedan[0] = Str::substr($rasporedJedan[0], 0, Str::length($rasporedJedan[0]) - 1);
            }
        }

        return view('terms.index')->with('raspored', $raspored);
        //return view('terms.index')->with('usersFirms', $usersFirms);
        //return redirect('terms')->with('success', 'Kompanija je uspješno registrirana');
        //return "bravo";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terms.create');
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

    public function addregular(Request $request)
    {
        $terms = Term::all();
        foreach ($terms as $term) {
            if($term->aktivan == 0){
                if(!Str::contains($term->komentar, '-redovni-deaktivirani-')){
                    $term->komentar = "-redovni-deaktivirani-" . $term->komentar;
                }                
            }else{
                if(!Str::contains($term->komentar, 'redovni')){
                    $term->komentar = "-redovni-" . $term->komentar;
                }
            }            
            $term->save();
        }
        $message = "Uspješno dodan komentar 'redovni' i 'redovni-deaktivirani'";
        return view('freeze')->with('message', $message);
        //return "freezeregular";
    }

    public function freezeregular(Request $request)
    {
        $terms = Term::where('aktivan', 1)->where('semestar', 'ZIMSKI')->get();
        foreach ($terms as $term) {
            if(!Str::contains($term->komentar, 'redovni')){
                $term->komentar = $term->komentar . "-redovni-";
            }
            $term->aktivan = 0;
            $term->save();
        }
        $message = "Uspješno deaktivirani termini redovnog rasporeda za kolegije u zimskom semestru (koji nisu imali 'redovni' u komentarima)";
        return view('freeze')->with('message', $message);
        //return "freezeregular";
    }

    public function unfreezeregular(Request $request)
    {
        $terms = Term::where('aktivan', 0)->where('semestar', 'ZIMSKI')->get();
        foreach ($terms as $term) {
            if(Str::contains($term->komentar, 'redovni')){
                $term->aktivan = 1;
                $term->save();
            }            
        }
        $message = "Uspješno aktivirani termini redovnog rasporeda";
        return view('freeze')->with('message', $message);
    }

    public function freezetemporary(Request $request)
    {
        $terms = Term::where('aktivan', 1)->where('semestar', 'ZIMSKI')->get();
        foreach ($terms as $term) {
            if(Str::contains($term->komentar, 'privremeni')){
                $term->aktivan = 0;
                $term->save();
            }            
        }
        $message = "Uspješno deaktivirani termini privremenog rasporeda";
        return view('freeze')->with('message', $message);
    }

    public function unfreezetemporary(Request $request)
    {
        $message = "Uspješno aktivirani termini privremenog rasporeda";
        return view('freeze')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $terminJedan = Term::find($id);

        if ($terminJedan) {

            $termini = DB::table('terms')
                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                ->join('users', 'users.id', '=', 'user_term.user_id')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.semestar as semestar_courses', 'courses.ime', 'courses.smjer', 'terms.id', 'users.id as profesor_id', 'users.name', 'users.surname')
                ->where('terms.id', $id)
                ->get();

            //return $termini;

            if (!$termini->isEmpty()) {

                $raspored = [];
                foreach ($termini as $termin) {
                    $nasao = false;
                    $jednaStavka = ["", $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, "", "", "", "", $termin->semestar, $termin->kraj, $termin->aktivan, $termin->komentar, $termin->napomena, $termin->semestar_courses];  //[15] elemenata u polju
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
                    foreach ($termini as $termin) {
                        if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                            $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                            $rasporedJedan[9] = $rasporedJedan[9] . $termin->ucionica_id . "-";
                        }
                        if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[7], ($termin->surname . " " . $termin->name))) {
                            $rasporedJedan[7] = $rasporedJedan[7] . $termin->surname . " " . $termin->name . "/";
                            $rasporedJedan[8] = $rasporedJedan[8] . $termin->profesor_id . "-";
                        }
                        if ($rasporedJedan[1] === $termin->id && (!Str::contains($rasporedJedan[0], ($termin->ime . " " . $termin->smjer)) || (Str::contains($rasporedJedan[0], ($termin->ime . " " . $termin->smjer)) && $rasporedJedan[16] !== $termin->semestar_courses))) {
                            $rasporedJedan[0] = $rasporedJedan[0] . $termin->ime . " " . $termin->smjer . "/";
                            $rasporedJedan[10] = $rasporedJedan[10] . $termin->kolegij_id . "-";
                        }
                    }
                    if (Str::endsWith($rasporedJedan[2], '/')) {
                        $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[7], '/')) {
                        $rasporedJedan[7] = Str::substr($rasporedJedan[7], 0, Str::length($rasporedJedan[7]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[8], '-')) {
                        $rasporedJedan[8] = Str::substr($rasporedJedan[8], 0, Str::length($rasporedJedan[8]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[9], '-')) {
                        $rasporedJedan[9] = Str::substr($rasporedJedan[9], 0, Str::length($rasporedJedan[9]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[10], '-')) {
                        $rasporedJedan[10] = Str::substr($rasporedJedan[10], 0, Str::length($rasporedJedan[10]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[0], '/')) {
                        $rasporedJedan[0] = Str::substr($rasporedJedan[0], 0, Str::length($rasporedJedan[0]) - 1);
                    }
                }
            } else {
                $termini = DB::table('terms')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.semestar as semestar_courses', 'courses.ime', 'courses.smjer', 'terms.id')
                ->where('terms.id', $id)
                ->get();

                $raspored = [];
                foreach ($termini as $termin) {
                    $nasao = false;
                    $jednaStavka = ["", $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, "", "", "", "", $termin->semestar, $termin->kraj, $termin->aktivan, $termin->komentar, $termin->napomena, $termin->semestar_courses];  //[15] elemenata u polju
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
                    foreach ($termini as $termin) {
                        if ($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)) {
                            $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/";
                            $rasporedJedan[9] = $rasporedJedan[9] . $termin->ucionica_id . "-";
                        }
                        if ($rasporedJedan[1] === $termin->id && (!Str::contains($rasporedJedan[0], ($termin->ime . " " . $termin->smjer)) || (Str::contains($rasporedJedan[0], ($termin->ime . " " . $termin->smjer)) && $rasporedJedan[16] !== $termin->semestar_courses))) {
                            $rasporedJedan[0] = $rasporedJedan[0] . $termin->ime . " " . $termin->smjer . "/";
                            $rasporedJedan[10] = $rasporedJedan[10] . $termin->kolegij_id . "-";
                        }
                    }
                    if (Str::endsWith($rasporedJedan[2], '/')) {
                        $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[7], '/')) {
                        $rasporedJedan[7] = Str::substr($rasporedJedan[7], 0, Str::length($rasporedJedan[7]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[8], '-')) {
                        $rasporedJedan[8] = Str::substr($rasporedJedan[8], 0, Str::length($rasporedJedan[8]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[9], '-')) {
                        $rasporedJedan[9] = Str::substr($rasporedJedan[9], 0, Str::length($rasporedJedan[9]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[10], '-')) {
                        $rasporedJedan[10] = Str::substr($rasporedJedan[10], 0, Str::length($rasporedJedan[10]) - 1);
                    }
                    if (Str::endsWith($rasporedJedan[0], '/')) {
                        $rasporedJedan[0] = Str::substr($rasporedJedan[0], 0, Str::length($rasporedJedan[0]) - 1);
                    }
                }

            }

            //return $raspored[0][16];

            //return $raspored[0];

            return view('terms.edit')->with('termin', $raspored[0]);
            //return "bravo " . $id;
        } else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        return "bravo";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "bravo";
    }
}
