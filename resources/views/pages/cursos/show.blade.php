<x-app-layout>
    <div class="dark:bg-slate-800 bg-white text-black dark:text-white min-h-screen">
        <!-- Contenedor principal -->
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col gap-4 md:flex-row justify-between xl:justify-evenly items-center">
                <!-- Imagen con borde gris ancho -->
                <img class="w-80 h-80 border-4 border-gray-400" src="{{ asset($course->image) }}" alt="">
                <div class="flex flex-col gap-5 text-center">
                    <h1 class="text-4xl font-bold text-black dark:text-white">{{ $course->title }}</h1>
                    <p class="text-xl text-black dark:text-white">
                        {{ $course->description }}
                    </p>
                </div>
            </div>
            <!-- Botón de inscripción -->
            <button
                class="mt-8 bg-yellow-500 text-black font-semibold py-2 px-6 rounded-full text-lg hover:bg-yellow-600 transition duration-300 border-2 border-yellow-400">
                Inscribirme ahora
            </button>
        </div>

        <!-- Formas de pago -->
        <div class="container mx-auto px-4 mb-12">
            <!-- Botón con borde gris ancho -->
            <button
                class="w-full bg-white text-black py-3 px-6 rounded-lg flex items-center justify-between hover:bg-gray-100 transition duration-300 border-4 border-gray-400">
                <span class="font-semibold">Formas de pago</span>
                <div class="flex space-x-4">
                    <img src="{{ Vite::image('visa.png') }}" alt="Visa" class="h-6">
                    <img src="{{ Vite::image('mastercard.png') }}" alt="MasterCard" class="h-6">
                    <img src="{{ Vite::image('yapeplin.png') }}" alt="Yape" class="h-6">
                    <img src="{{ Vite::image('pagoefectivo.png') }}" alt="Pago Efectivo" class="h-6">
                </div>
            </button>
        </div>

        <!-- Programa del curso -->
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl dark:text-white-50 font-bold mb-8">Contenido del curso</h2>
            <div class="grid grid-cols-1 gap-8">
                <div class="bg-[#3b2768] px-4 py-2.5 rounded-lg border border-[#a68aff] ">

                    @foreach ($course->sections as $section)
                        <!-- Acordeón para Frontend -->
                        <button class="flex items-center justify-between w-full text-left"
                            onclick="toggleSection('{{ $section->section_name }}')">
                            <h3 class="text-2xl font-semibold text-[#a68aff]">{{ $section->section_name }}</h3>
                            <span id="arrow-{{ $section->section_name }}"
                                class="transform transition-transform text-white">▼</span>
                        </button>
                        <div id="{{ 'section-' . $section->section_name }}" class="hidden">
                            <ul class="space-y-2">
                                @foreach ($section->lessons as $lesson)
                                    <li>
                                        <button class="flex items-center text-gray-300 justify-between w-full text-left">
                                            {{ $lesson->lesson_name }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Profesores y Asistentes -->
        <div class="container mx-auto px-4 py-12 flex justify-center">
            <div class="bg-[#3b2768] p-6 rounded-lg border border-[#a68aff] max-w-lg">
                <h3 class="text-2xl font-semibold mb-4 text-white">Profesor del curso</h3>
                <div class="flex items-center">
                    <img src="{{ asset($course->instructor->image) }}" alt=""
                        class="w-24 h-24 object-cover rounded-full mr-4 border-4 border-gray-400">
                    <div>
                        <h4 class="text-xl font-semibold text-white">{{ $course->instructor->first_name }}
                            {{ $course->instructor->last_name }}</h4>
                        <p class="text-white">{{ $course->category->category_name }}</p>
                        <p class="text-sm text-gray-300 mt-2">5 años de experiencia en el frontend, backend y liderazgo
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Sección de Promociones -->
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold mb-8 text-center">¡ELIGE UNA DE NUESTRAS PROMOCIONES!</h2>
            <div class="flex flex-wrap justify-center">
                @foreach ($subscriptions as $subscription)
                    <div
                        class="promo-box w-full sm:w-80 p-6 m-4 rounded-lg shadow-lg bg-gray-50 dark:bg-[rgb(45,45,80)] border border-gray-200 dark:border-none">
                        <div class="promo-header mb-4 ">
                            <div class="promo-type text-sm text-gray-600 dark:text-gray-100">Suscripción</div>
                            <div class="promo-title text-2xl font-bold text-black dark:text-gray-100">
                                {{ $subscription->subscription_name }}</div>
                        </div>
                        <div class="promo-price text-xl text-gray-700 mb-4 dark:text-gray-100">
                            <span>S/</span><span
                                class="amount text-4xl font-bold">{{ $subscription->price }}</span><span>
                                Soles</span>
                            <span class="promo-duration block text-sm text-gray-600 dark:text-gray-100">
                                {{ $subscription->course_count }} Curso de
                                {{ $subscription->duration_months }} meses</span>
                        </div>
                        <div class="promo-description text-sm text-gray-600 mb-6 dark:text-gray-100">
                            {{ $subscription->description }}
                        </div>
                        <div class="yape flex items-center justify-end text-sm text-gray-600 dark:text-gray-100">
                            <p>Puedes pagar con</p>
                            <img src="{{ Vite::image('yape.jpg') }}" alt="Yape" class="ml-2 w-10 rounded">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Script para el funcionamiento del acordeón -->
        <script>
            // Función para mostrar u ocultar secciones (Frontend, Backend, Prueba)
            function toggleSection(section) {
                const content = document.getElementById(`section-${section}`);
                const arrow = document.getElementById(`arrow-${section}`);
                
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    arrow.style.transform = 'rotate(180deg)';
                } else {
                    content.classList.add('hidden');
                    arrow.style.transform = 'rotate(0deg)';
                }
            }
        </script>
    </div>
</x-app-layout>
