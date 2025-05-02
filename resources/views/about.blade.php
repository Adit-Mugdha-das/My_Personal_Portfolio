<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me | Adit Mugdha Das</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Animate.css for entrance animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Vanta.js and Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #0f172a;
            overflow-x: hidden;
        }

        #vanta-bg {
            min-height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .neon-glow {
            text-shadow: 0 0 5px #c084fc, 0 0 10px #c084fc, 0 0 20px #c084fc, 0 0 40px #a855f7, 0 0 80px #9333ea;
        }

        .about-wrapper {
            max-width: 1300px;
            margin: 3rem auto;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 1.5rem;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 1rem;
            box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
        }

        @media(min-width: 768px) {
            .about-wrapper {
                flex-direction: row;
                align-items: stretch;
            }
        }

        .profile-image {
            flex: 1;
            border-radius: 1rem;
            overflow: hidden;
            border: 2px solid #9333ea;
            box-shadow: 0 0 15px #9333ea80;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            min-height: 400px;
        }

        .profile-image:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #d946ef, 0 0 40px #c084fc;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 40% center;
            transition: transform 0.4s ease;
        }

        .profile-image:hover img {
            transform: scale(1.02);
        }

        @media (max-width: 767px) {
            .profile-image {
                min-height: auto;
                max-height: 450px;
            }

            .profile-image img {
                height: auto;
                max-height: 100%;
                object-fit: contain;
                object-position: center;
                padding: 1rem;
            }

            .about-wrapper {
                padding: 1rem 1rem 2rem;
            }
        }

        .about-text-content {
            flex: 1.5;
            padding-left: 1.5rem;
        }

        @media (max-width: 767px) {
            .about-text-content {
                padding-left: 0;
            }
        }

        .about-text-content h1 {
            text-align: center;
            color: #ff85c1;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 0 20px #c084fc;
        }

        @media (min-width: 768px) {
            .about-text-content h1 {
                font-size: 3rem;
            }
        }

        .about-text {
            font-size: 1rem;
            line-height: 1.8;
            color: white;
            text-align: justify;
            margin-bottom: 15px;
        }

        @media (min-width: 640px) {
            .about-text {
                font-size: 1.125rem;
            }
        }

        .highlight {
            color: #ff85c1;
        }

        .cta-link {
            color: #a855f7;
            font-weight: bold;
        }

        .cta-link:hover {
            color: #9333ea;
        }
    </style>
</head>
<body class="text-white overflow-x-hidden bg-[#0f172a]">
    <div id="vanta-bg" x-data="{ navOpen: false }">

        <!-- Navbar -->
        <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl">
            <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>

            <!-- Nav Links -->
            <ul class="hidden md:flex gap-6 text-sm md:text-base">
                <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
                <li><a href="{{ url('/about') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">About</a></li>
                <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
                <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
                <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
                <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
                <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
            </ul>

            <!-- Mobile Nav -->
            <ul x-show="navOpen" class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}" class="text-purple-300">About</a></li>
                <li><a href="{{ url('/education') }}">Education</a></li>
                <li><a href="{{ url('/skills') }}">Skills</a></li>
                <li><a href="{{ url('/projects') }}">Projects</a></li>
                <li><a href="{{ url('/certifications') }}">Certifications</a></li>
                <li><a href="{{ url('/test') }}">Honors & Awards</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>


        <!-- Floating Hamburger Button Below Navbar -->
        <div class="absolute top-[90px] left-6 z-50" x-data>
            <button @click="navOpen = !navOpen"
                class="text-purple-300 text-2xl focus:outline-none">
                <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
            </button>

            <!-- Dropdown Links -->
            <ul x-show="navOpen" x-transition
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


        <!-- About Section -->
        <section class="about-wrapper flex-grow">

            <!-- Left: Image -->
            <div class="profile-image animate__animated animate__fadeInLeft">
                <img src="{{ asset('images/aboutphoto.png') }}" alt="Adit Mugdha Das">
            </div>

            <!-- Right: Text -->
            <div class="about-text-content animate__animated animate__fadeInRight animate__delay-1s">
                <h1>About Me</h1>

                <p class="about-text">
                    Hi, I’m <strong>Adit Mugdha Das</strong>, a disciplined and passionate <span class="highlight">Computer Science and Engineering</span> undergrad at <strong>KUET</strong>. I’m deeply engaged with <span class="highlight">Machine Learning</span> and <span class="highlight">Deep Learning</span>, and love solving complex problems that can create impactful real-world solutions.
                </p>

                <p class="about-text">
                    My academic foundation (CGPA: 3.64) is backed by hands-on experiences in the field, such as my <span class="highlight">Data Analysis experience</span> at Summit Communications Ltd., where I developed the <strong>Internet Service Locator</strong> using Google Places API to automate the retrieval of nearby locations. Additionally, I contributed to the <strong>GeoCleanser</strong> GIS tool by enhancing its data validation features, improving the accuracy of geographic data processing. I’ve also worked as a QNA teacher at UDVASH, sharpening my analytical and communication skills.
                </p>

                <p class="about-text">
                    I’ve been recognized for my achievements, including the <span class="highlight">Best Project Award</span> at KUET for my project "Mindmap," and I was also honored as the <span class="highlight">Best Talent of the Year</span> in Math & CS during my school years.
                </p>

                <p class="about-text">
                    Beyond academics, I’m passionate about sports (cricket, chess, football), traveling, and always striving to grow personally and professionally. My long-term goal is to pursue a <span class="highlight">Ph.D. in Machine Learning</span> and contribute to the cutting-edge research in this space.
                </p>

                <p class="about-text">
                    If you’re interested in collaborating or discussing exciting ideas in AI, feel free to <a href="/contact" class="cta-link">contact me</a>!
                </p>
            </div>
        </section>
    </div>

    <!-- Vanta.js Initialization -->
    <script>
        let vantaEffect = VANTA.NET({
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

        window.addEventListener('resize', () => {
            if (vantaEffect) {
                vantaEffect.resize();
            }
        });

        window.addEventListener('load', () => {
            setTimeout(() => {
                if (vantaEffect) {
                    vantaEffect.resize();
                }
            }, 300);
        });
    </script>
</body>
</html>
