{{-- Ponedjeljak --}}
@if($time['start'] == '08:00' && $day == "Ponedjeljak")
    <div >
        @php($varijabla =  $day.'_'.$time['start'])      
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <!--<option value="" selected>Predavaonica: </option>-->
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach            
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_8" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '09:00' && $day == "Ponedjeljak")
    <div>
         @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_9" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '10:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_10" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '11:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_11" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '12:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_12"placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '13:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_13" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '14:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_14" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '15:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_15"  placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '16:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_16" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '17:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_17" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '18:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_18" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '19:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_19" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '20:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_20" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '21:00' && $day == "Ponedjeljak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pon_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pon_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pon_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pon_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pon_21" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@endif

{{-- Utorak --}}
@if($hours == '08:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_8" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '09:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_9" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '10:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_10" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '11:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_11" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '12:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_12" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '13:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_13" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '14:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_14" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '15:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_15" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '16:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_16" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '17:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
             @error('ucionica_uto_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_17" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '18:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_18" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '19:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_19" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '20:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_20" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '21:00' && $day == "Utorak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_uto_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_uto_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_uto_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_uto_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_uto_21" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@endif

{{-- Srijeda --}}
@if($hours == '08:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_8" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '09:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
             @error('ucionica_sri_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_9" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '10:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_10" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '11:00' && $day == "Srijeda")
    <div>
         @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_11" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '12:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_12" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '13:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_13" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '14:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_14" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '15:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_15" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '16:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_16" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '17:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_17" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '18:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_18" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '19:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_19" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
</div>
@elseif($time['start'] == '20:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_20" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '21:00' && $day == "Srijeda")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sri_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sri_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sri_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sri_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sri_21" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@endif

{{-- Četvrtak --}}
@if($hours == '08:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_8" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '09:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_9" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '10:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_10" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '11:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_11" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '12:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_12" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '13:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_13" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '14:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_14" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '15:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_15" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '16:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_16" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '17:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_17" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '18:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_18" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '19:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_19" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '20:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_20" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '21:00' && $day == "Cetvrtak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_cet_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_cet_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_cet_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_cet_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_cet_21" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@endif

{{-- Petak --}}
@if($hours == '08:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_8" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '09:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_9" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '10:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_10" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '11:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_11" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '12:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_12" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '13:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_13" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '14:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_14" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '15:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_15" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '16:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_16" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '17:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_17" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '18:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_18" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '19:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_19" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '20:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_20" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '21:00' && $day == "Petak")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_pet_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_pet_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_pet_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_pet_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_pet_21" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@endif

{{-- Subota --}}
@if($hours == '08:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_8') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_8" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_8" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '09:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_9') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_9" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_9" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '10:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_10') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_10" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '11:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_11') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_11" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_11" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '12:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_12') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_12" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_12" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '13:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_13') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_13" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_13" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '14:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_14') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_14" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_14" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '15:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_15') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_15" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_15" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '16:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_16') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_16" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_16" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '17:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_17') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_17" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_17" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '18:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_18') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_18" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_18" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '19:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_19') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_19" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_19" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '20:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_20') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_20" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_20" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@elseif($time['start'] == '21:00' && $day == "Subota")
    <div>
        @php($varijabla =  $day.'_'.$time['start'])  
        <div class="col-span-6 sm:col-span-3">
            @error('kolegij_sub_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="kolegij_sub_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" selected>Kolegij: </option>
            @foreach($subjectPPs as $subjectPP)
                <option value="{{ $subjectPP->id }}">{{ $subjectPP->name }}</option>
            @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-3">
            @error('ucionica_sub_21') <span class="error" style="color: red;">Polje je obavezno</span> @enderror
            <select wire:model="ucionica_sub_21" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->ime }}</option>
            @endforeach
            </select>
        </div>
        <div>
            <input type="text" wire:model="komentar_sub_21" placeholder="Komentar:" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <x-jet-button wire:click="submit('{{ $varijabla }}')" class="my-2">
            Spremi termin
        </x-jet-button>
    </div>
@endif