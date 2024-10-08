<x-dashboard-layout>
    <!-- Modal body -->
    <form class="p-4 md:p-5" method="POST" action="{{ route('admin.sobre-nosotros.update', $about) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2">
                <x-input-field label="Título" type="text" name="title" id="title"
                    value="{{ old('title', $about->title) }}" />
            </div>
            <div class="col-span-2">
                <label for="text"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido</label>
                <textarea id="text" rows="4" name="text"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe el contenido aqui...">{{ old('text', $about->text) }}</textarea>
            </div>
            <div class="col-span-2 flex gap-5 items-center">
                <img class="w-48 h:32 md:w-72 md:h-48 rounded-md object-cover" src="{{ asset($about->image) }}"
                    alt="">
                <div>
                    <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Imagen</label>
                    <!-- Input de archivo oculto -->
                    <input class="hidden" aria-describedby="user_avatar_help" id="image" name="image"
                        type="file">

                    <!-- Label personalizado para el input de archivo -->
                    <label for="image" id="file_label"
                        class="text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-200 dark:text-white focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 p-2 text-center dark:hover:bg-gray-800/[.50]">
                        Seleccionar archivo
                    </label>

                    <!-- Texto para mostrar el nombre del archivo seleccionado -->
                    <p id="file_name" class="mt-2 text-sm text-gray-500 dark:text-gray-400">No se ha seleccionado
                        ningún archivo</p>
                </div>
            </div>

        </div>

        <button type="submit"
            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Guardar
        </button>
    </form>
</x-dashboard-layout>
