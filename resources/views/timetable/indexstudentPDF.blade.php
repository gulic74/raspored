<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
            body {
                font-family: DejaVu Sans;
                font-size: 0.6em;
            }

            table, th, td {
                border: 1px solid black;
            }

            td{
                padding-right: 2px;
                padding-left: 2px;
            }

            table {
                width: 100%;
            }
        </style>
    </head>
    <body>
        @if(isset($rasporedSve))
            @for ($i = 0; $i < count($rasporedSve[1]); $i++)
                @if($i === 0)
                    <span style="font-size: 1.2em; font-weight: bold">{{$rasporedSve[1][$i]}}</span><hr/>
                @else
                    <span style="font-size: 1.2em; font-weight: bold">{{$rasporedSve[1][$i]}}</span><br/>
                @endif
            @endfor


            <table style="margin-top: 20px;">
                <thead>
                  <tr style="background-color: yellow">
                    <th  style="width: 9%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold; font-size: bold;">Vrijeme</th>
                    <th  style="width: 16%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Ponedjeljak</th>
                    <th  style="width: 16%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Utorak</th>
                    <th  style="width: 16%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Srijeda</th>
                    <th  style="width: 16%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Četvrtak</th>
                    <th  style="width: 16%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Petak</th>
                    <th  style="width: 11%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Subota</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: rgb(204, 203, 255)">
                        <td style="text-align: center;">8:15</td>
                        <td >
                          @foreach($rasporedSve[0] as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pon')
                                <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                              @endif
                          @endforeach
                        </td>                                            
                        <td >
                          @foreach($rasporedSve[0] as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'uto')
                                <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                              @endif
                          @endforeach
                        </td> 
                        <td >
                          @foreach($rasporedSve[0] as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sri')
                                <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                              @endif
                          @endforeach
                        </td> 
                        <td >
                          @foreach($rasporedSve[0] as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                              @endif
                          @endforeach
                        </td> 
                        <td >
                          @foreach($rasporedSve[0] as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                              @endif
                          @endforeach
                        </td> 
                        <td >
                          @foreach($rasporedSve[0] as $rasporedJedanZima)
                              @if (($rasporedJedanZima[6] === 8 || ($rasporedJedanZima[6] < 8 && $rasporedJedanZima[7] > 8)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                              @endif
                          @endforeach
                        </td> 
                      </tr>
                  <tr>
                    <td  style="text-align: center;">9:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 9 || ($rasporedJedanZima[6] < 9 && $rasporedJedanZima[7] > 9)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr style="background-color: rgb(204, 203, 255)">
                    <td style="text-align: center;">10:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 10 || ($rasporedJedanZima[6] < 10 && $rasporedJedanZima[7] > 10)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">11:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 11 || ($rasporedJedanZima[6] < 11 && $rasporedJedanZima[7] > 11)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr style="background-color: rgb(204, 203, 255)">
                    <td style="text-align: center;">12:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 12 || ($rasporedJedanZima[6] < 12 && $rasporedJedanZima[7] > 12)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">13:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 13 || ($rasporedJedanZima[6] < 13 && $rasporedJedanZima[7] > 13)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr style="background-color: rgb(204, 203, 255)">
                    <td style="text-align: center;">14:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 14 || ($rasporedJedanZima[6] < 14 && $rasporedJedanZima[7] > 14)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">15:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 15 || ($rasporedJedanZima[6] < 15 && $rasporedJedanZima[7] > 15)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr style="background-color: rgb(204, 203, 255)">
                    <td style="text-align: center;">16:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 16 || ($rasporedJedanZima[6] < 16 && $rasporedJedanZima[7] > 16)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">17:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 17 || ($rasporedJedanZima[6] < 17 && $rasporedJedanZima[7] > 17)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr style="background-color: rgb(204, 203, 255)">
                    <td style="text-align: center;">18:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 18 || ($rasporedJedanZima[6] < 18 && $rasporedJedanZima[7] > 18)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">19:15</td>
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pon')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>                                            
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'uto')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sri')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'cet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'pet')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td> 
                    <td >
                      @foreach($rasporedSve[0] as $rasporedJedanZima)
                          @if (($rasporedJedanZima[6] === 19 || ($rasporedJedanZima[6] < 19 && $rasporedJedanZima[7] > 19)) && $rasporedJedanZima[5] === 'sub')
                              <div  style="margin:0; padding: 0;">
                                    {{$rasporedJedanZima[2]}}&nbsp;{{$rasporedJedanZima[0]}} 
                                    @if(strlen($rasporedJedanZima[8])>2)
                                        <span style="color: red;">*</span><br/>
                                        <span   style="color: red; font-size: 0.6em;">{{$rasporedJedanZima[8]}}</span>
                                    @endif                                                        
                                </div>
                          @endif
                      @endforeach
                    </td>
                  </tr>
                </tbody>
              </table> 
        @endif
    </body>
</html>   


