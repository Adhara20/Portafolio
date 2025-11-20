<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 4</title>
</head>
<body>
    <!-- copiar y pegar de aquiiiiii -->
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <!-- resto del contenido -->
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 4</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                4.- Construya un programa tal que dado el costo de un artículo vendido y la cantidad de dinero entregada por el cliente, calcule e imprima el cambio que se debe entregar al mismo.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">costo</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese el costo del artículo: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pago</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese qué tanto pagó el cliente: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">cambio</span> 
                <span class="text-white">=</span> <span class="text-blue-400">pago</span> 
                <span class="text-white">-</span> <span class="text-blue-400">costo</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"El cambio del cliente es: "</span> 
                <span class="text-white">+</span> <span class="text-blue-400">cambio</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

<div class="flex justify-center items-center gap-6 mb-4 mt-4">
    <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio3.php'">
        Anterior
    </button>
    <button class="buttonEjecutar w-32" onclick="ejecutar()">
        Ejecutar
    </button>
    <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio5.php'">
        Siguiente
    </button>
</div>
    <!-- iiii hasta aca -->
    <script>
        function ejecutar(){
            var costo= parseFloat(prompt("Ingrese el costo del artículo: "));
            var pago= parseFloat(prompt("Ingrese qué tanto pagó el cliente: "));
            var cambio= pago-costo;
            alert("El cambio del cliente es: " + cambio);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>