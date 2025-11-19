<html>
    <title>Propuesta 10 </title>
    <script>
        var peso = parseFloat(prompt("Ingresa tu peso en kilogramos: "));
    	var altura = parseFloat(prompt("Ingresa tu altura en metros: "));
    	var imc = peso / Math.pow(altura, 2);
    	alert("Tu IMC es: " + imc);
    </script>
</html>