<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 21</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 21</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                21. Escribir un programa que dados tres números enteros muestre por pantalla el mayor, el de medio y el menor de los tres.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">num1</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el primer número:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el segundo número:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">num3</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el tercer número:"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">mayor</span><span class="text-white">,</span> <span class="text-blue-400">medio</span><span class="text-white">,</span> <span class="text-blue-400">menor</span><span class="text-white">;</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">num1</span> <span class="text-white">>=</span> <span class="text-blue-400">num2</span> <span class="text-white">&&</span> <span class="text-blue-400">num1</span> <span class="text-white">>=</span> <span class="text-blue-400">num3</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">mayor</span> <span class="text-white">=</span> <span class="text-blue-400">num1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">num2</span> <span class="text-white">>=</span> <span class="text-blue-400">num3</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">medio</span> <span class="text-white">=</span> <span class="text-blue-400">num2</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">menor</span> <span class="text-white">=</span> <span class="text-blue-400">num3</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">medio</span> <span class="text-white">=</span> <span class="text-blue-400">num3</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">menor</span> <span class="text-white">=</span> <span class="text-blue-400">num2</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">num2</span> <span class="text-white">>=</span> <span class="text-blue-400">num1</span> <span class="text-white">&&</span> <span class="text-blue-400">num2</span> <span class="text-white">>=</span> <span class="text-blue-400">num3</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">mayor</span> <span class="text-white">=</span> <span class="text-blue-400">num2</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">num1</span> <span class="text-white">>=</span> <span class="text-blue-400">num3</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">medio</span> <span class="text-white">=</span> <span class="text-blue-400">num1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">menor</span> <span class="text-white">=</span> <span class="text-blue-400">num3</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">medio</span> <span class="text-white">=</span> <span class="text-blue-400">num3</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">menor</span> <span class="text-white">=</span> <span class="text-blue-400">num1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">mayor</span> <span class="text-white">=</span> <span class="text-blue-400">num3</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">num1</span> <span class="text-white">>=</span> <span class="text-blue-400">num2</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">medio</span> <span class="text-white">=</span> <span class="text-blue-400">num1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">menor</span> <span class="text-white">=</span> <span class="text-blue-400">num2</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span> <span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">medio</span> <span class="text-white">=</span> <span class="text-blue-400">num2</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">menor</span> <span class="text-white">=</span> <span class="text-blue-400">num1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El número mayor es: "</span> <span class="text-white">+</span> <span class="text-blue-400">mayor</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nEl número del medio es: "</span> <span class="text-white">+</span> <span class="text-blue-400">medio</span> <span class="text-white">+</span> <span class="text-[#AD6D3B]">"\nEl número menor es: "</span> <span class="text-white">+</span> <span class="text-blue-400">menor</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio20.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio22.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var num1 = parseFloat(prompt("Ingresa el primer número:"));
            var num2 = parseFloat(prompt("Ingresa el segundo número:"));
            var num3 = parseFloat(prompt("Ingresa el tercer número:"));
            
            var mayor, medio, menor;
            
            if (num1 >= num2 && num1 >= num3) {
                mayor = num1;
                if (num2 >= num3) {
                    medio = num2;
                    menor = num3;
                } else {
                    medio = num3;
                    menor = num2;
                }
            } else if (num2 >= num1 && num2 >= num3) {
                mayor = num2;
                if (num1 >= num3) {
                    medio = num1;
                    menor = num3;
                } else {
                    medio = num3;
                    menor = num1;
                }
            } else {
                mayor = num3;
                if (num1 >= num2) {
                    medio = num1;
                    menor = num2;
                } else {
                    medio = num2;
                    menor = num1;
                }
            }
            
            alert("El número mayor es: " + mayor + "\nEl número del medio es: " + medio + "\nEl número menor es: " + menor);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>