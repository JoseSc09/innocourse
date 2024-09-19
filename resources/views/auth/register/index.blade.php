<x-app-layout>
    <div class="container flex flex-col max-w-full md:flex-row justify-between bg-[#e0d4fd]">
        <section class="left mx-full flex-1 max-w-1/2 md:max-w-1/2">
            <img src="{{ Vite::image('Logo.jpg') }}" alt="Inno Course Logo" class="w-full h-full object-cover md:h-90">
            <div class="relative  bottom-20 left-12 z-20 w-full md:w-[550px] md:bottom-40 md:left-48">
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

                <h3 class="text-2xl font-serif">Regístrate:</h3>

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <p>{{ $message }}</p>
                @enderror

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" value="{{ old('apellido') }}">
                @error('apellido')
                    <p>{{ $message }}</p>
                @enderror

                <label for="username">Username:</label>
                <input type="text" name="username" value="{{ old('username') }}">
                @error('username')
                    <p>{{ $message }}</p>
                @enderror

                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror

                <label for="password">Contraseña:</label>
                <input type="password" name="password">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror

                <label for="password_confirmation">Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation">

                <div class="terms flex flex-col mt-6 w-1/2 gap-2 justify-center mb-4 md:w-1/2">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="terms" required class="scale-150 mr-2">
                        Acepto los términos y condiciones
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="privacy" required class="scale-150 mr-2">
                        Acepto la política de Privacidad
                    </label>
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
