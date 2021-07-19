<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kolegijiClass = DB::table('courses')
            ->select('id', 'ime', 'smjer', 'razina_studija', 'godina', 'semestar')
            ->get();
        
        $kolegiji = [];        
        foreach ($kolegijiClass as $kolegijClass){
            $jednaStavka = [$kolegijClass->id, $kolegijClass->ime, $kolegijClass->smjer, $kolegijClass->razina_studija, $kolegijClass->godina, $kolegijClass->semestar];
            array_push($kolegiji, $jednaStavka);           
        }

        return view('courses.index')->with('kolegiji', $kolegiji);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "bravo edit";

        $kolegijiClass = DB::table('courses')
            ->select('id', 'ime', 'smjer', 'razina_studija', 'godina', 'semestar')
            ->where('courses.id', $id)
            ->get();
        
        $kolegijPodaci = [];        
        foreach ($kolegijiClass as $kolegijClass){
            $jednaStavka = [$kolegijClass->id, $kolegijClass->ime, $kolegijClass->smjer, $kolegijClass->razina_studija, $kolegijClass->godina, $kolegijClass->semestar];
            array_push($kolegijPodaci, $jednaStavka);           
        }
        return view('courses.edit')->with('kolegijPodaci', $kolegijPodaci[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
