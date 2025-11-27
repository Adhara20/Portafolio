<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 31</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 31</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                31.- Juan Carlos es jefe de bodega en una fábrica de pañales desechables y sabe que la producción diaria es de 744 pañales y que en cada caja donde se empacan para la venta caben 12 pañales. ¿Cuántas cajas debe conseguir Juan Carlos para empacar los pañales fabricados en una semana (5 días)?
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">const</span> <span class="text-blue-400">pd</span> 
                <span class="text-white">=</span> <span class="text-green-300">744</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">const</span> <span class="text-blue-400">pc</span> 
                <span class="text-white">=</span> <span class="text-green-300">12</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">const</span> <span class="text-blue-400">res</span> 
                <span class="text-white">=</span> <span class="text-blue-400">pd</span><span class="text-white">/</span><span class="text-blue-400">pc</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Juan Carlos necesita "</span> <span class="text-white">+</span> <span class="text-blue-400">res</span> 
                <span class="text-white">+</span> <span class="text-[#AD6D3B]">" cajas a la semana\n"</span><span class="text-white">+</span>
                <span class="text-[#AD6D3B]">"para cubrir su producción diaria de "</span> <span class="text-white">+</span> <span class="text-blue-400">pd</span> 
                <span class="text-white">+</span> <span class="text-[#AD6D3B]">" pañales\n"</span><span class="text-white">+</span>
                <span class="text-[#AD6D3B]">" en cajas de "</span> <span class="text-white">+</span> <span class="text-blue-400">pc</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" c/u"</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio30.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio32.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            const pd = 744;
            const pc = 12;
            const res = pd/pc;
        
            alert("Juan Carlos necesita "+res+" cajas a la semana\n"+
            "para cubrir su producción diaria de "+pd+" pañales\n"+
            " en cajas de "+pc+" c/u");
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>