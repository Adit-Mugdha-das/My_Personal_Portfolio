<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Honors & Awards - Mugdha</title>
  <!--@vite('resources/css/app.css')-->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />



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
  <script>
  function swipeComponent() {
    return {
      navOpen: false,
      imageModalOpen: false,
      translationModalOpen: false,
      modalImage: '',
      modalContent: '',
      openImageModal(image) {
        this.modalImage = image;
        this.imageModalOpen = true;
      },
      openTranslationModal(image, contentId) {
        this.modalImage = image;
        this.modalContent = contentId;
        this.translationModalOpen = true;
      },
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
            window.location.href = "{{ url('/contact') }}"; // swipe left → Contact
          } else {
            window.location.href = "{{ url('/certifications') }}"; // swipe right → Certifications
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

    .hover-border-purple {
      border: 2px solid transparent;
      transition: border-color 0.3s ease;
    }

    .hover-border-purple:hover {
      border-color: #c084fc;
    }

    [x-cloak] { display: none !important; }
  </style>
</head>
<body class="text-white overflow-x-hidden flex flex-col min-h-screen">
  <div id="vanta-bg" class="flex-grow flex flex-col" x-data="swipeComponent()" x-init="initSwipe()">




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
      <li><a href="{{ url('/test') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
    </ul>
    <!-- Mobile Nav -->
    <ul x-show="navOpen" x-cloak class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
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


  <!-- Floating Hamburger Button -->
<div class="absolute top-[90px] left-6 z-50">
  <button @click="navOpen = !navOpen" class="text-purple-400 text-2xl focus:outline-none">
    <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
  </button>

  <ul x-show="navOpen" x-cloak x-transition @click.away="navOpen = false"
      class="mt-4 bg-black/90 backdrop-blur-md rounded-2xl px-8 py-6 space-y-4 shadow-2xl text-xl w-96">

      <li><a @click="navOpen = false" href="{{ url('/portfolio') }}" class="block hover:text-purple-400">Home</a></li>
    <li><a @click="navOpen = false" href="{{ url('/about') }}" class="block hover:text-purple-400">About</a></li>
    <li><a @click="navOpen = false" href="{{ url('/education') }}" class="block hover:text-purple-400">Education</a></li>
    <li><a @click="navOpen = false" href="{{ url('/skills') }}" class="block hover:text-purple-400">Skills</a></li>
    <li><a @click="navOpen = false" href="{{ url('/projects') }}" class="block hover:text-purple-400">Projects</a></li>
    <li><a @click="navOpen = false" href="{{ url('/certifications') }}" class="block hover:text-purple-400">Certifications</a></li>
    <li><a @click="navOpen = false" href="{{ url('/test') }}" class="block text-purple-400">Honors & Awards</a></li>
    <li><a @click="navOpen = false" href="{{ url('/contact') }}" class="block hover:text-purple-400">Contact</a></li>
  </ul>
</div>


<!-- Section Title -->
<section class="text-center py-16 px-4 animate__animated animate__fadeIn">

  <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Honors & Awards</h1>

  <div class="grid gap-8 max-w-6xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(360px,1fr))] text-lg">
    @php
      $honors = [
        [
          'title' => 'Best Project Award',
          'issuer' => 'KUET – Dec 2024',
          'desc' => 'Awarded for the desktop project "Mind Map" in the Advanced Programming Course. <br><br>Supervised and nominated by <span class="text-purple-300 font-semibold">Sir</span> <span class="font-semibold text-fuchsia-400">Kazi Saeed Alam</span> and <span class="text-purple-300 font-semibold">Sir</span> <span class="font-semibold text-fuchsia-400">Argha Chandra Dhar</span>.',
          'image' => 'images/best_project.jpeg'
        ],
        [
          'title' => 'Best Talent – District Level',
          'issuer' => 'Sylhet District Edu. Office – Mar 2018',
          'desc' => 'Awarded in Math & CS at District Level (Grades 9–10) in Sustainable Talent Search 2018. <br><br>Issued by <span class="text-purple-300 font-semibold">Mr.</span> <span class="font-semibold text-fuchsia-400">Gaziur Rahman Khan</span> and <span class="text-purple-300 font-semibold">Mr.</span> <span class="font-semibold text-fuchsia-400">Md. Amirul Islam</span>.',
          'image' => 'images/district_level.jpeg'
        ],
        [
          'title' => 'Best Talent – Upazila Level',
          'issuer' => 'Upazila Secondary Edu. Office – Feb 2018',
          'desc' => 'Recognized for excellence in Math & CS at Upazila Level in 2018 talent search competition. <br><br>Issued by <span class="text-purple-300 font-semibold">Upazila Secondary Education Officer</span> and <span class="text-purple-300 font-semibold">UNO</span>, Fenchuganj, Sylhet.',
          'image' => 'images/upazila_level.jpeg'
        ]
      ];
    @endphp

    @foreach ($honors as $index => $honor)
      <div
        class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg transition-transform duration-1000 ease-in-out transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]"
        data-aos="{{ $index === 0 ? 'fade-left' : ($index === 1 ? 'fade-up' : 'fade-right') }}"
        data-aos-delay="{{ $index * 300 }}"
        data-aos-duration="800"
        data-aos-once="true"
      >
      <img src="{{ asset($honor['image']) }}" alt="{{ $honor['title'] }}"
  class="rounded-lg mb-4 w-full cursor-zoom-in transition duration-300 hover:shadow-[0_0_25px_#c084fc] hover-border-purple"
  @click="openImageModal('{{ asset($honor['image']) }}')">

        <h2 class="text-2xl font-bold text-fuchsia-300 mb-2">{{ $honor['title'] }}</h2>
        <p class="text-base text-purple-200 font-semibold mb-2">{{ $honor['issuer'] }}</p>
        <p class="text-base text-gray-300 leading-relaxed">{!! $honor['desc'] !!}</p>

        <div class="mt-4 space-x-6 text-base font-medium">
          <a href="{{ asset($honor['image']) }}" target="_blank" class="text-fuchsia-300 underline hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc] transition-transform">View</a>
          <a href="{{ asset($honor['image']) }}" download class="text-fuchsia-400 underline hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc] transition-transform">Download</a>

          @if ($index === 1 || $index === 2)
          <button @click="openTranslationModal('{{ asset($honor['image']) }}', 'translation{{ $index }}')"
  class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc] transition-transform focus:outline-none">
  Translation
