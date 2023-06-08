<h1>Editar evento {{$event->name}}</h1>

<form action="{{route('events.update', $event->id)}}" method="post">
@method('PUT')
@include('site.components.alert')
@include('site.partials.form', $event)
</form>