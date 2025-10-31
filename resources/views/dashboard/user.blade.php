@extends('layout')

@section('title', 'User Dashboard')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">User Dashboard</h1>
    <p class="text-gray-700">Welcome, {{ auth()->user()->name }} 👋</p>

    <div class="mt-6">
        <div class="bg-white shadow-md p-6 rounded-xl">
            <h2 class="font-semibold text-lg">My Bookings</h2>
            <p class="text-gray-600">View your past and upcoming services or events.</p>
        </div>
    </div>
</div>
@endsection
