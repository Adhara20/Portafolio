<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Do While 6</title>
</head>
<body>
    <div class="pt-20 px-6">
        <div class="flex">
            <h1 class="titulo text-3xl text-[#26408b] font-semibold">
                Estructuras de Repetición JavaScript -
            </h1> 
        </div>
        <hr class="linea-separadora">
        <h3 class="text-2xl text-[#0d0221] font-semibold mb-4">ejercicio 6</h3>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                6. Una empresa les paga a sus empleados con base en las horas trabajadas en la semana. Para esto, se registran los días que laboró y las horas de cada día. Realice un algoritmo para determinar el sueldo semanal de N trabajadores y además calcule cuánto pagó la empresa por los N empleados. Utilice el ciclo apropiado.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">n</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Numero de trabajadores: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">ph</span><span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Pago por hora: "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">pt</span><span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">i</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                
                <span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">dt</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Dias laborados del trabajador "</span><span class="text-white">+</span><span class="text-blue-400">i</span><span class="text-white">+</span><span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">sh</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">ss</span><span class="text-white">=</span><span class="text-blue-700">0</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">d</span><span class="text-white">=</span><span class="text-blue-700">1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-400">do</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">ht</span><span class="text-white">=</span> <span class="text-amber-100">parseInt</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Horas trabajadas del dia "</span><span class="text-white">+</span><span class="text-blue-400">d</span><span class="text-white">+</span><span class="text-[#AD6D3B]">": "</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">sh</span><span class="text-white">=</span><span class="text-blue-400">sh</span><span class="text-white">+</span><span class="text-blue-400">ht</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">d</span><span class="text-white">++</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-amber-400">while</span><span class="text-purple-600">(</span> <span class="text-blue-400">d</span><span class="text-white"><=</span><span class="text-blue-400">dt</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">ss</span><span class="text-white">=</span><span class="text-blue-400">sh</span><span class="text-white">*</span><span class="text-blue-400">ph</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Empleado "</span><span class="text-white">+</span><span class="text-blue-400">i</span><span class="text-white">+</span><span class="text-[#AD6D3B]">". Sueldo semanal: "</span><span class="text-white">+</span><span class="text-blue-400">ss</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pt</span><span class="text-white">=</span><span class="text-blue-400">pt</span><span class="text-white">+</span><span class="text-blue-400">ss</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">i</span><span class="text-white">++</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-amber-400">while</span> <span class="text-purple-600">(</span> <span class="text-blue-400">i</span><span class="text-white"><=</span><span class="text-blue-400">n</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Pago total de la empresa a los "</span><span class="text-white">+</span><span class="text-blue-400">n</span><span class="text-white">+</span><span class="text-[#AD6D3B]">" trabajadores: "</span><span class="text-white">+</span><span class="text-blue-400">pt</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw5.php'">
            <img src="../../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/ciclosJavascript/dowhile/dw7.php'">
            Siguiente
            <img src="../../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var n= parseInt(prompt("Numero de trabajadores: "));
            var ph= parseFloat(prompt("Pago por hora: "));
            var pt= 0;
            var i=1;
            do{
                    var dt= parseInt(prompt("Dias laborados del trabajador "+i+": "));           
                    var sh=0;
                    var ss=0;
                    var d=1;
                    do{
                        var ht= parseInt(prompt("Horas trabajadas del dia "+d+": "));
                        sh=sh+ht;
                        d++;
                    }while( d<=dt);
                    ss=sh*ph;
                    alert("Empleado "+i+". Sueldo semanal: "+ss);
                    pt=pt+ss;  
                    i++;  
                }while ( i<=n);
            alert("Pago total de la empresa a los "+n+" trabajadores: "+pt);
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>