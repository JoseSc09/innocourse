<x-app-layout>
        <section class="principal bg-white dark:bg-[#171C2F]">
            <div class="content-principal p-4">
                <h1 class="titulo text-2xl font-bold dark:text-white">Opiniones de nuestros estudiantes de Innocourse</h1>
                <p class="texto mt-2 text-gray-700 dark:text-gray-300">Nos complace compartir las experiencias de nuestros estudiantes, quienes destacan la calidad, innovación y relevancia de nuestra oferta educativa. Sus testimonios reflejan el impacto positivo que InnoCourse ha tenido en su desarrollo personal y profesional, validando nuestro compromiso con la excelencia educativa.</p>
                <div class="cinco-stars flex items-center mt-4">
                    <img src="{{ Vite::image('stars.png')}}" alt="calificacion" class="icono-star w-16 h-16"> <!-- Ajustar tamaño a 80px -->
                    <p class="cal-number ml-2 text-gray-700 dark:text-gray-300 text-lg">4000 Opiniones</p>
                </div>
            </div>
            <div class="imagen-principal mt-4">
                <img src="{{ Vite::image('Imagen_principal.png')}}" alt="imagen" class="Imagen_p w-[600px] h-[400px]"> <!-- Ajustar tamaño -->
            </div>
        </section>

        <section class="article bg-white dark:bg-[#171C2F]">
            <h2 class="coment text-center bg-white dark:bg-[#171C2F] py-2 text-xl dark:text-[#faf1f1]">Nuestras Opiniones</h2>
        
            <div class="agrupacion flex flex-wrap mb-5">
                <!-- Opinión 1 -->
                <div class="article-opi bg-[#9763f8] bg-opacity-30 p-2 m-2 w-full sm:w-1/2">
                    <div class="conjunto flex items-center justify-between p-2">
                        <div class="image">
                            <img src="{{ Vite::image('user.png')}}" alt="user" class="user w-16 h-12 rounded-full">
                        </div>
                        <div class="usuario ml-4">
                            <h3 class="text-lg dark:text-white">Ana M.</h3>
                            <p class="correo text-sm dark:text-gray-300">@Ana M</p>
                        </div>
                        <div class="stars ml-auto flex items-center">
                            <img src="{{ Vite::image('stars.png')}}" alt="logo" class="star w-24">
                        </div>
                    </div>
                    <p class="opiniones p-2 m-1 text-lg dark:text-gray-300">Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.</p>
                </div>
                
                <!-- Segunda Opinion -->
                <div class="article-opi bg-[#9763f8] bg-opacity-30 p-2 m-2 w-full sm:w-1/2">
                    <div class="conjunto flex items-center justify-between p-2">
                        <div class="image">
                            <img src="{{ Vite::image('user.png')}}" alt="user" class="user w-16 h-12 rounded-full">
                        </div>
                        <div class="usuario ml-4">
                            <h3 class="text-lg dark:text-white">Carlos G.</h3>
                            <p class="correo text-sm dark:text-gray-300">@Carlos G</p>
                        </div>
                        <div class="stars ml-auto flex items-center">
                            <img src="{{ Vite::image('stars.png')}}" alt="logo" class="star w-24">
                        </div>
                    </div>
                    <p class="opiniones p-2 m-1 text-lg dark:text-gray-300">Gracias a InnoCourse, he adquirido habilidades prácticas que he podido aplicar directamente en mi trabajo diario. Sin duda, una inversión valiosa.</p>
                </div>
        
                <!-- tercera Opinion -->
                <div class="article-opi bg-[#9763f8] bg-opacity-30 p-2 m-2 w-full sm:w-1/2">
                    <div class="conjunto flex items-center justify-between p-2">
                        <div class="image">
                            <img src="{{ Vite::image('user.png')}}" alt="user" class="user w-16 h-12 rounded-full">
                        </div>
                        <div class="usuario ml-4">
                            <h3 class="text-lg dark:text-white">Maria J.</h3>
                            <p class="correo text-sm dark:text-gray-300">@Maria J</p>
                        </div>
                        <div class="stars ml-auto flex items-center">
                            <img src="{{ Vite::image('stars.png')}}" alt="logo" class="star w-24">
                        </div>
                    </div>
                    <p class="opiniones p-2 m-1 text-lg dark:text-gray-300">El enfoque innovador y actualizado de los cursos me ha permitido mantenerme al día con las últimas tendencias de mi industria. Altamente recomendado.</p>
                </div>
        
                <!-- Cuarta Opinion -->
                <div class="article-opi bg-[#9763f8] bg-opacity-30 p-2 m-2 w-full sm:w-1/2">
                    <div class="conjunto flex items-center justify-between p-2">
                        <div class="image">
                            <img src="{{ Vite::image('user.png')}}" alt="user" class="user w-16 h-12 rounded-full">
                        </div>
                        <div class="usuario ml-4">
                            <h3 class="text-lg dark:text-white">Luis F.</h3>
                            <p class="correo text-sm dark:text-gray-300">@Luis F</p>
                        </div>
                        <div class="stars ml-auto flex items-center">
                            <img src="{{ Vite::image('stars.png')}}" alt="logo" class="star w-24">
                        </div>
                    </div>
                    <p class="opiniones p-2 m-1 text-lg dark:text-gray-300">La plataforma es fácil de usar y el soporte del equipo de InnoCourse es excelente. Siempre están disponibles para ayudar y guiar.</p>
                </div>
        
                <!-- Quinta Opinion -->
                <div class="article-opi bg-[#9763f8] bg-opacity-30 p-2 m-2 w-full sm:w-1/2">
                    <div class="conjunto flex items-center justify-between p-2">
                        <div class="image">
                            <img src="{{ Vite::image('user.png')}}" alt="user" class="user w-16 h-12 rounded-full">
                        </div>
                        <div class="usuario ml-4">
                            <h3 class="text-lg dark:text-white">Elena P.</h3>
                            <p class="correo text-sm dark:text-gray-300">@Elena P</p>
                        </div>
                        <div class="stars ml-auto flex items-center">
                            <img src="{{ Vite::image('stars.png')}}" alt="logo" class="star w-24">
                        </div>
                    </div>
                    <p class="opiniones p-2 m-1 text-lg dark:text-gray-300">Los cursos son muy completos y están bien estructurados. He aprendido muchísimo y me siento más segura en mi ámbito profesional.</p>
                </div>
        
                <!-- Sexta Opinion -->
                <div class="article-opi bg-[#9763f8] bg-opacity-30 p-2 m-2 w-full sm:w-1/2">
                    <div class="conjunto flex items-center justify-between p-2">
                        <div class="image">
                            <img src="{{ Vite::image('user.png')}}" alt="user" class="user w-16 h-12 rounded-full">
                        </div>
                        <div class="usuario ml-4">
                            <h3 class="text-lg dark:text-white">Ricardo T.</h3>
                            <p class="correo text-sm dark:text-gray-300">@Ricardo T</p>
                        </div>
                        <div class="stars ml-auto flex items-center">
                            <img src="{{ Vite::image('stars.png')}}" alt="logo" class="star w-24">
                        </div>
                    </div>
                    <p class="opiniones p-2 m-1 text-lg dark:text-gray-300">InnoCourse ofrece una educación de calidad que se adapta a las necesidades del mercado actual. Los instructores son expertos en sus campos y se nota.</p>
                </div>
            </div>
        
            <p class="coment-mas text-center bg-white dark:bg-[#171C2F] py-2 text-2xl dark:text-[#faf1f1]">
                Ver más comentarios curso <i style='font-size:24px' class='fas fa-angle-down'>&#9660;</i>
            </p>
        </section>
        <section class="preguntas bg-white dark:bg-[#171C2F]">
            <h2 class="pregunta-titulo text-xl text-center bg-white dark:bg-[#171C2F] py-2 dark:text-[#faf1f1]">Preguntas Frecuentes</h2>
            <div class="accordion w-full">
                <!-- Pregunta 1 -->
                <div class="contentrBx relative mb-2">
                    <div class="label bg-[#171C2F] text-white cursor-pointer p-4 text-lg dark:bg-[#FFB263] dark:text-black">
                        ¿Qué es InnoCourse?
                        <span class="plus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl transition-transform duration-300">+</span>
                        <span class="minus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl hidden transition-transform duration-300">-</span>
                    </div>
                    <div class="content bg-white dark:bg-[#171C2F] text-black dark:text-[#faf1f1] overflow-hidden transition-all duration-500 ease-in-out h-0 p-0">
                        <p class="p-4">InnoCourse es una plataforma educativa dedicada a ofrecer cursos innovadores y de alta calidad para el desarrollo personal y profesional.</p>
                    </div>
                </div>
                
                <!-- Pregunta 2 -->
                <div class="contentrBx relative mb-2">
                    <div class="label bg-[#171C2F] text-white cursor-pointer p-4 text-lg dark:bg-[#FFB263] dark:text-black">
                        ¿Qué tipo de cursos ofrecen?
                        <span class="plus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl transition-transform duration-300">+</span>
                        <span class="minus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl hidden transition-transform duration-300">-</span>
                    </div>
                    <div class="content bg-white dark:bg-[#171C2F] text-black dark:text-[#faf1f1] overflow-hidden transition-all duration-500 ease-in-out h-0 p-0">
                        <p class="p-4">Ofrecemos una amplia variedad de cursos en áreas como tecnología, negocios, desarrollo personal, y más. Todos nuestros cursos están diseñados para ser prácticos y relevantes.</p>
                    </div>
                </div>
                
                <!-- Pregunta 3 -->
                <div class="contentrBx relative mb-2">
                    <div class="label bg-[#171C2F] text-white cursor-pointer p-4 text-lg dark:bg-[#FFB263] dark:text-black">
                        ¿Los cursos son en línea o presenciales?
                        <span class="plus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl transition-transform duration-300">+</span>
                        <span class="minus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl hidden transition-transform duration-300">-</span>
                    </div>
                    <div class="content bg-white dark:bg-[#171C2F] text-black dark:text-[#faf1f1] overflow-hidden transition-all duration-500 ease-in-out h-0 p-0">
                        <p class="p-4">Todos nuestros cursos son completamente en línea, lo que permite a nuestros estudiantes aprender a su propio ritmo y desde cualquier lugar.</p>
                    </div>
                </div>
                
                <!-- Pregunta 4 -->
                <div class="contentrBx relative mb-2">
                    <div class="label bg-[#171C2F] text-white cursor-pointer p-4 text-lg dark:bg-[#FFB263] dark:text-black">
                        ¿Ofrecen certificados al completar los cursos?
                        <span class="plus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl transition-transform duration-300">+</span>
                        <span class="minus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl hidden transition-transform duration-300">-</span>
                    </div>
                    <div class="content bg-white dark:bg-[#171C2F] text-black dark:text-[#faf1f1] overflow-hidden transition-all duration-500 ease-in-out h-0 p-0">
                        <p class="p-4">Sí, al completar exitosamente un curso, recibirás un certificado de finalización que puedes agregar a tu currículum o perfil profesional.</p>
                    </div>
                </div>
                
                <!-- Pregunta 5 -->
                <div class="contentrBx relative mb-2">
                    <div class="label bg-[#171C2F] text-white cursor-pointer p-4 text-lg dark:bg-[#FFB263] dark:text-black">
                        ¿Ofrecen algún tipo de apoyo o tutoría durante los cursos?
                        <span class="plus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl transition-transform duration-300">+</span>
                        <span class="minus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl hidden transition-transform duration-300">-</span>
                    </div>
                    <div class="content bg-white dark:bg-[#171C2F] text-black dark:text-[#faf1f1] overflow-hidden transition-all duration-500 ease-in-out h-0 p-0">
                        <p class="p-4">Sí, nuestros instructores y el equipo de soporte están disponibles para ayudarte con cualquier duda o problema que puedas tener durante tu aprendizaje.</p>
                    </div>
                </div>
                
                <!-- Pregunta 6 -->
                <div class="contentrBx relative mb-2">
                    <div class="label bg-[#171C2F] text-white cursor-pointer p-4 text-lg dark:bg-[#FFB263] dark:text-black">
                        ¿Qué métodos de pago aceptan?
                        <span class="plus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl transition-transform duration-300">+</span>
                        <span class="minus-sign absolute top-1/2 right-5 transform -translate-y-1/2 text-2xl hidden transition-transform duration-300">-</span>
                    </div>
                    <div class="content bg-white dark:bg-[#171C2F] text-black dark:text-[#faf1f1] overflow-hidden transition-all duration-500 ease-in-out h-0 p-0">
                        <p class="p-4">Aceptamos varias formas de pago, incluyendo tarjetas de crédito, PayPal y transferencias bancarias. Los detalles completos están disponibles en el proceso de inscripción.</p>
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>


