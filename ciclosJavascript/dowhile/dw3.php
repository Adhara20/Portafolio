<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 3</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 3</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                3. Se requiere un programa para determinar cuánto ahorrará una persona en un año, si al final de cada mes deposita variables cantidades de dinero; además, se requiere saber cuánto lleva ahorrado cada mes. Realice el programa utilizando un ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">mes</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">ahorroTotal</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">deposito</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Deposita la cantidad del mes "</span> <span class="text-white">+</span> <span class="text-blue-400">mes</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">":"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">ahorroTotal</span> <span class="text-white">+=</span> <span class="text-blue-400">deposito</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ahorro acumulado al mes "</span> <span class="text-white">+</span> <span class="text-blue-400">mes</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">": $"</span> <span class="text-white">+</span> <span class="text-blue-400">ahorroTotal</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">mes</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-amber-400">while</span> <span class="text-purple-600">(</span><span class="text-blue-400">mes</span> <span class="text-white"><=</span> <span class="text-blue-700">12</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ahorro total en el año: $"</span> <span class="text-white">+</span> <span class="text-blue-400">ahorroTotal</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw2.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw4.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var mes = 1;
            var ahorroTotal=0;
            do{
                var deposito = parseFloat(prompt("Deposita la cantidad del mes " + mes + ":"));
                ahorroTotal += deposito;
                alert("Ahorro acumulado al mes " + mes + ": $" + ahorroTotal);
                mes++;
            }while (mes <= 12);
            alert("Ahorro total en el año: $" + ahorroTotal);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>