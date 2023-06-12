<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar novo Evento') }}
        </h2>
    </x-slot>

    <div class="flex justify-center mb-10 mt-10">
        <form method="POST" action="{{ route('events.store') }}" class="w-full max-w-md bg-white p-8 shadow-md rounded-lg">
            @include('site.components.alert')
            @csrf
            @include('site.partials.form')
        </form>
    </div>
      
</x-app-layout>

