<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 9</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 9</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                9. "El náufrago satisfecho" ofrece hamburguesas sencillas (S), dobles (D) y triples (T), las cuales tienen un costo de $20, $25 y $28 respectivamente. La empresa acepta tarjetas de crédito con un cargo de 5% sobre la compra. Suponiendo que los clientes adquieren N hamburguesas, las cuales pueden ser de diferente tipo, realice un programa para determinar cuánto deben pagar.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">n</span> <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese cuantas hamburguesas compro"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">suma</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">ph</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">inc</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">i</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">th</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-blue-400">i</span><span class="text-white">+</span><span class="text-[#AD6D3B]">".-¿Que tipo de hamburguesa compro? s/d/t"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">th</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"s"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">ph</span> <span class="text-white">=</span> <span class="text-blue-700">20</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span> <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">th</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"d"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">ph</span> <span class="text-white">=</span> <span class="text-blue-700">25</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span> <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">th</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"t"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">ph</span> <span class="text-white">=</span> <span class="text-blue-700">28</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ERROR: tipo de hamburguesa no valida"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">--</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">suma</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span> <span class="text-white">+</span> <span class="text-blue-400">ph</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span><span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">n</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">t</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"¿Va a pagar con targeta de credito? si/no"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">t</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"si"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">inc</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span><span class="text-white">*</span><span class="text-blue-700">0.05</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-400">suma</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span> <span class="text-white">+</span> <span class="text-blue-400">inc</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`El cargo por la tarjeta es: $${</span><span class="text-blue-400">inc</span><span class="text-[#AD6D3B]">} \nEl total a pagar es: $${</span><span class="text-blue-400">suma</span><span class="text-[#AD6D3B]">}`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw8.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw10.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var n = parseInt(prompt("Ingrese cuantas hamburguesas compro"));
            var suma = 0, ph = 0, inc = 0, i = 1;
            do{
                var th = prompt(i+".-¿Que tipo de hamburguesa compro? s/d/t");
                if(th == "s"){
                    ph = 20;
                }else if(th == "d"){
                    ph = 25;
                }else if(th == "t"){
                    ph = 28;
                }else{
                    alert("ERROR: tipo de hamburguesa no valida");
                    i--;
                }
                suma = suma + ph;
                i++;
            }while(i<=n);
            var t = prompt("¿Va a pagar con targeta de credito? si/no");
            if(t == "si"){
                inc = suma*0.05;
            }
            suma = suma + inc;
            alert(`El cargo por la tarjeta es: $${inc} \nEl total a pagar es: $${suma}`);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>