<form action="{{ route('events.index') }}" method="get" class="mt-4">
    <div class="flex items-center border-b border-gray-500 py-2">
        <input name="filter" type="text" placeholder="Pesquisar" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">
        <button type="submit" class="flex-shrink-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Pesquisar
        </button>
    </div>
</form>