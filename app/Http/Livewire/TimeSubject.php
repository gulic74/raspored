<?php

namespace App\Http\Livewire;

use App\Models\Classroom;
use App\Models\LecturePeriod;
use App\Models\SubjectPP;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str;


class TimeSubject extends Component
{   
    public $day;
    public $hours;
    public $lecturePeriods;
    public $timeRange;
    public $weekDays; 
    public $weeksData;
    
    public $kolegiji_sviPodaci;
   
    
    public $classrooms;
    public $subjectPPs;


    public $data;
    public $data_id;
    public $updateSubject;
    public $updateSubjectBefore;
    public $updateClassroom;
    public $updateComment;
    public $updateDay = "";
    public $updateHours = "";

    public $defaultNautika = '422';
    public $defaultBrodostrojarstvo = '410b';

    public $updateItemLecture = false;

    protected $rules = [
        'timetable.classrooms' => 'required',
        'timetable.subjectPPs' => 'required', 
        'timetable.comments',
    ];

    //ponedjeljak
    public $kolegij_pon_8;
    public $ucionica_pon_8;
    public $komentar_pon_8;

    public $kolegij_pon_9;
    public $ucionica_pon_9;
    public $komentar_pon_9;

    public $kolegij_pon_10;
    public $ucionica_pon_10;
    public $komentar_pon_10;

    public $kolegij_pon_11;
    public $ucionica_pon_11;
    public $komentar_pon_11;

    public $kolegij_pon_12;
    public $ucionica_pon_12;
    public $komentar_pon_12;

    public $kolegij_pon_13;
    public $ucionica_pon_13;
    public $komentar_pon_13;

    public $kolegij_pon_14;
    public $ucionica_pon_14;
    public $komentar_pon_14;

    public $kolegij_pon_15;
    public $ucionica_pon_15;
    public $komentar_pon_15;

    public $kolegij_pon_16;
    public $ucionica_pon_16;
    public $komentar_pon_16;

    public $kolegij_pon_17;
    public $ucionica_pon_17;
    public $komentar_pon_17;

    public $kolegij_pon_18;
    public $ucionica_pon_18;
    public $komentar_pon_18;

    public $kolegij_pon_19;
    public $ucionica_pon_19;
    public $komentar_pon_19;

    public $kolegij_pon_20;
    public $ucionica_pon_20;
    public $komentar_pon_20;

    public $kolegij_pon_21;
    public $ucionica_pon_21;
    public $komentar_pon_21;


    //utorak
    public $kolegij_uto_8;
    public $ucionica_uto_8;
    public $komentar_uto_8;

    public $kolegij_uto_9;
    public $ucionica_uto_9;
    public $komentar_uto_9;

    public $kolegij_uto_10;
    public $ucionica_uto_10;
    public $komentar_uto_10;

    public $kolegij_uto_11;
    public $ucionica_uto_11;
    public $komentar_uto_11;

    public $kolegij_uto_12;
    public $ucionica_uto_12;
    public $komentar_uto_12;

    public $kolegij_uto_13;
    public $ucionica_uto_13;
    public $komentar_uto_13;

    public $kolegij_uto_14;
    public $ucionica_uto_14;
    public $komentar_uto_14;

    public $kolegij_uto_15;
    public $ucionica_uto_15;
    public $komentar_uto_15;

    public $kolegij_uto_16;
    public $ucionica_uto_16;
    public $komentar_uto_16;

    public $kolegij_uto_17;
    public $ucionica_uto_17;
    public $komentar_uto_17;

    public $kolegij_uto_18;
    public $ucionica_uto_18;
    public $komentar_uto_18;

    public $kolegij_uto_19;
    public $ucionica_uto_19;
    public $komentar_uto_19;

    public $kolegij_uto_20;
    public $ucionica_uto_20;
    public $komentar_uto_20;

    public $kolegij_uto_21;
    public $ucionica_uto_21;
    public $komentar_uto_21;


    //srijeda
    public $kolegij_sri_8;
    public $ucionica_sri_8;
    public $komentar_sri_8;

    public $kolegij_sri_9;
    public $ucionica_sri_9;
    public $komentar_sri_9;

    public $kolegij_sri_10;
    public $ucionica_sri_10;
    public $komentar_sri_10;

    public $kolegij_sri_11;
    public $ucionica_sri_11;
    public $komentar_sri_11;

    public $kolegij_sri_12;
    public $ucionica_sri_12;
    public $komentar_sri_12;

    public $kolegij_sri_13;
    public $ucionica_sri_13;
    public $komentar_sri_13;

