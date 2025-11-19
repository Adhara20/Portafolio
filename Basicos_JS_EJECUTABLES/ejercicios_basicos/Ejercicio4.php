<?php
    include('../../includes/header.php');
    include('../../includes/menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Básico JS 4</title>
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
           <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ejercicio 4</h2>
            <p>
            4.Construya un programa tal que dado el costo de un artículo vendido y la cantidad de dinero entregada por el cliente, calcule e imprima el cambio que se debe entregar al mismo.            </p> 
         </div>
        
    </div>
    <div class="tarjeta-codigo">

        <p class=>
            < script> <br>
                var costo= parseFloat(prompt("Ingrese el costo del artículo: "));
                var pago= parseFloat(prompt("Ingrese qué tanto pagó el cliente: "));
                var cambio= pago-costo;
                alert("El cambio del cliente es: " + cambio);              
            < /script> <br>
        </p>
        <br>
        <!-- esto de aqui no cambia -->
        <div class="grid grid-cols-3 gap-6 mb-6 place-items-center">
            <div>
                <button class="buttonSiguiente" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio3.php'">
                    ejercicio anterior
                </button>
            </div>
            <div >
                <button class="buttonEjecutar" onclick="ejecutar()">
                Ejecutar
                </button>
            </div>
            <div >
                <button class="buttonSiguiente" onclick= "window.location.href='/Portafolio/Basicos_JS_EJECUTABLES/ejercicios_basicos/Ejercicio5.php'">
                    siguiente ejercicio
                </button>
            </div>
            
        </div> 
    </div>
    <!-- iiii hasta aca -->
    <script>
        function ejecutar(){
            var costo= parseFloat(prompt("Ingrese el costo del artículo: "));
            var pago= parseFloat(prompt("Ingrese qué tanto pagó el cliente: "));
            var cambio= pago-costo;
            alert("El cambio del cliente es: " + cambio);
 
        }
        
    </script>
    <?php
        include('../../includes/footer.php');
    ?>
</body>
</html>
