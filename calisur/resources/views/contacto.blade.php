@extends('layouts.app')

@section('titulo')
Contacto
@endsection

@section('contenido')
<h1 class=" text-center mb-4 text-4xl font-bold text-[#360A13] ">CONTACTO</h1>
<div class="p-5 md:flex md:justify-center md:gap-10 md:items-center">
    <div class="p-6 bg-white rounded-lg shadow-xl md:w-4/12">
        <form action="" class="contacto-form" id="form">
            <div class="mb-5">
                <label for="name_contacto" class="block mb-2 font-bold text-[#2B2E33] uppercase">
                    Nombre
                </label>
                <input 
                id="name_contacto"
                name="name_contacto"
                type="text"
                placeholder="Nombre"
                class="w-full p-3 border rounded-lg "
                value=""
                />
            </div>
            
            <div class="mb-5">
                <label for="email_contacto" class="block mb-2 font-bold text-[#2B2E33] uppercase">
                    Email
                </label>
                <input 
                id="email_contacto"
                name="email_contacto"
                type="email_contacto"
                placeholder="Correo electronico"
                class="w-full p-3 border rounded-lg "
                value=""/>
                
            </div>
            <div class="mb-5">
                <label for="asunto" class="block mb-2 font-bold text-[#2B2E33] uppercase">
                    Asunto
                </label>
                <input 
                id="asunto"
                name="asunto"
                type="text"
                placeholder="Asunto"
                class="w-full p-3 border rounded-lg"
                value=""
                />
            </div>

            <div class="mb-5">
                <label for="servicio_solicitud" class="block mb-2 font-bold text-[#2B2E33] uppercase">
                    Servicio que necesite
                </label>
                <textarea 
                id="servicio_solicitud"
                name="servicio_solicitud"
                placeholder="Servicio que desea solicitar"
                class="w-full p-3 border rounded-lg "></textarea>
            </div>

            <input type="submit"
            id="button"
            value="Enviar"
            class="w-full p-3 font-bold text-[#2B1E25] uppercase transition-colors rounded-lg cursor-pointer bg-[#FAF105] hover:bg-[#DBD404] border-2 border-[#2B1E25]">
        </form>
    </div> 
    
    <div class="w-full px-5 mb-12 md:w-1/2 md:mb-2">
        <h2 class="mb-7 text-4xl text-[#360A13] text-center p-5">Informacion para contactarnos</h2>
        <h3 class="mb-4 text-2xl font-semibold text-[#360A13] text-center italic mt-4">Correos:</h3>
        <p class="text-[#360A13] text-center font-medium text-xl ">lizbeth.morales@calisur.com.mx</p>
        <p class="text-[#360A13] text-center font-medium text-xl ">ingenieriayaplcaciones@calisur.com.mx</p>
        <h3 class="mb-4 text-2xl font-semibold text-[#360A13] text-center italic mt-4">Telefono:</h3>
        <p class="text-[#360A13] text-center font-medium text-xl ">921-221-2216</p>
    </div>
       
</div>

<script type="text/javascript"
src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
emailjs.init('ba7mM8eAAIeWkRT-K')
</script>
@endsection