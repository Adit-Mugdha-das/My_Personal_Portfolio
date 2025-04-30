<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Projects - Mugdha</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

 <!-- <link rel="stylesheet" href="{{ secure_asset('build/assets/app-Ct2FSlyM.css') }}">
<script src="{{ secure_asset('build/assets/app-eMHK6VFw.js') }}" defer></script>-->

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- Vanta.js and Three.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
  <style>
    .neon-glow {
      text-shadow:
        0 0 5px #c084fc,
        0 0 10px #c084fc,
        0 0 20px #c084fc,
        0 0 40px #a855f7,
        0 0 80px #9333ea;
    }
  </style>
</head>
<body class="text-white overflow-x-hidden">
<div id="vanta-bg" class="min-h-screen relative" x-data="{ modalOpen: false, modalImage: '', navOpen: false }">

  <!-- Navbar -->
  <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl">
    <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
    <button @click="navOpen = !navOpen" class="md:hidden text-purple-300 text-2xl focus:outline-none">
      <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
    </button>
    <!-- Desktop Nav Links -->
    <ul class="hidden md:flex gap-6 text-sm md:text-base">
      <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
      <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
      <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
      <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
      <li><a href="{{ url('/projects') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Projects</a></li>
      <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
      <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
    </ul>
    <!-- Mobile Nav -->
    <ul x-show="navOpen" class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/education') }}">Education</a></li>
      <li><a href="{{ url('/skills') }}">Skills</a></li>
      <li><a href="{{ url('/projects') }}" class="text-purple-300">Projects</a></li>
      <li><a href="{{ url('/certifications') }}">Certifications</a></li>
      <li><a href="{{ url('/test') }}">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>


  <!-- Section -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">My Projects</h1>

    <div class="text-center mb-10">
  <a href="{{ url('/coursework-projects') }}">
    <button class="relative inline-flex items-center px-6 py-2 text-sm font-semibold text-purple-300 rounded-full border border-purple-400/30 bg-black/40 hover:bg-purple-800 shadow-lg transition-all duration-300 hover:scale-105 hover:drop-shadow-[0_0_12px_#a855f7]">
      <span class="absolute inset-0 rounded-full bg-purple-700 blur-sm opacity-30 animate-pulse z-[-1]"></span>
      📚 View Coursework Projects
    </button>
  </a>
</div>



    <div class="grid gap-10 max-w-7xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-3">
      <!-- MindMap Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="images/mindmap_project.png" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="MindMap Screenshot" @click="modalImage = 'images/mindmap_project.png'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">MindMap</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">The Mind Map Application is an interactive desktop tool designed to help users organize thoughts visually, brainstorm ideas, and manage projects effectively.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white"> <span class="text-gray-200">Duration: July–Dec 2024</span></p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">JavaFX</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">MySQL</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">CSS</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Desktop</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
      
          <a href="https://github.com/Adit-Mugdha-das/Mind_Map_Application" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Mind_Map_Application/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/mindmap_project.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🏆 Best Project Award In KUET</p>
      </div>

      <!-- Numerical Methods Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="images/numerical_project.png" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Numerical Project Screenshot" @click="modalImage = 'images/numerical_project.png'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Numerical Methods Solver</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">A Python-based GUI tool that allows users to solve equations using various numerical methods like Bisection, Newton-Raphson, Runge-Kutta, etc., interactively.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white"> <span class="text-gray-200">Duration: Mar-Apr 2025</span></p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Tkinter</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          
          <a href="https://github.com/Adit-Mugdha-das/Numerical-Methods-Solver" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Numerical-Methods-Solver/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/numerical_project.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🧮 Includes 10+ interactive numerical methods</p>

      </div>

      <!-- GeoCleanser Project Card -->
<div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
  <img src="images/geocleanser_project.png" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="GeoCleanser Screenshot" @click="modalImage = 'images/geocleanser_project.png'; modalOpen = true">
  <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">GeoCleanser</h2>
  <p class="text-[1.15rem] text-gray-300 mb-4">GeoCleanser is a Python-based tool to clean, convert, validate, and migrate geographic coordinates from messy datasets, with Excel output and support for multiple column pairs simultaneously.</p>
  <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white"> <span class="text-gray-200">Duration: Feb-Mar 2025</span></p>

  <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Pandas</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Openpyxl</span>
  </div>

  <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
    <a href="https://github.com/Adit-Mugdha-das/GeoCleanser" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
    <a href="https://github.com/Adit-Mugdha-das/GeoCleanser/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
    <a href="{{ asset('downloads/geocleanser_project.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
  </div>

  <p class="text-purple-400 font-semibold text-lg mt-3">🌍 Handles multi-column geodata cleaning with migration & Excel export</p>
