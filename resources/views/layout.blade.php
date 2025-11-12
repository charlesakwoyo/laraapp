<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'MyBrand')</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-700">MyBrand</a>

      <!-- Mobile Menu Button -->
      <button id="menu-btn" class="block md:hidden focus:outline-none">
        <svg class="w-6 h-6 text-indigo-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Desktop Menu -->
      <ul id="menu" class="hidden md:flex space-x-6 font-medium text-gray-700 items-center">
        <li><a href="{{ route('home') }}" class="hover:text-indigo-600">Home</a></li>
        <li><a href="{{ route('features') }}" class="hover:text-indigo-600">Features</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-indigo-600">About</a></li>
        <li><a href="{{ route('services.public') }}" class="hover:text-indigo-600">Services</a></li>
        <li><a href="{{ route('testimonials') }}" class="hover:text-indigo-600">Testimonials</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-indigo-600">Contact</a></li>

        <!-- Auth Links -->
        @guest
          <li>
            <a href="{{ route('login') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Login</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-md hover:bg-indigo-50 transition">Register</a>
          </li>
        @else
          <li class="flex items-center space-x-2">
            <span class="text-indigo-700 font-semibold">Hi, {{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="text-red-500 hover:underline">Logout</button>
            </form>
          </li>
        @endguest
      </ul>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-inner">
      <ul class="flex flex-col items-center py-4 space-y-3 font-medium text-gray-700">
        <li><a href="{{ route('home') }}" class="hover:text-indigo-600">Home</a></li>
        <li><a href="{{ route('features') }}" class="hover:text-indigo-600">Features</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-indigo-600">About</a></li>
        <li><a href="{{ route('services.public') }}" class="hover:text-indigo-600">Services</a></li>
        <li><a href="{{ route('testimonials') }}" class="hover:text-indigo-600">Testimonials</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-indigo-600">Contact</a></li>

        @guest
          <li><a href="{{ route('login') }}" class="text-indigo-600 font-semibold">Login</a></li>
          <li><a href="{{ route('register') }}" class="text-indigo-600 font-semibold">Register</a></li>
        @else
          <li class="text-indigo-700 font-semibold">Hi, {{ Auth::user()->name }}</li>
          <li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="text-red-500 hover:underline">Logout</button>
            </form>
          </li>
        @endguest
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white text-center py-6 mt-10">
    <p>&copy; {{ date('Y') }} MyBrand. All Rights Reserved.</p>
  </footer>

  <!-- Toggle Script -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
  </script>
</body>
</html>