    public $kolegij_sri_14;
    public $ucionica_sri_14;
    public $komentar_sri_14;

    public $kolegij_sri_15;
    public $ucionica_sri_15;
    public $komentar_sri_15;

    public $kolegij_sri_16;
    public $ucionica_sri_16;
    public $komentar_sri_16;

    public $kolegij_sri_17;
    public $ucionica_sri_17;
    public $komentar_sri_17;

    public $kolegij_sri_18;
    public $ucionica_sri_18;
    public $komentar_sri_18;

    public $kolegij_sri_19;
    public $ucionica_sri_19;
    public $komentar_sri_19;

    public $kolegij_sri_20;
    public $ucionica_sri_20;
    public $komentar_sri_20;

    public $kolegij_sri_21;
    public $ucionica_sri_21;
    public $komentar_sri_21;

    //cetvrtak
    public $kolegij_cet_8;
    public $ucionica_cet_8;
    public $komentar_cet_8;

    public $kolegij_cet_9;
    public $ucionica_cet_9;
    public $komentar_cet_9;

    public $kolegij_cet_10;
    public $ucionica_cet_10;
    public $komentar_cet_10;

    public $kolegij_cet_11;
    public $ucionica_cet_11;
    public $komentar_cet_11;

    public $kolegij_cet_12;
    public $ucionica_cet_12;
    public $komentar_cet_12;

    public $kolegij_cet_13;
    public $ucionica_cet_13;
    public $komentar_cet_13;

    public $kolegij_cet_14;
    public $ucionica_cet_14;
    public $komentar_cet_14;

    public $kolegij_cet_15;
    public $ucionica_cet_15;
    public $komentar_cet_15;

    public $kolegij_cet_16;
    public $ucionica_cet_16;
    public $komentar_cet_16;

    public $kolegij_cet_17;
    public $ucionica_cet_17;
    public $komentar_cet_17;

    public $kolegij_cet_18;
    public $ucionica_cet_18;
    public $komentar_cet_18;

    public $kolegij_cet_19;
    public $ucionica_cet_19;
    public $komentar_cet_19;

    public $kolegij_cet_20;
    public $ucionica_cet_20;
    public $komentar_cet_20;

    public $kolegij_cet_21;
    public $ucionica_cet_21;
    public $komentar_cet_21;

    //petak
    public $kolegij_pet_8;
    public $ucionica_pet_8;
    public $komentar_pet_8;

    public $kolegij_pet_9;
    public $ucionica_pet_9;
    public $komentar_pet_9;

    public $kolegij_pet_10;
    public $ucionica_pet_10;
    public $komentar_pet_10;

    public $kolegij_pet_11;
    public $ucionica_pet_11;
    public $komentar_pet_11;

    public $kolegij_pet_12;
    public $ucionica_pet_12;
    public $komentar_pet_12;

    public $kolegij_pet_13;
    public $ucionica_pet_13;
    public $komentar_pet_13;

    public $kolegij_pet_14;
    public $ucionica_pet_14;
    public $komentar_pet_14;

    public $kolegij_pet_15;
    public $ucionica_pet_15;
    public $komentar_pet_15;

    public $kolegij_pet_16;
    public $ucionica_pet_16;
    public $komentar_pet_16;

    public $kolegij_pet_17;
    public $ucionica_pet_17;
    public $komentar_pet_17;

    public $kolegij_pet_18;
    public $ucionica_pet_18;
    public $komentar_pet_18;

    public $kolegij_pet_19;
    public $ucionica_pet_19;
    public $komentar_pet_19;

    public $kolegij_pet_20;
    public $ucionica_pet_20;
    public $komentar_pet_20;

    public $kolegij_pet_21;
    public $ucionica_pet_21;
    public $komentar_pet_21;

    //subota
    public $kolegij_sub_8;
    public $ucionica_sub_8;
    public $komentar_sub_8;

    public $kolegij_sub_9;
    public $ucionica_sub_9;
    public $komentar_sub_9;

    public $kolegij_sub_10;
    public $ucionica_sub_10;
    public $komentar_sub_10;

    public $kolegij_sub_11;
    public $ucionica_sub_11;
    public $komentar_sub_11;

    public $kolegij_sub_12;
    public $ucionica_sub_12;
    public $komentar_sub_12;

    public $kolegij_sub_13;
    public $ucionica_sub_13;
    public $komentar_sub_13;

    public $kolegij_sub_14;
    public $ucionica_sub_14;
    public $komentar_sub_14;

    public $kolegij_sub_15;
    public $ucionica_sub_15;
    public $komentar_sub_15;

