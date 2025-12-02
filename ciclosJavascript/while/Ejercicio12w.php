<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio While 12</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 12</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                12. Se requiere un programa para determinar cuánto ahorrará en pesos una persona diariamente, y en un año, si ahorra 3¢ el primero de enero, 9¢ el dos de enero, 27¢ el 3 de enero y así́ sucesivamente todo el año. Utilice el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">ahorroDiario</span> <span class="text-white">=</span> <span class="text-blue-700">0.03</span><span class="text-white">,</span> <span class="text-blue-400">ahorroTotal</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">mensaje</span> <span class="text-white">=</span> <span class="text-[#AD6D3B]">""</span><span class="text-white">,</span> <span class="text-blue-400">dia</span> <span class="text-white">=</span> <span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">while</span> <span class="text-purple-600">(</span><span class="text-blue-400">dia</span> <span class="text-white"><=</span> <span class="text-blue-700">365</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">ahorroTotal</span> <span class="text-white">+=</span> <span class="text-blue-400">ahorroDiario</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-400">if</span> <span class="text-purple-600">(</span><span class="text-blue-400">dia</span> <span class="text-white"><=</span> <span class="text-blue-700">22</span><span class="text-purple-600">)</span> <span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">mensaje</span> <span class="text-white">+=</span> <span class="text-[#AD6D3B]">"Dia "</span> <span class="text-white">+</span> <span class="text-blue-400">dia</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">": Ahorra $"</span> <span class="text-white">+</span> <span class="text-blue-400">ahorroDiario</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\n"</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">ahorroDiario</span> <span class="text-white">*=</span> <span class="text-blue-700">3</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">dia</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-400">mensaje</span> <span class="text-white">+=</span> <span class="text-[#AD6D3B]">"\nEl ahorro total en un año es de: $"</span> <span class="text-white">+</span> <span class="text-blue-400">ahorroTotal</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-blue-400">mensaje</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio11w.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio13w.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var ahorroDiario = 0.03, ahorroTotal = 0, mensaje = "", dia = 1;
            while (dia <= 365) {
                ahorroTotal += ahorroDiario;
                if (dia <= 22) {
                    mensaje += "Dia " + dia + ": Ahorra $" + ahorroDiario + "\n";
                }
                ahorroDiario *= 3;
                dia++;
            }
            mensaje += "\nEl ahorro total en un año es de: $" + ahorroTotal;
            alert(mensaje);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>