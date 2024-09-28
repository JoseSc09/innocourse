<x-app-layout>
    <div class="dark:bg-[#1e1e2d] text-white min-h-screen">
        <!-- Contenedor principal -->
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col md:flex-row items-start justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <div class="flex items-center mb-4">
                        <img class="w-20 h-20" src="{{ asset($course->image) }}" alt="Web Development Icon">
                        <div>
                            <h1 class="text-4xl font-bold">Curso de Desarrollo Web</h1>
                            <p>Aprende todos los roles y rutas que existen para ser un desarrollador web profesional
                                en 2022</p>
                        </div>
                    </div>
                    <!-- Botón de inscripción -->
                    <button
                        class="mt-4 bg-yellow-500 text-black font-semibold py-2 px-6 rounded-full text-lg hover:bg-yellow-600 transition duration-300 border-2 border-yellow-400">
                        Inscribirme ahora
                    </button>
                </div>
                <!-- Imagen principal del curso -->
                <div class="md:w-1/2">
                    <img class="w-80 h-80 object-cover" src="{{ asset($course->image) }}" alt="Desarrollo Web">
                </div>
            </div>
        </div>

        <!-- Formas de pago -->
        <div class="container mx-auto px-4 mb-12">
            <button
                class="w-full bg-white text-black py-3 px-6 rounded-lg flex items-center justify-between hover:bg-gray-100 transition duration-300">
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
            <h2 class="text-3xl dark:txt-gray-50 font-bold mb-8">Programa del curso de Desarrollo Web</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-[#3b2768] p-6 rounded-lg border border-[#a68aff]">
                    <h3 class="text-2xl font-semibold mb-4 text-[#a68aff]">Front_end</h3>
                    <ul class="space-y-2">
                        <li>1 Prototipado y conceptos básicos de HTML</li>
                        <li>2 Primeros pasos con HTML</li>
                        <li>3 Incluyendo CSS a nuestro proyecto</li>
                        <li>4 CSS + Box Modeling</li>
                        <!-- Más items... -->
                    </ul>
                </div>
                <div class="bg-[#3b2768] p-6 rounded-lg border border-[#a68aff]">
                    <h3 class="text-2xl font-semibold mb-4 text-[#a68aff]">Back_end</h3>
                    <ul class="space-y-2">
                        <li>1 Lenguajes de programación</li>
                        <li>2 Frameworks y bibliotecas</li>
                        <li>3 Bases de datos</li>
                        <li>4 APIs y servicios web</li>
                        <!-- Más items... -->
                    </ul>
                </div>
            </div>
        </div>

        <!-- Profesores y Asistentes -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-[#3b2768] p-6 rounded-lg border border-[#a68aff]">
                    <h3 class="text-2xl font-semibold mb-4">Profesor del curso</h3>
                    <div class="flex items-center">
                        <img src="{{ Vite::image('profesor1.png') }}" alt="Luz Lucero"
                            class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="text-xl font-semibold">Luz Lucero</h4>
                            <p>Desarrolladora Backend</p>
                            <p class="text-sm mt-2">5 años de experiencia en el frontend, backend y liderazgo</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#3b2768] p-6 rounded-lg border border-[#a68aff]">
                    <h3 class="text-2xl font-semibold mb-4">Asistentes del curso</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <img src="{{ asset('pedro-rodriguez.jpg') }}" alt="Pedro Rodriguez"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-lg font-semibold">@Pedro Rodriguez</h4>
                                <a href="#" class="text-blue-400 hover:underline">Ver perfil</a>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('luis-tasayco.jpg') }}" alt="Luis Tasayco"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="text-lg font-semibold">@Luis Tasayco</h4>
                                <a href="#" class="text-blue-400 hover:underline">Ver perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Promociones -->
        <div class="container mx-auto px-4 py-12">
            <h2 class="text-3xl font-bold mb-8 text-center">¡ELIGE UNA DE NUESTRAS PROMOCIONES!</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Promoción Pruebita -->
                <div class="bg-[#3b2768] p-6 rounded-lg text-center border border-[#a68aff]">
                    <h3 class="text-xl font-semibold mb-2">Suscripción Pruebita</h3>
                    <p class="text-3xl font-bold">S/ 70</p>
                    <p class="text-sm mb-4">Curso de 4 meses</p>
                    <p class="text-sm mb-4">Se parte del curso y aprende muchos fundamentos claves para tu vida
                        profesional.</p>
                    <img src="{{ asset('yape.png') }}" alt="Paga con Yape" class="h-8 mx-auto">
                </div>

                <!-- Promoción Achorado -->
                <div class="bg-[#3b2768] p-6 rounded-lg text-center border border-[#a68aff]">
                    <h3 class="text-xl font-semibold mb-2">Suscripción Achorado</h3>
                    <p class="text-3xl font-bold">S/ 125</p>
                    <p class="text-sm mb-4">2 Cursos de 4 meses</p>
                    <p class="text-sm mb-4">Se parte del curso y aprende muchos fundamentos claves para tu vida
                        profesional.</p>
                    <img src="{{ asset('yape.png') }}" alt="Paga con Yape" class="h-8 mx-auto">
                </div>

                <!-- Promoción Opulencia -->
                <div class="bg-[#3b2768] p-6 rounded-lg text-center border border-[#a68aff]">
                    <h3 class="text-xl font-semibold mb-2">Suscripción Opulencia</h3>
                    <p class="text-3xl font-bold">S/ 180</p>
                    <p class="text-sm mb-4">3 Cursos de 4 meses</p>
                    <p class="text-sm mb-4">Se parte del curso y aprende muchos fundamentos claves para tu vida
                        profesional.</p>
                    <img src="{{ asset('yape.png') }}" alt="Paga con Yape" class="h-8 mx-auto">
                </div>
            </div>
            <div class="mt-16 text-center">

                <!-- Botón de Inscripción -->
                <button
                    class="bg-yellow-500 text-black font-semibold py-3 px-8 rounded-full text-xl hover:bg-yellow-600 transition duration-300 border-2 border-yellow-400">
                    Inscribirme ahora
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
