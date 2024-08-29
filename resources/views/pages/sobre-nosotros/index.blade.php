<x-app-layout>
    <div class="container mx-auto shadow-md dark:shadow-none dark:text-gray-200">
        <div class="bg-white p-6 dark:bg-slate-800">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-6 md:mb-12">
                <div class="rounded-lg overflow-hidden">
                    <img class="h-72 w-full object-cover object-center" src="{{ Vite::image('about_img1.jpg') }}"
                        alt="Imagen de header">
                </div>
                <div class="lg:col-span-2 flex flex-col justify-around">
                    <h1 class="font-sans font-bold text-xl lg:text-3xl uppercase text-center md:text-end">Innocourse
                        forma
                        profesionales para la vida
                        tecnológica</h1>
                    <p class="lg:text-xl text-center md:text-end md:leading-relaxed lg:leading-loose">Somos InnoCourse,
                        una
                        plataforma educativa dedicada a fusionar innovación y
                        aprendizaje. Nuestro
                        objetivo es proporcionar experiencias de aprendizaje transformadoras que impulsen el desarrollo
                        personal y profesional. Nos especializamos en crear cursos dinámicos y actualizados que preparan
                        a
                        nuestros estudiantes para los desafíos del mundo moderno.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-6 md:mb-12">
                <div class="lg:col-start-3 md:col-start-2 md:row-start-1 rounded-lg overflow-hidden">
                    <img class="h-72 w-full object-cover object-center" src="{{ Vite::image('about_img2.jpg') }}"
                        alt="Imagen de misión">
                </div>
                <div class="lg:col-span-2 flex flex-col justify-around md:col-start-1">
                    <h2 class="font-sans font-bold text-xl lg:text-3xl uppercase text-center md:text-start">Misión</h2>
                    <p class="lg:text-xl text-center md:text-start md:leading-relaxed lg:leading-loose">Empoderar a los
                        estudiantes mediante herramientas educativas innovadoras y
                        accesibles que fomenten el
                        aprendizaje continuo y el desarrollo de habilidades críticas para el futuro. Nos comprometemos a
                        ofrecer una educación de alta calidad, adaptada a las necesidades cambiantes del mercado global
                        y
                        centrada en el éxito de nuestros estudiantes.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-6 md:mb-12">
                <div class="rounded-lg overflow-hidden">
                    <img class="h-72 w-full object-cover object-center" src="{{ Vite::image('about_img3.jpg') }}"
                        alt="Imagen de visión">
                </div>
                <div class="lg:col-span-2 flex flex-col justify-around">
                    <h2 class="font-sans font-bold text-xl lg:text-3xl uppercase text-center md:text-end">Visión</h2>
                    <p class="lg:text-xl text-center md:text-end md:leading-relaxed lg:leading-loose">Ser la plataforma
                        líder en educación innovadora, reconocida por transformar la
                        manera en que las
                        personas aprenden y aplican conocimientos, creando un impacto positivo en sus vidas y en la
                        sociedad.</p>
                </div>
            </div>
            <div class="my-28">
                <h2 class="font-sans font-bold text-xl lg:text-3xl uppercase text-center">Disponemos de Profesionales
                    Calificados</h2>
                <p class="lg:text-xl text-center md:leading-relaxed lg:leading-loose my-12">Nos enorgullece disponer de
                    un
                    equipo de profesionales altamente calificados y comprometidos con la
                    excelencia educativa. Con vasta experiencia en sus campos, nuestros expertos proporcionan una
                    educación
                    de calidad, innovadora y relevante. Su enfoque práctico y actualizado asegura el mejor apoyo y
                    orientación para el éxito de nuestros estudiantes.</p>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    {{-- CARD PROFESIONAL --}}
                    <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow ">
                        <img class="rounded-t-lg" src="{{ Vite::image('about_img4.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">
                                Carla Casas</h5>
                            <span class="text-sm text-gray-600 tracking-tight">CEO de la empresa</span>
                            <p class="my-3 font-normal text-gray-700 ">Curso de Liderazgo</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                Ver cursos
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    {{-- FIN CARD --}}
                    <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow ">
                        <img class="rounded-t-lg" src="{{ Vite::image('about_img5.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">
                                Andres Galicia</h5>
                            <span class="text-sm text-gray-600 tracking-tight">Ingeniero de base de datos</span>
                            <p class="my-3 font-normal text-gray-700 ">Curso de Data</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                Ver cursos
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow ">
                        <img class="rounded-t-lg" src="{{ Vite::image('about_img6.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">
                                Luz Lucero</h5>
                            <span class="text-sm text-gray-600 tracking-tight">Profesional en Back-end</span>
                            <p class="my-3 font-normal text-gray-700 ">Curso de Backend</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                Ver cursos
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-300 rounded-lg shadow ">
                        <img class="rounded-t-lg" src="{{ Vite::image('about_img7.jpg') }}" alt="" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">
                                Juanito PicaPiedra</h5>
                            <span class="text-sm text-gray-600 tracking-tight">Profesional Front-End</span>
                            <p class="my-3 font-normal text-gray-700 ">Curso de Diseño UX/UI</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                Ver cursos
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        
        {{-- Circulos --}}
        <div class="circle-first bg-purple-400 dark:bg-purple-500"></div>
        <div class="circle-second bg-purple-400 dark:bg-purple-500"></div>
        <div class="circle-third bg-purple-400 dark:bg-purple-500"></div>
    </div>
</x-app-layout>
