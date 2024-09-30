<x-dashboard-layout>
    <div class="container mx-auto">
        <h1 class="text-4xl font-semibold mb-4 dark:text-white">Editar Curso</h1>

        <form action="{{ route('admin.cursos.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="sections_to_delete" id="sections_to_delete">
            <input type="hidden" name="lessons_to_delete" id="lessons_to_delete">
            <div class="my-5 grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-md h-min">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <!-- Título del Curso -->
                        <div class="col-span-2 md:col-span-1 max-w-[500px]">
                            <x-input-field label="Título del Curso" type="text" name="title" id="title"
                                value="{{ old('title', $course->title) }}" placeholder="Angular: De cero a experto" />
                        </div>

                        <!-- Slug del Curso -->
                        <div class="col-span-2 md:col-span-1 max-w-[500px]">
                            <x-input-field label="Slug del Curso" type="text" name="slug" id="slug"
                                value="{{ old('slug', $course->slug) }}" placeholder="angular-cero-experto-2024" />
                        </div>

                        <!-- Dropdown Instructor -->
                        <div class="col-span-2 md:col-span-1 max-w-[500px]">
                            <label for="instructor_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instructor</label>
                            <select name="instructor_id" id="instructor_id"
                                class="block w-full px-5 py-2 border border-gray-300 rounded-lg p-2 bg-gray-50 shadow-sm outline-none focus:border-blue-500 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                                <option value="">Seleccione un instructor</option>
                                @foreach ($instructors as $instructor)
                                    <option value="{{ $instructor->id }}"
                                        {{ $course->instructor_id == $instructor->id ? 'selected' : '' }}>
                                        {{ $instructor->first_name }} {{ $instructor->last_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Dropdown Categoría -->
                        <div class="col-span-2 md:col-span-1 max-w-[500px]">
                            <label for="category_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría</label>
                            <select name="category_id" id="category_id"
                                class="block w-full px-5 py-2 border border-gray-300 rounded-lg p-2 bg-gray-50 shadow-sm outline-none focus:border-blue-500 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                                <option value="">Seleccione una categoría</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $course->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Precio del Curso -->
                        <div class="col-span-2 md:col-span-1 max-w-[500px]">
                            <x-input-field label="Precio del Curso" type="decimal" name="price" id="price"
                                value="{{ old('price', $course->price) }}" placeholder="" />
                        </div>

                        <!-- Imagen del Curso -->
                        <div class="col-span-2 md:col-span-1 max-w-[500px]">
                            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Imagen del
                                Curso</label>
                            <!-- Mostrar imagen actual -->
                            @if ($course->image)
                                <img src="{{ asset($course->image) }}" alt="Imagen del Curso"
                                    class="mb-4 w-36 h-36 object-cover">
                            @endif
                            <!-- Input de archivo oculto -->
                            <input class="hidden" aria-describedby="user_avatar_help" id="image" name="image"
                                type="file">
                            <!-- Label personalizado para el input de archivo -->
                            <label for="image" id="file_label"
                                class="text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-200 dark:text-white focus:outline-none dark:bg-gray-600 dark:border-gray-700 dark:placeholder-gray-400 p-2 text-center dark:hover:bg-gray-700">
                                Seleccionar archivo
                            </label>
                            <!-- Texto para mostrar el nombre del archivo seleccionado -->
                            <p id="file_name" class="mt-2 line-clamp-2 text-sm text-gray-500 dark:text-gray-400">No se
                                ha seleccionado ningún archivo</p>
                        </div>

                        <!-- Descripción del Curso -->
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                            <textarea id="description" rows="4" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Describe brevemente el curso">{{ old('description', $course->description) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-md h-min">
                    <!-- Secciones -->
                    <div id="sections-container" class="mb-4">
                        <h2 class="text-lg font-semibold mb-2 dark:text-gray-50">Secciones</h2>
                        <button type="button" id="add-section"
                            class="py-2.5 text-sm px-5 mb-2 text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700">Agregar
                            Sección</button>

                        <!-- Secciones existentes -->
                        @foreach ($course->sections as $sectionIndex => $section)
                            <div class="mb-4 section border-b-2 dark:border-gray-500 border-gray-400"
                                data-section-id="{{ $section->id }}">
                                <div class="mb-2">
                                    <label for="sections[{{ $sectionIndex }}][section_name]"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de
                                        la Sección</label>
                                    <input type="text" name="sections[{{ $sectionIndex }}][section_name]"
                                        id="sections[{{ $sectionIndex }}][section_name]"
                                        value="{{ old('sections.' . $sectionIndex . '.section_name', $section->section_name) }}"
                                        class="block w-full p-2.5 border rounded-lg text-sm text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-600 border-gray-300 dark:border-gray-500">
                                </div>

                                <div class="lessons-container">
                                    @foreach ($section->lessons as $lessonIndex => $lesson)
                                        <div class="flex gap-8 my-2 items-center" data-lesson-id="{{ $lesson->id }}">
                                            <label
                                                for="sections[{{ $sectionIndex }}][lessons][{{ $lessonIndex }}][lesson_name]"
                                                class="block min-w-16 text-sm font-medium text-gray-900 dark:text-white">Lección
                                            </label>
                                            <input type="text"
                                                name="sections[{{ $sectionIndex }}][lessons][{{ $lessonIndex }}][lesson_name]"
                                                id="sections[{{ $sectionIndex }}][lessons][{{ $lessonIndex }}][lesson_name]"
                                                value="{{ old('sections.' . $sectionIndex . '.lessons.' . $lessonIndex . '.lesson_name', $lesson->lesson_name) }}"
                                                class="block w-full p-2.5 border rounded-lg text-sm text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-600 border-gray-300 dark:border-gray-500">
                                            <button type="button"
                                                class="delete-lesson py-2 px-3 text-red-600 hover:text-red-700">Eliminar</button>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button"
                                    class="add-lesson py-2.5 text-sm px-5 mb-2.5 text-white bg-yellow-500 hover:bg-yellow-600 font-medium rounded-lg dark:bg-yellow-500 dark:hover:bg-yellow-600">Agregar
                                    Lección</button>
                                <button type="button"
                                    class="delete-section py-2 px-3 mt-2 text-red-600 hover:text-red-700">Eliminar
                                    Sección</button>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit"
                        class="py-2.5 text-sm px-5 text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-center dark:bg-green-600 dark:hover:bg-green-700">Actualizar
                        Curso</button>
                </div>
            </div>
        </form>
    </div>
</x-dashboard-layout>
