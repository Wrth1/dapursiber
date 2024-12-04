<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail - Cyber Galaxy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Background Glow Animation */
        @keyframes backgroundFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .bg-space {
            background: url('https://via.placeholder.com/1500x1000/0a0a0a/FFFFFF?text=Space+Background') no-repeat center center fixed;
            background-size: cover;
            background-color: #000;
            background-blend-mode: darken;
            animation: backgroundFlow 5s ease infinite;
        }

        /* Glowing Effect for Text */
        .glow-effect:hover {
            text-shadow: 0 0 15px rgba(0, 255, 255, 0.8), 0 0 25px rgba(0, 255, 255, 0.6);
            color: #00FFFF;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Glowing Lines Animation */
        @keyframes glow {
            0% {
                transform: translateY(100%);
            }

            100% {
                transform: translateY(-100%);
            }
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

        /* Hover Scale for Card */
        .card-hover:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(0, 255, 255, 0.7);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Button Hover Animation */
        .btn-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-hover:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.7);
        }

        /* Back to Product List Button Position */
        .back-btn-container {
            margin-top: 20px;
            padding-left: 20px;
        }
    </style>
</head>

<body class="bg-space text-white font-sans">
    <!-- Background Animation -->
    <div class="glow-lines">
        <div class="glow-line"></div>
        <div class="glow-line"></div>
        <div class="glow-line"></div>
    </div>

    @include('navbar')

    <!-- Back to Product List Button Positioned Below Navbar -->
    <div class="back-btn-container">
        <a href="/product" class="btn-hover bg-gray-900 text-white py-2 px-6 rounded-xl font-semibold hover:bg-gray-600 transition-transform duration-300 ease-in-out transform hover:scale-105">
            Back to Product List
        </a>
    </div>

    <!-- Product Detail Section -->
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
        <!-- Product Image -->
        <div class="product-image card-hover bg-gray-800 rounded-2xl overflow-hidden shadow-lg">
            <img src="https://via.placeholder.com/600x600/ff6347/ffffff?text=Product+Image" alt="Product Image" class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105">
        </div>

        <!-- Product Info -->
        <div class="product-info space-y-6">
            <h2 class="text-4xl font-semibold glow-effect">CyberGuard X-5000</h2>
            <p class="text-lg text-gray-400">The ultimate cybersecurity solution for businesses and gamers alike. With cutting-edge encryption and security protocols, the CyberGuard X-5000 ensures maximum protection for your digital world.</p>

            <div class="text-xl text-cyan-400">
                <strong>Price: </strong>$499.99
            </div>

            <div>
                <strong>Features:</strong>
                <ul class="list-disc pl-6 text-lg text-gray-400">
                    <li>Advanced AI-powered cybersecurity protocols</li>
                    <li>Seamless integration with cloud platforms</li>
                    <li>Real-time threat detection & protection</li>
                    <li>Military-grade encryption for sensitive data</li>
                    <li>Customizable security settings for personal or business use</li>
                </ul>
            </div>

            <!-- Add to Cart Button -->
            <button class="btn-hover bg-cyan-500 text-white py-2 px-6 rounded-xl font-semibold hover:bg-cyan-600 transition-transform duration-300 ease-in-out transform hover:scale-105">
                Add to Cart
            </button>
        </div>
    </div>

    @include('footer')

</body>

</html>
