<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 9</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 9</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                9. Realice el programa que determine el costo y el descuento que tendrá́ un artículo. Considere que si su precio es mayor o igual a $200 se le aplica un descuento de 15%, y si su precio es mayor a $100 pero menor a $200, el descuento es de 12%, y si es menor a $100, sólo 10%.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">precio</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingrese el precio del articulo"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">calculo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">precio</span> <span class="text-white">>=</span> <span class="text-blue-700">200</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">calculo</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.15</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">-</span> <span class="text-blue-400">calculo</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">precio</span> <span class="text-white">>=</span> <span class="text-blue-700">100</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">calculo</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.12</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">-</span> <span class="text-blue-400">calculo</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">precio</span> <span class="text-white"><=</span> <span class="text-blue-700">100</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">calculo</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">descuento</span> <span class="text-white">=</span> <span class="text-blue-400">precio</span> <span class="text-white">-</span> <span class="text-blue-400">calculo</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`Tienes un descuento de: ${calculo}\\n\\nEl total a pagar es: ${descuento}`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio8.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio10.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var precio = parseFloat(prompt("ingrese el precio del articulo"));
            var calculo = 0, descuento = 0;
            
            if(precio >= 200){
                calculo = precio * 0.15;
                descuento = precio - calculo;
            } else if(precio >= 100){
                calculo = precio * 0.12;
                descuento = precio - calculo;
            } else if(precio <= 100){
                calculo = precio * 0.10;
                descuento = precio - calculo;
            }
            
            alert(`Tienes un descuento de: ${calculo}\n\nEl total a pagar es: ${descuento}`);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>