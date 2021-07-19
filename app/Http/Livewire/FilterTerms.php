<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Term;

class FilterTerms extends Component
{

    public $confirmingItemDeletion = false;
    public $porukaObrisano = false;

    public $raspored;
    public $profesor = "";
    public $kolegij = "";
    public $ucionica = "";
    public $tip = "";
    public $smjer = "";
    public $grupa = "";
    public $pocetak = "";
    public $dan = "";

    public function mount($raspored)
    {
        $this->raspored = $raspored; 
        $this->profesor = "";
        $this->kolegij = "";
        $this->ucionica = "";
        $this->tip = "";
        $this->smjer = "";
        $this->grupa = "";
        $this->pocetak = "";
        $this->dan = "";
    }

    public function updated()
    {
        //$this->profesor = "aaaaa";
    }

    public function confirmItemDeletion($id) 
    {
        $this->confirmingItemDeletion = $id;
    }

    public function deleteItem($id) 
    {
        Term::find($id)->delete();
        $this->confirmingItemDeletion = false;
        $this->porukaObrisano = true;
        return redirect()->to(route('terms.index'));
        //session()->flash('message', 'Uspješno obrisan termin');
    }


    public function render()
    {
        return view('livewire.filter-terms');
    }
}
