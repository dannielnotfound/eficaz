@csrf


<input name="name" type="text" value="{{$event->name ?? old('name')}}" placeholder="Nome do evento"></input><br>
<input type="textarea" placeholder="Descrição" cols="30" rows="10" name="description" value={{$event->description ?? old('description')}} ><br>
<input type="date" value="{{$event->date ?? old('date')}}" name="date"><br>
<input type="text" value="{{$event->city ?? old('city')}}" name="city" placeholder="Cidade"><br>
<input type="text" value="{{$event->address ?? old('address')}}" name="address" placeholder="Endereço"><br>
<input type="submit" value="Enviar">
