@extends('layouts.app')

@section('titulo')
Calisur
@endsection

@section('contenido')
<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
            <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Misión de la Empresa</h2>
            <p class="text-[#360A13] text-justify">Cumplir oportunamente los requerimientos de nuestros clientes brindando un valor extra a través de conocimientos técnicos y científicos de vanguardia, asi como el compromiso de nuestro equipo de trabajo en la solución de problemáticas de seguridad industrial, ambientales y de calidad de los sectores púbico y privado.</p>
        </div>
        <div class="w-16 px-4 md:w-1/2">
            <img src="{{ asset('img/imagen5.jpg') }}" alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>
    </div>
</div>
<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-16 px-4 md:w-1/2">
            <img src="{{ asset('img/imagen4.jpeg') }}" alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>
        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
            <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Visión de la Empresa</h2>
            <p class="text-[#360A13] text-justify">Ser una empresa de excelencia, sustentable, competitiva, profesional y ética; basandonos en el cumplimiento de las leyes y normativas vigentes.</p>
        </div>
    </div>
</div>
@endsection