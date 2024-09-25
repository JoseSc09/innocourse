<x-dashboard-layout>
    <!-- Modal body -->
    <form class="p-4 md:p-5" method="POST"
        action="{{ route('admin.membresias.update', $suscripcion->id_suscripcion) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid gap-4 mb-4 grid-cols-3">
            <div class="col-span-3">
                <label for="nombre_suscripcion"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input type="text" name="nombre_suscripcion" id="nombre_suscripcion"
                    value="{{ $suscripcion->nombre_suscripcion }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-1">
                <label for="num_cursos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nº
                    Cursos</label>
                <input type="number" name="num_cursos" id="num_cursos" value="{{ $suscripcion->num_cursos }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-1">
                <label for="duracion_meses"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duracion <span
                        class="font-normal">(meses)</span></label>
                <input type="number" name="duracion_meses" id="duracion_meses"
                    value="{{ $suscripcion->duracion_meses }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-1">
                <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio
                    S/.</label>
                <input type="number" name="precio" id="precio" value="{{ $suscripcion->precio }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-3">
                <label for="descripcion"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido</label>
                <textarea id="descripcion" rows="4" name="descripcion"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe el contenido aqui...">{{ $suscripcion->descripcion }}</textarea>
            </div>
        </div>

        <button type="submit"
            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Guardar
        </button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</x-dashboard-layout>
