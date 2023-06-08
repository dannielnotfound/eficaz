<div class="flex justify-center">
    <div class="grid grid-cols-4 gap-4 place-content-center gap-4">
        @foreach ($events as $event)
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                <img class="w-full" src="https://d3jdy5kagtp3z4.cloudfront.net/files/eventos/170/18bc34ea92e424db9fad19091dacfcae.png" alt="{{$event->description}}">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$event->name}}</div>
                    <p class="text-gray-700 text-base">
                        {{$event->description}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$event->city}}</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$event->address}}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>