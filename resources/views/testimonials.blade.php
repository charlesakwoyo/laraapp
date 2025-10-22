@extends('layout')

@section('title', 'Testimonials')

@section('content')
<section class="py-12 text-center">
  <h1 class="text-4xl font-bold text-indigo-700 mb-4">What Our Clients Say</h1>
  <p class="text-gray-600 mb-6">See what people think about MyBrand.</p>

  <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-6 px-6">
    <div class="bg-white shadow-md rounded-xl p-6">
      <p class="text-gray-700 italic">“MyBrand helped me launch my business online easily!”</p>
      <h4 class="mt-4 font-semibold text-indigo-700">– John Doe</h4>
    </div>
    <div class="bg-white shadow-md rounded-xl p-6">
      <p class="text-gray-700 italic">“Excellent support and design quality.”</p>
      <h4 class="mt-4 font-semibold text-indigo-700">– Sarah K.</h4>
    </div>
    <div class="bg-white shadow-md rounded-xl p-6">
      <p class="text-gray-700 italic">“Highly recommend MyBrand for startups.”</p>
      <h4 class="mt-4 font-semibold text-indigo-700">– Peter M.</h4>
    </div>
  </div>
</section>
@endsection
