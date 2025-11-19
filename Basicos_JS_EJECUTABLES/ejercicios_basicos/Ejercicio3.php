<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 3</title>
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
           <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 3</h2>
            <p>
            3.Construya un programa, tal que dado como datos la base y la altura de un rectángulo, calcule el perímetro y la superficie del mismo.
            </p> 
         </div>
        
    </div>
    <div class="tarjeta-codigo">

        <p class=>
            < script> <br>
                var b= parseFloat(prompt("Ingrese la base del rectángulo: ")); <br>
                var h= parseFloat(prompt("Ingrese la altura del rectángulo: ")); <br>
                var p= (b*2) + (h*2); <br>
                var a= b*h; <br>
                alert("Perímetro: " + p + "\n" + "Área: " + a); <br>
            < /script> <br>
        </p>
        <br>
        <!-- esto de aqui no cambia -->
        <div class="grid grid-cols-3 gap-6 mb-6 place-items-center">
            <div>
                <button class="buttonSiguiente" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio2.php'">
                    ejercicio anterior
                </button>
            </div>
            <div >
                <button class="buttonEjecutar" onclick="ejecutar()">
                Ejecutar
                </button>
            </div>
            <div >
                <button class="buttonSiguiente" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio4.php'">
                    siguiente ejercicio
                </button>
            </div>
            
        </div> 
    </div>
    <!-- iiii hasta aca -->
    <script>
        function ejecutar(){
            var b= parseFloat(prompt("Ingrese la base del rectángulo: "));
            var h= parseFloat(prompt("Ingrese la altura del rectángulo: "));
            var p= (b*2) + (h*2);
            var a= b*h;
            alert("Perímetro: " + p + "\n" + "Área: " + a);
        }
        
    </script>

    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>
