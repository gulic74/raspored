<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectPP;
use App\Models\Week;
use Carbon\Carbon;
use App\Models\LecturePeriod;
use App\Models\TimetableFlag;
use PDF;

class TimetablePpoController extends Controller
{
    public function index(){
        $subjectAll = SubjectPP::all();

        $weekDays = [
            '1' => 'Ponedjeljak',
            '2' => 'Utorak',
            '3' => 'Srijeda',
            '4' => 'Cetvrtak',
            '5' => 'Petak',
            '6' => 'Subota'
        ];

        $from = '08:00';
        $to = '20:00';
        $time = Carbon::parse($from);
        $timeRange = [];

        do{
            array_push($timeRange, [
                'start' => $time->format("H:i"),
                'real_start' => $time->addMinutes(15)->format("H:i"),
                'end' => $time->addMinutes(45)->format("H:i")                
            ]);    
        } while ($time->format("H:i") !== $to);

        $byWeeks = [];
        for($i = 1; $i <= 15; $i++){
            array_push($byWeeks, $i);
        }

        $weeksData = Week::all();

        return view('timetablePPO.index', compact('weekDays','timeRange', 'subjectAll', 'byWeeks'))->with('weeksData', $weeksData);
    }

    public function indexRaspored(Request $request){

        $timeTableFlag = TimetableFlag::all()->first();
        if($timeTableFlag->aktivanPPO == 0){
            if(auth()->user() != null){
                if(auth()->user()->is_admin != 1){
                    return view('timetable.index-construction')->with('poruka', $timeTableFlag->komentarPPO);
                }
            }else{
                return view('timetable.index-construction')->with('poruka', $timeTableFlag->komentarPPO);
            }            
        } 
             
        $byCourse = isset($request->smjer) ? $request->smjer : '';
        $bySemester = isset($request->semestar) ? $request->semestar : '';

        $byWeeksInitial = Week::where('course', $byCourse)->where('semester', $bySemester)->get();        
        $mytime = Carbon::now();
        $byWeekInitial = '1';

        foreach($byWeeksInitial as $byWeeksInitialOne){
            if((Carbon::parse($byWeeksInitialOne->start_day)->subDay(1))->lte($mytime) && (Carbon::parse($byWeeksInitialOne->start_day)->addDay(5))->gte($mytime)){
                $byWeekInitial = $byWeeksInitialOne->name;
            }
        }

        $byWeek = isset($request->byWeek) ? $request->byWeek : $byWeekInitial;        
   

        //return $byCourse;

        $byWeek_start = '';
        $byWeek_end = '';
        

        $lecturePeriods = $this->searchFilter($byCourse,$bySemester, $byWeek);

        //return $lecturePeriods;
      
        if(isset($byWeek)){
            $byWeek_start = Week::where('name', $byWeek)->where('course', $byCourse)->where('semester', $bySemester)->first();
            
            if($byWeek_start != NULL){
                $byWeek_start = date_create_from_format("Y-m-d", $byWeek_start->start_day)->format("d.m.Y.");
                $byWeek_end = date('d.m.Y.', strtotime($byWeek_start. ' + 5 days'));
            }
        }
        
        $weekDays = [
            '1' => 'Ponedjeljak',
            '2' => 'Utorak',
            '3' => 'Srijeda',
            '4' => 'Cetvrtak',
            '5' => 'Petak',
            '6' => 'Subota'
        ];

        $from = '20:00';

        foreach($lecturePeriods as $lecturePeriodsOne){
            if(strcmp($lecturePeriodsOne->hours, $from) < 0){
                $from = $lecturePeriodsOne->hours;
            }
        }

        if($from == '20:00'){
            $from = '08:00';
        }

        $to = '20:00';
        $time = Carbon::parse($from);
        $timeRange = [];
        $byWeeks = [];

        do{
            array_push($timeRange, [
                'start' => $time->format("H:i"),
                'real_start' => $time->addMinutes(15)->format("H:i"),
                'end' => $time->addMinutes(45)->format("H:i") 
            ]);    
        } while ($time->format("H:i") !== $to);

        for($i = 1; $i <= 15; $i++){
            array_push($byWeeks, $i);
        }
        
        /*if($request->has('exportPDF')){
            $pdf = PDF::loadView('pdfView',compact('lecturePeriods', 'weekDays', 'timeRange', 'byWeek_start', 'byWeek_end'))->setPaper('A4', 'landscape');
            
            return $pdf->download('raspored-sati.pdf');
        }*/
//return {};

        return view('timetablePPO.indexRaspored', compact('weekDays','byWeek','timeRange','byWeeks', 'byWeek_start', 'byWeek_end', 'lecturePeriods', 'byCourse','bySemester'));
    }

    public function searchFilter($byCourse, $bySemester, $byWeek){
        $kolegiji_svi = SubjectPP::where('course',$byCourse)->where('semester', $bySemester)->pluck('id');
        $lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $kolegiji_svi)->where('week', $byWeek)->get();
     
        return $lecturePeriods;
    }  

    
}
