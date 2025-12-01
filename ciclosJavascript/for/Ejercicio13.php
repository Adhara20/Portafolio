<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio For 13</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">Ejercicio 13</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                13. Calcular el descuento y total a pagar para N artículos según su precio: 15% para $200 o más, 12% para más de $100, y 10% para otros.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">N</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el número de artículos: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalPagar</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalDescuento</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-amber-400">for</span> <span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">N</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">precio</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el precio del artículo "</span> <span class="text-white">+</span> <span class="text-blue-400">i</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">descuento</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">precio</span> <span class="text-white">>=</span> <span class="text-blue-700">200</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">descuento</span><span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.15</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else if</span> <span class="text-purple-600">(</span><span class="text-blue-400">precio</span> <span class="text-white">></span> <span class="text-blue-700">100</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">descuento</span><span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.12</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">descuento</span><span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalPagar</span><span class="text-white">+=</span> <span class="text-blue-400">precio</span> <span class="text-white">-</span> <span class="text-blue-400">descuento</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalDescuento</span><span class="text-white">+=</span> <span class="text-blue-400">descuento</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                <span class="text-blue-700">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Total de descuento aplicado: $"</span> <span class="text-white">+</span> <span class="text-blue-400">totalDescuento</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nTotal a pagar por los "</span> <span class="text-white">+</span> <span class="text-blue-400">N</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" artículos: $"</span> <span class="text-white">+</span> <span class="text-blue-400">totalPagar</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio12.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio14.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var N = parseInt(prompt("Ingrese el número de artículos: "));
            var totalPagar = 0;
            var totalDescuento = 0;
            for (var i = 1; i <= N; i++) {
                var precio = parseFloat(prompt("Ingrese el precio del artículo " + i + ":"));
                var descuento = 0;

                if (precio >= 200) {
                    descuento = precio * 0.15;
                } else if (precio > 100) {
                    descuento = precio * 0.12;
                } else {
                    descuento = precio * 0.10;
                }
                totalPagar += precio - descuento;
                totalDescuento += descuento;
            }
            alert("Total de descuento aplicado: $" + totalDescuento + "\nTotal a pagar por los " + N + " artículos: $" + totalPagar);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>