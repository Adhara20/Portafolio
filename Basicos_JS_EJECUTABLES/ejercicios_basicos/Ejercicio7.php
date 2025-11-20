<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 7</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 7</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                7.- Construya un programa que resuelva el problema que tienen en una gasolinera. Los surtidores de la misma registran lo que "surten" en galones, pero el precio de la gasolina está fijado en litros. El diagrama de flujo debe calcular e imprimir lo que hay que cobrarle al cliente.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">gal</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese la cantidad de galones a surtir: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">precio</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingrese el precio por litro de la gasolina: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">lts</span> 
                <span class="text-white">=</span> <span class="text-blue-400">gal</span> 
                <span class="text-white">*</span> <span class="text-green-300">3.78541</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">precioFinal</span> 
                <span class="text-white">=</span> <span class="text-blue-400">lts</span> 
                <span class="text-white">*</span> <span class="text-blue-400">precio</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Litros surtidos: "</span> <span class="text-white">+</span> <span class="text-blue-400">lts</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n Total a pagar: "</span> <span class="text-white">+</span> <span class="text-blue-400">precioFinal</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio6.php'">
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio8.php'">
            Siguiente
        </button>
    </div>

    <script>
        function ejecutar(){
            var gal= parseFloat(prompt("Ingrese la cantidad de galones a surtir: "));
            var precio= parseFloat(prompt("Ingrese el precio por litro de la gasolina: "));
            var lts= gal * 3.78541;
            var precioFinal= lts * precio;
            alert("Litros surtidos: " + lts + "\n" + "Total a pagar: " + precioFinal);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>