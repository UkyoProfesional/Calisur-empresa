@extends('layouts.app')

@section('titulo')
Inicia sesión en Calisur
@endsection

@section('contenido')

<div class="p-5 md:flex md:justify-center md:gap-10 md:items-center">
    <div class="p-5 md:w-6/12">
     <img src="{{asset("img/logo.png")}}" alt="Imagen login usuarios">
    </div>
    
    <div class="p-6 bg-white rounded-lg shadow-xl md:w-4/12">
        <form method="POST" action="{{route('login')}}" novalidate>
            @csrf
            @if (session('mensaje'))
            <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> 
                {{session('mensaje')}} 
            </p>
            @endif

            <div class="mb-5">
                <label for="email" class="block mb-2 font-bold text-gray-500 uppercase">
                    Email
                </label>
                <input 
                id="email"
                name="email"
                type="email"
                placeholder="Correo electronico"
                class="w-full p-3 border rounded-lg @error('email') border-red-500  
                @enderror"
                value="{{old('email')}}"/>
                @error('email')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> 
                    {{$message}} </p>
             @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="block mb-2 font-bold text-gray-500 uppercase">
                    Contraseña
                </label>
                <input 
                id="password"
                name="password"
                type="password"
                placeholder="Contraseña"
                class="w-full p-3 border rounded-lg @error('password') border-red-500  
                @enderror"/>
                @error('password')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> 
                    {{$message}} </p>
             @enderror
            </div>
            <div class="mb-5">
                <input type="checkbox" name="remember"/> <label class="text-sm text-gray-500">Mantener mi sesion abierta</label>
            </div>

            <input type="submit"
            value="Iniciar sesion"
            class="w-full p-3 font-bold text-white uppercase transition-colors rounded-lg cursor-pointer bg-sky-600 hover:bg-sky-700">
        </form>
    </div> 
</div>
    
@endsection