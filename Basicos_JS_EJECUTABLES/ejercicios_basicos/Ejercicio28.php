
<html>
    <title>EJERCICIO 28</title>
    <script>
        var n1 = parseFloat(prompt("Ingresa el primer número "))
        var n2 = parseFloat(prompt("Ingresa el segundo número "))
        var n3 = parseFloat(prompt("Ingresa el tercer número "))
        var n4 = parseFloat(prompt("Ingresa el cuarto número "))

        var suma = n1+n2+n3+n4
        var pa = n1/100, pb = n2/100, pc = n3/100, pd = n4/100
        var psuma1 = suma*pa, psuma2 = suma*pb, psuma3 = suma*pc, psuma4 = suma*pd
        
        alert(`La suma de los números es: ${suma}
        \n el procentaje del primer numero es: ${pa} y aplicado a la suma da: ${psuma1}
        \n el procentaje del segundo numero es: ${pb} y aplicado a la suma da: ${psuma2}
        \n el procentaje del tercer numero es: ${pc} y aplicado a la suma da: ${psuma3}
        \n el procentaje del cuarto numero es: ${pd} y aplicado a la suma da: ${psuma4}`)

        
    </script>
</html>