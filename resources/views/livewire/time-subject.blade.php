<div class="py-10 d-flex">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if(session()->has('message'))
            <div class="mb-4 font-medium text-sm text-green-600 font-bold" style="margin-left: 10px; margin-top: 15px;">
                {{ session('message')}}
            </div>
        @elseif(session()->has('warning'))
            <div class="mb-4 font-medium text-sm text-green-600 font-bold" style="margin-left: 10px; margin-top: 15px;">
                {{ session('warning')}} 
            </div>
        @endif


        <div class="grid grid-cols-12">
            <div class="col-span-12 sm:col-span-12 md:col-span-2 lg:col-span-2">   
                <div class="bg-white overflow-hidden mr-2 p-2 mt-2 lg:mt-24 md:mt-32">
                    <p class="font-semibold text-gray-800 dark:text-white">Preostali sati:</p>
                    <br>
                        @foreach($subjectPPs as $subject)
                            <ol>
                                <li class="mb-4">
                                    {{ $subject->name }} - ({{ $subject->hours}}) - 
                                    <b>{{ $subject->current_hours}}</b>                 
                                </li>                      
                            </ol>
                        @endforeach
                </div>
            </div>

            <div class="col-span-12 sm:col-span-12 md:col-span-10 lg:col-span-10 mb-4">
                <div class="bg-white overflow-hidden ">            

                    <div class="grid grid-cols-4 my-2 ml-2">
                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 mb-2">
                            <x-jet-label value="Smjer:" class="text-base inline-block"/>
                            <select wire:model="byCourse" wire:change="filterSearch()" class="inline-block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                <option value="Nautika">Nautika</option>
                                <option value="Brodostrojarstvo">Brodostrojarstvo</option>
                            </select>
                        </div>

                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 mb-2">
                            <x-jet-label value="Semestar:" class="inline-block text-base"/>
                            <select wire:model="bySemester" wire:change="filterSearch()" class="inline-block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                <option value="ZIMSKI">Zimski semestar</option>
                                <option value="LJETNI">Ljetni semestar</option>
                            </select>
                        </div>

                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1">
                            <x-jet-label value="Tjedan:" class="inline-block text-base"/>
                            <select wire:model="byWeek" wire:change="filterSearch()" class="inline-block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50"">
                                @foreach($byWeeks as $index => $byWeek2)
                                    <option value="{{ $byWeeks[$index] }}">{{ $byWeek2 }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1">
                            <x-jet-button wire:click="submitAll()" class="my-2">
                                Spremi sve nove termine
                            </x-jet-button>                            
                        </div>                        
                        <!--<div class="col-span-10 sm:col-span-10 md:col-span-5 lg:col-span-1 pt-2">
                            <a class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg text-sm cursor-pointer"  wire:click="filterSearch()">
                                Dohvati
                            </a>
                        </div>-->
                    </div>
                    <div class="text-left my-3 font-bold ml-2 text-lg">
                        Tjedan 
                        @foreach($weeksData as $weekData)
                            @if($weekData->name == $byWeek && $weekData->semester == $bySemester && $weekData->course == $byCourse)
                                {{ date('j.n.Y', strtotime($weekData->start_day)) }} - {{ date('j.n.Y', strtotime((new Carbon\Carbon($weekData->start_day))->addDays(5))) }}
                            @endif
                        @endforeach
                        
                    </div>
            
                    <div class="grid grid-cols-6 m-0 p-0 mr-2">                        
                        @foreach($weekDays as $index => $day)
                            <div class="col-span-3 sm:col-span-3 md:col-span-3 lg:col-span-1 ml-2">
                                <div class="border-2 rounded-md border-gray-500 my-1 p-1 bg-yellow-200 text-lg text-center">
                                    {{ Str::limit($day, 3, "") }} -    
                                    @foreach($weeksData as $weekData)
                                        @if($weekData->name == $byWeek && $weekData->semester == $bySemester && $weekData->course == $byCourse)
                                            <span class="font-bold">{{ date('j.n.Y', strtotime((new Carbon\Carbon($weekData->start_day))->addDays($index-1))) }}</span>
                                        @endif
                                    @endforeach
                                </div>
                                @foreach($timeRange as $time)
                                    <div class="border-2 rounded-md border-gray-500 my-1 p-1">
                                        <p class="text-left text-sm font-bold m-0 p-0">
                                            {{ $time['real_start'] }}
                                        </p>
                                        <div>
                                            @php($lecturePeriod = $lecturePeriods->where('day', $day)->where('hours', $time['start'])->first())
                                                                        
                                            @if($lecturePeriod)                                 
                                                <form>
                                                    
                                                    @php($kolegij = $kolegiji_sviPodaci->where('id', $lecturePeriod->subjectPP_id)->first())
                                                
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label type="text" wire:model="$kolegij->name" value="{{ $kolegij->name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md truncate">{{$kolegij->name}}</label>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label type="text" wire:model="$lecturePeriod->classroom->ime" value="{{ $lecturePeriod->classroom->ime }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$lecturePeriod->classroom->ime}}</label>
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label type="text" wire:model="$lecturePeriod->comment"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md truncate">
                                                            @if(Str::length($lecturePeriod->comment) == 0)
                                                                -
                                                            @else
                                                                {{$lecturePeriod->comment}}
                                                            @endif
                                                        </label>
                                                    </div>
                                                    
                                                    <!--<button class="btn btn-success" type="button" data-toggle="modal" data-target="#updateModal" wire:click="updateItemLecture({{$lecturePeriod->id}})"> Uredi </button>-->
                                                </form>
                                                <x-jet-button wire:click="updateItemLecture({{$lecturePeriod->id}})" class="my-2 bg-green-500 hover:bg-green-700">
                                                    Uredi termin
                                                </x-jet-button>                                                             
                                            @else
                                                @include('livewire.create-term-ppo', ['day' => $day, 'hours' => $time['start']])                           
                                            @endif                          
                                        </div> 
                                    </div>
                                @endforeach
                            </div>
                        @endforeach                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="updateItemLecture">
        <x-slot name="title">
            Uređivanje termina
        </x-slot>

        <x-slot name="content">
            <div class="col-span-6 sm:col-span-3">
                <label  class="block text-sm font-medium text-gray-700"> Dan u tjednu: </label>
                <input type="text" wire:model="updateDay" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled/>
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label class="block text-sm font-medium text-gray-700"> Vrijeme početka predavanja: </label>
                <input type="text" wire:model="updateHours" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled/>
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label  class="block text-sm font-medium text-gray-700">Kolegij: </label>
                <select wire:model="updateSubject" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach($subjectPPs as $subjectPP)
                    <option value="{{ $subjectPP->id }}" >{{ $subjectPP->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label class="block text-sm font-medium text-gray-700">Predavaonica: </label>
                <select wire:model="updateClassroom" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach($classrooms as $classroom)
                    <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="hours" class="block text-sm font-medium text-gray-700">Dodatni komentar: </label>
                <input type="text" wire:model="updateComment" id="updateComment" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="ml-2" wire:click="update()">
                Uredi
            </x-jet-secondary-button>

            <x-jet-secondary-button wire:click="$set('updateItemLecture', false)">
                Odustani
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="delete()">
                Obriši
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>


