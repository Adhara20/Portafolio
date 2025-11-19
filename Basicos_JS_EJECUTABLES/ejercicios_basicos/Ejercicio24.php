
<html>
<head>
    <title>Ejercicio 24</title>
    <script>
        var c = parseFloat(prompt("Ingresa el capital depositado"))
        var r = parseFloat(prompt("Ingresa la tasa de interes"))
        var t = parseFloat(prompt("Ingresa el valor de tiempo"))

        var m = Math.pow((1.0+(r/100)), t)*c
        var i = m-c
        alert("Monto = "+m+"\n"+"Interes = "+i)
    </script>
</html>