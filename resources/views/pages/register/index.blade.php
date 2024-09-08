<x-app-layout>

<div class="container mx-auto flex flex-col md:flex-row justify-between bg-[#e0d4fd]">
    <section class="left flex-1 max-w-xl md:max-w-xl"> 
        <img src="{{ Vite::image('Logo.jpg') }}" alt="Inno Course Logo" class="w-full h-full object-cover md:h-90">
        <div class="relative bottom-14 left-12 z-20 md:bottom-10 md:left-6">
            <p class="bg-[#e0d4fd] text-black p-3 px-28 rounded-3xl inline-block md:px-10">¿Ya tienes una cuenta <br>con nosotros?</p>
            <button onclick="location.href='IniciarSesion.html'" class="absolute bottom-16 left-4 bg-black text-white font-bold py-2 px-4 rounded-3xl z-30 md:bottom-12 md:left-2 md:px-3">Iniciar Sesión</button>
        </div>
    </section>

    <section class="right flex-1 max-w-xl md:max-w-xl bg-[#e0d4fd] flex-wrap mb-20">
        <h2 class="text-white text-4xl font-bold text-center mt-8 p-4 rounded-lg md:text-3xl" style="-webkit-text-stroke: 2px black;">¡Regístrate y comienza a<br> aprender!</h2>

        <form id="registerForm" class="flex flex-col items-start justify-center mt-8 ml-10 w-4/5 gap-4 md:ml-0 md:w-full">
            <h3 class="text-2xl font-serif ml-20 md:ml-10">Regístrate:</h3>
            <div class="ml-20 md:ml-10">
                <p class="text-lg">Correo electronico</p>
                <input type="email" id="email" placeholder="Ingrese su correo electrónico" required class="w-full p-2 border-none rounded-lg text-base mb-2 md:w-full">
            </div>
            <div class="ml-20 md:ml-10">
                <p class="text-lg">Contraseña</p>
                <input type="password" id="password" placeholder="Ingrese su contraseña" required class="w-full p-2 border-none rounded-lg text-base mb-2 md:w-full">
            </div>
            <div class="ml-20 md:ml-10">
                <p class="text-lg">Confirma tu contraseña</p>
                <input type="password" id="confirmPassword" placeholder="Confirme su contraseña" required class="w-full p-2 border-none rounded-lg text-base mb-2 md:w-full">
            </div>
        </form>

        <div class="terms flex flex-col items-start mt-6 ml-32 w-1/2 gap-2 justify-center mb-4 md:ml-10 md:w-full">
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
            <button type="submit" class="bg-black text-white text-lg border-none rounded-lg cursor-pointer py-2 px-6 mb-2 w-80 md:w-full">Registrarme</button>
        </div>

        <div class="centered inline-block flex flex-col items-center w-1/2 ml-20 md:ml-0 md:w-full md:mt-4">
            <p class="mt-1 mb-2">¿Ya tienes una cuenta?</p>
            <a href="/Categorias/Login.html" class="rigth-blue-button text-blue-500">Iniciar Sesion</a>
        </div>
    </section>
</div>


</x-app-layout>