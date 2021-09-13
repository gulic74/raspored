<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Učionica - detaljne informacije') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                    
                    <div style="margin:15px;">
                        <div class="grid grid-cols-4 mb-2">
                            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                <span style="font-weight: bold;">Ime:</span> {{$osobniPodaci[1]}}
                            </div>
                            <div class="mt-4 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                <span style="font-weight: bold;">Broj mjesta:</span> {{$osobniPodaci[2]}}
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
                                                      <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                                  @endif
                                              @endforeach
                                            </td>                                            
                                            <td class="border">
                                              @foreach($rasporedZima as $rasporedJedanZima)
                                                  @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'uto')
                                                    <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                                  @endif
                                              @endforeach
                                            </td> 
                                            <td class="border">
                                              @foreach($rasporedZima as $rasporedJedanZima)
                                                  @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sri')
                                                    <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                                  @endif
                                              @endforeach
                                            </td> 
                                            <td class="border">
                                              @foreach($rasporedZima as $rasporedJedanZima)
                                                  @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                                  @endif
                                              @endforeach
                                            </td> 
                                            <td class="border">
                                              @foreach($rasporedZima as $rasporedJedanZima)
                                                  @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                                  @endif
                                              @endforeach
                                            </td> 
                                            <td class="border">
                                              @foreach($rasporedZima as $rasporedJedanZima)
                                                  @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                                  @endif
                                              @endforeach
                                            </td> 
                                          </tr>
                                      <tr>
                                        <td class="border font-bold">9:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr class="bg-gray-100">
                                        <td class="border font-bold">10:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="border font-bold">11:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr class="bg-gray-100">
                                        <td class="border font-bold">12:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="border font-bold">13:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr class="bg-gray-100">
                                        <td class="border font-bold">14:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="border font-bold">15:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr class="bg-gray-100">
                                        <td class="border font-bold">16:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="border font-bold">17:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr class="bg-gray-100">
                                        <td class="border font-bold">18:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="border font-bold">19:15</td>
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pon')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedZima as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
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
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td>                                            
                                        <td class="border">
                                          @foreach($rasporedLjeto as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'uto')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedLjeto as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sri')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedLjeto as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'cet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedLjeto as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pet')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                        <td class="border">
                                          @foreach($rasporedLjeto as $rasporedJedanZima)
                                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sub')
                                                  <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                              @endif
                                          @endforeach
                                        </td> 
                                      </tr>
                                  <tr>
                                    <td class="border font-bold">9:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr class="bg-gray-100">
                                    <td class="border font-bold">10:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border font-bold">11:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr class="bg-gray-100">
                                    <td class="border font-bold">12:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border font-bold">13:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr class="bg-gray-100">
                                    <td class="border font-bold">14:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border font-bold">15:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr class="bg-gray-100">
                                    <td class="border font-bold">16:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border font-bold">17:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr class="bg-gray-100">
                                    <td class="border font-bold">18:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="border font-bold">19:15</td>
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pon')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>                                            
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'uto')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sri')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'cet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pet')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td> 
                                    <td class="border">
                                      @foreach($rasporedLjeto as $rasporedJedanZima)
                                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sub')
                                              <span class="block border bg-blue-400"><span style="font-weight: bold;">{{$rasporedJedanZima[9]}}</span> {{$rasporedJedanZima[0]}} <!--{{$rasporedJedanZima[2]}}-->&nbsp;
                                                      @if (Auth::user()->is_admin === 1) <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedanZima[1] . '') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                          </svg>
                                                      </span></a> @endif
                                          @endif
                                      @endforeach
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                        @if (Auth::user()->is_admin === 1) 
                          <hr/>
                          <h1 class="mt-8 text-2xl font-bold">Opterećenje učionice u .csv formatu</h1>
                          <x-jet-validation-errors  /> 
                          <form class="bg-white px-8 pt-6 pb-8 mb-4 mt-0 pl-0" method="POST" action="{{ url( 'classrooms/show/' . $osobniPodaci[0] . '/csv' ) }}">
                            @csrf
                            <div class="grid grid-cols-4">
                              <div class="ml-0 mt-0 mb-4 mr-12 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="datumPocetka">
                                  Početak nastave*
                                </label>
                                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="datumPocetka" name="datumPocetka">
                                <p class="text-gray-500 text-xs italic mt-3">*Ponedjeljak kad započinje semestar</p>
                              </div>
                              <div class="ml-0 mt-0 mb-6 mr-12 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="datumZavrsetka">
                                  Kraj nastave*
                                </label>
                                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="datumZavrsetka" name="datumZavrsetka">
                                <p class="text-gray-500 text-xs italic mt-3">*Petak kad završava semestar</p>
                              </div>
                              <div class="ml-0 mt-0 mb-6 mr-12 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                <x-jet-label for="semestar" value="Semestar" class="block text-gray-700 text-sm font-bold mb-2"/>
                                <select name="semestar" id="semestar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="ZIMSKI">Zimski</option>
                                    <option value="LJETNI">Ljetni</option>
                                </select>
                              </div>
                            </div>
                            <div class="flex items-center justify-between ml-0">
                              <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Opterećenje .csv
                              </button>
                            </div>
                          </form>
                          <hr/>
                          <h1 class="mt-8 text-2xl font-bold">Opterećenje učionice u PDF formatu za vrata</h1>
                          <form class="bg-white px-8 pt-6 pb-8 mb-4 mt-0 pl-0" method="POST" action="{{ url( 'classrooms/show/' . $osobniPodaci[0] . '/pdf' ) }}">
                            @csrf
                            <div class="grid grid-cols-4">
                              <div class="ml-0 mt-0 mb-6 mr-12 col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                <x-jet-label for="semestar" value="Semestar" class="block text-gray-700 text-sm font-bold mb-2"/>
                                <select name="semestarPDF" id="semestarPDF" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="ZIMSKI">Zimski</option>
                                    <option value="LJETNI">Ljetni</option>
                                </select>
                              </div>
                            </div>
                            <div class="flex items-center justify-between ml-0">
                              <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Opterećenje PDF
                              </button>
                            </div>
                          </form>
                      @endif

                    </div>                    
                </div> 
            </div>
        </div>
    </x-slot>
</x-app-layout>