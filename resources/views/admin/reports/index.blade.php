@extends('layouts.admin')

@section('title', 'Reports | Admin Panel')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">Admin Reports</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="font-bold mb-2">User Reports</h2>
            <a href="{{ url('/admin/reports/users/pdf') }}" class="text-blue-600 hover:underline">Download PDF</a> 
            
        </div>

        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="font-bold mb-2">Service Reports</h2>
            <a href="{{ url('/admin/reports/services/pdf') }}" class="text-blue-600 hover:underline">Download PDF</a> 
            
        </div>

        
    </div>
</div>
@endsection
