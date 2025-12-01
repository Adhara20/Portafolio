<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 18</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 18</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                18. Dado como datos el sueldo de un trabajador, aplíquele un aumento del 17% si su sueldo es inferior a $1000.00 Imprima en este caso, el nuevo sueldo del trabajador.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">sueldo</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el sueldo del trabajador:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">sueldo</span> <span class="text-white"><</span> <span class="text-blue-700">1000.00</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">nuevoSueldo</span> <span class="text-white">=</span> <span class="text-blue-400">sueldo</span> <span class="text-white">*</span> <span class="text-blue-700">1.17</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El nuevo sueldo es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">nuevoSueldo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">" (Aumento del 17%)"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El sueldo no cambia: $"</span> <span class="text-white">+</span> <span class="text-blue-400">sueldo</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio17.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio19.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var sueldo = parseFloat(prompt("Ingresa el sueldo del trabajador:"));
            
            // Validar entrada
            if (isNaN(sueldo) || sueldo < 0) {
                alert("Sueldo no válido.");
                return;
            }
            
            if (sueldo < 1000.00) {
                var nuevoSueldo = sueldo * 1.17;
                alert("El nuevo sueldo es: $" + nuevoSueldo.toFixed(2) + " (Aumento del 17%)");
            } else {
                alert("El sueldo no cambia: $" + sueldo.toFixed(2));
            }
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>