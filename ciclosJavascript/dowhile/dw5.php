<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 5</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 5</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                5. Un empleado de la tienda "Tiki Taka" realiza N ventas durante el día, se requiere saber cuántas de ellas fueron mayores a $1000, cuántas fueron mayores a $500 pero menores o iguales a $1000, y cuántas fueron menores o iguales a $500. Además, se requiere saber el monto de lo vendido en cada categoría y de forma global. Realice un programa que permita determinar lo anterior utilizando el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">N</span> <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el numero de ventas: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <br>
                <span class="text-blue-700">var</span>  <span class="text-blue-400">A</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">B</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">C</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">T1</span> <span class="text-white">=</span>  <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">T2</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">T3</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">TT</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">CN</span> <span class="text-white">=</span> <span class="text-blue-700">1</span> <span class="text-white">;</span><br>
                <span class="text-amber-400">do</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">V</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el monto de la venta "</span> <span class="text-white">+</span> <span class="text-blue-400">CN</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">V</span> <span class="text-white">></span> <span class="text-blue-700">1000</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">A</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">T1</span> <span class="text-white">+=</span> <span class="text-blue-400">V</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span> <span class="text-pink-300">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">V</span> <span class="text-white">></span> <span class="text-blue-700">500</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">B</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">T2</span> <span class="text-white">+=</span> <span class="text-blue-400">V</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span> <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">V</span> <span class="text-white">>=</span> <span class="text-blue-700">0</span>  <span class="text-amber-400">&&</span> <span class="text-blue-400">V</span> <span class="text-white"><=</span> <span class="text-blue-700">500</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">C</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">T3</span> <span class="text-white">+=</span> <span class="text-blue-400">V</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Monto inválido."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">CN</span><span class="text-white">--</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">CN</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-amber-400">while</span> <span class="text-purple-600">(</span> <span class="text-blue-400">CN</span> <span class="text-white"><=</span> <span class="text-blue-400">N</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <br>
                <span class="text-blue-400">TT</span> <span class="text-white">=</span> <span class="text-blue-400">T1</span><span class="text-white">+</span> <span class="text-blue-400">T2</span><span class="text-white">+</span> <span class="text-blue-400">T3</span><span class="text-white">;</span><br>
                <br>
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"\n----- Resultados -----"</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nVentas mayores a $1000: "</span> <span class="text-white">+</span> <span class="text-blue-400">A</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nTotal: "</span> <span class="text-white">+</span> <span class="text-blue-400">T1</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nVentas mayores a $500 pero menores o iguales $1000: "</span> <span class="text-white">+</span> <span class="text-blue-400">B</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nTotal: "</span> <span class="text-white">+</span> <span class="text-blue-400">T2</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nVentas menores o iguales a $500:  "</span> <span class="text-white">+</span> <span class="text-blue-400">C</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nTotal: "</span> <span class="text-white">+</span> <span class="text-blue-400">T3</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nMonto total vendido (TT): "</span> <span class="text-white">+</span> <span class="text-blue-400">TT</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw4.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw6.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var N = parseInt(prompt("Ingrese el numero de ventas: "));

            var  A = 0, B = 0, C = 0;        //Contadores 
            var T1 =  0, T2 = 0, T3 = 0, TT = 0;      //Totales 

            var CN = 1 ;
            do {
                var V = parseFloat(prompt("Ingrese el monto de la venta " + CN + ": "));

                if (V > 1000) {
                    A++;
                    T1 += V;
                } else if (V > 500){
                    B++;
                    T2 += V;
                }else if(V >= 0  && V <= 500){
                    C++;
                    T3 += V;
                }else {
                    alert("Monto inválido.");
                    CN--;
                }
                CN++;
            } while ( CN <= N);

            TT = T1+ T2+ T3;
            
            alert("\n----- Resultados -----"
                + "\nVentas mayores a $1000: " + A + "\nTotal: " + T1
                + "\nVentas mayores a $500 pero menores o iguales $1000: " + B + "\nTotal: " + T2
                + "\nVentas menores o iguales a $500:  " + C + "\nTotal: " + T3
                + "\nMonto total vendido (TT): " + TT
            );
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>