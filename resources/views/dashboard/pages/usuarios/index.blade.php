<x-dashboard-layout>
    <table class="min-w-full bg-white border border-gray-200 rounded-md shadow-md">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4 border-b">Imagen</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Apellido</th>
                <th class="py-2 px-4 border-b">Username</th>
                <th class="py-2 px-4 border-b">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <!-- Ejemplo de fila de datos -->
                <tr>
                    <td class="py-2 px-4 border-b"> <img class="w-12 h-12 rounded-full" src="{{ asset($user->imagen) }}" alt=""> </td>
                    <td class="py-2 px-4 border-b">{{ $user->nombre }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->apellido }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->username }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-dashboard-layout>
