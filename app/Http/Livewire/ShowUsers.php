<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Livewire\Component;

class ShowUsers extends Component
{
    public $rasporedZima;
    public $rasporedLjeto;
    public $osobniPodaci;

    public $detaljiKolegija = false;
    public $detalji;

    public function mount($rasporedZima, $rasporedLjeto, $osobniPodaci)
    {
        $this->rasporedZima = $rasporedZima; 
        $this->rasporedLjeto = $rasporedLjeto; 
        $this->osobniPodaci = $osobniPodaci;
        $this->detalji = ["", "", "", "", "", "", "", "", ""];
    }

    public function detalji($id) 
    {
        $this->detalji = [];
        $this->detaljiKolegija = true;

        $termini = DB::table('terms')
                ->join('user_term', 'terms.id', '=', 'user_term.term_id')
                ->join('users', 'users.id', '=', 'user_term.user_id')
                ->join('course_term', 'terms.id', '=', 'course_term.term_id')
                ->join('courses', 'courses.id', '=', 'course_term.course_id')
                ->join('classroom_term', 'terms.id', '=', 'classroom_term.term_id')
                ->join('classrooms', 'classrooms.id', '=', 'classroom_term.classroom_id')
                ->select('terms.tip', 'terms.grupa', 'terms.dan', 'terms.pocetak', 'terms.kraj', 'classrooms.ime as ucionica', 'courses.ime', 'courses.smjer', 'terms.id', 'users.name', 'users.surname')
                ->where('terms.id', $id)
                ->get();

        $raspored = [];        
        foreach ($termini as $termin){
            $nasao = false;
            $jednaStavka = ["", $termin->id, "", $termin->tip, $termin->grupa, $termin->dan, $termin->pocetak, "", $termin->kraj];
            foreach($raspored as $rasporedJedan){
                if($rasporedJedan[1] === $termin->id){
                    $nasao = true; 
                }
            }
            if(!$nasao){
                array_push($raspored, $jednaStavka);
            }            
        }
        foreach($raspored as &$rasporedJedan){
            foreach ($termini as $termin){
                if($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[2], $termin->ucionica)){
                    $rasporedJedan[2] = $rasporedJedan[2] . $termin->ucionica . "/"; 
                }
                if($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[7], ($termin->surname . " " . $termin->name))){
                    $rasporedJedan[7] = $rasporedJedan[7] . $termin->surname . " " . $termin->name . "/"; 
                }
                if($rasporedJedan[1] === $termin->id && !Str::contains($rasporedJedan[0], ($termin->ime . " " . $termin->smjer))){
                    $rasporedJedan[0] = $rasporedJedan[0] . $termin->ime . " " . $termin->smjer . "/"; 
                }
            }
            if(Str::endsWith($rasporedJedan[2], '/')){
                $rasporedJedan[2] = Str::substr($rasporedJedan[2], 0, Str::length($rasporedJedan[2])-1);
            }
            if(Str::endsWith($rasporedJedan[7], '/')){
                $rasporedJedan[7] = Str::substr($rasporedJedan[7], 0, Str::length($rasporedJedan[7])-1);
            }
            if(Str::endsWith($rasporedJedan[0], '/')){
                $rasporedJedan[0] = Str::substr($rasporedJedan[0], 0, Str::length($rasporedJedan[0])-1);
            }
        }

        $this->detalji = $raspored[0];
        //return redirect()->to(route('terms.index'));
        //session()->flash('message', 'Uspješno obrisan termin');
    }

    public function render()
    {
        return view('livewire.show-users');
    }
}
