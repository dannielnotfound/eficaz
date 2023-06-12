<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('events.user.events')" :active="request()->routeIs('events.user.events')">
                    {{ __('Meus eventos') }}
                </x-nav-link>
                <x-nav-link :href="route('events.index')" :active="request()->routeIs('events.index')">
                    {{ __('Eventos que estou participando') }}
                </x-nav-link>
            </div>
        </div>
    </x-slot>
    <div class="container mx-auto px-4 ">
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($eventsAsParticipant as $event)
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white scale-100  hover:scale-105 ease-in duration-100 relative">
                <a href="{{ route('events.show', $event->id) }}">
                    <img class="w-full" src="https://www.apage.com.br/wp-content/uploads/2022/02/LOGO-EFICAZ-SEM-FUNDO.png" alt="{{$event->description}}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$event->name}}</div>
                        <p class="text-gray-700 text-base">
                            {{$event->description}}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$event->city}}</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{date('d/m/Y', strtotime($event->date))}}</span>
                    </div>
                    <div class="px-6 py-4 flex justify-between">
                        <div>
                            <a href="{{ route('events.edit', $event->id) }}" class="inline-block bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                            <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Deletar</button>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</x-app-layout>