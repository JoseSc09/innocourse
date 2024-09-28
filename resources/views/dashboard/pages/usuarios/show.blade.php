<x-dashboard-layout>
    <h1 class="capitalize text-4xl font-medium dark:text-gray-50">
        {{ $rol->rol_name }}
    </h1>
    @if ($rol->rol_name !== 'estudiante')
    <div class="w-24 my-6">
        <a href="{{ route('admin.usuarios.create') }}"
            class="block py-2.5 text-sm  text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 ">
            Añadir
        </a>
    </div>
    @endif
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
                    @if ($rol->rol_name !== 'estudiante')
                        <th scope="col" class="px-6 py-3">
                            Acción
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">
                            <img class="w-12 h-12 rounded-full object-cover" src="{{ asset($user->image) }}"
                                alt="Avatar {{ $user->username }}">
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->first_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        @if ($rol->rol_name !== 'estudiante')
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.usuarios.edit', $user) }}"
                                    class="font-medium text-green-600 dark:text-green-500 hover:underline text-2xl"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->links() }}

</x-dashboard-layout>
