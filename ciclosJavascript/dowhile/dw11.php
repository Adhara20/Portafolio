<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 11</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 11</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                11. Una compañía fabrica focos de colores (verdes, blancos y rojos). Se desea contabilizar, de un lote de N focos, el número de focos de cada color que hay en existencia. Desarrolle un programa para determinar esto, utilizando el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">n</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el número total de focos: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">verdes</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">blancos</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">rojos</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">color</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">i</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">color</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el color del foco #"</span> <span class="text-white">+</span> <span class="text-blue-400">i</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" (verde, blanco o rojo): "</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">color</span> <span class="text-white">===</span> <span class="text-[#AD6D3B]">"verde"</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">verdes</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span> <span class="text-pink-300">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">color</span> <span class="text-white">===</span> <span class="text-[#AD6D3B]">"blanco"</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">blancos</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span> <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">color</span> <span class="text-white">===</span> <span class="text-[#AD6D3B]">"rojo"</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">rojos</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Color no válido, intente de nuevo."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">--</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span> <span class="text-blue-400">i</span> <span class="text-white"><=</span> <span class="text-blue-400">n</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">resultado</span> <span class="text-white">=</span> <span class="text-[#AD6D3B]">"--- RESULTADOS ---\n"</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-[#AD6D3B]">"Focos verdes: "</span> <span class="text-white">+</span> <span class="text-blue-400">verdes</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\n"</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-[#AD6D3B]">"Focos blancos: "</span> <span class="text-white">+</span> <span class="text-blue-400">blancos</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\n"</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-[#AD6D3B]">"Focos rojos: "</span> <span class="text-white">+</span> <span class="text-blue-400">rojos</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-blue-400">resultado</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw10.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw12.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var n = parseFloat(prompt("Ingrese el número total de focos: "));
            var verdes = 0;
            var blancos = 0;
            var rojos = 0;
            var color;
            var i = 1;
            do{         
                color = prompt("Ingrese el color del foco #" + i + " (verde, blanco o rojo): ");
                if (color === "verde") {
                    verdes++;
                } else if (color === "blanco") {
                    blancos++;
                } else if(color === "rojo") {
                    rojos++;
                } else {
                    alert("Color no válido, intente de nuevo.");
                    i--;
                }
                i++;
            }while( i <= n);
            
            var resultado = "--- RESULTADOS ---\n" +
                           "Focos verdes: " + verdes + "\n" +
                           "Focos blancos: " + blancos + "\n" +
                           "Focos rojos: " + rojos;
            
            alert(resultado);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>