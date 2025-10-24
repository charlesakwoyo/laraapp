@extends('layout')

@section('content')
<section class="py-10">
  <h2 class="text-3xl font-bold text-center mb-8">What People Say</h2>

  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
    @forelse($testimonials as $testimonial)
      <div class="bg-white shadow-md p-6 rounded-lg">
        <img src="{{ $testimonial->photo }}" alt="photo" class="w-16 h-16 rounded-full mx-auto mb-4">
        <h3 class="text-lg font-semibold text-center">{{ $testimonial->name }}</h3>
        <p class="text-sm text-gray-500 text-center">{{ $testimonial->position }}</p>
        <p class="mt-3 text-gray-600 text-center">"{{ $testimonial->message }}"</p>
      </div>
    @empty
      <p class="text-center col-span-full">No testimonials yet.</p>
    @endforelse
  </div>

  
  <div class="mt-10 flex justify-center">
    {{ $testimonials->links() }}
  </div>
</section>
@endsection
