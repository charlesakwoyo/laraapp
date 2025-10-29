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
      <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-700">MyBrand</a>

      <button id="menu-btn" class="block md:hidden focus:outline-none">
        <svg class="w-6 h-6 text-indigo-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <ul id="menu" class="hidden md:flex space-x-6 font-medium text-gray-700 md:items-center">
        <li><a href="{{ route('home') }}" class="hover:text-indigo-600">Home</a></li>
<li><a href="{{ route('features') }}" class="hover:text-indigo-600">Features</a></li>
<li><a href="{{ route('about') }}" class="hover:text-indigo-600">About</a></li>
<li><a href="{{ route('services') }}" class="hover:text-indigo-600">Services</a></li>
<li><a href="{{ route('testimonials') }}" class="hover:text-indigo-600">Testimonials</a></li>
<li><a href="{{ route('contact') }}" class="hover:text-indigo-600">Contact</a></li>

      </ul>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-inner">
      <ul class="flex flex-col items-center py-4 space-y-3 font-medium text-gray-700">
        <li><a href="{{ route('home') }}" class="hover:text-indigo-600">Home</a></li>
<li><a href="{{ route('features') }}" class="hover:text-indigo-600">Features</a></li>
<li><a href="{{ route('about') }}" class="hover:text-indigo-600">About</a></li>
<li><a href="{{ route('services') }}" class="hover:text-indigo-600">Services</a></li>
<li><a href="{{ route('testimonials') }}" class="hover:text-indigo-600">Testimonials</a></li>
<li><a href="{{ route('contact') }}" class="hover:text-indigo-600">Contact</a></li>

      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Contact Section (for pages that include it) -->
  @yield('contact')

  <!-- Footer -->
  <footer class="bg-gray-900 text-white text-center py-6">
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
