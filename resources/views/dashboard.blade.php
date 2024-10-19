<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-gray-600 hover:text-gray-800">Home</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800">Profile</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800">Settings</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-2">Card Title 2</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-2">Card Title 3</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white shadow mt-6">
            <div class="container mx-auto px-4 py-6 text-center text-gray-600">
                &copy; 2023 Your Company. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>