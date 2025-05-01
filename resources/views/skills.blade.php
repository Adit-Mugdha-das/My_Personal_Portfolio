<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Skills - Mugdha</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-7O4j4aV9IhK0o1VXJk0zK0eqJdJ5k+cNQ7I7Yb4Gg29uFlXYvD0qgRhLoO5VL/fqvVlH8MPkX8YH1UR5syGHqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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

    html, body {
      margin: 0;
      padding: 0;
      background-color: #0b1120;
      height: 100%;
      overflow-x: hidden;
    }

    #vanta-bg {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    section {
      flex-grow: 1;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
  </style>
</head>
<body class="text-white overflow-x-hidden">

<div id="vanta-bg" x-data="{ navOpen: false }">

<!-- Navbar -->
<nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl">
  <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>


  <ul class="hidden md:flex gap-6 text-sm md:text-base">
    <li><a href="{{ url('/') }}" class="hover:text-purple-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc] transition duration-300">Home</a></li>
    <li><a href="{{ url('/about') }}" class="hover:text-purple-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc] transition duration-300">About</a></li>
    <li><a href="{{ url('/education') }}" class="hover:text-purple-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc] transition duration-300">Education</a></li>
    <li><a href="{{ url('/skills') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Skills</a></li>
    <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc] transition duration-300">Projects</a></li>
    <li><a href="{{ url('/certifications') }}" class="hover:text-purple-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc] transition duration-300">Certifications</a></li>
    <li><a href="{{ url('/test') }}" class="hover:text-purple-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc] transition duration-300">Honors & Awards</a></li>
    <li><a href="{{ url('/contact') }}" class="hover:text-purple-300 hover:scale-110 hover:drop-shadow-[0_0_8px_#c084fc] transition duration-300">Contact</a></li>
  </ul>

  <!-- Mobile Dropdown -->
  <ul x-show="navOpen" x-transition @click.away="navOpen = false"
      class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/education') }}">Education</a></li>
    <li><a href="{{ url('/skills') }}" class="text-purple-300">Skills</a></li>
    <li><a href="{{ url('/projects') }}">Projects</a></li>
    <li><a href="{{ url('/certifications') }}">Certifications</a></li>
    <li><a href="{{ url('/test') }}">Honors & Awards</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</nav>

      <!-- Floating Hamburger Button -->
<!-- ✅ Correct -->
<div class="absolute top-[90px] left-6 z-50">

  <button @click="navOpen = !navOpen" class="text-purple-300 text-2xl focus:outline-none">
    <i :class="navOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
  </button>

  <!-- Floating Dropdown -->
  <ul x-show="navOpen" x-transition @click.away="navOpen = false"
  class="mt-4 bg-black/90 backdrop-blur-md rounded-2xl px-8 py-6 space-y-4 shadow-2xl text-xl w-96">
    <li><a @click="navOpen = false" href="{{ url('/about') }}" class="block hover:text-purple-300">About</a></li>
    <li><a @click="navOpen = false" href="{{ url('/education') }}" class="block hover:text-purple-300">Education</a></li>
    <li><a @click="navOpen = false" href="{{ url('/skills') }}" class="block hover:text-purple-300 text-purple-300">Skills</a></li>
    <li><a @click="navOpen = false" href="{{ url('/projects') }}" class="block hover:text-purple-300">Projects</a></li>
    <li><a @click="navOpen = false" href="{{ url('/certifications') }}" class="block hover:text-purple-300">Certifications</a></li>
    <li><a @click="navOpen = false" href="{{ url('/test') }}" class="block hover:text-purple-300">Honors & Awards</a></li>
    <li><a @click="navOpen = false" href="{{ url('/contact') }}" class="block hover:text-purple-300">Contact</a></li>
  </ul>
</div>



  <!-- Skills Section -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-3xl sm:text-4xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">My Skills</h1>

    <div class="flex flex-wrap justify-center gap-6 max-w-7xl mx-auto text-left">

      <!-- Left Column (6 Cards) -->
      <div class="flex flex-wrap gap-6 w-full lg:w-[68%] animate__animated animate__fadeInLeft">

        <!-- Repeatable Cards -->
        <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
          <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Programming Languages</h2>
          <ul class="list-disc list-inside space-y-1">
            <li>Python</li><li>C/C++</li><li>Java</li><li>JavaScript</li>
          </ul>
        </div>

        <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
          <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Web Development</h2>
          <ul class="list-disc list-inside space-y-1">
            <li>Laravel</li><li>PHP & MySQL</li><li>HTML, CSS, Tailwind</li><li>NODE.JS</li>
          </ul>
        </div>

        <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
          <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Tools & Platforms</h2>
          <ul class="list-disc list-inside space-y-1">
            <li>Git & GitHub</li><li>VS Code</li><li>XAMPP</li><li>Jupyter Notebook</li><li>Microsoft Excel</li>
          </ul>
        </div>

        <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
          <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Android Development</h2>
          <ul class="list-disc list-inside space-y-1">
            <li>Android Studio</li><li>Chaquopy</li><li>TFLite Integration</li><li>Flask</li><li>Tkinter</li>
          </ul>
        </div>

        <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
          <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Databases & Cloud</h2>
          <ul class="list-disc list-inside space-y-1">
            <li>MySQL</li><li>Oracle</li><li>Firebase</li>
          </ul>
        </div>

        <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full sm:w-[45%] transition hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc]">
          <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Additional Technical Skills</h2>
          <ul class="list-disc list-inside space-y-1">
          <li>Problem Solving (500+ Leetcode Solve)</li><li>Data Cleaning</li><li>Data Migration & Automation</li><li>Digital Circuit Design (Logisim)</li>
          </ul>
        </div>
      </div>

      <!-- Right Column -->
      <div class="bg-black/60 p-6 rounded-xl shadow-lg border border-fuchsia-400/20 w-full lg:w-[30%] transition hover:scale-[1.03] hover:shadow-[0_0_20px_#c084fc] animate__animated animate__fadeInRight">
        <h2 class="text-xl font-semibold mb-2 text-fuchsia-400">Machine Learning & AI</h2>
        <ul class="list-disc list-inside space-y-1">
        <li>Supervised & Unsupervised Learning</li>
        <li>Regression & Classification Algorithms</li>
        <li>Scikit-learn, TensorFlow, Keras</li>
        <li>Regularization, Optimization</li>
        <li>Hyperparameter Tuning</li>
        <li>XGBOOST</li>
        <li>Deep Learning</li>
        <li>Artificial Neural Networks</li>
        <li>ResNets, InceptionNet, MobileNet</li>
        <li>Classic CNNs, LeNet-5, AlexNet</li>
        <li>Reinforcement Learning</li>
        <li>Computer Vision</li>
        <li>Object Detection, YOLO Algorithm</li>
        <li>Neural Style Transfer</li>
        <li>U-NET, Siamese Network</li>
        </ul>
      </div>

    </div>
  </section>

</div>

<!-- Vanta Background Script -->
<script>
  let vantaEffect = VANTA.NET({
    el: "#vanta-bg",
    mouseControls: true,
    touchControls: true,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0xc084fc,
    backgroundColor: 0x0b1120
  });

  window.addEventListener('resize', () => {
    if (vantaEffect) vantaEffect.resize();
  });

  window.addEventListener('load', () => {
    setTimeout(() => {
      if (vantaEffect) vantaEffect.resize();
    }, 300);
  });
</script>
</body>
</html>
