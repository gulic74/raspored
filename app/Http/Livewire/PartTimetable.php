<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PartTimetable extends Component
{

    public $partTimesProbaArrayLiv = [];
    public $minDateLiv;
    public $maxDateLiv;
    public $minDatePonLiv;
    public $datePonTrenLiv;
    public $datePetTrenLiv;
    public $dateDanTjedanTrenLiv;
    public $smjer;
    public $studij;
    public $godina;
    public $semestar;
    public $weekDays;
    public $timeRange;
    public $smjerTekst;
    public $studijTekst;
    public $semestarTekst;
    public $godinaTekst;
    public $prethodniSljedeci;
    public $datumTrenutnogTjednaPon;
    public $datumTrenutnogTjednaPon2;

    public function mount($partTimesProbaArray, $minDate, $maxDate, $minDatePon, $smjer, $studij, $godina, $semestar, $prethodniSljedeci, $datumTrenutnogTjednaPon)
    {
        $this->partTimesProbaArrayLiv = [...$partTimesProbaArray];
        $this->minDateLiv = $minDate;
        $this->maxDateLiv = $maxDate;
        $this->minDatePonLiv = $minDatePon;
        $this->prethodniSljedeci = $prethodniSljedeci;
        //$this->datumTrenutnogTjednaPon = $datumTrenutnogTjednaPon;
        if ($this->prethodniSljedeci == '0') { 
            $this->datumTrenutnogTjednaPon = clone $this->minDatePonLiv; 
            $this->datumTrenutnogTjednaPon2 = clone $this->minDatePonLiv;          
            $this->datePonTrenLiv = clone $this->minDatePonLiv;
            $this->datePetTrenLiv = clone $this->datePonTrenLiv;
            $this->datePetTrenLiv->addDays(4);
            $this->dateDanTjedanTrenLiv = clone $this->minDatePonLiv;
        }else{
            $this->datumTrenutnogTjednaPon = \Carbon\Carbon::createFromFormat('Y-m-d', $datumTrenutnogTjednaPon);
            $this->datumTrenutnogTjednaPon2 = clone $this->datumTrenutnogTjednaPon;
            $this->datePonTrenLiv = clone $this->datumTrenutnogTjednaPon;
            $this->datePetTrenLiv = clone $this->datePonTrenLiv;
            $this->datePetTrenLiv->addDays(4);
            $this->dateDanTjedanTrenLiv = clone $this->datePonTrenLiv;
        }
        $this->smjer = $smjer;
        $this->studij = $studij;
        $this->godina = $godina;
        $this->semestar = $semestar;
        $this->weekDays = [
            '1' => 'Ponedjeljak',
            '2' => 'Utorak',
            '3' => 'Srijeda',
            '4' => 'Cetvrtak',
            '5' => 'Petak',
            '6' => 'Subota'
        ];

        $this->timeRange = [15, 16, 17, 18, 19];

        $this->smjerTekst = "";
        $this->studijTekst = "";
        $this->semestarTekst = "";
        $this->godinaTekst = "";

        if ($smjer === "BS") {
            if ($studij === "DIPL") {
                $this->smjerTekst = "BRODOSTROJARSTVO I TEHNOLOGIJA POMORSKOG POMETA";
            } else {
                $this->smjerTekst = "BRODOSTROJARSTVO";
            }
        } else if ($smjer === "EITP") {
            $this->smjerTekst = "ELEKTRONIČKE I INFORMATIČKE TEHNOLOGIJE U POMORSTVU";
        } else if ($smjer === "LMPP") {
            $this->smjerTekst = "LOGISTIKA I MENADŽMENT U POMORSTVU I PROMETU";
        } else if ($smjer === "NTPP") {
            $this->smjerTekst = "NAUTIKA I TEHNOLOGIJA POMORSKOG PROMETA";
        } else {
            //TOP
            $this->smjerTekst = "TEHNOLOGIJA I ORGANIZACIJA PROMETA";
            if ($godina === '1') {
                $this->smjerTekst = "PROMET I MOBILNOST";
            }
        }

        if ($studij === "DIPL") {
            $this->studijTekst = "DIPLOMSKI SVEUČILIŠNI STUDIJ - " . $this->smjerTekst;
        } else {
            $this->studijTekst = "PRIJEDIPLOMSKI SVEUČILIŠNI STUDIJ - " . $this->smjerTekst;
        }


        if ($semestar % 2 == 1) {
            $this->semestarTekst = "ZIMSKI";
        } else {
            $this->semestarTekst = "LJETNI";
        }

        if ($godina == 1) {
            $this->godinaTekst = "PRVA STUDIJSKA GODINA";
        } elseif ($godina == 2) {
            $this->godinaTekst = "DRUGA STUDIJSKA GODINA";
        } else {
            $this->godinaTekst = "TREĆA STUDIJSKA GODINA";
        }
    }

    /*public function sljedeciTjedan()
    {
        
    }

    public function prethodniTjedan()
    {
        
    }*/

    /*public function sljedeciTjedan()
    {
        $this->datePonTrenLiv->addDays(7);
        $this->datePetTrenLiv = clone $this->datePonTrenLiv;
        $this->datePetTrenLiv->addDays(4);
        $this->dateDanTjedanTrenLiv = clone $this->datePonTrenLiv;
        $partTimesProba = DB::table('part_times')
            ->join('users', 'users.id', '=', 'part_times.user_id')
            ->join('courses', 'courses.id', '=', 'part_times.course_id')
            ->select('date', 'vrijeme', 'part_times.smjer', 'part_times.studij', 'part_times.godina', 'part_times.semestar', 'part_times.tip', 'users.surname', 'courses.ime')
            ->where('part_times.smjer', $this->smjer)
            ->where('part_times.studij', $this->studij)
            ->where('part_times.godina', $this->godina)
            ->where('part_times.semestar', $this->semestar)
            ->get();

            $this->partTimesProbaArrayLiv = [];

        foreach ($partTimesProba as $partTimeProba) {
            $nema = false;
            foreach ($this->partTimesProbaArrayLiv as $partTimeProbaArray) {
                if ($partTimeProbaArray->date === $partTimeProba->date && $partTimeProbaArray->vrijeme === $partTimeProba->vrijeme) {
                    $nema = true;
                }
            }
            if (!$nema) {
                $this->partTimesProbaArrayLiv[] = $partTimeProba;
            }
        }
    }

    public function prethodniTjedan()
    {
        $this->datePonTrenLiv->subDays(7);
        $this->datePetTrenLiv = clone $this->datePonTrenLiv;
        $this->datePetTrenLiv->addDays(4);
        $this->dateDanTjedanTrenLiv = clone $this->datePonTrenLiv;
        $partTimesProba = DB::table('part_times')
            ->join('users', 'users.id', '=', 'part_times.user_id')
            ->join('courses', 'courses.id', '=', 'part_times.course_id')
            ->select('date', 'vrijeme', 'part_times.smjer', 'part_times.studij', 'part_times.godina', 'part_times.semestar', 'part_times.tip', 'users.surname', 'courses.ime')
            ->where('part_times.smjer', $this->smjer)
            ->where('part_times.studij', $this->studij)
            ->where('part_times.godina', $this->godina)
            ->where('part_times.semestar', $this->semestar)
            ->get();

            $this->partTimesProbaArrayLiv = [];

        foreach ($partTimesProba as $partTimeProba) {
            $nema = false;
            foreach ($this->partTimesProbaArrayLiv as $partTimeProbaArray) {
                if ($partTimeProbaArray->date === $partTimeProba->date && $partTimeProbaArray->vrijeme === $partTimeProba->vrijeme) {
                    $nema = true;
                }
            }
            if (!$nema) {
                $this->partTimesProbaArrayLiv[] = $partTimeProba;
            }
        }
    }*/

    public function render()
    {
        return view('livewire.part-timetable');
    }
}
