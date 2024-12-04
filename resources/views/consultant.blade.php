<?php
use App\Models\Roles;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consultant</title>
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

        /* Heading Animations */
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


    <!-- Main Content -->
    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-10">
        <h1 class="text-5xl font-bold fade-in">Meet Our Expert Consultants</h1>
        <p class="mt-2 text-lg fade-in" style="animation-delay: 0.3s;">Our consultants are here to guide you through your cyber defense journey.</p>

        <!-- Consultant Cards -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-4xl px-6">
            <!-- Consultant Card 1 -->
            <div class="dashboard-card fade-in" style="animation-delay: 0.5s;">
                <h2 class="text-2xl font-bold mb-2">Kenzie "El Sapu Jagat" Nabeel</h2>
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Consultant Image" class="w-24 h-24 rounded-full border-4 border-blue-400">
                </div>
                <p class="text-gray-400 mb-4">Cybersecurity Specialist</p>

                <!-- Hardcoded Expertise -->
                <div class="flex flex-wrap justify-center gap-2 mb-4">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Network Security
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Penetration Testing
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Malware Analysis
                    </span>
                </div>

                <!-- Book Button -->
                <form action="/book_consultation" method="POST" class="w-full">
                    @csrf
                    <input type="hidden" name="consultant_id" value="1">
                    <button type="submit" class="btn-primary w-full hover:bg-blue-600 transition-all">
                        Book Now
                    </button>
                </form>
            </div>

            <!-- Consultant Card 2 -->
            <div class="dashboard-card fade-in" style="animation-delay: 0.7s;">
                <h2 class="text-2xl font-bold mb-2">Jacky Suwandy</h2>
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Consultant Image" class="w-24 h-24 rounded-full border-4 border-blue-400">
                </div>
                <p class="text-gray-400 mb-4">Cloud Security Expert</p>

                <!-- Hardcoded Expertise -->
                <div class="flex flex-wrap justify-center gap-2 mb-4">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Cloud Security
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Encryption
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Risk Management
                    </span>
                </div>

                <!-- Book Button -->
                <form action="/book_consultation" method="POST" class="w-full">
                    @csrf
                    <input type="hidden" name="consultant_id" value="2">
                    <button type="submit" class="btn-primary w-full hover:bg-blue-600 transition-all">
                        Book Now
                    </button>
                </form>
            </div>

            <!-- Consultant Card 3 -->
            <div class="dashboard-card fade-in" style="animation-delay: 0.9s;">
                <h2 class="text-2xl font-bold mb-2">Bill Elim</h2>
                <div class="mb-4">
                    <img src="https://via.placeholder.com/150" alt="Consultant Image" class="w-24 h-24 rounded-full border-4 border-blue-400">
                </div>
                <p class="text-gray-400 mb-4">Blockchain Security Expert</p>

                <!-- Hardcoded Expertise -->
                <div class="flex flex-wrap justify-center gap-2 mb-4">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Blockchain
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Smart Contracts
                    </span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Cryptography
                    </span>
                </div>

                <!-- Book Button -->
                <form action="/book_consultation" method="POST" class="w-full">
                    @csrf
                    <input type="hidden" name="consultant_id" value="3">
                    <button type="submit" class="btn-primary w-full hover:bg-blue-600 transition-all">
                        Book Now
                    </button>
                </form>
            </div>
        </div>

        <div class="back-btn-container mt-20">
            <a href="/dashboard" class="btn-hover bg-gray-900 text-white py-2 px-6 rounded-xl font-semibold hover:bg-gray-600 transition-transform duration-300 ease-in-out transform hover:scale-105">
                Back to Dashboard
            </a>
        </div>

    </div>

    <!-- Footer -->
    @include('footer')
</body>
</html>
