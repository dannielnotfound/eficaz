<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($event->name) }}
        </h2>
    </x-slot>


    <div class="bg-white">
        <div class="pt-6">
          <nav aria-label="Breadcrumb">
            <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
              <li>
                <div class="flex items-center">
                  <a href="{{route('events.index')}}" class="mr-2 text-sm font-medium text-gray-900">Eventos</a>
                  <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                  </svg>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <a href="{{route('events.index', $event->city)}}" class="mr-2 text-sm font-medium text-gray-900">{{$event->city}}</a>
                  <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                  </svg>
                </div>
              </li>
      
              <li class="text-sm">
                <a href="{{route('events.show', $event->id)}}" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{$event->name}}</a>
              </li>
            </ol>
          </nav>

          <!-- IEvent image -->
          <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                <img class="w-full" src="https://www.apage.com.br/wp-content/uploads/2022/02/LOGO-EFICAZ-SEM-FUNDO.png" alt="{{$event->description}}">
            </div>
            
          </div>
      
          <!-- Event info -->
          <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
              <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$event->name}}</h1>
            </div>
      
      
            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
              <!-- Description and details -->
              <div>
                <h3 class="sr-only">Descrição</h3>
      
                <div class="space-y-6">
                  <p class="text-base text-gray-900">{{$event->description}}</p>
                </div>
              </div>
      
              <div class="mt-10">
                <h3 class="text-sm font-medium text-gray-900">Informações</h3>
      
                <div class="mt-4">
                  <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                    <li class="text-gray-400"><span class="text-gray-600">Cidade: {{$event->city}}</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Endereço: {{$event->address}}</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Data: {{$event->date}}</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Quantiade de pessoas confirmadas: {{$event->user->count()}}</span></li>
                  </ul>
                </div>
              </div>
      
              <div class="mt-10">
                <div class="mt-4 space-y-6">
                    <form action="{{route('event.join', $event->id)}}" method="post">
                        @csrf
                        <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Participar</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
</x-app-layout>
{{-- <h1>Detalhes do evento {{$event->name}}</h1>
<div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 relative">
    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white scale-100 hover:scale-105 ease-in duration-100">
        <img class="w-full" src="https://www.apage.com.br/wp-content/uploads/2022/02/LOGO-EFICAZ-SEM-FUNDO.png" alt="{{$event->description}}">
    </div>
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
</div>

<ul>
    <li>{{$event->user->name}}</li>
    <li>{{$event->id}}</li>
    <li>{{$event->name}}</li>
    <li>{{$event->description}}</li>
    <li>{{$event->date}}</li>
    <li>{{$event->city}}</li>
    <li>{{$event->address}}</li>
</ul> --}}

