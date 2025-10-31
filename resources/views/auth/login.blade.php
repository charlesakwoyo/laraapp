@extends('layout')

@section('title', 'Login')

@section('content')
<section class="flex items-center justify-center min-h-screen bg-gradient-to-br from-indigo-50 via-white to-indigo-100">
  <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-indigo-700 mb-6">Welcome Back</h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
      @csrf

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          value="{{ old('email') }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          required
          autofocus
        />
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          required
        />
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Remember Me -->
      <div class="flex items-center justify-between">
        <label class="flex items-center space-x-2">
          <input type="checkbox" name="remember" class="rounded text-indigo-600 border-gray-300 focus:ring-indigo-500">
          <span class="text-sm text-gray-700">Remember Me</span>
        </label>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot Password?</a>
        @endif
      </div>

      <!-- Submit Button -->
      <div class="pt-4">
        <button 
          type="submit" 
          class="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-semibold hover:bg-indigo-700 transition duration-200"
        >
          Log In
        </button>
      </div>

      <!-- Register Link -->
      <p class="text-center text-sm text-gray-600 mt-4">
        Don’t have an account?
        <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-medium">Register here</a>
      </p>
    </form>
  </div>
</section>
@endsection
