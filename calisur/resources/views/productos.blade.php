@extends('layouts.app')

@section('titulo')
Productos
@endsection

@section('contenido')
<h1 class=" text-center mb-4 text-4xl font-bold text-[#360A13] pb-10">PRODUCTOS</h1>
<div class="container py-8 mx-auto">
    <!-- Menú principal -->
    <div class="text-center">
        <a href="#" class="inline-block text-[#360A13] font-bold  px-4 py-2 mx-2 border border-gray-500 rounded-lg hover:text-[#793341ee]" onclick="showContent('section1')">Equipos Contra Incendios</a>
        <a href="#" class="inline-block text-[#360A13] font-bold   px-4 py-2 mx-2 border border-gray-500 rounded-lg hover:text-[#793341ee]" onclick="showContent('section2')">Productos de Control y Prevención</a>
    </div>
<div class="items-center justify-center ">

    <!-- Contenido dinámico -->
    <div id="content" class="p-6 text-center ">
        <!-- Contenido de la sección -->
        <div id="section1Content">
            <div class="flex flex-wrap">
                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/sis_espuma.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 font-semibold text-center text-[#360A13]">Sistemas de Espuma</p>
                    <p class="p-4 text-center text-[#360A13]">Equipos especializados que aplican espuma retardante para combatir incendios con eficacia.</p>
                </div>
            
                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/tambo_espuma.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Tambores de Espuma</p>
                    <p class="p-4 text-center text-[#360A13]">Recipientes diseñados para almacenar y dispensar espuma contra incendios de manera segura.</p>
                </div>
                
                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/espuma_incendio.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Espuma Contra Incendios</p>
                    <p class="p-4 text-center text-[#360A13]">Producto químico esencial para extinguir incendios al crear una capa de espuma que sofoca las llamas.</p>
                </div>

                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/boquilla_monitor.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Boquillas de Monitores</p>
                    <p class="p-4 text-center text-[#360A13]">Dispositivos de dirección de agua que permiten una extinción precisa del fuego.</p>
                </div>
                
                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/valvula_monitor.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Válvula de Compuerta para Monitores</p>
                    <p class="p-4 text-center text-[#360A13]">Válvula especializada para controlar y dirigir el flujo de agua en sistemas de monitores contra incendios.</p>
                </div>

                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/valvulalib_aire.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Válvulas Liberadoras de Aire</p>
                    <p class="p-4 text-center text-[#360A13]">Válvulas diseñadas para liberar aire en sistemas hidráulicos, evitando cavitación y garantizando un rendimiento óptimo.</p>
                </div>

                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/valvula_alivio_presion.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Válvulas de Seguridad de Alivio de Presión</p>
                    <p class="p-4 text-center text-[#360A13]">Dispositivos de seguridad que liberan automáticamente la presión excesiva para prevenir fallos en el sistema.</p>
                </div>

                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/valvula_globo.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Válvulas de Compuerta, Bola y Globo</p>
                    <p class="p-4 text-center text-[#360A13]">Diversos tipos de válvulas para regular el flujo de líquidos y gases en sistemas contra incendios.</p>
                </div>
                
            </div>
        </div>

        <div id="section2Content" style="display: none;" >
            
            <div class="flex flex-wrap">

                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/valvula_guillotina.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 font-semibold text-center text-[#360A13]">Válvulas de Guillotina y Mariposa</p>
                    <p class="p-4 text-center text-[#360A13]">Válvulas especializadas para controlar y detener el flujo de líquidos o gases.</p>
                </div>
            
                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/extintor.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Extintores</p>
                    <p class="p-4 text-center text-[#360A13]">Dispositivos portátiles y efectivos para extinguir pequeños incendios en su fase inicial.</p>
                </div>
                
                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/manguera_incendio.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Mangueras Contra Incendio</p>
                    <p class="p-4 text-center text-[#360A13]">Equipos esenciales para la distribución controlada de agua y otros agentes extintores.</p>
                </div>

                <div class="w-2/5 mx-auto mb-4 overflow-hidden bg-[#ebe4e5] rounded-lg">
                    <!-- Contenido del contenedor -->
                    <div class="flex items-center justify-center">
                        <img src="/img/detector_humo.png" alt="Imagen" class="w-2/5 pt-5 rounded">
                    </div>
                    <p class="pt-4 text-center font-semibold text-[#360A13]">Alarmas de Detección de Humo y Gas</p>
                    <p class="p-4 text-center text-[#360A13]">Sistemas de alerta temprana que detectan la presencia de humo o gases peligrosos para una rápida evacuación.</p>
                </div>
                
                
                
            </div>

        </div>
    </div>
</div>

</div>
<script>
    function showContent(section) {
        // Ocultar todos los contenidos
        document.getElementById('section1Content').style.display = 'none';
        document.getElementById('section2Content').style.display = 'none';

        // Mostrar el contenido de la sección seleccionada
        document.getElementById(section + 'Content').style.display = 'block';
    }
</script>
@endsection