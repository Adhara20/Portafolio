<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 14</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 14</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                14. Se les dará́ un bono por antigüedad a los empleados de una tienda. Si tienen un año, se les dará $100; si tienen 2 años, $200, y así́ sucesivamente hasta los 5 años. Para los que tengan más de 5, el bono será́ de $1000. Realice un programa que permita determinar el bono que recibirá́ un trabajador.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">antiguedad</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa los años de antigüedad del empleado:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">bono</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">antiguedad</span> <span class="text-white">>=</span> <span class="text-blue-700">1</span> <span class="text-white">&&</span> <span class="text-blue-400">antiguedad</span> <span class="text-white"><=</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bono</span> <span class="text-white">=</span> <span class="text-blue-400">antiguedad</span> <span class="text-white">*</span> <span class="text-blue-700">100</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">antiguedad</span> <span class="text-white">></span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bono</span> <span class="text-white">=</span> <span class="text-blue-700">1000</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bono</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El bono que recibirá el trabajador es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">bono</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio13.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio15.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var antiguedad = parseFloat(prompt("Ingresa los años de antigüedad del empleado:"));
            
            // Validar entrada
            if (isNaN(antiguedad) || antiguedad < 0) {
                alert("Antigüedad no válida.");
                return;
            }
            
            var bono = 0;
            
            if (antiguedad >= 1 && antiguedad <= 5) {
                bono = antiguedad * 100;
            } else if (antiguedad > 5) {
                bono = 1000;
            } else {
                bono = 0;
            }
            
            alert("El bono que recibirá el trabajador es: $" + bono.toFixed(2));
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>