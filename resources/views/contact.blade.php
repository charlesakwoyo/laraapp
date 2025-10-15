@extends('layout')

@section('title', 'Contact Us - MyBrand')

@section('content')
<section class="py-20 bg-gray-50">
  <div class="container mx-auto text-center px-6">
    <h1 class="text-4xl font-bold mb-6 text-indigo-700">Contact Us</h1>
    <p class="text-gray-600 mb-10">We’d love to hear from you! Reach out for collaborations or support.</p>

    <form class="max-w-xl mx-auto space-y-6">
      <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-indigo-400" />
      <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-indigo-400" />
      <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-3 rounded-lg border focus:ring-2 focus:ring-indigo-400"></textarea>
      <button type="submit" class="bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-indigo-700 transition">
        Send Message
      </button>
    </form>
  </div>
</section>
@endsection
