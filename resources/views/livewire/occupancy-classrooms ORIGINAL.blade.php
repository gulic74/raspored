<div>
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
                <td class="border font-bold">{{str_replace('_', ' ', $ucionica[0])}}</td>
                <td class="border">
                    @foreach($rasporedZima as $rasporedJedanZima)
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
                    @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                        @foreach($rasporedZima as $rasporedJedanZima)
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
                <td class="border font-bold">{{str_replace('_', ' ', $ucionica[0])}}</td>
                <td class="border">
                    @foreach($rasporedLjeto as $rasporedJedanZima)
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
                    @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
                        @foreach($rasporedLjeto as $rasporedJedanZima)
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
