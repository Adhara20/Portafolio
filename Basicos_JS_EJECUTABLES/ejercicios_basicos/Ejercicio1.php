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
<body>
    <div class="pt-20 px-6">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
         Ejercicios Básicos JavaScript
        </h1>
        <hr class="linea-separadora">
        <!-- resto del contenido -->
         <div class="pt-5 px-10">
           <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 1</h2>
            <p>
            1.- Dada la matricula y 5 calificaciones de un alumno obtenidas a lo largo del
            cuatrimestre, construya un programa que imprima la matrícula del alumno y
            el promedio de sus calificaciones.
            </p> 
         </div>
        
    </div>
    <div class="tarjeta-codigo">

        <p class=>
            < script> <br>
            var mat = prompt("Ingresa tu matrícula") <br>
            var cal1 = parseFloat(prompt("Ingrese la calificación 1")) <br>
            var cal2 = parseFloat(prompt("Ingrese la calificación 2")) <br>
            var cal3 = parseFloat(prompt("Ingrese la calificación 3")) <br>
            var cal4 = parseFloat(prompt("Ingrese la calificación 4")) <br>
            var cal5 = parseFloat(prompt("Ingrese la calificación 5")) <br>

            var prom = (cal1 + cal2 + cal3 + cal4 + cal5)/5 <br>
            alert("Matrícula: " + mat + " \n " + "Promedio: " + prom) <br>
            < /script> <br>
        </p>
        <br>
        <div class="grid grid-cols-2 gap-6 mb-6 place-items-center">
            <div >
                <button class="buttonEjecutar" onclick="ejecutar()">
                Ejecutar
                </button>
            </div>
            <div >
                <button class="buttonSiguiente" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio2.php'">
                    siguiente ejercicio
                </button>
            </div>
            
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
</body>
</html>

