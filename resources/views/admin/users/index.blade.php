@extends('layouts.admin')

@section('title', 'Users')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6">All Users</h1>

    <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border">#</th>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border text-center">{{ $index + 1 }}</td>
                    <td class="py-2 px-4 border">{{ $user->name }}</td>
                    <td class="py-2 px-4 border">{{ $user->email }}</td>
                    <td class="py-2 px-4 border">{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-500">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
