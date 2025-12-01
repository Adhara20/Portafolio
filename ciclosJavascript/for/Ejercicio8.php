<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio For 8</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">Ejercicio 8</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                8. Calcular el incremento salarial del 10% anual durante 6 años para un salario inicial de $1500, mostrando el incremento y salario actual cada año.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">sal</span><span class="text-white">=</span><span class="text-blue-700">1500</span><span class="text-white">,</span> <span class="text-blue-400">inc</span><span class="text-white">;</span><br>
                <span class="text-amber-400">for</span><span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-700">6</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">inc</span><span class="text-white">=</span> <span class="text-blue-400">sal</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">sal</span><span class="text-white">=</span> <span class="text-blue-400">sal</span> <span class="text-white">+</span> <span class="text-blue-400">inc</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">alert</span><span class="text-purple-600">(</span><span class="text-blue-400">i</span><span class="text-white">+</span><span class="text-[#AD6D3B]">".- El incremento es: "</span><span class="text-white">+</span><span class="text-blue-400">inc</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" --> salario : "</span><span class="text-white">+</span><span class="text-blue-400">sal</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio7.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio9.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var sal = 1500, inc;
            for(var i=1; i<=6; i++){
                inc = sal * 0.10;
                sal = sal + inc;
                alert(`${i}.- El incremento es: ${inc} --> salario : ${sal}`);
            }
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>