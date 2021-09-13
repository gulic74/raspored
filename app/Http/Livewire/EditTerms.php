<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Course;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;
use App\Models\Term;
use App\Models\UserTerm;
use App\Models\ClassroomTerm;
use App\Models\CourseTerm;
use Illuminate\Support\Str;

use Livewire\Component;

class EditTerms extends Component
{
    public $termin;

    public $profesorSearch = "";
    public $odabirProfesor = [];

    public $ucionicaSearch = "";
    public $odabirUcionica = [];

    public $kolegijSearch = "";
    public $odabirKolegij = [];

    public $users;
    public $classrooms;
    public $courses;

    public $id_termin;
    public $kraj;
    public $pocetak;
    public $tip;
    public $pred_vj;
    public $grupa;
    public $dan;
    public $dan_selected;
    public $semestar;
    public $semestar_selected;
    public $komentar;
    public $napomena;
    public $aktivan;
    public $ignoreUcionica;
    public $ignoreRaspored;
    public $ignoreProfesor;

    public $poruka;
    public $tekstPoruke;
    public $kolizija;

    public function mount($termin)
    {
        $this->termin = $termin; 
        $this->odabir = [];

        $this->id_termin = $termin[1];
        $this->kraj = $termin[12];
        $this->pocetak = $termin[6];
        $this->tip = $termin[3];
        $this->pred_vj = $termin[3];
        $this->grupa = $termin[4];
        $this->dan = $termin[5];
        $this->dan_selected = $termin[5];
        $this->semestar = $termin[11];
        $this->semestar_selected = $termin[11];
        $this->komentar = $termin[14];
        $this->napomena = $termin[15];

        $this->aktivan = $termin[13];
        $this->ignoreUcionica = 0;
        $this->ignoreRaspored = 0;
        $this->ignoreProfesor = 0;


        $this->odabirProfesor = [];
        $this->odabirUcionica = [];
        $this->odabirKolegij = [];

        $this->poruka = 0;
        $this->tekstPoruke = [];
        $this->kolizija = 0;

        if(Str::contains($termin[8], '-') || Str::of($termin[8])->length() > 0){
            $profesori_id = explode("-", $termin[8]);
            foreach ($profesori_id as $profesor_id){
                $userTrenutni = User::find($profesor_id);
                $this->odabirProfesor[$userTrenutni->id] = $userTrenutni->name . " " . $userTrenutni->surname;
            }
        }
        $ucionice_id = explode("-", $termin[9]);
        foreach ($ucionice_id as $ucionica_id){
            $ucionicaTrenutna = Classroom::find($ucionica_id);
            $this->odabirUcionica[$ucionicaTrenutna->id] = $ucionicaTrenutna->ime;
        }
        $kolegiji_id = explode("-", $termin[10]);
        foreach ($kolegiji_id as $kolegij_id){
            $kolegijTrenutni = Course::find($kolegij_id);
            $this->odabirKolegij[$kolegijTrenutni->id] = $kolegijTrenutni->ime . " - " . $kolegijTrenutni->smjer . " - " . $kolegijTrenutni->godina . " - " . $kolegijTrenutni->semestar;
        }
    }

    public function updated()
    {
        $this->poruka = 0;
        $this->tekstPoruke = [];
    }

    public function dodajProfesora($id)
    {
        if(!Arr::exists($this->odabirProfesor, $id)){
            foreach($this->users as $user){
                if($user['id'] === $id){
                    $this->odabirProfesor[$id] = $user['name'] . " " . $user['surname'];
                }
            }            
        }        
        $this->profesorSearch = "";
    }

    public function brisiProfesora(string $profesor)
    {
        $results = array_search($profesor, $this->odabirProfesor, true);
        if($results !== false) {
            unset($this->odabirProfesor[$results]);   
        }       
        $this->profesorSearch = "";
    }

    public function dodajUcionicu($id)
    {
        if(!Arr::exists($this->odabirUcionica, $id)){
            foreach($this->classrooms as $clasroom){
                if($clasroom['id'] === $id){
                    $this->odabirUcionica[$id] = $clasroom['ime'];
                }
            }            
        }        
        $this->ucionicaSearch = "";
    }

