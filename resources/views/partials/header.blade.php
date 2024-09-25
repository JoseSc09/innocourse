<nav class="bg-slate-800 text-gray-200 border-gray-200 justify-between md:font-semibold md:text-xl text-lg">
    <div class="lg:w-11/12 flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo Innocourse-->
        <div class="lg:order-1">
            <img class="rounded-full object-cover w-20" src="{{ Vite::image('Logo.jpg') }}" alt="Logo InnoCourse">
        </div>
        <!-- End Logo Innocourse-->

        <!-- Menu lateral derecho -->
        <div class="flex lg:order-3 items-center gap-5">

            <!-- Dark mode toggle-->
            <div id="dark-mode-toggle" class="toggle-container w-16 h-8 min-w-10">
                <div class="toggle w-8 h-8">
                </div>
            </div>
            <!-- End dark mode toggle-->
            @auth
                <!-- User Avatar -->
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-green-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <img class="w-12 h-12 rounded-full object-cover" src="{{ asset(Auth::user()->imagen) }}"
                        alt="foto de usuario">
                </button>
                <!-- End User Avatar-->

                <!-- Dropdown User menu -->
                <div class="absolute shadow-xl right-20 min-w-44 top-20 mt-2 z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->nombre }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        @if (Auth::user()->rol_id === 1)
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
                <!-- End Dropdown User menu -->
            @else
                <!-- Login Button-->
                <a class="rounded-full text-white bg-purple-500 px-3 py-2 md:px-5 md:py-2 hover:bg-purple-600 transition-colors duration-300 text-center"
                    href="{{ route('login.index') }}"> Iniciar Sesión</a>
                <!-- End login Button-->
            @endauth

            <!-- Menu Toggle-->
            <button id="menu-toggle" class="lg:hidden text-gray-200 focus:outline-none">

                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <!-- End Menu Toggle-->
        </div>

        <!-- Menú de navegación -->
        <div class="lg:order-2 hidden lg:flex flex-col lg:flex-row items-center my-2 lg:my-0 w-full gap-8 lg:w-auto" id="nav-menu">

            <ul class="flex flex-col order-2 lg:order-1 lg:flex-row gap-6 lg:gap-8 w-full lg:w-auto text-center lg:text-left ">
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

            <div class="w-full md:w-auto order-1 lg:order-2">
                <input class="rounded-full p-2 w-full md:w-80 lg:w-96  text-black focus:outline-none" type="text"
                    placeholder="Buscar...">
            </div>
        </div>
        <!-- End Menú de navegación -->
    </div>
</nav>
