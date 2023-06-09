@extends('site.layouts.app')
@section('title', 'Eficaz - Eventos')
@section('content')
<div class="container mx-auto px-4">
    <div class="md:flex md:justify-between md:items-center mb-4">
        <div class="flex flex-wrap items-center">
            @include('site.partials.search')
        </div>
    </div>

    @include('site.partials.events')
</div>
@endsection

    
    
    
        {{-- @include('site.partials.events')  CARDS de eventos--}} 
        {{--
        @include('site.partials.events') --}}
        {{-- <table>
            <tr>
                <th>Evento</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Cidade</th>
                <th>Endereço</th>
            </tr>
            @foreach ($events as $event)
                <tr>
                    <td>{{$event->name}}</td>
                    <td>{{$event->description}}</td>
                    <td>{{$event->date}}</td>
                    <td>{{$event->city}}</td>
                    <td>{{$event->address}}</td>
                    <td>
                        <a href="{{route('events.show', $event->id)}}">Detalhes</a>
                        <a href="{{route('events.edit', $event->id)}}">Editar</a>
                        <a href="{{route('events.delete', $event->id)}}">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </table> --}}
         
        
    </div>
</body>
</html>