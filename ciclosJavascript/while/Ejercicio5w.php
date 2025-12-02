
<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio While 5</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 5</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                5. Un empleado de la tienda "Tiki Taka" realiza N ventas durante el día, se requiere saber cuántas de ellas fueron mayores a $1000, cuántas fueron mayores a $500 pero menores o iguales a $1000, y cuántas fueron menores o iguales a $500. Además, se requiere saber el monto de lo vendido en cada categoría y de forma global. Realice un programa que permita determinar lo anterior utilizando el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">n</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">'Cantidad de ventas: '</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">a</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">b</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">c</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">t1</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">t2</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">t3</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">while</span><span class="text-purple-600">(</span><span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">n</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">v</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Cantidad de la venta "</span><span class="text-white">+</span><span class="text-blue-400">i</span><span class="text-white">+</span><span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-400">if</span><span class="text-purple-600">(</span><span class="text-blue-400">v</span><span class="text-white">></span><span class="text-blue-700">1000</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">a</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">t1</span><span class="text-white">=</span> <span class="text-blue-400">t1</span><span class="text-white">+</span><span class="text-blue-400">v</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-amber-400">else</span> <span class="text-amber-400">if</span><span class="text-purple-600">(</span><span class="text-blue-400">v</span><span class="text-white"><=</span><span class="text-blue-700">1000</span> <span class="text-amber-400">&&</span> <span class="text-blue-400">v</span><span class="text-white">></span><span class="text-blue-700">500</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">b</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">t2</span><span class="text-white">=</span><span class="text-blue-400">t2</span><span class="text-white">+</span><span class="text-blue-400">v</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-amber-400">else</span> <span class="text-amber-400">if</span><span class="text-purple-600">(</span><span class="text-blue-400">v</span><span class="text-white"><=</span><span class="text-blue-700">500</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">c</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">t3</span><span class="text-white">=</span><span class="text-blue-400">t3</span><span class="text-white">+</span><span class="text-blue-400">v</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-amber-400">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Monto no valido."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">--</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Total de ventas categoria A: "</span><span class="text-white">+</span><span class="text-blue-400">a</span><span class="text-white">+</span><span class="text-[#AD6D3B]">". Monto total de categoria A: "</span><span class="text-white">+</span><span class="text-blue-400">t1</span><span class="text-white">+</span><br>
                <span class="text-[#AD6D3B]">".\nTotal de ventas categoria B: "</span><span class="text-white">+</span><span class="text-blue-400">b</span><span class="text-white">+</span><span class="text-[#AD6D3B]">". Monto total de categoria B: "</span><span class="text-white">+</span><span class="text-blue-400">t2</span><span class="text-white">+</span><br>
                <span class="text-[#AD6D3B]">"\nTotal de ventas categoria C: "</span><span class="text-white">+</span><span class="text-blue-400">c</span><span class="text-white">+</span><span class="text-[#AD6D3B]">". Monto total de categoria C: "</span><span class="text-white">+</span><span class="text-blue-400">t3</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio4w.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio6w.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var n= parseInt(prompt('Cantidad de ventas: '));
            var a=0, b=0, c=0, t1=0, t2=0, t3=0, i=1;
            while(i<=n){
                var v= parseFloat(prompt("Cantidad de la venta "+i+": "));
                if(v>1000){
                        a++;
                        t1= t1+v;
                    }else if(v<=1000 && v>500){
                        b++;
                        t2=t2+v;
                    }else if(v<=500){
                        c++;
                        t3=t3+v;
                    }else{
                        alert("Monto no valido.");
                        i--;
                    }
                    i++;
            }
            alert("Total de ventas categoria A: "+a+". Monto total de categoria A: "+t1+
            ".\nTotal de ventas categoria B: "+b+". Monto total de categoria B: "+t2+
            "\nTotal de ventas categoria C: "+c+". Monto total de categoria C: "+t3);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>
