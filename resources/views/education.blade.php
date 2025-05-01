<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Education | Mugdha's Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Vanta.js & Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .neon-glow {
            text-shadow:
                0 0 5px #c084fc,
                0 0 10px #c084fc,
                0 0 20px #c084fc,
                0 0 40px #a855f7,
                0 0 80px #9333ea;
        }
                                            
        @media (max-width: 768px) {
            .flex-col-on-mobile {
                flex-direction: column;
                align-items: start;
            }

            .education-card img {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body class="text-white overflow-x-hidden">
<div id="vanta-bg" class="min-h-screen w-full relative" x-data="{ navOpen: false, show: false }" x-init="$watch('show', val => document.body.classList.toggle('overflow-hidden', val))">

<!-- Navbar -->
<nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl">
    <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
    <button @click="navOpen = !navOpen" class="md:hidden text-purple-300 text-2xl focus:outline-none">
        <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
    </button>
    <ul class="hidden md:flex gap-6 text-sm md:text-base">
        <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
        <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
        <li><a href="{{ url('/education') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Education</a></li>
        <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
        <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
        <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
        <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>
        <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
    </ul>
    <!-- Mobile Menu -->
    <ul x-show="navOpen" x-transition @click.away="navOpen = false"
        class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/education') }}" class="text-purple-300">Education</a></li>
        <li><a href="{{ url('/skills') }}">Skills</a></li>
        <li><a href="{{ url('/projects') }}">Projects</a></li>
        <li><a href="{{ url('/certifications') }}">Certifications</a></li>
        <li><a href="{{ url('/test') }}">Honors & Awards</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>


    <!-- Floating Hamburger Button -->
<div class="absolute top-[90px] left-6 z-50" x-data>
    <button @click="navOpen = !navOpen" class="text-purple-300 text-2xl focus:outline-none">
        <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
    </button>
    <ul x-show="navOpen" x-transition @click.away="navOpen = false"
    class="mt-4 bg-black/90 backdrop-blur-md rounded-2xl px-8 py-6 space-y-4 shadow-2xl text-xl w-96">
        <li><a @click="navOpen = false" href="{{ url('/about') }}" class="block hover:text-purple-300">About</a></li>
        <li><a @click="navOpen = false" href="{{ url('/education') }}" class="block hover:text-purple-300">Education</a></li>
        <li><a @click="navOpen = false" href="{{ url('/skills') }}" class="block hover:text-purple-300">Skills</a></li>
        <li><a @click="navOpen = false" href="{{ url('/projects') }}" class="block hover:text-purple-300">Projects</a></li>
        <li><a @click="navOpen = false" href="{{ url('/certifications') }}" class="block hover:text-purple-300">Certifications</a></li>
        <li><a @click="navOpen = false" href="{{ url('/test') }}" class="block hover:text-purple-300">Honors & Awards</a></li>
        <li><a @click="navOpen = false" href="{{ url('/contact') }}" class="block hover:text-purple-300">Contact</a></li>
    </ul>
</div>


    <!-- Education Section -->
    <section class="flex flex-col items-center justify-center py-20 px-4 sm:px-6">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-14 neon-glow animate__animated animate__fadeInDown text-center">Education</h1>

        <!-- KUET -->
        <div class="w-full max-w-4xl mb-10">
            <div class="bg-black/60 p-6 sm:p-8 rounded-xl border border-fuchsia-400/20 shadow-lg w-full flex flex-col md:flex-row gap-6 md:gap-8 items-start md:items-center transition-all duration-300 hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc] animate__animated animate__fadeInUp education-card">
                <img src="{{ asset('images/kuet.png') }}" alt="KUET Logo" class="w-20 h-20 sm:w-24 sm:h-24 object-contain rounded-xl bg-white/10 p-2 shadow-md" />
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-fuchsia-400 mb-1">Khulna University of Engineering and Technology</h2>
                    <p class="text-white text-base sm:text-xl">B.Sc in Computer Science</p>
                    <p class="text-white/70 text-base sm:text-xl">Duration: Jan 2023 – Present</p>
                    <p class="text-fuchsia-400 text-base sm:text-xl font-semibold">
                        CGPA: 3.64 <span class="text-white/70 font-normal">(from first three semesters)</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- BAF Shaheen -->
        <div class="w-full max-w-4xl mb-10">
            <div class="bg-black/60 p-6 sm:p-8 rounded-xl border border-fuchsia-400/20 shadow-lg w-full flex flex-col md:flex-row gap-6 md:gap-8 items-start md:items-center transition-all duration-300 hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc] animate__animated animate__fadeInUp animate__delay-1s education-card">
                <img src="{{ asset('images/baf.png') }}" alt="BAF Logo" class="w-20 h-20 sm:w-24 sm:h-24 object-contain rounded-xl bg-white/10 p-2 shadow-md" />
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-fuchsia-400 mb-1">BAF Shaheen College Dhaka</h2>
                    <p class="text-white text-base sm:text-xl">Higher Secondary Certificate – Science</p>
                    <p class="text-white/70 text-base sm:text-xl">Duration: Aug 2019 – Jul 2021</p>
                    <p class="text-fuchsia-400 text-base sm:text-xl font-semibold">Grade: GPA-5 (Out of 5)</p>
                </div>
            </div>
        </div>

        <!-- Shahjalal -->
        <div class="w-full max-w-4xl">
            <div class="bg-black/60 p-6 sm:p-8 rounded-xl border border-fuchsia-400/20 shadow-lg w-full flex flex-col md:flex-row gap-6 md:gap-8 items-start md:items-center transition-all duration-300 hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc] animate__animated animate__fadeInUp animate__delay-2s education-card">
                <img src="{{ asset('images/shahjalal.png') }}" alt="Shahjalal Logo" class="w-20 h-20 sm:w-24 sm:h-24 object-contain rounded-xl bg-white/10 p-2 shadow-md" />
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-fuchsia-400 mb-1">Shahjalal N G F F School</h2>
                    <p class="text-white text-base sm:text-xl">Secondary School Certificate – Science</p>
                    <p class="text-white/70 text-base sm:text-xl">Duration: Jan 2009 – Mar 2019</p>
                    <p class="text-fuchsia-400 text-base sm:text-xl font-semibold">Grade: GPA-5</p>
                    <p class="text-yellow-300 text-sm sm:text-lg font-medium mt-1">
                        🏆 Awarded <span class="font-semibold">Best Talent of the Year</span>
                        <a href="#" @click.prevent="show = true" class="ml-2 text-sm text-fuchsia-400 underline hover:text-fuchsia-300">
                            [View Certificate]
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate Modal -->
    <template x-if="show">
        <div class="fixed inset-0 z-50 bg-black/80 flex items-center justify-center backdrop-blur-sm" @click.self="show = false">
            <img src="{{ asset('images/best_talent_certificate.jpeg') }}"
                 alt="Best Talent Certificate"
                 class="max-h-[90vh] w-auto rounded-lg border border-fuchsia-400/20 shadow-2xl" />
        </div>
    </template>

    <!-- Vanta.js Init -->
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
            color: 0xc084fc,
            backgroundColor: 0x0b1120
        });
    </script>
</div>
</body>
</html>
