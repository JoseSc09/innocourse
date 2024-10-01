<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Section;
use App\Models\User; // Asegúrate de incluir este uso
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::orderBy("id", "asc")->paginate(5);
        $coursesRows = $courses->map(function ($course) {
            return [
                ['image' => asset($course->image)],
                ['value' => $course->title],
                ['value' => $course->description],
                [
                    'show_link' => route('admin.cursos.show', $course),
                    'delete_link' => route('admin.cursos.destroy', $course),
                    'routeDelete' => '/dashboard/cursos/' . $course->id
                ],
            ];
        });
        return view("dashboard.pages.cursos.index", compact('courses', 'coursesRows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener instructores con rol_id = 2
        $instructors = User::where('rol_id', 2)->get();

        // Obtener todas las categorías
        $categories = Category::all();

        return view('dashboard.pages.cursos..create', compact('instructors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Cambiar a nullable
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:courses,slug',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'instructor_id' => 'required|exists:users,id', // Validar que el instructor existe
            'sections.*.section_name' => 'required|string|max:255',
            'sections.*.lessons.*.lesson_name' => 'required|string|max:255',
        ]);

        // Manejar la imagen del curso
        $imagePath = 'storage/images/courses/img_course_default.jpg'; // Ruta por defecto

        // Si se proporciona una imagen, guardar en el almacenamiento
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs('images/courses', time() . '_' . Str::slug($request->slug) . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
        }

        // Crear el curso
        $course = Course::create([
            'image' => 'storage/' . $imagePath,
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'price' => $request->price,
            'instructor_id' => $request->instructor_id, // Guardar el ID del instructor
            'category_id' => $request->category_id, // Guardar el ID de la categoría
        ]);

        // Guardar secciones y lecciones
        foreach ($request->sections as $sectionData) {
            $section = Section::create([
                'section_name' => $sectionData['section_name'],
                'course_id' => $course->id,
            ]);

            foreach ($sectionData['lessons'] as $lessonData) {
                // Guardar lecciones con la ruta por defecto
                $lessonContentPath = 'storage/videos/courses/video_default.jpg';

                // Crear la lección
                $section->lessons()->create([
                    'lesson_name' => $lessonData['lesson_name'],
                    'content' => $lessonContentPath,
                ]);
            }
        }

        return redirect()->route('admin.cursos.index')->with('success', 'Curso creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $course = Course::with('sections.lessons')->withAvg('reviews', 'rating')->where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.cursos.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        // Obtener el curso, sus secciones y lecciones
        $course = Course::with('sections.lessons')->where('slug', $slug)->firstOrFail();
        // Obtener los instructores y categorías disponibles
        $instructors = User::where('rol_id', 2)->get();  // 2 = rol de instructor
        $categories = Category::all();
        return view('dashboard.pages.cursos.edit', compact('course', 'instructors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        // Validar los campos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:courses,slug,' . $course->id,
            'instructor_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sections.*.section_name' => 'nullable|string|max:255',
            'sections.*.lessons.*.lesson_name' => 'nullable|string|max:255',
        ]);

        // Actualizar los datos del curso
        $course->update([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'instructor_id' => $request->input('instructor_id'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        // Manejar la subida de imagen
        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($course->image && Storage::exists($course->image)) {
                Storage::delete($course->image);
            }

            // Subir la nueva imagen
            $imagePath = $imagePath = $request->file('image')->storeAs('images/courses', time() . '_' . Str::slug($request->slug) . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
            $course->image = 'storage/' . $imagePath;
            $course->save();
        }

        // Obtener todas las secciones actuales para compararlas
        $existingSectionIds = $course->sections()->pluck('id')->toArray();
        $inputSectionIds = array_filter(array_column($request->input('sections', []), 'id'));

        // Eliminar secciones que ya no están en la solicitud
        $sectionsToDelete = array_diff($existingSectionIds, $inputSectionIds);
        Section::destroy($sectionsToDelete);

        // Procesar las secciones ingresadas
        foreach ($request->input('sections') as $sectionData) {
            // Solo proceder si el nombre de la sección no está vacío
            if (!empty($sectionData['section_name'])) {
                // Verificar si la sección ya existe o es nueva
                $section = Section::updateOrCreate(
                    ['id' => $sectionData['id'] ?? null], // Si existe una sección con ID, la actualiza; si no, la crea.
                    [
                        'section_name' => $sectionData['section_name'],
                        'course_id' => $course->id,
                    ]
                );

                // Obtener todas las lecciones actuales de la sección
                $existingLessonIds = $section->lessons()->pluck('id')->toArray();
                $inputLessonIds = array_filter(array_column($sectionData['lessons'] ?? [], 'id'));

                // Eliminar lecciones que ya no están en la solicitud
                $lessonsToDelete = array_diff($existingLessonIds, $inputLessonIds);
                Lesson::destroy($lessonsToDelete);

                // Procesar las lecciones ingresadas
                if (isset($sectionData['lessons'])) {
                    foreach ($sectionData['lessons'] as $lessonData) {
                        // Solo proceder si el nombre de la lección no está vacío
                        if (!empty($lessonData['lesson_name'])) {
                            Lesson::updateOrCreate(
                                ['id' => $lessonData['id'] ?? null], // Actualiza o crea la lección
                                [
                                    'lesson_name' => $lessonData['lesson_name'],
                                    'content' => 'storage/videos/courses/video_default.jpg',
                                    'section_id' => $section->id,
                                ]
                            );
                        }
                    }
                }
            }
        }

        return redirect()->route('admin.cursos.index')->with('success', 'El curso ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('admin.cursos.index')->with('success', 'Curso eliminado correctamente');
    }
}
