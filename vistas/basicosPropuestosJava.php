<?php
include('../includes/header.php');
include('../includes/menu.php');
?>

<div class="pt-20 px-6 ml-8 mr-8 mb-8">
    <div class="flex">
      <h1 class="titulo text-3xl text-[#26408b] font-semibold">
        Ejercicios Bácicos Java    -
    </h1> 
    <h2 class="subTitulo text-3xl text-[#0d0221] font-semibold">Propuestos por el Grupo</h2>
    </div>
    <hr class="linea-separadora">

    <!-- PDF -->

    <embed 
        src="../pdf/Programas_Propuestos.pdf#zoom=page-width" 
        type="application/pdf" 
        width="100%" 
        height="800px">

    <p class="mt-2">
        Si no puedes visualizar el PDF, 
        <a class="text-blue-600 underline" href="../pdf/Programas_Propuestos.pdf" download>
            descárgalo aquí
        </a>.
    </p>
</div>

<?php
include('../includes/footer.php');
?>
 