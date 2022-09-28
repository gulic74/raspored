<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ažuriraj PPO podatke') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                 
                    <div style="margin:15px;">
                        <div>
                            <x-jet-validation-errors class="mb-4" />
                            @if (session('success'))
                                <div class="mb-4 font-medium text-sm text-green-600" style="margin-left: 20px; margin-top: 15px;">
                                    <b>{{session('success')}}</b>
                                </div>
                            @endif 
                            <form method="POST" action="{{ route('infoPPO.store') }}">
                                @csrf
                                <div class="grid grid-cols-1 mb-6">
                                    <div class="mt-4 ml-2 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="aktivanNB1" class="inline-block">Aktivan - Nautika 1.blok</x-jet-label> 
                                      
                                         <input type="checkbox" class="inline-block rounded border-gray-300 text-indigo-600 shadow-sm 
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                        name="aktivanNB1" id="aktivanNB1" value="1" 
                                        {{ ($infoPPOone->aktivanNB1 == 1) ? "checked" : "" }} >                                                                                                          
                                    </div> 
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="ciklusNB1">Ciklus:</x-jet-label>  
                                    <x-jet-input id="ciklusNB1" name="ciklusNB1" type="text" class="mt-1 w-full lg:w-3/4" placeholder="ciklusNB1" value="{{$infoPPOone->ciklusNB1}}" />                                                                                                         
                                    </div> 
                                    <hr class="border-indigo-900 border-1">
                                    <div class="mt-4 ml-2 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="aktivanNB2" class="inline-block">Aktivan - Nautika 2.blok</x-jet-label> 
                                      
                                         <input type="checkbox" class="inline-block rounded border-gray-300 text-indigo-600 shadow-sm 
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                        name="aktivanNB2" id="aktivanNB2" value="1" 
                                        {{ ($infoPPOone->aktivanNB2 == 1) ? "checked" : "" }} >                                                                                                          
                                    </div> 
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="ciklusNB2">Ciklus:</x-jet-label>  
                                    <x-jet-input id="ciklusNB2" name="ciklusNB2" type="text" class="mt-1 w-full lg:w-3/4" placeholder="ciklusNB2" value="{{$infoPPOone->ciklusNB2}}" />                                                                                                         
                                    </div> 
                                    <hr>
                                    <div class="mt-4 ml-2 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="aktivanBB1" class="inline-block">Aktivan - Brodostrojarstvo 1.blok</x-jet-label> 
                                      
                                         <input type="checkbox" class="inline-block rounded border-gray-300 text-indigo-600 shadow-sm 
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                        name="aktivanBB1" id="aktivanBB1" value="1" 
                                        {{ ($infoPPOone->aktivanBB1 == 1) ? "checked" : "" }} >                                                                                                          
                                    </div> 
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="ciklusBB1">Ciklus:</x-jet-label>  
                                    <x-jet-input id="ciklusBB1" name="ciklusBB1" type="text" class="mt-1 w-full lg:w-3/4" placeholder="ciklusBB1" value="{{$infoPPOone->ciklusBB1}}" />                                                                                                         
                                    </div>
                                    <hr>
                                    <div class="mt-4 ml-2 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="aktivanBB2" class="inline-block">Aktivan - Brodostrojarstvo 2.blok</x-jet-label> 
                                      
                                         <input type="checkbox" class="inline-block rounded border-gray-300 text-indigo-600 shadow-sm 
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                        name="aktivanBB2" id="aktivanBB2" value="1" 
                                        {{ ($infoPPOone->aktivanBB2 == 1) ? "checked" : "" }} >                                                                                                          
                                    </div> 
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="ciklusBB2">Ciklus:</x-jet-label>  
                                    <x-jet-input id="ciklusBB2" name="ciklusBB2" type="text" class="mt-1 w-full lg:w-3/4" placeholder="ciklusBB2" value="{{$infoPPOone->ciklusBB2}}" />                                                                                                         
                                    </div> 
                                    <hr>
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="defaultNautikaUciona">Predefinirana učionica Nautika (422, 410b, 207, 227, 423, 503, 504 . . .):</x-jet-label>  
                                    <x-jet-input id="defaultNautikaUciona" name="defaultNautikaUciona" type="text" class="mt-1 w-full lg:w-3/4" placeholder="defaultNautikaUciona" value="{{$infoPPOone->defaultNautikaUciona}}" />                                                                                                         
                                    </div>
                                    <hr>
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="defaultBrodostrojarstvoUciona">Predefinirana učionica Brodostrojarstvo (422, 410b, 207, 227, 423, 503, 504 . . .):</x-jet-label>  
                                    <x-jet-input id="defaultBrodostrojarstvoUciona" name="defaultBrodostrojarstvoUciona" type="text" class="mt-1 w-full lg:w-3/4" placeholder="defaultBrodostrojarstvoUciona" value="{{$infoPPOone->defaultBrodostrojarstvoUciona}}" />                                                                                                         
                                    </div>            
                                </div>                                     
                                <div class="flex items-center justify-begin mt-6">
                                    <x-jet-button class="ml-0" >
                                        {{ __('Ažuriraj PPO podatke') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </x-slot>
</x-app-layout>