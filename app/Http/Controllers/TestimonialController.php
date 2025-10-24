<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        
        $testimonials = Testimonial::paginate(10);

        
        return view('testimonials', compact('testimonials'));
    }
}
