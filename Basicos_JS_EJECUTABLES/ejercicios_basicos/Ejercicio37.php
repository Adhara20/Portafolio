<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 37</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 37</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
37.Convertir de metros a: Kilómetros, centímetros y decímetros, sabiendo que 1Km=10000dm y 1dm=10cm.

            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">metros</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa los metros"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">kilometros</span> 
                <span class="text-white">=</span> <span class="text-blue-400">metros</span> <span class="text-white">*</span> <span class="text-green-300">0.001</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">centimetros</span> 
                <span class="text-white">=</span> <span class="text-blue-400">metros</span> <span class="text-white">*</span> <span class="text-green-300">100</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">decimetros</span> 
                <span class="text-white">=</span> <span class="text-blue-400">metros</span> <span class="text-white">*</span> <span class="text-green-300">10</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Equivale a: \n "</span> <span class="text-white">+</span> <span class="text-blue-400">kilometros</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" km \n"</span> <span class="text-white">+</span> <span class="text-blue-400">centimetros</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" cm \n"</span> <span class="text-white">+</span> <span class="text-blue-400">decimetros</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" dm"</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio36.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio38.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var metros = parseFloat(prompt("Ingresa los metros"));
            var kilometros = metros * 0.001;
            var centimetros = metros * 100;
            var decimetros = metros * 10;

            alert("Equivale a: \n " + kilometros + " km \n" + centimetros + " cm \n" + decimetros + " dm");
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>