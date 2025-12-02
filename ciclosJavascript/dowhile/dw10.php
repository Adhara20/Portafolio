<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 10</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 10</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                10. Se requiere un programa para determinar, de N cantidades, cuántas son cero, cuántas son menores a cero, y cuántas son mayores a cero. Utilice el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">N</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Numero de cantidades: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">cM0</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">cm0</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">cI0</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">c</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la cantidad: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">c</span><span class="text-white">></span><span class="text-blue-700">0</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">cM0</span><span class="text-white">=</span><span class="text-blue-400">cM0</span><span class="text-white">+</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span> <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">c</span><span class="text-white"><</span><span class="text-blue-700">0</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">cm0</span><span class="text-white">=</span><span class="text-blue-400">cm0</span><span class="text-white">+</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">cI0</span><span class="text-white">=</span><span class="text-blue-400">cI0</span><span class="text-white">+</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span><span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">N</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Numero de cantidades >0: "</span><span class="text-white">+</span><span class="text-blue-400">cM0</span><span class="text-white">+</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-[#AD6D3B]">"\nNumero de cantidades <0: "</span><span class="text-white">+</span><span class="text-blue-400">cm0</span><span class="text-white">+</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-[#AD6D3B]">"\nNumero de cantidades =0: "</span><span class="text-white">+</span><span class="text-blue-400">cI0</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw9.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw11.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var N= parseInt(prompt("Numero de cantidades: "));       
            var cM0 = 0;
            var cm0 = 0;
            var cI0 = 0;
            var i=1;
            do{
                var c= parseFloat(prompt("Ingresa la cantidad: "));
                if(c>0){
                    cM0=cM0+1;
                }else if(c<0){
                    cm0=cm0+1;
                }else{
                    cI0=cI0+1;
                }
                 i++;
            }while(i<=N);
            alert("Numero de cantidades >0: "+cM0+
                "\nNumero de cantidades <0: "+cm0+
                "\nNumero de cantidades =0: "+cI0);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>