<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 2</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 2</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                2. Almacenes "El harapiento distinguido" tiene una promoción: a todos los trajes que tienen un precio superior a $2500.00 se les aplicará un descuento de 15%, a todos los demás se les aplicará solo 8%. Realice un programa para determinar el precio final que debe pagar una persona por comprar un traje y de cuánto es el descuento que obtendrá.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">ct</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el costo del traje"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">de</span> 
                <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> 
                <span class="text-blue-400">pf</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">ct</span> <span class="text-white">>=</span> <span class="text-blue-700">2500</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">de</span> <span class="text-white">=</span> <span class="text-blue-400">ct</span> <span class="text-white">*</span> <span class="text-blue-700">0.15</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">de</span> <span class="text-white">=</span> <span class="text-blue-400">ct</span> <span class="text-white">*</span> <span class="text-blue-700">0.08</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-400">pf</span> <span class="text-white">=</span> <span class="text-blue-400">ct</span> <span class="text-white">-</span> <span class="text-blue-400">de</span><span class="text-white">;</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`Precio del traje = ${ct}\n\nDescuento = ${de}\n\nTotal = ${pf}`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio1.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio3.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var ct = parseFloat(prompt("Ingrese el costo del traje"));
            var de = 0, pf = 0;
            
            if(ct >= 2500){
                de = ct * 0.15;
            } else {
                de = ct * 0.08;
            }
            
            pf = ct - de;
            
            alert(`Precio del traje = ${ct}\n\nDescuento = ${de}\n\nTotal = ${pf}`);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>