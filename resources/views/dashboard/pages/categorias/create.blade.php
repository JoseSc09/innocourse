<x-dashboard-layout>
    <!-- Modal body -->
    <form class="p-4 md:p-5" method="POST" action="{{ route('admin.categorias.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2 md:col-span-1 max-w-[500px]">
                <x-input-field label="Nombre de categoría" type="text" name="category_name" id="category_name"
                    value="{{ old('category_name') }}" />
            </div>
        </div>
        <div class="flex gap-4">

            <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Registrar categoría
            </button>
        </div>
    </form>
</x-dashboard-layout>
