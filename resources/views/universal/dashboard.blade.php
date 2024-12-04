<?php
use App\Models\Roles;
?>
    
    @if (Roles::role_is(auth()->user(), 'User'))
    <!DOCTYPE html>
    <html lang="en">
    @include('header')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Konsultasi - Dapur Siber</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

            /* Layout for Dashboard */
            .dashboard-content {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding-top: 80px;
            }

            .cards-container {
                margin-top: 40px;
                display: grid;
                grid-template-columns: 1fr;
                gap: 20px;
                width: 100%;
                max-width: 1000px;
                padding: 0 20px;
            }

            @media (min-width: 768px) {
                .cards-container {
                    grid-template-columns: 1fr 1fr;
                }
            }
        </style>
    </head>
    <body>
        @include('navbar')
        <!-- Background Animation -->
        <div class="glow-lines">
            <div class="glow-line"></div>
            <div class="glow-line"></div>
            <div class="glow-line"></div>
        </div>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <h1 class="text-2xl font-bold fade-in">Welcome back, {{ auth()->user()->username }}</h1>
            <h1 class="text-5xl mt-11 font-bold fade-in">DAPUR SIBER</h1>
            <p class="mt-2 text-lg fade-in" style="animation-delay: 0.3s;">Your central hub for consultations and products.</p>

            <!-- Cards -->
            <div class="cards-container">
                <!-- Card 1: Ongoing Consultations -->
                <div class="dashboard-card fade-in" style="animation-delay: 0.5s;">
                    <h2 class="text-2xl font-bold mb-2">Ongoing Consultations</h2>
                    <p class="text-gray-400 mb-4">5 Active Consultations</p>
                    <a href="/consultant" class="btn-primary">View Details</a>
                </div>

                <!-- Card 2: Products -->
                <div class="dashboard-card fade-in" style="animation-delay: 0.7s;">
                    <h2 class="text-2xl font-bold mb-2">Products</h2>
                    <p class="text-gray-400 mb-4">10 New Products Added</p>
                    <a href="/product" class="btn-primary">Explore Products</a>
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>

@elseif (roles::role_is(auth()->user(), 'Consultant'))

<!DOCTYPE html>
<html lang="en">
@include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Consultant - Dapur Siber</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Background Glow */
        body {
            background: linear-gradient(135deg, #2c3e50, #34495e); /* New darker, professional colors */
            color: #ecf0f1; /* Light text color */
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
            background: linear-gradient(180deg, rgba(0, 255, 0, 0.5), rgba(0, 255, 0, 0));
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
            background: #1c2833; /* Darker background for the consultant dashboard */
            border-radius: 12px;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .dashboard-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.5); /* Green glow for hover effect */
        }

        /* Buttons */
        .btn-primary {
            background: #27ae60; /* Green for consultant actions */
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            transition: transform 0.2s, background 0.2s;
        }

        .btn-primary:hover {
            background: #2ecc71; /* Lighter green for hover */
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

        /* Layout for Dashboard */
        .dashboard-content {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 80px;
        }

        .cards-container {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            width: 100%;
            max-width: 1000px;
            padding: 0 20px;
        }

        @media (min-width: 768px) {
            .cards-container {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>
<body>
    @include('navbar')
    <!-- Background Animation -->
    <div class="glow-lines">
        <div class="glow-line"></div>
        <div class="glow-line"></div>
        <div class="glow-line"></div>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <h1 class="text-2xl font-bold fade-in">Welcome back, {{ auth()->user()->username }}</h1>
        <h1 class="text-5xl mt-11 font-bold fade-in">DAPUR SIBER</h1>
        <p class="mt-2 text-lg fade-in" style="animation-delay: 0.3s;">Manage consultations and track your projects.</p>

        <!-- Cards -->
        <div class="cards-container">
            <!-- Card 1: My Consultations -->
            <div class="dashboard-card fade-in" style="animation-delay: 0.5s;">
                <h2 class="text-2xl font-bold mb-2">My Consultations</h2>
                <p class="text-gray-400 mb-4">3 Active Consultations</p>
                <a href="/consultation_request" class="btn-primary">View Consultations</a>
            </div>
            <div class="dashboard-card fade-in" style="animation-delay: 0.5s;">
                <h2 class="text-2xl font-bold mb-2">Product</h2>
                <p class="text-gray-400 mb-4">10 New Product</p>
                <a href="/product" class="btn-primary">View Product</a>
            </div>
        </div>
    </div>

    @include('footer')
</body>
</html>

@elseif (roles::role_is(auth()->user(), 'Admin'))
<!DOCTYPE html>
<html lang="en">
@include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Consultant - Dapur Siber</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Background Glow */
        body {
            background: linear-gradient(135deg, #6e1414, #9b1c1c); /* Darker red gradient for the background */
            color: #ecf0f1; /* Light text color */
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
            background: linear-gradient(180deg, rgba(255, 0, 0, 0.5), rgba(255, 0, 0, 0));
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
            background: #1c2833; /* Dark background for cards */
            border-radius: 12px;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .dashboard-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.7); /* Darker red glow for hover effect */
        }

        /* Buttons */
        .btn-primary {
            background: #c0392b; /* Dark red button */
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            transition: transform 0.2s, background 0.2s;
        }

        .btn-primary:hover {
            background: #9b1c1c; /* Darker red on hover */
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

        /* Layout for Dashboard */
        .dashboard-content {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 80px;
        }

        .cards-container {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            width: 100%;
            max-width: 1000px;
            padding: 0 20px;
        }

        @media (min-width: 768px) {
            .cards-container {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>
<body>
    @include('navbar')
    <!-- Background Animation -->
    <div class="glow-lines">
        <div class="glow-line"></div>
        <div class="glow-line"></div>
        <div class="glow-line"></div>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <h1 class="text-2xl font-bold fade-in">Welcome back, {{ auth()->user()->username }}</h1>
        <h1 class="text-5xl mt-11 font-bold fade-in">Admin Dashboard</h1>
        <p class="mt-2 text-lg fade-in" style="animation-delay: 0.3s;">ADMIN ONLY</p>


        <div class="cards-container">
        </div>
    </div>

    @include('footer')
</body>
</html>

@endif