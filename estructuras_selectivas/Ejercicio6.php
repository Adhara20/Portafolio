<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 6</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 6</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                6. "El náufrago satisfecho" ofrece hamburguesas sencillas, dobles y triples, las cuales tienen un costo de $20.00, $25.00 y $28.00 respectivamente. La empresa acepta tarjetas de crédito con un cargo de 5% sobre la compra. Suponiendo que los clientes adquieren sólo un tipo de hamburguesa, realice un programa para determinar cuánto debe pagar una persona por N hamburguesas.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">hamburguesa</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingresa el tipo de hamburguesa (sencilla, doble, triple)"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">cantidad</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingresa la cantidad que deseas"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pago</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"como desea pagar? (efectivo o tarjeta)"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">precio</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> 
                <span class="text-blue-400">total</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> 
                <span class="text-blue-400">cargo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> 
                <span class="text-blue-400">totalcargo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">hamburguesa</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"sencilla"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">precio</span> <span class="text-white">=</span> <span class="text-blue-700">20.00</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">hamburguesa</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"doble"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">precio</span> <span class="text-white">=</span> <span class="text-blue-700">25.00</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">hamburguesa</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"triple"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">precio</span> <span class="text-white">=</span> <span class="text-blue-700">28.00</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El tipo de hamburguesa no es válido"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-400">total</span> <span class="text-white">=</span> <span class="text-blue-400">cantidad</span> <span class="text-white">*</span> <span class="text-blue-400">precio</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">pago</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"tarjeta"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">cargo</span> <span class="text-white">=</span> <span class="text-blue-400">total</span> <span class="text-white">*</span> <span class="text-blue-700">0.05</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalcargo</span> <span class="text-white">=</span> <span class="text-blue-400">total</span> <span class="text-white">+</span> <span class="text-blue-400">cargo</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">pago</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"efectivo"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">cargo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalcargo</span> <span class="text-white">=</span> <span class="text-blue-400">total</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Tipo de pago no válido"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`===GRACIAS POR SU COMPRA===\n\nTipo de hamburguesa: ${hamburguesa}\n\nPrecio Unitario: ${precio}\n\nCantidad: ${cantidad}\n\nSubtotal: ${total}\n\nCargo por tarjeta: ${cargo}\n\n===TOTAL A PAGAR --> ${totalcargo} ===`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio5.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio7.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var hamburguesa = prompt("ingresa el tipo de hamburguesa (sencilla, doble, triple)");
            var cantidad = parseInt(prompt("ingresa la cantidad que deseas"));
            var pago = prompt("como desea pagar? (efectivo o tarjeta)");

            var precio = 0, total = 0, cargo = 0, totalcargo = 0;
            
            if(hamburguesa == "sencilla"){
                precio = 20.00;
            } else if(hamburguesa == "doble"){
                precio = 25.00;
            } else if(hamburguesa == "triple"){
                precio = 28.00;
            } else {
                alert("El tipo de hamburguesa no es válido");
                return;
            }

            total = cantidad * precio;
            
            if(pago == "tarjeta"){
                cargo = total * 0.05;
                totalcargo = total + cargo;
            } else if (pago == "efectivo"){
                cargo = 0;
                totalcargo = total;
            } else {
                alert("Tipo de pago no válido");
                return;
            }
            
            alert(`===GRACIAS POR SU COMPRA===\n\nTipo de hamburguesa: ${hamburguesa}\n\nPrecio Unitario: ${precio}\n\nCantidad: ${cantidad}\n\nSubtotal: ${total}\n\nCargo por tarjeta: ${cargo}\n\n===TOTAL A PAGAR --> ${totalcargo} ===`);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>