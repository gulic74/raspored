<div>
    <div class="grid grid-cols-4 mb-2">
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <span style="font-weight: bold;">Ime:</span> {{$osobniPodaci[1]}}
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <span style="font-weight: bold;">Prezime:</span> {{$osobniPodaci[2]}}
        </div>
        <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
            <span style="font-weight: bold;">Email:</span> {{$osobniPodaci[3]}}
        </div>
    </div>                         
    <div x-data={show:false} class="mb-3 mt-3">
        <a x-on:click.prevent="show=!show" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
            </svg>&nbsp;
            Zimski semestar
        </a> 
        <div x-show="show" class="my-2 text-gray-700">
            <table class="table-auto min-w-full text-center border">
                <thead>
                  <tr class="bg-yellow-200">
                    <th class="border" style="width: 9%;">Vr.</th>
                    <th class="border" style="width: 16%;">Pon</th>
                    <th class="border" style="width: 16%;">Uto</th>
                    <th class="border" style="width: 16%;">Sri</th>
                    <th class="border" style="width: 16%;">Čet</th>
                    <th class="border" style="width: 16%;">Pet</th>
                    <th class="border" style="width: 11%;">Sub</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-gray-100">
                        <td class="border font-bold">8:15</td>
                        <td class="border">
                          @foreach($rasporedZima as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pon')
                                  <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                              @endif
                          @endforeach
                        </td>                                            
                        <td class="border">
                          @foreach($rasporedZima as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'uto')
                                <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                              @endif
                          @endforeach
                        </td> 
                        <td class="border">
                          @foreach($rasporedZima as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sri')
                                <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                              @endif
                          @endforeach
                        </td> 
                        <td class="border">
                          @foreach($rasporedZima as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                              @endif
                          @endforeach
                        </td> 
                        <td class="border">
                          @foreach($rasporedZima as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                              @endif
                          @endforeach
                        </td> 
                        <td class="border">
                          @foreach($rasporedZima as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                              @endif
                          @endforeach
                        </td> 
                      </tr>
                  <tr>
                    <td class="border font-bold">9:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold">10:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold">11:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold">12:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold">13:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold">14:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold">15:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold">16:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold">17:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold">18:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold">19:15</td>
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedZima as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <div x-data={show:false} class="mb-3">
        <a x-on:click.prevent="show=!show" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
            </svg>&nbsp;
            Ljetni semestar
        </a> 
        <div x-show="show" class="border my-2 text-gray-700">
          <table class="table-auto min-w-full text-center border">
            <thead>
              <tr class="bg-yellow-200">
                <th class="border" style="width: 9%;">Vr.</th>
                <th class="border" style="width: 16%;">Pon</th>
                <th class="border" style="width: 16%;">Uto</th>
                <th class="border" style="width: 16%;">Sri</th>
                <th class="border" style="width: 16%;">Čet</th>
                <th class="border" style="width: 16%;">Pet</th>
                <th class="border" style="width: 11%;">Sub</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-gray-100">
                    <td class="border font-bold">8:15</td>
                    <td class="border">
                      @foreach($rasporedLjeto as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pon')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @foreach($rasporedLjeto as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'uto')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedLjeto as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sri')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedLjeto as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'cet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedLjeto as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pet')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @foreach($rasporedLjeto as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sub')
                              <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                          @endif
                      @endforeach
                    </td> 
                  </tr>
              <tr>
                <td class="border font-bold">9:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr class="bg-gray-100">
                <td class="border font-bold">10:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr>
                <td class="border font-bold">11:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr class="bg-gray-100">
                <td class="border font-bold">12:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr>
                <td class="border font-bold">13:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr class="bg-gray-100">
                <td class="border font-bold">14:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr>
                <td class="border font-bold">15:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr class="bg-gray-100">
                <td class="border font-bold">16:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr>
                <td class="border font-bold">17:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr class="bg-gray-100">
                <td class="border font-bold">18:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
              <tr>
                <td class="border font-bold">19:15</td>
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pon')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>                                            
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'uto')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sri')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'cet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pet')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td> 
                <td class="border">
                  @foreach($rasporedLjeto as $rasporedJedanZima)
                      @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sub')
                          <span class="block border bg-blue-400">{{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                    @if (Auth::user()->is_admin === 1) 
                                    <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                    @else                      
                                    <span wire:click="detalji('{{$rasporedJedanZima[1]}}')" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                          <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </span>
                                    @endif
                                </span>
                      @endif
                  @endforeach
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="detaljiKolegija">
        <x-slot name="title">
            Detalji termina
        </x-slot>
        <hr/>
        <x-slot name="content">
            <div class="grid grid-cols-4 mb-1">
              <div class="mt-4 col-span-4 sm:col-span-4 md:col-span-4 lg:col-span-4">
                <span style="font-weight: bold;">Kolegij(i):</span> {{$detalji[0]}}
              </div>
            </div>
            <div class="grid grid-cols-6 mb-1">
              <div class="mt-6 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-2">
                  <span style="font-weight: bold;">Učionice:</span> {{$detalji[2]}}
              </div>
              <div class="mt-6 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-2">
                  <span style="font-weight: bold;">Pred/Vj:</span> {{$detalji[3]}}
              </div>
              <div class="mt-6 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-2">
                  <span style="font-weight: bold;">Grupa:</span> {{$detalji[4]}}
              </div>
            </div>
            <div class="grid grid-cols-6 mb-1">       
              <div class="mt-6 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-2">
                    <span style="font-weight: bold;">Dan:</span> {{$detalji[5]}}
                </div>
                <div class="mt-6 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-2">
                    <span style="font-weight: bold;">Početak:</span> {{$detalji[6]}}:00
                </div>
                <div class="mt-6 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-2">
                  <span style="font-weight: bold;">Kraj:</span> {{$detalji[8]}}:00
                </div>
            </div>
        </x-slot>
 
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('detaljiKolegija', false)">
                Zatvori
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
