<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <style>
  
    </style>
</head>
<body>
    



    <div class="container mx-auto px-4 ">
        <h1>Todos os eventos</h1>
        <a href="{{route('events.create')}}">Criar Evento</a>
        {{-- @include('site.partials.events')  CARDS de eventos--}} 
        <table>
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
        </table>
    </div>
</body>
</html>