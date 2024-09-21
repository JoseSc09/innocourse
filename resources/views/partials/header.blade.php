<nav
    class="bg-slate-800 py-4 px-4 md:px-8 text-gray-200 flex flex-col md:flex-row items-center gap-6 md:justify-between text-lg md:text-xl font-semibold">
    <div class="flex justify-between w-full md:w-auto items-center">
        <img class="rounded-full w-16 md:w-24" src="{{ Vite::image('Logo.jpg') }}" alt="Logo Inno Course">
        <!-- Botón del menú para móviles -->
        <button id="menu-toggle" class="md:hidden text-gray-200 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Menú de navegación -->
    <div id="nav-menu" class="hidden md:flex flex-col md:flex-row items-center w-full md:w-auto">
        <ul class="flex flex-col md:flex-row gap-6 md:gap-8 w-full md:w-auto text-center md:text-left">
            <li>
                <a class="hover:text-white transition-colors duration-300 text-center"
                    href="{{ route('home.index') }}">Inicio</a>
            </li>
            <li>
                <a class="hover:text-white transition-colors duration-300 text-center"
                    href="{{ route('courses.index') }}">Cursos</a>
            </li>
            <li>
                <a class="hover:text-white transition-colors duration-300 text-center"
                    href="{{ route('about.index') }}">Sobre Nosotros</a>
            </li>
            <li>
                <a class="hover:text-white transition-colors duration-300 text-center"
                    href="{{ route('opinions.index') }}">Opinión</a>
            </li>
        </ul>
    </div>

    <div class="flex flex-col md:flex-row items-center gap-4 md:gap-6 w-full md:w-auto">
        <input class="rounded-full p-2 w-full md:w-48 text-black focus:outline-none" type="text"
            placeholder="Buscar...">
        <button id="dark-mode-toggle" class="md:ml-4">🌓</button>
        @auth
            <div class="relative flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <img class="w-8 h-8 rounded-full" src="{{ asset(Auth::user()->imagen) }}" alt="foto de usuario">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 absolute right-0 top-8 mt-2"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ auth::user()->nombre }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        @if (auth::user()->rol_id === 1)
                            <li>
                                <a href="{{ route('dashboard.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                        @endif

                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Configuración</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const userMenuButton = document.getElementById('user-menu-button');
                    const userDropdown = document.getElementById('user-dropdown');

                    if (userMenuButton && userDropdown) {
                        userMenuButton.addEventListener('click', function() {
                            const isExpanded = userMenuButton.getAttribute('aria-expanded') === 'true';
                            userMenuButton.setAttribute('aria-expanded', !isExpanded);
                            userDropdown.classList.toggle('hidden');
                        });
                    }
                });
            </script>
        @else
            <a class="rounded-full text-white bg-purple-500 px-5 py-2 hover:bg-purple-600 transition-colors duration-300 w-full md:w-auto"
                href="{{ route('login.index') }}"> Iniciar Sesión</a>
        @endauth

    </div>
</nav>
