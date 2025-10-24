@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Overview</h2>

  <div class="grid md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
      <h3 class="text-gray-500">Users</h3>
      <p class="text-3xl font-semibold mt-2">1,245</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
      <h3 class="text-gray-500">Products</h3>
      <p class="text-3xl font-semibold mt-2">312</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
      <h3 class="text-gray-500">Sales</h3>
      <p class="text-3xl font-semibold mt-2">$4,820</p>
    </div>
  </div>

  <div class="mt-10 bg-white p-6 rounded-lg shadow">
    <h3 class="text-lg font-semibold mb-4">Recent Activity</h3>
    <ul class="space-y-3 text-gray-700">
      <li>🟢 New user registered</li>
      <li>🟣 Product added to inventory</li>
      <li>🔵 Payment received</li>
      <li>🟠 User updated profile</li>
    </ul>
  </div>
@endsection