</div>

<!-- Service Locator Project Card -->
<div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
  <img src="images/service_locator_project.png" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Service Locator Screenshot" @click="modalImage = 'images/service_locator_project.png'; modalOpen = true">
  <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Service Locator</h2>
  <p class="text-[1.15rem] text-gray-300 mb-4">A Python tool that uses Google Places API to fetch nearby locations like schools, hospitals, restaurants based on coordinates, radius, and type, with Excel and interactive map output.</p>
  <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white"><span class="text-gray-200">Duration: Jan-Feb 2025</span></p>

  <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Google Places API</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Pandas</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Folium</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Openpyxl</span>
  </div>

  <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
    
    <a href="https://github.com/Adit-Mugdha-das/Service-Locator" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
    <a href="https://github.com/Adit-Mugdha-das/Service-Locator/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
    <a href="{{ asset('downloads/service_locator_project.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
  </div>

  <p class="text-purple-400 font-semibold text-lg mt-3">📍 Fetches real-time places data & visualizes results on an interactive map</p>
</div>

<!-- 22-Bit CPU Design Project Card -->
<div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
  <img src="images/cpu_logisim_project.png" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="22-bit CPU Screenshot" @click="modalImage = 'images/cpu_logisim_project.png'; modalOpen = true">
  <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">22-Bit CPU Design (Logisim)</h2>
  <p class="text-[1.15rem] text-gray-300 mb-4">A fully functional 22-bit CPU architecture designed in Logisim with custom ALU, control unit, ROM/RAM memory, and an instruction set supporting arithmetic and bitwise operations.</p>
  <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white"> <span class="text-gray-300">Duration: Jan-Apr 2024</span></p>

  <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Logisim</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">CPU Design</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">ALU</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">RAM</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">ROM</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Memory</span>
  </div>

  <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
    
    <a href="https://github.com/Adit-Mugdha-das/22-Bit-CPU-Design-Logisim" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
    <a href="https://github.com/Adit-Mugdha-das/22-Bit-CPU-Design-Logisim/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
    <a href="{{ asset('downloads/22bit_cpu_project.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
  </div>

  <p class="text-purple-400 font-semibold text-lg mt-3">🧠 Simulates a custom 22-bit CPU with ALU, Control Unit, ROM/RAM</p>
</div>

<!-- Digital Clock Project Card -->
<div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
  <img src="images/digital_clock_project.png" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Digital Clock Screenshot" @click="modalImage = 'images/digital_clock_project.png'; modalOpen = true">
  <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Digital Clock (Logisim)</h2>
  <p class="text-[1.15rem] text-gray-300 mb-4">A real-time HH:MM digital clock built in Logisim using counters, decoders, logic gates, and seven-segment displays. Features reset capability and supports both 12-hour and 24-hour formats.</p>
  <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white"> <span class="text-gray-200">Duration: July–Nov 2023</span></p>

  <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Logisim</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Clock Generator</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Counters</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">7-Segment</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Logic Gates</span>
  </div>

  <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
  
    <a href="https://github.com/Adit-Mugdha-das/Digital-Clock" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
    <a href="https://github.com/Adit-Mugdha-das/Digital-Clock/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
    <a href="{{ asset('downloads/digital_clock_project.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
  </div>

  <p class="text-purple-400 font-semibold text-lg mt-3">🕒 Real-time clock simulation using logic circuits and 7-segment display</p>
</div>


    </div>
  </section>

   <!-- Modal -->
   <div x-show="modalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
    <div class="absolute inset-0 bg-black/80" @click="modalOpen = false"></div>
    <img :src="modalImage" class="relative max-w-full max-h-[90vh] rounded-lg shadow-lg border-4 border-purple-400 z-10">
  </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<script>
  VANTA.NET({
    el: "#vanta-bg",
    mouseControls: true,
    touchControls: true,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.0,
    scaleMobile: 1.0,
    color: 0xa855f7,
    backgroundColor: 0x0b1120
  });
</script>
</body>
</html>