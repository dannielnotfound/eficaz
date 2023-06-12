<x-app-layout>

    <h1>Detalhes do evento {{$event->name}}</h1>
    
    <ul>
        <li>{{$event->user->name}}</li>
        <li>{{$event->id}}</li>
        <li>{{$event->name}}</li>
        <li>{{$event->description}}</li>
        <li>{{$event->date}}</li>
        <li>{{$event->city}}</li>
        <li>{{$event->address}}</li>
    </ul>

</x-app-layout>