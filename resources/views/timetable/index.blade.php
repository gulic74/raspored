<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Raspored sati') }} &nbsp;&nbsp;&nbsp; 
            @if(isset($podaciRaspored))
                <a class="bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded-lg text-sm" style="text-decoration:none;" href="{{ route('timetablestudentPDF', ['smjer' => $podaciRaspored[0], 'studij' => $podaciRaspored[1], 'godina' => $podaciRaspored[2], 'semestar' => $podaciRaspored[3]]) }}">Preuzmi PDF</a>
                @auth
                    @if (Auth::user()->is_admin === 1)
                        <a class="bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded-lg text-sm" style="text-decoration:none;" href="{{ route('timetablegeneratePDF', ['smjer' => $podaciRaspored[0], 'studij' => $podaciRaspored[1], 'godina' => $podaciRaspored[2], 'semestar' => $podaciRaspored[3]]) }}">Generiraj PDF</a>
                    @endif
                @endauth
            @endif
        </h2>
    </x-slot>

    <div class="py-12 pt-4">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 text-white font-bold p-1">
                {{$podaciRaspored[4]}}<hr/>
                <span class="text-base font-normal">{{$podaciRaspored[5]}}</span><br/>
                <span class="text-base font-normal">{{$podaciRaspored[6]}}</span>
            </div>
            <div class="bg-transparent overflow-hidden shadow-xl sm:rounded-lg border-2 border-white" style="background-color:rgba(255,255,255,0.25);">
                <div class="grid grid-cols-6">
                    <!--<div class="col-span-1 md:col-span-3 lg:col-span-6"></div>-->
                    <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                        <table class="text-white" style="margin:0; padding:0; width:100%; vertical-align: middle; background-color:rgba(255,255,255,0.1);">
                            <thead>
                              <tr class="visinaCelijeHeader">
                                <th scope="col" class="headerTable">Ponedjeljak</th> 
                              </tr>
                            </thead> 
                            <tbody>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">8:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if ($rasporedJedan[6] === 8 && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>                                               
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">9:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 9 || ($rasporedJedan[6] < 9 && $rasporedJedan[7] > 9)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">10:15</td>
                                </tr>
                                <tr class="visinaCelije">                                    
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 10 || ($rasporedJedan[6] < 10 && $rasporedJedan[7] > 10)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">11:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 11 || ($rasporedJedan[6] < 11 && $rasporedJedan[7] > 11)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">12:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 12 || ($rasporedJedan[6] < 12 && $rasporedJedan[7] > 12)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">13:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 13 || ($rasporedJedan[6] < 13 && $rasporedJedan[7] > 13)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">14:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 14 || ($rasporedJedan[6] < 14 && $rasporedJedan[7] > 14)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">15:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 15 || ($rasporedJedan[6] < 15 && $rasporedJedan[7] > 15)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">16:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 16 || ($rasporedJedan[6] < 16 && $rasporedJedan[7] > 16)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">17:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 17 || ($rasporedJedan[6] < 17 && $rasporedJedan[7] > 17)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">18:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 18 || ($rasporedJedan[6] < 18 && $rasporedJedan[7] > 18)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">19:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 19 || ($rasporedJedan[6] < 19 && $rasporedJedan[7] > 19)) && $rasporedJedan[5] === 'pon')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                        <table  class="text-white"  style="margin: 0; padding:0; width:100%; vertical-align: middle; background-color:rgba(255,255,255,0.05);">
                            <thead>
                              <tr class="visinaCelijeHeader">
                                <th scope="col" class="headerTable">Utorak</th> 
                              </tr>
                            </thead> 
                            <tbody>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">8:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if ($rasporedJedan[6] === 8 && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">9:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 9 || ($rasporedJedan[6] < 9 && $rasporedJedan[7] > 9)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">10:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 10 || ($rasporedJedan[6] < 10 && $rasporedJedan[7] > 10)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">11:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 11 || ($rasporedJedan[6] < 11 && $rasporedJedan[7] > 11)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">12:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 12 || ($rasporedJedan[6] < 12 && $rasporedJedan[7] > 12)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">13:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 13 || ($rasporedJedan[6] < 13 && $rasporedJedan[7] > 13)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">14:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 14 || ($rasporedJedan[6] < 14 && $rasporedJedan[7] > 14)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">15:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 15 || ($rasporedJedan[6] < 15 && $rasporedJedan[7] > 15)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">16:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 16 || ($rasporedJedan[6] < 16 && $rasporedJedan[7] > 16)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">17:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 17 || ($rasporedJedan[6] < 17 && $rasporedJedan[7] > 17)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">18:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 18 || ($rasporedJedan[6] < 18 && $rasporedJedan[7] > 18)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">19:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 19 || ($rasporedJedan[6] < 19 && $rasporedJedan[7] > 19)) && $rasporedJedan[5] === 'uto')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                        <table  class="text-white"  style="margin: 0; padding:0; width:100%; vertical-align: middle; background-color:rgba(255,255,255,0.1);">
                            <thead>
                              <tr class="visinaCelijeHeader">                                
                                <th scope="col" class="headerTable">Srijeda</th> 
                              </tr>
                            </thead> 
                            <tbody>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">8:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if ($rasporedJedan[6] === 8 && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}">
                                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                        @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">9:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 9 || ($rasporedJedan[6] < 9 && $rasporedJedan[7] > 9)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow; line-height: 80%;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">10:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 10 || ($rasporedJedan[6] < 10 && $rasporedJedan[7] > 10)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">11:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 11 || ($rasporedJedan[6] < 11 && $rasporedJedan[7] > 11)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">12:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 12 || ($rasporedJedan[6] < 12 && $rasporedJedan[7] > 12)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">13:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 13 || ($rasporedJedan[6] < 13 && $rasporedJedan[7] > 13)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">14:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 14 || ($rasporedJedan[6] < 14 && $rasporedJedan[7] > 14)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">15:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 15 || ($rasporedJedan[6] < 15 && $rasporedJedan[7] > 15)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">16:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 16 || ($rasporedJedan[6] < 16 && $rasporedJedan[7] > 16)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">17:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 17 || ($rasporedJedan[6] < 17 && $rasporedJedan[7] > 17)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">18:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 18 || ($rasporedJedan[6] < 18 && $rasporedJedan[7] > 18)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">19:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 19 || ($rasporedJedan[6] < 19 && $rasporedJedan[7] > 19)) && $rasporedJedan[5] === 'sri')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                        <table  class="text-white"  style="margin: 0; padding:0; width:100%; vertical-align: middle; background-color:rgba(255,255,255,0.05);">
                            <thead>
                              <tr class="visinaCelijeHeader">                                
                                <th scope="col" class="headerTable">Četvrtak</th> 
                              </tr>
                            </thead> 
                            <tbody>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">8:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if ($rasporedJedan[6] === 8 && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">9:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 9 || ($rasporedJedan[6] < 9 && $rasporedJedan[7] > 9)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">10:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 10 || ($rasporedJedan[6] < 10 && $rasporedJedan[7] > 10)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">11:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 11 || ($rasporedJedan[6] < 11 && $rasporedJedan[7] > 11)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">12:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 12 || ($rasporedJedan[6] < 12 && $rasporedJedan[7] > 12)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">13:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 13 || ($rasporedJedan[6] < 13 && $rasporedJedan[7] > 13)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">14:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 14 || ($rasporedJedan[6] < 14 && $rasporedJedan[7] > 14)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">15:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 15 || ($rasporedJedan[6] < 15 && $rasporedJedan[7] > 15)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">16:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 16 || ($rasporedJedan[6] < 16 && $rasporedJedan[7] > 16)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">17:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 17 || ($rasporedJedan[6] < 17 && $rasporedJedan[7] > 17)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">18:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 18 || ($rasporedJedan[6] < 18 && $rasporedJedan[7] > 18)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">19:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 19 || ($rasporedJedan[6] < 19 && $rasporedJedan[7] > 19)) && $rasporedJedan[5] === 'cet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                        <table  class="text-white"  style="margin: 0; padding:0; width:100%; vertical-align: middle; background-color:rgba(255,255,255,0.1);">
                            <thead>
                              <tr class="visinaCelijeHeader">                                
                                <th scope="col" class="headerTable">Petak</th> 
                              </tr>
                            </thead> 
                            <tbody>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">8:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if ($rasporedJedan[6] === 8 && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">9:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 9 || ($rasporedJedan[6] < 9 && $rasporedJedan[7] > 9)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">10:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 10 || ($rasporedJedan[6] < 10 && $rasporedJedan[7] > 10)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">11:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 11 || ($rasporedJedan[6] < 11 && $rasporedJedan[7] > 11)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">12:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 12 || ($rasporedJedan[6] < 12 && $rasporedJedan[7] > 12)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">13:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 13 || ($rasporedJedan[6] < 13 && $rasporedJedan[7] > 13)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">14:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 14 || ($rasporedJedan[6] < 14 && $rasporedJedan[7] > 14)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">15:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 15 || ($rasporedJedan[6] < 15 && $rasporedJedan[7] > 15)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">16:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 16 || ($rasporedJedan[6] < 16 && $rasporedJedan[7] > 16)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">17:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 17 || ($rasporedJedan[6] < 17 && $rasporedJedan[7] > 17)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">18:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 18 || ($rasporedJedan[6] < 18 && $rasporedJedan[7] > 18)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">19:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 19 || ($rasporedJedan[6] < 19 && $rasporedJedan[7] > 19)) && $rasporedJedan[5] === 'pet')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                        <table  class="text-white"  style="margin: 0; padding:0; width:100%;  vertical-align: middle; background-color:rgba(255,255,255,0.05);">
                            <thead>
                              <tr class="visinaCelijeHeader">                                
                                <th scope="col" class="headerTable">Subota</th> 
                              </tr>
                            </thead> 
                            <tbody>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">8:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if ($rasporedJedan[6] === 8 && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">9:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 9 || ($rasporedJedan[6] < 9 && $rasporedJedan[7] > 9)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">10:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 10 || ($rasporedJedan[6] < 10 && $rasporedJedan[7] > 10)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">11:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 11 || ($rasporedJedan[6] < 11 && $rasporedJedan[7] > 11)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">12:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 12 || ($rasporedJedan[6] < 12 && $rasporedJedan[7] > 12)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">13:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 13 || ($rasporedJedan[6] < 13 && $rasporedJedan[7] > 13)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">14:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 14 || ($rasporedJedan[6] < 14 && $rasporedJedan[7] > 14)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">15:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 15 || ($rasporedJedan[6] < 15 && $rasporedJedan[7] > 15)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">16:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 16 || ($rasporedJedan[6] < 16 && $rasporedJedan[7] > 16)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">17:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 17 || ($rasporedJedan[6] < 17 && $rasporedJedan[7] > 17)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">18:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 18 || ($rasporedJedan[6] < 18 && $rasporedJedan[7] > 18)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">19:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <div>
                                            @foreach($raspored as $rasporedJedan)
                                                @if (($rasporedJedan[6] === 19 || ($rasporedJedan[6] < 19 && $rasporedJedan[7] > 19)) && $rasporedJedan[5] === 'sub')
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">{{$rasporedJedan[2]}}&nbsp;{{$rasporedJedan[0]}} @if(strlen($rasporedJedan[8])>2) <span style="color: yellow;">*</span><br/><span  class="text-xs" style="color: yellow;">{{$rasporedJedan[8]}}</span> @endif
                                                        @if (Auth::user()->is_admin === 1) 
                                                            <a class="inline-flex items-center justify-center cursor-pointer" style="text-decoration:none;" target="_blank" href="{{ url('terms/edit/' . $rasporedJedan[1] . '') }}"> 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right inline mb-1" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                                </svg>
                                                            </span></a>
                                                            @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>