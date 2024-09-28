<x-dashboard-layout>
    <h1 class="capitalize text-4xl font-medium dark:text-gray-50">
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
                @foreach ($subscriptions as $subscription)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $subscription->subscription_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $subscription->course_count }}
                        </td>
                        <td class="px-6 py-4 min-w-28">
                            S/ {{ $subscription->price }}
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $subscription->duration_months }} meses
                        </td>
                        <td class="px-6 py-4 min-w-48">
                            {{ $subscription->description }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.membresias.edit',$subscription) }}"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline text-2xl"><i
                                    class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $subscriptions->links() }}
</x-dashboard-layout>
