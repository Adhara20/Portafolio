<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 18</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 18</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                18.- Construya un programa, que dado el radio, la generatriz y la altura de un cono; calcule e imprima el área de la base, el área lateral, el área total y su volumen.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">r</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el radio del cono: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">g</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa la generatriz del cono: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">a</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa la altura del cono: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">const</span> <span class="text-blue-400">pi</span> 
                <span class="text-white">=</span> <span class="text-green-300">3.141592</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">r2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.pow</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">r</span><span class="text-white">,</span><span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">AB</span> 
                <span class="text-white">=</span> <span class="text-blue-400">pi</span><span class="text-white">*</span><span class="text-blue-400">r2</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">AL</span> 
                <span class="text-white">=</span> <span class="text-blue-400">pi</span><span class="text-white">*</span><span class="text-blue-400">r</span><span class="text-white">*</span><span class="text-blue-400">g</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">AT</span> 
                <span class="text-white">=</span> <span class="text-blue-400">AB</span><span class="text-white">+</span><span class="text-blue-400">AL</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">VOL</span> 
                <span class="text-white">=</span> <span class="text-green-300">0.33333</span><span class="text-white">*</span><span class="text-blue-400">AB</span><span class="text-white">*</span><span class="text-blue-400">a</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"el area de la base es "</span> <span class="text-white">+</span> <span class="text-blue-400">AB</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n el area lateral es "</span> <span class="text-white">+</span> <span class="text-blue-400">AL</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n el area es "</span> <span class="text-white">+</span> <span class="text-blue-400">AT</span> 
                <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">" \n el volumen es "</span> <span class="text-white">+</span> <span class="text-blue-400">VOL</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio17.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio19.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var r = parseFloat(prompt("Ingresa el radio del cono"));
            var g = parseFloat(prompt("Ingresa la generatriz del cono"));
            var a = parseFloat(prompt("Ingresa la altura del cono"));
            const pi = 3.141592;
            var r2 = Math.pow(r,2);
            var AB = pi*r2;
            var AL = pi*r*g;
            var AT = AB+AL;
            var VOL = 0.33333*AB*a;

            alert("el area de la base es "+ AB+"\n"+" el area lateral es "+ AL+"\n"+"el area es "+AT+"\n"+"el volumen es "+VOL);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>