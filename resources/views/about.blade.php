@extends('layout')

@section('title', 'About Us - MyBrand')

@section('content')
<section class="py-20">
  <div class="container mx-auto text-center px-6">
    <h1 class="text-4xl font-bold mb-4 text-indigo-700">About Us</h1>
    <p class="max-w-2xl mx-auto text-gray-600 leading-relaxed">
      We’re a team of developers, designers, and innovators committed to helping brands
      and individuals build powerful, modern, and creative web solutions.
    </p>

    <div class="mt-10">
      <img src="https://cdn.pixabay.com/photo/2016/10/29/09/48/office-1771279_1280.jpg"
           alt="About Image"
           class="rounded-2xl shadow-lg mx-auto w-full md:w-2/3">
    </div>
  </div>
</section>
@endsection
