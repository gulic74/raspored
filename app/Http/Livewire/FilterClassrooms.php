<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Classroom;

class FilterClassrooms extends Component
{
    public $confirmingItemDeletion = false;
    public $porukaObrisano = false;

    public $ucionice;
    public $ime = "";

    public function mount($ucionice)
    {
        $this->ucionice = $ucionice; 
        $this->ime = "";
    }

    public function confirmItemDeletion($id) 
    {
        $this->confirmingItemDeletion = $id;
    }

    public function deleteItem($id) 
    {
        Classroom::find($id)->delete();
        $this->confirmingItemDeletion = false;
        $this->porukaObrisano = true;
        return redirect()->to(route('classrooms.index'));
        //session()->flash('message', 'Uspješno obrisan termin');
    }

    public function render()
    {
        return view('livewire.filter-classrooms');
    }
}
