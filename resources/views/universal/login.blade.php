<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Dapur Siber</title>
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

    /* Input Styling */
    .input-field {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.1);
      color: #ffffff;
      font-size: 1rem;
      outline: none;
      transition: background 0.3s;
    }

    .input-field:focus {
      background: rgba(255, 255, 255, 0.2);
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

  <!-- Login Form Section -->
  <section class="min-h-screen flex items-center justify-center px-4">
    <div class="bg-gray-900 bg-opacity-90 p-8 rounded-lg shadow-lg max-w-md w-full text-center">
      <h2 class="text-3xl font-bold fade-in">LOGIN</h2>
      <p class="text-lg mb-6 fade-in" style="animation-delay: 0.3s;">Access Your Dashboard</p>

      <!-- Alerts -->
      @include('alerts.error')
      @include('alerts.success')

      <!-- Form -->
      <form action="/login" method="POST" class="space-y-6">
        @csrf <!-- CSRF Protection -->
        <input type="text" id="username" name="username" placeholder="Username" class="input-field fade-in" style="animation-delay: 0.5s;" required>
        <input type="password" id="password" name="password" placeholder="Password" class="input-field fade-in" style="animation-delay: 0.7s;" required>
        <button type="submit" class="btn-tech w-full mt-4 fade-in" style="animation-delay: 0.9s;">Login</button>
      </form>

      <!-- Register Link -->
      <div class="mt-6 fade-in" style="animation-delay: 1.1s;">
        Don't have an account? <a href="{{ route('register') }}" class="text-blue-400 hover:underline">Register now!</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="flex items-center justify-center text-center mt-10">
    <p>© 2024 Dapur Siber. All Rights Reserved</p>
  </footer>
</body>

</html>
