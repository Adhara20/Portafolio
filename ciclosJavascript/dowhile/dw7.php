<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 7</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 7</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                7. La cadena de tiendas de autoservicio "El mandilón" cuenta con sucursales en C ciudades diferentes de la República, en cada ciudad cuenta con T tiendas y cada tienda cuenta con N empleados, asimismo, cada una registra lo que vende de manera individual cada empleado, cuánto fue lo que vendió́ cada tienda, cuánto se vendió́ en cada ciudad y cuánto recaudó la cadena en un solo día. Realice un programa para determinar lo anterior utilizando el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">cantC</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Cantidad de ciudades: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">totalCadenaV</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">c</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">cantT</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Cantidad de tiendas de la ciudad "</span><span class="text-white">+</span><span class="text-blue-400">c</span><span class="text-white">+</span><span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">totalCiudadV</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">t</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">cantE</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Cantidad de empleados de la tienda "</span><span class="text-white">+</span><span class="text-blue-400">t</span><span class="text-white">+</span><span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">totalTiendaV</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">e</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">cantV</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Cantidad de ventas del empleado: "</span><span class="text-white">+</span><span class="text-blue-400">e</span><span class="text-white">+</span><span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">totalTiendaV</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">totalEmpleadoV</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">v</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">montoV</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa monto de la venta: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">totalEmpleadoV</span><span class="text-white">=</span><span class="text-blue-400">totalEmpleadoV</span><span class="text-white">+</span><span class="text-blue-400">montoV</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">v</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span> <span class="text-blue-400">v</span><span class="text-white"><=</span><span class="text-blue-400">cantV</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"El empleado "</span><span class="text-white">+</span><span class="text-blue-400">e</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" generó $"</span><span class="text-white">+</span><span class="text-blue-400">totalEmpleadoV</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" pesos en ventas"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">totalTiendaV</span><span class="text-white">=</span><span class="text-blue-400">totalTiendaV</span><span class="text-white">+</span><span class="text-blue-400">totalEmpleadoV</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">e</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span><span class="text-blue-400">e</span><span class="text-white"><=</span><span class="text-blue-400">cantE</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La tienda "</span><span class="text-white">+</span><span class="text-blue-400">t</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" generó $"</span><span class="text-white">+</span><span class="text-blue-400">totalTiendaV</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" pesos en ventas."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">totalCiudadV</span><span class="text-white">=</span><span class="text-blue-400">totalCiudadV</span><span class="text-white">+</span><span class="text-blue-400">totalTiendaV</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">t</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span> <span class="text-blue-400">t</span><span class="text-white"><=</span><span class="text-blue-400">cantT</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La ciudad "</span><span class="text-white">+</span><span class="text-blue-400">c</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" generó $"</span><span class="text-white">+</span><span class="text-blue-400">totalCiudadV</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" pesos en ventas."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">totalCadenaV</span><span class="text-white">=</span><span class="text-blue-400">totalCadenaV</span><span class="text-white">+</span><span class="text-blue-400">totalCiudadV</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">c</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span><span class="text-blue-400">c</span><span class="text-white"><=</span><span class="text-blue-400">cantC</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"La cadena generó $"</span><span class="text-white">+</span><span class="text-blue-400">totalCadenaV</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" pesos."</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw6.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw8.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var cantC= parseInt(prompt("Cantidad de ciudades: "));
            var totalCadenaV=0; 
            var c=1;
            do{
                var cantT= parseInt(prompt("Cantidad de tiendas de la ciudad "+c+": "));
                var totalCiudadV=0;
                var t=1;
                do{
                    var cantE= parseInt(prompt("Cantidad de empleados de la tienda "+t+": "));
                    var totalTiendaV=0;
                    var e=1;
                    do{
                        var cantV= parseInt(prompt("Cantidad de ventas del empleado: "+e+": "));
                        var totalTiendaV=0;                   
                        var totalEmpleadoV=0;
                        var v=1;
                        do{
                            var montoV= parseFloat(prompt("Ingresa monto de la venta: "));
                            totalEmpleadoV=totalEmpleadoV+montoV;    
                            v++;                    
                        }while( v<=cantV);
                        alert("El empleado "+e+" generó $"+totalEmpleadoV+" pesos en ventas");
                        totalTiendaV=totalTiendaV+totalEmpleadoV;
                         e++;
                    }while(e<=cantE);
                    alert("La tienda "+t+" generó $"+totalTiendaV+" pesos en ventas.");
                    totalCiudadV=totalCiudadV+totalTiendaV;
                    t++;
                }while( t<=cantT);
                alert("La ciudad "+c+" generó $"+totalCiudadV+" pesos en ventas.");
                totalCadenaV=totalCadenaV+totalCiudadV;
                c++;
            }while(c<=cantC);
            alert("La cadena generó $"+totalCadenaV+" pesos.");
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>