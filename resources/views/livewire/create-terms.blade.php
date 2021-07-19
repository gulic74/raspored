<div>
    <x-jet-validation-errors class="mb-4" />   
    <form method="POST" name="formaUrediTermin" action="">
        @csrf
        <div class="mt-8 font-bold">
            Kreiranje novog termina
        </div>
        <div class="mt-8">
            <x-jet-label for="profesorSearch">Odaberi profesore:</x-jet-label>
            <div class="mt-1 flex rounded-md shadow-sm w-full">
                <span class="items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm w-1/2">
                    @foreach($odabirProfesor as $odabirProfesorJedan)
                        <div class="items-center px-3 rounded-lg border border-gray-300 bg-gray-200 text-gray-800 text-sm m-1 p-1 inline-block">
                            {{$odabirProfesorJedan}}&nbsp;
                            <span wire:click="brisiProfesora('{{$odabirProfesorJedan}}')" id="prof{{$odabirProfesorJedan}}" class="bg-white-500 hover:bg-white-700 text-blue p-0 m-1 rounded rounded-full h-6 w-7 pl-2 pr-2 font-bold" style="background-color:rgb(204, 204, 204); cursor: pointer;">x</span>
                        </div>
                    @endforeach
                </span>
                <input type="text" wire:model="profesorSearch" id="profesorSearch" class="focus:outline-blue focus:ring focus:border-blue-300 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Odaberi profesora">
            </div>
            <div>
                @if (Str::length($profesorSearch) > 0)                
                    <div class="container absolute bg-white w-3/4 border-solid border-2 border-t-0 border-blue-500 mt-1">
                        @foreach($users as $user)
                            @if (strpos(strtolower($user->name . " " . $user->surname), strtolower($profesorSearch)) !== false)   
                                <div wire:click="dodajProfesora({{$user->id}})" id="profesor{{$user->id}}" class="bg-white-500 hover:bg-white-700 text-blue py-2 px-4 rounded" style="cursor: pointer;">
                                    {{$user->name}} {{$user->surname}}
                                </div>
                            @endif
                        @endforeach
                    </div>            
                @endif
            </div>
        </div>
        <div class="mt-8">
            <x-jet-label for="ucionicaSearch">Odaberi učionice:</x-jet-label>
            <div class="mt-1 flex rounded-md shadow-sm w-full">
                <span class="items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm w-1/2">
                    @foreach($odabirUcionica as $odabirUcionicaJedan)
                        <div class="items-center px-3 rounded-lg border border-gray-300 bg-gray-200 text-gray-800 text-sm m-1 p-1 inline-block">
                            {{$odabirUcionicaJedan}}&nbsp;
                            <span wire:click="brisiUcionicu('{{$odabirUcionicaJedan}}')" id="ucio{{$odabirUcionicaJedan}}" class="bg-white-500 hover:bg-white-700 text-blue p-0 m-1 rounded rounded-full h-6 w-7 pl-2 pr-2 font-bold" style="background-color:rgb(204, 204, 204); cursor: pointer;">x</span>
                        </div>
                    @endforeach
                </span>
                <input type="text" wire:model="ucionicaSearch" id="ucionicaSearch" class="focus:outline-blue focus:ring focus:border-blue-300 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Odaberi učionicu">
            </div>
            <div>
                @if (Str::length($ucionicaSearch) > 0)                
                    <div class="container absolute bg-white w-3/4 border-solid border-2 border-t-0 border-blue-500 mt-1">
                        @foreach($classrooms as $classroom)
                            @if (strpos(strtolower($classroom->ime), strtolower($ucionicaSearch)) !== false)   
                                <div wire:click="dodajUcionicu({{$classroom->id}})" id="classroom{{$classroom->id}}" class="bg-white-500 hover:bg-white-700 text-blue py-2 px-4 rounded" style="cursor: pointer;">
                                    {{$classroom->ime}}
                                </div>
                            @endif
                        @endforeach
                    </div>            
                @endif
            </div>
        </div>
        
        <div class="mt-8">
            <x-jet-label for="kolegijSearch">Odaberi kolegije:</x-jet-label>
            <div class="mt-1 flex rounded-md shadow-sm w-full">
                <span class="items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm w-1/2">
                    @foreach($odabirKolegij as $odabirKolegijJedan)
                        <div class="items-center px-3 rounded-lg border border-gray-300 bg-gray-200 text-gray-800 text-sm m-1 p-1 inline-block">
                            {{$odabirKolegijJedan}}&nbsp;
                            <span wire:click="brisiKolegij('{{$odabirKolegijJedan}}')" id="kole{{$odabirKolegijJedan}}" class="bg-white-500 hover:bg-white-700 text-blue p-0 m-1 rounded rounded-full h-6 w-7 pl-2 pr-2 font-bold" style="background-color:rgb(204, 204, 204); cursor: pointer;">x</span>
                        </div>
                    @endforeach
                </span>
                <input type="text" wire:model="kolegijSearch" id="kolegijSearch" class="focus:outline-blue focus:ring focus:border-blue-300 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Odaberi kolegij">
            </div>
            <div>
                @if (Str::length($kolegijSearch) > 0)                
                    <div class="container absolute bg-white w-3/4 border-solid border-2 border-t-0 border-blue-500 mt-1">
                        @foreach($courses as $course)
                            @if (strpos(strtolower($course->ime), strtolower($kolegijSearch)) !== false)   
                                <div wire:click="dodajKolegij({{$course->id}})" id="course{{$course->id}}" class="bg-white-500 hover:bg-white-700 text-blue py-2 px-4 rounded" style="cursor: pointer;">
                                    {{$course->ime}} - {{$course->smjer}} - {{$course->godina}} - {{$course->semestar}}
                                </div>
                            @endif
                        @endforeach
                    </div>            
                @endif
            </div>
        </div>
        <div class="grid grid-cols-4 mb-6 mt-4">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="tip">Tip nastave</x-jet-label>  
                <select name="tip" id="tip" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="tip">
                    <option value="PREDAVANJE" {{($pred_vj == 'PREDAVANJE') ? 'selected' : ''}}>PREDAVANJE</option>
                    <option value="VJEŽBE" {{($pred_vj == 'VJEŽBE') ? 'selected' : ''}}>VJEŽBE</option>
                </select>
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="grupa">Grupa(svi/VJ/VJ(1-2))</x-jet-label>  
                <x-jet-input wire:model="grupa" id="grupa" name="grupa" type="text" class="mt-1 w-3/4" placeholder="svi/VJ/VJ(1-2)/VJ(1)..." />
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="pocetak">Početak</x-jet-label>  
                <x-jet-input wire:model="pocetak" id="pocetak" name="pocetak" type="number" min="8" max="19" class="mt-1 w-3/4" placeholder="8/9/10..." />
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="kraj">Kraj</x-jet-label>  
                <x-jet-input wire:model="kraj" id="kraj" name="kraj" type="number" min="9" max="20" class="mt-1 w-3/4" placeholder="9/10/11..." />
            </div>
        </div>
        <div class="grid grid-cols-4 mb-6">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="dan">Dan u tjednu</x-jet-label>  
                <select name="dan" id="dan" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="dan">
                    <option value="pon" {{($dan_selected == 'pon') ? 'selected' : ''}}>Ponedjeljak</option>
                    <option value="uto" {{($dan_selected == 'uto') ? 'selected' : ''}}>Utorak</option>
                    <option value="sri" {{($dan_selected == 'sri') ? 'selected' : ''}}>Srijeda</option>
                    <option value="cet" {{($dan_selected == 'cet') ? 'selected' : ''}}>Četvrtak</option>
                    <option value="pet" {{($dan_selected == 'pet') ? 'selected' : ''}}>Petak</option>
                    <option value="sub" {{($dan_selected == 'sub') ? 'selected' : ''}}>Subota</option>
                </select>
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="semestar">Semestar</x-jet-label>  
                <select name="semestar" id="semestar" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-3/4" wire:model="semestar">
                    <option value="ZIMSKI" {{($semestar_selected == 'ZIMSKI') ? 'selected' : ''}}>ZIMSKI</option>
                    <option value="LJETNI" {{($semestar_selected == 'LJETNI') ? 'selected' : ''}}>LJETNI</option>
                </select>
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="komentar">Komentar</x-jet-label>  
                <x-jet-input wire:model="komentar" id="komentar" name="komentar" type="text" class="mt-1 w-3/4" placeholder="komentar za admina" />
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="napomena">Napomena</x-jet-label>  
                <x-jet-input wire:model="napomena" id="napomena" name="napomena" type="text" class="mt-1 w-3/4" placeholder="napomena za studente" />
            </div>            
        </div>
        <div class="grid grid-cols-4 mb-6">
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="aktivan" class="inline-block">Aktivan</x-jet-label> 
                <x-jet-checkbox class="inline-block" name="aktivan" id="aktivan" wire:model="aktivan" />                               
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="ignoreUcionica" class="inline-block">Ignoriraj preklapanje učionice</x-jet-label> 
                <x-jet-checkbox class="inline-block" name="ignoreUcionica" id="ignoreUcionica" wire:model="ignoreUcionica" />                               
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="ignoreRaspored" class="inline-block">Ignoriraj preklapanje rasporeda</x-jet-label> 
                <x-jet-checkbox class="inline-block" name="ignoreRaspored" id="ignoreRaspored" wire:model="ignoreRaspored" />                               
            </div>
            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                <x-jet-label for="ignoreProfesor" class="inline-block">Ignoriraj preklapanje profesora</x-jet-label> 
                <x-jet-checkbox class="inline-block" name="ignoreProfesor" id="ignoreProfesor" wire:model="ignoreProfesor" />                               
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
        <div wire:click="createTerm()" class='mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Kreiraj termin</div>
        &nbsp;&nbsp;&nbsp;<div wire:click="provjeriTermin()" class='mt-4 bg-yellow-500 hover:bg-yellow-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Provjeri termin</div>
    </form>
    @push('scripts')      
    @endpush
    
</div>

