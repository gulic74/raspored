<div>
    <x-jet-validation-errors class="mb-4" />   
    <form method="POST" name="formaStvoriUcionicu" action="">
        @csrf
        <div class="mt-8 font-bold">
            Kreiranje nove učionice
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
                <x-jet-label for="brojMjesta">Broj mjesta</x-jet-label>  
                <x-jet-input wire:model="brojMjesta" id="brojMjesta" name="brojMjesta" type="number" class="mt-1 w-3/4" placeholder="Broj mjesta" />
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
        <div wire:click="createClassroom()" class='mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Kreiraj učionicu</div>
    </form>
</div>
