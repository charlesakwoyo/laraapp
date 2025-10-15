@extends('layout')

@section('title', 'Features - MyBrand')

@section('content')
<section class="py-20 bg-gradient-to-r from-indigo-100 via-purple-50 to-pink-100">
  <div class="container mx-auto text-center px-6">
    <h1 class="text-4xl font-bold mb-6 text-indigo-700">Our Features</h1>
    <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
      MyBrand gives you everything you need to create, deploy, and manage beautiful digital experiences.
    </p>

    <div class="grid md:grid-cols-3 gap-10">
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Fast Performance</h3>
        <p class="text-gray-600">Optimized for speed and efficiency across all platforms.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Security</h3>
        <p class="text-gray-600">Built-in security features to protect your data and users.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Customization</h3>
        <p class="text-gray-600">Easily customize and expand features to fit your needs.</p>
      </div>
    </div>
  </div>
</section>
@endsection
