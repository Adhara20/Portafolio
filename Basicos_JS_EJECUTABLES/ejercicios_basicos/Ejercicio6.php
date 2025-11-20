<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 6</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 6</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                6.- Escriba un programa tal que, dado como datos el nombre de un dinosaurio, su peso y longitud, expresados estos dos últimos en libras y pies respectivamente; escriba el nombre del dinosaurio, su peso expresado en kilogramos y su longitud expresada en metros.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">nombre</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Introduzca el nombre del dinosaurio: "</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">peso</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese el peso del dinosaurio (en libras): "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">longitud</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese la longitud del dinosaurio (en pies): "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-blue-400">nombre</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n "</span> <span class="text-white">+</span> 
                <span class="text-purple-600">(</span><span class="text-blue-400">peso</span><span class="text-white">*</span><span class="text-green-300">0.453592</span><span class="text-purple-600">)</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">"kg \n "</span> <span class="text-white">+</span> 
                <span class="text-purple-600">(</span><span class="text-blue-400">longitud</span> <span class="text-white">*</span> <span class="text-green-300">0.3048</span><span class="text-purple-600">)</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">"mts"</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio5.php'">
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio7.php'">
            Siguiente
        </button>
    </div>

    <script>
        function ejecutar(){
            var nombre= prompt("Introduzca el nombre del dinosaurio ");
            var peso= parseFloat(prompt("Ingrese el peso del dinosaurio (en libras): "));
            var longitud= parseFloat(prompt("Ingrese la longitud del dinosaurio (en pies): "));
            alert(nombre + "\n" + (peso*0.453592) + "kg \n" + (longitud * 0.3048) + "mts");
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>