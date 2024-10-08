<x-app-layout>
    <div class="container mx-auto shadow-md dark:shadow-none dark:text-gray-200">
        <div class="bg-white p-6 dark:bg-slate-800">
            @foreach ($sections as $section)
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-6 md:mb-12 {{ $section['reverse'] ? 'md:flex-row-reverse' : '' }}">
                    <!-- Imagen -->
                    <div class="{{ $section['reverse'] ? 'md:order-last' : '' }} rounded-lg overflow-hidden">
                        <img class="h-72 w-full object-cover object-center" src="{{ asset($section['data']->image) }}"
                            alt="Imagen de {{ strtolower($section['data']->title) }}">
                    </div>

                    <!-- Texto -->
                    <div
                        class="flex flex-col justify-center lg:col-span-2 text-left {{ $section['reverse'] ? 'text-right' : 'text-left' }}">
                        <h2
                            class="font-sans font-bold text-xl lg:text-3xl uppercase mb-4 {{ $section['reverse'] ? 'text-left' : 'text-right' }}">
                            {{ $section['data']->title }}
                        </h2>
                        <p
                            class="lg:text-xl md:text-base text-left md:leading-relaxed lg:leading-loose {{ $section['reverse'] ? 'text-left' : 'text-right' }}">
                            {{ $section['data']->text }}
                        </p>
                    </div>
                </div>
            @endforeach
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
                    @foreach ($courses as $course)
                        <div
                            class="max-w-sm bg-gray-50 dark:bg-[rgb(45,45,80)] border border-gray-300 rounded-lg shadow-lg dark:border-none dark:border-gray-900 ">
                            <img class="rounded-t-lg" src="{{ asset($course->instructor->image) }}" alt="" />
                            <div class="p-5">
                                <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $course->instructor->first_name . ' ' . $course->instructor->last_name }}</h5>
                                <span
                                    class="text-sm text-gray-600 tracking-tight dark:text-gray-400">{{ $course->name }}</span>
                                <p class="my-3 font-normal text-gray-700 dark:text-gray-400">Curso {{ $course->title }}
                                </p>
                                <a href="{{ route('courses.index') }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Ver cursos
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Circulos --}}
        <div class="circle-first bg-purple-400 dark:bg-purple-500"></div>
        <div class="circle-second bg-purple-400 dark:bg-purple-500"></div>
        <div class="circle-third bg-purple-400 dark:bg-purple-500"></div>
    </div>
</x-app-layout>
