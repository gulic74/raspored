<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="text-left mt-6 font-bold text-xl md:text-3xl">
        Izaberite raspored koji želite pregledati:
    </div>

    <div class="mt-8 text-xl">
        <hr/>
        <div class="ml-0 py-4 pl-0 font-bold">Prijediplomski i diplomski - redoviti studij</div>
        @if (Auth::check())
            <form method="POST" action="{{ route('timetable') }}">
        @else
            <form method="POST" action="{{ route('timetablestudent') }}">
        @endif
            @csrf
            <div class="grid grid-cols-4">
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                    <x-jet-label for="studij" value="Studij" class="text-base" />
                    <select name="studij" id="studij" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="PRED">Prij</option>
                        <option value="DIPL">Dipl</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                    <x-jet-label for="smjer" value="Smjer" class="text-base"/>
                    <select name="smjer" id="smjer" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="BS">BS</option>
                        <option value="EITP">EITP</option>
                        <option value="LMPP">LMPP</option>
                        <option value="NTPP">NTPP</option>
                        <option value="TOP">TOP (PM)</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                    <x-jet-label for="godina" value="Godina" class="text-base"/>
                    <select name="godina" id="godina" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1">
                    <x-jet-label for="semestar" value="Semestar" class="text-base"/>
                    <select name="semestar" id="semestar" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="ZIMSKI">Zimski</option>
                        <option value="LJETNI">Ljetni</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center justify-begin mt-6">
                <x-jet-button class="ml-0" >
                    {{ __('Dohvati raspored') }}
                </x-jet-button>
            </div>
        </form>
        <br/>
        <!--   opacity-50 cursor-not-allowed disabled="true" -->
        <hr/>
        <div class="ml-0 py-4 pl-0 font-bold">Prijediplomski i diplomski - izvanredni studij</div>
        <form method="POST" action="{{ route('parttimeschedule.indextimetable') }}">
            @csrf
            <div class="grid grid-cols-4">
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1 mt-2">
                    <x-jet-label for="studijIZV" value="Studij" class="text-base" />
                    <select name="studijIZV" id="studijIZV" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="PRED">Prij</option>
                        <option value="DIPL">Dipl</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1 mt-2">
                    <x-jet-label for="smjerIZV" value="Smjer" class="text-base"/>
                    <select name="smjerIZV" id="smjerIZV" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="BS">BS</option>
                        <option value="EITP">EITP</option>
                        <option value="LMPP">LMPP</option>
                        <option value="NTPP">NTPP</option>
                        <option value="TOP">TOP (PM)</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1 mt-2">
                    <x-jet-label for="godinaIZV" value="Godina" class="text-base"/>
                    <select name="godinaIZV" id="godinaIZV" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span-1 mt-2">
                    <x-jet-label for="semestarIZV" value="Semestar" class="text-base"/>
                    <select name="semestarIZV" id="semestarIZV" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="ZIMSKI">Zimski</option>
                        <option value="LJETNI">Ljetni</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="prethodniSljedeci" value="0">
            <input type="hidden" name="datumTrenutnogTjednaPon" value="0">
            <div class="flex items-center justify-begin mt-6">
                <x-jet-button class="ml-0">
                    {{ __('Dohvati raspored') }}
                </x-jet-button>
            </div>
        </form>
        <br/>
        <hr/>
        <div class="ml-0 py-4 pl-0 font-bold">Posebni program obrazovanja</div>
        <form method="POST" action="{{ route('indexPpoRaspored') }}">
            @csrf
            <div class="grid grid-cols-2">
                <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1">
                    <x-jet-label for="smjer" value="Smjer" class="text-base"/>
                    <select name="smjer" id="smjer" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="Brodostrojarstvo">Brodostrojarstvo</option>
                        <option value="Nautika">Nautika</option>
                    </select>
                </div>
                <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1">
                    <x-jet-label for="semestar" value="Blok" class="text-base"/>
                    <select name="semestar" id="semestar" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-50">
                        <option value="ZIMSKI">1. blok</option>
                        <option value="LJETNI">2. blok</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center justify-begin mt-6">
                <x-jet-button class="ml-0" >
                    {{ __('Dohvati raspored') }}
                </x-jet-button>
            </div>
        </form>         
    </div>
</div>

