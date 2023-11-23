@extends('layouts.app')

@section('titulo')
Calisur
@endsection

@section('contenido')

<div class="container py-8 mx-auto">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/imagen5.jpg" class="absolute block w-full h-auto max-w-full max-h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/imagen5.jpg" class="absolute block w-full h-auto max-w-full max-h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/imagen5.jpg" class="absolute block w-full h-auto max-w-full max-h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/imagen5.jpg" class="absolute block w-full h-auto max-w-full max-h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/imagen5.jpg" class="absolute block w-full h-auto max-w-full max-h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
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