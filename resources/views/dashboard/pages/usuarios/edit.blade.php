<x-dashboard-layout>
    <!-- Modal body -->
    <form class="p-4 md:p-5" method="POST" action="{{ route('admin.usuarios.update', $user) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2 sm:col-span-1">
                <x-input-field label="Nombre" type="text" name="first_name" id="first_name"
                    value="{{ old('first_name', $user->first_name) }}" />
            </div>
            <div class="col-span-2 sm:col-span-1">
                <x-input-field label="Apellido" type="text" name="last_name" id="last_name"
                    value="{{ old('last_name', $user->last_name) }}" />
            </div>
            <div class="col-span-2">
                <x-input-field label="Nombre de usuario" type="text" name="username" id="username"
                    value="{{ old('username', $user->username) }}" />
            </div>
            <div class="col-span-2">
                <x-input-field label="Email" type="email" name="email" id="email"
                    placeholder="example@mail.com" value="{{ old('email', $user->email) }}" />
            </div>
            <div class="col-span-2 flex gap-5 items-center">
                <img class="w-36 h-36 rounded-full object-cover" src="{{ asset($user->image) }}" alt="">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto de
                        perfil</label>
                    <!-- Input de archivo oculto -->
                    <input class="hidden" aria-describedby="user_avatar_help" id="image" name="image"
                        type="file">

                    <!-- Label personalizado para el input de archivo -->
                    <label for="image" id="file_label"
                        class="text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-200 dark:text-white focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 p-2 text-center dark:hover:bg-gray-800/[.50]">
                        Seleccionar archivo
                    </label>

                    <!-- Texto para mostrar el nombre del archivo seleccionado -->
                    <p id="file_name" class="mt-2 text-sm text-gray-500 dark:text-gray-400">No se ha seleccionado
                        ningún archivo</p>
                </div>
            </div>

        </div>

        <button type="submit"
            class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700">
            Guardar
        </button>

    </form>
</x-dashboard-layout>
