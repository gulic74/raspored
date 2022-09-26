<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <table style="border-collapse: collapse;">
        <thead style="width: 100%;">
            <tr>
            <th style="border: 2px solid black;">Vrijeme</th>
            @foreach($weekDays as $day)
                <th style="border: 2px solid black;">{{ $day }}</th>
            @endforeach
            </tr>
        </thead>
        <tbody style="width: 100%; ">
            @foreach($timeRange as $time)
                <tr >
                    <td style="border: 2px solid black;">
                        {{ $time['start'] }} - {{ $time['end'] }}
                    </td>
                    @foreach($weekDays as $day)  
                        <td style="border: 2px solid black; text-align: center">
                            <div>
                                @php($lecturePeriod = $lecturePeriods->where('day', $day)->where('hours', $time['start'])->first())                               
                                @if($lecturePeriod)                                 
                                <form>
                                    <div>
                                    {{$lecturePeriod->subjectPP->name}}
                                    </div>
                            
                                    <div>
                                        Predavaonica: {{$lecturePeriod->classroom->ime }}
                                    </div>

                                    @if($lecturePeriod->comment)
                                        <div>
                                            Komentar: {{$lecturePeriod->comment}}
                                        </div>   
                                    @endif  
                                </form>
                                @endif
                            </div> 
                        </td>            
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>  
</body>
</html>