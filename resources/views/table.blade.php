@extends('layouts.app')



@section('title', 'Home')

@section('content')

<div class="py-6 grid grid-cols-2 justify-items-center">
    <div class="text-orange-600 text-4xl font-bold">EVENTOS</div>
    <div class="">
        <a  href="{{ route('createEvent.index') }}" class="font-semibold px-6 py-2 mt-2 text-neutral-900 bg-orange-600 rounded-lg hover:bg-neutral-900 hover:text-orange-600">Crear evento</a>
    </div>
</div>

<div class="min-h-screen py-5">
    <div class='overflow-x-auto w-full'>
        <table class='table-auto mx-auto max-w-4xl whitespace-nowrap rounded-lg bg-white divide-y divide-orange-600 overflow-hidden'>
            <thead class="bg-orange-200">
                <tr class="text-orange-600 text-left">
                    <th class="font-semibold text-sm uppercase px-6 py-4"> Titulo evento </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4"> Descripción </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Fecha y hora </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Inscritos </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                </tr>
            </thead>


            <tbody class="divide-y divide-gray-200">

                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://raw.githubusercontent.com/DanielaTob/img/main/ilustracion3.png' /> </div>
                            <div>
                                <p> Evento 1 </p>
                            </div>
                        </div>
                    </td>

                    <td  class="px-6 py-4 whitespace-pre-line">
                        <p class="text-gray-500 text-sm font-semibold"> Este evento es para desarrolladores web, hablaremos sobre tecnología y mucho más.</p>
                    </td>

                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-orange-600 font-semibold px-2 rounded-full"> 2022-04-10 </span> </td>
                    <td class="px-6 py-4 text-center"> 10 </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-orange-600 hover:underline">Editar</a> </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-red-600 hover:underline">Eliminar</a> </td>
                </tr>

                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://raw.githubusercontent.com/DanielaTob/img/main/ilustracion3.png' /> </div>
                            <div>
                                <p> Evento 2 </p>
                            </div>
                        </div>
                    </td>
                    <td  class="px-6 py-4 whitespace-pre-line">
                        <p class="text-gray-500 text-sm font-semibold"> Este evento es para desarrolladores web, hablaremos sobre tecnología y mucho más.</p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-orange-600 font-semibold px-2 rounded-full"> 2022-04-10 </span> </td>
                    <td class="px-6 py-4 text-center"> 10 </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-orange-600 hover:underline">Editar</a> </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-red-600 hover:underline">Eliminar</a> </td>
                </tr>
                
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://raw.githubusercontent.com/DanielaTob/img/main/ilustracion3.png' /> </div>
                            <div>
                                <p> Evento 3 </p>
                            </div>
                        </div>
                    </td>
                    <td  class="px-6 py-4 whitespace-pre-line">
                        <p class="text-gray-500 text-sm font-semibold"> Este evento es para desarrolladores web, hablaremos sobre tecnología y mucho más.</p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-orange-600 font-semibold px-2 rounded-full"> 2022-04-10 </span> </td>
                    <td class="px-6 py-4 text-center"> 10 </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-orange-600 hover:underline">Editar</a> </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-red-600 hover:underline">Eliminar</a> </td>
                </tr>

                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://raw.githubusercontent.com/DanielaTob/img/main/ilustracion3.png' /> </div>
                            <div>
                                <p> Evento 4 </p>
                            </div>
                        </div>
                    </td>
                    <td  class="px-6 py-4 whitespace-pre-line">
                        <p class="text-gray-500 text-sm font-semibold"> Este evento es para desarrolladores web, hablaremos sobre tecnología y mucho más.</p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-orange-600 font-semibold px-2 rounded-full"> 2022-04-10 </span> </td>
                    <td class="px-6 py-4 text-center"> 10 </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-orange-600 hover:underline">Editar</a> </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-red-600 hover:underline">Eliminar</a> </td>
                </tr>

                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://raw.githubusercontent.com/DanielaTob/img/main/ilustracion3.png' /> </div>
                            <div>
                                <p> Evento 5 </p>
                            </div>
                        </div>
                    </td>
                    <td  class="px-6 py-4 whitespace-pre-line">
                        <p class="text-gray-500 text-sm font-semibold"> Este evento es para desarrolladores web, hablaremos sobre tecnología y mucho más.</p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-orange-600 font-semibold px-2 rounded-full"> 2022-04-10</span> </td>
                    <td class="px-6 py-4 text-center"> 10 </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-orange-600 hover:underline">Editar</a> </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-red-600 hover:underline">Eliminar</a> </td>
                </tr>

            </tbody>

        </table>
    </div>
</div>

@endsection