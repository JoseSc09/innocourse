<x-app-layout>
<section class="hero-section flex flex-col md:flex-row items-center justify-around py-12 bg-white border-b-2 border-gray-300">
    <div class="content max-w-md md:max-w-xl text-left">
        <h1 class="text-4xl font-bold mb-6">Cambia tu realidad,<br> aprende online en vivo</h1>
        <a href="https://9000-idx-innocourse-1724657250495.cluster-duylic2g3fbzerqpzxxbw6helm.cloudworkstations.dev/cursos?monospaceUid=989539&embedded=0" class="signup-button inline-block px-6 py-3 bg-orange-400 text-black border-2 border-black rounded-full font-semibold transition hover:bg-orange-500">Inscribirme ahora</a>
        <p class="sub-text text-purple-700 mt-4">2 clases de prueba en tu primer curso</p>
    </div>
    <div class="images flex flex-col md:max-w-lg">
    <div class="main-image relative">
        <img src="{{ Vite::image('claseVirtual1.jpg') }}" alt="Clase en vivo" class="h-50 md:h-62 w-[200%] rounded-lg border-2 border-black object-cover">
        <div id="tooltip-jessica" class="tooltip absolute top-10 left-0 bg-black text-white p-2 rounded text-sm transform -translate-x-1/2">Jessica 15:31<br>Excelente clase!</div>
        <div id="tooltip-juan" class="tooltip absolute top-12 right-0 bg-black text-white p-2 rounded text-sm w-28 text-left">Juan 15:34<br>Hola profe!, tengo una consulta</div>
    </div>
    <div class="thumbnail-images flex justify-between space-x-2 mt-2">
        <img src="{{ Vite::image('claseVirtual2.jpg') }}" alt="Estudiante en clase" class="w-1/3 h-24 md:h-32 rounded-lg border-2 border-black object-cover">
        <img src="{{ Vite::image('claseVirtual3.jpg') }}" alt="Clase en línea" class="w-1/3 h-24 md:h-32 rounded-lg border-2 border-black object-cover">
        <img src="{{ Vite::image('claseVirtual4.jpg') }}" alt="Grupo de estudio" class="w-1/3 h-24 md:h-32 rounded-lg border-2 border-black object-cover">
    </div>
</div>
</section>

<section class="community-section text-center py-12 bg-white border-b-2 border-gray-300">
    <h2 class="text-3xl font-bold mb-4">Únete a nuestra comunidad online en vivo<br><span class="text-orange-400">más grande de latinoamérica</span></h2>
    <p class="text-lg">Somos más de <span class="text-orange-400">5000</span> estudiantes de diferentes partes del Perú que trabajan en las más exitosas empresas de Perú</p>
</section>

<section class="partners-section flex flex-wrap justify-around items-center py-12 bg-white border-b-2 border-gray-300">
@foreach ([
        'bbva' => ['image' => 'bbva.jpg', 'graduates' => 100],
        'yape' => ['image' => 'yape.jpg', 'graduates' => 250],
        'alicorp' => ['image' => 'alicorp.jpg', 'graduates' => 150],
        'afp_integra' => ['image' => 'afp_integra.jpg', 'graduates' => 800],
        'afp_prima' => ['image' => 'afp_prima.jpg', 'graduates' => 40]
    ] as $partner => $data)
        <div class="partner text-center">
            <img src="{{ Vite::image($data['image']) }}" alt="{{ ucfirst($partner) }}" class="w-28 h-20 mb-2 border-2 border-black rounded-lg">
            <p>+{{ $data['graduates'] }} graduados</p>
        </div>
    @endforeach
</section>

<div class="cursos-section text-center py-12 bg-white border-b-2 border-gray-300 mx-4 md:mx-16 lg:mx-24">
    <h2 class="text-3xl font-bold mb-6 bg-purple-100 inline-block p-3 rounded-lg border border-black">¿Qué quieres aprender?</h2>
    <div class="cursos-grid grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        @foreach (['Desarrollo Web', 'Diseño UX/UI', 'JavaScript', 'Metodologías Ágiles', 'Base de Datos', 'Phyton'] as $curso)
            <div class="curso p-6 rounded-lg hover:bg-purple-200 transition cursor-pointer border border-black" style="background-color: rgba(151, 99, 246, 0.1);">
                <span class="block text-lg">Curso de</span>
                <span class="block text-2xl font-bold mt-2">⭐ {{ $curso }}</span>
            </div>
        @endforeach
    </div>
    <a href="https://9000-idx-innocourse-1724657250495.cluster-duylic2g3fbzerqpzxxbw6helm.cloudworkstations.dev/cursos?monospaceUid=989539&embedded=0" class="ver-cursos-btn inline-block px-6 py-3 bg-orange-400 text-black border-2 border-black rounded-full font-semibold transition hover:bg-orange-500 mt-8">Ver todos los cursos</a>
