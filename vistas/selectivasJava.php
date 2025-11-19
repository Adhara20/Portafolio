<?php
include('../includes/header.php');
include('../includes/menu.php');
?>
<!-- Asi deben quedar todos los encabezados -->
<div class="pt-20 px-6 mb-8 ml-8 mr-8">
  <h1 class="titulo text-3xl text-[#26408b] font-semibold">
    Estructuras Selectivas Java
  </h1>
  <hr class="linea-separadora">
  <!-- resto del contenido -->
   <!-- PDF -->
    <embed 
        src="../pdf/ESTRUCTURAS_SELECTIVAS_JAVA.pdf#zoom=page-width" 
        type="application/pdf" 
        width="100%" 
        height="800px">

    <p class="mt-2">
        Si no puedes visualizar el PDF, 
        <a class="text-blue-600 underline" href="../pdf/ESTRUCTURAS_SELECTIVAS_JAVA.pdf" download>
            descárgalo aquí
        </a>.
    </p>
</div>
<?php
include('../includes/footer.php');
?>