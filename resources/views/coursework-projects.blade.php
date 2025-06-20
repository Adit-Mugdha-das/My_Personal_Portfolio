<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Coursework Projects - Mugdha</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

  <script>
  function swipeComponent() {
    return {
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
            window.location.href = "{{ url('/') }}"; // Swipe left → Home
          } else {
            window.location.href = "{{ url('/projects') }}"; // Swipe right → Personal Projects
          }
        }
      }
    }
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
    
  </style>
</head>
<body class="text-white overflow-x-hidden">
<div id="vanta-bg" class="min-h-screen relative"
     x-data="{ ...swipeComponent(), navOpen: false, modalOpen: false, modalImage: '' }"
     x-init="initSwipe()">


  <!-- Navbar -->
  <nav class="bg-black/50 backdrop-blur-md text-white px-6 py-4 flex justify-between items-center shadow-md rounded-b-xl">
    <div class="font-bold text-purple-300 text-xl tracking-wider neon-glow">Adit Mugdha Das</div>
   
    <ul class="hidden md:flex gap-6 text-sm md:text-base">
      <li><a href="{{ url('/') }}" class="hover:text-purple-300 transition duration-300">Home</a></li>
      <li><a href="{{ url('/projects') }}" class="hover:text-purple-300 transition duration-300">Personal Projects</a></li>
      <li><a href="{{ url('/coursework-projects') }}" class="text-purple-300 font-semibold drop-shadow-[0_0_8px_#c084fc] scale-110">Coursework Projects</a></li>
    </ul>
    <ul x-show="navOpen" class="md:hidden absolute top-[64px] left-0 w-full bg-black/80 backdrop-blur-md p-6 flex flex-col gap-4 z-50">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/projects') }}">Personal Projects</a></li>
      <li><a href="{{ url('/coursework-projects') }}" class="text-purple-300">Coursework Projects</a></li>
    </ul>
  </nav>

  <!-- Header Section -->
  <section class="text-center py-16 px-4 animate__animated animate__fadeIn">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-[0_0_20px_#c084fc]">Coursework Projects</h1>
    <p class="text-fuchsia-300 text-lg">Projects I have done in Machine Learning and Deep Learning Specializations</p>
  </section>

  <!-- Back to Personal Projects Button -->
    <div class="text-center mb-10">
      <a href="{{ url('/projects') }}">
        <button class="bg-white text-black px-6 py-2 rounded-lg text-sm font-semibold shadow-lg border border-amber-300 hover:scale-105 transition-all duration-300 hover:drop-shadow-[0_0_12px_#fbbf24]">
          🔙 View Personal Projects
        </button>
      </a>
    </div>


  <!-- Coursework Project Cards Section -->
  <section class="px-6 md:px-20 pb-20 grid gap-10 max-w-7xl mx-auto text-left sm:grid-cols-2 lg:grid-cols-3">



      <!-- Transformer Architecture with TensorFlow Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/transformer_tensorflow.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Transformer Screenshot" @click="modalImage = '{{ asset('images/transformer_tensorflow.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Transformer Architecture with TensorFlow</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Implemented Transformer from scratch using TensorFlow and Keras — including scaled dot-product attention, multi-head attention, positional encodings, and encoder-decoder blocks.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 4</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">TensorFlow</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Keras</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Transformer</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Transformers-Architecture-with-TensorFlow" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Transformers-Architecture-with-TensorFlow/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
          <a href="{{ asset('downloads/05-Programming Assignment Transformers Architecture.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🧠 End-to-End Transformer Model with Attention in TensorFlow</p>
      </div>

<!-- Named-Entity Recognition Transformer Coursework Project Card -->
<div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
  <img src="{{ asset('images/ner_transformer.jpg') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="NER Transformer Screenshot" @click="modalImage = '{{ asset('images/ner_transformer.png') }}'; modalOpen = true">
  <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">NER with Transformer Architecture</h2>
  <p class="text-[1.15rem] text-gray-300 mb-4">Built a Named-Entity Recognition model using Transformers and TensorFlow — part of DeepLearning.AI's Sequence Models course (Week 4).</p>
  <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
    <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 4</span>
  </p>
  <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">TensorFlow</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">NER</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Transformer</span>
  </div>
  <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
    <a href="https://github.com/Adit-Mugdha-das/NER-Transformer-Implementation" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
    <a href="https://github.com/Adit-Mugdha-das/NER-Transformer-Implementation/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
    <a href="{{ asset('downloads/NER-Transformer-Lab.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
  </div>
  <p class="text-purple-400 font-semibold text-lg mt-3">🔎 Entity Recognition with Transformer + TensorFlow</p>
</div>

      

      <!-- Transformer Pre-processing Coursework Project Card -->
<div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
  <img src="{{ asset('images/transformer_preprocessing.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Transformer Preprocessing Screenshot" @click="modalImage = '{{ asset('images/transformer_preprocessing.png') }}'; modalOpen = true">
  <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Transformer Pre-processing Lab</h2>
  <p class="text-[1.15rem] text-gray-300 mb-4">Covers input embeddings, positional encoding, and token handling as a preprocessing step for Transformers in the Sequence Models course.</p>
  <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
    <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 4</span>
  </p>
  <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Jupyter</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Transformer</span>
    <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Preprocessing</span>
  </div>
  <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
    <a href="https://github.com/Adit-Mugdha-das/Transformer-Preprocessing" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
    <a href="https://github.com/Adit-Mugdha-das/Transformer-Preprocessing/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
    <a href="{{ asset('downloads/Transformer Preprocessing.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
  </div>
  <p class="text-purple-400 font-semibold text-lg mt-3">🔧 Embeddings & Positional Encoding for Transformers</p>
</div>




      <!-- Trigger Word Detection Coursework Project Card (Updated Styling) -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/trigger_word_detection.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Trigger Word Detection Screenshot" @click="modalImage = '{{ asset('images/trigger_word_detection.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Trigger Word Detection</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Built an audio-based trigger word detection system using spectrogram features and LSTM-based sequence modeling to detect "activate" in streaming speech.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 3</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">TensorFlow</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Librosa</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">LSTM</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Trigger-Word-Detection" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Trigger-Word-Detection/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
          <a href="{{ asset('downloads/Trigger Word Detection.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🎧 Detecting the Word “Activate” from Live Audio with LSTMs</p>
      </div>



<!-- Neural Machine Translation with Attention Coursework Project Card (Updated Styling) -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/neural_machine_translation.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Neural Machine Translation Screenshot" @click="modalImage = '{{ asset('images/neural_machine_translation.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Neural Machine Translation with Attention</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented a seq2seq model with attention to translate English sentences into French. Demonstrates attention-enhanced decoding for improved context and accuracy.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 3</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">TensorFlow</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Keras</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Attention Mechanism</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Neural-Machine-Translation-with-Attention" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Neural-Machine-Translation-with-Attention/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
        <a href="{{ asset('downloads/11-Programming Assignment Neural Machine Translation with Attention.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🌍 English-to-French Translation with Seq2Seq + Attention</p>
    </div>


      
<!-- Emojify - Sequence Models Coursework Project Card (Updated Styling) -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/emojify_sequence_model.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Emojify Screenshot" @click="modalImage = '{{ asset('images/emojify_sequence_model.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Emojify - Sequence Models</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Built LSTM-based text classification models that map input sentences to emojis using pre-trained GloVe vectors and sequence modeling.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 2</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Keras</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">GloVe</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">LSTM</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Emojify" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Emojify/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
          <a href="{{ asset('downloads/12-Programming Assignment Emojify.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">😊 Mapping Sentences to Emojis using Word Embeddings + LSTM</p>
      </div>


      <!-- Word Vector Debiasing Coursework Project Card (Updated Styling) -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/word_vector_debiasing.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Word Vector Debiasing Screenshot" @click="modalImage = '{{ asset('images/word_vector_debiasing.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Operations on Word Vectors – Debiasing</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Implemented vector arithmetic and bias mitigation on GloVe embeddings. Applied neutralization and equalization to address gender bias in NLP tasks.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 2</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">NumPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">GloVe</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">NLP</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Operations-on-Word-Vectors---Debiasing" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Operations-on-Word-Vectors---Debiasing/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
          <a href="{{ asset('downloads/11-Programming Assignment Operations on Word Vectors - Debiasing.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🧠 Exploring Fairness and Bias Mitigation in Word Embeddings</p>
      </div>



    <!-- Jazz Improvisation with LSTM Coursework Project Card (Updated Styling) -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/jazz_improvisation_lstm.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Jazz Improvisation Screenshot" @click="modalImage = '{{ asset('images/jazz_improvisation_lstm.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Jazz Improvisation with LSTM</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented an LSTM-based model to generate jazz music sequences, capturing long-term musical patterns and improvisation using deep learning.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 1</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Keras</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">LSTM</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Music Generation</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Jazz-Improvisation-with-LSTM" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Jazz-Improvisation-with-LSTM/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
        <a href="{{ asset('downloads/Jazz Improvisation with LSTM.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🎷 AI-Powered Jazz Sequence Generation using LSTM Networks</p>
    </div>


    <!-- Dinosaur Island - Character-Level Language Modeling Coursework Project Card (Updated Styling) -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/dinosaur_language_modeling.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Dinosaur Island Screenshot" @click="modalImage = '{{ asset('images/dinosaur_language_modeling.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Dinosaur Island - Character-Level Language Modeling</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Built a character-level RNN from scratch using NumPy to generate dinosaur names. Demonstrates sequence modeling, sampling, and training stabilization techniques.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 1</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">RNN</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Recurrent-Neural-Network-" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Recurrent-Neural-Network-/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
        <a href="{{ asset('downloads/01-Programming Assignment Building your Recurrent Neural Network - Step by Step.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🦕 Generating Dinosaur Names Using RNNs and NumPy</p>
    </div>


      <!-- Recurrent Neural Network Coursework Project Card (Updated Styling) -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/rnn_step_by_step.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="RNN Screenshot" @click="modalImage = '{{ asset('images/rnn_step_by_step.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Building My Recurrent Neural Network - Step by Step</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Step-by-step implementation of a character-level RNN using NumPy to understand sequence modeling and BPTT without deep learning libraries.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 5, Week 1</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">RNN</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Char-level Model</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Recurrent-Neural-Network-" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Recurrent-Neural-Network-/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
        <a href="{{ asset('downloads/Recurrent Neural Network.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🔁 Character-Level Sequence Generation via Custom RNN</p>
    </div>



    <!-- Neural Style Transfer with VGG-19 Coursework Project Card (Updated) -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a78bfa] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/neural_style_transfer.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a78bfa]" alt="Neural Style Transfer Screenshot" @click="modalImage = '{{ asset('images/neural_style_transfer.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a78bfa]">Neural Style Transfer with VGG-19</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented neural style transfer to blend content and artistic style using deep convolutional features from a VGG-19 model.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 4</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">TensorFlow</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">VGG-19</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#a78bfa]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Art-Generation-with-Neural-Style-Transfer" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Art-Generation-with-Neural-Style-Transfer/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Read More</a>
        <a href="{{ asset('downloads/Art Generation with Neural Style Transfer.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#a78bfa] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🎨 Artistic Image Generation via Deep Style Transfer</p>
    </div>




      <!-- Face Recognition with FaceNet Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/facenet_recognition.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="FaceNet Screenshot" @click="modalImage = '{{ asset('images/facenet_recognition.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Face Recognition with FaceNet</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Built a face recognition system using FaceNet embeddings to perform identity verification and recognition.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 4</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Keras</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">FaceNet</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Face-Recognition" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Face-Recognition/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/Face Recognition.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🧠 Identity Verification Using Deep Face Embeddings</p>
      </div>



      <!-- Image Segmentation with U-Net Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/unet_segmentation.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="U-Net Segmentation Screenshot" @click="modalImage = '{{ asset('images/unet_segmentation.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Image Segmentation with U-Net</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Implemented a U-Net architecture for road segmentation from dashcam images using pixel-wise classification.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 3</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">TensorFlow</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Keras</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Image-Segmentation-with-U-Net" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Image-Segmentation-with-U-Net/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/Image Segmentation with U-Net.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🧠 Semantic Segmentation for Road Scenes with U-Net</p>
      </div>


      <!-- Car Detection with YOLO Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/yolo_car_detection.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="YOLO Car Detection Screenshot" @click="modalImage = '{{ asset('images/yolo_car_detection.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Car Detection with YOLO</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Used a pre-trained YOLO model to detect cars in images and video frames using non-max suppression and bounding box visualization.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 3</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">TensorFlow</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">OpenCV</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Car-detection-with-YOLO" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Car-detection-with-YOLO/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/Car detection with YOLO.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🚗 Object Detection using YOLOv2 & Non-Max Suppression</p>
    </div>



      <!-- Transfer Learning with MobileNet Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/mobilenet.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="MobileNet Screenshot" @click="modalImage = '{{ asset('images/mobilenet.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Transfer Learning with MobileNet</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Applied a pretrained MobileNet model for image classification, using feature extraction and fine-tuning for edge-efficient inference.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 2</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">TensorFlow</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Keras</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Transfer-Learning-with-MobileNet" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Transfer-Learning-with-MobileNet/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/Transfer Learning with MobileNet.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">📱 Lightweight CNNs for Mobile & Embedded AI</p>
      </div>



      <!-- Residual Networks (ResNets) Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/resnet.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="ResNet Screenshot" @click="modalImage = '{{ asset('images/resnet.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Residual Networks (ResNets)</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Implemented a deep residual network (ResNet) with skip connections to solve vanishing gradient issues and build deep CNNs.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 2</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">TensorFlow</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Keras</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Residual-Networks-ResNets-" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Residual-Networks-ResNets-/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/Residual Networks.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🔁 Skip Connections for Training Deep CNNs</p>
      </div>



      <!-- Convolutional Model Application Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/cnn_application.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="CNN Application Screenshot" @click="modalImage = '{{ asset('images/cnn_application.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Convolutional Model Application</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Applied a pretrained CNN using transfer learning to classify images into categories with Keras and TensorFlow.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 1</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">TensorFlow</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Keras</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Applying-a-Convolutional-Mode" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Applying-a-Convolutional-Mode/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/13-Programming Assignment Convolution Model Application.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🖼️ Real-World Image Classification using Transfer Learning</p>
      </div>



      <!-- Convolutional Model Step-by-Step Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/cnn_step_by_step.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="CNN Screenshot" @click="modalImage = '{{ asset('images/cnn_step_by_step.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Convolutional Model Step-by-Step</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Manually implemented CNN architecture from scratch including forward and backward passes for convolution, pooling, and dense layers using NumPy.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 4, Week 1</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Building-a-Convolutional-Model-Step-by-Step" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Building-a-Convolutional-Model-Step-by-Step/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/12-Programming Assignment Convolutional Model Step-by-Step.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🧠 Low-Level CNN Components Coded from Scratch</p>
      </div>


    
    <!-- TensorFlow Introduction Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/tensorflow_intro.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="TensorFlow Screenshot" @click="modalImage = '{{ asset('images/tensorflow_intro.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">TensorFlow Programming Framework</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Introduced core TensorFlow concepts like tensors, sessions, placeholders, and computation graphs for simple model training.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 2, Week 3</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">TensorFlow 1.x</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Introduction-to-TensorFlow-Programming-Framework" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Introduction-to-TensorFlow-Programming-Framework/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/03-Programming Assignment TensorFlow Introduction.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🔧 Build Simple Models using TensorFlow Basics</p>
    </div>


    
    <!-- Optimization Methods Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/optimization_methods.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Optimization Methods Screenshot" @click="modalImage = '{{ asset('images/optimization_methods.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Optimization Methods</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented and compared mini-batch gradient descent, momentum, and Adam optimizers for efficient deep network training and convergence.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 2, Week 2</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Optimization-Methods" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Optimization-Methods/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/11-Programming Assignment Optimization Methods.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">⚡ Optimize Deep Learning with Momentum & Adam</p>
    </div>


      <!-- Gradient Checking Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/gradient_checking.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Gradient Checking Screenshot" @click="modalImage = '{{ asset('images/gradient_checking.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Gradient Checking</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Implemented numerical gradient checking to validate backpropagation in deep neural networks by comparing analytical and approximated gradients.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 2, Week 3</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Gradient-Checking" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Gradient-Checking/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/09-Programming Assignment Gradient Checking.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🧪 Validate Backprop with Analytical vs Numerical Gradients</p>
      </div>


      
  <!-- Regularization Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/regularization.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Regularization Screenshot" @click="modalImage = '{{ asset('images/regularization.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Regularization Techniques</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Implemented L2 regularization and dropout to prevent overfitting in deep neural networks, improving generalization and reducing test error.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 2, Week 2</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Regularization" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Regularization/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/08-Programming Assignment Regularization.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">📉 Prevent Overfitting with L2 & Dropout Regularization</p>
      </div>



    <!-- Initialization Techniques Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/init_techniques.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Initialization Techniques Screenshot" @click="modalImage = '{{ asset('images/init_techniques.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Initialization Techniques</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Explored Zero, Random, and He initialization methods and their impact on gradient behavior, training speed, and convergence in deep neural networks.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 2, Week 1</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Initialization" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Initialization/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/07-Programming Assignment Initialization.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">⚙️ Comparing Weight Initialization Methods in DNNs</p>
    </div>


      <!-- Deep Neural Network Cat vs Non-Cat Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/dnn_cat_classifier.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="DNN Cat Classifier Screenshot" @click="modalImage = '{{ asset('images/dnn_cat_classifier.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Deep Neural Network Application</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented a deep L-layer neural network to classify images as cat or non-cat, applying full forward and backward propagation, cost optimization, and prediction using NumPy.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 1, Week 4</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">h5py</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/10--Deep-Neural-Network---Application" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/10--Deep-Neural-Network---Application/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/10- Deep Neural Network - Application.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🐱 L-Layer DNN for Binary Image Classification</p>
    </div>


      <!-- Deep Neural Network Step-by-Step Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/dnn_step_by_step.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="DNN Step-by-Step Screenshot" @click="modalImage = '{{ asset('images/dnn_step_by_step.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Building a Deep Neural Network</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Constructed a modular L-layer deep neural network from scratch using only NumPy, including all core functions from initialization to backpropagation and parameter updates.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 1, Week 4</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Building-a-Deep-Neural-Network-Step-by-Step" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Building-a-Deep-Neural-Network-Step-by-Step/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/09- Building Deep Neural Network Step by Step.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🧠 Layered Architecture Built from Scratch with NumPy</p>
    </div>


      <!-- Planar Data Classification Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/planar_nn.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Planar Classification Screenshot" @click="modalImage = '{{ asset('images/planar_nn.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Planar Data Classification</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Built a shallow neural network with one hidden layer to classify non-linearly separable 2D data using NumPy, including full forward/backward propagation.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 1, Week 3</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Planar-Data-Classification-with-One-Hidden-Layer" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Planar-Data-Classification-with-One-Hidden-Layer/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/12-Programming Assignment Planar Data Classification.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🔮 Shallow Neural Network for 2D Nonlinear Classification</p>
    </div>


    <!-- Logistic Regression with Neural Network Mindset Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/logistic_nn_mindset.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Logistic Regression Screenshot" @click="modalImage = '{{ asset('images/logistic_nn_mindset.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Logistic Regression with Neural Network Mindset</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Built a binary image classifier using logistic regression and NumPy with a neural network perspective. Applied vectorized computation and gradient descent to train the model on cat/non-cat data.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: Deep Learning Specialization – Course 1, Week 2</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Logistic-Regression-with-a-Neural-Network-Mindset" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Logistic-Regression-with-a-Neural-Network-Mindset/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/10-Programming Assignment Logistic Regression.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">📸 Binary Image Classifier with Vectorized NumPy</p>
      </div>



      <!-- Python Basics with NumPy Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/python_numpy.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Python NumPy Screenshot" @click="modalImage = '{{ asset('images/python_numpy.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Python Basics with NumPy</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Practiced vectorized operations, broadcasting, and avoiding loops with NumPy to enable efficient deep learning computations.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: Deep Learning Specialization – Course 1, Week 2</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Python-Basics-with-Numpy" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Python-Basics-with-Numpy/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/09-Practice Programming Assignment Python Numpy.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">💡 Foundation for Efficient Neural Network Computation</p>
    </div>


        <!-- Reinforcement Learning Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/reinforcement_learning.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Reinforcement Learning Screenshot" @click="modalImage = '{{ asset('images/reinforcement_learning.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Reinforcement Learning</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Applied Q-learning with function approximation to learn optimal policies in continuous state spaces using scalable policy and value function updates.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: ML Specialization – Course 3, Week 3</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/Reinforcement-Learning-" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/Reinforcement-Learning-/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/08- Reinforcement Learning.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">🤖 Q-learning in Continuous State Spaces</p>
      </div>


        <!-- PCA and Data Visualization Coursework Project Card -->
      <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
        <img src="{{ asset('images/pca_visualization.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="PCA Visualization Screenshot" @click="modalImage = '{{ asset('images/pca_visualization.png') }}'; modalOpen = true">
        <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">PCA and Data Visualization</h2>
        <p class="text-[1.15rem] text-gray-300 mb-4">Implemented Principal Component Analysis (PCA) for dimensionality reduction and data visualization, including eigen-decomposition, SVD, and high-dimensional data projection.</p>
        <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
          <span class="text-gray-200">Course: ML Specialization – Course 3, Week 2</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">SciPy</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
          <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
        </div>
        <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
          <a href="https://github.com/Adit-Mugdha-das/PCA-and-Data-visualization" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
          <a href="https://github.com/Adit-Mugdha-das/PCA-and-Data-visualization/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
          <a href="{{ asset('downloads/04- PCA and data visualization.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
        </div>
        <p class="text-purple-400 font-semibold text-lg mt-3">📉 PCA for Dimensionality Reduction and Visualization</p>
      </div>


            <!-- Anomaly Detection Coursework Project Card -->
          <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
            <img src="{{ asset('images/anomaly_detection.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Anomaly Detection Screenshot" @click="modalImage = '{{ asset('images/anomaly_detection.png') }}'; modalOpen = true">
            <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Anomaly Detection</h2>
            <p class="text-[1.15rem] text-gray-300 mb-4">Implemented statistical anomaly detection using the multivariate Gaussian distribution to detect outliers in datasets through probability estimation and threshold tuning.</p>
            <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
              <span class="text-gray-200">Course: ML Specialization – Course 3, Week 1</span>
            </p>
              <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
                <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
            <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
              <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">SciPy</span>
              <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
              <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
            </div>
            <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
              <a href="https://github.com/Adit-Mugdha-das/Anomaly-Detection" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
              <a href="https://github.com/Adit-Mugdha-das/Anomaly-Detection/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
              <a href="{{ asset('downloads/07- Anomaly Detection.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
            </div>
            <p class="text-purple-400 font-semibold text-lg mt-3">🔍 Gaussian-Based Outlier Detection from ML Specialization</p>
          </div>



    <!-- Decision Trees Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/decision_trees.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Decision Trees Screenshot" @click="modalImage = '{{ asset('images/decision_trees.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Decision Trees</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Trained a decision tree classifier on real-world data, visualized decision boundaries, and introduced ensemble methods like Random Forest and Gradient Boosting.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: ML Specialization – Course 2, Week 4</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">scikit-learn</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Decision-Trees-and-Tree-Ensembles" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Decision-Trees-and-Tree-Ensembles/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/07- Decision Trees.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🌲 Implements Decision Trees and Boosting Techniques</p>
    </div>


    <!-- Advice for Applying ML Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/advice_ml.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Advice ML Screenshot" @click="modalImage = '{{ asset('images/advice_ml.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Advice for Applying Machine Learning</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Explored strategies for handling skewed data and evaluating model performance using precision, recall, F1-score, and error analysis.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: ML Specialization – Course 2, Week 3</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Advice-for-Applying-Machine-Learning" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Advice-for-Applying-Machine-Learning/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/03- Advice for Applying Machine Learning.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">⭐ From Andrew Ng’s ML Specialization – Course 2, Week 3</p>
    </div>

    <!-- Multiclass Neural Network Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/neural_multiclass.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Multiclass Neural Net Screenshot" @click="modalImage = '{{ asset('images/neural_multiclass.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Neural Networks for Multiclass Classification</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Built a neural network using softmax activation and cross-entropy loss for multiclass classification, with full vectorization for efficiency.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: ML Specialization – Course 2, Week 2</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Neural-Networks-for-Multiclass-classification" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Neural-Networks-for-Multiclass-classification/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/06- Neural Networks for Multiclass classification.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">⭐ From Andrew Ng’s ML Specialization – Course 2, Week 2</p>
    </div>

     <!-- Neural Networks for Binary Classification Project Card -->
     <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/neural_networks_binary.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Neural Networks Screenshot" @click="modalImage = '{{ asset('images/neural_networks_binary.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Neural Networks for Binary Classification</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented a two-layer neural network using vectorized operations for binary classification with forward/backward propagation and visualization.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: ML Specialization – Course 2, Week 1</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/-Neural-Networks-for-Binary-Classification" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/-Neural-Networks-for-Binary-Classification/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/05- Neural Networks for Binary Classification.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">🧠 From Advanced Learning Algorithms – Week 1</p>
    </div>

    <!-- Logistic Regression Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/logistic_regression.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Logistic Regression Screenshot" @click="modalImage = '{{ asset('images/logistic_regression.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Logistic Regression Implementation</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented logistic regression for binary classification using sigmoid activation and gradient descent, including L2 regularization to reduce overfitting.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: ML Specialization – Week 3</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Logistic-regression-Implementation" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Logistic-regression-Implementation/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/08- logistic regression Implementation.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">⭐ From Andrew Ng’s ML Specialization – Course 1, Week 3</p>
    </div>

    <!-- Linear Regression Coursework Project Card -->
    <div class="bg-black/60 border border-purple-400/20 rounded-xl p-6 shadow-lg hover:shadow-[0_0_12px_#a855f7] hover:scale-[1.03] transition-transform duration-500" data-aos="zoom-in" data-aos-duration="700">
      <img src="{{ asset('images/linear_regression.png') }}" class="rounded-lg mb-4 w-full h-48 object-cover cursor-zoom-in hover:drop-shadow-[0_0_3px_#a855f7]" alt="Linear Regression Screenshot" @click="modalImage = '{{ asset('images/linear_regression.png') }}'; modalOpen = true">
      <h2 class="text-2xl font-extrabold text-purple-300 mb-2 tracking-wide drop-shadow-[0_0_4px_#a855f7]">Linear Regression Implementation</h2>
      <p class="text-[1.15rem] text-gray-300 mb-4">Implemented univariate linear regression using gradient descent to fit a line to data and visualize optimization with matplotlib.</p>
      <p class="text-base text-gray-500 font-semibold mb-3 transition duration-300 hover:text-white">
        <span class="text-gray-200">Course: ML Specialization – Week 2</span>
      </p>
      <div class="flex flex-wrap gap-2 mb-4 text-base font-semibold">
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Python</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">NumPy</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Matplotlib</span>
        <span class="bg-purple-400/10 text-purple-300 px-3 py-1 rounded-full transition duration-300 hover:text-white hover:drop-shadow-[0_0_6px_#9333ea]">Jupyter Notebook</span>
      </div>
      <div class="flex flex-wrap gap-4 text-base font-medium mb-4">
        <a href="https://github.com/Adit-Mugdha-das/Linear-regression-Implementation" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">GitHub</a>
        <a href="https://github.com/Adit-Mugdha-das/Linear-regression-Implementation/blob/main/README.md" target="_blank" class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Read More</a>
        <a href="{{ asset('downloads/10- Linear regression Implementation.zip') }}" download class="text-purple-300 underline hover:scale-105 hover:drop-shadow-[0_0_6px_#9333ea] transition-transform">Download</a>
      </div>
      <p class="text-purple-400 font-semibold text-lg mt-3">⭐ From Andrew Ng’s ML Specialization – Course 1, Week 2</p>
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
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x8e44ad,
    backgroundColor: 0x0f172a
  });
</script>

</body>
</html>
