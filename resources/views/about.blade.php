<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Me | Adit Mugdha Das</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
      flex-direction: row;
      gap: 2rem;
      padding: 1.5rem;
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 1rem;
      box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
    }

    .profile-image {
      flex: 1;
      border-radius: 1rem;
      overflow: hidden;
      border: 2px solid #9333ea;
      box-shadow: 0 0 15px #9333ea80;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .profile-image:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #d946ef, 0 0 40px #c084fc;
    }

    .profile-image img {
      width: 100%;
      height: auto;
      object-fit: cover;
      object-position: 40% center;
      transition: transform 0.4s ease;
    }

    .profile-image:hover img {
      transform: scale(1.02);
    }

    .about-text-content {
      flex: 1.5;
      padding-left: 1.5rem;
    }

    .about-text-content h1 {
      text-align: center;
      color: #ff85c1;
      font-size: 2rem;
      margin-bottom: 1.5rem;
      text-shadow: 0 0 20px #c084fc;
    }

    .about-text {
      font-size: 1rem;
      line-height: 1.8;
      color: white;
      text-align: justify;
      margin-bottom: 15px;
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

    @media (min-width: 768px) {
      .about-text-content h1 {
        font-size: 3rem;
      }
    }

    @media (max-width: 767px) {
      .about-wrapper {
        flex-direction: column;
        align-items: center;
        padding: 1rem;
      }

      .profile-image {
        width: 100%;
        max-width: 280px;
        height: auto;
      }

      .about-text-content {
        padding-left: 0;
        padding-top: 1rem;
      }

      .about-text-content h1 {
        text-align: center;
        font-size: 1.75rem;
        margin-top: 1rem;
      }
    }
  </style>
</head>
<body class="text-white overflow-x-hidden bg-[#0f172a]">
  <div id="vanta-bg" x-data="{ navOpen: false }">
    <!-- Navbar here (unchanged) -->

    <!-- About Section -->
    <section class="about-wrapper flex-grow">
      <div class="profile-image animate__animated animate__fadeInLeft">
        <img src="{{ asset('images/aboutphoto.png') }}" alt="Adit Mugdha Das">
      </div>

      <div class="about-text-content animate__animated animate__fadeInRight animate__delay-1s">
        <h1>About Me</h1>
        <p class="about-text">Hi, I’m <strong>Adit Mugdha Das</strong>, a disciplined and passionate <span class="highlight">Computer Science and Engineering</span> undergrad at <strong>KUET</strong>. I’m deeply engaged with <span class="highlight">Machine Learning</span> and <span class="highlight">Deep Learning</span>, and love solving complex problems that can create impactful real-world solutions.</p>
        <p class="about-text">My academic foundation (CGPA: 3.64) is backed by hands-on experiences in the field, such as my <span class="highlight">Data Analysis experience</span> at Summit Communications Ltd., where I developed the <strong>Internet Service Locator</strong> using Google Places API to automate the retrieval of nearby locations. Additionally, I contributed to the <strong>GeoCleanser</strong> GIS tool by enhancing its data validation features, improving the accuracy of geographic data processing. I’ve also worked as a QNA teacher at UDVASH, sharpening my analytical and communication skills.</p>
        <p class="about-text">I’ve been recognized for my achievements, including the <span class="highlight">Best Project Award</span> at KUET for my project "Mindmap," and I was also honored as the <span class="highlight">Best Talent of the Year</span> in Math & CS during my school years.</p>
        <p class="about-text">Beyond academics, I’m passionate about sports (cricket, chess, football), traveling, and always striving to grow personally and professionally. My long-term goal is to pursue a <span class="highlight">Ph.D. in Machine Learning</span> and contribute to the cutting-edge research in this space.</p>
        <p class="about-text">If you’re interested in collaborating or discussing exciting ideas in AI, feel free to <a href="/contact" class="cta-link">contact me</a>!</p>
      </div>
    </section>
  </div>

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
