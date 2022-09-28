
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Popis svih kolegija PPO') }} &nbsp;&nbsp;&nbsp; <a class="bg-green-500 hover:bg-green-700 text-white py-2 px-3 rounded-lg text-sm" style="text-decoration:none;" href="{{ url('subject/create') }}">+ Novi kolegij PPO</a>
        </h2>
    </x-slot>

    <x-slot name="slot">
      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg min-h-fit pb-3">                 
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
                                <div class="grid grid-cols-6 m-0 p-0">
                                    <div class="m-0 p-0 col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-3">
                                        <form action="{{ route('search') }}" method="GET" role="search" class="mb-6">
                                            <input type="text" style="border-radius: 10px;" placeholder="Pretraži..." name="search" required/>
                                                <button type="submit" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" type="submit">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                </button>
                                        </form>
                                    </div>
                                    <div class="m-0 p-0 col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-3">
                                        <a class="inline-block bg-green-500 hover:bg-green-700 text-white py-2 mb-2 px-3 rounded-lg text-md" style="text-decoration:none;" href="{{ route('subjects.index') }}">Prikaži ponovno sve kolegije</a>
                                    </div>
                                </div>
                                  @foreach($subjectWithUser as $subjectWithUserJedan)
                                  <div class="kolegij" style="border: 1px solid rgb(201, 201, 201); border-radius: 15px; margin-bottom: 20px; padding-bottom:15px; padding-left: 10px; box-shadow: 3px 3px 2px 1px rgba(11, 23, 34, .2);">
                                    <div class="grid grid-cols-6 mb-2">
                                      <div class="mt-4 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Ime:</span> {{ $subjectWithUserJedan[1] }}
                                      </div>
                                      <div class="mt-4 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Smjer:</span> {{ $subjectWithUserJedan[2] }}
                                      </div>
                                      <div class="mt-4 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Blok:</span> {{($subjectWithUserJedan[3] == 'ZIMSKI') ? '1. blok' : '2. blok'}}
                                      </div>
                                      <div class="mt-4 col-span-6 sm:col-span-2 md:col-span-2 lg:col-span-1">
                                          <span style="font-weight: bold;">Broj sati:</span> {{ $subjectWithUserJedan[4] }} ({{ $subjectWithUserJedan[5] }})
                                      </div>
                                      <div class="mt-4 col-span-6 sm:col-span-2 md:col-span-4 lg:col-span-2 lg:text-right lg:pr-6 md:pr-3">
                                        <a class="inline-block" href="{{ route('subjects.edit', $subjectWithUserJedan[0]) }}"> 
                                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                        </a>&nbsp;&nbsp;&nbsp;
                                        <a  class="inline-block" href="{{ route('subjects.destroy', $subjectWithUserJedan[0]) }}">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                          </svg>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="grid grid-cols-6 mb-2">
                                        <div class="mt-2 col-span-6">
                                            <span style="font-weight: bold;">Profesori:</span> {{ $subjectWithUserJedan[6] }} &nbsp;
                                            <a class="inline-block align-middle" href="{{ route('subjects.editusers', $subjectWithUserJedan[0]) }}"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
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