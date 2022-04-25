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
                                src="https://raw.githubusercontent.com/DanielaTob/img/main/user.png"
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
