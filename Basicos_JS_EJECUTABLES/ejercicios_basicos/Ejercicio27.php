<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 27</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 27</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                27.- Obtener el valor de c y d de acuerdo a la siguiente formula.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">a</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor de a: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">b</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor de b: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">c</span> 
                <span class="text-white">=</span> <span class="text-purple-600">(</span><span class="text-green-300">4</span><span class="text-white">*</span>
                <span class="text-amber-100">Math.pow</span><span class="text-purple-600">(</span><span class="text-blue-400">a</span><span class="text-white">,</span><span class="text-green-300">4</span><span class="text-purple-600">)</span><span class="text-white">+</span>
                <span class="text-green-300">3</span><span class="text-white">*</span><span class="text-blue-400">a</span><span class="text-white">*</span><span class="text-blue-400">b</span><span class="text-white">+</span>
                <span class="text-amber-100">Math.pow</span><span class="text-purple-600">(</span><span class="text-blue-400">b</span><span class="text-white">,</span><span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span>
                <span class="text-white">/</span><span class="text-purple-600">(</span>
                <span class="text-amber-100">Math.pow</span><span class="text-purple-600">(</span><span class="text-blue-400">a</span><span class="text-white">,</span><span class="text-green-300">2</span><span class="text-purple-600">)</span> 
                <span class="text-white">-</span> 
                <span class="text-amber-100">Math.pow</span><span class="text-purple-600">(</span><span class="text-blue-400">b</span><span class="text-white">,</span><span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">factor</span> 
                <span class="text-white">=</span> <span class="text-green-300">3</span><span class="text-white">*</span>
                <span class="text-purple-600">(</span><span class="text-amber-100">Math.pow</span><span class="text-purple-600">(</span><span class="text-blue-400">c</span><span class="text-white">,</span><span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">+</span><span class="text-blue-400">a</span><span class="text-white">+</span><span class="text-blue-400">b</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">d</span> 
                <span class="text-white">=</span> <span class="text-blue-400">factor</span><span class="text-white">/</span><span class="text-green-300">4</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"valor de c = "</span> <span class="text-white">+</span> <span class="text-blue-400">c</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n valor de d = "</span> <span class="text-white">+</span> <span class="text-blue-400">d</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio26.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio28.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var a = parseFloat(prompt("Ingresa el valor de a"));
            var b = parseFloat(prompt("Ingresa el valor de b"));

            var c = (4*Math.pow(a, 4)+3*a*b+Math.pow(b, 2))/(Math.pow(a, 2) - Math.pow(b, 2));
            var factor = 3*(Math.pow(c, 2))+a+b;
            var d = factor/4;

            alert("valor de c = "+c+"\n"+"valor de d = "+d);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>