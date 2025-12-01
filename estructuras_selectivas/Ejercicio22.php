<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 22</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 22</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                22. Dado como dato el tiempo de servicio de un trabajador, considere un aumento del 15% si la categoría del trabajador es A, un 12% en caso de que la categoría sea B, si la categoría es C, un aumento del 10% y para la categoría D se aumentará $15.00 Imprima el sueldo con el aumento incorporado, la categoría y el tiempo de servicio del trabajador.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">sueldo</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa tu sueldo:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">tiempo</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el tiempo de servicio trabajando en años:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">aumento</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">categoria</span> <span class="text-white">=</span> <span class="text-[#AD6D3B]">""</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">tiempo</span> <span class="text-white">>=</span> <span class="text-blue-700">20</span> <span class="text-white">&&</span> <span class="text-blue-400">tiempo</span> <span class="text-white"><=</span> <span class="text-blue-700">30</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">categoria</span> <span class="text-white">=</span> <span class="text-[#AD6D3B]">"A"</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">aumento</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.15</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">tiempo</span> <span class="text-white">>=</span> <span class="text-blue-700">15</span> <span class="text-white">&&</span> <span class="text-blue-400">tiempo</span> <span class="text-white"><</span> <span class="text-blue-700">20</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">categoria</span> <span class="text-white">=</span> <span class="text-[#AD6D3B]">"B"</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">aumento</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.12</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">tiempo</span> <span class="text-white">>=</span> <span class="text-blue-700">10</span> <span class="text-white">&&</span> <span class="text-blue-400">tiempo</span> <span class="text-white"><</span> <span class="text-blue-700">15</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">categoria</span> <span class="text-white">=</span> <span class="text-[#AD6D3B]">"C"</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">aumento</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">tiempo</span> <span class="text-white">>=</span> <span class="text-blue-700">0</span> <span class="text-white">&&</span> <span class="text-blue-400">tiempo</span> <span class="text-white"><</span> <span class="text-blue-700">10</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">categoria</span> <span class="text-white">=</span> <span class="text-[#AD6D3B]">"D"</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">aumento</span> <span class="text-white">=</span> <span class="text-blue-700">15</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa un tiempo válido"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">sueldoAumentado</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">+</span> <span class="text-blue-400">aumento</span><span class="text-white">;</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Tiempo de servicio: "</span> <span class="text-white">+</span> <span class="text-blue-400">tiempo</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" años"</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nCategoría asignada: "</span> <span class="text-white">+</span> <span class="text-blue-400">categoria</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"\nEl sueldo original es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">sueldo</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"\nEl aumento es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">aumento</span> <span class="text-white">+</span><br>
                &nbsp;&nbsp;<span class="text-[#AD6D3B]">"\nEl sueldo con el aumento es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">sueldoAumentado</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio21.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio23.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var sueldo = parseInt(prompt("Ingresa tu sueldo:"));
            var tiempo = parseInt(prompt("Ingresa el tiempo de servicio trabajando en años:"));
            
            var aumento = 0, categoria = "";
            
            if (tiempo >= 20 && tiempo <= 30) {
                categoria = "A";
                aumento = sueldo * 0.15;
            } else if (tiempo >= 15 && tiempo < 20) {
                categoria = "B";
                aumento = sueldo * 0.12;
            } else if (tiempo >= 10 && tiempo < 15) {
                categoria = "C";
                aumento = sueldo * 0.10;
            } else if (tiempo >= 0 && tiempo < 10) {
                categoria = "D";
                aumento = 15;
            } else {
                alert("Ingresa un tiempo válido");
                return;
            }
            
            var sueldoAumentado = sueldo + aumento;
            
            alert("Tiempo de servicio: " + tiempo + " años" + 
                  "\nCategoría asignada: " + categoria +
                  "\nEl sueldo original es: $" + sueldo +
                  "\nEl aumento es: $" + aumento +
                  "\nEl sueldo con el aumento es: $" + sueldoAumentado);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>