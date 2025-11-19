
<html>
    <title>Ejercicio 27</title>
    <script>
        var a = parseFloat(prompt("Ingresa el valor de a"))
        var b = parseFloat(prompt("Ingresa el valor de b"))

        var c = (4*Math.pow(a, 4)+3*a*b+Math.pow(b, 2))/(Math.pow(a, 2) - Math.pow(b, 2))
        var factor = 3*(Math.pow(c, 2))+a+b
        var d = factor/4

        alert("valor de c = "+c+"\n"+"valor de d = "+d)

    </script>
</html>