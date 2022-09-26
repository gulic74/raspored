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
        @foreach($rasporedSve[2] as $index => $byWeeksOne)
            @if(isset($rasporedSve))
                <span style="font-size: 1.2em; font-weight: bold">POSEBNI PROGRAM OBRAZOVANJA - {{Str::upper($rasporedSve[6])}}</span><hr/>
                <span style="font-size: 1.2em; font-weight: bold">{{($rasporedSve[7] == 'ZIMSKI') ? 'Prvi blok' : 'Drugi blok'}}</span><br/>
                <span style="font-size: 1.2em; font-weight: bold">Tjedan: {{ $rasporedSve[3][$index] }} - {{ $rasporedSve[4][$index] }}</span><br/>
                <table style="margin-top: 20px;">
                    <thead>
                      <tr style="background-color: rgb(255, 255, 70)">
                        <th  style="width: 10%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold; font-size: bold;">Vrijeme</th>
                        <th  style="width: 15%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Pon - {{ date('j.n.Y', strtotime((new Carbon\Carbon($rasporedSve[3][$index]))->addDays(0))) }}</th>
                        <th  style="width: 15%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Uto - {{ date('j.n.Y', strtotime((new Carbon\Carbon($rasporedSve[3][$index]))->addDays(1))) }}</th>
                        <th  style="width: 15%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Sri - {{ date('j.n.Y', strtotime((new Carbon\Carbon($rasporedSve[3][$index]))->addDays(2))) }}</th>
                        <th  style="width: 15%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Čet - {{ date('j.n.Y', strtotime((new Carbon\Carbon($rasporedSve[3][$index]))->addDays(3))) }}</th>
                        <th  style="width: 15%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Pet - {{ date('j.n.Y', strtotime((new Carbon\Carbon($rasporedSve[3][$index]))->addDays(4))) }}</th>
                        <th  style="width: 15%; padding-top:10px; padding-bottom:10px;font-size: 1.2em; font-size: bold;">Sub - {{ date('j.n.Y', strtotime((new Carbon\Carbon($rasporedSve[3][$index]))->addDays(5))) }}</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php($counter = 0)
                        @foreach($rasporedSve[1][$index] as $time)                            
                            @if($counter % 2 == 0)
                                <tr style="background-color: rgb(224,224,224)">
                                    <td  style="text-align: center;">{{$time['real_start']}}</td>
                                    @foreach($rasporedSve[0] as $index => $day)
                                        <td style="text-align: center; padding: 5px;">
                                            <div  style="margin:0; padding: 0;">
                                                @php($lecturePeriod = $rasporedSve[5]->where('day', $day)->where('hours', $time['start'])->where('week', $byWeeksOne)->first())                               
                                                @if($lecturePeriod)
                                                    @php($kolegij = App\Models\SubjectPP::where('id', $lecturePeriod->subjectPP_id)->first())   
                                                    {{Str::upper($lecturePeriod->classroom->ime )}}&nbsp;{{Str::upper($kolegij->name)}}
                                                    @if(strlen($lecturePeriod->comment)>2) 
                                                        <span style="color: black;">*</span><br/>
                                                        <span   style="color: black; font-size: 0.8em;">*{{Str::limit($lecturePeriod->comment, 15, '')}}</span>
                                                    @else 
                                                        <!--<span style="color: rgb(224,224,224);">*</span><br/>
                                                        <span   style="color: rgb(224,224,224); font-size: 0.8em;">*</span>  -->                                                       
                                                    @endif
                                                @endif
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                            @else 
                                <tr>
                                    <td style="text-align: center;">{{$time['real_start']}}</td>
                                    @foreach($rasporedSve[0] as $index => $day)
                                        <td style="text-align: center; padding: 5px;">
                                            <div  style="margin:0; padding: 0;">
                                                @php($lecturePeriod = $rasporedSve[5]->where('day', $day)->where('hours', $time['start'])->where('week', $byWeeksOne)->first())                               
                                                @if($lecturePeriod) 
                                                    @php($kolegij = App\Models\SubjectPP::where('id', $lecturePeriod->subjectPP_id)->first())  
                                                    {{Str::upper($lecturePeriod->classroom->ime )}}&nbsp;{{Str::upper($kolegij->name)}}
                                                    @if(strlen($lecturePeriod->comment)>2) 
                                                        <span style="color: black;">*</span><br/>
                                                        <span   style="color: black; font-size: 0.8em;">*{{Str::limit($lecturePeriod->comment, 15, '')}}</span>
                                                    @else 
                                                        <!--<span style="color: white;">*</span><br/>
                                                        <span   style="color: white; font-size: 0.8em;">*</span> -->                                                        
                                                    @endif
                                                @endif
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                            @endif    
                            @php($counter = $counter + 1)
                        @endforeach
                    </tbody>
                </table>
            @endif
            @if($index < 14)
                <p style="page-break-before: always">
            @endif
        @endforeach
    </body>
</html>   


