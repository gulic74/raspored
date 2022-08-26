
        <x-app-layout>
            <x-slot name="header">
                <div class="grid grid-cols-12">
                    <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1">
                        @if (Auth::check())
                        @else
                            <a href="{{ route('home') }}" style="text-decoration: none; cursor: pionter;"><img style="min-width:50px; max-width:50px; padding-right:5px; float:left; margin-top:-10px; margin-bottom:0px;" src="{{ asset('images/logo3.png') }}"/></a>
                        @endif
                    </div>
                    <div class="col-span-7 sm:col-span-7 md:col-span-9 lg:col-span-9 ml-6">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="white-space: normal;">
                            {{ __('Sveučilište u Rijeci, Pomorski fakultet - raspored sati') }}
                        </h2>
                    </div>
                    <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 text-right">
                        @if (Auth::check())
                        @else
                            <span class="inline-block">&nbsp;&nbsp;Nastavnici</span>
                            <a href="{{ route('login') }}" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </x-slot>
        
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <x-jet-welcome />
                    </div>
                </div>
            </div>
        </x-app-layout>
 
