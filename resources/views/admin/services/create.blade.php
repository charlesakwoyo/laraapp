@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-6">Create New Service</h1>

    {{-- Show Validation Errors --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Create Service Form --}}
    <form action="{{ route('services.store') }}" method="POST">
        @csrf

        {{-- Title --}}
        <div class="mb-4">
            <label for="title" class="block font-semibold mb-2">Service Title</label>
            <input type="text" name="title" id="title"
                class="w-full border rounded-lg p-2 focus:outline-none focus:ring"
                placeholder="Enter service title" value="{{ old('title') }}" required>
        </div>

        {{-- Description --}}
        <div class="mb-4">
            <label for="description" class="block font-semibold mb-2">Description</label>
            <textarea name="description" id="description"
                class="w-full border rounded-lg p-2 focus:outline-none focus:ring"
                rows="4" placeholder="Enter service description" required>{{ old('description') }}</textarea>
        </div>

        {{-- Icon (optional) --}}
        <div class="mb-6">
            <label for="icon" class="block font-semibold mb-2">Icon (optional)</label>
            <input type="text" name="icon" id="icon"
                class="w-full border rounded-lg p-2 focus:outline-none focus:ring"
                placeholder="e.g., fa-solid fa-cog or icon name" value="{{ old('icon') }}">
        </div>

        {{-- Buttons --}}
        <div class="flex items-center space-x-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">
                Save Service
            </button>
            <a href="{{ route('services.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
