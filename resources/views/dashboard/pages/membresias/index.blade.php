<x-dashboard-layout>
    <h1 class="capitalize">
        Membresías
    </h1>
    <div
        class="relative overflow-x-auto shadow-md dark:border-2 dark:border-gray-500 sm:rounded-lg overflow-hidden overscroll-contain">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nº Cursos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Duración
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripción
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suscripciones as $suscripcion)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $suscripcion->nombre_suscripcion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $suscripcion->num_cursos }}
                        </td>
                        <td class="px-6 py-4 min-w-28">
                            S/ {{ $suscripcion->precio }}
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $suscripcion->duracion_meses }} meses
                        </td>
                        <td class="px-6 py-4 min-w-48">
                            {{ $suscripcion->descripcion }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.membresias.edit',$suscripcion->id_suscripcion) }}"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline text-2xl"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $suscripciones->links() }}
</x-dashboard-layout>
