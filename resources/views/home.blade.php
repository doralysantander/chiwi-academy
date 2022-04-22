@extends('layouts.app')



@section('title', 'Home')

@section('content')


    {{-- HERO --}}

    <div class="relative h-screen w-full flex items-center justify-center text-center bg-cover bg-center"
        style="background-image:url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80);">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-75"></div>

        <main class="px-4 sm:px-6 lg:px-8 z-10">
            <div class="text-center">
                <h2
                    class="text-4xl tracking-tight leading-10 font-medium sm:text-5xl text-white sm:leading-none md:text-6xl">
                    <span class="text-orange-600 font-bold">MEETING ACADEMY</span>
                </h2>
                <p class="mt-3 text-2xl font-bold text-orange-300 sm:mt-5 sm:text-md sm:max-w-xl sm:mx-auto md:mt-5">
                    LOS MEJORES EVENTOS ONLINE
                </p>
                <div class="mt-5 pt-10 sm:mt-8 sm:flex justify-center">
                    <button
                        class="p-0 w-12 h-12 bg-orange-600 rounded-full hover:bg-orange-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none">
                        <i class='fa fa-arrow-down text-white'></i>
                    </button>

                </div>
            </div>
        </main>

    </div>


    {{-- SLIDER --}}

    <h2 class="text-4xl font-bold text-orange-600 text-center pt-20 p-4"> EVENTOS DESTACADOS </h2>


    <div class="owl-container py-8 px-10 ">
        <div class="owl-carousel owl-theme">

            @component('components.card')
                @slot('message')
                    este es un mensaje
                @endslot
            @endcomponent
            @component('components.card')
                @slot('message')
                    este es un mensaje
                @endslot
            @endcomponent






        </div>
    </div>

    <x-all-events />


@endsection
