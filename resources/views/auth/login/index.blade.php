<x-app-layout>
    <div class="container flex flex-col max-w-full md:flex-row justify-between bg-[#e0d4fd]">
        <section class="left mx-full flex-1 max-w-1/2 md:max-w-1/2">
            <img src="{{ Vite::image('Logo.jpg') }}" alt="Inno Course Logo" class="w-full h-full object-cover md:h-90">
            <div class="relative  bottom-20 left-12 z-20 w-full md:w-[550px] md:bottom-40 md:left-48">
                <p
                    class="bg-[#e0d4fd] text-black font-bold rounded-3xl inline-block pt-[15px] pr-[140px] pb-[15px] pl-[5px] ">
                    ¿Aun no eres parte de <br>esta comunidad?</p>
                <button onclick="window.location.href='#'"
                    class="absolute bottom-5 left-[200px] bg-black text-white font-bold py-2 px-4 rounded-3xl z-30 md:left-[240px] md:bottom-5 md:ml-60.5 md:px-5">Registrate</button>
            </div>
        </section>
        <section class="right flex-1 max-w-xl md:max-w-full bg-[#e0d4fd] flex flex-col items-center mb-20">
            <h2 class="text-white text-4xl font-bold text-center mt-8 p-4 rounded-lg md:text-3xl"
                style="-webkit-text-stroke: 2px black;">¡Bienvenid@ de vuelta!</h2>
            <form id="registerForm" class="flex flex-col ml-0 justify-center mt-8 w-150 gap-4 md:w-2/3" action="{{route('validate')}}" method="POST">
                @csrf
                <h3 class="text-2xl font-serif">Inicio Sesion:</h3>
                <div>
                    <label class="text-lg">Correo electronico</label>
                    <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required
                        class="w-full p-2 border-none rounded-3xl text-base mb-2 md:w-full">
                </div>
                <div>
                    <label class="text-lg">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required
                        class="w-full p-2 border-none rounded-3xl text-base mb-2 md:w-full">
                </div>
                <div class="mb-4">
                    <a href="#" class="botom-blue-one text-blue-500 md:mb-2 ">Crea o Recupera tu contraseña</a>
                </div>
                <div class="rigth-black-button flex justify-center">
                    <button type="submit"
                        class="bg-black text-white text-lg border-none rounded-3xl cursor-pointer py-2 px-6 mb-2 w-80 md:w-20%">Iniciar
                        Sesion</button>
                </div>
            </form>


            <div class="centered flex flex-col items-center w-1/2 ml-20 md:ml-0 md:w-full md:mt-4">
                <p class="mt-1 mb-2">¿Ya tienes una cuenta?</p>
                <a href="#" class="rigth-blue-button text-blue-500">Registrate</a>
            </div>
        </section>
    </div>
</x-app-layout>
