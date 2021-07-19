<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class EditCourses extends Component
{
    public $id_kolegij;
    public $ime;
    public $smjer;
    public $smjer_selected;
    public $razinaStudija;
    public $razinaStudija_selected;
    public $godina;
    public $godina_selected;
    public $semestar;
    public $semestar_selected;

    public $poruka;
    public $tekstPoruke;
    public $kolizija;

    public function mount($kolegijPodaci)
    {
        $this->id_kolegij = $kolegijPodaci[0];
        $this->ime = $kolegijPodaci[1];
        $this->smjer = $kolegijPodaci[2];
        $this->smjer_selected = $kolegijPodaci[2];
        $this->razinaStudija = $kolegijPodaci[3];
        $this->razinaStudija_selected = $kolegijPodaci[3];
        $this->godina = $kolegijPodaci[4];
        $this->godina_selected = $kolegijPodaci[4];
        $this->semestar = $kolegijPodaci[5];
        $this->semestar_selected = $kolegijPodaci[5];

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
                
                $courseDetails = Course::find($this->id_kolegij);

                $courseDetails->ime = $this->ime;
                $courseDetails->smjer = $this->smjer;
                $courseDetails->razina_studija = $this->razinaStudija;
                $courseDetails->godina = $this->godina;
                $courseDetails->semestar = $this->semestar;

                $courseDetails->save();                    


                array_push($this->tekstPoruke,"Uspješno ažurirano!");

                    //$this->id_termin = $termin[1];
                    //$this->pred_vj = $termin[3];
                //return redirect()->to("courses/edit/" . $courseDetails->id . "");
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
        return view('livewire.edit-courses');
    }
}