    public function brisiUcionicu(string $ucionica)
    {
        $results = array_search($ucionica, $this->odabirUcionica, true);
        if($results !== false) {
            unset($this->odabirUcionica[$results]);   
        }       
        $this->ucionicaSearch = "";
    }

    public function dodajKolegij($id)
    {
        if(!Arr::exists($this->odabirKolegij, $id)){
            foreach($this->courses as $course){
                if($course['id'] === $id){
                    $this->odabirKolegij[$id] = $course['ime'] . " - " . $course['smjer'] . " - " . $course['godina'] . " - " . $course['semestar'];;
                }
            }            
        }        
        $this->kolegijSearch = "";
    }

    public function brisiKolegij(string $kolegij)
    {
        $results = array_search($kolegij, $this->odabirKolegij, true);
        if($results !== false) {
            unset($this->odabirKolegij[$results]);   
        }       
        $this->kolegijSearch = "";
    }

    public function provjeriTermin()
    {
        //$this->ignoreUcionica = ($this->ignoreUcionica == 1) ? 0 : 1;
        $this->poruka = 1;
        $this->kolizija = 0;
        $this->tekstPoruke = []; 
        

        //napisati ako je sve ok i provjera po onome što želimo  (3 checkboxa)
        //PROVJERA PROFESORA
        if($this->ignoreProfesor == 0){
            foreach($this->odabirProfesor as $key => $value) {

                $terminiProfesor = DB::table('terms')
                    ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                    ->join('users', 'users.id', '=', 'user_term.user_id')
                    ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                    ->join('courses', 'courses.id', '=', 'course_term.course_id')
                    ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                    ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                    ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.ime', 'courses.smjer', 'terms.id', 'users.id as profesor_id', 'users.name', 'users.surname')
                    ->where('users.id', $key)
                    ->where('terms.id', "!=", $this->termin[1])
                    ->where('terms.dan', $this->dan)
                    ->where('terms.semestar', $this->semestar)
                    ->where('terms.aktivan', '1')
                    ->get();

                //array_push($this->tekstPoruke, "provjera " . $this->pocetak . " - " . $this->kraj);
                foreach($terminiProfesor as $terminProfesor){
                    //array_push($this->tekstPoruke, $terminProfesor->pocetak . " - " . $terminProfesor->kraj);
                    if($terminProfesor->pocetak == $this->pocetak || ($this->pocetak < $terminProfesor->pocetak && $this->kraj > $terminProfesor->pocetak) || ($this->pocetak > $terminProfesor->pocetak && $this->pocetak < $terminProfesor->kraj)){
                        if(!in_array(($value . " je zauzet/a!"), $this->tekstPoruke)){
                            array_push($this->tekstPoruke, $value . " je zauzet/a!");           
                        }
                        //array_push($this->tekstPoruke, $key . " - " . $value . " je zauzet/a!");
                        $this->kolizija = 1;
                    }
                }
            }
        }  
        
        //PROVJERA RASPOREDA/KOLEGIJA
        if($this->ignoreRaspored == 0){
            foreach($this->odabirKolegij as $key => $value) {
                $courseTrenutni = Course::find($key);

                $terminiRaspored = DB::table('terms')
                    ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                    ->join('courses', 'courses.id', '=', 'course_term.course_id')
                    ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                    ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                    ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.ime', 'courses.smjer', 'terms.id')
                    ->where('terms.id', "!=", $this->termin[1])
                    ->where('terms.dan', $this->dan)
                    ->where('terms.semestar', $this->semestar)
                    ->where('terms.aktivan', '1')
                    ->where('courses.smjer', $courseTrenutni->smjer)
                    ->where('courses.razina_studija', $courseTrenutni->razina_studija)
                    ->where('courses.godina', $courseTrenutni->godina)
                    ->where('courses.semestar', $courseTrenutni->semestar)
                    ->get();

                foreach($terminiRaspored as $terminRaspored){
                    //array_push($this->tekstPoruke, $terminProfesor->pocetak . " - " . $terminProfesor->kraj);
                    if($terminRaspored->pocetak == $this->pocetak || ($this->pocetak < $terminRaspored->pocetak && $this->kraj > $terminRaspored->pocetak) || ($this->pocetak > $terminRaspored->pocetak && $this->pocetak < $terminRaspored->kraj)){
                        if(!in_array(("Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za raspored " . $courseTrenutni->smjer . "-" . $courseTrenutni->razina_studija . "-" . $courseTrenutni->godina . ".god!"), $this->tekstPoruke)){
                            array_push($this->tekstPoruke, "Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za raspored " . $courseTrenutni->smjer . "-" . $courseTrenutni->razina_studija . "-" . $courseTrenutni->godina . ".god!");           
                        }
                        //array_push($this->tekstPoruke, $key . " - " . $value . " je zauzet/a!");
                        $this->kolizija = 1;
                    }
                }

                //array_push($this->tekstPoruke, $key . " - " . $value . " "); 
                //2 upita - jedan za info od kolegija, drugi klasika kao i gore
            }
        }

        //PROVJERA UČIONICE
        if($this->ignoreUcionica == 0){
            foreach($this->odabirUcionica as $key => $value) {
                $terminiUcionica = DB::table('terms')
                    ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                    ->join('courses', 'courses.id', '=', 'course_term.course_id')
                    ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                    ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                    ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.ime', 'courses.smjer', 'terms.id')
                    ->where('classrooms.id', $key)
                    ->where('terms.id', "!=", $this->termin[1])
                    ->where('terms.dan', $this->dan)
                    ->where('terms.semestar', $this->semestar)
                    ->where('terms.aktivan', '1')
                    ->get();
                
                foreach($terminiUcionica as $terminUcionica){
                    //array_push($this->tekstPoruke, $terminProfesor->pocetak . " - " . $terminProfesor->kraj);
                    if($terminUcionica->pocetak == $this->pocetak || ($this->pocetak < $terminUcionica->pocetak && $this->kraj > $terminUcionica->pocetak) || ($this->pocetak > $terminUcionica->pocetak && $this->pocetak < $terminUcionica->kraj)){
                        if(!in_array(("Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za učionicu " . $value . "!"), $this->tekstPoruke)){
                            array_push($this->tekstPoruke, "Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za učionicu " . $value . "!");           
                        }
                        //array_push($this->tekstPoruke, $key . " - " . $value . " je zauzet/a!");
                        $this->kolizija = 1;
                    }
                }
            }
        }
        
        if($this->kolizija == 0){
            array_push($this->tekstPoruke,"Sve je u redu!");
        }
    }

