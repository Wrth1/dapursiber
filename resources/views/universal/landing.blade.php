<!DOCTYPE html>
<html lang="en">

@include('header')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page - Dapur Siber</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Teknologi Background */
    body {
      background: linear-gradient(135deg, #1f1f1f, #0f0f0f);
      color: #ffffff;
      font-family: 'Arial', sans-serif;
      margin: 0;
      overflow-x: hidden;
    }

    /* Glowing Lines Animation */
    .glow-lines {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 100%;
      overflow: hidden;
      z-index: -1;
    }

    .glow-line {
      position: absolute;
      width: 3px;
      height: 100%;
      background: linear-gradient(180deg, rgba(0, 255, 255, 0.5), rgba(0, 255, 255, 0));
      animation: glow 4s linear infinite;
    }

    .glow-line:nth-child(1) {
      left: 10%;
      animation-delay: 0s;
    }

    .glow-line:nth-child(2) {
      left: 30%;
      animation-delay: 1s;
    }

    .glow-line:nth-child(3) {
      left: 50%;
      animation-delay: 2s;
    }

    .glow-line:nth-child(4) {
      left: 70%;
      animation-delay: 3s;
    }

    .glow-line:nth-child(5) {
      left: 90%;
      animation-delay: 4s;
    }

    @keyframes glow {
      0% {
        transform: translateY(100%);
      }
      100% {
        transform: translateY(-100%);
      }
    }

    /* Button Animation */
    .btn-tech {
      background: #00bcd4;
      color: #fff;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 1.2rem;
      font-weight: bold;
      transition: transform 0.2s, background 0.2s;
    }

    .btn-tech:hover {
      background: #0097a7;
      transform: scale(1.1);
    }

    /* Text Animation */
    .fade-in {
      opacity: 0;
      animation: fadeIn 1.5s forwards;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <!-- Background Animasi -->
  <div class="glow-lines">
    <div class="glow-line"></div>
    <div class="glow-line"></div>
    <div class="glow-line"></div>
    <div class="glow-line"></div>
    <div class="glow-line"></div>
  </div>

  <!-- Landing Page Content -->
  <section class="min-h-screen flex items-center justify-center text-center px-4">
    <div class="container">
      <h1 class="text-4xl md:text-5xl font-bold fade-in">DAPUR SIBER</h1>
      <p class="mt-4 text-lg mb-10 md:text-xl fade-in" style="animation-delay: 0.5s;">
        Cooking Up Cyber Defense.
      </p>
      <a href="{{ route('login') }}" class="btn-tech mt-20 fade-in" style="animation-delay: 1s;">Get Started</a>
    </div>
  </section>
  <!-- Footer -->
  <footer class="flex items-center justify-center text-center mb-10">
    <p>© 2024 Dapur Siber. All Rights Reserved</p>
  </footer>
</body>

</html>
