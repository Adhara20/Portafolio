<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 3</title>
</head>
<body>
    <!-- copiar y pegar de aquiiiiii -->
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <!-- resto del contenido -->
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 3</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                3.- Construya un programa, tal que dado como datos la base y la altura de un rectángulo, calcule el perímetro y la superficie del mismo.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">b</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese la base del rectángulo: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">h</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese la altura del rectángulo: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">p</span> 
                <span class="text-white">=</span> 
                <span class="text-purple-600">(</span>
                <span class="text-blue-400">b</span> <span class="text-white">*</span> <span class="text-green-300">2</span>
                <span class="text-purple-600">)</span> 
                <span class="text-white">+</span> 
                <span class="text-purple-600">(</span>
                <span class="text-blue-400">h</span> <span class="text-white">*</span> <span class="text-green-300">2</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">a</span> 
                <span class="text-white">=</span> <span class="text-blue-400">b</span> 
                <span class="text-white">*</span> <span class="text-blue-400">h</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Perímetro: "</span> <span class="text-white">+</span> <span class="text-blue-400">p</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n Área: "</span> <span class="text-white">+</span> <span class="text-blue-400">a</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
    <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio2.php'">
        Anterior
    </button>
    <button class="buttonEjecutar w-32" onclick="ejecutar()">
        Ejecutar
    </button>
    <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio4.php'">
        Siguiente
    </button>
</div>
    <!-- iiii hasta aca -->
    <script>
        function ejecutar(){
            var b= parseFloat(prompt("Ingrese la base del rectángulo: "));
            var h= parseFloat(prompt("Ingrese la altura del rectángulo: "));
            var p= (b*2) + (h*2);
            var a= b*h;
            alert("Perímetro: " + p + "\n" + "Área: " + a);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>