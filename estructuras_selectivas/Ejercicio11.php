<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 11</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 11</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                11. Cierta empresa proporciona un bono mensual a sus trabajadores, el cual puede ser por su antigüedad o bien por el monto de su sueldo (el que sea mayor), de la siguiente forma: Cuando la antigüedad es mayor a 2 años pero menor a 5, se otorga 20% de su sueldo; cuando es de 5 años o más, 30%. Ahora bien, el bono por concepto de sueldo, si éste es menor a $1000, se da 25% de éste, cuando éste es mayor a $1000, pero menor o igual a $3500, se otorga 15% de su sueldo, para más de $3500, 10%.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">antiguedad</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa tus años de antiguedad:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">sueldo</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa tu sueldo:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">bonoAntiguedad</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">bonoSueldo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">antiguedad</span> <span class="text-white">></span> <span class="text-blue-700">2</span> <span class="text-white">&</span><span class="text-blue-400">antiguedad</span> <span class="text-white"><</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bonoAntiguedad</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.20</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">antiguedad</span> <span class="text-white">>=</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bonoAntiguedad</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.30</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bonoAntiguedad</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">sueldo</span> <span class="text-white"><</span> <span class="text-blue-700">1000</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bonoSueldo</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.25</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">sueldo</span> <span class="text-white"><=</span> <span class="text-blue-700">3500</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bonoSueldo</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.15</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">bonoSueldo</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">bonoAntiguedad</span> <span class="text-white">></span> <span class="text-blue-400">bonoSueldo</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El bono asignado es por antiguedad: $"</span> <span class="text-white">+</span> <span class="text-blue-400">bonoAntiguedad</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">bonoSueldo</span> <span class="text-white">></span> <span class="text-blue-400">bonoAntiguedad</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El bono asignado es por sueldo: $"</span> <span class="text-white">+</span> <span class="text-blue-400">bonoSueldo</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ambos bonos son iguales: $"</span> <span class="text-white">+</span> <span class="text-blue-400">bonoAntiguedad</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio10.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio12.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var antiguedad = parseFloat(prompt("Ingresa tus años de antiguedad:"));
            var sueldo = parseFloat(prompt("Ingresa tu sueldo:"));
            var bonoAntiguedad = 0, bonoSueldo = 0;
            
            if (antiguedad > 2 && antiguedad < 5) {
                bonoAntiguedad = sueldo * 0.20;
            } else if (antiguedad >= 5) {
                bonoAntiguedad = sueldo * 0.30;
            } else {
                bonoAntiguedad = 0;
            }
            
            if (sueldo < 1000) {
                bonoSueldo = sueldo * 0.25;
            } else if (sueldo <= 3500) {
                bonoSueldo = sueldo * 0.15;
            } else {
                bonoSueldo = sueldo * 0.10;
            }
            
            if (bonoAntiguedad > bonoSueldo) {
                alert("El bono asignado es por antiguedad: $" + bonoAntiguedad);
            } else if (bonoSueldo > bonoAntiguedad) {
                alert("El bono asignado es por sueldo: $" + bonoSueldo);
            } else {
                alert("Ambos bonos son iguales: $" + bonoAntiguedad);
            }
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>