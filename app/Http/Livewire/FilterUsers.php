<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class FilterUsers extends Component
{
    public $confirmingItemDeletion = false;
    public $porukaObrisano = false;

    public $profesori;
    public $imePrezime = "";

    public function mount($profesori)
    {
        $this->profesori = $profesori; 
        $this->imePrezime = "";
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
        User::find($id)->delete();
        $this->confirmingItemDeletion = false;
        $this->porukaObrisano = true;
        return redirect()->to(route('users.index'));
        //session()->flash('message', 'Uspješno obrisan termin');
    }

    public function render()
    {
        return view('livewire.filter-users');
    }
}
