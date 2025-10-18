<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learn Sign Up</title>
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

<!-- SIGN UP CONTAINER -->
<div class="min-h-screen flex items-center justify-center px-4">
  <div class="max-w-4xl w-full bg-white dark:bg-gray-800 rounded-2xl shadow-2xl grid grid-cols-1 lg:grid-cols-2 overflow-hidden">
    
    <!-- LEFT IMAGE -->
    <div class="hidden lg:block relative">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop" 
           alt="Learning" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-black/30"></div>
      <div class="absolute bottom-10 left-10 text-white">
        <h2 class="text-3xl font-extrabold mb-2">Join E-Learn!</h2>
        <p class="text-sm max-w-xs">Access thousands of courses, connect with mentors, and build your portfolio.</p>
      </div>
    </div>

    <!-- SIGN UP FORM -->
    <div class="p-10 flex flex-col justify-center">
      <div class="text-center mb-6">
        <img src="https://cdn-icons-png.flaticon.com/512/906/906175.png" class="w-12 h-12 mx-auto mb-2" alt="Logo">
        <h1 class="text-2xl font-extrabold">Create Your Account</h1>
        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Sign up to start learning today</p>
      </div>
      
      <form action="#" method="POST" class="space-y-5">
        <div>
          <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"/>
        </div>

        <div>
          <label for="name" class="block text-sm font-medium mb-1">Whatsapp Number</label>
          <input type="text" id="name" name="name" placeholder="Your Name" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"/>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium mb-1">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"/>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium mb-1">Password</label>
          <input type="password" id="password" name="password" placeholder="********" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"/>
        </div>

        <div class="flex items-center gap-2 text-sm">
          <input type="checkbox" id="terms" class="rounded border-gray-300 dark:border-gray-600 focus:ring-primary" required>
          <label for="terms" class="text-gray-600 dark:text-gray-400">I agree to the <a href="#" class="text-primary hover:underline">Terms & Conditions</a></label>
        </div>

        <button type="submit" class="w-full py-3 rounded-lg bg-primary text-white font-semibold hover:bg-blue-600 transition">Sign Up</button>
      </form>

      <p class="text-center text-sm text-gray-500 dark:text-gray-400 mt-6">
        Already have an account? 
        <a href="{{url('/st-login')}}" class="text-primary font-semibold hover:underline">Login</a>
      </p>
    </div>
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
