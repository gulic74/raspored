<x-app-layout>
    <x-slot name="header">
        @if (Auth::check())
        @else
            <a href="{{ route('home') }}" style="display: inline-block; float:left; margin-right:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
            </a>
            <a href="{{ route('home') }}" style="text-decoration: none; cursor: pionter;"><img style="min-width:50px; max-width:50px; padding-right:5px; float:left; margin-top:-10px; margin-bottom:0px;" src="{{ asset('images/logo3.png') }}"/></a>
        @endif
        <h2 class="font-semibold text-xl text-gray-800 leading-tight leading-3">
            {{ __('Raspored PPO') }}
            <a class="ml-4 bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded-lg text-sm" style="text-decoration:none;" href="{{ route('timetablestudentPPoPDF', ['smjer' => $byCourse, 'semestar' => $bySemester]) }}">Preuzmi PDF</a>
            @auth
                @if (Auth::user()->is_admin === 1)
                    <a class="bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded-lg text-sm" style="text-decoration:none;" href="{{ route('timetablegeneratePPoPDF', ['smjer' => $byCourse, 'semestar' => $bySemester]) }}">Generiraj PDF</a>
                @endif
            @endauth
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8 pt-0">
            <div class="mb-6 text-white font-bold p-1">
            POSEBNI PROGRAM OBRAZOVANJA - {{Str::upper($byCourse)}} {{$ciklusPoruka}}<hr/>
                <span class="text-base font-bold">{{( $bySemester == 'ZIMSKI') ? 'Prvi blok' : ''}}{{( $bySemester == 'LJETNI') ? 'Drugi blok' : ''}}</span><br/>
                <span class="text-base font-bold">
                    @if(isset($byWeek_start))
                        Tjedan: {{ $byWeek_start }} - {{ $byWeek_end }}
                    @endif
                </span>
            </div>
            <div class="bg-transparent overflow-hidden shadow-xl sm:rounded-lg border-2 border-white text-white" style="background-color:rgba(255,255,255,0.25);">
                <form  method="POST" action="{{ route('indexPpoRaspored') }}">
                    @csrf
                    <div class="grid grid-cols-4 my-2 ml-4">
                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 mb-2">
                            <x-jet-label value="Smjer:" class="text-base inline-block text-white" style="color:white"/>
                            <select name="smjer" id="smjer" class="inline-block text-black border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                <option value="Brodostrojarstvo" {{( $byCourse == 'Brodostrojarstvo') ? 'selected' : ''}}>Brodostrojarstvo</option>
                                <option value="Nautika" {{( $byCourse == 'Nautika') ? 'selected' : ''}}>Nautika</option>
                            </select>
                        </div>
    
                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 mb-2">
                            <x-jet-label value="Blok:" class="text-base inline-block text-white" style="color:white"/>
                            <select name="semestar" id="semestar" class="inline-block text-black border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                <option value="ZIMSKI" {{( $bySemester == 'ZIMSKI') ? 'selected' : ''}}>1. blok</option>
                                <option value="LJETNI" {{( $bySemester == 'LJETNI') ? 'selected' : ''}}>2. blok</option>
                            </select>
                        </div>
    
                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 mb-2">
                            <x-jet-label value="Tjedan:" class="text-base inline-block text-white" style="color:white"/>
                            <select name="byWeek" id="byWeek" class="inline-block text-black border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                
                                    @foreach($byWeeks as $key => $byWeekk)
                                        <option value="{{ $key+1 }}" {{( $key+1 == $byWeek ) ? 'selected' : ''}}>{{ $byWeekk }}</option>
                                    @endforeach
                            </select>
                        </div>
                        
                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 mb-2 mt-2">
                            <x-jet-button class="ml-0" >
                                {{ __('Dohvati raspored') }}
                            </x-jet-button>
                        </div>
                    </div>
                </form>
                @if(isset($byWeek_start))
                    <!--<div class="bg-transparent rounded-pill px-2 mb-2">
                        <h5 class="font-semibold text-lg"> &nbsp;Raspored vrijedi za tjedan: <span style="font-weight:bold; color: yellow">{{ $byWeek_start }} - {{ $byWeek_end }}</span></h5>
                    </div>-->
                @elseif(!isset($byWeek_start) && ($byCourse != '' || $bySemester != ''))
                    <div class="rounded-pill px-2 mb-2" style="background: red; text-align: center;">
                        <h5 class="font-semibold"> Za ovaj tjedan nema definiranog rasporeda!</h5>
                    </div>
               @endif
               <hr/>
            <!--</div>


            <div class="bg-transparent overflow-hidden shadow-xl sm:rounded-lg border-2 border-white mt-4" style="background-color:rgba(255,255,255,0.25);">
            --> <div class="grid grid-cols-6">
                    @foreach($weekDays as $index => $day)
                            <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                                <table class="text-white" style="margin:0; padding:0; width:100%; vertical-align: middle;">
                                    <thead>
                                      <tr class="visinaCelijeHeader">
                                        <th scope="col" class="headerTable">
                                            {{ Str::limit($day, 3, "") }} -    
                                            <span class="font-bold">{{ date('j.n.Y', strtotime((new Carbon\Carbon($byWeek_start))->addDays($index-1))) }}.</span>
                                        </th> 
                                      </tr>
                                    </thead> 
                                    <tbody>
                                        @foreach($timeRange as $time)
                                            <tr class="visinaCelije2">
                                                <td scope="col" class="cellData2">{{$time['real_start']}}</td>
                                            </tr>
                                            <tr class="visinaCelije">
                                                <td scope="col" class="cellData">
                                                    <div>
                                                        @php($lecturePeriod = $lecturePeriods->where('day', $day)->where('hours', $time['start'])->first())                               
                                                        @if($lecturePeriod)  
                                                            @php($kolegij = App\Models\SubjectPP::where('id', $lecturePeriod->subjectPP_id)->first())  
                                                            <div class="kolegij font-bold" style="margin:0; padding: 0;">
                                                                {{Str::upper($lecturePeriod->classroom->ime )}}&nbsp;{{Str::upper($kolegij->name)}}
                                                                @if(strlen($lecturePeriod->comment)>2) 
                                                                    <span style="color: yellow;">*</span>
                                                                    <br/>
                                                                    <span  class="text-xs" style="color: yellow;">*{{Str::limit($lecturePeriod->comment, 15, '')}}</span> 
                                                                @endif                                                                    
                                                            </div>                                               
                                                        @endif
                                                    </div>
                                                </td> 
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>