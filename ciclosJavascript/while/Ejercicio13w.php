<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio While 13</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 13</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                13. Realice el programa para determinar cuánto pagará una persona que adquiere N artículos, los cuales están de promoción. Considere que si su precio es mayor o igual a $200 se le aplica un descuento de 15%, y si su precio es mayor a $100 pero menor a $200, el descuento es de 12%; de lo contrario, sólo se le aplica 10%. Se debe saber cuál es el costo y el descuento que tendrá́ cada uno de los artículos y finalmente cuánto se pagará por todos los artículos obtenido.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">N</span> <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el número de artículos: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalPagar</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalDescuento</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">i</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">while</span> <span class="text-purple-600">(</span><span class="text-blue-400">i</span> <span class="text-white"><=</span> <span class="text-blue-400">N</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">precio</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el precio del artículo "</span> <span class="text-white">+</span> <span class="text-blue-400">i</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">":"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <br>
                &nbsp;&nbsp;<span class="text-amber-400">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">precio</span> <span class="text-white">>=</span> <span class="text-blue-700">200</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.15</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-amber-400">else</span> <span class="text-amber-400">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">precio</span> <span class="text-white">></span> <span class="text-blue-700">100</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.12</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-amber-400">else</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalPagar</span> <span class="text-white">+=</span> <span class="text-blue-400">precio</span> <span class="text-white">-</span> <span class="text-blue-400">descuento</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalDescuento</span> <span class="text-white">+=</span> <span class="text-blue-400">descuento</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"Total de descuento aplicado: $"</span> <span class="text-white">+</span> <span class="text-blue-400">totalDescuento</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"\nTotal a pagar por los "</span> <span class="text-white">+</span> <span class="text-blue-400">N</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" artículos: $"</span> <span class="text-white">+</span> <span class="text-blue-400">totalPagar</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio12w.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio14w.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var N = parseInt(prompt("Ingrese el número de artículos: "));
            var totalPagar = 0;
            var totalDescuento = 0;
            var i = 1;
            while (i <= N) {
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
                i++;
            }
            alert(
                "Total de descuento aplicado: $" + totalDescuento +
                "\nTotal a pagar por los " + N + " artículos: $" + totalPagar
            );
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>