<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mugdha's Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--  <link rel="stylesheet" href="{{ secure_asset('build/assets/app-Ct2FSlyM.css') }}">
    <script src="{{ secure_asset('build/assets/app-eMHK6VFw.js') }}" defer></script>-->

    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/solid.min.css" />

    <!-- Animate.css for entrance animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Vanta.js and Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
  function swipeComponent() {
    return {
      modalOpen: false,
      modalImage: '',
      navOpen: false,
      touchStartX: 0,
      touchEndX: 0,
      initSwipe() {
        window.addEventListener('touchstart', e => {
          this.touchStartX = e.changedTouches[0].screenX;
        });

        window.addEventListener('touchend', e => {
          this.touchEndX = e.changedTouches[0].screenX;
          this.handleSwipe();
        });
      },
      handleSwipe() {
    const deltaX = this.touchEndX - this.touchStartX;
    if (Math.abs(deltaX) > 50) {
        if (deltaX < 0) {
            window.location.href = "{{ url('/about') }}";
        } else {
            window.location.href = "{{ url('/contact') }}";
        }
    }
}

    };
  }
</script>


    <style>
        .neon-glow {
            text-shadow:
                0 0 5px #c084fc,
                0 0 10px #c084fc,
                0 0 20px #c084fc,
                0 0 40px #a855f7,
                0 0 80px #9333ea;
        }
        .neon-button {
            box-shadow: 0 0 10px #8e44ad, 0 0 20px #8e44ad, 0 0 30px #8e44ad;
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .neon-button:hover {
            transform: scale(1.10);
            background-color: #f3e8ff;
            box-shadow: 0 0 15px #a855f7, 0 0 30px #9333ea;
        }

        @keyframes slide-left {
        0%   { transform: translateX(0); }
        50%  { transform: translateX(-20px); }
        100% { transform: translateX(0); }
        }
        .animate-slide-left {
        animation: slide-left 1.2s ease-in-out infinite;
        }

    </style>
</head>



<body class="text-white overflow-x-hidden">

    <!-- 🔄 Preloader -->
    <div id="preloader" class="fixed inset-0 z-[9999] bg-black flex items-center justify-center">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-fuchsia-500 border-solid border-t-transparent"></div>
    </div>

    <div id="vanta-bg" class="min-h-screen w-full relative"
     x-data="swipeComponent()" x-init="initSwipe()">

        <!-- Navbar -->
        <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl" x-data="{ navOpen: false }">
            <!-- Logo -->
            <!-- Logo with always-visible hamburger below -->
        <div class="flex flex-col items-start gap-1">
            <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
            
        </div>


            

            <!-- Nav Links -->
            <ul class="hidden md:flex gap-6 text-sm md:text-base">
                <li><a href="{{ url('/') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
                <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
                <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
                <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
                <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
                <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
            </ul>

            <!-- Mobile Menu -->
            <ul x-show="navOpen" x-transition class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
                <li><a href="{{ url('/') }}" class="text-purple-300">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/education') }}">Education</a></li>
                <li><a href="{{ url('/skills') }}">Skills</a></li>
                <li><a href="{{ url('/projects') }}">Projects</a></li>
                <li><a href="{{ url('/certifications') }}">Certifications</a></li>
                <li><a href="{{ url('/test') }}">Honors & Awards</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>

        <!-- Floating Hamburger Button Below Navbar -->
        <!-- Floating Hamburger Button Below Navbar -->
        <div class="absolute top-[90px] left-6 z-50" x-data>
            <button @click="navOpen = !navOpen"
                class="text-purple-400 text-2xl focus:outline-none">
                <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
            </button>

            <!-- Dropdown Links -->
            <ul x-show="navOpen" x-transition
                class="mt-4 bg-black/90 backdrop-blur-md rounded-2xl px-8 py-6 space-y-4 shadow-2xl text-xl w-96">

                <li><a @click="navOpen = false" href="{{ url('/') }}" class="block text-purple-400 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Home</a></li>

                <li><a @click="navOpen = false" href="{{ url('/about') }}" class="block hover:text-purple-400">About</a></li>
                <li><a @click="navOpen = false" href="{{ url('/education') }}" class="block hover:text-purple-400">Education</a></li>
                <li><a @click="navOpen = false" href="{{ url('/skills') }}" class="block hover:text-purple-400">Skills</a></li>
                <li><a @click="navOpen = false" href="{{ url('/projects') }}" class="block hover:text-purple-400">Projects</a></li>
                <li><a @click="navOpen = false" href="{{ url('/certifications') }}" class="block hover:text-purple-400">Certifications</a></li>
                <li><a @click="navOpen = false" href="{{ url('/test') }}" class="block hover:text-purple-400">Honors & Awards</a></li>
                <li><a @click="navOpen = false" href="{{ url('/contact') }}" class="block hover:text-purple-400">Contact</a></li>
            </ul>
        </div>


        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16 px-4 sm:px-6 md:px-10 lg:px-20">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Mugdha"
            class="w-72 h-72 sm:w-80 sm:h-80 md:w-96 md:h-96 mb-6 object-cover border-4 border-[#d8b4fe] drop-shadow-[0_0_10px_#d8b4fe] shadow-xl transition-transform duration-300 hover:scale-105 animate__animated animate__fadeInDown cursor-zoom-in"
            @click="modalImage = '{{ asset('images/profile.jpeg') }}'; modalOpen = true" />

            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 tracking-wide neon-glow animate__animated animate__fadeInUp animate__delay-1s">
                Hello, I'm Mugdha
            </h1>

            <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-3xl mb-6 drop-shadow leading-relaxed animate__animated animate__fadeInUp animate__delay-2s">
                I'm a 3rd-year CSE student at <span class="text-yellow-200 font-medium">KUET</span>, driven by curiosity in 
                <span class="text-pink-200 font-medium">AI</span>, 
                <span class="text-pink-200 font-medium">Machine Learning</span>, and 
                <span class="text-pink-200 font-medium">Deep Learning</span>. 
                I thrive on solving real-world problems and crafting unique, innovative tech with clean, elegant code.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 mt-4 animate__animated animate__fadeInUp animate__delay-3s">
                <a href="{{ url('/download-cv') }}"
                class="px-5 py-3 text-sm sm:text-base bg-white text-gray-900 font-semibold rounded-lg shadow-lg neon-button text-center">
                Download CV
                </a>
                
                <a href="https://docs.google.com/viewer?url={{ urlencode(asset('documents/Mugdha_CV.pdf')) }}&embedded=true" 
                target="_blank" rel="noopener noreferrer"
                class="px-5 py-3 text-sm sm:text-base bg-white text-gray-900 font-semibold rounded-lg shadow-lg neon-button text-center">
                View CV
                </a>

            </div>


            <div class="flex flex-wrap justify-center gap-6 sm:gap-8 mt-6 text-white text-3xl sm:text-4xl animate__animated animate__fadeInUp animate__delay-4s">
               <a href="https://www.linkedin.com/in/adit-mugdha-das-0a6723314/" target="_blank"
                   class="hover:text-blue-400 hover:drop-shadow-[0_0_8px_#3b82f6] transition-transform transform duration-300 hover:scale-110" title="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/Adit-Mugdha-das" target="_blank"
                   class="hover:text-gray-300 hover:drop-shadow-[0_0_8px_#d1d5db] transition-transform transform duration-300 hover:scale-110" title="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="mailto:mailbox.mugdha@gmail.com"
                   class="hover:text-red-400 hover:drop-shadow-[0_0_8px_#f87171] transition-transform transform duration-300 hover:scale-110" title="Email">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://wa.me/8801718108344" target="_blank"
                   class="hover:text-green-400 hover:drop-shadow-[0_0_8px_#4ade80] transition-transform transform duration-300 hover:scale-110" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://leetcode.com/u/Mugdha_118/" target="_blank"
                   class="hover:text-yellow-400 hover:drop-shadow-[0_0_8px_#facc15] transition-transform transform duration-300 hover:scale-110" title="LeetCode">
                    <i class="fas fa-code"></i>
                </a>
                <a href="https://www.facebook.com/aditmugdha.das.3" target="_blank"
                   class="hover:text-blue-500 hover:drop-shadow-[0_0_8px_#3b82f6] transition-transform transform duration-300 hover:scale-110" title="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>

            <div class="mt-8 block  text-white text-sm text-center">
            <p class="mb-2">Swipe to navigate</p>
            <div class="relative w-full flex justify-center overflow-hidden">
                <div class="flex gap-6 animate-slide-left text-purple-400 text-2xl">
                <i class="fa-solid fa-arrow-left"></i>
                <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </div>



        </section>

        <!-- Modal -->
        <div x-show="modalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
            <div class="absolute inset-0 bg-black/80" @click="modalOpen = false"></div>
            <img :src="modalImage" class="relative max-w-full max-h-[90vh] rounded-lg shadow-lg border-4 border-purple-400 z-10">
        </div>

        <!-- Vanta Background Script -->
        <script>
            VANTA.NET({
                el: "#vanta-bg",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x8e44ad,
                backgroundColor: 0x0f172a
            });
        </script>
    </div>

    <!-- 🧠 Loader fade-out script -->
    <script>
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.style.transition = 'opacity 0.5s ease';
                preloader.style.opacity = 0;
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500);
            }
        });
    </script>

</body>
</html>
