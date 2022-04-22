@extends('layouts.app')



@section('title', 'Register')

@section('content')


<div class="min-w-screen bg-white flex items-center justify-center px-5 py-5">
    <div class="bg-white text-neutral-900 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">

            <div class="hidden md:block w-1/2 bg-neutral-900 py-10 px-10">
               <img src="../assets/ilu.png" />
            </div>

            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-orange-600">Registro</h1>
                </div>



            <form method="POST" action="">
                @csrf


                <div>
                    <div class="flex -mx-3">

                        <div class="w-1/2 px-3 mb-5">
                            <label for="" class="font-semibold">Nombre</label>
                            <input id="name" name="name" type="text" placeholder="Nombre"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                        </div>
                    </div>

                    @error('name')        
                    <p class="border border-orange-500 rounded-md bg-orange-100 w-full
                    text-orange-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="font-semibold">Email</label>
                            <input id="email" name="email" type="text" placeholder="Email"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                        </div>
                    </div>

                    @error('email')        
                    <p class="border border-orange-500 rounded-md bg-orange-100 w-full
                    text-orange-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="font-semibold">Contraseña</label>
                            <input id="password" name="password" type="password" placeholder="Password"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                        </div>
                    </div>

                    @error('password')        
                    <p class="border border-orange-500 rounded-md bg-orange-100 w-full
                    text-orange-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-6">
                            <label for="" class="font-semibold">Contraseña</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Password confirmation"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                        </div>
                    </div>

                    
                    <div class="flex items-baseline justify-between">
                        <button type="submit" class="font-semibold px-6 py-2 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600">Guardar</button>
                    </div>
                    
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<x-footer/>
@endsection