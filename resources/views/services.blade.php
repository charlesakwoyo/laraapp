@extends('layout')

@section('title', 'Our Services - MyBrand')

@section('content')
<section class="py-20">
  <div class="container mx-auto text-center px-6">
    <h1 class="text-4xl font-bold mb-4 text-indigo-700">Our Services</h1>
    <p class="max-w-2xl mx-auto text-gray-600 mb-12">
      We offer a full range of digital solutions designed to help your brand stand out.
    </p>

    <div class="grid md:grid-cols-3 gap-10">
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2">Web Design</h3>
        <p class="text-gray-600">Modern and responsive designs built for all devices.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2">Development</h3>
        <p class="text-gray-600">Robust web apps using the latest technologies.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2">Branding</h3>
        <p class="text-gray-600">Creative identity and brand strategy for your business.</p>
      </div>
    </div>
  </div>
</section>
@endsection
