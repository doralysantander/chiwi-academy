@props(['item' => $item])


<div class="rounded-lg m-1 flex items-center justify-center">

    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <div class="relative">
            @if (count($item->count_register) == $item->numero_participantes)
                <div class="absolute w-full h-full flex items-center justify-center  z-10">
                    <h1 class="text-[2rem] text-red-600 font-bold">No disponible</h1>
                </div>
                <img class="w-full grayscale" src="https://definicion.de/wp-content/uploads/2009/12/paisaje-1.jpg"
                    alt="Sunset in the mountains">
            @else
                <img class="w-full" src="https://definicion.de/wp-content/uploads/2009/12/paisaje-1.jpg"
                    alt="Sunset in the mountains">
            @endif

        </div>

        <div class="px-6 py-4">

            <div class="flex justify-between mb-2 items-center">
                <p class="font-bold text-orange-600 text-2xl ">{{ $item->title }}</p>
                <p>{{ count($item->count_register) }}/{{ $item->numero_participantes }}</p>
            </div>
            <p class="text-gray-700 text-base h-20 overflow-y-auto">
                {{ $item->descripcion }}

            </p>
        </div>
        <!--{{ $item->register }}-->
        <div class="flex justify-between px-6 py-4">
            <div>
                <p class="font-bold text-orange-600">{{ $item->fecha }}</p>
                <p class="text-gray-700 text-base"> {{ $item->hora }} </p>
            </div>

            @if (auth()->check())
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('event.edit', $item) }}"
                        class="bg-orange-600 text-white font-bold  p-2 rounded-full">Editar</a>
                @else
                    @if (isset($item->register[0]->user_id))
                        <form method="POST" action="{{ route('home.destroy') }}">

                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="masterclass_id" value="{{ $item->id }}" />
                            <button type="submit"
                                class="bg-red-600 text-white font-bold  p-2 rounded-full">Cancelar</button>
                            {{-- <input type="Enroll"> --}}
                        </form>
                    @else
                        @if (count($item->count_register) == $item->numero_participantes)
                            <div
                                class="text-center flex justify-center items-center text-red-600 font-bold  p-2 rounded-full">
                                Evento lleno</div>
                        @else
                            <form method="POST" action="{{ route('event.create') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="masterclass_id" value="{{ $item->id }}" />
                                <button type="submit"
                                    class="bg-orange-600 text-white font-bold  p-2 rounded-full">Incribirme</button>
                                {{-- <input type="Enroll"> --}}
                            </form>
                        @endif


                    @endif

                @endif
            @endif

        </div>
    </div>
</div>
