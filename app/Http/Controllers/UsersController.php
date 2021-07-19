<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersController extends Controller
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
        $profesoriClass = DB::table('users')
            ->select('id', 'name', 'surname', 'email', 'is_admin')
            ->get();
        
        $profesori = [];        
        foreach ($profesoriClass as $profesorClass){
            $jednaStavka = [$profesorClass->id, $profesorClass->name, $profesorClass->surname, $profesorClass->email, $profesorClass->is_admin];
            array_push($profesori, $jednaStavka);           
        }

        return view('users.index')->with('profesori', $profesori);


        //return view('terms.index')->with('usersFirms', $usersFirms);
        //return redirect('terms')->with('success', 'Kompanija je uspješno registrirana');
        //return "bravo";
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        //return "bravo";
        if(auth()->user()->id == $id || auth()->user()->is_admin == 1){
            $terminiZimski = DB::table('terms')
                    ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                    ->join('users', 'users.id', '=', 'user_term.user_id')
                    ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                    ->join('courses', 'courses.id', '=', 'course_term.course_id')
                    ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                    ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                    ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id')
                    ->where('terms.semestar', 'ZIMSKI')
                    ->where('terms.aktivan', '1')
                    ->where('users.id', $id)
                    ->get();

            //return $terminiZimski;

            $rasporedZima = [];        
            foreach ($terminiZimski as $termin){
                $nasao = false;
                $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
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
                    ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.napomena', 'classrooms.ime as ucionica', 'courses.ime', 'terms.id')
                    ->where('terms.semestar', 'LJETNI')
                    ->where('terms.aktivan', '1')
                    ->where('users.id', $id)
                    ->get();

            $rasporedLjeto = [];        
            foreach ($terminiLjetni as $termin){
                $nasao = false;
                $jednaStavka = [$termin->ime, $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, $termin->kraj, $termin->napomena];
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

            $profesoriClass = DB::table('users')
                ->select('id', 'name', 'surname', 'email')
                ->where('users.id', $id)
                ->get();
            
            $profesori = [];        
            foreach ($profesoriClass as $profesorClass){
                $jednaStavka = [$profesorClass->id, $profesorClass->name, $profesorClass->surname, $profesorClass->email];
                array_push($profesori, $jednaStavka);           
            }

            //return $profesori[0];
            //return $rasporedLjeto;
            //return $rasporedZima;

            return view('users.show')->with('rasporedZima', $rasporedZima)->with('rasporedLjeto', $rasporedLjeto)->with('osobniPodaci', $profesori[0]);
        }else{
            return redirect()->to("/dashboard")->with('unauthorised', 'Niste autorizirani za pristup traženoj stranici');
        }
    }

    public function edit($id)
    {
        $profesoriClass = DB::table('users')
            ->select('id', 'name', 'surname', 'email', 'is_admin')
            ->where('users.id', $id)
            ->get();
        
        $profesori = [];        
        foreach ($profesoriClass as $profesorClass){
            $jednaStavka = [$profesorClass->id, $profesorClass->name, $profesorClass->surname, $profesorClass->email, $profesorClass->is_admin];
            array_push($profesori, $jednaStavka);           
        }
        return view('users.edit')->with('profesorPodaci', $profesori[0]);
        //return "bravo";
    }
}
