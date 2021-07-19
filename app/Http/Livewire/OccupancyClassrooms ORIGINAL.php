<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Livewire\Component;

class OccupancyClassrooms extends Component
{

    public $rasporedZima=[];
    public $rasporedLjeto=[];
    public $ucionice=[];

    public function mount()
    {
        $termini = DB::table('terms')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'classrooms.ime as ucionica', 'classrooms.id as ucionica_id', 'courses.smjer', 'terms.id', 'courses.razina_studija', 'courses.godina')
                //->where('classrooms.ime', '301')
                ->where('terms.semestar', 'ZIMSKI') //LJETNI, pon uto sri cet pet sub, PREDAVANJE ili VJEŽBE
                ->where('terms.aktivan', '1')
                ->get();

        $this->rasporedZima = [];        
        foreach ($termini as $termin){
            $nasao = false;
            foreach($this->rasporedZima as $rasporedJedan){
                if($rasporedJedan[1] === $termin->id){
                    $nasao = true; 
                }
            }
            if(!$nasao){                
                $jednaStavka = ["", $termin->id, $termin->dan, $termin->pocetak, $termin->kraj, $termin->ucionica];
                if($termin->razina_studija == "PRED"){
                    if($termin->tip == "PREDAVANJE"){
                        $jednaStavka[0] = ucfirst($termin->smjer[0]) . $termin->godina;
                    }else{
                        $jednaStavka[0] = $termin->smjer[0] . $termin->godina;
                    }
                }else{
                    if($termin->tip == "PREDAVANJE"){
                        $jednaStavka[0] = ucfirst($termin->smjer[0]) . ($termin->godina + 3);
                    }else{
                        $jednaStavka[0] = $termin->smjer[0] . ($termin->godina + 3);
                    }
                }                
                array_push($this->rasporedZima, $jednaStavka);
            }            
        }


        $terminiLjeto = DB::table('terms')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'classrooms.ime as ucionica', 'classrooms.id as ucionica_id', 'courses.smjer', 'terms.id', 'courses.razina_studija', 'courses.godina')
                //->where('classrooms.ime', '301')
                ->where('terms.semestar', 'LJETNI') //LJETNI, pon uto sri cet pet sub, PREDAVANJE ili VJEŽBE
                ->where('terms.aktivan', '1')
                ->get();

        $this->rasporedLjeto = [];        
        foreach ($terminiLjeto as $termin){
            $nasao = false;
            foreach($this->rasporedLjeto as $rasporedJedan){
                if($rasporedJedan[1] === $termin->id){
                    $nasao = true; 
                }
            }
            if(!$nasao){                
                $jednaStavka = ["", $termin->id, $termin->dan, $termin->pocetak, $termin->kraj, $termin->ucionica];
                if($termin->razina_studija == "PRED"){
                    if($termin->tip == "PREDAVANJE"){
                        $jednaStavka[0] = ucfirst($termin->smjer[0]) . $termin->godina;
                    }else{
                        $jednaStavka[0] = $termin->smjer[0] . $termin->godina;
                    }
                }else{
                    if($termin->tip == "PREDAVANJE"){
                        $jednaStavka[0] = ucfirst($termin->smjer[0]) . ($termin->godina + 3);
                    }else{
                        $jednaStavka[0] = $termin->smjer[0] . ($termin->godina + 3);
                    }
                }                
                array_push($this->rasporedLjeto, $jednaStavka);
            }            
        }
        
        $ucioniceClass = DB::table('classrooms')
            ->select('ime')
            ->orderBy('ime', 'ASC')
            ->get();
        
        $this->ucionice = [];        
        foreach ($ucioniceClass as $ucionicaClass){
            $jednaStavka = [$ucionicaClass->ime];
            array_push($this->ucionice, $jednaStavka);           
        }
    }

    public function render()
    {
        

        return view('livewire.occupancy-classrooms');
    }
}
