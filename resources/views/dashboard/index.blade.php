<x-dashboard-layout>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>InnoCourse - Panel Administrativo</title>
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- FontAwesome para los iconos -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        </style>
    </head>

    <body class="bg-gray-100">

        <!-- Contenedor Principal -->
        <div class="flex h-screen">

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

        </div>

        <script>
            // Script para mantener el foco activo en el módulo seleccionado
            const links = document.querySelectorAll('aside nav ul li a');

            links.forEach(link => {
                link.addEventListener('click', function(event) {
                    // Elimina el estilo activo de todos los enlaces
                    links.forEach(l => l.classList.remove('bg-gray-700'));

                    // Agrega el estilo activo solo al enlace seleccionado
                    link.classList.add('bg-gray-700');
                });
            });

            // Script para el menú hamburguesa
            const menuToggle = document.getElementById('menuToggle');
            const sidebar = document.getElementById('sidebar');
            const sidebarText = document.querySelectorAll('.sidebar-text');
            const sidebarTitle = document.getElementById('sidebarTitle');

            menuToggle.addEventListener('click', () => {
                // Alterna entre mostrar/ocultar los textos de los elementos del sidebar
                sidebar.classList.toggle('w-64'); // Cambia el ancho del sidebar
                sidebarText.forEach(text => text.classList.toggle('hidden')); // Muestra/Oculta los textos
                sidebarTitle.classList.toggle('hidden'); // Muestra/Oculta el título del sidebar

                // Actualiza el estado aria-expanded
                const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
                menuToggle.setAttribute('aria-expanded', !isExpanded);
            });
        </script>

    </body>

    </html>
</x-dashboard-layout>
