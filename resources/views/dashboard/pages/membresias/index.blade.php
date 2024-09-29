<x-dashboard-layout>
    <h1 class="capitalize text-4xl font-medium dark:text-gray-50">
        Membresías
    </h1>
    <x-admin-table :headers="['Nombre', 'Nº Cursos', 'Precio', 'Duración', 'Descripción', 'Acción']" :rows="$subscriptionsRows" />
    {{ $subscriptions->links() }}
</x-dashboard-layout>
