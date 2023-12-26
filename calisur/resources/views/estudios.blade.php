@extends('layouts.app')

@section('titulo')
Estudios
@endsection


@section('contenido')
<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
            <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Estudios</h2>
            <p class="text-[#360A13] text-justify">CALISUR cuenta con capacitadores con años de experiencia en temas de Seguridad e Higiene Industrial, Ambiental y Calidad autorizados y registrados como agentes capacitadores externos ante la STPS (Secretaria de Trabajo y Previsión Social) Certificados en diferentes normas para brindarle un servicio de calidad.</p>
        </div>
        <div class="w-16 px-4 md:w-1/2">
            <img src="{{ asset('img/imagen6.jpeg') }}" alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>
    </div>
</div>

<h1 class="text-3xl font-bold text-center my-6 text-[#360A13]">Cursos de capacitación</h1>

<p class="text-center text-[#360A13] mb-8">Sumérgete en la excelencia con nuestros cursos de capacitación. En Calisur, nos enorgullece ofrecer programas formativos de alta calidad para tu crecimiento profesional.</p>

<div class="flex flex-wrap justify-around">

    <div class="max-w-xs p-6 mx-4 my-8 text-center bg-white rounded-lg">
      <img src="img/imagen7.png" alt="Descripción de la imagen 1" class="w-full h-auto mb-4 rounded-md">
      <p class="text-[#360A13]">Conceptos básicos sobre protección ambiental.</p>
    </div>

    <div class="max-w-xs p-6 mx-4 my-8 text-center bg-white rounded-lg">
      <img src="img/imagen8.jpeg" alt="Descripción de la imagen 2" class="w-full h-auto mb-4 rounded-md">
      <p class="text-[#360A13]">Clasificación y uso de equipos de protección respiratoria.</p>
    </div>

    <div class="max-w-xs p-6 mx-4 my-8 text-center bg-white rounded-lg">
      <img src="img/imagen9.jpeg" alt="Descripción de la imagen 2" class="w-full h-auto mb-16 rounded-md">
      <p class="text-[#360A13]">Básico de seguridad</p>
    </div>

    <div class="max-w-xs p-6 mx-4 my-8 text-center bg-white rounded-lg">
      <img src="img/imagen10.png" alt="Descripción de la imagen 2" class="w-full h-auto mb-4 rounded-md">
      <p class="text-[#360A13]">Básico de protección ambiental.</p>
    </div>

    <div class="max-w-xs p-6 mx-4 my-8 text-center bg-white rounded-lg">
      <img src="img/imagen11.png" alt="Descripción de la imagen 2" class="w-full h-auto rounded-md mb-14">
      <p class="text-[#360A13]">Análisis de riesgos.</p>
    </div>

    <div class="max-w-xs p-6 mx-4 my-8 text-center bg-white rounded-lg">
      <img src="img/imagen12.png" alt="Descripción de la imagen 2" class="w-full h-auto mb-4 rounded-md">
      <p class="text-[#360A13]">Primeros auxilios avanzados.</p>
    </div>

  </div>
@endsection