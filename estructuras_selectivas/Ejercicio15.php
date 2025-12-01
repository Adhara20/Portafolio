<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 15</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 15</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                15. Realice un programa que permita determinar el sueldo semanal de un trabajador con base en las horas trabajadas y el pago por hora, considerando que a partir de la hora número 41 y hasta la 45, cada hora se le paga el doble, de la hora 46 a la 50, el triple, y que trabajar más de 50 horas no está permitido.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">horas</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa las horas trabajadas:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pago</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el pago por hora:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">sueldo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white"><=</span> <span class="text-blue-700">40</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">sueldo</span> <span class="text-white">=</span> <span class="text-blue-400">horas</span> <span class="text-white">*</span> <span class="text-blue-400">pago</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El sueldo semanal es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">sueldo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white"><=</span> <span class="text-blue-700">45</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">sueldo</span> <span class="text-white">=</span> <span class="text-blue-700">40</span> <span class="text-white">*</span> <span class="text-blue-400">pago</span> <span class="text-white">+</span> <span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white">-</span> <span class="text-blue-700">40</span><span class="text-purple-600">)</span> <span class="text-white">*</span> <span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-400">pago</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El sueldo semanal es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">sueldo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white"><=</span> <span class="text-blue-700">50</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">sueldo</span> <span class="text-white">=</span> <span class="text-blue-700">40</span> <span class="text-white">*</span> <span class="text-blue-400">pago</span> <span class="text-white">+</span> <span class="text-blue-700">5</span> <span class="text-white">*</span> <span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-400">pago</span> <span class="text-white">+</span> <span class="text-purple-600">(</span><span class="text-blue-400">horas</span> <span class="text-white">-</span> <span class="text-blue-700">45</span><span class="text-purple-600">)</span> <span class="text-white">*</span> <span class="text-blue-700">3</span> <span class="text-white">*</span> <span class="text-blue-400">pago</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El sueldo semanal es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">sueldo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Trabajar más de 50 horas no está permitido."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio14.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio16.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var horas = parseFloat(prompt("Ingresa las horas trabajadas:"));
            var pago = parseFloat(prompt("Ingresa el pago por hora:"));
            
            // Validar entradas
            if (isNaN(horas) || horas < 0) {
                alert("Horas trabajadas no válidas.");
                return;
            }
            if (isNaN(pago) || pago <= 0) {
                alert("Pago por hora no válido.");
                return;
            }
            
            var sueldo = 0;
            
            if (horas <= 40) {
                sueldo = horas * pago;
                alert("El sueldo semanal es: $" + sueldo.toFixed(2));
            } else if (horas <= 45) {
                sueldo = 40 * pago + (horas - 40) * 2 * pago;
                alert("El sueldo semanal es: $" + sueldo.toFixed(2));
            } else if (horas <= 50) {
                sueldo = 40 * pago + 5 * 2 * pago + (horas - 45) * 3 * pago;
                alert("El sueldo semanal es: $" + sueldo.toFixed(2));
            } else {
                alert("Trabajar más de 50 horas no está permitido.");
            }
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>