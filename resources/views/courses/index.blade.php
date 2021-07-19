<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Popis kolegija') }} &nbsp;&nbsp;&nbsp; <a class="bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded-lg text-sm" style="text-decoration:none;" href="{{ url('courses/create') }}">+ Novi kolegij</a>
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                 
                    <div style="margin:15px;">
                        @livewire('filter-courses', ['kolegiji' => $kolegiji])                    
                        </div>
                </div> 
            </div>
        </div>
    </x-slot>
</x-app-layout>