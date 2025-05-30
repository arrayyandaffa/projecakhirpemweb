<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->take(5)->get();
        return view('index', compact('testimonials'));
    }
}
