<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            body {
                font-family: DejaVu Sans;
                font-size: 0.7em;
            }

            table, th, td {
                border: 1px solid black;
            }

            table{
                width: 18.5 cm;
                height: 14 cm;
            }

            th{
                height: 0.9 cm;
                vertical-align: top;
                font-size: 1.2em;
                padding-top: 0.35 cm;
                text-align: center;
            }

            td{
                height: 0.9 cm;
                vertical-align: top;
                text-align: center;
                font-size: 1.1em;
            }

            .divTableCell{
                margin:0px;
                /*background-color: yellow; */
                font-weight: bold; 
                display: inline-block; 
                padding-top: 0.16 cm;
                padding-right: 2px; 
                padding-left: 2px;
                padding-bottom: 0.19 cm;
                margin-top: 1px;
                margin-left: 1px;
                margin-right: 1px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        @if(isset($podaci) && sizeof($podaci) > 0)

            <table class="table-auto min-w-full text-center border" cellpadding="0" cellspacing="0">
                <thead>
                    <tr class="bg-yellow-200" >
                        <th colspan="2" class="border bg-yellow-200">UČIONICA: {{$podaci[0][1]}}</th>
                        <th colspan="4" class="border bg-yellow-200">{{$podaci[0][5]}} SEMESTAR</th>
                    </tr>
                  </thead>
                <thead>
                  <tr class="bg-yellow-200" >
                    <th class="border" style="width: 9%;">VR.</th>
                    <th class="border" style="width: 18%;">PONEDJELJAK</th>
                    <th class="border" style="width: 18%;">UTORAK</th>
                    <th class="border" style="width: 18%;">SRIJEDA</th>
                    <th class="border" style="width: 18%;">ČETVRTAK</th>
                    <th class="border" style="width: 18%;">PETAK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-gray-100">
                        <td class="border font-bold" style="text-align: center; font-weight: bold;">8:15</td>
                        <td class="border">
                          @php
                                $counter = 0
                            @endphp
                            @foreach($podaci as $podaciJedan)
                                @if (($podaciJedan[3] === 8 || ($podaciJedan[3] < 8 && $podaciJedan[4] > 8)) && $podaciJedan[2] === 'pon' && $counter === 0)
                                    @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>                                    
                                @endif
                          @endforeach
                        </td>                                            
                        <td class="border">
                          @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                              @if (($podaciJedan[3] === 8 || ($podaciJedan[3] < 8 && $podaciJedan[4] > 8)) && $podaciJedan[2] === 'uto' && $counter === 0)
                                @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                                @endif
                          @endforeach
                        </td> 
                        <td class="border">
                          @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                              @if (($podaciJedan[3] === 8 || ($podaciJedan[3] < 8 && $podaciJedan[4] > 8)) && $podaciJedan[2] === 'sri' && $counter === 0)
                                @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                                @endif
                          @endforeach
                        </td> 
                        <td class="border">
                          @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                              @if (($podaciJedan[3] === 8 || ($podaciJedan[3] < 8 && $podaciJedan[4] > 8)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                                @endif
                          @endforeach
                        </td> 
                        <td class="border">
                          @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                              @if (($podaciJedan[3] === 8 || ($podaciJedan[3] < 8 && $podaciJedan[4] > 8)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                                @endif
                          @endforeach
                        </td> 
                      </tr>
                  <tr>
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">9:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 9 || ($podaciJedan[3] < 9 && $podaciJedan[4] > 9)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 9 || ($podaciJedan[3] < 9 && $podaciJedan[4] > 9)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 9 || ($podaciJedan[3] < 9 && $podaciJedan[4] > 9)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 9 || ($podaciJedan[3] < 9 && $podaciJedan[4] > 9)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 9 || ($podaciJedan[3] < 9 && $podaciJedan[4] > 9)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">10:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 10 || ($podaciJedan[3] < 10 && $podaciJedan[4] > 10)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 10 || ($podaciJedan[3] < 10 && $podaciJedan[4] > 10)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 10 || ($podaciJedan[3] < 10 && $podaciJedan[4] > 10)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 10 || ($podaciJedan[3] < 10 && $podaciJedan[4] > 10)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 10 || ($podaciJedan[3] < 10 && $podaciJedan[4] > 10)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">11:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 11 || ($podaciJedan[3] < 11 && $podaciJedan[4] > 11)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 11 || ($podaciJedan[3] < 11 && $podaciJedan[4] > 11)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 11 || ($podaciJedan[3] < 11 && $podaciJedan[4] > 11)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 11 || ($podaciJedan[3] < 11 && $podaciJedan[4] > 11)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 11 || ($podaciJedan[3] < 11 && $podaciJedan[4] > 11)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">12:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 12 || ($podaciJedan[3] < 12 && $podaciJedan[4] > 12)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 12 || ($podaciJedan[3] < 12 && $podaciJedan[4] > 12)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 12 || ($podaciJedan[3] < 12 && $podaciJedan[4] > 12)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 12 || ($podaciJedan[3] < 12 && $podaciJedan[4] > 12)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 12 || ($podaciJedan[3] < 12 && $podaciJedan[4] > 12)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">13:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 13 || ($podaciJedan[3] < 13 && $podaciJedan[4] > 13)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 13 || ($podaciJedan[3] < 13 && $podaciJedan[4] > 13)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 13 || ($podaciJedan[3] < 13 && $podaciJedan[4] > 13)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 13 || ($podaciJedan[3] < 13 && $podaciJedan[4] > 13)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 13 || ($podaciJedan[3] < 13 && $podaciJedan[4] > 13)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">14:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 14 || ($podaciJedan[3] < 14 && $podaciJedan[4] > 14)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 14 || ($podaciJedan[3] < 14 && $podaciJedan[4] > 14)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 14 || ($podaciJedan[3] < 14 && $podaciJedan[4] > 14)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 14 || ($podaciJedan[3] < 14 && $podaciJedan[4] > 14)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 14 || ($podaciJedan[3] < 14 && $podaciJedan[4] > 14)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">15:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 15 || ($podaciJedan[3] < 15 && $podaciJedan[4] > 15)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 15 || ($podaciJedan[3] < 15 && $podaciJedan[4] > 15)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 15 || ($podaciJedan[3] < 15 && $podaciJedan[4] > 15)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 15 || ($podaciJedan[3] < 15 && $podaciJedan[4] > 15)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 15 || ($podaciJedan[3] < 15 && $podaciJedan[4] > 15)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">16:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 16 || ($podaciJedan[3] < 16 && $podaciJedan[4] > 16)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 16 || ($podaciJedan[3] < 16 && $podaciJedan[4] > 16)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 16 || ($podaciJedan[3] < 16 && $podaciJedan[4] > 16)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 16 || ($podaciJedan[3] < 16 && $podaciJedan[4] > 16)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 16 || ($podaciJedan[3] < 16 && $podaciJedan[4] > 16)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">17:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 17 || ($podaciJedan[3] < 17 && $podaciJedan[4] > 17)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 17 || ($podaciJedan[3] < 17 && $podaciJedan[4] > 17)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 17 || ($podaciJedan[3] < 17 && $podaciJedan[4] > 17)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 17 || ($podaciJedan[3] < 17 && $podaciJedan[4] > 17)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 17 || ($podaciJedan[3] < 17 && $podaciJedan[4] > 17)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr class="bg-gray-100">
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">18:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 18 || ($podaciJedan[3] < 18 && $podaciJedan[4] > 18)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 18 || ($podaciJedan[3] < 18 && $podaciJedan[4] > 18)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 18 || ($podaciJedan[3] < 18 && $podaciJedan[4] > 18)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 18 || ($podaciJedan[3] < 18 && $podaciJedan[4] > 18)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 18 || ($podaciJedan[3] < 18 && $podaciJedan[4] > 18)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td class="border font-bold" style="text-align: center; font-weight: bold;">19:15</td>
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 19 || ($podaciJedan[3] < 19 && $podaciJedan[4] > 19)) && $podaciJedan[2] === 'pon' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>                                            
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 19 || ($podaciJedan[3] < 19 && $podaciJedan[4] > 19)) && $podaciJedan[2] === 'uto' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 19 || ($podaciJedan[3] < 19 && $podaciJedan[4] > 19)) && $podaciJedan[2] === 'sri' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 19 || ($podaciJedan[3] < 19 && $podaciJedan[4] > 19)) && $podaciJedan[2] === 'cet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td> 
                    <td class="border">
                      @php
                                $counter = 0
                            @endphp
@foreach($podaci as $podaciJedan)
                          @if (($podaciJedan[3] === 19 || ($podaciJedan[3] < 19 && $podaciJedan[4] > 19)) && $podaciJedan[2] === 'pet' && $counter === 0)
                              @php
                                        $counter = $counter + 1
                                    @endphp
                                    <div class="divTableCell" style="{{(Str::startsWith(Str::lower($podaciJedan[0]), 'b'))? 'background-color: red;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'l'))? 'background-color: yellow;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'e'))? 'background-color: green;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 'n'))? 'background-color: blue;' : ''}} {{(Str::startsWith(Str::lower($podaciJedan[0]), 't'))? 'background-color: orange;' : ''}} {{(Str::length($podaciJedan[0]) > 13? 'font-size: 0.9em;' :  '')}}" >{{$podaciJedan[0]}}</div>
                            @endif
                      @endforeach
                    </td>
                  </tr>
                </tbody>
              </table>             
        @endif
    </body>
</html>   


