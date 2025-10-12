<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Dashboard')</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#2563eb',
            accent: '#7c3aed',
          }
        }
      }
    }
  </script>

  <!-- Additional Styles -->
  @stack('styles')
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-all duration-300">

<div class="flex min-h-screen">

  <!-- Sidebar -->
  @include('backend.include.sidebar')

  <!-- Main Content -->
  <main class="flex-1 ml-0 md:ml-64 transition-all duration-300">
    <!-- Navbar -->
   @include('backend.include.navber')

    <!-- Page Content -->
    @yield('content')
  </main>

</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@include('backend.include.script')
@stack('scripts')

</body>
</html>
