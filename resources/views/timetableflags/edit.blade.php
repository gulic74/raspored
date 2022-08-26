<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ažuriraj vidljivost rasporeda') }}
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
                            <form method="POST" action="{{ route('timetableflag.storeflags') }}">
                                @csrf
                                <div class="grid grid-cols-1 mb-6">
                                    <div class="mt-4 ml-2 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="aktivanRedovni" class="inline-block">Aktivan redovni raspored</x-jet-label> 
                                      
                                         <input type="checkbox" class="inline-block rounded border-gray-300 text-indigo-600 shadow-sm 
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                        name="aktivanRedovni" id="aktivanRedovni" value="1" 
                                        {{ ($timeTableFlag->aktivanRedovni == 1) ? "checked" : "" }} >                                                                                                          
                                    </div> 
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="komentarRedovni">Komentar redovni raspored</x-jet-label>  
                                    <x-jet-input id="komentarRedovni" name="komentarRedovni" type="text" class="mt-1 w-full lg:w-3/4" placeholder="komentarRedovni" value="{{$timeTableFlag->komentarRedovni}}" />                                                                                                         
                                    </div> 
                                    <hr class="border-indigo-900 border-1">
                                    <div class="mt-4 ml-2 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="aktivanIzvanredni" class="inline-block">Aktivan izvanredni raspored</x-jet-label> 
                                      
                                         <input type="checkbox" class="inline-block rounded border-gray-300 text-indigo-600 shadow-sm 
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                        name="aktivanIzvanredni" id="aktivanIzvanredni" value="1" 
                                        {{ ($timeTableFlag->aktivanIzvanredni == 1) ? "checked" : "" }} >                                                                                                          
                                    </div> 
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="komentarIzvanredni">Komentar izvanredni raspored</x-jet-label>  
                                    <x-jet-input id="komentarIzvanredni" name="komentarIzvanredni" type="text" class="mt-1 w-full lg:w-3/4" placeholder="komentarIzvanredni" value="{{$timeTableFlag->komentarIzvanredni}}" />                                                                                                         
                                    </div> 
                                    <hr>
                                    <div class="mt-4 ml-2 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="aktivanPPO" class="inline-block">Aktivan PPO</x-jet-label> 
                                      
                                         <input type="checkbox" class="inline-block rounded border-gray-300 text-indigo-600 shadow-sm 
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                        name="aktivanPPO" id="aktivanPPO" value="1" 
                                        {{ ($timeTableFlag->aktivanPPO == 1) ? "checked" : "" }} >                                                                                                          
                                    </div> 
                                    <div class="mt-4 ml-2 mb-8 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                        <x-jet-label for="komentarPPO">Komentar PPO</x-jet-label>  
                                    <x-jet-input id="komentarPPO" name="komentarPPO" type="text" class="mt-1 w-full lg:w-3/4" placeholder="komentarPPO" value="{{$timeTableFlag->komentarPPO}}" />                                                                                                         
                                    </div>             
                                </div>                                     
                                <div class="flex items-center justify-begin mt-6">
                                    <x-jet-button class="ml-0" >
                                        {{ __('Ažuriraj vidljivost rasporeda') }}
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