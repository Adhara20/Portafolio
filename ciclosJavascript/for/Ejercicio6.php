<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio For 6</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">Ejercicio 6</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                6. Una empresa necesita calcular el pago semanal a N trabajadores. Se requiere saber si todos ganan lo mismo por hora, luego ingresar días trabajados y horas por día (o horas diferentes por día), y calcular el total a pagar por empleado y global.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">n</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese la cantidad de trabajadores"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">sino</span><span class="text-white">=</span>  <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"¿Todos los trabajadores ganan lo mismo por hora?"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">dia</span><span class="text-white">,</span> <span class="text-blue-400">hr</span><span class="text-white">,</span> <span class="text-blue-400">sind</span><span class="text-white">,</span> <span class="text-blue-400">stt</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">,</span> <span class="text-blue-400">shr</span><span class="text-white">;</span><br>
                <span class="text-blue-700">var</span> <span class="text-blue-400">suma</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">sino</span><span class="text-white">.</span><span class="text-blue-400">toLowerCase</span><span class="text-purple-600">(</span><span class="text-purple-600">)</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"si"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">shr</span><span class="text-white">=</span><span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el salario por hora trabajada"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                <span class="text-blue-400">document</span><span class="text-white">.</span><span class="text-blue-400">write</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ejercicio 6< br>--------Informacion de los pagos--------< br>"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-amber-400">for</span><span class="text-purple-600">(</span><span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">n</span><span class="text-white">;</span> <span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">sino</span><span class="text-white">.</span><span class="text-blue-400">toLocaleLowerCase</span><span class="text-purple-600">(</span><span class="text-purple-600">)</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"no"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">shr</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el salario del empleado "</span><span class="text-white">+</span><span class="text-blue-400">i</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">dia</span> <span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el número de días que trabajo el empleado "</span><span class="text-white">+</span><span class="text-blue-400">i</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">hr</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`Ingrese la cantidad de horas que trabajo por día \n(En el caso de que el empleado haya trabajado un número de horas diferente cada día, Ingrese 0)`</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">hr</span> <span class="text-white">==</span> <span class="text-blue-700">0</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-400">for</span><span class="text-purple-600">(</span> <span class="text-blue-700">var</span> <span class="text-blue-400">j</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span> <span class="text-blue-400">j</span><span class="text-white"><=</span><span class="text-blue-400">dia</span><span class="text-white">;</span> <span class="text-blue-400">j</span><span class="text-white">++</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">hr</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingrese el total de horas que trabajo el día "</span><span class="text-white">+</span><span class="text-blue-400">j</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">suma</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span> <span class="text-white">+</span> <span class="text-blue-400">hr</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">sind</span> <span class="text-white">=</span> <span class="text-blue-400">suma</span><span class="text-white">*</span><span class="text-blue-400">shr</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">dia</span><span class="text-white">></span><span class="text-blue-700">7</span> <span class="text-white">|</span> <span class="text-blue-400">hr</span> <span class="text-white">></span> <span class="text-blue-700">24</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"ERROR: datos no correctos"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">--</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">sind</span> <span class="text-white">=</span> <span class="text-blue-400">shr</span><span class="text-white">*</span><span class="text-blue-400">hr</span><span class="text-white">*</span><span class="text-blue-400">dia</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">stt</span> <span class="text-white">=</span> <span class="text-blue-400">stt</span> <span class="text-white">+</span> <span class="text-blue-400">sind</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">document</span><span class="text-white">.</span><span class="text-blue-400">write</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`Al empleado ${i} se le debe pagar $${sind} esta semana< br>`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br>
                <span class="text-blue-400">document</span><span class="text-white">.</span><span class="text-blue-400">write</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`En total, la empresa debe pagar $${stt} a los empleados`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio5.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/for/Ejercicio7.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var n = parseInt(prompt("Ingrese la cantidad de trabajadores"));
            var sino =  prompt("¿Todos los trabajadores ganan lo mismo por hora?");
            var dia, hr, sind, stt=0, shr;
            var suma = 0;
            if(sino.toLowerCase() == "si"){
                shr=parseFloat(prompt("Ingresa el salario por hora trabajada"));
            }
            document.write("Ejercicio 6<br>--------Informacion de los pagos--------<br>")
            for(var i=1; i<=n; i++){
                if(sino.toLocaleLowerCase() == "no"){
                    shr = parseFloat(prompt("Ingresa el salario del empleado "+i));
                }
                dia = parseInt(prompt("Ingrese el número de días que trabajo el empleado "+i));
                hr = parseFloat(prompt(`Ingrese la cantidad de horas que trabajo por día 
                \n(En el caso de que el empleado haya trabajado un número de horas diferente cada día, Ingrese 0)`))
                if(hr == 0){
                    for( var j=1; j<=dia; j++){
                        hr = parseFloat(prompt("Ingrese el total de horas que trabajo el día "+j));
                        suma = suma + hr;
                    }
                    sind = suma*shr;
                }else if(dia>7 | hr > 24){
                    alert("ERROR: datos no correctos");
                    i--;
                }else{
                    sind = shr*hr*dia;
                }
                stt = stt + sind;
                document.write(`Al empleado ${i} se le debe pagar $${sind} esta semana<br>`);
            }
            document.write(`En total, la empresa debe pagar $${stt} a los empleados`);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>