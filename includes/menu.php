<nav class="fixed top-0 left-0 w-full z-50">
  <!-- Logo y Nombre -->
  <div class="bg-[#26408b] flex justify-between items-center px-6 py-3">
    <div class="flex items-center">
      <h1 style="font-family: 'Montserrat', sans-serif; color: white; font-size: 24px;">
        Portafolio De Evidencias Cuatrimestre 4
      </h1>
    </div>
    <button id="hamburger" class="text-white text-2xl lg:hidden focus:outline-none">☰</button>
  </div>

  <!-- Menú principal -->
  <div id="menu" class="hidden flex-col absolute right-0 bg-white shadow-lg lg:static lg:flex lg:flex-row 
                       lg:justify-end lg:items-center lg:space-x-6 px-6 py-2">

    <!-- <a href="index.php" class="block py-2 text-gray-800 hover:text-[#26408b]">Inicio</a> -->

    <!-- Ejercicios Java -->
    <div class="relative group hidden lg:block">
      <button class="block py-2 text-gray-800 hover:text-[#26408b] w-full text-left lg:text-center">
        Ejercicios Java ▼
      </button>
      <div class="hidden group-hover:flex lg:absolute lg:flex-col bg-white shadow-md border rounded-md mt-1 min-w-[180px]">
        <a href="/Portafolio/vistas/basicosJava.php" class="px-4 py-2 hover:bg-gray-100">Básicos</a>
        <a href="/Portafolio/vistas/selectivasJava.php" class="px-4 py-2 hover:bg-gray-100">Selectivos</a>
        <a href="/Portafolio/vistas/ciclosJava.php" class="px-4 py-2 hover:bg-gray-100">Repetición</a>
      </div>
    </div>

    <!-- Ejercicios JavaScript -->
    <div class="relative group hidden lg:block">
      <button class="block py-2 text-gray-800 hover:text-[#26408b] w-full text-left lg:text-center">
        Ejercicios JavaScript ▼
      </button>
      <div class="hidden group-hover:flex lg:absolute lg:flex-col bg-white shadow-md border rounded-md mt-1 min-w-[180px]">
        <a href="/Portafolio/vistas/basicosJavascript.php" class="px-4 py-2 hover:bg-gray-100">Básicos</a>
        <a href="/Portafolio/vistas/selectivasJavascript.php" class="px-4 py-2 hover:bg-gray-100">Selectivos</a>
        <a href="/Portafolio/vistas/ciclosJavascript.php" class="px-4 py-2 hover:bg-gray-100">Repetición</a>
      </div>
    </div>

    <!-- Ejercicios C++ -->
    <div class="relative group hidden lg:block">
      <button class="block py-2 text-gray-800 hover:text-[#26408b] w-full text-left lg:text-center">
        Ejercicios C++ ▼
      </button>
      <div class="hidden group-hover:flex lg:absolute lg:flex-col bg-white shadow-md border rounded-md mt-1 min-w-[180px]">
        <a href="/Portafolio/vistas/basicosC++.php" class="px-4 py-2 hover:bg-gray-100">Básicos</a>
        <a href="/Portafolio/vistas/selectivasC++.php" class="px-4 py-2 hover:bg-gray-100">Selectivos</a>
        <a href="/Portafolio/vistas/ciclosC++.php" class="px-4 py-2 hover:bg-gray-100">Repetición</a>
      </div>
    </div>

    <!-- Submenú móvil -->
    <button id="btn-submenu" class="block py-2 text-gray-800 hover:text-[#26408b] w-full text-left lg:hidden">
      Ejercicios Java →
    </button>
    <div id="offcanvas-submenu" class="fixed top-0 right-[-100%] h-full w-64 bg-white shadow-lg transition-all flex flex-col z-50 lg:hidden">
      <div class="flex justify-between items-center p-4 border-b">
        <span class="font-semibold">Ejercicios Java</span>
        <button id="close-submenu" class="text-gray-700 text-xl">&times;</button>
      </div>
      <a href="/Portafolio/vistas/basicosJava.php" class="px-4 py-2 hover:bg-gray-100">Básicos</a>
      <a href="/Portafolio/vistas/selectivasJava.php" class="px-4 py-2 hover:bg-gray-100">Selectivos</a>
      <a href="/Portafolio/vistas/ciclosJava.php" class="px-4 py-2 hover:bg-gray-100">Repetición</a>
    </div>

  </div>
</nav>

<!-- Script para menú -->
<script>
const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');
hamburger?.addEventListener('click', () => {
  menu.classList.toggle('hidden');
  menu.classList.toggle('flex');
});

const btnSubmenu = document.getElementById('btn-submenu');
const offcanvasSubmenu = document.getElementById('offcanvas-submenu');
const closeSubmenu = document.getElementById('close-submenu');

btnSubmenu?.addEventListener('click', () => {
  offcanvasSubmenu.style.right = '0';
});
closeSubmenu?.addEventListener('click', () => {
  offcanvasSubmenu.style.right = '-100%';
});

document.addEventListener('click', (e) => {
  if (window.innerWidth < 1024) {
    if (!offcanvasSubmenu.contains(e.target) && !btnSubmenu.contains(e.target)) {
      offcanvasSubmenu.style.right = '-100%';
    }
  }
});
</script>
<body class="flex flex-col min-h-screen bg-gray-100 pt-20">

