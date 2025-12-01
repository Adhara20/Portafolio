<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 13</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 13</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                13. Diseñe un programa para determinar a qué lugar podrá́ ir de vacaciones una persona, considerando que la línea de autobuses "La tortuga" cobra por kilómetro recorrido. Se debe considerar el costo del pasaje tanto de ida, como de vuelta; los datos que se conocen y que son fijos son: México, 750 km; P.V., 800 km; Acapulco, 1200 km, y Cancún, 1800 km. También se debe considerar la posibilidad de tener que quedarse en casa.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">presupuesto</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa tu presupuesto disponible:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">costoKm</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Costo por kilómetro recorrido:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">mexico</span> <span class="text-white">=</span> <span class="text-blue-700">750</span> <span class="text-white">*</span> <span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-400">costoKm</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">pv</span> <span class="text-white">=</span> <span class="text-blue-700">800</span> <span class="text-white">*</span> <span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-400">costoKm</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">acapulco</span> <span class="text-white">=</span> <span class="text-blue-700">1200</span> <span class="text-white">*</span> <span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-400">costoKm</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">cancun</span> <span class="text-white">=</span> <span class="text-blue-700">1800</span> <span class="text-white">*</span> <span class="text-blue-700">2</span> <span class="text-white">*</span> <span class="text-blue-400">costoKm</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">presupuesto</span> <span class="text-white">>=</span> <span class="text-blue-400">cancun</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Puedes ir a Cancún."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">presupuesto</span> <span class="text-white">>=</span> <span class="text-blue-400">acapulco</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Puedes ir a Acapulco."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">presupuesto</span> <span class="text-white">>=</span> <span class="text-blue-400">pv</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Puedes ir a P.V."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">presupuesto</span> <span class="text-white">>=</span> <span class="text-blue-400">mexico</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Puedes ir a México."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Te tendrás que quedar en casa."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio12.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio14.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var presupuesto = parseFloat(prompt("Ingresa tu presupuesto disponible:"));
            var costoKm = parseFloat(prompt("Costo por kilómetro recorrido:"));
            
            // Validar entradas
            if (isNaN(presupuesto) || presupuesto < 0) {
                alert("Presupuesto no válido.");
                return;
            }
            if (isNaN(costoKm) || costoKm <= 0) {
                alert("Costo por kilómetro no válido.");
                return;
            }
            
            // Calcular costos (ida y vuelta)
            var mexico = 750 * 2 * costoKm;
            var pv = 800 * 2 * costoKm;
            var acapulco = 1200 * 2 * costoKm;
            var cancun = 1800 * 2 * costoKm;
            
            if (presupuesto >= cancun) {
                alert("Puedes ir a Cancún. Costo: $" + cancun.toFixed(2));
            } else if (presupuesto >= acapulco) {
                alert("Puedes ir a Acapulco. Costo: $" + acapulco.toFixed(2));
            } else if (presupuesto >= pv) {
                alert("Puedes ir a P.V. Costo: $" + pv.toFixed(2));
            } else if (presupuesto >= mexico) {
                alert("Puedes ir a México. Costo: $" + mexico.toFixed(2));
            } else {
                alert("Te tendrás que quedar en casa.");
            }
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>