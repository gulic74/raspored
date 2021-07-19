<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class CreateCourses extends Component
{
    public $ime;
    public $smjer;
    public $razinaStudija;
    public $godina;
    public $semestar;

    public $poruka;
    public $tekstPoruke;
    public $kolizija;

    public function mount()
    {
        $this->ime = "";
        $this->smjer = "NTPP";
        $this->razinaStudija = "PRED";
        $this->godina = 1;
        $this->semestar = 1;

        $this->poruka = 0;
        $this->tekstPoruke = [];
        $this->kolizija = 0;
    }

    public function updated()
    {
        $this->poruka = 0;
        $this->tekstPoruke = [];
    }

    public function createCourse(){
        if(Auth::user()->is_admin){
            $this->poruka = 1;
            $this->kolizija = 0;
            $this->tekstPoruke = []; 

            if(empty($this->ime)){
                array_push($this->tekstPoruke, "Niste popunili Ime kolegija");           
                $this->kolizija = 1;
            }
            
                
            if($this->kolizija == 0){
                
                $courseDetails = new Course();

                $courseDetails->ime = $this->ime;
                $courseDetails->smjer = $this->smjer;
                $courseDetails->razina_studija = $this->razinaStudija;
                $courseDetails->godina = $this->godina;
                $courseDetails->semestar = $this->semestar;

                $courseDetails->save();                    


                array_push($this->tekstPoruke,"Uspješno ažurirano!");

                    //$this->id_termin = $termin[1];
                    //$this->pred_vj = $termin[3];
                return redirect()->to("courses/edit/" . $courseDetails->id . "");
            }
            
        }
    }

    public function zatvoriPoruku()
    {
        $this->poruka = 0;
        $this->tekstPoruke = [];   
    }

    public function render()
    {
        return view('livewire.create-courses');
    }
}
