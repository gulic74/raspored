<x-app-layout>
    <x-slot name="header">
        @if (Auth::check())
        @else
            <img style="min-width:50px; max-width:50px; padding-right:5px; float:left; margin-top:-10px; margin-bottom:0px;" src="{{ asset('images/logo3.png') }}"/>
        @endif
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Raspored sati') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
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