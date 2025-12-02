<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio While 4</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 4</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                4. Una persona se encuentra en el kilómetro 70 de la carretera Aguascalientes-Zacatecas, otra se encuentra en el km 150 de la misma carretera, la primera viaja en dirección a Zacatecas, mientras que la segunda se dirige a Aguascalientes, a la misma velocidad. Realice un programa para determinar en qué kilómetro de esa carretera se encontrarán, utilizando el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">ia</span><span class="text-white">=</span> <span class="text-blue-700">150</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">iz</span><span class="text-white">=</span><span class="text-blue-700">70</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pe</span><span class="text-white">;</span><br>
                
                <span class="text-blue-400">pe</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">while</span><span class="text-purple-600">(</span><span class="text-blue-400">iz</span><span class="text-white">!=</span><span class="text-blue-400">ia</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">iz</span><span class="text-white">=</span><span class="text-blue-400">iz</span><span class="text-white">+</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">ia</span><span class="text-white">=</span><span class="text-blue-400">ia</span><span class="text-white">-</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pe</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Punto de encuentro, km: "</span><span class="text-white">+</span><span class="text-blue-400">iz</span><span class="text-white">+</span><span class="text-[#AD6D3B]">"\nDistancia: "</span><span class="text-white">+</span><span class="text-purple-600">(</span><span class="text-blue-400">pe</span><span class="text-white">*</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" km"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio3w.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio5w.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var ia= 150;
            var iz=70;
            var pe;
            pe=0;
            while(iz!=ia){
                iz=iz+1;
                ia=ia-1;
                pe++;
            }
            alert("Punto de encuentro, km: "+iz+"\nDistancia: "+(pe*2)+" km");
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>
