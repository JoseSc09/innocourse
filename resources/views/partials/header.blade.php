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
            @auth
                @php
                    $user = Auth::user();
                @endphp
                @if ($user->rol_id === 1)
                    <li>
                        <a class="hover:text-white transition-colors duration-300 text-center"
                            href="{{ route('dashboard.index') }}">Dashboard</a>
                    </li>
                @endif
            @endauth
        </ul>
    </div>

    <div class="flex flex-col md:flex-row items-center gap-4 md:gap-6 w-full md:w-auto">
        <input class="rounded-full p-2 w-full md:w-48 text-black focus:outline-none" type="text"
            placeholder="Buscar...">
        <button id="dark-mode-toggle" class="md:ml-4">🌓</button>
        @auth
            <a class="rounded-full text-white bg-purple-500 px-5 py-2 hover:bg-purple-600 transition-colors duration-300 w-full md:w-auto"
                href="{{ route('logout') }}"> Cerrar session </a>
        @else
            <a class="rounded-full text-white bg-purple-500 px-5 py-2 hover:bg-purple-600 transition-colors duration-300 w-full md:w-auto"
                href="{{ route('login.index') }}"> Iniciar Sesión</a>
        @endauth

    </div>
</nav>
