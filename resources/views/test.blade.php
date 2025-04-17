<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Honors & Awards - Mugdha</title>
  <!--@vite('resources/css/app.css')-->
  @vite(['resources/css/app.css', 'resources/js/app.js'])


<!--<link rel="stylesheet" href="{{ secure_asset('build/assets/app-Ct2FSlyM.css') }}">
<script src="{{ secure_asset('build/assets/app-eMHK6VFw.js') }}" defer></script>-->



  <!-- Three.js and Vanta.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

  <!-- AOS and Animate.css -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- Alpine.js -->
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

    .hover-border-purple {
      border: 2px solid transparent;
      transition: border-color 0.3s ease;
    }

    .hover-border-purple:hover {
      border-color: #c084fc;
    }
  </style>
</head>
<body class="text-white overflow-x-hidden">
<div id="vanta-bg" class="min-h-screen" x-data="{ modalOpen: false, modalImage: '', navOpen: false }">

  <!-- Navbar -->
  <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl">
    <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
    <button @click="navOpen = !navOpen" class="md:hidden text-purple-300 text-2xl focus:outline-none">
      <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
    </button>
    <ul class="hidden md:flex gap-6 text-sm md:text-base">
      <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Home</a></li>
      <li><a href="{{ url('/about') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">About</a></li>
      <li><a href="{{ url('/education') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Education</a></li>
      <li><a href="{{ url('/skills') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Skills</a></li>
      <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Projects</a></li>
      <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Certifications</a></li>
      <li><a href="{{ url('/test') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
    </ul>
    <!-- Mobile Nav -->
    <ul x-show="navOpen" class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/education') }}">Education</a></li>
      <li><a href="{{ url('/skills') }}">Skills</a></li>
      <li><a href="{{ url('/projects') }}">Projects</a></li>
      <li><a href="{{ url('/certifications') }}">Certifications</a></li>
      <li><a href="{{ url('/test') }}" class="text-purple-300">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>

  <!-- Section Title -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Honors & Awards</h1>

    <div class="grid gap-8 max-w-6xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(360px,1fr))] text-lg">
      <!-- Best Project -->
      <div class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg">
        <h2 class="text-2xl font-bold text-fuchsia-300 mb-2">Best Project Award</h2>
        <p class="text-base text-purple-200 font-semibold mb-2">KUET – Dec 2024</p>
        <p class="text-base text-gray-300 leading-relaxed">
          Awarded for the desktop project "Mind Map" in the Advanced Programming Course. <br><br>
          Supervised and nominated by <span class="text-purple-300 font-semibold">Sir</span>
          <span class="font-semibold text-fuchsia-400">Kazi Saeed Alam</span> and
          <span class="text-purple-300 font-semibold">Sir</span>
          <span class="font-semibold text-fuchsia-400">Argha Chandra Dhar</span>.
        </p>
        <div class="mt-4 space-x-6 text-base font-medium">
          <a href="{{ asset('images/best_project.jpeg') }}" target="_blank" class="text-fuchsia-300 underline">View</a>
          <a href="{{ asset('images/best_project.jpeg') }}" download class="text-fuchsia-400 underline">Download</a>
        </div>
      </div>

      <!-- District Level -->
      <div class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg" x-data>
        <h2 class="text-2xl font-bold text-fuchsia-300 mb-2">Best Talent – District Level</h2>
        <p class="text-base text-purple-200 font-semibold mb-2">Sylhet District Edu. Office – Mar 2018</p>
        <p class="text-base text-gray-300 leading-relaxed">
          Awarded in Math & CS at District Level (Grades 9–10) in Sustainable Talent Search 2018. <br><br>
          Issued by <span class="text-purple-300 font-semibold">Mr.</span>
          <span class="font-semibold text-fuchsia-400">Gaziur Rahman Khan</span> and
          <span class="text-purple-300 font-semibold">Mr.</span>
          <span class="font-semibold text-fuchsia-400">Md. Amirul Islam</span>.
        </p>
        <button @click="showTranslationDistrict = !showTranslationDistrict"
                class="text-xs mt-2 text-purple-300 underline focus:outline-none">
          <template x-if="!showTranslationDistrict">View English Translation</template>
          <template x-if="showTranslationDistrict">Hide English Translation</template>
        </button>
        <div x-show="showTranslationDistrict" x-transition
             class="mt-2 text-sm text-gray-400 italic leading-relaxed">
          <p><b>Sustainable Talent Search Competition – 2018</b><br>Certificate of Achievement</p>
          <p>This is to certify that <b>Adit Mugdha Das</b>, a student of grade 10 from <b>Shahjalal N.G.F.F School, Sylhet</b>, has been awarded the title of <i>"Best Talent of the Year"</i> in the <b>Mathematics and Computer Division</b> at the <b>District Level</b> (Grade 9–10).</p>
          <p><b>Issued by:</b><br>Gaziur Rahman Khan, Member Secretary<br>Md. Amirul Islam, Organizer</p>
        </div>
        <div class="mt-4 space-x-6 text-base font-medium">
          <a href="{{ asset('images/district_level.jpeg') }}" target="_blank" class="text-fuchsia-300 underline">View</a>
          <a href="{{ asset('images/district_level.jpeg') }}" download class="text-fuchsia-400 underline">Download</a>
        </div>
      </div>

      <!-- Upazila Level -->
      <div class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg" x-data>
        <h2 class="text-2xl font-bold text-fuchsia-300 mb-2">Best Talent – Upazila Level</h2>
        <p class="text-base text-purple-200 font-semibold mb-2">Upazila Secondary Edu. Office – Feb 2018</p>
        <p class="text-base text-gray-300 leading-relaxed">
          Recognized for excellence in Math & CS at Upazila Level in 2018 talent search competition. <br><br>
          Issued by <span class="text-purple-300 font-semibold">Upazila Secondary Education Officer</span> and
          <span class="text-purple-300 font-semibold">UNO</span>, Fenchuganj, Sylhet.
        </p>
        <button @click="showTranslationUpazila = !showTranslationUpazila"
                class="text-xs mt-2 text-purple-300 underline focus:outline-none">
          <template x-if="!showTranslationUpazila">View English Translation</template>
          <template x-if="showTranslationUpazila">Hide English Translation</template>
        </button>
        <div x-show="showTranslationUpazila" x-transition
             class="mt-2 text-sm text-gray-400 italic leading-relaxed">
          <p><b>Sustainable Talent Search Competition – 2018</b><br>Certificate of Achievement</p>
          <p>This is to certify that <b>Adit Mugdha Das</b>, son of Mr. Sujit Kumar Das and Mrs. Mukti Rani Das, from class 10 of <b>Shahjalal N.G.F.F School, Fenchuganj, Sylhet</b>, has been awarded the title of <i>"Best Talent of the Year"</i> in the <b>Mathematics and Computer Division</b> at the <b>Upazila Level</b> (Grade 9–10).</p>
          <p><b>Issued by:</b><br>Upazila Secondary Education Officer<br>Upazila Nirbahi Officer (UNO)</p>
        </div>
        <div class="mt-4 space-x-6 text-base font-medium">
          <a href="{{ asset('images/upazila_level.jpeg') }}" target="_blank" class="text-fuchsia-300 underline">View</a>
          <a href="{{ asset('images/upazila_level.jpeg') }}" download class="text-fuchsia-400 underline">Download</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal for Image Zoom -->
  <div x-show="modalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
    <div class="absolute inset-0 bg-black/80" @click="modalOpen = false"></div>
    <img :src="modalImage" class="relative max-w-full max-h-[90vh] rounded-lg shadow-lg border-4 border-fuchsia-400 z-10">
  </div>
</div>

<!-- Vanta Background Init -->
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
</body>
</html>