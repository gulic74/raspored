<div>
    <x-jet-validation-errors class="mb-4" />   
    <form method="POST" name="formaStvoriKolegij" action="">
        @csrf
        <div class="mt-8 font-bold">
            Kreiranje novog kolegija
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
                    <option value="NTPP" selected>NTPP</option>
                    <option value="BS">BS</option>
                    <option value="LMPP">LMPP</option>
                    <option value="TOP">TOP</option>
                    <option value="EITP">EITP</option>
                </select>
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="razinaStudija">Razina studija</x-jet-label>  
                <select name="razinaStudija" id="razinaStudija" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="razinaStudija">
                    <option value="PRED" selected>PRED</option>
                    <option value="DIPL">DIPL</option>
                </select>
            </div> 
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="godina">Godina</x-jet-label>  
                <select name="godina" id="godina" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="godina">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>           
        </div>
        <div class="grid grid-cols-4 mb-6">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="semestar">Semestar</x-jet-label>  
                <select name="semestar" id="semestar" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="semestar">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
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
        <div wire:click="createCourse()" class='mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Kreiraj kolegij</div>
    </form>
</div>
