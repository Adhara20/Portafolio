<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 8</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 8</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                8. El dueño de un estacionamiento requiere un programa que le permita determinar cuánto debe cobrar por el uso del estacionamiento a sus clientes. Las tarifas que se tienen son las siguientes: Las dos primeras horas a $5.00 c/u. Las siguientes tres a $4.00 c/u. Las cinco siguientes a $3.00 c/u. Después de diez horas el costo por cada una es de dos pesos.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">horas</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingrese las horas que se quedara"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white"><=</span> <span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="text-blue-400">horas</span> <span class="text-white">*</span> <span class="text-blue-700">5.00</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white"><=</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="purple-600">(</span><span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-700">5.00</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="purple-600">((</span><span class="text-blue-400">horas</span> <span class="text-white">-</span> <span class="text-blue-700">2</span><span class="text-purple-600">)</span> <span class="text-white">*</span> <span class="text-blue-700">4.00</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white"><=</span> <span class="text-blue-700">10</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="purple-600">(</span><span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-700">5.00</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="purple-600">(</span><span class="text-blue-700">3</span> <span class="text-white">*</span> <span class="text-blue-700">4.00</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="purple-600">((</span><span class="text-blue-400">horas</span> <span class="text-white">-</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span> <span class="text-white">*</span> <span class="text-blue-700">3.00</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white">></span> <span class="text-blue-700">10</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="purple-600">(</span><span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-700">5.00</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="purple-600">(</span><span class="text-blue-700">3</span> <span class="text-white">*</span> <span class="text-blue-700">4.00</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="purple-600">(</span><span class="text-blue-700">5</span> <span class="text-white">*</span> <span class="text-blue-700">3.00</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="purple-600">((</span><span class="text-blue-400">horas</span> <span class="text-white">-</span> <span class="text-blue-700">10</span><span class="text-purple-600">)</span> <span class="text-white">*</span> <span class="text-blue-700">2.00</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Horas en el estacionamiento: "</span> <span class="text-white">+</span> <span class="text-blue-400">horas</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\\n"</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"Total a pagar: $"</span> <span class="text-white">+</span> <span class="text-blue-400">costo</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio7.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio9.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var horas = parseFloat(prompt("ingrese las horas que se quedara"));
            var costo = 0;

            if (horas <= 2) {
                costo = horas * 5.00;
            } else if (horas <= 5) {
                costo = (2 * 5.00) + ((horas - 2) * 4.00);
            } else if (horas <= 10) {
                costo = (2 * 5.00) + (3 * 4.00) + ((horas - 5) * 3.00);
            } else if (horas > 10) {
                costo = (2 * 5.00) + (3 * 4.00) + (5 * 3.00) + ((horas - 10) * 2.00);
            }
            
            alert("Horas en el estacionamiento: " + horas + "\n" + "Total a pagar: $" + costo);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>