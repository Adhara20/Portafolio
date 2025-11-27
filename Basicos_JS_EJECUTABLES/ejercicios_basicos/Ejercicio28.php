<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 28</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 28</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                28.- Dado 4 números enteros, obtener el porcentaje de cada uno en función a la suma de los 4 número ingresados.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">n1</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el primer número: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">n2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el segundo número: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">n3</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el tercer número: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">n4</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el cuarto número: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">suma</span> 
                <span class="text-white">=</span> <span class="text-blue-400">n1</span><span class="text-white">+</span><span class="text-blue-400">n2</span><span class="text-white">+</span><span class="text-blue-400">n3</span><span class="text-white">+</span><span class="text-blue-400">n4</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pa</span> 
                <span class="text-white">=</span> <span class="text-blue-400">n1</span><span class="text-white">/</span><span class="text-green-300">100</span><span class="text-white">,</span> 
                <span class="text-blue-400">pb</span> <span class="text-white">=</span> <span class="text-blue-400">n2</span><span class="text-white">/</span><span class="text-green-300">100</span><span class="text-white">,</span><br>
                <span class="text-blue-400">pc</span> <span class="text-white">=</span> <span class="text-blue-400">n3</span><span class="text-white">/</span><span class="text-green-300">100</span><span class="text-white">,</span> 
                <span class="text-blue-400">pd</span> <span class="text-white">=</span> <span class="text-blue-400">n4</span><span class="text-white">/</span><span class="text-green-300">100</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">psuma1</span> 
                <span class="text-white">=</span> <span class="text-blue-400">suma</span><span class="text-white">*</span><span class="text-blue-400">pa</span><span class="text-white">,</span> 
                <span class="text-blue-400">psuma2</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span><span class="text-white">*</span><span class="text-blue-400">pb</span><span class="text-white">,</span><br>
                <span class="text-blue-400">psuma3</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span><span class="text-white">*</span><span class="text-blue-400">pc</span><span class="text-white">,</span> 
                <span class="text-blue-400">psuma4</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span><span class="text-white">*</span><span class="text-blue-400">pd</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`La suma de los números es: ${suma}</span><br>
                <span class="text-[#AD6D3B]"> el procentaje del primer numero es: ${pa} y aplicado a la suma da: ${psuma1}</span><br>
                <span class="text-[#AD6D3B]"> el procentaje del segundo numero es: ${pb} y aplicado a la suma da: ${psuma2}</span><br>
                <span class="text-[#AD6D3B]"> el procentaje del tercer numero es: ${pc} y aplicado a la suma da: ${psuma3}</span><br>
                <span class="text-[#AD6D3B]"> el procentaje del cuarto numero es: ${pd} y aplicado a la suma da: ${psuma4}`</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio27.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio29.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var n1 = parseFloat(prompt("Ingresa el primer número "));
            var n2 = parseFloat(prompt("Ingresa el segundo número "));
            var n3 = parseFloat(prompt("Ingresa el tercer número "));
            var n4 = parseFloat(prompt("Ingresa el cuarto número "));

            var suma = n1+n2+n3+n4;
            var pa = n1/100, pb = n2/100, pc = n3/100, pd = n4/100;
            var psuma1 = suma*pa, psuma2 = suma*pb, psuma3 = suma*pc, psuma4 = suma*pd;
            
            alert(`La suma de los números es: ${suma}
            \n el procentaje del primer numero es: ${pa} y aplicado a la suma da: ${psuma1}
            \n el procentaje del segundo numero es: ${pb} y aplicado a la suma da: ${psuma2}
            \n el procentaje del tercer numero es: ${pc} y aplicado a la suma da: ${psuma3}
            \n el procentaje del cuarto numero es: ${pd} y aplicado a la suma da: ${psuma4}`);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>