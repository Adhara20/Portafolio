<html>
    <title>Ejercicio 25</title>
    <p>
        25.Crear un programa que permita convertir una cantidad de segundos en horas, minutos y segundos
    </p>
    <script>
        var s = parseFloat(prompt("Ingrese la cantidad en segundos"))
        var  m = s/60, hr = m/60, sm = s%60, mh = m%60
        alert(Math.round(s)+" segundos equivalen a "+Math.round(hr)+" horas con "+Math.round(mh)+" minutos y "+Math.round(sm)+" segundos")
    </script>
</html>