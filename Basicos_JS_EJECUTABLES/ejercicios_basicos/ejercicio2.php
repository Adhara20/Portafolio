<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 2</title>
</head>
<body>
    <!-- copiar y pegar de aquiiiiii -->
     <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <!-- resto del contenido -->
         <div class="pt-5 px-10">
           <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 2</h2>
            <p>
            2.- . Escriba un programa que permita calcular e imprimir el cuadrado y el cubo de un número entero positivo.
            </p> 
         </div>
        
    </div>
    <div class="tarjeta-codigo">

        <p class=>
            < script> <br>
                var num= parseInt(prompt("Ingresa el número: ")); <br>
                var cuad= parseInt(Math.pow(num, 2)); <br>
                var cub= parseInt(Math.pow(num, 3)); <br>
                alert("El cuadrado es: " + cuad + "\n" + "El cubo es: " + cub);  <br>
            < /script> <br>
        </p>
        <br>
        <!-- esto de aqui no cambia -->
        <div class="grid grid-cols-3 gap-6 mb-6 place-items-center">
            <div>
                <button class="buttonSiguiente" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio1.php'">
                    ejercicio anterior
                </button>
            </div>
            <div >
                <button class="buttonEjecutar" onclick="ejecutar()">
                Ejecutar
                </button>
            </div>
            <div >
                <button class="buttonSiguiente" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio3.php'">
                    siguiente ejercicio
                </button>
            </div>
            
        </div> 
    </div>
    <!-- iiii hasta aca -->
    <script>
        function ejecutar(){
            var num= parseInt(prompt("Ingresa el número: "));
            var cuad= parseInt(Math.pow(num, 2));
            var cub= parseInt(Math.pow(num, 3));
            alert("El cuadrado es: " + cuad + "\n" + "El cubo es: " + cub); 
        }
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>



