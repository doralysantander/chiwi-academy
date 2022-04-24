@extends('layouts.app')



@section('title', 'Login')

@section('content')
    <div>
        <div class="  my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->

                <div class="w-full  md:w-[400px] md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white sm:flex sm:flex-col sm:items-center md:block  p-3 border-t-4 border-orange-600">
                        <div class="image  sm:w-[50%] md:w-auto  overflow-hidden rounded-full">
                            <img class="h-auto w-full mx-auto"
                                src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                alt="">
                        </div>
                        <h1 class="text-black font-bold text-xl leading-8 my-1">Informacion Personal</h1>
                        <br />
                        <div>
                            <div>
                                <h3 class="text-black font-bold font-lg  leading-6">Nombre Completo</h3>
                                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{ auth()->user()->name }}
                                </p>
                            </div>
                            <div>
                                <h3 class="text-black font-bold font-lg  leading-6">Correo electronico</h3>
                                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{ auth()->user()->email }}
                                </p>
                            </div>



                        </div>


                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Opciones</span>
                                <span class="ml-auto">
                                    <span class="bg-orange-600 py-1 px-2 rounded text-white text-sm">Editar</span>
                                    <span class="bg-orange-600 py-1 px-2 rounded text-white text-sm">Eliminar</span>
                                </span>
                            </li>

                        </ul>

                    </div>

                </div>
                <div>
                    <h1 class="lg:text-4xl font-bold text-orange-600">Mis eventos</h1>
                    <div class="grid sm:grid-cols-2 xl:grid-cols-3">
                    
                        @foreach ($masterClases as $item)
                            @isset($item->user_masterclass[0])
                                <x-card :item='$item'/>
                                
                            @endisset
                        @endforeach
    
                    </div>
                </div>
                
            </div>

        </div>
    </div>


@endsection
