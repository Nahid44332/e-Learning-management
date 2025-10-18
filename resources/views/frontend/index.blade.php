<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>E-Learn Advanced</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- AOS (Animate On Scroll) -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Swiper (testimonials carousel) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <style>
    /* Smooth global transitions */
    html { scroll-behavior: smooth; transition: background-color .45s, color .45s; }
    .transition-base { transition: all .28s ease-in-out; }

    /* Slight shadow for cards */
    .card-shadow { box-shadow: 0 8px 30px rgba(2,6,23,0.06); }

    /* A small ring focus for accessibility */
    .focus-ring:focus { outline: none; box-shadow: 0 0 0 4px rgba(37,99,235,.12); border-radius: .5rem; }

    /* Swiper override sizing */
    .swiper { padding-bottom: 1.5rem; }
    .swiper-slide { display: flex; justify-content: center; }

    /* small responsive tweak for hero image card */
    @media (min-width:1024px) {
      .hero-illustration { transform-origin: center; }
    }
  </style>

  <script>
    /* Tailwind custom config (colors, animation) */
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: { primary: '#2563eb', accent: '#7c3aed' },
          keyframes: {
            floaty: {
              '0%,100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-10px)' }
            },
            pop: {
              '0%': { transform: 'scale(0.98)' },
              '50%': { transform: 'scale(1.02)' },
              '100%': { transform: 'scale(1)' }
            }
          },
          animation: {
            floaty: 'floaty 6s ease-in-out infinite',
            pop: 'pop .6s ease-in-out'
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100">

  <!-- NAVBAR -->
  <header class="fixed inset-x-0 top-0 z-50 bg-white/75 dark:bg-gray-900/75 backdrop-blur border-b border-gray-200 dark:border-gray-800">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <a href="#home" class="flex items-center gap-3" data-aos="fade-right">
          <img src="https://cdn-icons-png.flaticon.com/512/906/906175.png" class="w-8 h-8" alt="logo">
          <span class="font-extrabold text-lg text-primary dark:text-white">E-Learn</span>
        </a>

        <nav class="hidden lg:flex items-center gap-6 text-sm font-medium">
          <a href="#home" class="hover:text-primary transition-base">Home</a>
          <a href="#about" class="hover:text-primary transition-base">About</a>
          <a href="#courses" class="hover:text-primary transition-base">Courses</a>
          <a href="#teachers" class="hover:text-primary transition-base">Teachers</a>
          <a href="#reviews" class="hover:text-primary transition-base">Reviews</a>
          <a href="#faq" class="hover:text-primary transition-base">FAQ</a>
          <a href="#contact" class="hover:text-primary transition-base">Contact</a>
        </nav>

        <div class="flex items-center gap-3">
          <a href="{{url('/admin/login')}}" class="hidden sm:inline-flex px-4 py-2 rounded-md bg-primary text-white text-sm hover:scale-105 hover:shadow-md transition-base">Admin Login</a>
          <a href="{{url('/sub-admin/login')}}" class="hidden sm:inline-flex px-3 py-2 rounded-md border border-primary text-primary text-sm hover:bg-primary hover:text-white transition-base">Sub Admin</a>

          <button id="themeToggle" class="p-2 rounded-md bg-gray-100 dark:bg-gray-800 hover:rotate-90 transition-base focus-ring" aria-label="Toggle theme">🌙</button>

          <button id="mobileMenuBtn" class="lg:hidden p-2 rounded-md bg-gray-100 dark:bg-gray-800 focus-ring" aria-expanded="false" aria-controls="mobileMenu">
            <svg id="icOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
            </svg>
            <svg id="icClose" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      </div>

      <div id="mobileMenu" class="lg:hidden hidden pb-4">
        <nav class="flex flex-col gap-2 px-1">
          <a href="#home" class="px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Home</a>
          <a href="#about" class="px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">About</a>
          <a href="#courses" class="px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Courses</a>
          <a href="#teachers" class="px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Teachers</a>
          <a href="#reviews" class="px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Reviews</a>
          <a href="#faq" class="px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">FAQ</a>
          <a href="#contact" class="px-3 py-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">Contact</a>
        </nav>
      </div>
    </div>
  </header>

  <main class="pt-20">

    <!-- HERO -->
    <section id="home" class="relative overflow-hidden pt-8 pb-20">
      <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          <div class="lg:col-span-7 space-y-5" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 w-max">
              <span class="text-primary font-semibold">New</span>
              <span class="text-xs text-gray-600 dark:text-gray-300">250+ courses added this month</span>
            </div>

            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
              Learn industry-ready skills with <span class="text-primary">hands-on</span> projects & mentorship
            </h1>

            <p class="text-gray-600 dark:text-gray-300 max-w-2xl">
              Practical courses designed and delivered by industry experts. Build portfolio projects and earn verified certificates.
            </p>

            <div class="flex flex-wrap gap-3">
              <a href="{{url('/student/login')}}" class="inline-flex items-center gap-2 px-5 py-3 rounded-lg bg-primary text-white font-semibold hover:scale-105 hover:shadow-lg transition-base">Login</a>
              <a href="{{url('/student/register')}}" class="inline-flex items-center gap-2 px-5 py-3 rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition-base">Register</a>
            </div>

            <!-- Stats -->
            <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
              <div><h3 class="text-3xl font-extrabold text-primary counter" data-target="5000">0</h3><p class="text-gray-600 dark:text-gray-400 font-medium">Students</p></div>
              <div><h3 class="text-3xl font-extrabold text-primary counter" data-target="200">0</h3><p class="text-gray-600 dark:text-gray-400 font-medium">Teachers</p></div>
              <div><h3 class="text-3xl font-extrabold text-primary counter" data-target="350">0</h3><p class="text-gray-600 dark:text-gray-400 font-medium">Courses</p></div>
              <div><h3 class="text-3xl font-extrabold text-primary counter" data-target="25">0</h3><p class="text-gray-600 dark:text-gray-400 font-medium">Awards</p></div>
            </div>
          </div>

          <div class="lg:col-span-5 flex justify-center lg:justify-end" data-aos="fade-left">
            <div class="relative w-full max-w-md hero-illustration">
              <div class="absolute -left-10 -top-10 w-44 h-44 bg-gradient-to-tr from-primary/30 to-accent/30 rounded-full blur-3xl opacity-60 animate-floaty"></div>
              <div class="absolute right-0 bottom-0 w-32 h-32 bg-gradient-to-br from-accent/30 to-primary/30 rounded-full blur-3xl opacity-60 animate-floaty"></div>

              <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 card-shadow transform hover:scale-[1.02] transition-base">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1200&auto=format&fit=crop" alt="featured" class="rounded-lg mb-4 w-full h-52 object-cover" />
                <h3 class="font-semibold text-lg">Featured: Frontend Mastery</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Build real web apps using modern tools and frameworks.</p>
                <div class="mt-4 flex items-center justify-between">
                  <span class="text-primary font-bold">৳1200</span>
                  <button class="px-3 py-1 rounded bg-primary text-white text-sm hover:scale-105 transition-base">Enroll</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-16" data-aos="fade-up">
      <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
          <div>
            <h2 class="text-3xl font-extrabold mb-4">About E-Learn</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-6 max-w-xl">
              E-Learn empowers learners with project-based courses, experienced instructors, and real-world assessments.
            </p>

            <ul class="space-y-4">
              <li class="flex gap-3 items-start">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-primary text-white font-bold">✓</span>
                <div><div class="font-semibold">Project-based learning</div><div class="text-sm text-gray-500 dark:text-gray-400">Build portfolio-worthy projects.</div></div>
              </li>

              <li class="flex gap-3 items-start">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-accent text-white font-bold">★</span>
                <div><div class="font-semibold">Mentors & Reviews</div><div class="text-sm text-gray-500 dark:text-gray-400">Receive feedback from industry pros.</div></div>
              </li>
            </ul>
          </div>

          <div class="relative" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?q=80&w=800&auto=format&fit=crop" alt="about image" class="rounded-2xl shadow-lg w-full object-cover" />
          </div>
        </div>
      </div>
    </section>

    <!-- COURSES -->
    <section id="courses" class="py-16 bg-gray-50 dark:bg-gray-900" data-aos="fade-up">
      <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center mb-12">Our Popular Courses</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Course 1 -->
         @foreach ($courses as $course)
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-lg transition-base overflow-hidden card-shadow" data-aos="fade-up"data-aos-delay="50">
            <img src="{{asset('backend/images/course/'.$course->thumbnail)}}" alt="course" class="w-full h-48 object-cover"/>
            <div class="p-5">
              <h3 class="font-semibold text-lg mb-2">{{$course->title}}</h3>
              <p class="text-gray-500 dark:text-gray-400 text-sm mb-3">{{$course->description}}</p>
              <div class="flex justify-between items-center">
                <span class="text-primary font-bold">৳{{$course->price}}</span>
                <button class="px-3 py-1 rounded bg-primary text-white text-sm hover:scale-105 transition-base">Enroll</button>
              </div>
            </div>
          </div>
         @endforeach
  
        </div>
      </div>
    </section>

    <!-- TEACHERS -->
    <section id="teachers" class="py-16" data-aos="fade-up">
      <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center mb-12">Meet Our Expert Teachers</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="text-center bg-white dark:bg-gray-800 rounded-2xl p-5 shadow hover:shadow-lg transition-base card-shadow" data-aos="fade-up" data-aos-delay="50">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover" alt="teacher">
            <h4 class="font-semibold text-lg mb-1">John Doe</h4>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Frontend Mentor</p>
          </div>

          <div class="text-center bg-white dark:bg-gray-800 rounded-2xl p-5 shadow hover:shadow-lg transition-base card-shadow" data-aos="fade-up" data-aos-delay="100">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover" alt="teacher">
            <h4 class="font-semibold text-lg mb-1">Jane Smith</h4>
            <p class="text-gray-500 dark:text-gray-400 text-sm">UI/UX Designer</p>
          </div>

          <div class="text-center bg-white dark:bg-gray-800 rounded-2xl p-5 shadow hover:shadow-lg transition-base card-shadow" data-aos="fade-up" data-aos-delay="150">
            <img src="https://randomuser.me/api/portraits/men/65.jpg" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover" alt="teacher">
            <h4 class="font-semibold text-lg mb-1">Mike Johnson</h4>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Backend Expert</p>
          </div>

          <div class="text-center bg-white dark:bg-gray-800 rounded-2xl p-5 shadow hover:shadow-lg transition-base card-shadow" data-aos="fade-up" data-aos-delay="200">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover" alt="teacher">
            <h4 class="font-semibold text-lg mb-1">Emily Davis</h4>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Data Science</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SUCCESS STUDENT REVIEWS (Swiper) -->
    <section id="reviews" class="py-16 bg-gray-50 dark:bg-gray-900" data-aos="fade-up">
      <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center mb-8">Success Student Reviews</h2>

        <!-- Swiper -->
        <div class="swiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-2xl p-6 shadow card-shadow text-center">
                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="student" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-semibold text-lg mb-1">Emily Davis</h4>
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-2">Frontend Development</p>
                <p class="text-gray-600 dark:text-gray-300 text-sm">"This course helped me land my dream job! The mentors were amazing and the projects were real-world."</p>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-2xl p-6 shadow card-shadow text-center">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="student" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-semibold text-lg mb-1">John Doe</h4>
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-2">Backend Development</p>
                <p class="text-gray-600 dark:text-gray-300 text-sm">"The backend course was structured perfectly. I feel confident in building APIs and full-stack apps now."</p>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-2xl p-6 shadow card-shadow text-center">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="student" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-semibold text-lg mb-1">Jane Smith</h4>
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-2">UI/UX Design</p>
                <p class="text-gray-600 dark:text-gray-300 text-sm">"Learning UI/UX here changed my design approach completely. The portfolio I built helped me get clients instantly."</p>
              </div>
            </div>
          </div>

          <!-- pagination + navigation -->
          <div class="swiper-pagination mt-6"></div>
        </div>

      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-16" data-aos="fade-up">
      <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center mb-12">Frequently Asked Questions</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="space-y-4">
            <details class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow card-shadow">
              <summary class="font-semibold cursor-pointer">How long do courses last?</summary>
              <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm">Most courses are 4-12 weeks long with flexible learning schedules.</p>
            </details>

            <details class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow card-shadow">
              <summary class="font-semibold cursor-pointer">Do I get a certificate?</summary>
              <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm">Yes, verified certificate issued upon completion of the course.</p>
            </details>
          </div>

          <div class="space-y-4">
            <details class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow card-shadow">
              <summary class="font-semibold cursor-pointer">Are courses self-paced?</summary>
              <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm">Most courses are self-paced but with weekly mentor sessions.</p>
            </details>

            <details class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow card-shadow">
              <summary class="font-semibold cursor-pointer">Can I switch courses?</summary>
              <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm">Yes, you can switch courses anytime within the first week.</p>
            </details>
          </div>
        </div>
      </div>
    </section>

   <!-- CONTACT SECTION -->
<section id="contact" class="py-20 bg-gray-50 dark:bg-gray-900" data-aos="fade-up">
  <div class="container mx-auto px-4 md:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-primary mb-2">Contact Us</h2>
      <p class="text-gray-600 dark:text-gray-300">We’d love to hear from you. Send us a message and we’ll reply as soon as possible.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-10 items-center">
      <!-- Contact Info -->
      <div class="space-y-6">
        <h3 class="text-2xl font-semibold">Get in touch</h3>
        <p class="text-gray-600 dark:text-gray-400">
          Have questions about our courses, teachers, or partnership opportunities?  
          Fill out the form or reach us directly at:
        </p>
        <ul class="space-y-2 text-gray-700 dark:text-gray-300">
          <li>📍 123 E-Learn Avenue, Dhaka, Bangladesh</li>
          <li>📧 info@elearnbd.com</li>
          <li>📞 +880 1234-567890</li>
        </ul>
      </div>

      <!-- Contact Form -->
      <form action="#" method="POST" class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 space-y-6 transition-all duration-300 hover:shadow-2xl">
        <div>
          <label for="name" class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary transition">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary transition">
        </div>

        <div>
          <label for="message" class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required
            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-primary transition"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-blue-700 hover:scale-[1.02] transition-all duration-300">
          Send Message
        </button>
      </form>
    </div>
  </div>
</section>


  </main>

  <!-- FOOTER -->
  <footer class="bg-gray-100 dark:bg-gray-800 py-10">
    <div class="container mx-auto px-4 md:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h3 class="text-lg font-semibold mb-2">E-Learn</h3>
        <p class="text-gray-600 dark:text-gray-300 text-sm">Empowering learners globally with skills and knowledge for career growth.</p>
      </div>

      <div>
        <h3 class="text-lg font-semibold mb-2">Quick Links</h3>
        <ul class="space-y-1 text-gray-600 dark:text-gray-300 text-sm">
          <li><a href="#about" class="hover:text-primary">About</a></li>
          <li><a href="#courses" class="hover:text-primary">Courses</a></li>
          <li><a href="#teachers" class="hover:text-primary">Teachers</a></li>
          <li><a href="#faq" class="hover:text-primary">FAQ</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-lg font-semibold mb-2">Contact</h3>
        <p class="text-gray-600 dark:text-gray-300 text-sm">Email: support@elearn.com</p>
        <p class="text-gray-600 dark:text-gray-300 text-sm">Phone: +880 1234 567890</p>
      </div>
    </div>

    <div class="mt-8 text-center text-gray-500 dark:text-gray-400 text-sm">© 2025 E-Learn. All rights reserved.</div>
  </footer>

  <!-- SCRIPTS -->
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    // AOS init
    AOS.init({ duration: 900, once: true, offset: 80 });

    // Mobile menu toggle
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const icOpen = document.getElementById('icOpen');
    const icClose = document.getElementById('icClose');
    mobileBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      icOpen.classList.toggle('hidden');
      icClose.classList.toggle('hidden');
    });

    // Dark mode toggle (simple)
    const themeToggle = document.getElementById('themeToggle');
    themeToggle.addEventListener('click', () => {
      document.documentElement.classList.toggle('dark');
      // small icon swap
      themeToggle.textContent = document.documentElement.classList.contains('dark') ? '☀️' : '🌙';
    });

    // Smooth counter using requestAnimationFrame
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      let start = 0;
      const duration = 1400; // ms
      let startTime = null;
      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        const eased = progress < 0.5 ? (2 * progress * progress) : (-1 + (4 - 2 * progress) * progress); // simple ease
        counter.innerText = Math.ceil(eased * target);
        if (progress < 1) {
          requestAnimationFrame(step);
        } else {
          counter.innerText = target.toLocaleString();
        }
      }
      requestAnimationFrame(step);
    });

    // Swiper init for reviews
    const swiper = new Swiper('.swiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 4500, disableOnInteraction: false },
      pagination: { el: '.swiper-pagination', clickable: true },
      breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 1.2 },
        1024: { slidesPerView: 2 }
      }
    });
  </script>
</body>
</html>
