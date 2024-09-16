<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Review;
use Illuminate\Http\Request;

class OpinionsController extends Controller
{
    public function index()
    {
        $reviews = Review::with('usuario')
        ->orderBy('calificacion', 'desc') // Ordena por la columna "calificacion" en orden descendente
        ->take(6)
        ->get();
        $faqs = Faq::all();
        return view('pages.opiniones.index', compact('reviews','faqs'));
    }
}
