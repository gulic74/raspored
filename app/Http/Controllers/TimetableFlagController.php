<?php

namespace App\Http\Controllers;

use App\Models\TimetableFlag;
use Illuminate\Http\Request;

class TimetableFlagController extends Controller
{
    public function index()
    {    
        $count = TimetableFlag::count();
        if($count == 0){            
            $timeTableFlag = new TimetableFlag;
            $timeTableFlag->komentarRedovni = "nema komentara";
            $timeTableFlag->aktivanRedovni = 1;
            $timeTableFlag->komentarIzvanredni = "nema komentara";
            $timeTableFlag->aktivanIzvanredni = 1;
            $timeTableFlag->komentarPPO = "nema komentara";
            $timeTableFlag->aktivanPPO = 1;
            $timeTableFlag->save();
            return view('timetableflags.edit')->with('timeTableFlag', $timeTableFlag);
            //return $timeTableFlag;
        } else {
            $timeTableFlag = TimetableFlag::all()->first();
            /*$timeTableFlag->komentarRedovni = "nema komentara";
            $timeTableFlag->aktivanRedovni = 1;
            $timeTableFlag->komentarIzvanredni = "nema komentara";
            $timeTableFlag->aktivanIzvanredni = 1;
            $timeTableFlag->komentarPPO = "nema komentara";
            $timeTableFlag->aktivanPPO = 1;*/
            return view('timetableflags.edit')->with('timeTableFlag', $timeTableFlag);
            //return $timeTableFlag;
        }        
    }

    public function storeflags(Request $request)
    {
        $this->validate($request, [
            'aktivanRedovni' => ['boolean'],
            'komentarRedovni' => ['required', 'string', 'max:150'],
            'aktivanIzvanredni' => ['boolean'],
            'komentarIzvanredni' => ['required', 'string', 'max:150'],
            'aktivanPPO' => ['boolean'],
            'komentarPPO' => ['required', 'string', 'max:150'],
        ]);
        $timeTableFlag = TimetableFlag::all()->first();
        $timeTableFlag->komentarRedovni = $request->input('komentarRedovni');
        $timeTableFlag->aktivanRedovni = ($request->input('aktivanRedovni')) ? 1 : 0;
        $timeTableFlag->komentarIzvanredni = $request->input('komentarIzvanredni');
        $timeTableFlag->aktivanIzvanredni = ($request->input('aktivanIzvanredni')) ? 1 : 0;
        $timeTableFlag->komentarPPO = $request->input('komentarPPO');
        $timeTableFlag->aktivanPPO = ($request->input('aktivanPPO')) ? 1 : 0;
        $timeTableFlag->save();
        return redirect('timetableflag')->with('timeTableFlag', $timeTableFlag)->with('success', 'Vidljivost rasporeda je uspješno ažurirana');
    }
}
