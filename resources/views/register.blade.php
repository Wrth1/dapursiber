<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
    <style>
        /* Instagram-like dark mode background */
        body {
            background: linear-gradient(to bottom right, rgba(38, 38, 38, 1), rgba(18, 18, 18, 1));
        }
    </style>
</head>

<body class="text-gray-300">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-gray-800 bg-opacity-90 border border-gray-700 p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-semibold text-center mb-6 text-gradient">Registration</h2>
            @include('alerts.error')
            @include('alerts.success')
            <form action="/register" method="POST" class="space-y-6">
                @csrf <!-- sanitize csrf -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-2 focus:ring-pink-600 focus:border-pink-600" required>
                </div>
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-200">Username</label>
                    <input type="text" id="username" name="username" class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-2 focus:ring-pink-600 focus:border-pink-600" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-200">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-2 focus:ring-pink-600 focus:border-pink-600" required>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-200">Re-enter Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-2 focus:ring-pink-600 focus:border-pink-600" required>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-purple-500 hover:bg-gradient-to-l text-white font-bold py-2 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-600">Register</button>
            </form>
        </div>
    </div>
</body>

</html>