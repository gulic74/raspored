<div>
    <!--max {{$maxDateLiv}}<br />
     
    Tjedan {{$datePonTrenLiv->format('d.m.Y')}} - {{$datePetTrenLiv->format('d.m.Y')}} 
    
      
    {{$dateDanTjedanTrenLiv}} <hr/>  
    {{$datePonTrenLiv}} <hr/>  <br/><br/><br/>-->
    
    <div class="mb-6 text-white font-bold p-1">
        {{$studijTekst}}<hr/>
        <span class="text-base font-normal">{{$godinaTekst}}</span><br/>
        <span class="text-base font-normal">{{$semestarTekst}} SEMESTAR</span><br/><!--<br/>
        <span class="text-yellow-100" style="color:yellow">*NAPOMENA - NASTAVA SE ODVIJA ONLINE. SVAKI PREDMETNI NASTAVNIK ĆE NA MERLINU OBJAVITI POVEZNICU ZA SPAJANJE NA ONLINE NASTAVU</span>-->
    </div>
    
    <div class="flex justify-center mb-2 items-center">
        @if ($minDateLiv->lt((clone $datePonTrenLiv)->subDays(1)))
        <form method="POST" action="{{ route('parttimeschedule.indextimetable') }}">
            @csrf
            <input type="hidden" name="studijIZV" value="{{$studij}}">
            <input type="hidden" name="smjerIZV" value="{{$smjer}}">
            <input type="hidden" name="godinaIZV" value="{{$godina}}">
            <input type="hidden" name="semestarIZV" value="{{$semestarTekst}}">
            <input type="hidden" name="prethodniSljedeci" value="1">
            <input type="hidden" name="datumTrenutnogTjednaPon" value="{{$datumTrenutnogTjednaPon->subDays(7)->format('Y-m-d')}}">
            <button class="bg-white bg-opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-full rounded-r" >
            Prethodni tjedan
            </button>
        </form>
        @else 
            <button class="bg-white bg-opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-full rounded-r cursor-not-allowed" disabled>
            Prethodni tjedan
          </button>
        @endif
        &nbsp;
        @if ($maxDateLiv->gt((clone $datePetTrenLiv)->addDays(1)))
        <form method="POST" action="{{ route('parttimeschedule.indextimetable') }}">
            @csrf
            <input type="hidden" name="studijIZV" value="{{$studij}}">
            <input type="hidden" name="smjerIZV" value="{{$smjer}}">
            <input type="hidden" name="godinaIZV" value="{{$godina}}">
            <input type="hidden" name="semestarIZV" value="{{$semestarTekst}}">
            <input type="hidden" name="prethodniSljedeci" value="1">
            <input type="hidden" name="datumTrenutnogTjednaPon" value="{{$datumTrenutnogTjednaPon2->addDays(7)->format('Y-m-d')}}">
            <button class="bg-white bg-opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-full  rounded-l" >
                &nbsp;&nbsp;Sljedeći tjedan&nbsp;&nbsp;
            </button>
        </form>
        @else 
        <button class="bg-white bg-opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-full  rounded-l cursor-not-allowed" >
            &nbsp;&nbsp;Sljedeći tjedan&nbsp;&nbsp;
        </button>
        @endif

    </div>
    <div class="bg-transparent overflow-hidden shadow-xl sm:rounded-lg border-2 border-white text-white" style="background-color:rgba(255,255,255,0.25);">
    <div class="grid grid-cols-6">
        @for ($i = 0; $i <= 5; $i++)
            @if($i == 0)
                @php($dateDanTjedanTrenLiv->addDays(0))
            @else
                @php($dateDanTjedanTrenLiv->addDays(1))
            @endif 
                <div class="col-span-3 sm:col-span-3 md:col-span-2 lg:col-span-1">
                    <table class="text-white" style="margin:0; padding:0; width:100%; vertical-align: middle;">
                        <thead>
                          <tr class="visinaCelijeHeader">
                            <th scope="col" class="headerTable">
                                @if($i == 0) Pon @elseif($i == 1) Uto @elseif($i == 2) Sri @elseif($i == 3) Čet @elseif($i == 5) Sub @else Pet @endif -    
                                <span class="font-bold">{{ date('j.n.Y', strtotime($dateDanTjedanTrenLiv)) }}.</span>
                            </th> 
                          </tr>
                        </thead> 
                        <tbody>
                            @foreach($timeRange as $time)
                                <tr class="visinaCelije2">
                                    <td scope="col" class="cellData2">{{$time}}:15</td>
                                </tr>
                                <tr class="visinaCelije">
                                    <td scope="col" class="cellData">
                                        <!-- SREDITI DIV !!!!!!!!!!!!!!!!!!!-->
                                        <div>
                                            @foreach($partTimesProbaArrayLiv as $partTimeProbaArrayLiv)
                                                @if($partTimeProbaArrayLiv->date === $dateDanTjedanTrenLiv->format('Y-m-d') && $partTimeProbaArrayLiv->vrijeme == $time)
                                                    <div class="kolegij font-bold" style="margin:0; padding: 0;">
                                                        {{Str::upper($partTimeProbaArrayLiv->ime)}} @if($partTimeProbaArrayLiv->tip === "Vjezbe") (VJ) @endif
                                                    </div>
                                                @endif    
                                            @endforeach                                            
                                        </div>
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        @endfor
    </div>
</div>
</div>
