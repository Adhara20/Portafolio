<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio For 7</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">Ejercicio 7</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                7. Se necesita calcular el total de ventas en un día para una cadena de tiendas con múltiples ciudades, tiendas por ciudad, y empleados por tienda. Se debe mostrar el total por tienda, por ciudad y global.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">c</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la cantidad de ciudades con tiendas"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">tc</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-amber-400">for</span><span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">c</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">t</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la cantidad de tiendas de la ciudad "</span><span class="text-white">+</span><span class="text-blue-400">i</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">tciudad</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-400">for</span><span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">o</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">o</span><span class="text-white"><=</span><span class="text-blue-400">t</span><span class="text-white">;</span> <span class="text-blue-400">o</span><span class="text-white">++</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">n</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la cantidad de empleados de la tienda "</span><span class="text-white">+</span><span class="text-blue-400">o</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">tt</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-400">for</span><span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">p</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">p</span><span class="text-white"><=</span><span class="text-blue-400">n</span><span class="text-white">;</span> <span class="text-blue-400">p</span><span class="text-white">++</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">v</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la cantidad de ventas del empleado "</span><span class="text-white">+</span><span class="text-blue-400">p</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">tt</span><span class="text-white">=</span> <span class="text-blue-400">tt</span><span class="text-white">+</span><span class="text-blue-400">v</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">tciudad</span><span class="text-white">=</span> <span class="text-blue-400">tciudad</span> <span class="text-white">+</span> <span class="text-blue-400">tt</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">tc</span><span class="text-white">=</span> <span class="text-blue-400">tc</span> <span class="text-white">+</span> <span class="text-blue-400">tciudad</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                <span class="text-blue-700">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Total de ventas en un solo día: "</span><span class="text-white">+</span><span class="text-blue-400">tc</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio6.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio8.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var c = parseInt(prompt("Ingresa la cantidad de ciudades con tiendas"));
            var tc = 0;
            for(var i = 1; i <= c; i++){
                var t = parseInt(prompt("Ingresa la cantidad de tiendas de la ciudad " + i));
                var tciudad = 0;
                for(var o = 1; o <= t; o++){
                    var n = parseInt(prompt("Ingresa la cantidad de empleados de la tienda " + o));
                    var tt = 0;
                    for(var p = 1; p <= n; p++){
                        var v = parseInt(prompt("Ingresa la cantidad de ventas del empleado " + p));
                        tt = tt+v;
                    }
                    tciudad = tciudad + tt;
                }
                tc = tc + tciudad;
            }
            alert("Total de ventas en un solo día: " + tc);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>