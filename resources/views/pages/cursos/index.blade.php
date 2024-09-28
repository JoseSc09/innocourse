<x-app-layout>
    <section class="container mx-auto dark:text-gray-200">
        <h1 class="text-4xl text-center font-bold my-8">Catalogo de cursos</h1>
        <form class="max-w-full mx-auto my-8">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <input type="search" id=""
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-[rgb(45,45,80)] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                    placeholder="Buscar curso..." required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-orange-400 dark:hover:bg-orange-500 dark:text-black transition">Buscar</button>
            </div>
        </form>
        <form action="" method="GET" class="mb-8">
            <!-- Coloca aquí los dropdowns -->
            <div class="flex space-x-4">
                <!-- Dropdown de Categoría -->
                <div class="relative">
                    <select name="category"
                        class="block w-full px-5 py-2 border border-gray-300 rounded-lg p-2 bg-white shadow-sm outline-none focus:border-blue-500 dark:bg-[rgb(45,45,80)] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                        <option value="">Selecciona una categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Dropdown de Precio -->
                <div class="relative">
                    <select name="price"
                        class="block w-full px-5 py-2 border border-gray-300 rounded-lg p-2 bg-white shadow-sm outline-none focus:border-blue-500 dark:bg-[rgb(45,45,80)] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                        <option value="">Selecciona un rango de precios</option>
                        <option value="low">Bajo a Alto</option>
                        <option value="high">Alto a Bajo</option>
                    </select>
                </div>

                <!-- Dropdown de Rating -->
                <div class="relative">
                    <select name="rating"
                        class="block w-full px-5 py-2 border border-gray-300 rounded-lg p-2 bg-white shadow-sm outline-none focus:border-blue-500 dark:bg-[rgb(45,45,80)] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                        <option value="">Selecciona un rating</option>
                        <option value="5">5 estrellas</option>
                        <option value="4">4 estrellas y más</option>
                        <option value="3">3 estrellas y más</option>
                        <option value="2">2 estrellas y más</option>
                        <option value="1">1 estrella y más</option>
                    </select>
                </div>

                <!-- Botón de búsqueda -->
                <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-sm hover:bg-indigo-700 font-medium dark:bg-orange-400 dark:hover:bg-orange-500 dark:text-black transition">Buscar</button>
            </div>
        </form>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mx-2 xl:mx-12">
            @foreach ($courses as $course)
                <div
                    class="flex flex-col justify-between p-5 bg-gray-50 dark:bg-[rgb(45,45,80)] xl:w-full border border-gray-300 rounded-lg shadow-lg dark:border-none dark:border-gray-900">
                    <a class="flex justify-center xl:h-64 " href="{{ route('courses.show', $course) }}">
                        <img class="2xl:object-contain 2xl:max-w-64" src="{{ asset($course->image) }}"
                            alt="{{ $course->title }}" />
                    </a>
                    <div class="mt-2 2xl:mt-4 flex flex-col min-h-60 justify-between items-center">
                        <a href="{{ route('courses.show', $course) }}">
                            <h5
                                class="line-clamp-2 text-center text-lg lg:text-xl xl:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $course->title }}</h5>
                        </a>
                        <div class="flex items-center w-full content-center justify-center">
                            <div>
                                <x-star-rating :rating="$course->reviews_avg_rating" />
                            </div>
                            <span
                                class="bg-blue-100 text-blue-800 dark:bg-orange-400 dark:text-orange-950 text-xs font-semibold px-2.5 py-0.5 rounded ms-3">{{ number_format($course->reviews_avg_rating, 1) }}</span>
                        </div>
                        <div class="hidden 2xl:block">
                            <p class="text-center line-clamp-2">{{ $course->description }}</p>
                        </div>
                        <div class="flex flex-col w-full 2xl:flex-row items-center gap-3 md:justify-between">
                            <span
                                class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">{{ 'S/ ' . $course->price }}</span>
                            <a href="{{ route('courses.show', $course) }}"
                                class="w-full 2xl:w-2/4 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-orange-400 dark:hover:bg-orange-500 dark:text-black transition">Más
                                información</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-5 mx-2">
            {{ $courses->links() }}
        </div>
    </section>
</x-app-layout>
