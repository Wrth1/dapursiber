<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant Request Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    @include('header')
    <style>
        /* Background Glow */
        body {
            background: linear-gradient(135deg, #121212, #1a1a1a);
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

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
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, rgba(0, 255, 255, 0.5), rgba(0, 255, 255, 0));
            animation: glow 5s linear infinite;
        }

        .glow-line:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
        }

        .glow-line:nth-child(2) {
            left: 40%;
            animation-delay: 2s;
        }

        .glow-line:nth-child(3) {
            left: 70%;
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

        /* Card Styling */
        .dashboard-card {
            background: #1c1c1c;
            border-radius: 12px;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .dashboard-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
        }

        /* Buttons */
        .btn-primary {
            background: #00bcd4;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            transition: transform 0.2s, background 0.2s;
        }

        .btn-primary:hover {
            background: #008c9e;
            transform: scale(1.1);
        }

        /* Fade-in Animation */
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
<body class="bg-black text-white">
    <!-- Navbar -->
    @include('navbar')

    <!-- Background Animation -->
    <div class="glow-lines">
        <div class="glow-line"></div>
        <div class="glow-line"></div>
        <div class="glow-line"></div>
    </div>

    <!-- Page Content -->
    <div class="container mx-auto my-12 px-6">
        <!-- Title Section -->
        <div class="text-center">
            <h2 class="text-3xl font-semibold text-white mb-6 fade-in">Consultation Requests</h2>
            <p class="text-xl text-gray-300 mb-4 fade-in" style="animation-delay: 0.3s;">Below are the current requests for consultations that need to be reviewed by our consultants.</p>
        </div>

        <!-- Consultant Request Section -->
        <div class="bg-gray-900 rounded-lg p-8 shadow-lg">
            <!-- Request #1 -->
            <div class="dashboard-card mb-6 fade-in" style="animation-delay: 0.5s;">
                <h3 class="text-2xl font-semibold text-blue-400 mb-3">Request #1: Security Audit Consultation</h3>
                <p class="text-lg text-gray-300 mb-2">Requested by: John Doe</p>
                <p class="text-lg text-gray-300 mb-4">Description: A complete security audit for an e-commerce website. The client needs advice on securing payment gateways and user data protection.</p>
                <button class="btn-primary">Accept Request</button>
            </div>

            <!-- Request #2 -->
            <div class="dashboard-card mb-6 fade-in" style="animation-delay: 0.7s;">
                <h3 class="text-2xl font-semibold text-blue-400 mb-3">Request #2: Data Privacy Consultation</h3>
                <p class="text-lg text-gray-300 mb-2">Requested by: Jane Smith</p>
                <p class="text-lg text-gray-300 mb-4">Description: The client is seeking advice on GDPR compliance for their newly launched online platform.</p>
                <button class="btn-primary">Accept Request</button>
            </div>

            <!-- Request #3 -->
            <div class="dashboard-card mb-6 fade-in" style="animation-delay: 0.9s;">
                <h3 class="text-2xl font-semibold text-blue-400 mb-3">Request #3: Cloud Security Consultation</h3>
                <p class="text-lg text-gray-300 mb-2">Requested by: Mike Johnson</p>
                <p class="text-lg text-gray-300 mb-4">Description: Cloud infrastructure security review. The client wants to ensure their cloud storage and services are properly secured against external threats.</p>
                <button class="btn-primary">Accept Request</button>
            </div>
        </div>

        <!-- Back Button -->
        <div class="back-btn-container mt-20">
            <a href="/dashboard" class="btn-primary py-2 px-6 rounded-xl font-semibold hover:bg-gray-600 transition-transform duration-300 ease-in-out transform hover:scale-105">
                Back to Dashboard
            </a>
        </div>
    </div>

    <!-- Footer -->
    @include('footer')
</body>
</html>
