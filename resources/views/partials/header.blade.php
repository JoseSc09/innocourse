
    <nav class="bg-slate-800 py-4 md:py-2 text-gray-200 flex flex-col md:flex-row items-center gap-6 md:justify-around text-xl font-semibold">
        <div>
            <img class="rounded-full w-24" src="{{ Vite::image('Logo.jpg') }}" alt="Logo Inno Course">
        </div>
        <div class="">
            <ul class="flex flex-col md:flex-row gap-[4vw]">
                <li>
                    <a class="hover:text-white" href="{{ route('home.index') }}">Inicio</a>
                </li>
                <li>
                    <a class="hover:text-white" href="{{ route('courses.index') }}">Cursos</a>
                </li>
                <li>
                    <a class="hover:text-white" href="{{ route('about.index') }}">Sobre Nosotros</a>
                </li>
                <li>
                    <a class="hover:text-white" href="{{ route('opinions.index') }}">Opinión</a>
                </li>
            </ul>
        </div>
        <div>
            <input class="rounded-full p-2" type="text" placeholder="Buscar...">
        </div>
        <div>
            <button id="night-mode-toggle">🌓</button>
        </div>
        <div>
            <button class="rounded-full text-white bg-purple-500 px-5 py-2 hover:bg-purple-600" type="button" href="{{ route('login.index') }}">Iniciar Sesión</button>
        </div>
    </nav>