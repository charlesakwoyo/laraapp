@extends('layout')

@section('title', 'Welcome to MyBrand')

@section('content')
<!-- Hero Section -->
<section id="home"
  class="bg-gradient-to-r from-indigo-700 via-purple-600 to-pink-500 text-white py-20">
  <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
    <div class="md:w-1/2 space-y-6 animate-fadeInUp">
      <h2 class="text-4xl md:text-6xl font-extrabold leading-tight">
        Build Stunning <br />Websites Effortlessly
      </h2>
      <p class="text-lg text-indigo-100">
        Empower your ideas with MyBrand’s all-in-one platform designed for creators, developers, and businesses.
      </p>
      <div class="space-x-4">
        <a href="register"
          class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-indigo-50 transition transform hover:scale-105">
          Get Started
        </a>
        <a href="features"
          class="border border-white font-semibold px-6 py-3 rounded-lg hover:bg-white hover:text-indigo-600 transition transform hover:scale-105">
          Learn More
        </a>
      </div>
    </div>
    <div class="md:w-1/2 mt-10 md:mt-0">
      <img
        src="https://cdn.pixabay.com/photo/2017/01/10/23/01/startup-1965481_1280.png"
        alt=""
        class="w-full animate-float"
      />
    </div>
  </div>
</section>

<!-- Features -->
<section id="features" class="py-24 bg-gray-50">
  <div class="container mx-auto text-center px-6">
    <h3 class="text-3xl font-bold mb-12">Why Choose MyBrand</h3>
    <div class="grid md:grid-cols-3 gap-10">
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-2">
        <h4 class="text-xl font-semibold mb-2">Fast Performance</h4>
        <p class="text-gray-600">Lightning-fast load times and smooth experiences across all devices.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-2">
        <h4 class="text-xl font-semibold mb-2">Modern Design</h4>
        <p class="text-gray-600">Beautifully crafted layouts that bring your ideas to life.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-2">
        <h4 class="text-xl font-semibold mb-2">Secure Platform</h4>
        <p class="text-gray-600">Top-level data encryption keeps your projects safe.</p>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="py-24">
  <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
    <div class="md:w-1/2 mb-10 md:mb-0">
      <img src="https://cdn.pixabay.com/photo/2016/11/18/12/52/office-1834294_1280.jpg"
           alt="About Us" class="rounded-2xl shadow-2xl transform hover:scale-105 transition"/>
    </div>
    <div class="md:w-1/2 md:pl-10 space-y-6">
      <h3 class="text-3xl font-bold">About MyBrand</h3>
      <p class="text-gray-600 leading-relaxed">
        We’re a passionate team of developers and designers dedicated to helping people create exceptional digital experiences.
      </p>
      <a href="services"
         class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
         Read More
      </a>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-24 bg-gradient-to-r from-indigo-100 via-purple-50 to-pink-100">
  <div class="container mx-auto text-center px-6">
    <h3 class="text-3xl font-bold mb-12">What Our Users Say</h3>
    <div class="grid md:grid-cols-3 gap-10">
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-600 italic mb-4">“This platform made my projects so much easier to launch.”</p>
        <h4 class="font-semibold text-indigo-700">— Sarah K.</h4>
      </div>
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-600 italic mb-4">“Fantastic experience. The performance is unmatched.”</p>
        <h4 class="font-semibold text-indigo-700">— James M.</h4>
      </div>
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-600 italic mb-4">“I’ve built multiple sites using this tool. It’s intuitive.”</p>
        <h4 class="font-semibold text-indigo-700">— Linda R.</h4>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="bg-indigo-700 text-white py-20 text-center">
  <h3 class="text-4xl font-bold mb-4">Ready to Build Your Dream Website?</h3>
  <p class="text-indigo-200 mb-8 max-w-xl mx-auto">
    Get started today and bring your creative vision to life with MyBrand’s tools.
  </p>
  <a href="#"
    class="bg-white text-indigo-700 px-8 py-4 rounded-full font-semibold shadow hover:bg-indigo-100 transition transform hover:scale-105">
    Start Free Trial
  </a>
</section>
@endsection