    public $kolegij_sub_16;
    public $ucionica_sub_16;
    public $komentar_sub_16;

    public $kolegij_sub_17;
    public $ucionica_sub_17;
    public $komentar_sub_17;

    public $kolegij_sub_18;
    public $ucionica_sub_18;
    public $komentar_sub_18;

    public $kolegij_sub_19;
    public $ucionica_sub_19;
    public $komentar_sub_19;

    public $kolegij_sub_20;
    public $ucionica_sub_20;
    public $komentar_sub_20;

    public $kolegij_sub_21;
    public $ucionica_sub_21;
    public $komentar_sub_21;

    public $byCourse = "Nautika";
    public $bySemester = "ZIMSKI";
    public $byWeeks;
    public $byWeek = '1';

    public $dani = ['pon', 'uto', 'sri', 'cet', 'pet', 'sub',];
    public $sati = ['8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'];

    public $kolegiji_svi;

    public $podaci = '';

    public function mount($timeRange, $weekDays, $byWeeks, $weeksData, $infoPPOone){
        $this->defaultNautika = $infoPPOone->defaultNautikaUciona;
        $this->defaultBrodostrojarstvo = $infoPPOone->defaultBrodostrojarstvoUciona;

        

        $this->weeksData = $weeksData;

        $this->classrooms = Classroom::where('ime', '=', '207')
                                    ->orWhere('ime', '=', '227')
                                    ->orWhere('ime', '=', '401')
                                    ->orWhere('ime', '=', '410b')
                                    ->orWhere('ime', '=', '422')
                                    ->orWhere('ime', '=', '423')
                                    ->orWhere('ime', '=', '503')
                                    ->orWhere('ime', '=', '504')->orderBy('ime', 'ASC')->get();
        $this->kolegiji_svi = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->pluck('id');
        $this->kolegiji_sviPodaci = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        $this->lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $this->kolegiji_svi)->where('week', $this->byWeek)->get();
     
        $this->subjectPPs = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();

