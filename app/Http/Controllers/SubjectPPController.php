<?php

namespace App\Http\Controllers;

use App\Models\SubjectPP;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubjectPPController extends Controller
{
    public function index(){
        $subjects = SubjectPP::all();
        $subjectWithUser = [];        
        foreach($subjects as $subject){
            $profesori = "";
            $usersSubjectPP = DB::table('user_subject_p_p_s')->select('user_id')->where("subject_p_p_id", $subject->id)->get();
            foreach($usersSubjectPP as $user){
                $userNameSurname = DB::table('users')->select('surname', 'name')->where("id", $user->user_id)->get()->first();
                if(Str::length($profesori) > 0){
                    $profesori .= ', ' . $userNameSurname->name . " " . $userNameSurname->surname;
                } else {
                    $profesori .= $userNameSurname->name . " " . $userNameSurname->surname;
                }
            }
            $jednaStavka = [$subject->id, $subject->name, $subject->course, $subject->semester, $subject->hours, $subject->current_hours, $profesori];
            array_push($subjectWithUser, $jednaStavka);
        }


        /*$userSubjectPP = ""; 
        $usersSubjectPP = DB::table('user_subject_p_p_s')->select('user_id')->where("subject_p_p_id",$subject->id)->get();
        foreach($usersSubjectPP as $user){
            if(Str::length($users_IDs) > 0){
                $users_IDs .= '-' . $user->user_id;
            } else {
                $users_IDs .= $user->user_id;
            }
        } */
        return view('subjectsPP.index')->with('subjectWithUser', $subjectWithUser);
    }


    public function create(){
        return view('subjectsPP.create');
    }


    public function store(Request $request){
        $request->validate([
            'ime' => 'required|unique:subject_p_p_s,name,NULL,id,course,' .request('smjer'),
            'smjer' => 'required',
            'semestar' => 'required',
            'brojSati' => 'required|integer',
        ]);

        $subject = new SubjectPP();
        $subject->name = request('ime');
        $subject->course = request('smjer');
        $subject->semester = request('semestar');
        $subject->hours = request('brojSati');
        $subject->current_hours = request('brojSati');

        $subject->save();
        return redirect('/subject')->with('success', 'Uspješno je spremljen novi kolegij!');
    }


    public function edit(SubjectPP $subject){
        return view('subjectsPP.edit', compact('subject'));
    }

    public function editusers(SubjectPP $subject){  
        $users_IDs = ""; 
        $usersSubjectPP = DB::table('user_subject_p_p_s')->select('user_id')->where("subject_p_p_id",$subject->id)->get();
        foreach($usersSubjectPP as $user){
            if(Str::length($users_IDs) > 0){
                $users_IDs .= '-' . $user->user_id;
            } else {
                $users_IDs .= $user->user_id;
            }
        } 
        return view('subjectsPP.editusers', compact('subject'))->with('users_IDs', $users_IDs);
    }


    public function update(Request $request, $id){
        $subject = SubjectPP::where("id","=",$id)->get()->first();

        $request->validate([
            'ime' => 'required',
            'smjer' => 'required',
            'semestar' => 'required',
            'brojSati' => 'required|integer',
        ]);

        $subject->name = request('ime');
        $subject->course = request('smjer');
        $subject->semester = request('semestar');
        $brojSati = $subject->hours;
        if($brojSati > request('brojSati')){
            $subject->current_hours -= ($brojSati - request('brojSati'));
        }else{
            $subject->current_hours += (request('brojSati') - $brojSati);
        }
        $subject->hours = request('brojSati');

        $subject->save();

        return redirect('/subject')->with('success', 'Uspješno je ažuriran kolegij!');
    }

    
    public function destroy($id){
        SubjectPP::where('id', $id)->delete();

        return redirect('/subject')->with('success', 'Uspješno je izbrisan kolegij!');
    }

    public function search(Request $request){
        $search = $request->input('search') ? : "";

        $subjects = SubjectPP::query()
        ->where(function(Builder $builder) use ($search){
            $builder->where('name', 'LIKE', "%{$search}%")
            ->orWhere('course', 'LIKE', "%{$search}%");
        })->get();

        $subjectWithUser = [];        
        foreach($subjects as $subject){
            $profesori = "";
            $usersSubjectPP = DB::table('user_subject_p_p_s')->select('user_id')->where("subject_p_p_id", $subject->id)->get();
            foreach($usersSubjectPP as $user){
                $userNameSurname = DB::table('users')->select('surname', 'name')->where("id", $user->user_id)->get()->first();
                if(Str::length($profesori) > 0){
                    $profesori .= ', ' . $userNameSurname->name . " " . $userNameSurname->surname;
                } else {
                    $profesori .= $userNameSurname->name . " " . $userNameSurname->surname;
                }
            }
            $jednaStavka = [$subject->id, $subject->name, $subject->course, $subject->semester, $subject->hours, $subject->current_hours, $profesori];
            array_push($subjectWithUser, $jednaStavka);
        }
        

        if(count($subjects) > 0){
            return view('subjectsPP.index', compact('subjectWithUser','search'));
        } else {
            return redirect('/subject')->with('warning', 'Nema traženog kolegija!');
        }
        
    }
}
