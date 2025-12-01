<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 4</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 4</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                4. El director de una escuela está organizando un viaje de estudios, y requiere determinar cuánto debe cobrar a cada alumno y cuánto debe pagar a la compañía de viajes por el servicio. La forma de cobrar es la siguiente: si son 100 alumnos o más, el costo por cada alumno es de $65.00; de 50 a 99 alumnos, el costo es de $70.00, de 30 a 49, de $95.00, y si son menos de 30, el costo de la renta del autobús es de $4000.00, sin importar el número de alumnos.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">cas</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"¿Cuantas alumnos van a realizar el viaje?"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pind</span> 
                <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> 
                <span class="text-blue-400">pcom</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">cas</span> <span class="text-white">>=</span> <span class="text-blue-700">100</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pind</span> <span class="text-white">=</span> <span class="text-blue-700">65</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">cas</span> <span class="text-white">>=</span> <span class="text-blue-700">50</span> <span class="text-white">&</span><span class="text-blue-400">cas</span> <span class="text-white"><=</span> <span class="text-blue-700">99</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pind</span> <span class="text-white">=</span> <span class="text-blue-700">75</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">cas</span> <span class="text-white">>=</span> <span class="text-blue-700">30</span> <span class="text-white">&</span><span class="text-blue-400">cas</span> <span class="text-white"><=</span> <span class="text-blue-700">49</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pind</span> <span class="text-white">=</span> <span class="text-blue-700">95</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pind</span> <span class="text-white">=</span> <span class="text-blue-700">4000</span> <span class="text-white">/</span> <span class="text-blue-400">cas</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-400">pcom</span> <span class="text-white">=</span> <span class="text-blue-400">cas</span> <span class="text-white">*</span> <span class="text-blue-400">pind</span><span class="text-white">;</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`El boleto individual costará ${pind}\n\nEl total de alumnos que realizarán el viaje es de ${cas}\n\nEl total a pagar por todos los alumnos es de ${pcom}`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio3.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio5.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var cas = parseFloat(prompt("¿Cuantas alumnos van a realizar el viaje?"));
            var pind = 0, pcom = 0;

            if(cas >= 100){
                pind = 65;
            } else if(cas >= 50 && cas <= 99){
                pind = 75;
            } else if(cas >= 30 && cas <= 49){
                pind = 95;
            } else {
                pind = 4000 / cas;
            }
            
            pcom = cas * pind;
            
            alert(`El boleto individual costará ${pind}\n\nEl total de alumnos que realizarán el viaje es de ${cas}\n\nEl total a pagar por todos los alumnos es de ${pcom}`);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>