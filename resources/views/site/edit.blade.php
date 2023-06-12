<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Evento') }}
        </h2>
    </x-slot>
    
    <div class="flex justify-center mb-10 mt-10">
        <form method="POST" action="{{route('events.update', $event->id)}}" class="w-full max-w-md bg-white p-8 shadow-md rounded-lg">
            @include('site.components.alert')
            @method('PUT')
            @csrf
            @include('site.partials.form')
        </form>
    </div>
</x-app-layout>
{{-- <h1>Editar evento {{$event->name}}</h1>
<form action="{{route('events.update', $event->id)}}" method="post">
@method('PUT')
@include('site.components.alert')
@include('site.partials.form', $event)
</form> --}}

