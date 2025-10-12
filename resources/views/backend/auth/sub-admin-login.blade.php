<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sub-Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#2563eb',
            accent: '#7c3aed'
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100">

<!-- SUB-ADMIN LOGIN CONTAINER -->
<div class="min-h-screen flex items-center justify-center px-4">
  <div class="max-w-md w-full bg-white dark:bg-gray-800 rounded-2xl shadow-2xl p-10">
    
    <!-- HEADER -->
    <div class="text-center mb-6">
      <img src="https://cdn-icons-png.flaticon.com/512/906/906175.png" class="w-12 h-12 mx-auto mb-2" alt="Logo">
      <h1 class="text-2xl font-extrabold">Sub-Admin Login</h1>
      <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Select your promotion and login</p>
    </div>
    
    <!-- FORM -->
    <form action="#" method="POST" class="space-y-5">
      
      <div>
        <label for="promotion" class="block text-sm font-medium mb-1">Promotion</label>
        <select id="promotion" name="promotion" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary">
          <option value="">Select Promotion</option>
          <option value="promo1">Trainer</option>
          <option value="promo2">Team Leader</option>
          <option value="promo3">Teacher</option>
          <option value="promo4">Counsellor</option>
          <option value="promo5">Telecaller</option>
          <option value="promo6">Helpline Officer</option>
        </select>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="admin@example.com" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"/>
      </div>

      <div>
        <label for="password" class="block text-sm font-medium mb-1">Password</label>
        <input type="password" id="password" name="password" placeholder="********" required
          class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"/>
      </div>

      <button type="submit" class="w-full py-3 rounded-lg bg-primary text-white font-semibold hover:bg-blue-600 transition">Login</button>
    </form>

    <p class="text-center text-sm text-gray-500 dark:text-gray-400 mt-6">
      Back to <a href="{{url('/login')}}" class="text-primary font-semibold hover:underline">User Login</a>
    </p>
  </div>
</div>

<!-- DARK MODE TOGGLE -->
<button id="themeToggle" class="fixed bottom-5 right-5 p-3 rounded-full bg-gray-100 dark:bg-gray-700 shadow-md" aria-label="Toggle theme">🌙</button>
<script>
  const themeToggle = document.getElementById('themeToggle');
  themeToggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
  });
</script>

</body>
</html>
