<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 10</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 10</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                10.- Construya un programa tal que dados los tres lados de un triángulo, pueda determinar su área.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">l1</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"ingresa el primer lado: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">l2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"ingresa el segundo lado: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">l3</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"ingresa el tercer lado: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">S</span> 
                <span class="text-white">=</span> 
                <span class="text-purple-600">(</span><span class="text-blue-400">l1</span><span class="text-white">+</span><span class="text-blue-400">l2</span><span class="text-white">+</span><span class="text-blue-400">l3</span><span class="text-purple-600">)</span> 
                <span class="text-white">/</span> <span class="text-green-300">2</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">area</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.sqrt</span>
                <span class="text-purple-600">(</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">S</span><span class="text-white">*</span><span class="text-purple-600">(</span><span class="text-blue-400">S</span><span class="text-white">-</span><span class="text-blue-400">l1</span><span class="text-purple-600">)</span><span class="text-white">*</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">S</span><span class="text-white">-</span><span class="text-blue-400">l2</span><span class="text-purple-600">)</span><span class="text-white">*</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">S</span><span class="text-white">-</span><span class="text-blue-400">l3</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"El area es: "</span> <span class="text-white">+</span> <span class="text-blue-400">area</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio9.php'">
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio11.php'">
            Siguiente
        </button>
    </div>

    <script>
        function ejecutar(){
            var l1 = parseFloat(prompt("ingresa el primer lado"));
            var l2 = parseFloat(prompt("ingresa el segundo lado"));
            var l3 = parseFloat(prompt("ingresa el tercer lado"));

            var S = (l1+l2+l3)/2
            var area = Math.sqrt((S*(S-l1)*(S-l2)*(S-l3)));

            alert("El area es: "+area);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>