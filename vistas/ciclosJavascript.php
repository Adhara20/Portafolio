<?php
include('../includes/header.php');
include('../includes/menu.php');
?>
<!-- Asi deben quedar todos los encabezados -->
<div class="pt-20 px-6 mb-8">
  <h1 class="titulo text-4xl text-[#26408b] font-semibold text-center">
    Ejercicios de Repetición JavaScript
  </h1>

  <div class="flex flex-col md:flex-row justify-center items-center gap-32 mt-10">
    <div class="mx-6 my-6">
        <a href="/Portafolio/vistas/forJs.php">
          <h2 class="text-center mb-2 text-2xl font-medium">Ciclo For</h2>
        <img src="/Portafolio/img/iconosBtn/jsEjecutables.png" alt="" class="size-80">
        </a>
    </div>
    <div class="mx-6 my-6">
      <a href="/Portafolio/vistas/whileJs.php">
        <h2 class="text-center mb-2 text-2xl font-medium">Ciclo While</h2>
        <img src="/Portafolio/img/iconosBtn/jsEjecutables.png" alt="" class="size-80">
      </a>
    </div>
    <div class="mx-6 my-6">
      <a href="/Portafolio/vistas/doWhileJs.php">
        <h2 class="text-center mb-2 text-2xl font-medium">Ciclo DoWhile</h2>
        <img src="/Portafolio/img/iconosBtn/jsEjecutables.png" alt="" class="size-80">
      </a>
    </div>
  </div>
</div>


<?php
include('../includes/footer.php');
?>