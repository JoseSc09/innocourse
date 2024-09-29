<x-dashboard-layout>
    <h1 class="capitalize text-4xl font-medium dark:text-gray-50">
        Sobre Nosotros
    </h1>
    <x-admin-table :headers="['Título', 'Contenido', 'Imagen', 'Acción']" :rows="$aboutsRows" />
    {{ $abouts->links() }}
</x-dashboard-layout>
