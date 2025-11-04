@extends('layout')

@section('title', 'MyBrand | User Dashboard')

@section('content')
<div class="min-h-screen bg-gray-100 py-10 px-6">

    <!-- Header -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-indigo-700">MyBrand Dashboard</h1>
            <p class="text-gray-600 mt-1">
                Welcome back, <span class="font-semibold text-indigo-600">{{ auth()->user()->name }}</span> 
            </p>
        </div>

        <div class="mt-4 md:mt-0">
            <a href="{{ route('services') }}"
               class="bg-indigo-600 text-white px-5 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
               + Request a Service
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500">Active Requests</h3>
            <p class="text-3xl font-bold text-indigo-700 mt-2">4</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500">Completed Projects</h3>
            <p class="text-3xl font-bold text-indigo-700 mt-2">7</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500">Pending Payments</h3>
            <p class="text-3xl font-bold text-indigo-700 mt-2">2</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-sm text-gray-500">Messages</h3>
            <p class="text-3xl font-bold text-indigo-700 mt-2">5</p>
        </div>
    </div>

    <!-- Recent Requests -->
    <div class="bg-white shadow-md rounded-xl p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="font-semibold text-lg text-indigo-700">My Recent Requests</h2>
            <a href="#" class="text-indigo-600 text-sm hover:underline">View All</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-indigo-50">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Service</th>
                        <th class="px-6 py-3 font-semibold">Requested On</th>
                        <th class="px-6 py-3 font-semibold">Status</th>
                        <th class="px-6 py-3 font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4">Logo Design</td>
                        <td class="px-6 py-4">Oct 22, 2025</td>
                        <td class="px-6 py-4">
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">In Progress</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-indigo-600 hover:underline text-sm">View</a>
                        </td>
                    </tr>

                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4">Website Revamp</td>
                        <td class="px-6 py-4">Oct 10, 2025</td>
                        <td class="px-6 py-4">
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Completed</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-indigo-600 hover:underline text-sm">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-6">
        <a href="{{ route('profile.edit') }}"
           class="bg-white shadow-md p-6 rounded-xl hover:bg-indigo-50 transition flex items-center justify-between">
            <div>
                <h3 class="font-semibold text-lg text-indigo-700">My Profile</h3>
                <p class="text-sm text-gray-600">Update your account info</p>
            </div>
            <span class="text-indigo-700 text-2xl">👤</span>
        </a>

        <a href="#"
           class="bg-white shadow-md p-6 rounded-xl hover:bg-indigo-50 transition flex items-center justify-between">
            <div>
                <h3 class="font-semibold text-lg text-indigo-700">Payments</h3>
                <p class="text-sm text-gray-600">View and manage your payments</p>
            </div>
            <span class="text-indigo-700 text-2xl">💳</span>
        </a>

        <a href="#"
           class="bg-white shadow-md p-6 rounded-xl hover:bg-indigo-50 transition flex items-center justify-between">
            <div>
                <h3 class="font-semibold text-lg text-indigo-700">Contact Support</h3>
                <p class="text-sm text-gray-600">Get help from MyBrand</p>
            </div>
            <span class="text-indigo-700 text-2xl">💬</span>
        </a>
    </div>

</div>
@endsection
