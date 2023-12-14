@extends('layouts.app')

@section('titulo')
Servicios
@endsection

@section('contenido')
<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
        <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Inspección, mantenimiento e instalación de sistemas de supresion de incendio</h2>
            <h3 class="mb-4 text-2xl text-[#360A13]">Fijo a base de:</br>Agentes limpios. (Inerge, Novec 1230, Fm-200)</br>EspumaAFFF Bióxido de carbono (CO2)</br> Químico Húmedo (K)</h3>           
        </div>
        
        <div class="w-16 px-4 md:w-1/2">
            <img src="{{ asset('img/bomba.png') }}"  alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>

    </div>
</div>

<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-16 px-20 md:w-1/2">
            <img src="{{ asset('img/trabajo.png') }}"  alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>        

        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
        <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Zonas o áreas de acción:</h2>
            <h3 class="mb-4 text-2xl text-justify text-[#360A13]">Inspección, pruebas de operación e instalación y suministro de sistemas de detección de humo, gas y fuego, monóxido.</h3>           
        </div>

    </div>
</div>

<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
        <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Mantenimiento y recarga de extintores</h2>
            <h3 class="mb-4 text-3xl font-bold text-[#360A13]">Revisión completa interna y externa:</br>Revision interna y externa:</h3>
             <ul class="list-disc">
                <li>Prueba de funcionamiento de cilindro</li>
                <li>Sustitución de partes</li>
                <li>Reparaciones de partes</li>
                <li>Reemplazo total del agente extintor por uno nuevo</li>
             </ul> 
            <br>
             <h3 class="mb-4 text-2xl font-semibold text-[#360A13]">Cada 12 meses: </h3>
                <ul class="list-disc">
                    <li>Verificar el peso y presión del extintor</li>
                    <li>Comprobar el estado del agente del extintor.</li>
                    <li>Comprobar el estado de la manguera.</li>
                    <li> Examinar el estado de las válvulas, las boquillas y otras partes mecánicas.</li>
                </ul>
                <br>
                <h3 class="mb-4 text-2xl font-semibold text-[#360A13]">Cada 5 años: </h3>
                <ul class="list-disc" >
                    <li>Realización de una prueba hidráulica, que tendrá lugar 3 veces como máximo, ya que la vida útil de todo extintor es de 20 años</li>
                </ul>
                      
        </div>
        
        <div class="w-16 px-4 md:w-1/2">
            <img src="{{ asset('img/incendio.png') }}"  alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>

    </div>
</div>

<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-16 px-20 md:w-1/2">
            <img src="{{ asset('img/reunion.png') }}"  alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>        

        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
        <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Zonas o áreas de acción:</h2>
            <h3 class="mb-4 text-2xl text-[#360A13]">Inspección, pruebas de operación e instalación y suministro de sistemas de detección de humo, gas y fuego, monóxido.<br> Alarmas en contenedores, bodegas, cuartos de control.</h3>
        </div>
    </div>
</div>

<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">

        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
        <h2 class="mb-4 text-4xl font-bold text-[#360A13]">REUBICACION Y MANTENIMIENTO DE BOMBAS CONTRA INCENDIO</h2>
            <h3 class="mb-4 text-2xl text-[#360A13]">Ingenieria:</h3>           
            <ul class="list-disc">
                <li>Cálculo hidráulico</li>
                <li>Redistribución de tuberías</li>
                <li>Protocolo de Izaje</li>
                <li>Isométricos de obra, modelado 3D.</li>
            </ul>
            <br>
            <h3 class="mb-4 text-2xl text-[#360A13]">Obra mecánica:</h3>           
            <ul class="list-disc">
                <li>Cálculo hidráulico</li>
                <li>Redistribución de tuberías</li>
                <li>Protocolo de Izaje</li>
                <li>Isométricos de obra, modelado 3D.</li>
            </ul>

            <br>
            <h3 class="mb-4 text-2xl text-[#360A13]">Obra eléctrica:</h3>           
            <ul class="list-disc">
                <li>Desconexión y conexión de sistema eléctrico de red contra incendio.</li>
                <li>Reubicación de tomas eléctricas y detectores de humo.</li>
            </ul>

            <br>
            <h3 class="mb-4 text-2xl text-[#360A13]">Obra civil:</h3>           
            <ul class="list-disc">
                <li>Construcción de bases de concreto para motores</li>
                <li>Construcción de caseta para resguardo de cabezal de pruebas.</li>
            </ul>
        </div>

        <div class="w-16 px-20 md:w-1/2">
            <img src="{{ asset('img/tuberia.png') }}"  alt="Imagen Representativa" class="w-full h-auto rounded-lg">
            <img src="{{ asset('img/maquinas.png') }}"  alt="Imagen Representativa2" class="w-full h-auto rounded-lg">
        </div>        
     
    </div>
</div>

<div class="container py-8 mx-auto">
    <div class="flex flex-wrap items-center">
        <div class="w-16 px-20 md:w-1/2">
            <img src="{{ asset('img/transporte.png') }}"  alt="Imagen Representativa" class="w-full h-auto rounded-lg">
        </div>        

        <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
        <h2 class="mb-4 text-4xl font-bold text-[#360A13]">Transporte de residuos peligrosos</h2>
            <ul class="list-disc">
                <li>Traslado de residuos peligrosos mediante</li>
                <li>Translado de crudo</li>
                <li>Disposición final de residuos peligrosos</li>
                <li>Confinamiento de residuos peligrosos</li>
            </ul>
        </div>
    </div>
</div>
@endsection