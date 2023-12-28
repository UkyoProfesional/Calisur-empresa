<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calisur - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/contacto.js')

</head class="p-5 bg-white border-b shadow">

<body>
    <header class="p-5 bg-[#ebe4e5] border-b shadow">
        <div class="container flex items-center justify-between mx-auto">
            <a href="{{ route('principal')}}">
                <img src="/img/logo.png" alt="Logo de la empresa" class="h-20 m-4 w-35 ">
            </a>
            <nav class="flex items-center gap-11">
                <a href="{{ route('estudios.index') }}"
                    class="text-sm font-bold  uppercase  {{request()->routeIs('estudios.index') ? 'text-[#360A13] hover:text-[#793341ee]' : 'text-[#793341ee] hover:text-[#360A13]'}}">Estudios</a>
                <a href="{{ route('servicios.index') }}"
                    class="text-sm font-bold uppercase  {{request()->routeIs('servicios.index') ? 'text-[#360A13] hover:text-[#793341ee]' : 'text-[#793341ee] hover:text-[#360A13]'}}">Servicios</a>
                <a href="{{ route('productos.index') }}"
                    class="text-sm font-bold uppercase {{request()->routeIs('productos.index') ? 'text-[#360A13] hover:text-[#793341ee]' : 'text-[#793341ee] hover:text-[#360A13]'}}">Productos</a>
                <a
                    href="{{ route('contacto.index') }}" class="text-sm font-bold uppercase {{request()->routeIs('contacto.index') ? 'text-[#360A13] hover:text-[#793341ee]' : 'text-[#793341ee] hover:text-[#360A13]'}}">Contacto</a>

            </nav>
            <nav class="flex items-center gap-3">
                <div class="container flex items-center justify-between mx-auto">


                    @auth
                        <nav class="flex items-center gap-5">

                            <a href="{{ route('principal', auth()->user()->user) }}"
                                class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">
                                Hola: <span class="font-normal"> {{ auth()->user()->name }}</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee] ">
                                    Cerrar Sesion
                                </button>
                            </form>

                        </nav>
                    @endauth

                    @guest
                        <nav class="flex items-center gap-5">
                            <a href="{{ route('login') }}"
                                class="text-sm font-bold  uppercase {{request()->routeIs('login') ? 'text-[#360A13] hover:text-[#793341ee]' : 'text-[#793341ee] hover:text-[#360A13]'}}">Login</a>
                            <a href="{{ route('register') }}"
                                class="text-sm font-bold uppercase {{request()->routeIs('register') ? 'text-[#360A13] hover:text-[#793341ee]' : 'text-[#793341ee] hover:text-[#360A13]'}}">Crear Cuenta</a>

                        </nav>

                    @endguest
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        @yield('contenido')
    </main>
    <footer class="p-5 font-bold text-center text-[#360A13] uppercase">
        Calisur - Todos los derechos reservados
        {{ now()->year }}
    </footer>
    
</body>

</html>