</button>

          @endif
        </div>

        <!-- Hidden Translation Content -->
        <div style="display:none" id="translation{{ $index }}">
        @if ($index === 1)
            <!-- Translation for District Level -->
            <div class="text-sm space-y-2 text-gray-200 p-4 leading-relaxed">
              <p class="font-bold text-fuchsia-300 text-base">Sustainable Talent Search Competition – 2018</p>
              <p><strong>Certificate of Achievement</strong></p>
              <p>This is to certify that Adit Mugdha Das, a student of grade 10 from Shahjalal N.G.F.F School, Sylhet, has been awarded the title of "Best Talent of the Year" in the Mathematics and Computer Division at the District Level (Grade 9–10) in the Sustainable Talent Search Competition – 2018.</p>

              <p class="mt-4"><strong>Issued by:</strong></p>
              <ul class="list-disc list-inside ml-4">
                <li><strong>Gaziur Rahman Khan</strong><br>
                  Member Secretary,<br>
                  District Level Match-Monitoring Committee,<br>
                  Sustainable Talent Search Competition – 2018,<br>
                  Sylhet District Education Office</li>
                <li class="mt-2"><strong>Md. Amirul Islam</strong><br>
                  Organizer,<br>
                  District Level Match-Monitoring Committee,<br>
                  Sustainable Talent Search Competition – 2018,<br>
                  District Commissioner, Sylhet</li>
              </ul>
            </div>

          @elseif ($index === 2)
            <!-- Translation for Upazila Level -->
            <div class="text-sm space-y-2 text-gray-200 p-4 leading-relaxed">
              <p class="font-bold text-fuchsia-300 text-base">Sustainable Talent Search Competition – 2018</p>
              <p><strong>Certificate of Achievement</strong></p>
              <p>This is to certify that Adit Mugdha Das, son of Mr. Sujit Kumar Das and Mrs. Mukti Rani Das, from class 10 of Shahjalal N.G.F.F School, Fenchuganj, Sylhet, has been awarded the title of “Best Talent of the Year” in the Mathematics and Computer Division at the Upazila Level (Grade 9–10).</p>
              <p><strong>Issued by:</strong><br>Upazila Secondary Education Officer<br>Member Secretary</p>
              <p><strong>Organized by:</strong><br>Upazila Nirbahi Officer (UNO), Fenchuganj, Sylhet</p>
            </div>
          @endif

        </div>

      </div>
    @endforeach
  </div>
</section>

