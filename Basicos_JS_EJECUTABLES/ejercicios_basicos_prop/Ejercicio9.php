
<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Propuesto 9</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Propuestos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 9</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                9.- Sumar las edades de 7 personas.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">edad1</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la edad número 1: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la edad número 2: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad3</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la edad número 3: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad4</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la edad número 4: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad5</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la edad número 5: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad6</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la edad número 6: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">edad7</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la edad número 7: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">suma</span> 
                <span class="text-white">=</span> <span class="text-blue-400">edad1</span> <span class="text-white">+</span> <span class="text-blue-400">edad2</span> <span class="text-white">+</span> <span class="text-blue-400">edad3</span> <span class="text-white">+</span> <span class="text-blue-400">edad4</span> <span class="text-white">+</span> <span class="text-blue-400">edad5</span> <span class="text-white">+</span> <span class="text-blue-400">edad6</span> <span class="text-white">+</span> <span class="text-blue-400">edad7</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"La suma es: "</span> <span class="text-white">+</span> <span class="text-blue-400">suma</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos_prop/Ejercicio8.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos_prop/Ejercicio10.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var edad1 = parseFloat(prompt("Ingrese la edad número 1: "));
            var edad2 = parseFloat(prompt("Ingrese la edad número 2: "));
            var edad3 = parseFloat(prompt("Ingrese la edad número 3: "));
            var edad4 = parseFloat(prompt("Ingrese la edad número 4: "));
            var edad5 = parseFloat(prompt("Ingrese la edad número 5: "));
            var edad6 = parseFloat(prompt("Ingrese la edad número 6: "));
            var edad7 = parseFloat(prompt("Ingrese la edad número 7: "));
            var suma = edad1 + edad2 + edad3 + edad4 + edad5 + edad6 + edad7;
            alert("La suma es: " + suma);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>

<!-- <html>
    <title>Propuesta 9</title>
    <script>
        var edad1 = parseFloat(prompt("Ingrese la edad número 1: "));
        var edad2 = parseFloat(prompt("Ingrese la edad número 2: "));
        var edad3 = parseFloat(prompt("Ingrese la edad número 3: "));
        var edad4 = parseFloat(prompt("Ingrese la edad número 4: "));
        var edad5 = parseFloat(prompt("Ingrese la edad número 5: "));
        var edad6 = parseFloat(prompt("Ingrese la edad número 6: "));
        var edad7 = parseFloat(prompt("Ingrese la edad número 7: "));
        var suma = edad1+edad2+edad3+edad4+edad5+edad6+edad7
        alert("La suma es: " + suma);

    </script>
</html> -->