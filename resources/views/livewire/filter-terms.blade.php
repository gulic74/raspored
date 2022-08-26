<div>
    @if(session()->has('message'))
        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{show: true}" x-show="show">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
            <p>{{ session('message') }}</p>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Zatvori</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    @endif
    <div class="mt-8 text-xl">
        FILTERI ZA PRETRAŽIVANJE
    </div>
    <div class="grid grid-cols-4">
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="profesor">Profesor</x-jet-label>  
            <x-jet-input wire:model="profesor" id="profesor" type="text" class="mt-1" placeholder="Profesor"/>
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="kolegij">Kolegij</x-jet-label>  
            <x-jet-input wire:model="kolegij" id="kolegij" type="text" class="mt-1" placeholder="Kolegij"/>
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="ucionica">Učionica</x-jet-label>  
            <x-jet-input wire:model="ucionica" id="ucionica" type="text" class="mt-1" placeholder="Učionica"/>
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="tip">Predavanje/vježbe</x-jet-label>  
            <x-jet-input wire:model="tip" id="tip" type="text" class="mt-1" placeholder="Pred/vj"/>
        </div>
    </div>
    <div class="grid grid-cols-4 mb-6">
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="smjer">Smjer</x-jet-label>  
            <x-jet-input wire:model="smjer" id="smjer" type="text" class="mt-1" placeholder="BS/EITP/LMPP/NTPP/TOP"/>
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="grupa">Grupa</x-jet-label>  
            <x-jet-input wire:model="grupa" id="grupa" type="text" class="mt-1" placeholder="svi/VJ/VJ(1-2)/VJ(1)"/>
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="pocetak">Početak</x-jet-label>  
            <x-jet-input wire:model="pocetak" id="pocetak" type="text" class="mt-1" placeholder="8/9/10..."/>
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <x-jet-label for="dan">Dan u tjednu</x-jet-label>  
            <x-jet-input wire:model="dan" id="dan" type="text" class="mt-1" placeholder="pon/uto/sri/..."/>
        </div>
    </div>
    @foreach($raspored as $rasporedJedan)
        @if((empty($profesor) || strpos(strtolower($rasporedJedan[7]), strtolower($profesor)) !== false) && (empty($kolegij) || strpos(strtolower($rasporedJedan[0]), strtolower($kolegij)) !== false) && (empty($ucionica) || strpos(strtolower($rasporedJedan[2]), strtolower($ucionica)) !== false) && (empty($tip) || strpos(strtolower($rasporedJedan[3]), strtolower($tip)) !== false) && (empty($smjer) || strpos(strtolower($rasporedJedan[0]), strtolower($smjer)) !== false) && (empty($grupa) || strpos(strtolower($rasporedJedan[4]), strtolower($grupa)) !== false) && (empty($dan) || strpos(strtolower($rasporedJedan[5]), strtolower($dan)) !== false) && (empty($pocetak) || strpos(strtolower($rasporedJedan[6]), strtolower($pocetak)) !== false))
            <div class="kolegij" style="border: 1px solid #5f90bd; border-radius: 15px; margin-bottom: 5px; padding-bottom:15px; padding-left: 10px; box-shadow: 3px 3px 2px 1px rgba(11, 23, 34, .2);">
                <div class="grid grid-cols-4 mb-1">
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Termin id:</span> {{$rasporedJedan[1]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Prezime ime:</span> {{$rasporedJedan[7]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Kolegiji:</span> {{$rasporedJedan[0]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Učionice:</span> {{$rasporedJedan[2]}}
                    </div>
                </div>
                <div class="grid grid-cols-4 mb-2">
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Pred/Vj:</span> {{$rasporedJedan[3]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Grupa:</span> {{$rasporedJedan[4]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Dan:</span> {{$rasporedJedan[5]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Početak:</span> {{$rasporedJedan[6]}}:00
                    </div>
                </div>
                <div class="grid grid-cols-4 mb-2">
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Kraj:</span> {{$rasporedJedan[10]}}:00
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Komentar:</span> {{$rasporedJedan[8]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Napomena:</span> {{$rasporedJedan[9]}}
                    </div>
                    <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                        <span style="font-weight: bold;">Aktivan:</span> {{$rasporedJedan[11]}}
                    </div>
                </div>
                <a class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition" style="text-decoration:none;" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}">Uredi termin</a>
                <x-jet-danger-button id="{{$rasporedJedan[1]}}" wire:click="confirmItemDeletion({{$rasporedJedan[1]}})">
                    Obriši termin
                </x-jet-danger-button>
            </div>
            <br/>
        @endif    
    @endforeach
    <x-jet-confirmation-modal wire:model="confirmingItemDeletion">
        <x-slot name="title">
            Brisanje termina
        </x-slot>
 
        <x-slot name="content">
            Jeste li sigurni da želite obrisati ovaj termin?
        </x-slot>
 
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('confirmingItemDeletion', false)">
                Odustani
            </x-jet-secondary-button>
 
            <x-jet-danger-button class="ml-2" wire:click="deleteItem({{ $confirmingItemDeletion }})">
                Obriši
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>

    <x-jet-dialog-modal wire:model="porukaObrisano">
        <x-slot name="title">
            Brisanje termina
        </x-slot>
        <hr/>
        <x-slot name="content">
            Uspješno obrisan termin!
        </x-slot>
 
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('porukaObrisano', false)">
                Zatvori
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
