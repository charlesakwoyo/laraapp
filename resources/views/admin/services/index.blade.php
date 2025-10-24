@extends('layouts.admin')

@section('title', 'Manage Services')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h2 class="text-2xl font-bold">Services</h2>
  <a href="{{ route('services.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-500">+ Add Service</a>
</div>

@if (session('success'))
  <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
    {{ session('success') }}
  </div>
@endif

<table class="w-full bg-white rounded shadow">
  <thead>
    <tr class="bg-indigo-600 text-white">
      <th class="p-3 text-left">Title</th>
      <th class="p-3 text-left">Description</th>
      <th class="p-3 text-left">Icon</th>
      <th class="p-3 text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($services as $service)
      <tr class="border-b hover:bg-gray-50">
        <td class="p-3">{{ $service->title }}</td>
        <td class="p-3">{{ $service->description }}</td>
        <td class="p-3">{{ $service->icon }}</td>
        <td class="p-3 text-center">
          <a href="{{ route('services.edit', $service->id) }}" class="text-blue-600 hover:underline">Edit</a> |
          <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline">Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="4" class="text-center p-4">No services found.</td></tr>
    @endforelse
  </tbody>
</table>
@endsection
