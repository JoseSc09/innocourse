<x-app-layout>
    <section class="principal bg-white dark:bg-[#171C2F] flex flex-wrap justify-between items-start p-5 md:p-10">
        <div class="content-principal flex-1 pr-5">
            <h1 class="titulo text-3xl font-bold dark:text-white mb-5 pl-8">Opiniones de nuestros estudiantes de
                Innocourse</h1>
            <p class="texto text-lg dark:text-gray-300 mb-5 pl-8">Nos complace compartir las experiencias de nuestros
                estudiantes, quienes destacan la calidad, innovación y relevancia de nuestra oferta educativa. Sus
                testimonios reflejan el impacto positivo que InnoCourse ha tenido en su desarrollo personal y
                profesional, validando nuestro compromiso con la excelencia educativa.</p>
            <div class="cinco-stars flex items-center mb-5 justify-center">
                <img src="{{ Vite::image('stars.png') }}" alt="calificacion" class="icono-star w-32 h-auto">
                <p class="cal-number text-lg text-gray-700 dark:text-gray-300 ml-2">4000 Opiniones</p>
            </div>
        </div>
        <div class="imagen-principal flex-basis-35 flex justify-center items-center pt-5 md:pt-0">
            <img src="{{ Vite::image('Imagen_principal.png') }}" alt="imagen"
                class="Imagen_p max-w-full h-72 rounded-md">
        </div>
    </section>
    <section class="article bg-white dark:bg-[#171C2F]">
        <h2 class="coment text-center bg-white dark:bg-[#171C2F] py-2 text-xl dark:text-[#faf1f1]">Nuestras Opiniones
        </h2>

        <div class="agrupacion grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5 p-4">
            <!-- OPINIONES -->
            @foreach ($opiniones as $opinion)
                <div class="article-opi bg-[#9763f8] bg-opacity-30 p-4 rounded-lg">
                    <div class="conjunto flex items-center justify-between mb-2">
                        <div class="image">
                            <img src="{{ Vite::image($opinion['image']) }}" alt="user" class="user w-16 h-16 rounded-full">
                        </div>
                        <div class="usuario ml-4">
                            <h3 class="text-lg dark:text-white">{{ $opinion['name'] }}</h3>
                            <p class="correo text-sm dark:text-gray-300">{{ $opinion['usuario'] }}</p>
                        </div>
                        <div class="stars ml-auto flex items-center">
                            <img src="{{ Vite::image($opinion['image2']) }}" alt="logo" class="star w-24">
                        </div>
                    </div>
                    <p class="opiniones text-lg dark:text-gray-300">Los cursos de InnoCourse han transformado mi enfoque
                        profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.</p>
                </div>
            @endforeach
        </div>

        <p class="coment-mas text-center bg-white dark:bg-[#171C2F] py-2 text-2xl dark:text-[#faf1f1]">
            Ver más comentarios curso <i class='fas fa-angle-down' style='font-size:24px'>&#9660;</i>
        </p>
    </section>





    <section class="preguntas bg-white dark:bg-[#171C2F]">
        <h2 class="pregunta-titulo text-xl text-center bg-white dark:bg-[#171C2F] py-2 dark:text-[#faf1f1]">Preguntas
            Frecuentes</h2>
        <div class="accordion w-full">
            @foreach ($preguntas as $pregunta)
                    <!-- PREGUNTAS -->
                <div class="contentrBx relative mb-2">
                    <div
                        class="label bg-[#171C2F] text-white cursor-pointer p-4 text-lg dark:bg-[#FFB263] dark:text-black flex items-center justify-between">
                        {{ $pregunta['pregunta'] }}
                        <span class="plus-sign text-2xl transition-opacity duration-300">+</span>
                        <span class="minus-sign text-2xl hidden transition-opacity duration-300">-</span>
                    </div>
                    <div
                        class="content overflow-hidden transition-max-height duration-500 ease-in-out max-h-0 bg-white dark:bg-[#171C2F] text-black dark:text-[#faf1f1]">
                        <p class="p-4">{{ $pregunta['respuesta'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
