<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Mugdha</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    <!--<link rel="stylesheet" href="{{ secure_asset('build/assets/app-Ct2FSlyM.css') }}">
<script src="{{ secure_asset('build/assets/app-eMHK6VFw.js') }}" defer></script>-->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Animate.css for entrance animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Vanta.js & Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
  function swipeComponent() {
    return {
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
            window.location.href = "{{ url('/') }}"; // swipe left → go to Home
          } else {
            window.location.href = "{{ url('/test') }}"; // swipe right → go to Honors & Awards
          }
        }
      }
    };
  }
</script>


    <style>
        .neon-glow {
            text-shadow: 0 0 5px #c084fc, 0 0 10px #c084fc, 0 0 20px #c084fc, 0 0 40px #a855f7, 0 0 80px #9333ea;
        }

        .contact-wrapper {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 1rem;
            box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .contact-wrapper:hover {
            transform: scale(1.01);
            box-shadow: 0 0 20px rgba(192, 132, 252, 0.6);
        }

        .icon-hover-linkedin:hover { color: #0077b5; transform: scale(1.2); }
        .icon-hover-github:hover { color: #c2c2c2; transform: scale(1.2); }
        .icon-hover-whatsapp:hover { color: #25d366; transform: scale(1.2); }
        .icon-hover-facebook:hover { color: #1877f2; transform: scale(1.2); }

        .social-icon:hover {
            transition: all 0.3s ease;
            filter: drop-shadow(0 0 6px #9333ea);
        }

        .form-animate {
            animation: fadeInUp 1.1s ease both;
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .submit-hover:hover {
            animation: bounce 0.4s;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }

        input:hover,
        textarea:hover {
            box-shadow: 0 0 12px rgba(192, 132, 252, 0.6);
            transition: all 0.3s ease;
        }
        /* Make opacity-0 elements visible after Animate.css animations */
        .opacity-0.animate__animated {
            animation-fill-mode: forwards !important;
            opacity: 1 !important;
        }

        @keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.7s ease forwards;
        }

        .delay-1000 {
            animation-delay: 1s;
        }
        .neon-hover {
    transition: box-shadow 0.15s ease-in-out, transform 0.15s ease-in-out;
}

.neon-hover:hover {
    box-shadow: 0 0 6px #c084fc, 0 0 12px #a855f7;
    transform: scale(1.02);
}
[x-cloak] { display: none !important; }



    </style>
</head>
<body class="text-white">
<div id="vanta-bg" class="min-h-screen" x-data="swipeComponent()" x-init="initSwipe()">



    <!-- Navbar -->
    <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl">
        <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
      
        <ul class="hidden md:flex gap-6 text-sm md:text-base">
            <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
            <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
            <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
            <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
            <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
            <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>
            <li><a href="{{ url('/contact') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Contact</a></li>
        </ul>
        <!-- Mobile Menu -->
        <ul x-show="open" x-cloak class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/education') }}">Education</a></li>
            <li><a href="{{ url('/skills') }}">Skills</a></li>
            <li><a href="{{ url('/projects') }}">Projects</a></li>
            <li><a href="{{ url('/certifications') }}">Certifications</a></li>
            <li><a href="{{ url('/test') }}">Honors & Awards</a></li>
            <li><a href="{{ url('/contact') }}" class="text-purple-300">Contact</a></li>
        </ul>
    </nav>

 <!-- Floating Hamburger Button -->
 <div class="absolute top-[90px] left-6 z-50">
    <button @click="navOpen = !navOpen" class="text-purple-400 text-2xl focus:outline-none">
        <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
    </button>

    <ul x-show="navOpen" x-cloak x-transition
    class="mt-4 bg-black/90 backdrop-blur-md rounded-2xl px-8 py-6 space-y-4 shadow-2xl text-xl w-96">
    <li><a @click="navOpen = false" href="{{ url('/portfolio') }}" class="block hover:text-purple-300">Home</a></li>
    <li><a @click="navOpen = false" href="{{ url('/about') }}" class="block hover:text-purple-300">About</a></li>
    <li><a @click="navOpen = false" href="{{ url('/education') }}" class="block hover:text-purple-300">Education</a></li>
    <li><a @click="navOpen = false" href="{{ url('/skills') }}" class="block hover:text-purple-300">Skills</a></li>
    <li><a @click="navOpen = false" href="{{ url('/projects') }}" class="block hover:text-purple-300">Projects</a></li>
    <li><a @click="navOpen = false" href="{{ url('/certifications') }}" class="block hover:text-purple-300">Certifications</a></li>
    <li><a @click="navOpen = false" href="{{ url('/test') }}" class="block hover:text-purple-300">Honors & Awards</a></li>
    <li><a @click="navOpen = false" href="{{ url('/contact') }}" class="block text-purple-300">Contact</a></li>
</ul>

</div>


    <!-- Contact Section -->
    <section class="py-20 px-6 text-center">
        <!-- Heading -->
        <div class="mb-14 animate__animated animate__fadeInDown">
            <h1 class="text-4xl font-bold text-white drop-shadow-[0_0_20px_#c084fc]">SEND ME A MESSAGE</h1>
            <div class="w-24 h-1 bg-purple-500 mx-auto mt-2"></div>
        </div>

        <!-- Contact Box -->
        <div class="contact-wrapper max-w-6xl mx-auto p-10 flex flex-col lg:flex-row gap-10 animate__animated animate__fadeInUp">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 space-y-6 text-left">
                <h2 class="text-2xl font-semibold text-white">Getting in touch is easy!</h2>

                <div class="text-gray-300 space-y-3 text-[1.1rem]">
                    <p><i class="fas fa-map-marker-alt mr-3 text-fuchsia-400 text-lg"></i> Road 14, Adabor, Dhaka, Bangladesh</p>
                    <p><i class="fas fa-phone mr-3 text-fuchsia-400 text-lg"></i> +8801718108344</p>
                    <p><i class="fas fa-envelope mr-3 text-fuchsia-400 text-lg"></i> 
                        <a href="mailto:{{ config('contact.email') }}" class="text-purple-300 hover:text-purple-400">
                            {{ config('contact.email') }}
                        </a>
                    </p>
                </div>

                <!-- Social Icons -->
                <div class="flex gap-6 mt-4 text-4xl">
                    <a href="{{ config('contact.linkedin') }}" target="_blank" class="text-fuchsia-400 icon-hover-linkedin social-icon transition duration-300"><i class="fab fa-linkedin"></i></a>
                    <a href="{{ config('contact.github') }}" target="_blank" class="text-fuchsia-400 icon-hover-github social-icon transition duration-300"><i class="fab fa-github"></i></a>
                    <a href="https://wa.me/8801718108344" target="_blank" class="text-fuchsia-400 icon-hover-whatsapp social-icon transition duration-300"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/aditmugdha.das.3" target="_blank" class="text-fuchsia-400 icon-hover-facebook social-icon transition duration-300"><i class="fab fa-facebook"></i></a>
                </div>

              <!-- Download CV Button -->
              <!-- Download CV Button -->
                <!-- Download CV Button -->
                <div class="mt-6">
                <a href="{{ url('/download-cv') }}"
                    class="neon-hover bg-fuchsia-500 hover:bg-fuchsia-600 text-white px-6 py-3 rounded shadow-md transition-all w-full max-w-[200px] text-center animate-fadeInUp delay-1000 inline-block">
                    Download CV
                    </a>
                </div>

            </div>

            <!-- Right Column (Form) -->
            <div class="w-full lg:w-1/2 form-animate">
                @if(session('success'))
                    <div class="bg-green-600/80 text-white p-4 rounded-lg mb-6 shadow-lg text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name"
                           class="w-full bg-white/15 text-white placeholder-white/80 px-4 py-3 rounded-lg border border-purple-400/60 focus:outline-none focus:ring-2 focus:ring-white focus:shadow-[0_0_10px_#ffffff80] transition" required>

                    <input type="email" name="email" placeholder="Your Email"
                           class="w-full bg-white/15 text-white placeholder-white/80 px-4 py-3 rounded-lg border border-purple-400/60 focus:outline-none focus:ring-2 focus:ring-white focus:shadow-[0_0_10px_#ffffff80] transition" required>

                    <textarea name="message" rows="5" placeholder="Write us about any project. We’d love to work with you!"
                              class="w-full bg-white/15 text-white placeholder-white/80 px-4 py-3 rounded-lg border border-purple-400/60 focus:outline-none focus:ring-2 focus:ring-white focus:shadow-[0_0_10px_#ffffff80] transition" required></textarea>

                    <button type="submit"
                            class="submit-hover bg-fuchsia-500 hover:bg-fuchsia-600 text-white px-6 py-3 rounded shadow-md hover:shadow-lg transition-all w-full">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>

<!-- Vanta.js Background -->
<script>
    VANTA.NET({
        el: "#vanta-bg",
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.0,
        scaleMobile: 1.0,
        color: 0xc084fc,
        backgroundColor: 0x0b1120
    });
</script>
</body>
</html>
