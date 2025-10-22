<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        // fetch all testimonials
        $testimonials = Testimonial::all();

        // send the variable to the view
        return view('testimonials', compact('testimonials'));
    }
}
