<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio For 14</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">Ejercicio 14</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                14. Calcular los totales de saldos, pagos mínimos (10%) y pagos sin intereses para N clientes de tarjeta de crédito.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">N</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el número de clientes:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalSaldo</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalPagosMinimos</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalPagosSinInteres</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-amber-400">for</span> <span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">N</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">saldo</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el saldo actual del cliente "</span> <span class="text-white">+</span> <span class="text-blue-400">i</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">pagoMinimo</span><span class="text-white">=</span> <span class="text-blue-400">saldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">pagoSinInteres</span><span class="text-white">=</span> <span class="text-blue-400">saldo</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalSaldo</span><span class="text-white">+=</span> <span class="text-blue-400">saldo</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalPagosMinimos</span><span class="text-white">+=</span> <span class="text-blue-400">pagoMinimo</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalPagosSinInteres</span><span class="text-white">+=</span> <span class="text-blue-400">pagoSinInteres</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                <span class="text-blue-700">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Total de saldos de los "</span> <span class="text-white">+</span> <span class="text-blue-400">N</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" clientes: $"</span> <span class="text-white">+</span> <span class="text-blue-400">totalSaldo</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\n"</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"Total de pagos mínimos: $"</span> <span class="text-white">+</span> <span class="text-blue-400">totalPagosMinimos</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\n"</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"Total de pagos sin generar intereses: $"</span> <span class="text-white">+</span> <span class="text-blue-400">totalPagosSinInteres</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio13.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio15.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var N = parseInt(prompt("Ingrese el número de clientes:"));
            var totalSaldo = 0;
            var totalPagosMinimos = 0;
            var totalPagosSinInteres = 0;
            for (var i = 1; i <= N; i++) {
                var saldo = parseFloat(prompt("Ingrese el saldo actual del cliente " + i + ":"));
               
                var pagoMinimo = saldo * 0.10;
                var pagoSinInteres = saldo;    
                totalSaldo += saldo;
                totalPagosMinimos += pagoMinimo;
                totalPagosSinInteres += pagoSinInteres;
            }
            alert(
              "Total de saldos de los " + N + " clientes: $" + totalSaldo + "\n" +
              "Total de pagos mínimos: $" + totalPagosMinimos + "\n" +
              "Total de pagos sin generar intereses: $" + totalPagosSinInteres
            );
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>