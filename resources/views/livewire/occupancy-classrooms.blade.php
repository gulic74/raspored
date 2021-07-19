<div>
    <div x-data={showZima:false} class="mb-3 mt-3">
        <a x-on:click.prevent="showZima=!showZima" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
            </svg>&nbsp;
            Zimski semestar
        </a> 
        <div x-show="showZima" class="my-2 text-gray-700">
            <div x-data={showZimaPon:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showZimaPon=!showZimaPon" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Ponedjeljak
                </a> 
                <div x-show="showZimaPon" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                        <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showZimaUto:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showZimaUto=!showZimaUto" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Utorak
                </a> 
                <div x-show="showZimaUto" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showZimaSri:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showZimaSri=!showZimaSri" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Srijeda
                </a> 
                <div x-show="showZimaSri" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showZimaCet:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showZimaCet=!showZimaCet" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Četvrtak
                </a> 
                <div x-show="showZimaCet" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showZimaPet:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showZimaPet=!showZimaPet" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Petak
                </a> 
                <div x-show="showZimaPet" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedZima'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div x-data={showLjeto:false} class="mb-3 mt-3">
        <a x-on:click.prevent="showLjeto=!showLjeto" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
            </svg>&nbsp;
            Ljetni semestar
        </a> 
        <div x-show="showLjeto" class="my-2 text-gray-700">
            <div x-data={showLjetoPon:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showLjetoPon=!showLjetoPon" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Ponedjeljak
                </a> 
                <div x-show="showLjetoPon" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                        <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'pon' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showLjetoUto:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showLjetoUto=!showLjetoUto" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Utorak
                </a> 
                <div x-show="showLjetoUto" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'uto' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showLjetoSri:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showLjetoSri=!showLjetoSri" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Srijeda
                </a> 
                <div x-show="showLjetoSri" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'sri' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showLjetoCet:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showLjetoCet=!showLjetoCet" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Četvrtak
                </a> 
                <div x-show="showLjetoCet" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'cet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div x-data={showLjetoPet:false} class="mb-3 mt-3">
                &nbsp;&nbsp;<a x-on:click.prevent="showLjetoPet=!showLjetoPet" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clipRule="evenodd" />
                    </svg>&nbsp;
                    Petak
                </a> 
                <div x-show="showLjetoPet" class="my-2 text-gray-700">
                    <table class="table-auto min-w-full text-center border">
                        <thead>
                          <tr class="bg-yellow-200">
                            <th class="border" style="width: 10%;"></th>
                            <th class="border" style="width: 7%;">8</th>
                            <th class="border" style="width: 7%;">9</th>
                            <th class="border" style="width: 7%;">10</th>
                            <th class="border" style="width: 7%;">11</th>
                            <th class="border" style="width: 7%;">12</th>
                            <th class="border" style="width: 7%;">13</th>
                            <th class="border" style="width: 7%;">14</th>
                            <th class="border" style="width: 7%;">15</th>
                            <th class="border" style="width: 7%;">16</th>
                            <th class="border" style="width: 7%;">17</th>
                            <th class="border" style="width: 7%;">18</th>
                            <th class="border" style="width: 7%;">19</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ucionice as $ucionica)
                            <tr class="bg-gray-100">
                                <td class="border font-bold">{{$ucionica[0]}}</td>
                                <td class="border">
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 8 || ($rasporedJedanZima[3] < 8 && $rasporedJedanZima[4] > 8)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                    @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 9 || ($rasporedJedanZima[3] < 9 && $rasporedJedanZima[4] > 9)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 10 || ($rasporedJedanZima[3] < 10 && $rasporedJedanZima[4] > 10)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 11 || ($rasporedJedanZima[3] < 11 && $rasporedJedanZima[4] > 11)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 12 || ($rasporedJedanZima[3] < 12 && $rasporedJedanZima[4] > 12)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 13 || ($rasporedJedanZima[3] < 13 && $rasporedJedanZima[4] > 13)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 14 || ($rasporedJedanZima[3] < 14 && $rasporedJedanZima[4] > 14)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 15 || ($rasporedJedanZima[3] < 15 && $rasporedJedanZima[4] > 15)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 16 || ($rasporedJedanZima[3] < 16 && $rasporedJedanZima[4] > 16)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 17 || ($rasporedJedanZima[3] < 17 && $rasporedJedanZima[4] > 17)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 18 || ($rasporedJedanZima[3] < 18 && $rasporedJedanZima[4] > 18)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                                        @foreach(${'rasporedLjeto'.$ucionica[0]} as $rasporedJedanZima)
                                        @if (($rasporedJedanZima[3] === 19 || ($rasporedJedanZima[3] < 19 && $rasporedJedanZima[4] > 19)) && $rasporedJedanZima[2] === 'pet' && $rasporedJedanZima[5] === $ucionica[0])
                                            {{$rasporedJedanZima[0]}}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

    
</div>
