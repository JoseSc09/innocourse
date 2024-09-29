<x-dashboard-layout>
    <h1 class="capitalize text-4xl font-medium dark:text-gray-50">
        {{ $rol->rol_name }}
    </h1>
    @if ($rol->rol_name !== 'estudiante')
        <div class="w-24 my-6">
            <a href="{{ route('admin.usuarios.create') }}"
                class="block py-2.5 text-sm  text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 ">
                Añadir
            </a>
        </div>
    @endif
    <x-admin-table :headers="['Imagen', 'Nombre', 'Apellido', 'Username', 'Email', 'Acción']" :rows="$usersRows" />
    {{ $users->links() }}
</x-dashboard-layout>
