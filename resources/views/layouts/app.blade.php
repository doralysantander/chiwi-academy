<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/> 
    <title>@yield('title') - Meeting Academy</title>
</head>
<body>

    <nav class="flex py-8 bg-neutral-900 text-orange-600 shadow-lg">
        <div class="w-1/2 px-12 mr-auto">
            <p class="sm:text-lg lg:text-2xl font-bold">MEETING ACÁDEMY</p>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li class="mx-6">
                <a href="{{ route('register.index') }}" class="font-semibold hover:text-neutral-900 hover:bg-orange-600 hover:rounded-md py-3 px-4">Registro</a>
            </li>
            <li>
                <a href="{{ route('login.index') }}" class="font-semibold hover:text-neutral-900 hover:bg-orange-600 hover:rounded-md py-3 px-4">Iniciar Sesión</a>
            </li>
        </ul>
    </nav>



    @yield('content')
    
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>