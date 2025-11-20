<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 13</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 13</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                13.- Escriba un programa que calcule el número mínimo de billetes de 20, 10, 5 y 1 dólares que se necesita para cambiar un cheque. Considere que el valor del cheque es un número entero.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">cheque</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor del cheque: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num1</span> 
                <span class="text-white">=</span> <span class="text-blue-400">cheque</span> 
                <span class="text-white">/</span> <span class="text-green-300">20</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num2</span> 
                <span class="text-white">=</span> <span class="text-blue-400">cheque</span> 
                <span class="text-white">/</span> <span class="text-green-300">10</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num3</span> 
                <span class="text-white">=</span> <span class="text-blue-400">cheque</span> 
                <span class="text-white">/</span> <span class="text-green-300">5</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num4</span> 
                <span class="text-white">=</span> <span class="text-blue-400">cheque</span> 
                <span class="text-white">/</span> <span class="text-green-300">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"De veinte: "</span> <span class="text-white">+</span> <span class="text-blue-400">num1</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n De diez: "</span> <span class="text-white">+</span> <span class="text-blue-400">num2</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n De cinco: "</span> <span class="text-white">+</span> <span class="text-blue-400">num3</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n De uno: "</span> <span class="text-white">+</span> <span class="text-blue-400">num4</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio12.php'">
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio14.php'">
            Siguiente
        </button>
    </div>

    <script>
        function ejecutar(){
            var cheque = parseFloat(prompt("Ingresa el valor del cheque"));
            var num1 = cheque/20;
            var num2 = cheque/10;
            var num3 = cheque/5;
            var num4 = cheque/1;
            alert("De veinte: "+num1+"\n"+"De diez: "+num2+"\n"+"De cinco: "+num3+"\n"+"De uno: "+num4);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>