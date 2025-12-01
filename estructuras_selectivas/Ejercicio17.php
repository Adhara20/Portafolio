<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 17</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 17</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                17. Realice un programa que, con base en una calificación proporcionada (0-10), indique con letra la calificación que le corresponde: 10 es "A", 9 es "B", 8 es "C", 7 y 6 son "D", y de 5 a 0 son "F".
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">calificacion</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la calificación (0-10):"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">==</span> <span class="text-blue-700">10</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La calificación es 'A'"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">==</span> <span class="text-blue-700">9</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La calificación es 'B'"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">==</span> <span class="text-blue-700">8</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La calificación es 'C'"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">==</span> <span class="text-blue-700">7</span> <span class="text-white">||</span> <span class="text-blue-400">calificacion</span> <span class="text-white">==</span> <span class="text-blue-700">6</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La calificación es 'D'"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">>=</span> <span class="text-blue-700">0</span> <span class="text-white">&&</span> <span class="text-blue-400">calificacion</span> <span class="text-white"><=</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La calificación es 'F'"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Error: Calificación fuera del rango 0-10"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio16.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio18.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var calificacion = parseInt(prompt("Ingresa la calificación (0-10):"));
            
            // Validar entrada
            if (isNaN(calificacion) || calificacion < 0 || calificacion > 10) {
                alert("Error: Calificación debe estar entre 0 y 10");
                return;
            }
            
            if (calificacion == 10) {
                alert("La calificación es 'A'");
            } else if (calificacion == 9) {
                alert("La calificación es 'B'");
            } else if (calificacion == 8) {
                alert("La calificación es 'C'");
            } else if (calificacion == 7 || calificacion == 6) {
                alert("La calificación es 'D'");
            } else if (calificacion >= 0 && calificacion <= 5) {
                alert("La calificación es 'F'");
            } else {
                alert("Error: Calificación fuera del rango 0-10");
            }
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>