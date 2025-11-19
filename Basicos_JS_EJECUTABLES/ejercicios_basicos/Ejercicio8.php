<html>
    <title>Ejercicio 8</title>
    <script>
        var radio= parseFloat(prompt("Ingrese el radio del cilindro: "));
        var altura= parseFloat(prompt("Ingrese la altura del cilindro: "));
        var area= 2 * Math.PI * radio * (radio + altura);
        var volumen= Math.PI * Math.pow(radio, 2) * altura;
        alert("Área: " + area + "\n" + "Volumen: " + volumen);

    </script>
</html>