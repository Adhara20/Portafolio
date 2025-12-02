<?php
include('../includes/header.php');
include('../includes/menu.php');
?>

<div class="pt-20 px-4 sm:px-6 mb-8">

    <!-- Título -->
    <h1 class="titulo text-2xl sm:text-3xl text-[#26408b] font-semibold text-center sm:text-left">
        Ejercicios con Ciclos DoWhile Java
    </h1>
    <hr class="linea-separadora mb-6">

    <!-- PDF Responsivo -->
    <div class="w-full flex justify-center">
        <embed 
            src="../pdf/dowhile_java.pdf#zoom=page-width" 
            type="application/pdf" 
            class="w-full max-w-4xl h-[70vh] sm:h-[80vh] border rounded-lg shadow"
        >
    </div>

    <p class="mt-4 text-center sm:text-left">
        Si no puedes visualizar el PDF, 
        <a class="text-blue-600 underline" href="../pdf/dowhile_java.pdf" download>
            descárgalo aquí
        </a>.
    </p>

</div>

<?php
include('../includes/footer.php');
?>
