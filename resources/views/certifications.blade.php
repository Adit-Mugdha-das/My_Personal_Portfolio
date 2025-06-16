<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Certifications - Mugdha</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!--<link rel="stylesheet" href="{{ secure_asset('build/assets/app-Ct2FSlyM.css') }}">-->
  <!--<script src="{{ secure_asset('build/assets/app-eMHK6VFw.js') }}" defer></script>-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


  <!-- Vanta.js & Three.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

  <!-- Animate.css & AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- Alpine.js -->
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
            window.location.href = "{{ url('/test') }}"; // swipe left → Honors & Awards
          } else {
            window.location.href = "{{ url('/projects') }}"; // swipe right → Projects
          }
        }
      }
    };
  }
</script>


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

    [x-cloak] { display: none !important; }

  </style>
</head>

<body class="text-white overflow-x-hidden min-h-screen overflow-y-auto">
<div id="vanta-bg" class="min-h-screen flex flex-col" x-data="swipeComponent()" x-init="initSwipe()">



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
    <!-- Mobile Nav -->
<ul x-show="navOpen" x-cloak x-transition
    class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">

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
    <li><a @click="navOpen = false" href="{{ url('/certifications') }}" class="block text-purple-400">Certifications</a></li>
    <li><a @click="navOpen = false" href="{{ url('/test') }}" class="block hover:text-purple-400">Honors & Awards</a></li>
    <li><a @click="navOpen = false" href="{{ url('/contact') }}" class="block hover:text-purple-400">Contact</a></li>
  </ul>
