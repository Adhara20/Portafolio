<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 2</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 2</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                2. Se requiere un programa para obtener la estatura promedio de un grupo de personas, cuyo número de miembros se desconoce, el ciclo debe efectuarse siempre y cuando se tenga una estatura registrada.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">su</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">pr</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">c</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">es1</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa la estatura de la persona:"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">es1</span> <span class="text-white">==</span> <span class="text-blue-700">null</span> <span class="text-white">||</span> <span class="text-blue-400">es1</span><span class="text-amber-100">.trim</span><span class="text-purple-600">(</span><span class="text-purple-600">)</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">""</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Finalizado"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-400">break</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">es2</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-blue-400">es1</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-amber-100">isNaN</span><span class="text-purple-600">(</span><span class="text-blue-400">es2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Por favor ingresa un número válido."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-400">continue</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <br>
                &nbsp;&nbsp;<span class="text-blue-400">su</span> <span class="text-white">=</span><span class="text-blue-400">su</span> <span class="text-white">+</span> <span class="text-blue-400">es2</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pr</span> <span class="text-white">=</span> <span class="text-blue-400">su</span> <span class="text-white">/</span> <span class="text-blue-400">c</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Estatura de la persona "</span> <span class="text-white">+</span> <span class="text-blue-400">c</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" registrada."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">c</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span><span class="text-blue-400">c</span><span class="text-white">></span><span class="text-blue-700">0</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La estatura promedio es "</span> <span class="text-white">+</span> <span class="text-blue-400">pr</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw1.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw3.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var su = 0, pr = 0, c = 1;
            do{
                var es1 = prompt("Ingresa la estatura de la persona:");    
                if(es1 == null || es1.trim() == ""){
                    alert("Finalizado");
                    break;
                }  
                var es2= parseFloat(es1);
                if(isNaN(es2)){
                    alert("Por favor ingresa un número válido.");
                    continue;
                }
                    su =su + es2;
                    pr = su / c;
                    alert("Estatura de la persona " + c + " registrada.");
                    c++;   
            }while(c>0);
            alert("La estatura promedio es " + pr.toFixed(2));
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>