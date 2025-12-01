<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 12</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 12</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                12. Una compañía de seguros para autos ofrece dos tipos de póliza: cobertura amplia (A) y daños a terceros (B). Para el plan A, la cuota base es de $1,200, y para el B, de $950. A ambos planes se les carga 10% del costo si la persona que conduce tiene por hábito beber alcohol, 5% si utiliza lentes, 5% si padece alguna enfermedad, y si tiene más de 40 años, se le carga 20%, de lo contrario sólo 10%.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">tipo</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el tipo de póliza (A o B):"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">costoBase</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">tipo</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"A"</span> <span class="text-white">||</span> <span class="text-blue-400">tipo</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"a"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">costoBase</span> <span class="text-white">=</span> <span class="text-blue-700">1200</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">tipo</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"B"</span> <span class="text-white">||</span> <span class="text-blue-400">tipo</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"b"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">costoBase</span> <span class="text-white">=</span> <span class="text-blue-700">950</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Tipo de póliza no válido."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">throw new</span> <span class="text-blue-400">Error</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Tipo de póliza inválido"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">alcohol</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"¿Tiene hábito de beber alcohol? (si/no):"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">lentes</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"¿Usa lentes? (si/no):"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">enfermedad</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"¿Tiene alguna enfermedad? (si/no):"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad</span> <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa tu edad:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-amber-100">isNaN</span><span class="text-purple-600">(</span><span class="text-blue-400">edad</span><span class="text-purple-600">)</span> <span class="text-white">||</span> <span class="text-blue-400">edad</span> <span class="text-white"><=</span> <span class="text-blue-700">0</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Edad no válida."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">throw new</span> <span class="text-blue-400">Error</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Edad inválida"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">recargo</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">alcohol</span><span class="text-amber-100">.toLowerCase</span><span class="text-purple-600">(</span><span class="text-purple-600">)</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"si"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">recargo</span> <span class="text-white">+=</span> <span class="text-blue-400">costoBase</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">lentes</span><span class="text-amber-100">.toLowerCase</span><span class="text-purple-600">(</span><span class="text-purple-600">)</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"si"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">recargo</span> <span class="text-white">+=</span> <span class="text-blue-400">costoBase</span> <span class="text-white">*</span> <span class="text-blue-700">0.05</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">enfermedad</span><span class="text-amber-100">.toLowerCase</span><span class="text-purple-600">(</span><span class="text-purple-600">)</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"si"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">recargo</span> <span class="text-white">+=</span> <span class="text-blue-400">costoBase</span> <span class="text-white">*</span> <span class="text-blue-700">0.05</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">edad</span> <span class="text-white">></span> <span class="text-blue-700">40</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">recargo</span> <span class="text-white">+=</span> <span class="text-blue-400">costoBase</span> <span class="text-white">*</span> <span class="text-blue-700">0.20</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">recargo</span> <span class="text-white">+=</span> <span class="text-blue-400">costoBase</span> <span class="text-white">*</span> <span class="text-blue-700">0.10</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">total</span> <span class="text-white">=</span> <span class="text-blue-400">costoBase</span> <span class="text-white">+</span> <span class="text-blue-400">recargo</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El costo total de la póliza es: $"</span> <span class="text-white">+</span> <span class="text-blue-400">total</span><span class="text-amber-100">.toFixed</span><span class="text-purple-600">(</span><span class="text-blue-700">2</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio11.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio13.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var tipo = prompt("Ingresa el tipo de póliza (A o B):");
            var costoBase = 0;
            
            // Validar tipo de póliza
            if (tipo == "A" || tipo == "a") {
                costoBase = 1200;
            } else if (tipo == "B" || tipo == "b") {
                costoBase = 950;
            } else {
                alert("Tipo de póliza no válido.");
                return; // Terminar ejecución
            }
            
            var alcohol = prompt("¿Tiene hábito de beber alcohol? (si/no):");
            var lentes = prompt("¿Usa lentes? (si/no):");
            var enfermedad = prompt("¿Tiene alguna enfermedad? (si/no):");
            var edad = parseInt(prompt("Ingresa tu edad:"));
            
            // Validar que la edad sea un número válido
            if (isNaN(edad) || edad <= 0) {
                alert("Edad no válida.");
                return;
            }
            
            var recargo = 0;
            
            // Aplicar recargos según condiciones
            if (alcohol.toLowerCase() == "si") {
                recargo += costoBase * 0.10;
            }
            if (lentes.toLowerCase() == "si") {
                recargo += costoBase * 0.05;
            }
            if (enfermedad.toLowerCase() == "si") {
                recargo += costoBase * 0.05;
            }
            
            // Recargo por edad
            if (edad > 40) {
                recargo += costoBase * 0.20;
            } else {
                recargo += costoBase * 0.10;
            }
            
            var total = costoBase + recargo;
            alert("El costo total de la póliza es: $" + total.toFixed(2));
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>