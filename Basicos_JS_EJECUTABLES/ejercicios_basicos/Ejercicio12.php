<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 12</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 12</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                12.- Construya un programa que sea capaz de intercambiar el valor de tres variables, de tal manera que sean las variables A, B, C, y el valor de B se almacena en A, B obtenga el valor de C y C el valor de A.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">C</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor A: "</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">A</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span> 
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor B: "</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">B</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span> 
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor C: "</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"El valor A es: "</span> <span class="text-white">+</span> <span class="text-blue-400">C</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n El valor B es: "</span> <span class="text-white">+</span> <span class="text-blue-400">A</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n El valor C es: "</span> <span class="text-white">+</span> <span class="text-blue-400">B</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio11.php'">
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio13.php'">
            Siguiente
        </button>
    </div>

    <script>
        function ejecutar(){
            var C = prompt("Ingresa el valor A");
            var A = prompt("Ingresa el valor B");
            var B = prompt("Ingresa el valor C");

            alert("El valor A es: "+C+"\n"+"El valor B es: "+A+" \n"+"El valor C es: "+B);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>