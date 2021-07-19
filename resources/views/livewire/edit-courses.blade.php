<div>
    @if (strpos(url()->previous(), 'courses/create') !== false)
        <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{show: true}" x-show="show">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
            <p>Uspješno je stvoren novi kolegij!</p>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Zatvori</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    @endif
    <x-jet-validation-errors class="mb-4" />   
    <form method="POST" name="formaAzurirajKolegij" action="">
        @csrf
        <div class="mt-8 font-bold">
            Ažuriranje kolegija
        </div>
        <!--
            $table->smallInteger('godina'); // 1  ili 2  ili 3
            $table->smallInteger('semestar');// 1 ili  2 ili ... ili 6 ...-->
        <div class="grid grid-cols-4 mb-6">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="ime">Ime</x-jet-label>  
                <x-jet-input wire:model="ime" id="ime" name="ime" type="text" class="mt-1 w-3/4" placeholder="Ime" />
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="smjer">Smjer</x-jet-label>  
                <select name="smjer" id="smjer" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="smjer">
                    <option value="NTPP" {{($smjer_selected == 'NTPP') ? 'selected' : ''}}>NTPP</option>
                    <option value="BS" {{($smjer_selected == 'BS') ? 'selected' : ''}}>BS</option>
                    <option value="LMPP" {{($smjer_selected == 'LMPP') ? 'selected' : ''}}>LMPP</option>
                    <option value="TOP" {{($smjer_selected == 'TOP') ? 'selected' : ''}}>TOP</option>
                    <option value="EITP" {{($smjer_selected == 'EITP') ? 'selected' : ''}}>EITP</option>
                </select>
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="razinaStudija">Razina studija</x-jet-label>  
                <select name="razinaStudija" id="razinaStudija" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="razinaStudija">
                    <option value="PRED"  {{($razinaStudija_selected == 'PRED') ? 'selected' : ''}}>PRED</option>
                    <option value="DIPL"  {{($razinaStudija_selected == 'DIPL') ? 'selected' : ''}}>DIPL</option>
                </select>
            </div> 
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="godina">Godina</x-jet-label>  
                <select name="godina" id="godina" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="godina">
                    <option value="1"  {{($godina_selected == '1') ? 'selected' : ''}}>1</option>
                    <option value="2"  {{($godina_selected == '2') ? 'selected' : ''}}>2</option>
                    <option value="3"  {{($godina_selected == '3') ? 'selected' : ''}}>3</option>
                </select>
            </div>           
        </div>
        <div class="grid grid-cols-4 mb-6">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="semestar">Semestar</x-jet-label>  
                <select name="semestar" id="semestar" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="semestar">
                    <option value="1" {{($semestar_selected == '1') ? 'selected' : ''}}>1</option>
                    <option value="2" {{($semestar_selected == '2') ? 'selected' : ''}}>2</option>
                    <option value="3" {{($semestar_selected == '3') ? 'selected' : ''}}>3</option>
                    <option value="4" {{($semestar_selected == '4') ? 'selected' : ''}}>4</option>
                    <option value="5" {{($semestar_selected == '5') ? 'selected' : ''}}>5</option>
                    <option value="6" {{($semestar_selected == '6') ? 'selected' : ''}}>6</option>
                </select>
            </div>             
        </div>
        @if ($poruka === 1)
            <div class="mt-4 {{($kolizija == 1) ? 'bg-red-600': 'bg-green-600'}} text-white text-bold py-2 px-3 w-full rounded-lg inline-block grid grid-cols-2">
                <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1">
                    @foreach($tekstPoruke as $tekstPorukeJedan)
                        <div class="m-0 p-1">
                            {{$tekstPorukeJedan}}
                        </div>
                    @endforeach
                </div>
                <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1 text-right text-bold">
                    <span wire:click="zatvoriPoruku()" style="cursor: pointer;">x</span>
                </div>
            </div>
        @endif
        <!--<button class='bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg' style="text-decoration:none; margin-top: 7px; margin-bottom:7px;">Uredi termin</button>-->
        <div wire:click="createCourse()" class='mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Ažuriraj kolegij</div>
    </form>
</div>
