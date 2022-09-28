<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slaganje rasporeda PPO') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            @livewire('time-subject', ['timeRange' => $timeRange, 'weekDays' => $weekDays, 'byWeeks' => $byWeeks, 'weeksData' => $weeksData, 'infoPPOone' => $infoPPOone])               
        </div>
    </div> 
</x-app-layout>