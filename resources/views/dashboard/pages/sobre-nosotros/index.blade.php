<x-dashboard-layout>
    <h1 class="capitalize text-4xl font-medium dark:text-gray-50">
        Sobre Nosotros
    </h1>
    <div
        class="relative overflow-x-auto shadow-md dark:border-2 dark:border-gray-500 sm:rounded-lg overflow-hidden overscroll-contain">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Titulo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contenido
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($about as $dato)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $dato->title }}
                        </td>
                        <td class="px-6 py-4 overflow-hidden text-ellipsis min-w-96">
                            {{ $dato->text }}
                        </td>
                        <td class="px-6 py-4">
                            <img class="w-60 h-36 max-w-60 rounded-md object-cover" src="{{ asset($dato->image) }}"
                                alt="{{ $dato->title }}">
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.sobre-nosotros.edit', $dato) }}"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline text-2xl"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $about->links() }}
</x-dashboard-layout>
