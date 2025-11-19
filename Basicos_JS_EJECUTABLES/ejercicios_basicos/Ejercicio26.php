
<html>
    <title>Ejercicio 26</title>
    <script>
        var ml = parseFloat(prompt("Ingresa la cantidad de milimetros"))
        var c = ml/10, d = c/10, m = d/10,  mlh = ml%10, ch = c%10, dh = d%10

        alert(ml + " milimetros hay: "+m+" metros "+dh+" decimetros "+ch+" centimetros "+mlh+" milimetros")
    </script>
</html>