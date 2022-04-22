@extends('layouts.app')



@section('title', 'Home')

@section('content')

<div>
    <h1 class="font-bold text-3xl text-orange-600 py-4 text-center">CREAR EVENTO</h1>
</div>


<div class="flex justify-center w-full py-10 px-5 md:px-10">
<form action="" method="POST">
    <div>
        <div class="flex -mx-3">

            <div class="w-1/2 px-3 mb-5">
                <label for="" class="font-semibold">Titulo</label>
                <input id="title" type="text" placeholder="Titulo"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
            </div>

            <div class="w-1/2 px-3 mb-5">
                <label for="" class="font-semibold">Fecha</label>
                <input id="fecha" type="date" placeholder="Fecha"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
            </div>
            <div class="w-1/2 px-3 mb-5">
                <label for="" class="font-semibold">Fecha</label>
                <input id="hora" type="time" placeholder="Hora"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
            </div>
        </div>

        <div class="flex -mx-3">
            <div class="w-full px-3 mb-5">
                <label for="" class="font-semibold">Descripción</label>
                <input id="descripcion" type="text" placeholder="Descripción"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
            </div>
        </div>

        <div class="flex -mx-3">
            <div class="w-full px-3 mb-12">
                <label for="" class="font-semibold">Numero de inscritos</label>
                <input id="participantes" type="number" placeholder="Inscritos"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
            </div>
        </div>

        
        <div class="flex items-baseline justify-between">
            <button type="submit" class="font-semibold px-6 py-2 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600">Cargar imagen</button>
            <button id="imagen" type="submit" class="font-semibold px-6 py-2 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600">Guardar</button>
        </div>
        
        </div>
    </div>
</form>
</div>

<x-footer/>
@endsection