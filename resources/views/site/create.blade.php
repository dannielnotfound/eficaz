<h1>Criar novo evento</h1>

<form method="POST" action="{{route('events.store')}}">
    @csrf
    <input name="name" type="text"  placeholder="Nome do evento"><br>
    <textarea placeholder="Descrição" name="description" cols="30" rows="10"></textarea><br>
    <input type="date" name="date"><br>
    <input type="text" name="city" placeholder="Cidade"><br>
    <input type="text" name="address" placeholder="Endereço"><br>
    <input type="submit" value="Enviar">
</form>