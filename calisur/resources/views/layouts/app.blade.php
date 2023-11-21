<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calisur - @yield('titulo')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head class="p-5 bg-white border-b shadow" >
    <body>
<header class="p-5 bg-white border-b shadow">
        <div  class="container flex items-center justify-between mx-auto">
            
            <img src="/img/logo.png" alt="Logo de la empresa" class="m-4 h-20 w-35 ">
        <nav class="flex items-center gap-8">
            <a href="/estudios" class="text-sm font-bold text-gray-600 uppercase">Estudios</a>
            <a href="/servicios" class="text-sm font-bold text-gray-600 uppercase">Serivicios</a>
            <a href="/productos" class="text-sm font-bold text-gray-600 uppercase">Productos</a>
            <a href="/contacto" class="text-sm font-bold text-gray-600 uppercase">Nosotros</a>      
            <a href="/contacto"class="text-sm font-bold text-gray-600 uppercase">Contacto</a>

        </nav>
        <nav class="flex items-center gap-3">
            <a href="/login"class="text-sm font-bold text-gray-600 uppercase">Login</a>  
            <a href="/register"class="text-sm font-bold text-gray-600 uppercase">Crear Cuenta</a>  

        </nav>
    </div>
</header>
    <main class="container mx-auto mt-10">
        @yield('contenido')
    </main>
    <footer class="p-5 font-bold text-center text-gray-500 uppercase">
        DevStagram - Todos los derechos reservados 
        {{now()->year}}
    </footer>
       
    </body>
</html>
