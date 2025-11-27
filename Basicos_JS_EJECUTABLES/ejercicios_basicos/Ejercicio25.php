<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 25</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 25</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                25.- Crear un programa que permita convertir una cantidad de segundos en horas, minutos y segundos.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">s</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese la cantidad en segundos: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">m</span> 
                <span class="text-white">=</span> <span class="text-blue-400">s</span><span class="text-white">/</span><span class="text-green-300">60</span><span class="text-white">,</span> 
                <span class="text-blue-400">hr</span> <span class="text-white">=</span> <span class="text-blue-400">m</span><span class="text-white">/</span><span class="text-green-300">60</span><span class="text-white">,</span> 
                <span class="text-blue-400">sm</span> <span class="text-white">=</span> <span class="text-blue-400">s</span><span class="text-white">%</span><span class="text-green-300">60</span><span class="text-white">,</span> 
                <span class="text-blue-400">mh</span> <span class="text-white">=</span> <span class="text-blue-400">m</span><span class="text-white">%</span><span class="text-green-300">60</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">Math.round</span><span class="text-purple-600">(</span><span class="text-blue-400">s</span><span class="text-purple-600">)</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" segundos equivalen a "</span> <span class="text-white">+</span> 
                <span class="text-amber-100">Math.round</span><span class="text-purple-600">(</span><span class="text-blue-400">hr</span><span class="text-purple-600">)</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" horas con "</span> <span class="text-white">+</span> 
                <span class="text-amber-100">Math.round</span><span class="text-purple-600">(</span><span class="text-blue-400">mh</span><span class="text-purple-600">)</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" minutos y "</span> <span class="text-white">+</span> 
                <span class="text-amber-100">Math.round</span><span class="text-purple-600">(</span><span class="text-blue-400">sm</span><span class="text-purple-600">)</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" segundos"</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio24.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio26.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var s = parseFloat(prompt("Ingrese la cantidad en segundos"));
            var  m = s/60, hr = m/60, sm = s%60, mh = m%60;
            alert(Math.round(s)+" segundos equivalen a "+Math.round(hr)+" horas con "+Math.round(mh)+" minutos y "+Math.round(sm)+" segundos");
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>