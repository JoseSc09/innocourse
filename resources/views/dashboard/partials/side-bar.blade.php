<!-- Sidebar Izquierdo -->
<aside id="sidebar"
    class="bg-gray-800 min-h-screen lg:w-64 w-16 flex flex-col items-center lg:items-stretch transition-all duration-300">
    <div class="py-6 lg:px-4 px-2 flex flex-col items-center lg:items-start">
        <!-- Botón de Menú para pantallas pequeñas -->
        <button id="menuToggle" class="text-white text-3xl lg:hidden mb-8" aria-expanded="false">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Título del Sidebar solo en pantallas grandes o cuando el menú está expandido -->
        <h2 class="text-white text-3xl font-bold hidden lg:block" id="sidebarTitle">InnoCourse</h2>
    </div>

    <!-- Menú de Módulos -->
    <nav class="mt-8 lg:mt-0 flex-1">
        <ul class="space-y-2">
            <!-- Módulo de Usuarios -->
            <li>
                <a href="#" id="usuariosLink"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fas fa-users text-xl"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Usuarios</span>
                </a>
            </li>
            <!-- Módulo de Cursos -->
            <li>
                <a href="#" id="cursosLink"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fas fa-book text-xl"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Cursos</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
