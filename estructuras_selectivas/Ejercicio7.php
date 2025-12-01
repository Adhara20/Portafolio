<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 7</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 7</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                7. Fábricas "El cometa" produce artículos con claves (1, 2, 3, 4, 5 y 6). Se requiere un programa para calcular los precios de venta, para esto hay que considerar lo siguiente: Costo de producción = materia prima + mano de obra + gastos de fabricación. Precio de venta = costo de producción + 45% de costo de producción.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">clave</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingrese la clave de los articulos (1-6):"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">materiaprima</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingrese el costo de la materia prima"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">manodeobra</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">porgastofabricacion</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">3</span> <span class="text-white">||</span> <span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">4</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">manodeobra</span> <span class="text-white">=</span> <span class="text-blue-700">0.75</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">1</span> <span class="text-white">||</span> <span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">manodeobra</span> <span class="text-white">=</span> <span class="text-blue-700">0.80</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">2</span> <span class="text-white">||</span> <span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">6</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">manodeobra</span> <span class="text-white">=</span> <span class="text-blue-700">0.85</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">2</span> <span class="text-white">||</span> <span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">porgastofabricacion</span> <span class="text-white">=</span> <span class="text-blue-700">0.30</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">3</span> <span class="text-white">||</span> <span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">6</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">porgastofabricacion</span> <span class="text-white">=</span> <span class="text-blue-700">0.35</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">1</span> <span class="text-white">||</span> <span class="text-blue-400">clave</span> <span class="text-white">==</span> <span class="text-blue-700">4</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">porgastofabricacion</span> <span class="text-white">=</span> <span class="text-blue-700">0.28</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">manoObra</span> <span class="text-white">=</span> <span class="text-blue-400">materiaprima</span> <span class="text-white">*</span> <span class="text-blue-400">manodeobra</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">gastoFabricacion</span> <span class="text-white">=</span> <span class="text-blue-400">materiaprima</span> <span class="text-white">*</span> <span class="text-blue-400">porgastofabricacion</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">costoProduccion</span> <span class="text-white">=</span> <span class="text-blue-400">materiaprima</span> <span class="text-white">+</span> <span class="text-blue-400">manoObra</span> <span class="text-white">+</span> <span class="text-blue-400">gastoFabricacion</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">precioVenta</span> <span class="text-white">=</span> <span class="text-blue-400">costoProduccion</span> <span class="text-white">+</span> <span class="text-purple-600">(</span><span class="text-blue-400">costoProduccion</span> <span class="text-white">*</span> <span class="text-blue-700">0.45</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Clave del artículo: "</span> <span class="text-white">+</span> <span class="text-blue-400">clave</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\\n"</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">"Materia prima$: "</span> <span class="text-white">+</span> <span class="text-blue-400">materiaprima</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\\n"</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">"Mano de obra:$"</span> <span class="text-white">+</span> <span class="text-blue-400">manoObra</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\\n"</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">"Gasto fabricacion:$"</span> <span class="text-white">+</span> <span class="text-blue-400">porgastofabricacion</span> <span class="text-white">*</span> <span class="text-blue-700">100</span> <span class="text-white">+</span> <span class="text-blue-400">gastoFabricacion</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\\n"</span> <span class="text-white">+</span>
                <span class="text-[#AD6D3B]">"Costo produccion:$"</span> <span class="text-white">+</span> <span class="text-blue-400">costoProduccion</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\\n"</span> <span class="text-white">+</span> 
                <span class="text-[#AD6D3B]">"Precio venta: $"</span> <span class="text-white">+</span> <span class="text-blue-400">precioVenta</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio6.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio8.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var clave = parseFloat(prompt("ingrese la clave de los articulos (1-6):"));
            var materiaprima = parseFloat(prompt("ingrese el costo de la materia prima"));

            var manodeobra = 0;
            var porgastofabricacion = 0;

            if (clave == 3 || clave == 4) {
                manodeobra = 0.75; 
            } else if (clave == 1 || clave == 5) {
                manodeobra = 0.80; 
            } else if (clave == 2 || clave == 6) {
                manodeobra = 0.85; 
            }

            if (clave == 2 || clave == 5) {
                porgastofabricacion = 0.30; 
            } else if (clave == 3 || clave == 6) {
                porgastofabricacion = 0.35; 
            } else if (clave == 1 || clave == 4) {
                porgastofabricacion = 0.28; 
            }

            var manoObra = materiaprima * manodeobra;
            var gastoFabricacion = materiaprima * porgastofabricacion;
            var costoProduccion = materiaprima + manoObra + gastoFabricacion;
            var precioVenta = costoProduccion + (costoProduccion * 0.45);

            alert("Clave del artículo: " + clave + "\n" +
                "Materia prima$: " + materiaprima + "\n" + 
                "Mano de obra:$" + manoObra + "\n" + 
                "Gasto fabricacion:$" + (porgastofabricacion * 100) + "% - $" + gastoFabricacion + "\n" +
                "Costo produccion:$" + costoProduccion + "\n" + 
                "Precio venta: $" + precioVenta);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>