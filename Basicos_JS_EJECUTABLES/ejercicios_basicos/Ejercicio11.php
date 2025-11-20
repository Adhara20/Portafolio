<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 11</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 11</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                11.- Construya un programa que calcule la distancia entre dos puntos, dado como datos las coordenadas de los puntos P1 y P2.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">x1</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa la coordenada x del punto 1: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">y1</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa la coordenada y del punto 1: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">x2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa la coordenada x del punto 2: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">y2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa la coordenada y del punto 2: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num</span> 
                <span class="text-white">=</span> <span class="text-blue-400">x2</span> 
                <span class="text-white">-</span> <span class="text-blue-400">x1</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num2</span> 
                <span class="text-white">=</span> <span class="text-blue-400">y2</span> 
                <span class="text-white">-</span> <span class="text-blue-400">y1</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">cuadrado</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.pow</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">num</span><span class="text-white">,</span> <span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">cuadrado2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.pow</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">num2</span><span class="text-white">,</span> <span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">dist</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.sqrt</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">cuadrado</span><span class="text-white">+</span><span class="text-blue-400">cuadrado2</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"La distancia es: "</span> <span class="text-white">+</span> <span class="text-blue-400">dist</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio10.php'">
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio12.php'">
            Siguiente
        </button>
    </div>

    <script>
        function ejecutar(){
            var x1 = parseFloat(prompt("Ingresa la coordenada x del punto 1: "));
            var y1 = parseFloat(prompt("Ingresa la coordenada y del punto 1: "));
            var x2 = parseFloat(prompt("Ingresa la coordenada x del punto 2: "));
            var y2 = parseFloat(prompt("Ingresa la coordenada y del punto 2: "));

            var num = x2-x1;
            var num2 = y2-y1;
            var cuadrado = Math.pow(num, 2);
            var cuadrado2 = Math.pow(num2, 2);
            
            var dist = Math.sqrt(cuadrado+cuadrado2);

            alert("La distancia es: "+dist);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>