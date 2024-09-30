@props(['headers', 'rows'])
<div
    class="relative 2xl:max-w-[90%] 2xl:mx-auto my-5 overflow-x-auto shadow-md dark:border-2 dark:border-gray-500 sm:rounded-lg overflow-hidden overscroll-contain">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($headers as $header)
                    <th scope="col" class="px-6 py-3">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    @foreach ($row as $cell)
                        <td class="px-6 py-4">
                            <p class=" line-clamp-4 {{ isset($cell['delete_link']) != null ? 'flex gap-6' : '' }}">

                                @if (isset($cell['avatar']))
                                    <img class="w-12 h-12 rounded-full object-cover" src="{{ $cell['avatar'] }}"
                                        alt="Avatar">
                                @elseif (isset($cell['image']))
                                    <img class="min-w-48 h-36 object-scale-down" src="{{ $cell['image'] }}"
                                        alt="Imagen">
                                @elseif (isset($cell['edit_link']) || isset($cell['delete_link']) || isset($cell['show_link']))
                                    @if (isset($cell['show_link']))
                                        <a href="{{ $cell['show_link'] }}"
                                            class="font-medium text-blue-500 dark:text-blue-400 text-2xl">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    @endif
                                    @if (isset($cell['edit_link']))
                                        <a href="{{ $cell['edit_link'] }}"
                                            class="font-medium text-green-600 dark:text-green-500 text-2xl">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    @endif
                                    @if (isset($cell['delete_link']))
                                        <button onclick="openModal('{{ $cell['routeDelete'] }}')"
                                            class="font-medium text-red-600 dark:text-red-500 text-2xl">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endif
                                @else
                                    {{ $cell['value'] }}
                                @endif
                            </p>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