</div>


<div class="info-section py-12 bg-white border-b-2 border-gray-300">
    <h2 class="text-left text-2xl md:text-4xl font-bold text-orange-400 leading-relaxed mb-6 ml-6 md:ml-16 lg:ml-24">
        Somos la autoridad en maximizar <br>
        la educación en línea <br>
        en Latinoamérica
    </h2>
    <div class="info-grid grid grid-cols-1 md:grid-cols-2 gap-6 items-center ml-6 md:ml-16 lg:ml-24">
        <div class="info-text space-y-4">
            @foreach ([
                ['iconInfo1.jpg', 'Aprende algo nuevo cada 10 minutos'],
                ['iconInfo2.jpg', 'Te enseñamos con material profesional de principiante a experto'],
                ['iconInfo3.jpg', 'Pon a prueba tu progreso de forma interactiva'],
                ['iconInfo4.jpg', 'Viabilidad en descargar las clases para volver a visualizar'],
                ['iconInfo5.jpg', 'Visualiza tus logros y metas']
            ] as $icon)
                <p class="flex items-center p-4"><img src="{{ Vite::image($icon[0]) }}" alt="{{ $icon[1] }}" class="mr-4 w-8 h-8">{{ $icon[1] }}</p>
            @endforeach
        </div>
        <div class="info-img px-4 md:px-8 lg:px-9">
            <img src="{{ Vite::image('cursoInfo.jpg') }}" alt="Instructora dando clase en línea"  class="w-full rounded-xl border-3 border-black">
        </div>
    </div>
</div>

<div class="container mx-auto py-12 px-4 bg-white">
    <h1 class="text-center text-3xl font-bold mb-8">¡Elige una de nuestras promociones!</h1>
    <div class="promo-box-container flex flex-wrap justify-center">
        @foreach ([
            ['Pruebita', 70, 'Curso de 4 meses'],
            ['Achorado', 125, '2 Cursos de 4 meses'],
            ['Opulencia', 180, '3 Cursos de 4 meses']
        ] as $promo)
            <div class="promo-box w-full sm:w-80 p-6 m-4 rounded-lg shadow-lg bg-gray-50 border border-gray-200" style="background-color: rgba(151, 99, 246, 0.1);">
                <div class="promo-header mb-4">
                    <div class="promo-type text-sm text-gray-600">Suscripción</div>
                    <div class="promo-title text-2xl font-bold text-black">{{ $promo[0] }}</div>
                </div>
                <div class="promo-price text-xl text-gray-700 mb-4">
                    <span>S/</span><span class="amount text-4xl font-bold">{{ $promo[1] }}</span><span> Soles</span>
                    <span class="promo-duration block text-sm text-gray-600">{{ $promo[2] }}</span>
                </div>
                <div class="promo-description text-sm text-gray-600 mb-6">
                    Se parte del curso y aprende muchos fundamentos claves para tu vida profesional!.
                </div>
                <div class="yape flex items-center justify-end text-sm text-gray-600">
                    <p>Puedes pagar con</p>
                    <img src="{{ Vite::image('yape.jpg') }}" alt="Yape" class="ml-2 w-10 rounded">
                </div>
            </div>
        @endforeach
    </div>
    <div class="signup-button-container text-center mt-8">
        <a href="https://9000-idx-innocourse-1724657250495.cluster-duylic2g3fbzerqpzxxbw6helm.cloudworkstations.dev/cursos?monospaceUid=989539&embedded=0" class="signup-button inline-block px-6 py-3 bg-orange-400 text-black border-2 border-black rounded-full font-semibold transition hover:bg-orange-500">Inscribirme ahora</a>
    </div>
</div>
</x-app-layout>