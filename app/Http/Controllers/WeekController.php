<?php

namespace App\Http\Controllers;

use App\Models\Week;
use Illuminate\Http\Request;

class WeekController extends Controller
{
    public function index(){
        $weeks = Week::orderBy('course', 'ASC')->orderBy('semester', 'ASC')->orderBy('name', 'ASC')->get();

        return view('weeks.index', compact('weeks'));
    }


    public function create(){
        return view('weeks.create');
    }


    public function store(Request $request){
        $request->validate([
            'ime' => 'required|integer',
            'datum_pocetka' =>'required',
            'smjer' => 'required',
            'semestar' => 'required',
        ]);

        $week = new Week();
        $week->name = request('ime');
        $week->start_day = request('datum_pocetka');
        $week->course = request('smjer');
        $week->semester = request('semestar');
        $week->save();

        return redirect('/week')->with('success', 'Uspješno je spremljen novi tjedan!');
    }


    public function edit(Week $week){

        return view('weeks.edit', compact('week'));
    }


    public function update(Request $request, $id){
        $week = Week::where("id","=",$id)->get()->first();

        $request->validate([
            'ime' => 'required',
            'datum_pocetka' =>'required',
            'smjer' => 'required',
            'semestar' => 'required',
        ]);

        $week->name = request('ime');
        $week->start_day = request('datum_pocetka');
        $week->course = request('smjer');
        $week->semester = request('semestar');
        $week->save();

        return redirect('/week')->with('success', 'Uspješno je ažuriran tjedan!');
    }

    
    public function destroy($id){
        Week::where('id', $id)->delete();

        return redirect('/week')->with('success', 'Uspješno je izbrisan tjedan!');
    }
}
