<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
        .product-card {
            background: #1c1c1c;
            border-radius: 20px;  /* Larger border-radius for more rounded corners */
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);  /* Soft shadow for modern look */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            height: 100%;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 255, 255, 0.5);
        }

        /* Buttons */
        .btn-primary {
            background: #00bcd4;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            transition: transform 0.2s, background 0.2s;
            margin-top: auto;  /* Push button to the bottom of card */
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

        /* Main Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 0 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

    </style>
</head>
<body class="text-white min-h-screen">

    @include('navbar')

    <!-- Background Animation -->
    <div class="glow-lines">
        <div class="glow-line"></div>
        <div class="glow-line"></div>
        <div class="glow-line"></div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto py-16 relative">
        <!-- Product Header -->
        <h3 class="text-4xl font-bold text-center text-white mb-12 fade-in">
            Explore Secure Digital Products
        </h3>

        <!-- Product Grid -->
        <div class="product-grid">

            <!-- Product Card 1 -->
            <div class="product-card fade-in" style="animation-delay: 0.5s;">
                <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/300x200" alt="Product 1">
                <h4 class="mt-4 text-xl font-semibold text-gray-100">SecureVault</h4>
                <p class="text-sm text-gray-300 mt-2">Next-gen data protection technology, protecting you in a digital world.</p>
                <div class="text-teal-400 text-lg mt-4">$99.99</div>
                <a href="/product/1" class="btn-primary">View Product</a>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card fade-in" style="animation-delay: 0.7s;">
                <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/300x200" alt="Product 2">
                <h4 class="mt-4 text-xl font-semibold text-gray-100">DataLock</h4>
                <p class="text-sm text-gray-300 mt-2">A state-of-the-art encryption tool for your sensitive data.</p>
                <div class="text-teal-400 text-lg mt-4">$149.99</div>
                <a href="/product/2" class="btn-primary">View Product</a>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card fade-in" style="animation-delay: 0.9s;">
                <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/300x200" alt="Product 3">
                <h4 class="mt-4 text-xl font-semibold text-gray-100">FireWallX</h4>
                <p class="text-sm text-gray-300 mt-2">An ultra-secure firewall designed to defend your digital perimeter.</p>
                <div class="text-teal-400 text-lg mt-4">$199.99</div>
                <a href="/product/3" class="btn-primary">View Product</a>
            </div>
            
        </div>
            <div class="back-btn-container mt-20 flex justify-center">
                <a href="/dashboard" class="btn-hover bg-gray-900 text-white py-2 px-6 rounded-xl font-semibold hover:bg-gray-600 transition-transform duration-300 ease-in-out transform hover:scale-105">
                    Back to Dashboard
                </a>
            </div>
    </div>

    @include('footer')

</body>
</html>