<!-- Coding Milestones Section -->
<section class="text-center py-16 px-4 animate__animated animate__fadeIn">
  <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Coding Milestones</h2>

  <div class="grid gap-8 max-w-5xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-3 text-lg">
    @php
      $milestones = [

        [
  'year' => '2025',
  'image' => 'images/leetcode_top150_badge.png',
  'title' => 'Top Interview 150 Badge',
  'desc' => 'Completed LeetCode’s curated Top Interview 150 problems set after 3 months of consistent effort. Strengthened problem-solving and interview prep skills.',
  'url' => 'https://leetcode.com/u/Mugdha_118/'
],

[
  'year' => '2025',
  'image' => 'images/leetcode_75.png',
  'title' => 'LeetCode 75 Badge',
  'desc' => 'Completed the official LeetCode 75 Study Plan, covering top foundational problems. Built strong algorithmic and DSA fundamentals.',
  'url' => 'https://leetcode.com/u/Mugdha_118/'
],



        [
          'year' => '2025',
          'image' => 'images/leetcode_100days.png',
          'title' => 'LeetCode 100 Days Badge',
          'desc' => 'Earned for solving coding problems consistently for 100+ days in 2025.',
          'url' => 'https://leetcode.com/u/Mugdha_118/'
        ],
        [
  'year' => '2025',
  'image' => 'images/leetcode_50days_2025.png',
  'title' => 'LeetCode 50 Days Badge – 2025',
  'desc' => 'Solved problems consistently for 50+ days on LeetCode in 2025 and earned this milestone badge.',
  'url' => 'https://leetcode.com/u/Mugdha_118/'
],


        [
          'year' => '2024',
          'image' => 'images/leetcode_100days_2024.png',
          'title' => 'LeetCode 100 Days Badge',
          'desc' => 'Awarded to the top 4.2% of LeetCoders for solving problems 100+ days in 2024.',
          'url' => 'https://leetcode.com/u/Mugdha_118/'
        ],
        [
          'year' => '2024',
          'image' => 'images/leetcode_50days_2024.png',
          'title' => 'LeetCode 50 Days Badge',
          'desc' => 'Awarded to the top 6.9% of LeetCoders for solving problems 50+ days in 2024.',
          'url' => 'https://leetcode.com/u/Mugdha_118/'
        ]
      ];
    @endphp

    @foreach ($milestones as $index => $badge)
    <div
      class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg transition-transform duration-1000 ease-in-out transform hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]"
      data-aos="{{ $index === 0 ? 'fade-left' : ($index === 1 ? 'fade-up' : 'fade-right') }}"
      data-aos-delay="{{ $index * 300 }}"
      data-aos-duration="800"
      data-aos-once="true"
    >
      <img src="{{ asset($badge['image']) }}"
           alt="{{ $badge['title'] }}"
           class="rounded-lg mb-4 w-full cursor-zoom-in transition duration-300 hover:shadow-[0_0_25px_#c084fc] hover-border-purple"
           @click="openImageModal('{{ asset($badge['image']) }}')">

      <h3 class="text-2xl font-bold text-fuchsia-300 mb-2 text-center">{{ $badge['title'] }}</h3>
      <p class="text-base text-purple-200 font-semibold mb-2 text-center">{{ $badge['year'] }}</p>
      <p class="text-sm text-gray-300 text-center">
        {{ $badge['desc'] }}<br>
        <a href="{{ $badge['url'] }}" target="_blank" class="text-fuchsia-400 underline">View My Profile</a>
      </p>
    </div>
    @endforeach
  </div>
</section>






<!-- Modal: Simple image zoom modal -->
<div x-show="imageModalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
  <div class="absolute inset-0 bg-black/80" @click="imageModalOpen = false"></div>
  <img :src="modalImage" class="relative max-w-full max-h-[90vh] rounded-lg shadow-lg border-4 border-fuchsia-400 z-10">
</div>


<!-- Modal: Side-by-side translation modal -->
<div x-show="translationModalOpen && modalImage !== '' && modalContent !== ''" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
  <div class="absolute inset-0 bg-black/80" @click="translationModalOpen = false"></div>

  <div class="relative bg-black/90 border border-fuchsia-400 max-w-6xl w-[90%] max-h-[90vh] rounded-xl shadow-lg z-10 flex flex-col md:flex-row overflow-hidden">
    
    <!-- Left: Certificate Image -->
    <div class="w-full md:w-1/2 p-4 flex items-center justify-center bg-black/80">
      <img :src="modalImage" alt="Certificate" class="rounded-lg max-h-[70vh] border-2 border-fuchsia-400">
    </div>

    <!-- Right: Translation -->
    <div class="w-full md:w-1/2 p-6 overflow-y-auto bg-black/70 text-sm text-gray-200 leading-relaxed">
      <div x-html="document.getElementById(modalContent)?.innerHTML"></div>
    </div>
  </div>
</div>



<!-- Scripts -->
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


</body>
</html>
