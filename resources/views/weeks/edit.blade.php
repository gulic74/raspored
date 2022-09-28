<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uredi tjedan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div style="margin:15px;">
                    @if ($errors->any())
                            <div class="mb-4 font-medium text-sm text-red-500 font-bold ml-6">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                        <div class="mb-4 font-medium text-sm text-green-600" style="margin-left: 20px; margin-top: 15px;">
                            <b>{{session('success')}}</b>
                        </div>
                        @elseif (session('error'))
                            <div class="mb-4 font-medium text-sm text-green-600" style="margin-left: 20px; margin-top: 15px;">
                                <b>{{session('error')}}</b>
                            </div>
                        @endif

                <form action="{{ route('weeks.update', $week->id) }}" method="POST">
                    @csrf

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="ime" class="block text-sm font-medium text-gray-700">Ime tjedna: </label>
                            <input type="text" name="ime" id="ime" value="{{ $week->name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="smjer" class="block text-sm font-medium text-gray-700">Smjer: </label>
                            <select id="smjer" name="smjer" value="{{ $week->course }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">   
                            <option value="Nautika" {{($week->course == 'Nautika') ? 'selected' : ''}}>Nautika</option>
                            <option value="Brodostrojarstvo" {{($week->course == 'Brodostrojarstvo') ? 'selected' : ''}}>Brodostrojarstvo</option> 
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="semestar" class="block text-sm font-medium text-gray-700">Blok: </label>
                            <select id="semestar" name="semestar" value="{{ $week->semester }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="ZIMSKI" {{($week->semester == 'ZIMSKI') ? 'selected' : ''}}>1. blok</option>
                            <option value="LJETNI" {{($week->semester == 'LJETNI') ? 'selected' : ''}}>2. blok</option>
                            </select>
                        </div>

                        <div class="col-span-6">
                            <label for="datum_pocetka" class="block text-sm font-medium text-gray-700">Početak tjedna: </label>
                            <input type="date" name="datum_pocetka" id="datum_pocetka" value="{{ $week->start_day }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Spremi promjene
                        </button>
                    </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>