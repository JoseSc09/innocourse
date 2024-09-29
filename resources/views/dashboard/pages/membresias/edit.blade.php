<x-dashboard-layout>
    <!-- Modal body -->
    <form class="p-4 md:p-5" method="POST" action="{{ route('admin.membresias.update', $subscription) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid gap-4 mb-4 grid-cols-3">
            <div class="col-span-3">
                <x-input-field label="Nombre de la membresía" type="text" name="subscription_name" id="subscription_name"
                    value="{{ old('subscription_name', $subscription->subscription_name) }}" />
            </div>
            <div class="col-span-1">
                <x-input-field label="Nº Cursos" type="number" name="course_count" id="course_count"
                    value="{{ old('course_count', $subscription->course_count) }}" />
            </div>
            <div class="col-span-1">
                <x-input-field label="Duración (meses)" type="number" name="duration_months" id="duration_months"
                    value="{{ old('duration_months', $subscription->duration_months) }}" />
            </div>
            <div class="col-span-1">
                <x-input-field label="Precio S/." type="number" name="price" id="price"
                    value="{{ old('price', $subscription->price) }}" />
            </div>
            <div class="col-span-3">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido</label>
                <textarea id="description" rows="4" name="description"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Escribe el contenido aqui...">{{ old('description', $subscription->description) }}</textarea>
            </div>
        </div>

        <button type="submit"
            class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Guardar
        </button>
    </form>
</x-dashboard-layout>
