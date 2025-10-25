<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Dashboard')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-indigo-700 text-white flex flex-col fixed h-full transition-transform duration-300 ease-in-out" id="sidebar">
      <div class="p-6 text-2xl font-bold border-b border-indigo-500">
        AdminPanel
      </div>
      <nav class="flex-1 p-4 space-y-2">
        <a href="{{ route('users.index') }}" class="block py-2.5 px-4 rounded hover:bg-indigo-600 transition">👥 Users</a>
        <a href="{{ route('services.index') }}" class="block py-2.5 px-4 rounded hover:bg-indigo-600 transition">🛠 Services</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-indigo-600 transition">💬 Messages</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-indigo-600 transition">⚙️ Settings</a>
      </nav>
      <div class="p-4 border-t border-indigo-500">
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-indigo-600 transition">🚪 Logout</a>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 ml-64">
      <!-- Topbar -->
      <header class="bg-white shadow p-4 flex justify-between items-center sticky top-0 z-10">
        <button class="md:hidden text-indigo-700 text-2xl" id="menu-btn">☰</button>
        <h1 class="text-xl font-semibold text-gray-700">@yield('title', 'Dashboard')</h1>
        <div class="flex items-center space-x-4">
          <span class="text-gray-600">Welcome, Admin</span>
          <img src="https://i.pravatar.cc/40" alt="User Avatar" class="rounded-full w-10 h-10 border border-gray-300">
        </div>
      </header>

      <!-- Dynamic Page Content -->
      <main class="p-6">
        @yield('content')
      </main>
    </div>
  </div>

  <!-- Sidebar Toggle Script -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');
    menuBtn?.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });
  </script>
</body>
</html>
