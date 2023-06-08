<h1>Deletar evento {{$event->name}}</h1>

<form action="{{route('events.destroy', $event->id)}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="DELETAR">
</form>