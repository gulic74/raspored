<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditUsers extends Component
{

    public $id_profesor;
    public $ime;
    public $prezime;
    public $email;
    public $lozinka;
    public $isAdmin;

    public $poruka;
    public $tekstPoruke;
    public $kolizija;

    public function mount($profesorPodaci)
    {
        $this->id_profesor = $profesorPodaci[0];
        $this->ime = $profesorPodaci[1];
        $this->prezime = $profesorPodaci[2];
        $this->email = $profesorPodaci[3];
        $this->lozinka = "";
        $this->isAdmin = $profesorPodaci[4];

        $this->poruka = 0;
        $this->tekstPoruke = [];
        $this->kolizija = 0;
    }

    public function updated()
    {
        $this->poruka = 0;
        $this->tekstPoruke = [];
    }

    public function updateUser(){
        if(Auth::user()->is_admin){
            $this->poruka = 1;
            $this->kolizija = 0;
            $this->tekstPoruke = []; 

            if(empty($this->ime) || empty($this->prezime) || empty($this->email) || empty($this->prezime)){
                array_push($this->tekstPoruke, "Niste popunili sve podatke");           
                $this->kolizija = 1;
            }
            
                
            if($this->kolizija == 0){
                
                $userDetails = User::find($this->id_profesor);

                $userDetails->name = $this->ime;
                $userDetails->surname = $this->prezime;
                $userDetails->email = $this->email;
                if(!empty($this->lozinka)){
                    $userDetails->password = Hash::make($this->lozinka);
                }                
                $userDetails->is_admin = $this->isAdmin;

                $userDetails->save();                    


                array_push($this->tekstPoruke,"Uspješno ažurirano!");

                    //$this->id_termin = $termin[1];
                    //$this->pred_vj = $termin[3];
                //return redirect()->to("users/edit/" . $userDetails->id . "");
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
        return view('livewire.edit-users');
    }
}
