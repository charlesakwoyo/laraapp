@extends('layouts.admin')

@section('title', 'Admin Dashboard | MyBrand')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 px-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-indigo-700">Admin Dashboard</h1>
            <p class="text-gray-600">Welcome back, {{ auth()->user()->name ?? 'Admin' }} 👋</p>
        </div>
        <div class="flex gap-3">
            <!-- Generate Report Button -->
            <a href="{{ route('admin.reports.index') }}"
               class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow">
               📄 Generate Report
            </a>
            <!-- Logout -->
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg shadow">
               Logout
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
    </div>

    <!-- Stats Overview -->
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Overview</h2>

    <div class="grid md:grid-cols-4 gap-6">
        <!-- Users -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex justify-between items-center">
                <h3 class="text-gray-500 font-medium">Total Users</h3>
                <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded-full text-sm font-medium">+{{ $userGrowth ?? 5 }}%</span>
            </div>
            <p class="text-3xl font-semibold mt-2 text-gray-800">{{ $totalUsers ?? 0 }}</p>
            <p class="text-sm text-gray-400 mt-1">Active this month</p>
        </div>

        <!-- Events -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex justify-between items-center">
                <h3 class="text-gray-500 font-medium">Total Events</h3>
                <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-sm font-medium">+{{ $eventGrowth ?? 3 }}</span>
            </div>
            <p class="text-3xl font-semibold mt-2 text-gray-800">{{ $totalEvents ?? 0 }}</p>
            <p class="text-sm text-gray-400 mt-1">Published</p>
        </div>

        <!-- Bookings -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex justify-between items-center">
                <h3 class="text-gray-500 font-medium">Bookings</h3>
                <span class="bg-indigo-100 text-indigo-600 px-2 py-1 rounded-full text-sm font-medium">↑ {{ $bookingRate ?? 8 }}%</span>
            </div>
            <p class="text-3xl font-semibold mt-2 text-gray-800">{{ $totalBookings ?? 0 }}</p>
            <p class="text-sm text-gray-400 mt-1">Completed</p>
        </div>

        <!-- Revenue -->
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="flex justify-between items-center">
                <h3 class="text-gray-500 font-medium">Revenue</h3>
                <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded-full text-sm font-medium">↑ {{ $revenueGrowth ?? 10 }}%</span>
            </div>
            <p class="text-3xl font-semibold mt-2 text-gray-800">${{ number_format($totalRevenue ?? 0, 2) }}</p>
            <p class="text-sm text-gray-400 mt-1">This week’s earnings</p>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="mt-10 bg-white p-6 rounded-xl shadow">
        <h3 class="text-lg font-semibold mb-4 text-gray-800">Recent Activity</h3>

        @if(isset($recentActivities) && count($recentActivities) > 0)
            <ul class="space-y-3 text-gray-700">
                @foreach($recentActivities as $activity)
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-{{ $activity['color'] ?? 'blue' }}-500 rounded-full"></span>
                        {{ $activity['message'] }}
                        <span class="text-gray-400 text-sm ml-auto">{{ $activity['time'] }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500">No recent activities found.</p>
        @endif
    </div>

</div>
@endsection