</div>


  <!-- Certifications Section -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Licenses & Certifications</h1>

    <div class="grid gap-8 max-w-6xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
      @php
        $certs = [
        [
  'title' => 'Deep Learning Specialization (Combined Certificate)',
  'issuer' => 'DeepLearning.AI',
  'date' => 'Jun 2025',
  'id' => 'E1L0MQCNQ528',
  'skills' => 'Neural Networks, CNNs, RNNs, LSTMs, Transformers, NLP, Dropout, BatchNorm, Xavier Initialization, Music Synthesis, Machine Translation, Attention Mechanism',
  'image' => 'certificates/deep_learning_specialization_combined.png', // Make sure the file is saved with this name
  'link' => 'https://www.coursera.org/account/accomplishments/specialization/E1L0MQCNQ528'
],


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
  'title' => 'Sequence Models',
  'issuer' => 'DeepLearning.AI',
  'date' => 'Jun 2025',
  'id' => 'OHTA37ZZYTM6',
  'skills' => 'Sequence Modeling, RNNs, GRUs, LSTMs, Beam Search, Attention Models, Natural Language Processing (NLP)',
  'image' => 'certificates/sequence_models.png', // Move your uploaded image to this path
  'link' => 'https://www.coursera.org/account/accomplishments/verify/OHTA37ZZYTM6'
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
            'title' => 'Neural Networks and Deep Learning',
            'issuer' => 'DeepLearning.AI',
            'date' => 'Mar 2025',
            'id' => '27BS1R4411JV',
            'skills' => 'Deep Learning, Neural Networks, +2 skills',
            'image' => 'certificates/neural_networks.png',
            'link' => 'https://coursera.org/verify/27BS1R4411JV'
          ],
          [
  'title' => 'Machine Learning Specialization',
  'issuer' => 'Stanford Online',
  'date' => 'Mar 2025',
  'id' => 'XGRN2X2P22GG',
  'skills' => 'Supervised Learning (Linear & Logistic Regression), Unsupervised Learning (Clustering, Anomaly Detection), Recommender Systems, Neural Networks, Reinforcement Learning, Decision Trees',
  'image' => 'certificates/machine_learning_specialization.png', // Place your uploaded image here
  'link' => 'https://www.coursera.org/account/accomplishments/specialization/XGRN2X2P22GG'
],

           [
            'title' => 'Unsupervised Learning, Recommenders, Reinforcement Learning',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'GSCWZZHE2WQY',
            'skills' => 'Unsupervised Learning, RL, Recommender Systems',
            'image' => 'certificates/unsupervised_rl.png',
            'link' => 'https://coursera.org/verify/GSCWZZHE2WQY'
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
            'title' => 'Supervised Machine Learning: Regression and Classification',
            'issuer' => 'Stanford Online',
            'date' => 'Mar 2025',
            'id' => 'OWOEBASEFPWQ',
            'skills' => 'TensorFlow, Scikit-Learn, Classification, Regression',
            'image' => 'certificates/supervised_ml.png',
            'link' => 'https://coursera.org/verify/OWOEBASEFPWQ'
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


  <!-- Certifications Section -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-12 text-white drop-shadow-[0_0_20px_#c084fc]">Microsoft 365 Copilot Certifications</h1>

    <div class="grid gap-8 max-w-6xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
      @php
        $certs = [
        [
          'title' => 'Introduction to Microsoft 365 Copilot',
          'issuer' => 'Microsoft Learn',
          'date' => 'Jun 2025',
          'id' => 'Verified via Microsoft Learn',
          'skills' => 'Copilot Overview, Microsoft 365 Capabilities, Productivity Tools',
          'image' => 'certificates/microsoft_365_copilot.png',
          'link' => 'https://learn.microsoft.com/en-us/users/aditmugdhadas-9336/achievements?username=AditMugdhaDas-9336&section=activity'
        ],

        [
          'title' => 'Ask questions and analyze content with Microsoft 365 Copilot',
          'issuer' => 'Microsoft Learn',
          'date' => 'Jun 2025',
          'id' => 'Verified via Microsoft Learn',
          'skills' => 'Prompting, Data Analysis, Natural Language Input',
          'image' => 'certificates/ms365_ask_questions.png',
          'link' => 'https://learn.microsoft.com/en-us/users/aditmugdhadas-9336/achievements?username=AditMugdhaDas-9336&section=activity'
        ],

        [
          'title' => 'Edit and transform content with Microsoft 365 Copilot',
          'issuer' => 'Microsoft Learn',
          'date' => 'Jun 2025',
          'id' => 'Verified via Microsoft Learn',
          'skills' => 'Editing Prompts, Productivity, Copilot Use Cases',
          'image' => 'certificates/ms365_edit_transform.png',
          'link' => 'https://learn.microsoft.com/en-us/users/aditmugdhadas-9336/achievements?username=AditMugdhaDas-9336&section=activity'
        ],

          [
          'title' => 'Create and draft with Microsoft 365 Copilot',
          'issuer' => 'Microsoft Learn',
          'date' => 'Jun 2025',
          'id' => 'Verified via Microsoft Learn',
          'skills' => 'Generating Content, Drafting Documents, Email Assistance',
          'image' => 'certificates/ms365_create_draft.png',
          'link' => 'https://learn.microsoft.com/en-us/users/aditmugdhadas-9336/achievements?username=AditMugdhaDas-9336&section=activity'
        ],
[
          'title' => 'Summarize and simplify information with Microsoft 365 Copilot',
          'issuer' => 'Microsoft Learn',
          'date' => 'Jun 2025',
          'id' => 'Verified via Microsoft Learn',
          'skills' => 'Summarization, Information Simplification, Clarity Tools',
          'image' => 'certificates/ms365_summarize.png',
          'link' => 'https://learn.microsoft.com/en-us/users/aditmugdhadas-9336/achievements?username=AditMugdhaDas-9336&section=activity'
        ],

 [
          'title' => 'Optimize and extend Microsoft 365 Copilot',
          'issuer' => 'Microsoft Learn',
          'date' => 'Jun 2025',
          'id' => 'Verified via Microsoft Learn',
          'skills' => 'Power Platform Integration, Advanced Scenarios, Workflow',
          'image' => 'certificates/ms365_optimize_extend.png',
          'link' => 'https://learn.microsoft.com/en-us/users/aditmugdhadas-9336/achievements?username=AditMugdhaDas-9336&section=activity'
        ],

[
          'title' => 'Explore the possibilities with Microsoft 365 Copilot',
          'issuer' => 'Microsoft Learn',
          'date' => 'Jun 2025',
          'id' => 'Verified via Microsoft Learn',
          'skills' => 'Copilot Vision, Use Cases, Workplace Transformation',
          'image' => 'certificates/ms365_explore_possibilities.png',
          'link' => 'https://learn.microsoft.com/en-us/users/aditmugdhadas-9336/achievements?username=AditMugdhaDas-9336&section=activity'
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
