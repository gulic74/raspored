<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uređivanje kolegija PPO') }}
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

                <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
                    @csrf

                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="ime" class="block text-sm font-medium text-gray-700">Ime kolegija: </label>
                        <input type="text" name="ime" id="ime" value="{{ $subject->name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="smjer" class="block text-sm font-medium text-gray-700">Smjer: </label>
                        <select id="smjer" name="smjer" value="{{ $subject->course }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">   
                            <option value="Nautika" {{($subject->course == 'Nautika') ? 'selected' : ''}}>Nautika</option>
                            <option value="Brodostrojarstvo" {{($subject->course == 'Brodostrojarstvo') ? 'selected' : ''}}>Brodostrojarstvo</option> 
                        </select>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="semestar" class="block text-sm font-medium text-gray-700">Blok: </label>
                        <select id="semestar" name="semestar" value="{{ $subject->semester }}" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="ZIMSKI" {{($subject->semester == 'ZIMSKI') ? 'selected' : ''}}>1. blok</option>
                            <option value="LJETNI" {{($subject->semester == 'LJETNI') ? 'selected' : ''}}>2. blok</option>
                        </select>
                    </div>

                    <div class="col-span-6">
                        <label for="brojSati" class="block text-sm font-medium text-gray-700">Ukupan fond sati za kolegij: </label>
                        <input type="number" name="brojSati" id="brojSati" value="{{ $subject->hours }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    </div>
                </div>

                <div class="px-4 py-3 text-right sm:px-6">
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