<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Livewire\Component;

class OccupancyClassrooms extends Component
{

    public $rasporedZima107=[];
    public $rasporedZima108=[];
    public $rasporedZima207=[];
    public $rasporedZima227=[];
    public $rasporedZima229=[];
    public $rasporedZima233=[];
    public $rasporedZima301=[];
    public $rasporedZima313=[];
    public $rasporedZima315=[];
    public $rasporedZima325=[];
    public $rasporedZima327=[];
    public $rasporedZima401=[];
    public $rasporedZima405=[];
    public $rasporedZima407=[];
    public $rasporedZima408=[];
    public $rasporedZima409=[];
    public $rasporedZima410a=[];
    public $rasporedZima410b=[];
    public $rasporedZima411=[];
    public $rasporedZima412=[];
    public $rasporedZima413=[];
    public $rasporedZima418=[];
    public $rasporedZima419=[];
    public $rasporedZima420=[];
    public $rasporedZima421=[];
    public $rasporedZima422=[];
    public $rasporedZima423=[];
    public $rasporedZima431=[];
    public $rasporedZima503=[];
    public $rasporedZima504=[];
    public $rasporedZimaDV=[];
    public $rasporedZimaTK=[];
    public $rasporedZimaIK=[];
    public $rasporedZimaStr_Lab=[];
    public $rasporedLjeto107=[];
    public $rasporedLjeto108=[];
    public $rasporedLjeto207=[];
    public $rasporedLjeto227=[];
    public $rasporedLjeto229=[];
    public $rasporedLjeto233=[];
    public $rasporedLjeto301=[];
    public $rasporedLjeto313=[];
    public $rasporedLjeto315=[];
    public $rasporedLjeto325=[];
    public $rasporedLjeto327=[];
    public $rasporedLjeto401=[];
    public $rasporedLjeto405=[];
    public $rasporedLjeto407=[];
    public $rasporedLjeto408=[];
    public $rasporedLjeto409=[];
    public $rasporedLjeto410a=[];
    public $rasporedLjeto410b=[];
    public $rasporedLjeto411=[];
    public $rasporedLjeto412=[];
    public $rasporedLjeto413=[];
    public $rasporedLjeto418=[];
    public $rasporedLjeto419=[];
    public $rasporedLjeto420=[];
    public $rasporedLjeto421=[];
    public $rasporedLjeto422=[];
    public $rasporedLjeto423=[];
    public $rasporedLjeto431=[];
    public $rasporedLjeto503=[];
    public $rasporedLjeto504=[];
    public $rasporedLjetoDV=[];
    public $rasporedLjetoTK=[];
    public $rasporedLjetoIK=[];
    public $rasporedLjetoStr_Lab=[];
    public $ucionice=[];

    public function mount()
    {
        $ucioniceClass = DB::table('classrooms')
            ->select('ime')
            ->orderBy('ime', 'ASC')
            ->get();
        
        $this->ucionice = [];        
        foreach ($ucioniceClass as $ucionicaClass){
            $jednaStavka = [$ucionicaClass->ime];
            array_push($this->ucionice, $jednaStavka);           
        }


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

        foreach ($this->ucionice as $ucionica){
            $this->{'rasporedZima'.$ucionica[0]} = [];
        }

        foreach ($this->ucionice as $ucionica){     
            foreach ($termini as $termin){
                if($termin->ucionica === $ucionica[0]){
                    $nasao = false;
                    foreach($this->{'rasporedZima'.$ucionica[0]} as $rasporedJedan){
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
                        array_push($this->{'rasporedZima'.$ucionica[0]}, $jednaStavka);
                    } 
                }           
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

        foreach ($this->ucionice as $ucionica){
            $this->{'rasporedLjeto'.$ucionica[0]} = [];
        }
        
        foreach ($this->ucionice as $ucionica){        
            foreach ($terminiLjeto as $termin){
                if($termin->ucionica === $ucionica[0]){
                    $nasao = false;
                    foreach($this->{'rasporedLjeto'.$ucionica[0]} as $rasporedJedan){
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
                        array_push($this->{'rasporedLjeto'.$ucionica[0]}, $jednaStavka);
                    }
                }           
            }
        }
        
        
    }

    public function render()
    {      

        return view('livewire.occupancy-classrooms');
    }
}
