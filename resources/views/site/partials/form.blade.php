@csrf
<div class="mb-4">
    <label for="name" class="block text-gray-700 font-bold mb-2">Nome do evento</label>
    <input name="name" type="text" value="{{$event->name ?? old('name')}}" placeholder="Nome do Evento" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
</div>
<div class="mb-4">
    <label for="description" class="block text-gray-700 font-bold mb-2">Descrição</label>
    <textarea name="description" id="description"  cols="30" rows="10" placeholder="Descrição"  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">{{$event->description ?? old('description')}}</textarea>
</div>
<div class="mb-4">
    <label for="date" class="block text-gray-700 font-bold mb-2">Data</label>
    <input type="date" name="date" value="{{$event->date ?? old('date')}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
</div>
<div class="flex flex-wrap mb-4">
    <div class="w-full md:w-1/2 md:pr-2">
        <label for="city" class="block text-gray-700 font-bold mb-2">Cidade</label>
        <input type="text"  name="city" value="{{$event->city ?? old('city')}}" placeholder="Cidade" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
    </div>
    <div class="w-full md:w-1/2 md:pl-2">
        <label for="address" class="block text-gray-700 font-bold mb-2">Endereço</label>
        <input type="text" name="address" value="{{$event->address ?? old('address')}}" placeholder="Endereço" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
    </div>
</div>
<div class="flex justify-center">
    <input type="submit" value="Enviar" class="w-full md:w-auto bg-indigo-500 text-white font-bold py-2 px-4 rounded hover:cursor-pointer">
</div>
