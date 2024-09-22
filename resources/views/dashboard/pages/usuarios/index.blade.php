<x-dashboard-layout>
    @switch($rol_id)
        @case(1)
            <h1>Admins</h1>
            <div>
                <span>Añadir</span>
            </div>
        @break

        @case(2)
            <h1>Instructores</h1>
            <div>
                <span>Añadir</span>
            </div>
        @break

        @case(3)
            <h1>Estudiantes</h1>
        @break

        @default
            <h1>Usuarios</h1>
    @endswitch
    <div
        class="relative overflow-x-auto shadow-md dark:border-2 dark:border-gray-500 sm:rounded-lg overflow-hidden overscroll-contain">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellido
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">
                            <img class="w-12 h-12 rounded-full object-cover" src="{{ asset($user->imagen) }}"
                                alt="Avatar {{ $user->username }}">
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->apellido }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$users->links()}}


</x-dashboard-layout>
