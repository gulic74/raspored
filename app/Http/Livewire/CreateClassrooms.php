<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;

class CreateClassrooms extends Component
{
    public $ime;
    public $brojMjesta;

    public $poruka;
    public $tekstPoruke;
    public $kolizija;

    public function mount()
    {
        $this->ime = "";
        $this->brojMjesta = "";

        $this->poruka = 0;
        $this->tekstPoruke = [];
        $this->kolizija = 0;
    }

    public function updated()
    {
        $this->poruka = 0;
        $this->tekstPoruke = [];
    }

    public function createClassroom(){
        if(Auth::user()->is_admin){
            $this->poruka = 1;
            $this->kolizija = 0;
            $this->tekstPoruke = []; 

            if(empty($this->ime) || empty($this->brojMjesta) || !is_numeric($this->brojMjesta)){
                array_push($this->tekstPoruke, "Niste popunili sva polja ili broj mjesta nije valjan broj");           
                $this->kolizija = 1;
            }
            
                
            if($this->kolizija == 0){
                
                $classroomDetails = new Classroom();

                $classroomDetails->ime = $this->ime;
                $classroomDetails->broj_mjesta = $this->brojMjesta;

                $classroomDetails->save();                    


                array_push($this->tekstPoruke,"Uspješno ažurirano!");

                    //$this->id_termin = $termin[1];
                    //$this->pred_vj = $termin[3];
                return redirect()->to("classrooms/edit/" . $classroomDetails->id . "");
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
        return view('livewire.create-classrooms');
    }
}
