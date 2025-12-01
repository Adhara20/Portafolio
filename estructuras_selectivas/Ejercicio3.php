<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 3</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 3</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                3. "La langosta ahumada" es una empresa dedicada a ofrecer banquetes; sus tarifas son las siguientes: el costo de platillo por persona es de $95.00, pero si el número de personas es mayor a 200 pero menor o igual a 300, el costo es de $85.00. Para más de 300 personas el costo por platillo es de $75.00. Se requiere un programa que ayude a determinar el presupuesto que se debe presentar a los clientes que deseen realizar un evento.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">cps</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"¿Cuántas personas van a comer?"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pp</span> 
                <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">cps</span> <span class="text-white">>=</span> <span class="text-blue-700">200</span> <span class="text-white">&</span><span class="text-blue-400">cps</span> <span class="text-white"><=</span> <span class="text-blue-700">300</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pp</span> <span class="text-white">=</span> <span class="text-blue-700">85</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">cps</span> <span class="text-white">></span> <span class="text-blue-700">300</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pp</span> <span class="text-white">=</span> <span class="text-blue-700">75</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pp</span> <span class="text-white">=</span> <span class="text-blue-700">95</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pt</span> <span class="text-white">=</span> <span class="text-blue-400">pp</span> <span class="text-white">*</span> <span class="text-blue-400">cps</span><span class="text-white">;</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`El platillo costará ${pp}\n\nCantidad de personas que van a comer = ${cps}\n\nTotal = ${pt}`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio2.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio4.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var cps = parseFloat(prompt("¿Cuántas personas van a comer?"));
            var pp = 0;
            
            if(cps >= 200 && cps <= 300){
                pp = 85;
            } else if(cps > 300){
                pp = 75;
            } else {
                pp = 95;
            }
            
            var pt = pp * cps;
            
            alert(`El platillo costará ${pp}\n\nCantidad de personas que van a comer = ${cps}\n\nTotal = ${pt}`);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>