<!-- Sidebar Izquierdo -->
<aside id="sidebar"
    class="bg-gray-800 min-h-screen lg:w-64 w-16 flex flex-col items-center lg:items-stretch transition-all duration-300">
    <div class="py-6 lg:px-4 px-2 flex flex-col items-center lg:items-start">
        <!-- Botón de Menú para pantallas pequeñas -->
        <button id="menuToggle" class="text-white text-3xl lg:hidden mb-8" aria-expanded="false">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Título del Sidebar solo en pantallas grandes o cuando el menú está expandido -->
        <h2 class="text-white text-3xl font-bold hidden lg:block" id="sidebarTitle">
            <a href="{{ route('home.index') }}">InnoCourse</a>
        </h2>
    </div>

    <!-- Menú de Módulos -->
    <nav class="mt-8 lg:mt-0 flex-1">
        <ul class="space-y-2">
            <!-- Módulo de Usuarios -->
            <li>
                <a class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700 cursor-pointer"
                    aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">
                    <span class="block w-12 text-center"><i class="fas fa-users text-xl"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Usuarios</span>
                    <span class="block w-12 text-center"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <ul id="dropdown-users" class="hidden py-2 space-y-2">
                    <li>
                        
                        <a href="{{ route('admin.usuarios.show', 'administrador') }}"
                            class="flex items-center w-full p-2 text-white transition duration-75 pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"> <span class="block w-12 text-center"><i class="fa-solid fa-angle-right"></i></span>Administrador</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.usuarios.show', 'instructores') }}"
                            class="flex items-center w-full p-2 text-white transition duration-75 pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"><span class="block w-12 text-center"><i class="fa-solid fa-angle-right"></i></span>Instructores</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.usuarios.show', 'estudiantes') }}"
                            class="flex items-center w-full p-2 text-white transition duration-75 pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"><span class="block w-12 text-center"><i class="fa-solid fa-angle-right"></i></span>Estudiantes</a>
                    </li>
                </ul>
            </li>
            <!-- Módulo de Categoria -->
            <li>
                <a href="{{ route('admin.cursos.index') }}"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fas fa-solid fa-shapes text-xl"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Categoria</span>
                </a>
            </li>
            <!-- Módulo de Cursos -->
            <li>
                <a href="{{ route('admin.cursos.index') }}"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fas fa-book text-xl"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Cursos</span>
                </a>
            </li>
            <!-- Módulo de Categoria -->
            <li>
                <a href="{{ route('admin.cursos.index') }}"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fa-solid fa-id-card"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Membresías</span>
                </a>
            </li>
            <br>
            <br>
            <!-- Módulo de Categoria -->
            <li>
                <a href="{{ route('admin.cursos.index') }}"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fa-solid fa-user-graduate fa-lg"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Estudiantes</span>
                </a>
            </li>
            <br>
            <br>
            <!-- Módulo de Categoria -->
            <li>
                <a href="{{ route('admin.cursos.index') }}"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fas fa-home text-xl"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Inicio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.cursos.index') }}"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i class="fas fa-trash text-xl"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">Sobre Nosotros</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.cursos.index') }}"
                    class="flex items-center justify-center lg:justify-start py-3 px-4 text-white hover:bg-gray-700 focus:bg-gray-700">
                    <span class="block w-12 text-center"><i
                            class="fa-sharp fa-solid fa-circle-question fa-lg"></i></span>
                    <span class="hidden lg:inline-block sidebar-text">FAQs</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
