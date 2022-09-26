<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uređivanje nastavnika - ') }} {{ $subject->name }} PPO
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                 
                    <div style="margin:15px;">
                        <div class="mt-8 font-bold">
                            Uređivanje nastavnika na kolegiju {{$subject->name}} ({{$subject->course}})
                        </div>
                        @livewire('users-subject-p-p', ['subject' => $subject, 'users_IDs' => $users_IDs])
                    </div>
                </div> 
            </div>
        </div>
    </x-slot>    
</x-app-layout>