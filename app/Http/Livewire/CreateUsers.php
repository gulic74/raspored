<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsers extends Component
{

    public $ime;
    public $prezime;
    public $email;
    public $lozinka;
    public $isAdmin;

    public $poruka;
    public $tekstPoruke;
    public $kolizija;

    public function mount()
    {
        $this->ime = "";
        $this->prezime = "";
        $this->email = "";
        $this->lozinka = "";
        $this->isAdmin = 0;

        $this->poruka = 0;
        $this->tekstPoruke = [];
        $this->kolizija = 0;
    }

    public function updated()
    {
        $this->poruka = 0;
        $this->tekstPoruke = [];
    }

    public function provjeriUser()
    {
        //$this->ignoreUcionica = ($this->ignoreUcionica == 1) ? 0 : 1;
        $this->poruka = 1;
        $this->kolizija = 0;
        $this->tekstPoruke = []; 
        
        $profesoriClass = DB::table('users')
            ->select('name', 'surname', 'email')
            ->get();

        foreach($profesoriClass as $profesorClass){                   
            if(($profesorClass->name == $this->ime && $profesorClass->surname == $this->prezime) || $profesorClass->email == $this->email){
                array_push($this->tekstPoruke, "Profesor s ovim imenom ili ovim mailom već postoji");           
                $this->kolizija = 1;
            }
        }
        
        if($this->kolizija == 0){
            array_push($this->tekstPoruke,"Sve je u redu!");
        }
    }

    public function createUser(){
        if(Auth::user()->is_admin){
            $this->poruka = 1;
            $this->kolizija = 0;
            $this->tekstPoruke = []; 

            $profesoriClass = DB::table('users')
                ->select('name', 'surname', 'email')
                ->get();
                           
            foreach($profesoriClass as $profesorClass){                   
                if(($profesorClass->name == $this->ime && $profesorClass->surname == $this->prezime) || $profesorClass->email == $this->email){
                    array_push($this->tekstPoruke, "Profesor s ovim imenom ili ovim mailom već postoji");           
                    $this->kolizija = 1;
                }
            }

            if(empty($this->ime) || empty($this->prezime) || empty($this->email) || empty($this->lozinka) || empty($this->prezime)){
                array_push($this->tekstPoruke, "Niste popunili sve podatke");           
                $this->kolizija = 1;
            }
            
                
            if($this->kolizija == 0){
                
                $userDetails = new User();

                $userDetails->name = $this->ime;
                $userDetails->surname = $this->prezime;
                $userDetails->email = $this->email;
                $userDetails->password = Hash::make($this->lozinka);
                $userDetails->is_admin = $this->isAdmin;

                $userDetails->save();                    


                array_push($this->tekstPoruke,"Uspješno ažurirano!");

                    //$this->id_termin = $termin[1];
                    //$this->pred_vj = $termin[3];
                return redirect()->to("users/edit/" . $userDetails->id . "");
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
        return view('livewire.create-users');
    }
}
