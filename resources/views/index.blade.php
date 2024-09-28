<x-app-layout>
    <section
        class="flex flex-col md:flex-row items-center justify-around py-12 bg-white border-b-2 border-gray-300 dark:bg-slate-800">
        <div class="content max-w-md md:max-w-xl text-left">
            <h1 class="text-4xl font-bold mb-6 dark:text-gray-50">Cambia tu realidad,<br> aprende online en vivo</h1>
            <a href="{{ route('payments.index') }}"
                class="signup-button inline-block px-6 py-3 bg-orange-400 text-black border-2 border-black rounded-full font-semibold transition hover:bg-orange-500">Inscribirme
                ahora</a>
            <p class="sub-text text-purple-700 mt-4">2 clases de prueba en tu primer curso</p>
        </div>
        <div class="grid grid-cols-1 md:max-w-lg">
            <div class="relative">
                <img src="{{ Vite::image('claseVirtual1.jpg') }}" alt="Clase en vivo"
                    class="h-50 md:h-62 w-full rounded-lg border-2 border-black object-cover">
                <div class="absolute top-10 left-3 lg:left-[-1.5rem] bg-black text-white p-2 rounded">
                    Jessica 15:31<br>Excelente clase!</div>
                <div
                    class="absolute top-12 right-3 lg:right-[-1.5rem] md:min-w-[10rem] bg-black text-white p-2 rounded text-sm w-28 text-center">
                    Juan 15:34<br>Hola profe!, tengo una consulta</div>
            </div>
            <div class="grid grid-cols-3 gap-2 mt-2">
                <img src="{{ Vite::image('claseVirtual2.jpg') }}" alt="Estudiante en clase"
                    class="w-full h-24 md:h-32 rounded-lg border-2 border-black object-cover">
                <img src="{{ Vite::image('claseVirtual3.jpg') }}" alt="Clase en linea"
                    class="w-full h-24 md:h-32 rounded-lg border-2 border-black object-cover">
                <img src="{{ Vite::image('claseVirtual4.jpg') }}" alt="Grupo de estudio"
                    class="w-full h-24 md:h-32 rounded-lg border-2 border-black object-cover">
            </div>
        </div>
    </section>
    
    <section class="community-section text-center py-12 bg-white border-b-2 border-gray-300 dark:bg-slate-800">
        <h2 class="text-3xl font-bold mb-4 dark:text-gray-100">Únete a nuestra comunidad online en vivo<br><span
                class="text-orange-400">más grande de latinoamérica</span></h2>
        <p class="text-lg dark:text-gray-100">Somos más de <span class="text-orange-400">5000</span> estudiantes de
            diferentes partes del
            Perú que trabajan en las más exitosas empresas de Perú</p>
    </section>

    <section
        class="partners-section flex flex-wrap justify-around items-center py-12 bg-white border-b-2 border-gray-300 dark:bg-slate-700 ">
        @foreach ($empresas as $empresa)
            <div class="partner text-center">
                <img src="{{ Vite::image($empresa['image']) }}" alt=""
                    class="w-28 h-20 mb-2 border-2 border-black rounded-lg dark:border-none">
                <p class="dark:text-gray-50">+{{ $empresa['graduates'] }} graduados</p>
            </div>
        @endforeach
    </section>

    <div class="text-center py-12 bg-white border-gray-300 mx-4 md:mx-16 lg:mx-24 dark:bg-slate-800">
        <h2
            class="text-3xl font-bold mb-6 bg-purple-100 inline-block p-3 rounded-lg border border-black dark:border-none dark:text-gray-100 dark:bg-indigo-950">
            ¿Qué quieres
            aprender?</h2>
        <div class="cursos-grid grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            @foreach ($courses as $course)
                <div class="curso p-6 rounded-lg hover:bg-purple-200 transition cursor-pointer border border-black dark:border-none"
                    style="background-color: rgba(151, 99, 246, 0.1);">
                    <span class="block text-lg dark:text-gray-100">Curso de</span>
                    <span class="block text-2xl font-bold mt-2 dark:text-gray-100">⭐ {{ $course->title }}</span>
                </div>
            @endforeach
        </div>
        <a href="{{ route('courses.index') }}"
            class="ver-cursos-btn inline-block px-6 py-3 bg-orange-400 text-black border-2 border-black rounded-full font-semibold transition hover:bg-orange-500 mt-8">Ver
            todos los cursos</a>
    </div>


    <div class="py-12 bg-white border-b-2 border-t-2 border-gray-300 dark:bg-slate-800">
        <div class="flex mx-10 flex-col lg:flex-row justify-between items-center">
            <div class="lg:min-w-[580px]">
                <h2 class="text-2xl lg:max-w-2xl md:text-4xl font-bold text-orange-400 text-center mb-2">
                    Somos la autoridad en maximizar la educación en línea en Latinoamérica
                </h2>
                @foreach ($features as $feature)
                    <p class="flex items-center gap-6 p-4 dark:text-gray-100"> <i
                            class="{{ $feature['icon'] }} fa-xl"></i>{{ $feature['content'] }}</p>
                @endforeach
            </div>
            <div class="hidden lg:block">
                <img src="{{ Vite::image('cursoInfo.jpg') }}" alt="Instructora dando clase en línea"
                    class="max-h-96 rounded-xl border-3 border-black">
            </div>
        </div>
    </div>

    <div class="py-12 px-4">
        <h1 class="text-center text-3xl font-bold mb-8 dark:text-gray-50">¡Elige una de nuestras promociones!</h1>
        <div class="promo-box-container flex flex-wrap justify-center">
            @foreach ($subscriptions as $subscription)
                <div
                    class="promo-box w-full sm:w-80 p-6 m-4 rounded-lg shadow-lg bg-gray-50 dark:bg-[rgb(45,45,80)] border border-gray-200 dark:border-none">
                    <div class="promo-header mb-4 ">
                        <div class="promo-type text-sm text-gray-600 dark:text-gray-100">Suscripción</div>
                        <div class="promo-title text-2xl font-bold text-black dark:text-gray-100">
                            {{ $subscription->subscription_name }}</div>
                    </div>
                    <div class="promo-price text-xl text-gray-700 mb-4 dark:text-gray-100">
                        <span>S/</span><span class="amount text-4xl font-bold">{{ $subscription->price }}</span><span>
                            Soles</span>
                        <span class="promo-duration block text-sm text-gray-600 dark:text-gray-100">
                            {{ $subscription->course_count }} Curso de
                            {{ $subscription->duration_months }} meses</span>
                    </div>
                    <div class="promo-description text-sm text-gray-600 mb-6 dark:text-gray-100">
                        {{ $subscription->description }}
                    </div>
                    <div class="yape flex items-center justify-end text-sm text-gray-600 dark:text-gray-100">
                        <p>Puedes pagar con</p>
                        <img src="{{ Vite::image('yape.jpg') }}" alt="Yape" class="ml-2 w-10 rounded">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="signup-button-container text-center mt-8">
            <a href="{{ route('payments.index') }}"
                class="signup-button inline-block px-6 py-3 bg-orange-400 hover:bg-orange-500 transition text-black border-2 border-black rounded-full font-semibold">Inscribirme
                ahora</a>
        </div>
    </div>
</x-app-layout>
