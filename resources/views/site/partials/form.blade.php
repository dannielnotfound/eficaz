@csrf

<div class="mb-4">
    <input name="name" type="text" value="{{ $event->name ?? old('name') }}" placeholder="Nome do evento" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
</div>
<div class="mb-4">
    <textarea placeholder="Descrição" name="description" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" rows="5">{{ $event->description ?? old('description') }}</textarea>
</div>
<div class="mb-4">
    <input type="date" value="{{ $event->date ?? old('date') }}" name="date" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
</div>
<div class="mb-4">
    <input type="text" value="{{ $event->city ?? old('city') }}" name="city" placeholder="Cidade" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
</div>
<div class="mb-4">
    <input type="text" value="{{ $event->address ?? old('address') }}" name="address" placeholder="Endereço" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
</div>
<div>
    <input type="submit" value="Enviar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
</div>