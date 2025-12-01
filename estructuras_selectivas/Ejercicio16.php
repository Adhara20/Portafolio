<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 16</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 16</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                16. Los alumnos de una escuela desean realizar un viaje de estudios, pero requieren determinar cuánto les costará el pasaje, considerando que las tarifas del autobús son las siguientes: si son más de 100 alumnos, el costo es de $20; si son entre 50 y 100, $35; entre 20 y 49, $40, y si son menos de 20 alumnos, $70 por cada uno. Realice el programa para determinar el costo del pasaje de cada alumno.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">alumnos</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la cantidad de alumnos:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">alumnos</span> <span class="text-white">></span> <span class="text-blue-700">100</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="text-blue-400">alumnos</span> <span class="text-white">*</span> <span class="text-blue-700">20</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El costo total es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">costo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" (Costo por alumno: $20)"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">alumnos</span> <span class="text-white">>=</span> <span class="text-blue-700">50</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="text-blue-400">alumnos</span> <span class="text-white">*</span> <span class="text-blue-700">35</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El costo total es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">costo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" (Costo por alumno: $35)"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">alumnos</span> <span class="text-white">>=</span> <span class="text-blue-700">20</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="text-blue-400">alumnos</span> <span class="text-white">*</span> <span class="text-blue-700">40</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El costo total es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">costo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" (Costo por alumno: $40)"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">alumnos</span> <span class="text-white">></span> <span class="text-blue-700">0</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">costo</span> <span class="text-white">=</span> <span class="text-blue-400">alumnos</span> <span class="text-white">*</span> <span class="text-blue-700">70</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El costo total es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">costo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" (Costo por alumno: $70)"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Cantidad de alumnos no válida."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio15.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio17.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var alumnos = parseFloat(prompt("Ingresa la cantidad de alumnos:"));
            
            // Validar entrada
            if (isNaN(alumnos) || alumnos <= 0) {
                alert("Cantidad de alumnos no válida.");
                return;
            }
            
            var costo = 0;
            
            if (alumnos > 100) {
                costo = alumnos * 20;
                alert("El costo total es: $" + costo.toFixed(2) + " (Costo por alumno: $20)");
            } else if (alumnos >= 50) {
                costo = alumnos * 35;
                alert("El costo total es: $" + costo.toFixed(2) + " (Costo por alumno: $35)");
            } else if (alumnos >= 20) {
                costo = alumnos * 40;
                alert("El costo total es: $" + costo.toFixed(2) + " (Costo por alumno: $40)");
            } else {
                costo = alumnos * 70;
                alert("El costo total es: $" + costo.toFixed(2) + " (Costo por alumno: $70)");
            }
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>