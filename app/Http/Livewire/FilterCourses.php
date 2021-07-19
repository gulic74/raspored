<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class FilterCourses extends Component
{
    public $confirmingItemDeletion = false;
    public $porukaObrisano = false;

    public $kolegiji;
    public $ime = "";

    public function mount($kolegiji)
    {
        $this->kolegiji = $kolegiji; 
        $this->ime = "";
    }

    public function confirmItemDeletion($id) 
    {
        $this->confirmingItemDeletion = $id;
    }

    public function deleteItem($id) 
    {
        Course::find($id)->delete();
        $this->confirmingItemDeletion = false;
        $this->porukaObrisano = true;
        return redirect()->to(route('courses.index'));
        ////session()->flash('message', 'Uspješno obrisan termin');
    }

    public function render()
    {
        return view('livewire.filter-courses');
    }
}
