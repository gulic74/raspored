<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Popis svih tjedana PPO') }} &nbsp;&nbsp;&nbsp; <a class="bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded-lg text-sm" style="text-decoration:none;" href="{{ url('week/create') }}">+ Novi tjedan PPO</a>
        </h2>
    </x-slot>

    <x-slot name="slot">
      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg min-h-fit">                 
                  <div style="margin:15px;">

                    @if (session('success'))
                    <div class="mb-4 font-medium text-sm text-green-600" style="margin-left: 5px; margin-top: 15px;">
                        <b>{{session('success')}}</b>
                    </div>
                @elseif (session('error'))
                    <div class="mb-4 font-medium text-sm text-green-600" style="margin-left: 20px; margin-top: 15px;">
                        <b>{{session('error')}}</b>
                    </div>
                @endif

                  @if ($message = Session::get('info'))
                      <div class="alert alert-info">
                          <p>{{ $message }}</p>
                      </div>
                  @endif

                  @if ($message = Session::get('warning'))
                      <div class="alert alert-warning">
                          <p>{{ $message }}</p>
                      </div>
                  @endif


                  @foreach($weeks as $index => $week)
                                  <div class="kolegij" style="border: 1px solid rgb(201, 201, 201); border-radius: 15px; margin-bottom: 20px; padding-bottom:15px; padding-left: 10px; box-shadow: 3px 3px 2px 1px rgba(11, 23, 34, .2);">
                                    <div class="grid grid-cols-7 mb-2">
                                      <div class="mt-4 col-span-5 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Tjedan:</span> {{ $week->name }}
                                      </div>
                                      <div class="mt-4 col-span-5 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Smjer:</span> {{ $week->course }}
                                      </div>
                                      <div class="mt-4 col-span-5 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Blok:</span> {{($week->semester == 'ZIMSKI') ? '1. blok' : '2. blok'}}
                                      </div>
                                      <div class="mt-4 col-span-5 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Početak:</span> {{ date_create_from_format("Y-m-d", $week->start_day )->format("d.m.Y.") }}
                                      </div>
                                      <div class="mt-4 col-span-5 sm:col-span-2 md:col-span-2 lg:col-span-1 lg:text-center">
                                        <span style="font-weight: bold;">Status:&nbsp;</span> 
                                        @if(strcmp(date('Y-m-d'), $week->start_day) > 0)
                                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="green" class="bi bi-check-circle" style="margin: auto;" viewBox="0 0 16 16">
                                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                            </svg>
                                        @else
                                          <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="red" class="bi bi-x-circle" style="margin: auto;" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                        @endif
                                    </div>
                                      <div class="mt-4 col-span-5 sm:col-span-2 md:col-span-1 lg:col-span-2 lg:text-right lg:pr-6 md:pr-3">
                                        <a class="inline-block" href="{{ route('weeks.edit', $week->id) }}"> 
                                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                        </a>&nbsp;&nbsp;&nbsp;
                                        <a  class="inline-block" href="{{ route('weeks.destroy', $week->id) }}">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
              @endforeach              
            </div>
        </div>
    </div>
  </div>
</x-slot>
</x-app-layout>