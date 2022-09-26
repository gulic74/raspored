<div>
    <br>
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
    @if ($poruka === 1)
            <div class="mt-4 bg-green-600 text-white text-bold py-2 px-3 w-full rounded-lg inline-block grid grid-cols-2">
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
    <a href="#" wire:click="noviTeachers()" class='mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded-lg inline-block align-middle' style="text-decoration:none; cursor: pointer;">Ažuriraj profesore</a>    
</div>
