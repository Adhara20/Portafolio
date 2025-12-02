<?php
include('../includes/header.php');
include('../includes/menu.php');
?>

<!-- Así deben quedar todos los encabezados -->
<div class="pt-20 px-6">
    <div class="flex">
        <h1 class="titulo text-3xl text-[#26408b] font-semibold">
            Estructuras de Repetición JavaScript -
        </h1> 
        <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Ciclo While</h2>
    </div>
    <hr class="linea-separadora">
    
    <div class="tarjeta-contenedor">
        <!-- Ejercicio 1 -->
        <div class="tarjeta">
            <p>1. Se requiere un algoritmo para obtener la edad promedio de un grupo de N alumnos. Realice el programa, utilizando los tres tipos de estructuras de ciclo (For, While, Do While).</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio1w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 2 -->
        <div class="tarjeta">
            <p>2. Se requiere un programa para obtener la estatura promedio de un grupo de personas, cuyo número de miembros se desconoce, el ciclo debe efectuarse siempre y cuando se tenga una estatura registrada.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio2w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 3 -->
        <div class="tarjeta">
            <p>3. Se requiere un programa para determinar cuánto ahorrará una persona en un año, si al final de cada mes deposita variables cantidades de dinero; además, se requiere saber cuánto lleva ahorrado cada mes. Realice el programa utilizando un ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio3w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 4 -->
        <div class="tarjeta">
            <p>4. Una persona se encuentra en el kilómetro 70 de la carretera Aguascalientes-Zacatecas, otra se encuentra en el km 150 de la misma carretera, la primera viaja en dirección a Zacatecas, mientras que la segunda se dirige a Aguascalientes, a la misma velocidad. Realice un programa para determinar en qué kilómetro de esa carretera se encontrarán, utilizando el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio4w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 5 -->
        <div class="tarjeta">
            <p>5. Un empleado de la tienda "Tiki Taka" realiza N ventas durante el día, se requiere saber cuántas de ellas fueron mayores a $1000, cuántas fueron mayores a $500 pero menores o iguales a $1000, y cuántas fueron menores o iguales a $500. Además, se requiere saber el monto de lo vendido en cada categoría y de forma global. Realice un programa que permita determinar lo anterior utilizando el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio5w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 6 -->
        <div class="tarjeta">
            <p>6. Una empresa les paga a sus empleados con base en las horas trabajadas en la semana. Para esto, se registran los días que laboró y las horas de cada día. Realice un algoritmo para determinar el sueldo semanal de N trabajadores y además calcule cuánto pagó la empresa por los N empleados. Utilice el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio6w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 7 -->
        <div class="tarjeta">
            <p>7. La cadena de tiendas de autoservicio "El mandilón" cuenta con sucursales en C ciudades diferentes de la República, en cada ciudad cuenta con T tiendas y cada tienda cuenta con N empleados, asimismo, cada una registra lo que vende de manera individual cada empleado, cuánto fue lo que vendió́ cada tienda, cuánto se vendió́ en cada ciudad y cuánto recaudó la cadena en un solo día. Realice un programa para determinar lo anterior utilizando el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio7w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 8 -->
        <div class="tarjeta">
            <p>8. Un profesor tiene un salario inicial de $1500, y recibe un incremento de 10% anual durante 6 años. ¿Cuál es su salario al cabo de 6 años? ¿Qué salario ha recibido en cada uno de los 6 años? Realice el programa utilizando el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio8w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 9 -->
        <div class="tarjeta">
            <p>9. "El náufrago satisfecho" ofrece hamburguesas sencillas (S), dobles (D) y triples (T), las cuales tienen un costo de $20, $25 y $28 respectivamente. La empresa acepta tarjetas de crédito con un cargo de 5% sobre la compra. Suponiendo que los clientes adquieren N hamburguesas, las cuales pueden ser de diferente tipo, realice un programa para determinar cuánto deben pagar.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio9w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 10 -->
        <div class="tarjeta">
            <p>10. Se requiere un programa para determinar, de N cantidades, cuántas son cero, cuántas son menores a cero, y cuántas son mayores a cero. Utilice el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio10w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 11 -->
        <div class="tarjeta">
            <p>11. Una compañía fabrica focos de colores (verdes, blancos y rojos). Se desea contabilizar, de un lote de N focos, el número de focos de cada color que hay en existencia. Desarrolle un programa para determinar esto, utilizando el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio11w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 12 -->
        <div class="tarjeta">
            <p>12. Se requiere un programa para determinar cuánto ahorrará en pesos una persona diariamente, y en un año, si ahorra 3¢ el primero de enero, 9¢ el dos de enero, 27¢ el 3 de enero y así́ sucesivamente todo el año. Utilice el ciclo apropiado.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio12w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 13 -->
        <div class="tarjeta">
            <p>13. Realice el programa para determinar cuánto pagará una persona que adquiere N artículos, los cuales están de promoción. Considere que si su precio es mayor o igual a $200 se le aplica un descuento de 15%, y si su precio es mayor a $100 pero menor a $200, el descuento es de 12%; de lo contrario, sólo se le aplica 10%. Se debe saber cuál es el costo y el descuento que tendrá́ cada uno de los artículos y finalmente cuánto se pagará por todos los artículos obtenido.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio13w.php'">
                Ejecutar
            </button>
        </div>

        <!-- Ejercicio 14 -->
        <div class="tarjeta">
            <p>14. El banco "Bandido" desea calcular para cada uno de sus N clientes su saldo actual, su pago mínimo y su pago para no generar intereses.</p>
            <br>
            <button class="buttonEjecutar button:hover" onclick="window.location.href='/Portafolio/ciclosJavascript/while/Ejercicio14w.php'">
                Ejecutar
            </button>
        </div>
    </div>
</div>

<?php
include('../includes/footer.php');
?>