@props(['item' => $item])

<div class="rounded-lg m-1 flex items-center justify-center">

    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://definicion.de/wp-content/uploads/2009/12/paisaje-1.jpg"
            alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-orange-600 text-2xl mb-2">{{ $item->title }}</div>
            <p class="text-gray-700 text-base">
                {{ $item->descripcion }}
            </p>
        </div>
        <div class="flex justify-between px-6 py-4">
            <div>
                <p class="font-bold text-orange-600">{{ $item->fecha }}</p>
                <p class="text-gray-700 text-base"> {{ $item->hora }} </p>
            </div>

            @if (auth()->check())
                @if (auth()->user()->role === 'admin')
                    <a href="{{route('event.edit', $item)}}" class="bg-orange-600 text-white font-bold  p-2 rounded-full">Editar</a>
                @else
                    <button class="bg-orange-600 text-white font-bold  p-2 rounded-full">Inscribirme</button>
                @endif
            @endif

        </div>
    </div>
</div>