        if ($this->byCourse == 'Nautika'){
            foreach($this->dani as $dan){
                foreach($this->sati as $sat){
                    $this->{"ucionica_" . $dan . "_" . $sat} = $this->classrooms->where('ime', '=', $this->defaultNautika)->pluck('id')->first();
                }
            }            
        } elseif($this->byCourse == 'Brodostrojarstvo'){
            foreach($this->dani as $dan){
                foreach($this->sati as $sat){
                    $this->{"ucionica_" . $dan . "_" . $sat} = $this->classrooms->where('ime', '=', $this->defaultBrodostrojarstvo)->pluck('id')->first();
                }
            }
        }
    }


    public function render()
    {
        /*if ($this->byCourse == 'Nautika'){
            foreach($this->dani as $dan){
                foreach($this->sati as $sat){
                    $this->{"ucionica_" . $dan . "_" . $sat} = $this->classrooms->where('ime', '=', $this->defaultNautika)->pluck('id')->first();
                }
            }            
        } elseif($this->byCourse == 'Brodostrojarstvo'){
            foreach($this->dani as $dan){
                foreach($this->sati as $sat){
                    $this->{"ucionica_" . $dan . "_" . $sat} = $this->classrooms->where('ime', '=', $this->defaultBrodostrojarstvo)->pluck('id')->first();
                }
            }
        }*/

        $this->classrooms = Classroom::where('ime', '=', '207')
                                    ->orWhere('ime', '=', '227')
                                    ->orWhere('ime', '=', '401')
                                    ->orWhere('ime', '=', '410b')
                                    ->orWhere('ime', '=', '422')
                                    ->orWhere('ime', '=', '423')
                                    ->orWhere('ime', '=', '503')
                                    ->orWhere('ime', '=', '504')->orderBy('ime', 'ASC')->get();
        return view('livewire.time-subject',[
            'lecturePeriods' => $this->lecturePeriods]);
    }


    public function filterSearch(){
        //sleep(1);
        $this->byWeek = (string)$this->byWeek;
        $this->kolegiji_svi = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->pluck('id');
        $this->kolegiji_sviPodaci = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        
        $this->lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $this->kolegiji_svi)->where('week', $this->byWeek)->get();

        $this->subjectPPs = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();

        if ($this->byCourse == 'Nautika'){
            foreach($this->dani as $dan){
                foreach($this->sati as $sat){
                    $this->{"ucionica_" . $dan . "_" . $sat} = $this->classrooms->where('ime', '=', $this->defaultNautika)->pluck('id')->first();
                }
            }            
        } elseif($this->byCourse == 'Brodostrojarstvo'){
            foreach($this->dani as $dan){
                foreach($this->sati as $sat){
                    $this->{"ucionica_" . $dan . "_" . $sat} = $this->classrooms->where('ime', '=', $this->defaultBrodostrojarstvo)->pluck('id')->first();
                }
            }
        }
    }

    public function submitAll(){
        $this->podaci = $this->podaci . 'blabla';
        foreach($this->dani as $dan){
            foreach($this->sati as $sat){
                //$this->podaci = $this->podaci . 'blabla';
                //public $kolegij_sub_9;
                //public $ucionica_sub_9;
                //public $komentar_sub_9;
                //$this->podaci = $this->podaci . $this->{"kolegij_" . 'pon' . "_" . '8'};
                if(Str::length($this->{"kolegij_" . $dan . "_" . $sat})>0 && $this->{"kolegij_" . $dan . "_" . $sat} != 'Kolegij: ' && Str::length($this->{"ucionica_" . $dan . "_" . $sat})>0){
                    $this->podaci = $this->podaci . "---" .  $this->{"kolegij_" . $dan . "_" . $sat} . " " . $this->{"ucionica_" . $dan . "_" . $sat} . $this->{"komentar_" . $dan . "_" . $sat};
                    
                    $danZaSpremanje = 'Ponedjeljak';                    
                    if($dan == 'uto'){
                        $danZaSpremanje = 'Utorak';
                    } elseif ($dan == 'sri'){
                        $danZaSpremanje = 'Srijeda';
                    } elseif ($dan == 'cet'){
                        $danZaSpremanje = 'Cetvrtak';
                    } elseif ($dan == 'pet'){
                        $danZaSpremanje = 'Petak';
                    } elseif ($dan == 'sub'){
                        $danZaSpremanje = 'Subota';
                    }

                    LecturePeriod::create([
                        'subjectPP_id' => $this->{"kolegij_".$dan."_".$sat},           
                        'classroom_id' => $this->{"ucionica_".$dan."_".$sat},                     
                        'comment' => $this->{"komentar_".$dan."_".$sat},              
                        'day' => $danZaSpremanje,
                        'hours' => ((Str::length($sat) == 1 ? '0'. $sat : $sat) . ':00'),
                        'week' => $this->byWeek,
                    ]);

                    $hours_duration = SubjectPP::where('id',$this->{"kolegij_".$dan."_".$sat})->first();
                    $hours_duration->current_hours = ($hours_duration->current_hours) - 1;
                    $hours_duration->save();

                    $this->{"ucionica_".$dan."_".$sat} = "";
                    $this->{"komentar_".$dan."_".$sat} = "";
                    $this->{"kolegij_".$dan."_".$sat} = "";
                }
                //$this->{"ucionica_" . $dan . "_" . $sat} = $this->classrooms->where('ime', '=', $this->defaultNautika)->pluck('id')->first();
            }
        }  

        $this->kolegiji_svi = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->pluck('id');
        $this->kolegiji_sviPodaci = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        $this->lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $this->kolegiji_svi)->where('week', $this->byWeek)->get();
     
        $this->subjectPPs = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
    }


    public function submit($day_time){
        $classroomUnable = false;

        foreach($this->weekDays as $day){
            foreach($this->timeRange as $time){
                $newString = $day.'_'.$time['start'];

                if(strcmp($day_time,$newString) == 0){
                    $dayString = strtolower(substr($day, 0, 3)); 

                    $timeString = strrchr($day_time, '_');
                    $timeString = substr($timeString, 1, 2);

                    if($timeString[0] == "0"){
                        $timeString = substr($timeString, 1, 1);
                    }
                    $this->validate([                  
                        "kolegij_".$dayString."_".$timeString  => 'required',
                        "ucionica_".$dayString."_".$timeString => 'required',
                     ]);

                    $check_classroom = LecturePeriod::where('classroom_id', $this->{"ucionica_".$dayString."_".$timeString})
                                                    ->where('hours', $time['start'])
                                                    ->where('day', $day)->where('week', $this->byWeek)
                                                    ->get()->first();
                    if(($check_classroom)){
                        $this->{"ucionica_".$dayString."_".$timeString} = "";
                        session()->flash('warning','Odabrana predavaonica je zauzeta!');
                        $classroomUnable = true;
                        //return $this->mount();
                    } else{
                     
                    LecturePeriod::create([
                        'subjectPP_id' => $this->{"kolegij_".$dayString."_".$timeString},           
                        'classroom_id' => $this->{"ucionica_".$dayString."_".$timeString},                     
                        'comment' => $this->{"komentar_".$dayString."_".$timeString},              
                        'day' => $day,
                        'hours' => $time['start'],
                        'week' => $this->byWeek,
                    ]); 
                    }
                }
            }
        }

        if(!$classroomUnable){
            $hours_duration = SubjectPP::where('id',$this->{"kolegij_".$dayString."_".$timeString})->first();
            $hours_duration->current_hours = ($hours_duration->current_hours) - 1;
            $hours_duration->save();

            $this->{"ucionica_".$dayString."_".$timeString} = "";
            $this->{"komentar_".$dayString."_".$timeString} = "";
            $this->{"kolegij_".$dayString."_".$timeString} = "";
            
            session()->flash('message','Uspješno spremljen novi termin!');
        }

        //$this->mount();

        $this->kolegiji_svi = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->pluck('id');
        $this->kolegiji_sviPodaci = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        $this->lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $this->kolegiji_svi)->where('week', $this->byWeek)->get();
     
        $this->subjectPPs = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
    }


    public function delete(){
        $data = LecturePeriod::find($this->data_id);

        $this->updateItemLecture = false;

        if($data){
            $hours_duration = SubjectPP::where('id',$data->subjectPP_id)->first();
            $hours_duration->current_hours = ($hours_duration->current_hours) + 1;
            $hours_duration->save();

            LecturePeriod::find($data->id)->delete();
        
            session()->flash('message','Uspješno izbrisan termin!');
            //return redirect(request()->header('Referer'));

        $this->kolegiji_svi = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->pluck('id');
        $this->kolegiji_sviPodaci = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        $this->lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $this->kolegiji_svi)->where('week', $this->byWeek)->get();
     
        $this->subjectPPs = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        }   
    }    


    public function edit($id)
    {
        $data = LecturePeriod::findOrFail($id);
        $this->data_id = $id;
        $this->updateSubject = $data->subjectPP_id;
        $this->updateSubjectBefore = $data->subjectPP_id;
        $this->updateClassroom = $data->classroom_id;
        $this->updateComment = $data->comment;
        $this->updateDay = $data->day;
        $this->updateHours = $data->hours;
    }


    public function update(){
        $data = LecturePeriod::find($this->data_id);
        

        $data->update([
            'subjectPP_id'=> $this->updateSubject,
            'classroom_id' => $this->updateClassroom,
            'comment'=> $this->updateComment
        ]);

        if($this->updateSubject != $this->updateSubjectBefore){
            $hours_duration = SubjectPP::where('id', $this->updateSubject)->first();
            $hours_duration->current_hours = ($hours_duration->current_hours) - 1;
            $hours_duration->save();

            $hours_duration2 = SubjectPP::where('id', $this->updateSubjectBefore)->first();
            $hours_duration2->current_hours = ($hours_duration2->current_hours) + 1;
            $hours_duration2->save();
        }

        $this->updateItemLecture = false;

        session()->flash('message', 'Termin je uspješno ažuriran!');
        //$this->emit('lectureStore');
        //$this->mount();

        $this->kolegiji_svi = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->pluck('id');
        $this->kolegiji_sviPodaci = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        $this->lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $this->kolegiji_svi)->where('week', $this->byWeek)->get();

        $this->subjectPPs = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
    }  


    public function updateItemLecture($id) 
    {
        

        $data = LecturePeriod::findOrFail($id);
        $this->data_id = $id;
        $this->updateSubject = $data->subjectPP_id;
        $this->updateSubjectBefore = $data->subjectPP_id;
        $this->updateClassroom = $data->classroom_id;
        $this->updateComment = $data->comment;
        $this->updateDay = $data->day;
        $this->updateHours = $data->hours;

        $this->updateItemLecture = $id;
    }

    public function deleteItem($id){
        $data = LecturePeriod::find($this->data_id);

        $this->updateItemLecture = false;

        if($data){
            $hours_duration = SubjectPP::where('id',$data->subjectPP_id)->first();
            $hours_duration->current_hours = ($hours_duration->current_hours) + 1;
            $hours_duration->save();

            LecturePeriod::find($data->id)->delete();
        
            session()->flash('message','Uspješno izbrisan termin!');
            //return redirect(request()->header('Referer'));

        $this->kolegiji_svi = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->pluck('id');
        $this->kolegiji_sviPodaci = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        $this->lecturePeriods = LecturePeriod::whereIn('subjectPP_id', $this->kolegiji_svi)->where('week', $this->byWeek)->get();
     
        $this->subjectPPs = SubjectPP::where('course',$this->byCourse)->where('semester', $this->bySemester)->get();
        }   
    }
}



