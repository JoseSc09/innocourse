<x-dashboard-layout>
    <h1 class="capitalize text-4xl font-medium dark:text-gray-50">Cursos</h1>
    <div class="mt-6 2xl:max-w-[90%] 2xl:mx-auto">
        <a href="{{ route('admin.cursos.create') }}"
            class="block w-24 py-2.5 text-sm  text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 ">
            Añadir
        </a>
    </div>
    <x-admin-table :headers="['Imagen', 'Titulo', 'Descripción', 'Acción']" :rows="$coursesRows" />
    {{ $courses->links() }}
    <x-modal-confirmacion modalId="deleteModal" title="Confirmar eliminación"
        message="¿Estás seguro que deseas eliminar este curso?" />
</x-dashboard-layout>
