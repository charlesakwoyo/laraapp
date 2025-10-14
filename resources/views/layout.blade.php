<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'MyBrand | Create Amazing Websites')</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white text-gray-900">
    
    <!-- Navbar -->
    <header class="bg-white shadow fixed w-full top-0 z-50">
      <nav class="container mx-auto flex justify-between items-center py-4 px-6">
        <h1 class="text-2xl font-bold text-indigo-600">MyBrand</h1>
        <ul class="hidden md:flex space-x-8 font-medium">
          <li><a href="{{ url('/') }}" class="hover:text-indigo-600 transition">Home</a></li>
          <li><a href="#features" class="hover:text-indigo-600 transition">Features</a></li>
          <li><a href="#about" class="hover:text-indigo-600 transition">About</a></li>
          <li><a href="#contact" class="hover:text-indigo-600 transition">Contact</a></li>
        </ul>
        <button class="md:hidden text-gray-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
               fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </nav>
    </header>

    <!-- Page Content -->
    <main class="pt-24">
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 mt-20">
      <div class="container mx-auto grid md:grid-cols-4 gap-10 px-6">
        <div>
          <h4 class="text-2xl font-bold text-white mb-4">MyBrand</h4>
          <p class="text-gray-400 mb-4">
            Empowering creators and businesses to build beautiful, scalable digital experiences.
          </p>
        </div>

        <div>
          <h5 class="text-lg font-semibold mb-4 text-white">Company</h5>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-indigo-400">About Us</a></li>
            <li><a href="#" class="hover:text-indigo-400">Careers</a></li>
            <li><a href="#" class="hover:text-indigo-400">Blog</a></li>
          </ul>
        </div>

        <div>
          <h5 class="text-lg font-semibold mb-4 text-white">Support</h5>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-indigo-400">Help Center</a></li>
            <li><a href="#" class="hover:text-indigo-400">Contact Us</a></li>
            <li><a href="#" class="hover:text-indigo-400">FAQs</a></li>
          </ul>
        </div>

        <div>
          <h5 class="text-lg font-semibold mb-4 text-white">Subscribe</h5>
          <form class="flex flex-col sm:flex-row gap-3">
            <input type="email" placeholder="Your Email"
                   class="px-4 py-2 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none w-full sm:w-auto" />
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
              Subscribe
            </button>
          </form>
        </div>
      </div>

      <div class="mt-10 text-center text-gray-500 border-t border-gray-700 pt-6">
        © 2025 MyBrand. All rights reserved.
      </div>
    </footer>

    <!-- Simple Animations -->
    <style>
      @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
      }
      .animate-float { animation: float 3s ease-in-out infinite; }
      @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
      }
      .animate-fadeInUp { animation: fadeInUp 1.2s ease-out; }
    </style>
  </body>
</html>
