@extends('layouts.app')



@section('title', 'Home')

@section('content')

<div>
    <h1 class="font-bold text-3xl text-orange-600 py-4 text-center">CREAR EVENTO</h1>
    
</div>


<div class="flex justify-center w-full py-10 px-5 md:px-10">
<form action="{{route('event.createEvent')}}" method="POST">
    @csrf
    <div>
        <div class="flex -mx-3">

            <div class="w-1/2 px-3 mb-5">
                <label for="" class="font-semibold">Titulo</label>
                <input name="title" type="text" placeholder="Titulo" value="{{old('title')}}"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                @error('title')
                    <br>
                    <small>*{{$message}}</small>
                
                @enderror
            </div>

            

            <div class="w-1/2 px-3 mb-5">
                <label for="" class="font-semibold">Fecha</label>
                <input name="fecha" type="date" placeholder="Fecha" value="{{old('fecha')}}" 
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                @error('fecha')
                    <br>
                    <small>*{{$message}}</small>
                
                 @enderror
            </div>
            
            <div class="w-1/2 px-3 mb-5">
                <label for="" class="font-semibold">Hora</label>
                <input name="hora" type="time" placeholder="Hora" value="{{old('hora')}}" 
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                @error('hora')
                    <br>
                    <small>*{{$message}}</small>
                
                @enderror
            </div>
            
        </div>

        <div class="flex -mx-3">
            <div class="w-full px-3 mb-5">
                <label for="" class="font-semibold">Descripción</label>
                <input name="descripcion" type="text" placeholder="Descripción" value="{{old('descripcion')}}"  
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                @error('descripcion')
                    <br>
                    <small>*{{$message}}</small>
                
                @enderror
            </div>
            
        </div>

        <div class="flex -mx-3">
            <div class="w-full px-3 mb-12">
                <label for="" class="font-semibold">Número de inscritos</label>
                <input name="participantes" type="number" placeholder="Inscritos" value="{{old('participantes')}}" 
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                @error('participantes')
                    <br>
                    <small>*{{$message}}</small>
                
                @enderror
            </div>
        </div>

        
        <div class="flex items-baseline justify-between">
            <button type="submit" class="font-semibold px-6 py-2 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600">Cargar imagen</button>
            <button name="imagen" type="submit" class="font-semibold px-6 py-2 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600">Guardar</button>
        </div>
        
        </div>
    </div>
</form>
</div>

@endsection