<html>
    <title>Ejercicio 30</title>
    <script>
        const a= 2;
        const b = 5;
        const c = 3;

        alert("P(x)=x^3+ax^2+bx+c\nDónde a =2, b = 5, c = 3.");
        var x = parseFloat(prompt("Ingresa el valor de x: "));

        var x2 = Math.pow(x,2);
        var x3 = Math.pow(x,3);
        var y  = x3+(a*x2)+(b*x)+c;

        alert("y = P(x) = ("+x+")^3 + a("+x+")^2 + "+"b("+x+") + c\n"+
        "y = P(x) = "+x3+" + "+x2+"a + "+x+"b + c\n"+
        "y = P(x) ="+x3+" + "+(a*x2)+" + "+(b*x)+" + "+c+"\n"+
        "y = P(x) = "+y)

    </script>
</html>