<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    public function __construct(){
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
        foreach ($ucioniceClass as $ucionicaClass){
            $jednaStavka = [$ucionicaClass->id, $ucionicaClass->ime, $ucionicaClass->broj_mjesta];
            array_push($ucionice, $jednaStavka);           
        }

        return view('classrooms.index')->with('ucionice', $ucionice);
    }

    public function occupancy(){
        //$rasporedZima = [];
        //$rasporedLjeto = [];
        //$osobniPodaci=[1,2,3];
        return view('classrooms.occupancy');
        //return "bravo occupancy";
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
                    ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                    ->join('users', 'users.id', '=', 'user_term.user_id')
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
            foreach ($terminiZimski as $termin){
                $nasao = false;
                $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena, ""];
                if($termin->razina_studija == "PRED"){
                    $jednaStavka[9] = $termin->smjer[0] . $termin->godina;
                }else{
                    $jednaStavka[9] = $termin->smjer[0] . ($termin->godina + 3);
                }
                foreach($rasporedZima as $rasporedJedan){
                    if($rasporedJedan[1] === $termin->id){
                        $nasao = true; 
                    }
                }
                if(!$nasao){
                    array_push($rasporedZima, $jednaStavka);
                }            
            }
            foreach($rasporedZima as &$rasporedJedan){
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
                
                $rasporedJedan[0] = Str::upper($acronym);
                //PREDAVANJE ili VJEŽBE
                if($rasporedJedan[3] === "VJEŽBE"){
                    $rasporedJedan[0] = $rasporedJedan[0] . " " . $rasporedJedan[4];
                }
                foreach ($terminiZimski as $termin){
                    if($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)){
                        $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/"; 
                    }
                }
                if(Str::endsWith($rasporedJedan[2], '/')){
                    $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2])-1);
                }
            }   

            /*$bezVeze = DB::table('terms')
                    ->select('terms.tip', 'terms.grupa')
                    ->where('terms.semestar', 'LJETNI')
                    ->get();*/

            $terminiLjetni = DB::table('terms')
                    ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                    ->join('users', 'users.id', '=', 'user_term.user_id')
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
            foreach ($terminiLjetni as $termin){
                $nasao = false;
                $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena, ""];
                if($termin->razina_studija == "PRED"){
                    $jednaStavka[9] = $termin->smjer[0] . $termin->godina;
                }else{
                    $jednaStavka[9] = $termin->smjer[0] . ($termin->godina + 3);
                }
                foreach($rasporedLjeto as $rasporedJedanL){
                    if($rasporedJedanL[1] === $termin->id){
                        $nasao = true; 
                    }
                }
                if(!$nasao){
                    array_push($rasporedLjeto, $jednaStavka);
                }            
            }
            foreach($rasporedLjeto as &$rasporedJedanL){
                
                $words = explode(" ", $rasporedJedanL[0]);
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
                
                $rasporedJedanL[0] = Str::upper($acronym);
                //PREDAVANJE ili VJEŽBE
                if($rasporedJedanL[3] === "VJEŽBE"){
                    $rasporedJedanL[0] = $rasporedJedanL[0] . " " . $rasporedJedanL[4];
                }
                foreach ($terminiLjetni as $termin){
                    if($rasporedJedanL[1] === $termin->id && !Str::contains($rasporedJedanL[2], $termin->ucionica)){
                        $rasporedJedanL[2] = $rasporedJedanL[2] . $termin->ucionica . "/"; 
                    }
                }
                if(Str::endsWith($rasporedJedanL[2], '/')){
                    $rasporedJedanL[2] = Str::substr($rasporedJedanL[2], 0, Str::length($rasporedJedanL[2])-1);
                }
            }

            $ucioniceClass = DB::table('classrooms')
            ->select('id', 'ime', 'broj_mjesta')
            ->where('classrooms.id', $id)
            ->get();
        
            $ucionice = [];        
            foreach ($ucioniceClass as $ucionicaClass){
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
        foreach ($ucioniceClass as $ucionicaClass){
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
