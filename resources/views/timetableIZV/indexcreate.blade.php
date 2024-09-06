<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slaganje rasporeda IZV') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                 
                    <div style="margin:15px;">
                        @isset ($success)
                            <div class="mb-4 font-medium text-sm text-green-600" style="margin-left: 5px; margin-top: 15px;">
                                <b>{{$success}}</b>
                            </div>
                        @endisset                       
                        <div class="ml-0 py-4 pl-0 font-bold">Izaberi studij za koji želiš generirati raspored za izvanredne studente:</div>
                        <form method="POST" action="{{ route('parttimeschedule.index') }}">
                        @csrf
                            <div class="grid grid-cols-4">
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="studij" value="Studij" class="text-base" />
                                    <select name="studij" id="studij" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="PRED" @isset ($studij) @if ("PRED" == $studij) selected @endif @endisset>Prijediplomski</option>
                                        <option value="DIPL" @isset ($studij) @if ("DIPL" == $studij) selected @endif @endisset>Diplomski</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="smjer" value="Smjer" class="text-base"/>
                                    <select name="smjer" id="smjer" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="BS" @isset ($smjer) @if ("BS" == $smjer) selected @endif @endisset>BS</option>
                                        <option value="EITP" @isset ($smjer) @if ("EITP" == $smjer) selected @endif @endisset>EITP</option>
                                        <option value="LMPP" @isset ($smjer) @if ("LMPP" == $smjer) selected @endif @endisset>LMPP</option>
                                        <option value="NTPP" @isset ($smjer) @if ("NTPP" == $smjer) selected @endif @endisset>NTPP</option>
                                        <option value="TOP" @isset ($smjer) @if ("TOP" == $smjer) selected @endif @endisset>TOP (PM)</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="godina" value="Godina" class="text-base"/>
                                    <select name="godina" id="godina" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="1" @isset ($godina) @if ("1" == $godina) selected @endif @endisset>1.</option>
                                        <option value="2" @isset ($godina) @if ("2" == $godina) selected @endif @endisset>2.</option>
                                        <option value="3" @isset ($godina) @if ("3" == $godina) selected @endif @endisset>3.</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="semestar" value="Semestar" class="text-base"/>
                                    <select name="semestar" id="semestar" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="1" @isset ($semestar) @if ("1" == $semestar) selected @endif @endisset>1.</option>
                                        <option value="2" @isset ($semestar) @if ("2" == $semestar) selected @endif @endisset>2.</option>
                                        <option value="3" @isset ($semestar) @if ("3" == $semestar) selected @endif @endisset>3.</option>
                                        <option value="4" @isset ($semestar) @if ("4" == $semestar) selected @endif @endisset>4.</option>
                                        <option value="5" @isset ($semestar) @if ("5" == $semestar) selected @endif @endisset>5.</option>
                                        <option value="6" @isset ($semestar) @if ("6" == $semestar) selected @endif @endisset>6.</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="grid grid-cols-4">
                                <div class="mt-2 col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 mb-2">
                                    <x-jet-label for="datumPocetka" value="Datum početka rasporeda (primjer: 2023-03-30)" class="text-base"/>
                                    @isset($datumPocetka) 
                                        <x-jet-input id="datumPocetka" name="datumPocetka" type="text" class="mt-1" placeholder="2023-03-30" value="{{ $datumPocetka }}" />
                                    @else 
                                        <x-jet-input id="datumPocetka" name="datumPocetka" type="text" class="mt-1" placeholder="2023-03-30" value="" />
                                    @endisset
                                </div>
                                <div class="mt-2 col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 mb-2">
                                    <x-jet-label for="neradniDani" value="Neradni dani (primjer: 2023-11-25;2023-01-09)" class="text-base"/>
                                    @isset($neradniDani) 
                                        <x-jet-input id="neradniDani" name="neradniDani" type="text" class="mt-1" placeholder="2023-11-25; 2023-01-09" value="{{ $neradniDani }}" />
                                    @else 
                                        <x-jet-input id="neradniDani" name="neradniDani" type="text" class="mt-1" placeholder="2023-11-25; 2023-01-09" value="" />
                                    @endisset
                                </div>
                            </div>
                            <div class="flex items-center justify-begin mt-6">
                                <x-jet-button class="ml-0" >
                                    {{ __('Generiraj raspored') }}
                                </x-jet-button>
                            </div>
                        </form>
                        <br>
                            <hr>
                            <br>
                            <br>
                        
                        <div class="ml-0 py-4 pl-0 font-bold">Izaberi studij za koji želiš izbrisati raspored za izvanredne studente:</div>
                        <form method="POST" action="{{ route('parttimeschedule.delete') }}">
                        @csrf
                            <div class="grid grid-cols-4">
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="studijDEL" value="Studij" class="text-base" />
                                    <select name="studijDEL" id="studijDEL" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="PRED" @isset ($studijDEL) @if ("PRED" == $studijDEL) selected @endif @endisset>Prijediplomski</option>
                                        <option value="DIPL" @isset ($studijDEL) @if ("DIPL" == $studijDEL) selected @endif @endisset>Diplomski</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="smjerDEL" value="Smjer" class="text-base"/>
                                    <select name="smjerDEL" id="smjerDEL" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="BS" @isset ($smjerDEL) @if ("BS" == $smjerDEL) selected @endif @endisset>BS</option>
                                        <option value="EITP" @isset ($smjerDEL) @if ("EITP" == $smjerDEL) selected @endif @endisset>EITP</option>
                                        <option value="LMPP" @isset ($smjerDEL) @if ("LMPP" == $smjerDEL) selected @endif @endisset>LMPP</option>
                                        <option value="NTPP" @isset ($smjerDEL) @if ("NTPP" == $smjerDEL) selected @endif @endisset>NTPP</option>
                                        <option value="TOP" @isset ($smjerDEL) @if ("TOP" == $smjerDEL) selected @endif @endisset>TOP (PM)</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="godinaDEL" value="Godina" class="text-base"/>
                                    <select name="godinaDEL" id="godinaDEL" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="1" @isset ($godinaDEL) @if ("1" == $godinaDEL) selected @endif @endisset>1.</option>
                                        <option value="2" @isset ($godinaDEL) @if ("2" == $godinaDEL) selected @endif @endisset>2.</option>
                                        <option value="3" @isset ($godinaDEL) @if ("3" == $godinaDEL) selected @endif @endisset>3.</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                                    <x-jet-label for="semestarDEL" value="Semestar" class="text-base"/>
                                    <select name="semestarDEL" id="semestarDEL" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                        <option value="1" @isset ($semestarDEL) @if ("1" == $semestarDEL) selected @endif @endisset>1.</option>
                                        <option value="2" @isset ($semestarDEL) @if ("2" == $semestarDEL) selected @endif @endisset>2.</option>
                                        <option value="3" @isset ($semestarDEL) @if ("3" == $semestarDEL) selected @endif @endisset>3.</option>
                                        <option value="4" @isset ($semestarDEL) @if ("4" == $semestarDEL) selected @endif @endisset>4.</option>
                                        <option value="5" @isset ($semestarDEL) @if ("5" == $semestarDEL) selected @endif @endisset>5.</option>
                                        <option value="6" @isset ($semestarDEL) @if ("6" == $semestarDEL) selected @endif @endisset>6.</option>
                                    </select>
                                </div>
                            </div>                          
                            <div class="flex items-center justify-begin mt-6">
                                <x-jet-button class="ml-0 bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-200" >
                                    {{ __('Izbriši raspored') }}
                                </x-jet-button>
                            </div>
                        </form>

                        <br>
                            <hr>
                            <br>
                            <br>

                        <div class="ml-0 py-4 pl-0 font-bold">Izaberi semestar (ZIMSKI/LJETNI) za koji želiš izbrisati sve rasporede za izvanredne studente:</div>
                        <form method="POST" action="{{ route('parttimeschedule.deleteall') }}">
                        @csrf
                            <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1 mt-2">
                                <x-jet-label for="semestarZLJ" value="Semestar" class="text-base"/>
                                <select name="semestarZLJ" id="semestarZLJ" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                                    <option value="ZIMSKI">Zimski</option>
                                    <option value="LJETNI">Ljetni</option>
                                </select>
                            </div>                           
                            <div class="flex items-center justify-begin mt-6">
                                <x-jet-button class="ml-0 bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-200" >
                                    {{ __('Izbriši rasporede') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </x-slot>
</x-app-layout>