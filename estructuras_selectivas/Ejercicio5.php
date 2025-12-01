<?php
    include('../includes/header.php');
    include('../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Selectivo 5</title>
</head>
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras Selectivas JavaScript
        </h1>
        <hr class="linea-separadora">
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 5</h2>
        <div class="items-center ml-8 mr-8">
            <p class="text-justify text-lg/10 font-semibold">
                5. La política de la compañía telefónica "Chimefón" es: "Chismea + x -". Cuando se realiza una llamada, el cobro es por el tiempo que ésta dura, de tal forma que los primeros cinco minutos cuestan $1.00 c/u, los siguientes tres, 80¢ c/u, los siguientes dos minutos, 70¢ c/u, y a partir del décimo minuto, 50¢ c/u. Además, se carga un impuesto de 3% cuando es domingo, y si es día hábil, en turno matutino, 15%, y en turno vespertino, 10%.
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="tarjeta2 bg-gray-800">
            <p class="text-justify font-semibold text-sm leading-5 sm:text-base sm:leading-6 md:text-lg/8 mx-auto max-w-[70%]">
                <span class="text-blue-700">< script></span><br>

                <span class="text-blue-700">var</span> <span class="text-blue-400">dia</span> 
                <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa que tipo de día es: habil/no habil"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">imp</span> 
                <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span> 
                <span class="text-blue-400">pag</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">,</span> 
                <span class="text-blue-400">tot</span> <span class="text-white">=</span> <span class="text-blue-700">0</span><span class="text-white">;</span><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">dia</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"habil"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-700">var</span> <span class="text-blue-400">turno</span> <span class="text-white">=</span> <span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa el turno: matutino/vespertino"</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">turno</span> <span class="text-white">==</span> <span class="text-[#AD6D3B]">"matutino"</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">imp</span> <span class="text-white">=</span> <span class="text-blue-700">0.15</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">imp</span> <span class="text-white">=</span> <span class="text-blue-700">0.1</span><span class="text-white">;</span><br>
                &nbsp;&nbsp;<span class="text-purple-600">}</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-700">var</span> <span class="text-blue-400">ti</span> <span class="text-white">=</span> <span class="text-amber-100">parseFloat</span><span class="text-purple-600">(</span><span class="text-amber-100">prompt</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">"Ingresa cuanto tiempo duró la llamada"</span><span class="text-purple-600">)</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-pink-300">if</span><span class="text-purple-600">(</span><span class="text-blue-400">ti</span> <span class="text-white"><=</span> <span class="text-blue-700">5</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pag</span> <span class="text-white">=</span> <span class="text-blue-700">1.0</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">ti</span> <span class="text-white"><=</span> <span class="text-blue-700">7</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pag</span> <span class="text-white">=</span> <span class="text-blue-700">0.80</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else if</span><span class="text-purple-600">(</span><span class="text-blue-400">ti</span> <span class="text-white"><=</span> <span class="text-blue-700">9</span><span class="text-purple-600">)</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pag</span> <span class="text-white">=</span> <span class="text-blue-700">0.70</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><span class="text-pink-300">else</span><span class="text-purple-600">{</span><br>
                &nbsp;&nbsp;<span class="text-blue-400">pag</span> <span class="text-white">=</span> <span class="text-blue-700">0.50</span><span class="text-white">;</span><br>
                <span class="text-purple-600">}</span><br><br>
                
                <span class="text-blue-400">tot</span> <span class="text-white">=</span> <span class="text-blue-400">ti</span> <span class="text-white">*</span> <span class="text-blue-400">pag</span> <span class="text-white">+</span> <span class="text-purple-600">(</span><span class="text-blue-400">ti</span> <span class="text-white">*</span> <span class="text-blue-400">pag</span> <span class="text-white">*</span> <span class="text-blue-400">imp</span><span class="text-purple-600">)</span><span class="text-white">;</span><br><br>
                
                <span class="text-amber-100">alert</span><span class="text-purple-600">(</span><span class="text-[#AD6D3B]">`El costo por llamada es de = ${pag}\n\nEl impuesto es de = ${imp}\n\nEl total a pagar por la llamada es de = ${tot}`</span><span class="text-purple-600">)</span><span class="text-white">;</span><br>
                
                <span class="text-blue-700">< /script></span>
            </p>
            <br>
        </div>
    </div>

    <div class="flex justify-center items-center gap-6 mb-4 mt-4">
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio4.php'">
            <img src="../img/iconosBtn/regFlecha.png" alt="anterior.png" class="size-5 mt-1 mr-1">    
            Anterior
        </button>
        <button class="buttonEjecutar w-32" onclick="ejecutar()">
            Ejecutar
        </button>
        <button class="buttonSiguiente w-32 flex" onclick="window.location.href='/Portafolio/estructuras_selectivas/Ejercicio6.php'">
            Siguiente
            <img src="../img/iconosBtn/sigFlecha.png" alt="siguiente.png" class="size-5 mt-1 ml-1">
        </button>
    </div>

    <script>
        function ejecutar(){
            var dia = prompt("Ingresa que tipo de día es: habil/no habil");
            var imp = 0, pag = 0, tot = 0;
            
            if(dia == "habil"){
                var turno = prompt("Ingresa el turno: matutino/vespertino");
                if(turno == "matutino"){
                    imp = 0.15;
                } else {
                    imp = 0.1;
                }
            }
            
            var ti = parseFloat(prompt("Ingresa cuanto tiempo duró la llamada"));
            
            if(ti <= 5){
                pag = 1.0;
            } else if(ti <= 7){
                pag = 0.80;
            } else if(ti <= 9){
                pag = 0.70;
            } else {
                pag = 0.50;
            }
            
            tot = ti * pag + (ti * pag * imp);
            
            alert(`El costo por llamada es de = ${pag}\n\nEl impuesto es de = ${imp}\n\nEl total a pagar por la llamada es de = ${tot}`);
        }
    </script>

    <?php
        include('../includes/footer.php');
    ?>
</body>
</html>