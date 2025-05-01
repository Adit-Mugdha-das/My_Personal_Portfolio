<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Certifications - Mugdha</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!--<link rel="stylesheet" href="{{ secure_asset('build/assets/app-Ct2FSlyM.css') }}">-->
  <!--<script src="{{ secure_asset('build/assets/app-eMHK6VFw.js') }}" defer></script>-->

  <!-- Vanta.js & Three.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

  <!-- Animate.css & AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- Alpine.js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style>
    html, body {
      height: 100%;
      background-color: #0b1120; /* fallback color to match Vanta */
    }

    .neon-glow {
      text-shadow:
        0 0 5px #c084fc,
        0 0 10px #c084fc,
        0 0 20px #c084fc,
        0 0 40px #a855f7,
        0 0 80px #9333ea;
    }

    .hover-border-purple {
      border: 5px solid transparent;
      transition: border-color 0.3s ease;
    }

    .hover-border-purple:hover {
      border-color: #7e22ce;
    }
  </style>
</head>

<body class="text-white overflow-x-hidden min-h-screen overflow-y-auto">
<div id="vanta-bg" class="min-h-screen flex flex-col" x-data="{ modalOpen: false, modalImage: '', navOpen: false }">



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
      <li><a href="{{ url('/certifications') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Certifications</a></li>
      <li><a href="{{ url('/test') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 transition duration-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc]">Contact</a></li>
    </ul>
    <!-- Mobile Nav -->
    <ul x-show="navOpen" class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/education') }}">Education</a></li>
      <li><a href="{{ url('/skills') }}">Skills</a></li>
      <li><a href="{{ url('/projects') }}">Projects</a></li>
      <li><a href="{{ url('/certifications') }}" class="text-purple-300">Certifications</a></li>
      <li><a href="{{ url('/test') }}">Honors & Awards</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>


  <!-- Floating Hamburger Button -->
    <div class="absolute top-[90px] left-6 z-50">
      <button @click="navOpen = !navOpen"
              class="text-purple-300 text-2xl focus:outline-none">
        <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
      </button>

      <!-- Dropdown Links -->
      <ul x-show="navOpen" x-transition @click.away="navOpen = false"

      class="mt-4 bg-black/90 backdrop-blur-md rounded-2xl px-8 py-6 space-y-4 shadow-2xl text-xl w-96">
        <li><a @click="navOpen = false" href="{{ url('/about') }}" class="block hover:text-purple-300">About</a></li>
        <li><a @click="navOpen = false" href="{{ url('/education') }}" class="block hover:text-purple-300">Education</a></li>
        <li><a @click="navOpen = false" href="{{ url('/skills') }}" class="block hover:text-purple-300">Skills</a></li>
        <li><a @click="navOpen = false" href="{{ url('/projects') }}" class="block hover:text-purple-300">Projects</a></li>
        <li><a @click="navOpen = false" href="{{ url('/certifications') }}" class="block hover:text-purple-300">Certifications</a></li>
        <li><a @click="navOpen = false" href="{{ url('/test') }}" class="block hover:text-purple-300">Honors & Awards</a></li>
        <li><a @click="navOpen = false" href="{{ url('/contact') }}" class="block hover:text-purple-300">Contact</a></li>
      </>
    </div>


  <!-- Certifications Section -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Licenses & Certifications</h1>

    <div class="grid gap-8 max-w-6xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
      @php
        $certs = [

          [
  'title' => 'Deep Learning Specialization',
  'issuer' => 'DeepLearning.AI (via Coursera)',
  'date' => 'Apr 2025',
  'id' => 'Verified on Credly',
  'skills' => 'Recurrent Neural Networks (RNNs), GRUs and LSTMs, Natural Language Processing (NLP), Transformer Models, HuggingFace Tokenizers',
  'image' => 'certificates/deep_learning_specialization.png', // Save the image you uploaded here
  'link' => 'https://www.credly.com/badges/33ce90ae-4119-4015-be6f-5e6f8fc6501f/public_url'
],


          [
  'title' => 'Convolutional Neural Networks',
  'issuer' => 'DeepLearning.AI',
  'date' => 'Apr 2025',
  'id' => 'CH5BBBYGZJXZ',
  'skills' => 'Convolution, Pooling, Feature Extraction, YOLO, ResNet, MobileNet, Object Detection',
  'image' => 'certificates/convolutional_neural_networks.png',  // make sure this image exists in public/certificates
  'link' => 'https://coursera.org/verify/CH5BBBYGZJXZ'
],

          [
  'title' => 'Structuring Machine Learning Projects',
  'issuer' => 'DeepLearning.AI',
  'date' => 'Apr 2025',
  'id' => 'HRQIYLEA94R1',
  'skills' => 'Designing ML Pipelines for Practical Deployment ,  Diagnosing ML Model Errors, Transfer Learning Strategy, Multi-Task Learning Strategy ',
  'image' => 'certificates/structuring_ml_projects.png',
  'link' => 'https://coursera.org/verify/HRQIYLEA94R1'
],


          [
  'title' => 'Improving Deep Neural Networks: Hyperparameter Tuning, Regularization and Optimization',
  'issuer' => 'DeepLearning.AI',
  'date' => 'Apr 2025',
  'id' => 'TEKNANEX2SGI',
  'skills' => 'Hyperparameter Tuning, Regularization, Optimization, Deep Learning',
  'image' => 'certificates/improving_hyperparameter.png',
  'link' => 'https://coursera.org/verify/TEKNANEX2SGI'
],

          [
            'title' => 'Advanced Learning Algorithms',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'T133QK2542ZJ',
            'skills' => 'TensorFlow , Keras, NLP, Hyperparameter Tuning, +6 skills',
            'image' => 'certificates/advanced_learning_algorithms.png',
            'link' => 'https://coursera.org/verify/T133QK2542ZJ'
          ],
          [
            'title' => 'Neural Networks and Deep Learning',
            'issuer' => 'DeepLearning.AI',
            'date' => 'Mar 2025',
            'id' => '27BS1R4411JV',
            'skills' => 'Deep Learning, Neural Networks, +2 skills',
            'image' => 'certificates/neural_networks.png',
            'link' => 'https://coursera.org/verify/27BS1R4411JV'
          ],
          [
            'title' => 'Supervised Machine Learning: Regression and Classification',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'OWOEBASEFPWQ',
            'skills' => 'TensorFlow, Scikit-Learn, Classification, Regression',
            'image' => 'certificates/supervised_ml.png',
            'link' => 'https://coursera.org/verify/OWOEBASEFPWQ'
          ],
          [
            'title' => 'Unsupervised Learning, Recommenders, Reinforcement Learning',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'GSCWZZHE2WQY',
            'skills' => 'Unsupervised Learning, RL, Recommender Systems',
            'image' => 'certificates/unsupervised_rl.png',
            'link' => 'https://coursera.org/verify/GSCWZZHE2WQY'
          ]
        ];
      @endphp

      @foreach ($certs as $index => $cert)
        <div 
          class="bg-black/60 border border-fuchsia-400/20 rounded-xl p-6 shadow-lg 
                 transition-transform duration-2000 ease-in-out transform 
                 hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]"
          data-aos="fade-up"
          data-aos-delay="{{ $index * 200 }}"
          data-aos-duration="500"
          data-aos-once="true"
        >
          <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }}"
               class="rounded-lg mb-4 w-full cursor-zoom-in hover-border-purple"
               @click="modalImage = '{{ asset($cert['image']) }}'; modalOpen = true">

          <h2 class="text-2xl font-semibold text-fuchsia-300 mb-2">{{ $cert['title'] }}</h2>
          <p class="text-base text-purple-200 font-semibold">{{ $cert['issuer'] }}</p>
          <p class="text-base text-gray-300">Issued {{ $cert['date'] }}</p>
          <p class="text-base text-gray-400">Credential ID: {{ $cert['id'] }}</p>
          <p class="mt-2 text-base text-gray-200">Skills: {{ $cert['skills'] }}</p>

          <div class="mt-5 space-x-6 text-base font-medium">
            <a href="{{ $cert['link'] }}" target="_blank"
               class="text-fuchsia-300 underline transition-transform duration-300 transform hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc]">
              Show Credential
            </a>
            <a href="{{ asset($cert['image']) }}" download
               class="text-fuchsia-400 underline transition-transform duration-300 transform hover:scale-105 hover:drop-shadow-[0_0_8px_#c084fc]">
              Download
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Modal -->
  <div x-show="modalOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center">
    <div class="absolute inset-0 bg-black/80" @click="modalOpen = false"></div>
    <img :src="modalImage" class="relative max-w-full max-h-[90vh] rounded-lg shadow-lg border-4 border-fuchsia-400 z-10">
  </div>
</div>

<!-- Vanta Background -->
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

<!-- AOS Scroll Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
