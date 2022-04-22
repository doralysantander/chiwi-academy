@props(['masterClases'=>$masterClases])
<div class="own-allEventsSection d-flex flex-column align-items-center p-4">
    <h4 class="mt-3 mb-10 text-4xl text-center text-orange-600 font-bold">
        EVENTOS
    </h4>
    <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 align-items-center justify-items-center">
        
        @foreach ( $masterClases as $item)
            <x-card :item='$item' />
        @endforeach
    </div>
</div>