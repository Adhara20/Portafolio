<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 10</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 10</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                10. El presidente de la república ha decidido estimular a todos los estudiantes de una universidad mediante la asignación de becas mensuales, para esto se tomarán en consideración los siguientes criterios: Para alumnos mayores de 18 años con promedio mayor o igual a 9, la beca será́ de $2000.00; con promedio mayor o igual a 7.5, de $1000.00; para los promedios menores de 7.5 pero mayores o iguales a 6.0, de $500.00; a los demás se les enviará una carta de invitación.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">nombre</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingrese su nombre"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingrese su edad"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">calificacion</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ingrese su calificacion"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">edad</span> <span class="text-white">>=</span> <span class="text-blue-700">18</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">>=</span> <span class="text-blue-700">9</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"recibiras una beca de $2.000"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">>=</span> <span class="text-blue-700">7</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"recibiras una beca de $1.000"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">>=</span> <span class="text-blue-700">6</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"recibiras una beca de $500"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white"><</span> <span class="text-blue-700">6</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"no podras recibir una beca"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">edad</span> <span class="text-white"><=</span> <span class="text-blue-700">17</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">>=</span> <span class="text-blue-700">9</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"se te asignara una beca de $3.000"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">>=</span> <span class="text-blue-700">8</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"se te asignara una beca de $2.000"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white">>=</span> <span class="text-blue-700">6</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"se te dara una beca de $100"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">calificacion</span> <span class="text-white"><</span> <span class="text-blue-700">6</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"no podras recibir una beca"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio9.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio11.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var nombre = prompt("ingrese su nombre");
            var edad = parseFloat(prompt("ingrese su edad"));
            var calificacion = parseFloat(prompt("ingrese su calificacion"));

            if(edad >= 18){
                if(calificacion >= 9){
                    alert("recibiras una beca de $2.000");
                } else if(calificacion >= 7){
                    alert("recibiras una beca de $1.000");
                } else if(calificacion >= 6){
                    alert("recibiras una beca de $500");
                } else if(calificacion < 6){
                    alert("no podras recibir una beca");
                }
            } else {
                if(edad <= 17){
                    // Condición vacía - solo estructura
                } else if(calificacion >= 9){
                    alert("se te asignara una beca de $3.000");
                } else if(calificacion >= 8){
                    alert("se te asignara una beca de $2.000");
                } else if(calificacion >= 6){
                    alert("se te dara una beca de $100");
                } else if(calificacion < 6){
                    alert("no podras recibir una beca");
                }
            }
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>