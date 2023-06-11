
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos os eventos') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4 ">
        {{-- @include('site.partials.events')  CARDS de eventos--}} 
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($events as $event)
            <a href="{{route('events.show', $event->id)}}" class="max-w-sm rounded overflow-hidden shadow-lg bg-white scale-100 hover:scale-105 ease-in duration-100">
                <img class="w-full" src="https://www.apage.com.br/wp-content/uploads/2022/02/LOGO-EFICAZ-SEM-FUNDO.png" alt="{{$event->description}}">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$event->name}}</div>
                    <p class="text-gray-700 text-base">
                        {{$event->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$event->city}}</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$event->address}}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
