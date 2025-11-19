<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 en javascript </title>
    
</head>
</html>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <!-- resto del contenido -->
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 1</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
            1.- Dada la matrícula y 5 calificaciones de un alumno obtenidas a lo largo del
            cuatrimestre, construya un programa que imprima la matrícula del alumno y
            el promedio de sus calificaciones.
        </p>
        </div>

    </div>
    <!-- Copía desde el Div este -->
    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800 ">
        <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
            <span class="text-blue-700">< script></span><br>

            <span class="text-blue-700">var</span> <span class="text-blue-400">mat</span> 
            <span class="text-white">=</span> 
            <span class="text-amber-100">prompt</span>
            <span class="text-purple-600">(</span>
            <span class="text-[#AD6D3B]">"Ingresa tu matrícula"</span>
            <span class="text-purple-600">)</span><span class="text-white">;</span><br>
            
            <span class="text-blue-700">var</span> <span class="text-blue-400">cal1</span> 
            <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
            <span class="text-blue-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la calificación 1"</span><span class="text-purple-600">)</span>
            <span class="text-blue-600">)</span><span class="text-white">;</span><br>
            
            <span class="text-blue-700">var</span> <span class="text-blue-400">cal2</span> 
            <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
            <span class="text-blue-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la calificación 2"</span><span class="text-purple-600">)</span>
            <span class="text-blue-600">)</span><span class="text-white">;</span><br>
            
            <span class="text-blue-700">var</span> <span class="text-blue-400">cal3</span> 
            <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
            <span class="text-blue-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la calificación 3"</span><span class="text-purple-600">)</span>
            <span class="text-blue-600">)</span><span class="text-white">;</span><br>
            
            <span class="text-blue-700">var</span> <span class="text-blue-400">cal4</span> 
            <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
            <span class="text-blue-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la calificación 4"</span><span class="text-purple-600">)</span>
            <span class="text-blue-600">)</span><span class="text-white">;</span><br>
            
            <span class="text-blue-700">var</span> <span class="text-blue-400">cal5</span> 
            <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span> 
            <span class="text-blue-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la calificación 5"</span><span class="text-purple-600">)</span>
            <span class="text-blue-600">)</span><span class="text-white">;</span><br>
            
            <span class="text-blue-700">var</span> <span class="text-blue-400">prom</span> 
            <span class="text-white">=</span> 
            <span class="text-purple-600">(</span>
            <span class="text-blue-400">cal1</span> <span class="text-white">+</span> 
            <span class="text-blue-400">cal2</span> <span class="text-white">+</span> 
            <span class="text-blue-400">cal3</span> <span class="text-white">+</span> 
            <span class="text-blue-400">cal4</span> <span class="text-white">+</span> 
            <span class="text-blue-400">cal5</span>
            <span class="text-purple-600">)</span> 
            <span class="text-white">/</span> 
            <span class="text-white"><span class="text-green-300">5</span>;</span><br>
            
            <span class="text-amber-100">alert</span>
            <span class="text-purple-600">(</span>
            <span class="text-[#AD6D3B]">"Matrícula: "</span> <span class="text-white">+</span> <span class="text-blue-400">mat</span> 
            <span class="text-white">+</span> 
            <span class="text-[#AD6D3B]">" \n Promedio: "</span> <span class="text-white">+</span> <span class="text-blue-400">prom</span>
            <span class="text-purple-600">)</span><span class="text-white">;</span><br>
            
            <span class="text-blue-700">< /script></span>

        </p>
        <br>
    </div>
    
            
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4 max-w-md mx-auto mt-4"">
            <div>
                <button class="buttonEjecutar" onclick="ejecutar()">
                Ejecutar
                </button>
            </div>
            <div>
                <button class="buttonEjecutar" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio2.html'">
                    siguiente ejercicio
                </button>
            </div>
    </div>
    <script>
        function ejecutar(){
            var mat = prompt("Ingresa tu matrícula")
            var cal1 = parseFloat(prompt("Ingrese la calificación 1"))
            var cal2 = parseFloat(prompt("Ingrese la calificación 2"))
            var cal3 = parseFloat(prompt("Ingrese la calificación 3"))
            var cal4 = parseFloat(prompt("Ingrese la calificación 4"))
            var cal5 = parseFloat(prompt("Ingrese la calificación 5"))

            var prom = (cal1 + cal2 + cal3 + cal4 + cal5)/5
            alert("Matrícula: " + mat + " \n " + "Promedio: " + prom)
        }

        
    </script>

    <?php
        include('../../includes/footer.php');
    ?>


