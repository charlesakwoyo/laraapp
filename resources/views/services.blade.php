@extends('layouts.app') {{-- or your main public layout --}}
@section('title', 'Our Services')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6 text-center">Our Services</h1>

    @if ($services->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $service->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($service->description, 120) }}</p>
                    <a href="#" class="text-indigo-600 hover:underline font-medium">Read more →</a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500">No services available at the moment.</p>
    @endif
</div>
@endsection
