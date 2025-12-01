<?php
include('../includes/header.php');
include('../includes/menu.php');
?>
<!-- Asi deben quedar todos los encabezados -->
<div class="pt-20 px-6 mb-8">
  <h1 class="titulo text-4xl text-[#26408b] font-semibold text-center">
    Ejercicios Básicos Java
  </h1>

  <div class="flex flex-col md:flex-row justify-center items-center gap-32 mt-10">
    <div class="mx-6 my-6">
        <a href="/Portafolio/vistas/basicosJavascript.php">
          <h2 class="text-center mb-2 text-2xl font-medium">Ejercicios del Profesor</h2>
        <img src="/Portafolio/img/iconosBtn/jsEjecutables.png" alt="" class="size-80">
        </a>
    </div>
    <div class="mx-6 my-6">
      <a href="/Portafolio/vistas/basicosJavascriptPropuestos.php">
        <h2 class="text-center mb-2 text-2xl font-medium">Ejercicios Propuestos (Grupo)</h2>
        <img src="/Portafolio/img/iconosBtn/jsEjecutables.png" alt="" class="size-80">
      </a>
    </div>
  </div>
</div>


<?php
include('../includes/footer.php');
?>