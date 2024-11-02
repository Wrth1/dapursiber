<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    @include('header')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        @include('navbar')

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-6">
            @include('alerts.error')
            @include('alerts.success')
            <div>
                <h1 class="text-2xl font-bold mb-2">Welcome back, {{ auth()->user()->username }}</h1>
            </div>
            @foreach ($consultationdata as $data)
                <div class="bg-white p-6 rounded-lg shadow mb-6">
                    <h2 class="text-xl font-bold mb-2">{{ $data->consultant_name }}</h2>
                    <p class="text-gray-700">{{ $data->consultation_date }}</p>
                    <a href="/chat/{{ $data->id }}">Link</a>
                </div>
            @endforeach
            <div>
                <a href="/consultant">Link Consultant</a>
            </div>
            <div>
                <a href="/product">Link Product</a>
            </div>

            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-2">Card Title 1</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-2">Card Title 2</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold mb-2">Card Title 3</h2>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
            </div> --}}
        </main>

        <!-- Footer -->
        @include('footer')
    </div>
</body>
</html>