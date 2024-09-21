<nav class="bg-slate-800 text-gray-200 border-gray-200 justify-between md:font-semibold md:text-xl text-lg">
    <div class=" w-[95%] flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="rounded-full w-16 md:w-24" src="{{ Vite::image('Logo.jpg') }}" alt="Logo Inno Course">
            <!-- Botón del menú para móviles -->

        </div>



        <div class=" relative flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-4">

            <div id="dark-mode-toggle" class="toggle-container md:mr-4 md:w-20 md:h-10 w-16 h-7 min-w-10">
                <div class="toggle md:w-10 md:h-10 w-7 h-7">
                </div>
            </div>
            @auth
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-green-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <img class="md:w-14  w-8  rounded-full" src="{{ asset(Auth::user()->imagen) }}" alt="foto de usuario">
                </button>

                <!-- Dropdown menu -->
                <div class="absolute shadow-xl right-0 top-14 mt-2 z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600"
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
                <script>
                    const userMenuButton = document.getElementById('user-menu-button');
                    const userDropdown = document.getElementById('user-dropdown');
                    userMenuButton.addEventListener('click', function() {
                        const isExpanded = userMenuButton.getAttribute('aria-expanded') === 'true';
                        userMenuButton.setAttribute('aria-expanded', !isExpanded);
                        userDropdown.classList.toggle('hidden');
                    });
                    window.addEventListener('click', function(event) {
                        // Si el clic no fue en el botón ni en el menú, ocultar el menú
                        if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
                            userDropdown.classList.add('hidden');
                        }
                    });
                </script>
            @else
                <a class="rounded-full text-white bg-purple-500 px-3 py-2 md:px-5 md:py-2 hover:bg-purple-600 transition-colors duration-300 text-center"
                    href="{{ route('login.index') }}"> Iniciar Sesión</a>
            @endauth
            <button id="menu-toggle" class="md:hidden text-gray-200 focus:outline-none">

                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Menú de navegación -->
        <div class="hidden md:flex flex-col md:flex-row items-center w-full md:w-auto " id="nav-menu">

            <ul class="flex flex-col md:flex-row gap-6 md:gap-8 w-full md:w-auto text-center md:text-left ">
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
        <div class="w-full md:w-auto  mt-4 md:mt-0">
            <input class="rounded-full p-2 w-full md:w-96  text-black focus:outline-none" type="text"
                placeholder="Buscar...">
        </div>
    </div>
</nav>
