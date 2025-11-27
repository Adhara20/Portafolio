<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 30</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 30</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                30.- Leer los coeficientes de un polinomio de grado tres de la formula P(x) = X³ + ax² + bx + c. Leer a continuación un cierto valor para la variable independiente x y calcular y escribir y = P(x).
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">const</span> <span class="text-blue-400">a</span><span class="text-white">=</span><span class="text-green-300">2</span><span class="text-white">;</span><br>
                <span class="text-blue-700">const</span> <span class="text-blue-400">b</span> <span class="text-white">=</span> <span class="text-green-300">5</span><span class="text-white">;</span><br>
                <span class="text-blue-700">const</span> <span class="text-blue-400">c</span> <span class="text-white">=</span> <span class="text-green-300">3</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"P(x)=x^3+ax^2+bx+c\nDónde a =2, b = 5, c = 3."</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">x</span> 
                <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span>
                <span class="text-purple-600">(</span>
                <span class="text-amber-100">prompt</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"Ingresa el valor de x: "</span>
                <span class="text-purple-600">)</span>
                <span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">x2</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.pow</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">x</span><span class="text-white">,</span><span class="text-green-300">2</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">x3</span> 
                <span class="text-white">=</span> <span class="text-amber-100">Math.pow</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">x</span><span class="text-white">,</span><span class="text-green-300">3</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">y</span> 
                <span class="text-white">=</span> <span class="text-blue-400">x3</span><span class="text-white">+</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">a</span><span class="text-white">*</span><span class="text-blue-400">x2</span><span class="text-purple-600">)</span><span class="text-white">+</span>
                <span class="text-purple-600">(</span><span class="text-blue-400">b</span><span class="text-white">*</span><span class="text-blue-400">x</span><span class="text-purple-600">)</span><span class="text-white">+</span><span class="text-blue-400">c</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span>
                <span class="text-purple-600">(</span>
                <span class="text-[#AD6D3B]">"y = P(x) = ("</span><span class="text-white">+</span><span class="text-blue-400">x</span><span class="text-white">+</span><span class="text-[#AD6D3B]">")^3 + a("</span><span class="text-white">+</span><span class="text-blue-400">x</span><span class="text-white">+</span><span class="text-[#AD6D3B]">")^2 + "</span><span class="text-white">+</span><span class="text-[#AD6D3B]">"b("</span><span class="text-white">+</span><span class="text-blue-400">x</span><span class="text-white">+</span><span class="text-[#AD6D3B]">") + c\n"</span><span class="text-white">+</span>
                <span class="text-[#AD6D3B]">"y = P(x) = "</span><span class="text-white">+</span><span class="text-blue-400">x3</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" + "</span><span class="text-white">+</span><span class="text-blue-400">x2</span><span class="text-white">+</span><span class="text-[#AD6D3B]">"a + "</span><span class="text-white">+</span><span class="text-blue-400">x</span><span class="text-white">+</span><span class="text-[#AD6D3B]">"b + c\n"</span><span class="text-white">+</span>
                <span class="text-[#AD6D3B]">"y = P(x) ="</span><span class="text-white">+</span><span class="text-blue-400">x3</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" + "</span><span class="text-white">+</span><span class="text-purple-600">(</span><span class="text-blue-400">a</span><span class="text-white">*</span><span class="text-blue-400">x2</span><span class="text-purple-600">)</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" + "</span><span class="text-white">+</span><span class="text-purple-600">(</span><span class="text-blue-400">b</span><span class="text-white">*</span><span class="text-blue-400">x</span><span class="text-purple-600">)</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" + "</span><span class="text-white">+</span><span class="text-blue-400">c</span><span class="text-white">+</span><span class="text-[#AD6D3B]">"\n"</span><span class="text-white">+</span>
                <span class="text-[#AD6D3B]">"y = P(x) = "</span><span class="text-white">+</span><span class="text-blue-400">y</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio29.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="siguiente.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio31.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            const a= 2;
            const b = 5;
            const c = 3;

            alert("P(x)=x^3+ax^2+bx+c\nDónde a =2, b = 5, c = 3.");
            var x = parseFloat(prompt("Ingresa el valor de x: "));

            var x2 = Math.pow(x,2);
            var x3 = Math.pow(x,3);
            var y  = x3+(a*x2)+(b*x)+c;

            alert("y = P(x) = ("+x+")^3 + a("+x+")^2 + "+"b("+x+") + c\n"+
            "y = P(x) = "+x3+" + "+x2+"a + "+x+"b + c\n"+
            "y = P(x) ="+x3+" + "+(a*x2)+" + "+(b*x)+" + "+c+"\n"+
            "y = P(x) = "+y);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>