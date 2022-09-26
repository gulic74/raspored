<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserSubjectPP;


class UsersSubjectPP extends Component
{
    public $subject;
    public $users;
    public $users_IDs;

    public $profesorSearch = "";
    public $odabirProfesor = [];

    public $poruka;
    public $tekstPoruke;

    public function mount($subject, $users_IDs)
    {
        $this->subject = $subject; 
        $this->profesorSearch = "";
        $this->odabirProfesor = [];
        $this->users_IDs = $users_IDs;

        if(Str::contains($users_IDs, '-') || Str::of($users_IDs)->length() > 0){
            $profesori_id = explode("-", $users_IDs);
            foreach ($profesori_id as $profesor_id){
                $userTrenutni = User::find($profesor_id);
                $this->odabirProfesor[$userTrenutni->id] = $userTrenutni->name . " " . $userTrenutni->surname;
            }
        }

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
        $this->poruka = 0;
        $this->tekstPoruke = [];
    }

    public function brisiProfesora(string $profesor)
    {
        $results = array_search($profesor, $this->odabirProfesor, true);
        if($results !== false) {
            unset($this->odabirProfesor[$results]);   
        }       
        $this->profesorSearch = "";
        $this->poruka = 0;
        $this->tekstPoruke = [];
    }

    public function zatvoriPoruku()
    {
        //$this->ignoreUcionica = ($this->ignoreUcionica == 1) ? 0 : 1;
        $this->poruka = 0;
        $this->tekstPoruke = [];   
    }

    public function noviTeachers(){ 
        if(Auth::user()->is_admin){
            
                //ažuriranje termina s profesorom
                DB::table('user_subject_p_p_s')->where('subject_p_p_id', $this->subject->id)->delete();                    
                foreach($this->odabirProfesor as $key => $value) {
                    $userSubjectPPNovo = new UserSubjectPP();
                    $userSubjectPPNovo->user_id = $key;
                    $userSubjectPPNovo->subject_p_p_id = $this->subject->id;
                    $userSubjectPPNovo->save();
                }  
            
            array_push($this->tekstPoruke,"Uspješno ažurirano!");
            $this->poruka = 1;
        }
    }

    public function render()
    {
        $this->users = DB::table('users')->select('id', 'name', 'surname')->get();
        return view('livewire.users-subject-p-p', ['users' => $this->users]);
    }
}
