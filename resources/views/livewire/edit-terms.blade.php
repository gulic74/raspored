<div>
    @if (strpos(url()->previous(), 'terms/create') !== false)
        <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{show: true}" x-show="show">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
            <p>Uspješno je stvoren novi termin!</p>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Zatvori</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    @endif
    <x-jet-validation-errors class="mb-4" />   
    <form method="POST" name="formaUrediTermin" action="{{ url('terms/update/' . $termin[1] . '') }}">
        @csrf
        <div class="mt-8 font-bold">
            Broj termina: {{$termin[1]}}
        </div>
        <div class="mt-8">
            <x-jet-label for="profesorSearch">Odaberi profesore:</x-jet-label>
            <div class="mt-1 flex rounded-md shadow-sm w-full">
                <span class="items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm w-1/2">
                    @foreach($odabirProfesor as $key => $odabirProfesorJedan)
                        <div class="items-center px-3 rounded-lg border border-gray-300 bg-gray-200 text-gray-800 text-sm m-1 p-1 inline-block">
                            {{$odabirProfesorJedan}}&nbsp;
                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('users/show/' . $key . '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                  </svg>
                              </span></a>
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
                    @foreach($odabirUcionica as $key => $odabirUcionicaJedan)
                        <div class="items-center px-3 rounded-lg border border-gray-300 bg-gray-200 text-gray-800 text-sm m-1 p-1 inline-block">
                            {{$odabirUcionicaJedan}}&nbsp;
                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('classrooms/show/' . $key . '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                  </svg>
                              </span></a>
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
                    @foreach($odabirKolegij as $key => $odabirKolegijJedan)
                        <div class="items-center px-3 rounded-lg border border-gray-300 bg-gray-200 text-gray-800 text-sm m-1 p-1 inline-block">
                            {{$odabirKolegijJedan}}&nbsp;
                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('timetableadmin/' . $key . '') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                  </svg>
                              </span></a>
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
        <div wire:click="updateTerm()" class='mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Uredi termin</div>
        &nbsp;&nbsp;&nbsp;<div wire:click="provjeriTermin()" class='mt-4 bg-yellow-500 hover:bg-yellow-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Provjeri termin</div>
        
        
        <!--<div>{{$dan}}</div>
        <div>{{$tip}}</div>
        <div>{{$semestar}}</div>
        <br/>
        Termin id: {{$termin[1]}}<br/>
        Prezime ime: {{$termin[7]}}  GOTOVO!!!!!<br/>
        Id profesora: {{$termin[8]}}  GOTOVO!!!!!<br/>
        Kolegiji: {{$termin[0]}}  GOTOVO!!!!!<br/> 
        Id kolegija: {{$termin[10]}}  GOTOVO!!!!!<br/>    
        Učionice: {{$termin[2]}}  GOTOVO!!!!!<br/>
        Id učionica: {{$termin[9]}}  GOTOVO!!!!!<br/>
        Pred/Vj: {{$termin[3]}}  GOTOVO!!!!!<br/>
        Grupa: {{$termin[4]}}  GOTOVO!!!!!<br/>
        Dan: {{$termin[5]}}  GOTOVO!!!!!<br/>
        Početak: {{$termin[6]}}:00  GOTOVO!!!!!<br/>
        Kraj: {{$termin[12]}}:00  GOTOVO!!!!!<br/>
        Semestar: {{$termin[11]}}  GOTOVO!!!!!<br/>  
        Komentar: {{$termin[14]}}  GOTOVO!!!!!<br/>  
        Napomena: {{$termin[15]}}  GOTOVO!!!!!<br/>  
        Aktivan: {{$termin[13]}}<br/>   

    {{$aktivan}}
    {{$ignoreUcionica}}
    {{$ignoreRaspored}}
    {{$ignoreProfesor}}

        <br/> -->       
        
    </form>
    @push('scripts')      
    @endpush
    
</div>
