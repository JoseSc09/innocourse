<x-app-layout>
    <section class="courses-section">
        <h1>Contamos con cursos que podrían interesarte:</h1>
        <input type="text" id="search-bar" placeholder="Buscar cursos...">
        <div class="filters">
            <label for="category">Categoría:</label>
            <select id="category">
                <option value="all">Todas</option>
                <option value="tech">Tecnología</option>
                <option value="business">Negocios</option>
                <option value="design">Diseño</option>
                <option value="health">Salud</option>
                <option value="languages">Idiomas</option>
            </select>

            <label for="difficulty">Dificultad:</label>
            <select id="difficulty">
                <option value="all">Todos los niveles</option>
                <option value="beginner">Principiante</option>
                <option value="intermediate">Intermedio</option>
                <option value="advanced">Avanzado</option>
            </select>

            <label for="duration">Duración:</label>
            <select id="duration">
                <option value="all">Todas</option>
                <option value="short">Menos de 1 hora</option>
                <option value="medium">1-3 horas</option>
                <option value="long">3-6 horas</option>
                <option value="very-long">Más de 6 horas</option>
            </select>

            <label for="price">Precio:</label>
            <select id="price">
                <option value="all">Todos</option>
                <option value="free">Gratis</option>
                <option value="under-50">Menos de $50</option>
                <option value="50-100">$50-$100</option>
                <option value="over-100">Más de $100</option>
            </select>

            <label for="rating">Calificación:</label>
            <select id="rating">
                <option value="all">Todas</option>
                <option value="5">5 estrellas</option>
                <option value="4-and-up">4 estrellas y más</option>
                <option value="3-and-up">3 estrellas y más</option>
            </select>
        </div>

        <div class="courses-list">
            <div class="course-card">
                <img src="/Iconos/Curso-Dia/DesarrolloWeb.png" alt="Imagen del curso">
                <h2>Curso de Desarrollo Web</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 180.00</div>
                <a href="../Cursos/Desarrollo_Web.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/Back-end.png" alt="Imagen del curso">
                <h2>Curso de Back-end</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="../Cursos/Back_End.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/InteligenciaArtificial.png" alt="Imagen del curso">
                <h2>Curso de Inteligencia Artificial</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="../Cursos/Inteligencia_Artificial.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/DataScience.png" alt="Imagen del curso">
                <h2>Curso de Data Science</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/MarketingDigital.png" alt="Imagen del curso">
                <h2>Curso de Marketing Digital</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/Blender.png" alt="Imagen del curso">
                <h2>Curso de Blender</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/Ingles.png" alt="Imagen del curso">
                <h2>Curso de Ingles Avanzado</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/MySQL.png" alt="Imagen del curso">
                <h2>Curso de MySQL</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="/Iconos/Curso-Dia/Python.png" alt="Imagen del curso">
                <h2>Curso de Python</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="../Iconos/Curso-Dia/metodologia_agil.png" alt="Imagen del curso">
                <h2>Curso de Metodologías Ágiles</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="../Iconos/Curso-Dia/redes_telecomu.png" alt="Imagen del curso">
                <h2>Curso de Redes y Telecomunicaciones</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>

            <div class="course-card">
                <img src="../Iconos/Curso-Dia/E_commerce.png" alt="Imagen del curso">
                <h2>Curso de E-commerce</h2>
                <p>2 clases de prueba en tu primer curso!</p>
                <div class="rating">⭐⭐⭐⭐⭐</div>
                <div class="price">S/ 99.99</div>
                <a href="Metodo_Pago.html" class="enroll-button">Inscribete!</a>
            </div>
        </div>
    </section>
</x-app-layout>
