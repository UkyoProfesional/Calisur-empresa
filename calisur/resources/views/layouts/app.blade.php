<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calisur - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head class="p-5 bg-white border-b shadow">

<body>
    <header class="p-5 bg-[#ebe4e5] border-b shadow">
        <div class="container flex items-center justify-between mx-auto">
            <a href="/">
                <img src="/img/logo.png" alt="Logo de la empresa" class="h-20 m-4 w-35 ">
            </a>
            <nav class="flex items-center gap-11">
                <a href="/estudios"
                    class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">Estudios</a>
                <a href="/servicios"
                    class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">Servicios</a>
                <a href="/productos"
                    class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">Productos</a>
                <a
                    href="/contacto"class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">Contacto</a>

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
                                    class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">
                                    Cerrar Sesion
                                </button>
                            </form>

                        </nav>
                    @endauth

                    @guest
                        <nav class="flex items-center gap-5">
                            <a href="{{ route('login') }}"
                                class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">Login</a>
                            <a href="{{ route('register') }}"
                                class="text-sm font-bold text-[#360A13] uppercase hover:text-[#793341ee]">Crear Cuenta</a>

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
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
