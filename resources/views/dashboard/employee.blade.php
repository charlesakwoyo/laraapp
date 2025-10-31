@extends('layout')

@section('title', 'Employee Dashboard')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">Employee Dashboard</h1>
    <p class="text-gray-700">Welcome back, {{ auth()->user()->name }} 👋</p>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-md p-6 rounded-xl">
            <h2 class="font-semibold text-lg">Assigned Tasks</h2>
            <p class="text-gray-600">Check your active work tasks.</p>
        </div>
        <div class="bg-white shadow-md p-6 rounded-xl">
            <h2 class="font-semibold text-lg">Reports</h2>
            <p class="text-gray-600">Submit or review work reports.</p>
        </div>
    </div>
</div>
@endsection
