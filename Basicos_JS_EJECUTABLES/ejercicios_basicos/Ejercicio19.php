<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 19</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 19</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                19.- Construya un programa que, dado el radio de una esfera, calcule e imprima el área y su volumen.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">r</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"ingresa el radio de la esfera: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">const</span> <span class="text-blue-400">pi</span> 
                <span class="text-white">=</span> <span class="text-green-300">3.141492</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">a</span> 
                <span class="text-white">=</span> <span class="text-green-300">4</span><span class="text-white">*</span><span class="text-blue-400">pi</span><span class="text-white">*</span>
                <span class="text-amber-100">Math.pow</span><span class="text-purple-600">(</span><span class="text-blue-400">r</span><span class="text-white">,</span><span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">v</span> 
                <span class="text-white">=</span> <span class="text-green-300">1.33333</span><span class="text-white">*</span>
                <span class="text-amber-100">Math.pow</span><span class="text-purple-600">(</span><span class="text-blue-400">r</span><span class="text-white">,</span><span class="text-green-300">3</span><span class="text-purple-600">)</span><span class="text-white">*</span><span class="text-blue-400">pi</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"el area es: "</span> <span class="text-white">+</span> <span class="text-blue-400">a</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n y el volumen es: "</span> <span class="text-white">+</span> <span class="text-blue-400">v</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio18.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio20.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var r=parseFloat(prompt("ingresa el radio de la esfera: "));
            const pi = 3.141492;
            var a = 4*pi*Math.pow(r,2);
            var v = 1.33333*Math.pow(r,3)*pi;
            alert("el area es: "+a+"\n"+"y el volumen es: "+v);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>