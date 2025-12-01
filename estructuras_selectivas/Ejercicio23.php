<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 23</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 23</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                23. Diseñe un programa que permita calcular el día siguiente de una fecha dada. Asumir que la fecha ingresada es válida.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">dia</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el día:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">mes</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el mes:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">ano</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el año:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">dia</span><span class="text-white">,</span> <span class="text-blue-400">mesSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">mes</span><span class="text-white">,</span> <span class="text-blue-400">anoSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">ano</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">mes</span> <span class="text-white">==</span> <span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">dia</span> <span class="text-white">==</span> <span class="text-blue-700">28</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">mesSiguiente</span> <span class="text-white">=</span> <span class="text-blue-700">3</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">dia</span> <span class="text-white">+</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">mes</span> <span class="text-white">==</span> <span class="text-blue-700">4</span> <span class="text-white">||</span> <span class="text-blue-400">mes</span> <span class="text-white">==</span> <span class="text-blue-700">6</span> <span class="text-white">||</span> <span class="text-blue-400">mes</span> <span class="text-white">==</span> <span class="text-blue-700">9</span> <span class="text-white">||</span> <span class="text-blue-400">mes</span> <span class="text-white">==</span> <span class="text-blue-700">11</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">dia</span> <span class="text-white">==</span> <span class="text-blue-700">30</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">mesSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">mes</span> <span class="text-white">+</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">dia</span> <span class="text-white">+</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">mes</span> <span class="text-white">==</span> <span class="text-blue-700">12</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">dia</span> <span class="text-white">==</span> <span class="text-blue-700">31</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">mesSiguiente</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">anoSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">ano</span> <span class="text-white">+</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">dia</span> <span class="text-white">+</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">dia</span> <span class="text-white">==</span> <span class="text-blue-700">31</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">mesSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">mes</span> <span class="text-white">+</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">diaSiguiente</span> <span class="text-white">=</span> <span class="text-blue-400">dia</span> <span class="text-white">+</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La fecha ingresada fue: "</span> <span class="text-white">+</span> <span class="text-blue-400">dia</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"/"</span> <span class="text-white">+</span> <span class="text-blue-400">mes</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"/"</span> <span class="text-white">+</span> <span class="text-blue-400">ano</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"\nEl día siguiente es: "</span> <span class="text-white">+</span> <span class="text-blue-400">diaSiguiente</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"/"</span> <span class="text-white">+</span> <span class="text-blue-400">mesSiguiente</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"/"</span> <span class="text-white">+</span> <span class="text-blue-400">anoSiguiente</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio22.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio24.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var dia = parseInt(prompt("Ingresa el día:"));
            var mes = parseInt(prompt("Ingresa el mes:"));
            var ano = parseInt(prompt("Ingresa el año:"));
            
            var diaSiguiente = dia, mesSiguiente = mes, anoSiguiente = ano;
            
            if (mes == 2) {
                if (dia == 28) {
                    diaSiguiente = 1;
                    mesSiguiente = 3;
                } else {
                    diaSiguiente = dia + 1;
                }
            } else if (mes == 4 || mes == 6 || mes == 9 || mes == 11) {
                if (dia == 30) {
                    diaSiguiente = 1;
                    mesSiguiente = mes + 1;
                } else {
                    diaSiguiente = dia + 1;
                }
            } else if (mes == 12) {
                if (dia == 31) {
                    diaSiguiente = 1;
                    mesSiguiente = 1;
                    anoSiguiente = ano + 1;
                } else {
                    diaSiguiente = dia + 1;
                }
            } else {
                if (dia == 31) {
                    diaSiguiente = 1;
                    mesSiguiente = mes + 1;
                } else {
                    diaSiguiente = dia + 1;
                }
            }
            
            alert("La fecha ingresada fue: " + dia + "/" + mes + "/" + ano + 
                  "\nEl día siguiente es: " + diaSiguiente + "/" + mesSiguiente + "/" + anoSiguiente);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>