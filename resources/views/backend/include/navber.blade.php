<header class="flex justify-between items-center bg-white/80 dark:bg-gray-800/80 backdrop-blur px-6 py-4 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-40">
  <div class="flex items-center gap-3">
    <label for="sidebarToggle" class="md:hidden cursor-pointer p-2 bg-gray-200 dark:bg-gray-700 rounded-md">☰</label>
    <h2 class="text-xl font-semibold">@yield('page_title', 'Dashboard Overview')</h2>
  </div>

  <div class="relative flex items-center gap-3">
    <!-- Dark Mode Toggle -->
    <button id="themeToggle" class="p-2 bg-gray-200 dark:bg-gray-700 rounded-md" title="Toggle Theme">🌙</button>

    <!-- Profile Dropdown -->
    <div class="relative">
      <button id="profileBtn" class="flex items-center gap-2 p-2 bg-gray-200 dark:bg-gray-700 rounded-lg">
        <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full">
        <span>Admin</span>
        <span>▼</span>
      </button>
      <div id="profileMenu" class="hidden absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Setting</a>
        <a href="{{url('/admin-logout')}}" class="block px-4 py-2 text-red-500 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
      </div>
    </div>
  </div>
</header>
