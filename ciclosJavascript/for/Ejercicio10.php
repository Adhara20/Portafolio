<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio For 10</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">Ejercicio 10</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                10. Contar cuántos números son cero, menores a cero y mayores a cero de una lista de N números ingresados.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">N</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la cantidad de numeros: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">ceros</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">menores</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">mayores</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-amber-400">for</span> <span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">N</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">num</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el numero: "</span><span class="text-white">+</span><span class="text-blue-400">i</span><span class="text-white">+</span><span class="text-[#AD6D3B]">":"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">num</span> <span class="text-white">===</span> <span class="text-blue-700">0</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">ceros</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else if</span> <span class="text-purple-600">(</span><span class="text-blue-400">num</span> <span class="text-white"><</span> <span class="text-blue-700">0</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">menores</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">mayores</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span><br>
                <span class="text-blue-700">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Resultados:\n"</span><span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"Cantidad de ceros: "</span><span class="text-white">+</span><span class="text-blue-400">ceros</span><span class="text-white">+</span><span class="text-[#AD6D3B]">"\n"</span><span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"Cantidad menores a cero: "</span><span class="text-white">+</span><span class="text-blue-400">menores</span><span class="text-white">+</span><span class="text-[#AD6D3B]">"\n"</span><span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"Cantidad mayores a cero: "</span><span class="text-white">+</span><span class="text-blue-400">mayores</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio9.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio11.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var N = parseInt(prompt("Ingresa la cantidad de numeros: "));
            var ceros = 0;
            var menores = 0;
            var mayores = 0;
           
            for (var i = 1; i <= N; i++) {
                var num = parseFloat(prompt("Ingresa el numero: " + i + ":"));

                if (num === 0) {
                    ceros++;
                } else if (num < 0) {
                    menores++;
                } else {
                    mayores++;
                }
            }
            alert("Resultados:\n" +
                  "Cantidad de ceros: " + ceros + "\n" +
                  "Cantidad menores a cero: " + menores + "\n" +
                  "Cantidad mayores a cero: " + mayores);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>