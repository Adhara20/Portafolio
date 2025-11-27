<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 24</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 24</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                24.- Calcular el interés compuesto generado por un capital depositado durante cierta cantidad de tiempo a una tasa de interés determinada, aplique las siguientes fórmulas:<br>
                a. M = (1 + r/100)<sup>t</sup> * C<br>
                b. i = M – C
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">c</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el capital depositado: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">r</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa la tasa de interes: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">t</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor de tiempo: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">m</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.pow</span>
                <span class="text-purple-600">(</span>
                <span class="text-purple-600">(</span><span class="text-green-300">1.0</span><span class="text-white">+</span><span class="text-purple-600">(</span><span class="text-blue-400">r</span><span class="text-white">/</span><span class="text-green-300">100</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">,</span> <span class="text-blue-400">t</span>
                <span class="text-purple-600">)</span><span class="text-white">*</span><span class="text-blue-400">c</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">i</span> 
                <span class="text-white">=</span> <span class="text-blue-400">m</span> 
                <span class="text-white">-</span> <span class="text-blue-400">c</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Monto = "</span> <span class="text-white">+</span> <span class="text-blue-400">m</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n Interes = "</span> <span class="text-white">+</span> <span class="text-blue-400">i</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio23.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio25.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var c = parseFloat(prompt("Ingresa el capital depositado"));
            var r = parseFloat(prompt("Ingresa la tasa de interes"));
            var t = parseFloat(prompt("Ingresa el valor de tiempo"));

            var m = Math.pow((1.0+(r/100)), t)*c;
            var i = m-c;
            alert("Monto = "+m+"\n"+"Interes = "+i);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>