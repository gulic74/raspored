<div>
    <x-jet-validation-errors class="mb-4" />   
    <form method="POST" name="formaStvoriProfesora" action="">
        @csrf
        <div class="mt-8 font-bold">
            Kreiranje novog profesora
        </div>
        <div class="grid grid-cols-4 mb-6">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="ime">Ime</x-jet-label>  
                <x-jet-input wire:model="ime" id="ime" name="ime" type="text" class="mt-1 w-3/4" placeholder="Ime" />
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="prezime">Prezime</x-jet-label>  
                <x-jet-input wire:model="prezime" id="prezime" name="prezime" type="text" class="mt-1 w-3/4" placeholder="Prezime" />
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="email">Email</x-jet-label>  
                <x-jet-input wire:model="email" id="email" name="email" type="email" class="mt-1 w-3/4" placeholder="Email" />
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="lozinka">Lozinka</x-jet-label>  
                <x-jet-input wire:model="lozinka" id="lozinka" name="lozinka" type="password" class="mt-1 w-3/4" placeholder="Lozinka" />
            </div>             
        </div>
        <div class="grid grid-cols-4 mb-6">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="isAdmin" class="inline-block">Admin</x-jet-label> 
                <x-jet-checkbox class="inline-block" name="isAdmin" id="isAdmin" wire:model="isAdmin" />                               
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
        <div wire:click="createUser()" class='mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Kreiraj profesora</div>
        &nbsp;&nbsp;&nbsp;<div wire:click="provjeriUser()" class='mt-4 bg-yellow-500 hover:bg-yellow-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Provjeri profesora</div>
    </form>
</div>
