<x-app-layout>
    <h1>Curso {{ $course->title }}</h1>
    <img class="w-32 h-32" src="{{asset($course->image)}}" alt="">
    <p class="dark:text-gray-100">Descripcion: {{$course->description}}</p>
    <p class="dark:text-gray-100">Precio: {{$course->price}}</p>
    <p class="dark:text-gray-100">Categoria del curso: {{$course->category->category_name}}</p>
    <p class="dark:text-gray-100">Profesor: {{$course->instructor->first_name . ' ' . $course->instructor->last_name}}</p>
    <p class="dark:text-gray-100">Username Profesor: {{'@'.$course->instructor->username}}</p>
    <p class="dark:text-gray-100">Email Profesor: {{$course->instructor->email}}</p>
</x-app-layout>
