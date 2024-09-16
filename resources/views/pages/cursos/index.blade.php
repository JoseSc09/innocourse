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
            @foreach ($cursos as $curso)
                <div class="course-card">
                    <img src="{{ asset($curso->imagen) }}" alt="Imagen del curso">
                    <h2>{{ $curso->titulo }}</h2>
                    <p>{{ $curso->descripcion }}</p>
                    <div class="rating">
                        <x-star-rating :rating="$curso->reviews_avg_calificacion" />
                    </div>
                    <div class="price">S/ {{ $curso->precio }}</div>
                    <a href="{{ route('payments.index') }}" class="enroll-button">Inscribete!</a>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