    public function updateTerm(){
        if(Auth::user()->is_admin){
            $this->poruka = 1;
            $this->kolizija = 0;
            $this->tekstPoruke = []; 

            if($this->aktivan == 1){
                if($this->ignoreProfesor == 0){
                    foreach($this->odabirProfesor as $key => $value) {

                        $terminiProfesor = DB::table('terms')
                            ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                            ->join('users', 'users.id', '=', 'user_term.user_id')
                            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                            ->join('courses', 'courses.id', '=', 'course_term.course_id')
                            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.ime', 'courses.smjer', 'terms.id', 'users.id as profesor_id', 'users.name', 'users.surname')
                            ->where('users.id', $key)
                            ->where('terms.id', "!=", $this->termin[1])
                            ->where('terms.dan', $this->dan)
                            ->where('terms.semestar', $this->semestar)
                            ->where('terms.aktivan', '1')
                            ->get();

                        //array_push($this->tekstPoruke, "provjera " . $this->pocetak . " - " . $this->kraj);
                        foreach($terminiProfesor as $terminProfesor){
                            //array_push($this->tekstPoruke, $terminProfesor->pocetak . " - " . $terminProfesor->kraj);
                            if($terminProfesor->pocetak == $this->pocetak || ($this->pocetak < $terminProfesor->pocetak && $this->kraj > $terminProfesor->pocetak) || ($this->pocetak > $terminProfesor->pocetak && $this->pocetak < $terminProfesor->kraj)){
                                if(!in_array(($value . " je zauzet/a!"), $this->tekstPoruke)){
                                    array_push($this->tekstPoruke, $value . " je zauzet/a!");           
                                }
                                //array_push($this->tekstPoruke, $key . " - " . $value . " je zauzet/a!");
                                $this->kolizija = 1;
                            }
                        }
                    }
                }  
                
                //PROVJERA RASPOREDA/KOLEGIJA
                if($this->ignoreRaspored == 0){
                    foreach($this->odabirKolegij as $key => $value) {
                        $courseTrenutni = Course::find($key);

                        $terminiRaspored = DB::table('terms')
                            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                            ->join('courses', 'courses.id', '=', 'course_term.course_id')
                            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.ime', 'courses.smjer', 'terms.id')
                            ->where('terms.id', "!=", $this->termin[1])
                            ->where('terms.dan', $this->dan)
                            ->where('terms.semestar', $this->semestar)
                            ->where('terms.aktivan', '1')
                            ->where('courses.smjer', $courseTrenutni->smjer)
                            ->where('courses.razina_studija', $courseTrenutni->razina_studija)
                            ->where('courses.godina', $courseTrenutni->godina)
                            ->where('courses.semestar', $courseTrenutni->semestar)
                            ->get();

                        foreach($terminiRaspored as $terminRaspored){
                            //array_push($this->tekstPoruke, $terminProfesor->pocetak . " - " . $terminProfesor->kraj);
                            if($terminRaspored->pocetak == $this->pocetak || ($this->pocetak < $terminRaspored->pocetak && $this->kraj > $terminRaspored->pocetak) || ($this->pocetak > $terminRaspored->pocetak && $this->pocetak < $terminRaspored->kraj)){
                                if(!in_array(("Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za raspored " . $courseTrenutni->smjer . "-" . $courseTrenutni->razina_studija . "-" . $courseTrenutni->godina . ".god!"), $this->tekstPoruke)){
                                    array_push($this->tekstPoruke, "Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za raspored " . $courseTrenutni->smjer . "-" . $courseTrenutni->razina_studija . "-" . $courseTrenutni->godina . ".god!");           
                                }
                                //array_push($this->tekstPoruke, $key . " - " . $value . " je zauzet/a!");
                                $this->kolizija = 1;
                            }
                        }

                        //array_push($this->tekstPoruke, $key . " - " . $value . " "); 
                        //2 upita - jedan za info od kolegija, drugi klasika kao i gore
                    }
                }

                //PROVJERA UČIONICE
                if($this->ignoreUcionica == 0){
                    foreach($this->odabirUcionica as $key => $value) {
                        $terminiUcionica = DB::table('terms')
                            ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                            ->join('courses', 'courses.id', '=', 'course_term.course_id')
                            ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                            ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                            ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'terms.semestar', 'terms.aktivan', 'terms.komentar', 'terms.napomena', 'classrooms.id as ucionica_id', 'classrooms.ime as ucionica', 'courses.id as kolegij_id', 'courses.ime', 'courses.smjer', 'terms.id')
                            ->where('classrooms.id', $key)
                            ->where('terms.id', "!=", $this->termin[1])
                            ->where('terms.dan', $this->dan)
                            ->where('terms.semestar', $this->semestar)
                            ->where('terms.aktivan', '1')
                            ->get();
                        
                        foreach($terminiUcionica as $terminUcionica){
                            //array_push($this->tekstPoruke, $terminProfesor->pocetak . " - " . $terminProfesor->kraj);
                            if($terminUcionica->pocetak == $this->pocetak || ($this->pocetak < $terminUcionica->pocetak && $this->kraj > $terminUcionica->pocetak) || ($this->pocetak > $terminUcionica->pocetak && $this->pocetak < $terminUcionica->kraj)){
                                if(!in_array(("Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za učionicu " . $value . "!"), $this->tekstPoruke)){
                                    array_push($this->tekstPoruke, "Termin " . $this->pocetak . " - " . $this->kraj . " je zauzet za učionicu " . $value . "!");           
                                }
                                //array_push($this->tekstPoruke, $key . " - " . $value . " je zauzet/a!");
                                $this->kolizija = 1;
                            }
                        }
                    }
                }
                
                if($this->kolizija == 0){
                    //brisanje termina
                    //Term::find($this->id_termin)->delete();
                    //Term::find($this->id_termin)

                    //azuriranje (kreiranje novog s provjerom) s provjerom
                    $termDetails = Term::find($this->id_termin);
                    $termDetails->tip = $this->tip;
                    $termDetails->grupa = $this->grupa;
                    $termDetails->dan = $this->dan;
                    $termDetails->semestar = $this->semestar;
                    $termDetails->pocetak = $this->pocetak;
                    $termDetails->kraj = $this->kraj;
                    $termDetails->aktivan = $this->aktivan;
                    $termDetails->komentar = $this->komentar;
                    $termDetails->napomena = $this->napomena;
                    $termDetails->save();                    

                    //ažuriranje termina s profesorom
                    DB::table('user_term')->where('term_id', $this->id_termin)->delete();                    
                    foreach($this->odabirProfesor as $key => $value) {
                        $userTermNovo = new UserTerm();
                        $userTermNovo->user_id = $key;
                        $userTermNovo->term_id = $this->id_termin;
                        $userTermNovo->save();
                    }                   

                    //ažuriranje termina s kolegijem
                    DB::table('course_term')->where('term_id', $this->id_termin)->delete();                    
                    foreach($this->odabirKolegij as $key => $value) {
                        $courseTermNovo = new CourseTerm();
                        $courseTermNovo->course_id = $key;
                        $courseTermNovo->term_id = $this->id_termin;
                        $courseTermNovo->save();
                    }

                    //ažuriranje termina s ucionicom
                    DB::table('classroom_term')->where('term_id', $this->id_termin)->delete();                    
                    foreach($this->odabirUcionica as $key => $value) {
                        $classroomTermNovo = new ClassroomTerm();
                        $classroomTermNovo->classroom_id = $key;
                        $classroomTermNovo->term_id = $this->id_termin;
                        $classroomTermNovo->save();
                    }

                    array_push($this->tekstPoruke,"Uspješno ažurirano!");

                    //$this->id_termin = $termin[1];
                    //$this->pred_vj = $termin[3];
                }
            }else{
                //azuriranje bez provjere
                $termDetails = Term::find($this->id_termin);
                $termDetails->tip = $this->tip;
                $termDetails->grupa = $this->grupa;
                $termDetails->dan = $this->dan;
                $termDetails->semestar = $this->semestar;
                $termDetails->pocetak = $this->pocetak;
                $termDetails->kraj = $this->kraj;
                $termDetails->aktivan = $this->aktivan;
                $termDetails->komentar = $this->komentar;
                $termDetails->napomena = $this->napomena;
                $termDetails->save();

                //ažuriranje termina s profesorom
                DB::table('user_term')->where('term_id', $this->id_termin)->delete();                    
                foreach($this->odabirProfesor as $key => $value) {
                    $userTermNovo = new UserTerm();
                    $userTermNovo->user_id = $key;
                    $userTermNovo->term_id = $this->id_termin;
                    $userTermNovo->save();
                }                   

                //ažuriranje termina s kolegijem
                DB::table('course_term')->where('term_id', $this->id_termin)->delete();                    
                foreach($this->odabirKolegij as $key => $value) {
                    $courseTermNovo = new CourseTerm();
                    $courseTermNovo->course_id = $key;
                    $courseTermNovo->term_id = $this->id_termin;
                    $courseTermNovo->save();
                }

                //ažuriranje termina s ucionicom
                DB::table('classroom_term')->where('term_id', $this->id_termin)->delete();                    
                foreach($this->odabirUcionica as $key => $value) {
                    $classroomTermNovo = new ClassroomTerm();
                    $classroomTermNovo->classroom_id = $key;
                    $classroomTermNovo->term_id = $this->id_termin;
                    $classroomTermNovo->save();
                }

                array_push($this->tekstPoruke,"Uspješno ažurirano!");
            }
        }
    }

    public function zatvoriPoruku()
    {
        //$this->ignoreUcionica = ($this->ignoreUcionica == 1) ? 0 : 1;
        $this->poruka = 0;
        $this->tekstPoruke = [];   
    }

    public function render()
    {
        $this->users = DB::table('users')->select('id', 'name', 'surname')->get();
        $this->classrooms = DB::table('classrooms')->select('id', 'ime')->get();
        $this->courses = DB::table('courses')->select('id', 'ime', 'smjer', 'godina', 'semestar')->get();

        return view('livewire.edit-terms', ['users' => $this->users,
        'classrooms' => $this->classrooms,
        'courses' => $this->courses]);
    }
}
