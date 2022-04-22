@extends('layouts.app')



@section('title', 'Login')

@section('content')

<div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-4 justify-items-center p-2">
    
    <div>
        <img src="https://raw.githubusercontent.com/DanielaTob/img/main/ilustracion2.png" alt="imagen login" />
    </div>

    <div>

        <div class="flex pt-4 items-center justify-center">
            <div class="px-8 py-6 mt-4 text-left bg-white shadow-xl rounded-3xl">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-orange-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <h3 class="text-2xl text-orange-600 font-bold text-center">Iniciar Sesión</h3>
                
                <form method="POST" action="">
                    @csrf


                    <div class="mt-4">
                        
                        <div>
                            <label class="block font-semibold" for="email">Usuario<label>
                                    <input id="email" name="email" type="text" placeholder="Email"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                                    
                        </div>
                        
                        <div class="mt-4">
                            <label class="block font-semibold">Contraseña<label>
                                    <input id="password" name="password" type="password" placeholder="Password"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-orange-600">
                        </div>

                        @error('message')        
                        <p class="border border-orange-500 rounded-md bg-orange-100 w-full
                        text-orange-600 p-2 my-2">* {{ $message }}</p>
                        @enderror

                        <div class="flex items-baseline justify-between">
                            <button type="submit" class="font-semibold px-6 py-2 mt-4 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600">Iniciar Sesión</button>
                            <button class="font-semibold px-6 py-2 mt-4 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600"><a href="{{ route('register.index') }}">Registrarse</a></button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection