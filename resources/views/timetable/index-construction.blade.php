<x-app-layout>
    <x-slot name="header">
        @if (Auth::check())
        @else
            <a href="{{ route('home') }}" style="display: inline-block; float:left; margin-right:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
            </a>
            <a href="{{ route('home') }}" style="text-decoration: none; cursor: pionter;"><img style="min-width:50px; max-width:50px; padding-right:5px; float:left; margin-top:-10px; margin-bottom:0px;" src="{{ asset('images/logo3.png') }}"/></a>
        @endif
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Raspored u izradi') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                 
                    <div style="margin:15px;">
                        <div class="grid grid-cols-2 mb-6">
                            <div class="mt-4 ml-2 col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1">
                                <h2 class="text-xl font-bold">{{$poruka}}</h2>                                                                                                     
                            </div> 
                            <div class="mt-4 ml-2 mb-8 col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1 lg:ml-48">
                                <img class="min-w-400" style="min-width:50px; max-width:300px; margin-top:-35px; margin-bottom:0px;" src="{{ asset('images/construction_logo2.png') }}"/>
                            </div> 
                        </div> 
                    
                    <a style="color: rgb(223, 223, 223); display: block; text-align: right;" href="https://www.freepik.com/vectors/construction-sign">Construction sign vector created by studiogstock - www.freepik.com</a> 
                    </div>
                </div> 
            </div>
        </div>
    </x-slot>
</x-app-layout>