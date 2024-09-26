<x-app-layout>
    <div class="container flex flex-col max-w-full md:flex-row justify-between bg-[#e0d4fd]">
        <section class="hidden lg:block left mx-full flex-1 max-w-1/2 md:max-w-1/2">
            <img src="{{ Vite::image('Logo.jpg') }}" alt="Inno Course Logo" class="w-full h-full object-cover md:h-90">
            <div class="relative bottom-20 left-12 z-20 w-full md:w-[550px] md:bottom-40 md:left-48">
                <p
                    class="bg-[#e0d4fd] text-black font-bold rounded-3xl inline-block pt-[15px] pr-[140px] pb-[15px] pl-[5px] ">
                    ¿Ya tienes una cuenta <br>con nosotros?</p>
                <a href="{{ route('login.index') }}"
                    class="absolute bottom-5 left-[200px] bg-black text-white font-bold py-2 px-4 rounded-3xl z-30 md:left-[240px] md:bottom-5 md:ml-60.5 md:px-5">Iniciar
                    Sesión</a>
            </div>
        </section>
        <section class="right flex-1 max-w-xl md:max-w-full bg-[#e0d4fd] flex flex-col items-center mb-20">
            <h2 class="text-white text-4xl font-bold text-center mt-8 p-4 rounded-lg md:text-3xl"
                style="-webkit-text-stroke: 2px black;">¡Regístrate y comienza a<br> aprender!</h2>

            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif

            <form id="registerForm" class="flex flex-col ml-0 justify-center mt-8 w-150 gap-4 md:w-2/3"
                action="{{ route('validarRegistro') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h3 class="text-2xl">Regístrate:</h3>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{-- Input Nombre --}}
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                        <div class="mt-2">
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('first_name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Input Apellido --}}
                    <div class="sm:col-span-3">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                        <div class="mt-2">
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('last_name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Input Username --}}
                    <div class="sm:col-span-3">
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span
                                    class="flex rounded-l-md select-none items-center pl-3 text-gray-500 sm:text-sm bg-white">@</span>
                                <input type="text" name="username" id="username" value="{{ old('username') }}"
                                    autocomplete="username"
                                    class="block rounded-r-md flex-1 border-0 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        @error('username')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Input Email --}}
                    <div class="sm:col-span-full">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        </label>
                        <div class="mt-2">
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Input Password --}}
                    <div class="sm:col-span-full">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                            Contraseña</label>
                        <div class="mt-2">
                            <input id="password" type="password" name="password" value="{{ old('password') }}"
                                autocomplete="password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Input Comfirmar Password --}}
                    <div class="sm:col-span-full">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">
                            Contraseña</label>
                        <div class="mt-2">
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                autocomplete="password_confirmation"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                    </div>
                </div>
                <div class="text-sm leading-6">
                    <input id="termns" name="termns" type="checkbox" required
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                    <label for="termns" class="font-medium text-gray-900">Acepto los términos y
                        condiciones</label>
                </div>
                <div class="text-sm leading-6">
                    <input id="politics" name="politics" type="checkbox" required
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                    <label for="politics" class="font-medium text-gray-900">Acepto la política de Privacidad</label>
                </div>
                <div class="rigth-black-button flex justify-center">
                    <button type="submit"
                        class="bg-black text-white text-lg border-none rounded-3xl cursor-pointer py-2 px-6 mb-2 w-80 md:w-20%">Registrarme</button>
                </div>
            </form>


            <div class="centered flex flex-col items-center w-1/2 ml-20 md:ml-0 md:w-full md:mt-4">
                <p class="mt-1 mb-2">¿Ya tienes una cuenta?</p>
                <a href="{{ route('login.index') }}" class="rigth-blue-button text-blue-500">Iniciar Sesion</a>
            </div>
        </section>
    </div>

</x-app-layout>
