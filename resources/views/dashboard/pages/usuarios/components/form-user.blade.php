<!-- Modal body -->
<form class="p-4 md:p-5">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-2 sm:col-span-1">
            <label for="nombre"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
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
            <label for="usuario"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuario</label>
            <input type="usuario" name="usuario" id="usuario"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        <div class="col-span-2">
            <label for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" placeholder="example@mail.com"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="contraseña"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
            <input type="contraseña" name="contraseña" id="contraseña"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="confirmar"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar
                contraseña</label>
            <input type="confirmar" name="confirmar" id="confirmar"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>

        <div class="col-span-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Foto de
                perfil</label>
            <!-- Input de archivo oculto -->
            <input class="hidden" aria-describedby="user_avatar_help" id="user_avatar" type="file">

            <!-- Label personalizado para el input de archivo -->
            <label for="user_avatar" id="file_label"
                class="block w-full text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-200 dark:text-white focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 p-2 text-center dark:hover:bg-gray-800/[.50]">
                Seleccionar archivo
            </label>

            <!-- Texto para mostrar el nombre del archivo seleccionado -->
            <p id="file_name" class="mt-2 text-sm text-gray-500 dark:text-gray-400">No se ha seleccionado
                ningún archivo</p>
        </div>
        
    </div>
    <button type="submit"
        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Registrar
    </button>
</form>