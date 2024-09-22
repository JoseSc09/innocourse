<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">

                <!-- Hamburger SideBar-->
                <button type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    id="hamburder-button">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <!-- End Hamburger SideBar-->

                <!-- Logo Innocourse-->
                <a href="{{ route('home.index') }}" class="flex ms-2 md:me-24">
                    <img src="{{ Vite::image('Logo.jpg') }}" class="h-12 w-12 object-cover rounded-full me-3"
                        alt="InnoCourse Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">InnoCourse</span>
                </a>
                <!-- End Logo Innocourse-->
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3 gap-4">
                    <!-- Dark mode toggle-->
                    <div id="dark-mode-toggle" class="toggle-container w-16 h-8 min-w-10">
                        <div class="toggle w-8 h-8">
                        </div>
                    </div>
                    <!-- EndDark mode toggle-->
                    <!-- User Avatar -->
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-green-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <img class="w-12 h-12 rounded-full object-cover" src="{{ asset(Auth::user()->imagen) }}"
                            alt="foto de usuario">
                    </button>
                    <!-- End User Avatar-->

                    <!-- Dropdown User menu -->
                    <div class="absolute shadow-xl right-4 top-16 mt-2 z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->nombre }}</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Salir</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Dropdown User menu -->
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-white border-r border-gray-200  dark:bg-gray-800 dark:border-gray-700">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    id="button-dropdown-users-sidebar">
                    {{-- Add Icon --}}
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Usuarios</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-users-side-bar" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('admin.usuarios.show', 'administrador') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Administradores</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.usuarios.show', 'instructores') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Instructores</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.usuarios.show', 'estudiantes') }}"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Estudiantes</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    {{-- Add Icon --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    {{-- Add icon --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">Categorias</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    {{-- Add icon --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">Cursos</span>
                </a>
            </li>

        </ul>
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    {{-- Add icon --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">Inicio</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    {{-- Add icon --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">Sobre Nosotros</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    {{-- Add icon --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">FAQs</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
