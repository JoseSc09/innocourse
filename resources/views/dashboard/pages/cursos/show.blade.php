<x-dashboard-layout>
    <h1 class="capitalize mt-2.5 text-4xl font-medium dark:text-gray-50">Detalle del curso</h1>
    <div class="my-5 grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-md h-min">
            {{-- Info curso --}}
            <div class="flex flex-col items-center gap-8">
                <div class="w-48 h-48 object-scale-down">
                    <img src="{{ asset($course->image) }}" alt="">
                </div>
                <div class="flex gap-5  items-center">
                    <p class="md:text-center text-lg dark:text-gray-50">Categoría: {{ $course->category->category_name }}</p>
                </div>
                <div class="flex gap-5 md:flex-col items-center">
                    <h1 class="text-xl text-center font-bold min-w-32 dark:text-gray-50">{{ $course->title }}</h1>
                    <p class="md:text-center dark:text-gray-50">{{ $course->description }}</p>
                </div>
                <div class="flex items-center md:gap-4 justify-around w-full">
                    <img src="{{ asset($course->instructor->image) }}" alt=""
                        class="w-32 h-32 object-cover rounded-full">
                    <div class="dark:text-gray-50">
                        <p class="text-xl font-semibold">{{ $course->instructor->first_name }}
                            {{ $course->instructor->last_name }}</p>
                        <span class="text"> {{ '@' . $course->instructor->username }}</span>
                    </div>
                </div>
                <div class="flex md:flex-col md:items-center md:gap-4 justify-around w-full">
                    <x-star-rating :rating="$course->reviews_avg_rating" />
                    <p class="text-2xl font-semibold dark:text-gray-50">S/. {{ $course->price }}</p>
                </div>
                <div class="mt-4">
                    <a href="{{ route('admin.cursos.edit', $course) }}"
                        class="py-2.5 text-sm px-5 text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-center dark:bg-green-600 dark:hover:bg-green-700">Editar
                        curso</a>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-md h-min">
            <!-- Lessons -->
            <h2 class="text-xl font-semibold dark:text-gray-50">Contenido del curso</h2>

            <div class="mt-4">
                @foreach ($course->sections as $section)
                    <div @class([
                        'border-b-2 border-slate-300 dark:border-slate-700' => $loop->last,
                        'border-b-0 border-2 border-slate-300 dark:border-slate-700',
                    ])>
                        <!-- Título de la sección (botón del acordeón) -->
                        <button
                            class="w-full text-left bg-slate-200 px-4 py-2 text-lg font-semibold focus:outline-none toggle-section dark:bg-slate-600 dark:text-gray-50"
                            data-section="section-{{ $section->id }}">
                            {{ $section->section_name }}
                        </button>

                        <!-- Contenido del acordeón (lecciones) -->
                        <div id="section-{{ $section->id }}"
                            class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                            <div class="list-disc list-inside ">
                                @foreach ($section->lessons as $lesson)
                                    <div
                                        class="hover:bg-slate-100 bg-gray-50 dark:bg-slate-400 dark:hover:bg-slate-500">
                                        <!-- Lección clickeable para abrir el modal -->
                                        <button class="w-full p-4 text-left text-gray-800 open-modal dark:text-gray-900"
                                            data-lesson="{{ $lesson->lesson_name }}"
                                            data-content="{{ asset($lesson->content) }}">
                                            {{ $lesson->lesson_name }}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div id="lessonModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-4 rounded-lg shadow-lg w-full md:w-3/4 md:max-w-4xl">
                <h2 id="modalLessonTitle" class="text-xl font-semibold mb-4"></h2>
                <img id="modalLessonImage" class="hover:cursor-pointer mb-4 w-full aspect-video"
                    alt="Video de la lección">
                <button id="closeModal" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</x-dashboard-layout>
