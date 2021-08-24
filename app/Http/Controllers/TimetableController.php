<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Course;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $godina = $request->input('godina');
        if($godina === '3' && $request->input('studij') === "DIPL"){
            $godina = '2';
        }
        $termini = DB::table('terms')
                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                ->join('users', 'users.id', '=', 'user_term.user_id')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'users.name', 'users.surname')
                ->where('courses.smjer', $request->input('smjer'))
                ->where('courses.razina_studija', $request->input('studij'))
                ->where('courses.godina', $godina)
                ->where('terms.semestar', $request->input('semestar'))
                ->where('terms.aktivan', '1')
                ->get();

        $raspored = [];        
        foreach ($termini as $termin){
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
            foreach($raspored as $rasporedJedan){
                if($rasporedJedan[1] === $termin->id){
                    $nasao = true; 
                }
            }
            if(!$nasao){
                array_push($raspored, $jednaStavka);
            }            
        }
        foreach($raspored as &$rasporedJedan){
            
            $rasporedJedan[0] = Str::upper($rasporedJedan[0]);
            //PREDAVANJE ili VJEŽBE
            if($rasporedJedan[3] === "VJEŽBE"){
                $words = explode(" ", $rasporedJedan[0]);
                $acronym = "";

                foreach ($words as $w) {
                    if(strcmp($w, "(I)") == 0){
                        $acronym .= $w;
                    }else{
                        $acronym .= $w[0];
                        if(strlen($w)>1){
                            if($w[0].$w[1] == 'č'){
                                    $acronym .= $w[1];
                            }
                        }
                    }            
                }
                $rasporedJedan[0] = $acronym;
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
            }
            foreach ($termini as $termin){
                if($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)){
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/"; 
                }
            }
            if(Str::endsWith($rasporedJedan[2], '/')){
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2])-1);
            }
        }

        $podaciRaspored = [];
        //return $request->input('smjer'); //BS, EITP, LMPP, NTPP, TOP

        $smjer = $request->input('smjer'); 
        $studij = $request->input('studij');

        if($smjer === "BS"){            
            if($studij === "DIPL"){
                $smjer = "BRODOSTROJARSTVO I TEHNOLOGIJA POMORSKOG POMETA";
            } else {
                $smjer = "BRODOSTROJARSTVO";
            }
        } else if($smjer === "EITP"){
            $smjer = "ELEKTRONIČKE I INFORMATIČKE TEHNOLOGIJE U POMORSTVU";
        } else if($smjer === "LMPP"){
            $smjer = "LOGISTIKA I MENADŽMENT U POMORSTVU I PROMETU";
        } else if($smjer === "NTPP"){
            $smjer = "NAUTIKA I TEHNOLOGIJA POMORSKOG PROMETA";
        } else {
            //TOP
            $smjer = "TEHNOLOGIJA I ORGANIZACIJA PROMETA";
        }

        if($studij === "DIPL"){
            $studij = "DIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        } else {
            $studij = "PREDDIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        }
        array_push($podaciRaspored, $studij);

        $godinaTekst = "";
        if($godina === '3'){
            $godinaTekst = "TREĆA STUDIJSKA GODINA";
        } else if($godina === '2'){
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

    public function indexstudent(Request $request)
    {
        $godina = $request->input('godina');
        if($godina === '3' && $request->input('studij') === "DIPL"){
            $godina = '2';
        }
        $termini = DB::table('terms')
                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                ->join('users', 'users.id', '=', 'user_term.user_id')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id', 'users.name', 'users.surname')
                ->where('courses.smjer', $request->input('smjer'))
                ->where('courses.razina_studija', $request->input('studij'))
                ->where('courses.godina', $godina)
                ->where('terms.semestar', $request->input('semestar'))
                ->where('terms.aktivan', '1')
                ->get();

        $raspored = [];        
        foreach ($termini as $termin){
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
            foreach($raspored as $rasporedJedan){
                if($rasporedJedan[1] === $termin->id){
                    $nasao = true; 
                }
            }
            if(!$nasao){
                array_push($raspored, $jednaStavka);
            }            
        }
        foreach($raspored as &$rasporedJedan){
            
            $rasporedJedan[0] = Str::upper($rasporedJedan[0]);
            //PREDAVANJE ili VJEŽBE
            if($rasporedJedan[3] === "VJEŽBE"){
                $words = explode(" ", $rasporedJedan[0]);
                $acronym = "";

                foreach ($words as $w) {
                    if(strcmp($w, "(I)") == 0){
                        $acronym .= $w;
                    }else{
                        $acronym .= $w[0];
                        if(strlen($w)>1){
                            if($w[0].$w[1] == 'č'){
                                    $acronym .= $w[1];
                            }
                        }
                    }            
                }
                $rasporedJedan[0] = $acronym;
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
            }
            foreach ($termini as $termin){
                if($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)){
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/"; 
                }
            }
            if(Str::endsWith($rasporedJedan[2], '/')){
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2])-1);
            }
        }

        //$z = ['me','you', 'he'];
        //array_push($z, 'she', 'it');
        //print_r($z);

        $podaciRaspored = [];
        //return $request->input('smjer'); //BS, EITP, LMPP, NTPP, TOP

        $smjer = $request->input('smjer'); 
        $studij = $request->input('studij');

        if($smjer === "BS"){            
            if($studij === "DIPL"){
                $smjer = "BRODOSTROJARSTVO I TEHNOLOGIJA POMORSKOG POMETA";
            } else {
                $smjer = "BRODOSTROJARSTVO";
            }
        } else if($smjer === "EITP"){
            $smjer = "ELEKTRONIČKE I INFORMATIČKE TEHNOLOGIJE U POMORSTVU";
        } else if($smjer === "LMPP"){
            $smjer = "LOGISTIKA I MENADŽMENT U POMORSTVU I PROMETU";
        } else if($smjer === "NTPP"){
            $smjer = "NAUTIKA I TEHNOLOGIJA POMORSKOG PROMETA";
        } else {
            //TOP
            $smjer = "TEHNOLOGIJA I ORGANIZACIJA PROMETA";
        }

        if($studij === "DIPL"){
            $studij = "DIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        } else {
            $studij = "PREDDIPLOMSKI SVEUČILIŠNI STUDIJ - " . $smjer;
        }
        array_push($podaciRaspored, $studij);

        $godinaTekst = "";
        if($godina === '3'){
            $godinaTekst = "TREĆA STUDIJSKA GODINA";
        } else if($godina === '2'){
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

    public function indexadmin($id){
        $kolegij = Course::find($id);
        $semestar = "ZIMSKI";
        if($kolegij->semestar % 2 == 0){
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
        foreach ($termini as $termin){
            $nasao = false;
            $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
            foreach($raspored as $rasporedJedan){
                if($rasporedJedan[1] === $termin->id){
                    $nasao = true; 
                }
            }
            if(!$nasao){
                array_push($raspored, $jednaStavka);
            }            
        }
        foreach($raspored as &$rasporedJedan){
            
            $rasporedJedan[0] = Str::upper($rasporedJedan[0]);
            //PREDAVANJE ili VJEŽBE
            if($rasporedJedan[3] === "VJEŽBE"){
                $words = explode(" ", $rasporedJedan[0]);
                $acronym = "";

                foreach ($words as $w) {
                    if(strcmp($w, "(I)") == 0){
                        $acronym .= $w;
                    }else{
                        $acronym .= $w[0];
                        if(strlen($w)>1){
                            if($w[0].$w[1] == 'č'){
                                    $acronym .= $w[1];
                            }
                        }
                    }            
                }
                $rasporedJedan[0] = $acronym;
                $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
            }
            foreach ($termini as $termin){
                if($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)){
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/"; 
                }
            }
            if(Str::endsWith($rasporedJedan[2], '/')){
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2])-1);
            }
        }

        //$z = ['me','you', 'he'];
        //array_push($z, 'she', 'it');
        //print_r($z);

        return view('timetable.index')->with('raspored', $raspored);
    }
}
