<x-dashboard-layout>
    <!-- Modal body -->
    <form class="p-4 md:p-5" method="POST" action="{{ route('admin.usuarios.store', ['rol_id' => $rol_id]) }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2 sm:col-span-1">
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input type="text" name="nombre" id="nombre"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="apellido"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                <input type="apellido" name="apellido" id="apellido"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-2">
                <label for="username"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuario</label>
                <input type="text" name="username" id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" placeholder="example@mail.com"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar
                    contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>

            <div class="col-span-2 flex gap-5 items-center">
                <img class="w-36 h-36 rounded-full object-cover"
                    src="{{ asset('storage/images/users/user_default.png') }}" alt="">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto de
                        perfil</label>
                    <!-- Input de archivo oculto -->
                    <input class="hidden" aria-describedby="user_avatar_help" id="imagen" name="imagen"
                        type="file">

                    <!-- Label personalizado para el input de archivo -->
                    <label for="imagen" id="file_label"
                        class="text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-200 dark:text-white focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 p-2 text-center dark:hover:bg-gray-800/[.50]">
                        Seleccionar archivo
                    </label>

                    <!-- Texto para mostrar el nombre del archivo seleccionado -->
                    <p id="file_name" class="mt-2 text-sm text-gray-500 dark:text-gray-400">No se ha seleccionado
                        ningún archivo</p>
                </div>
            </div>

        </div>
        <div class="flex gap-4">

            <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Registrar
            </button>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</x-dashboard-layout>
