 <aside class="fixed z-30 w-64 h-full bg-white dark:bg-gray-800 shadow-xl overflow-y-auto transition-transform -translate-x-64 peer-checked:translate-x-0 md:translate-x-0">
    <div class="p-5 border-b border-gray-200 dark:border-gray-700">
      <a href="{{url('/admin/dashboard')}}"><h1 class="text-2xl font-bold text-primary dark:text-white">E-Learn Admin</h1></a>
    </div>

    <nav class="mt-4 px-3 space-y-2">
      <a href="{{url('/admin/dashboard')}}" class="block px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">🏠 Dashboard</a>

      <!-- User Management -->
      <div>
        <button onclick="toggleDropdown('userDropdown')" class="w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">
          👥 User Management <span id="userDropdownIcon" class="transition-transform">▼</span>
        </button>
        <div id="userDropdown" class="hidden ml-4 mt-1 space-y-1">
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Active Student</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Inactive Student</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Teacher</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Trainer</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Team Leader</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Telecaller</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Manager</a>
        </div>
      </div>

      <a href="#" class="block px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">📚 Course</a>

      <!-- Student Batch -->
      <div>
        <button onclick="toggleDropdown('batchDropdown')" class="w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">
          🎓 Student Batch <span id="batchDropdownIcon" class="transition-transform">▼</span>
        </button>
        <div id="batchDropdown" class="hidden ml-4 mt-1 space-y-1">
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Create Batch</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Batch List</a>
        </div>
      </div>

      <a href="#" class="block px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">🏅 Certificate</a>
      <a href="#" class="block px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">👥 Helpline</a>

      <!-- Withdraw Dropdown -->
      <div>
        <button onclick="toggleDropdown('withdrawDropdown')" class="w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">
          💸 Withdraw <span id="withdrawDropdownIcon" class="transition-transform">▼</span>
        </button>
        <div id="withdrawDropdown" class="hidden ml-4 mt-1 space-y-1">
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Student Withdraw</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Teacher Withdraw</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Trainer Withdraw</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Team Leader Withdraw</a>
        </div>
      </div>

      <!-- Setting -->
      <div>
        <button onclick="toggleDropdown('settingDropdown')" class="w-full flex justify-between items-center px-3 py-2 rounded-md hover:bg-primary/10 dark:hover:bg-primary/20 transition">
          ⚙️ Setting <span id="settingDropdownIcon" class="transition-transform">▼</span>
        </button>
        <div id="settingDropdown" class="hidden ml-4 mt-1 space-y-1">
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Site Setting</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Profile Setting</a>
          <a href="#" class="block px-3 py-1 rounded hover:bg-primary/10 dark:hover:bg-primary/20">Credential Setting</a>
        </div>
      </div>
    </nav>
  </aside>