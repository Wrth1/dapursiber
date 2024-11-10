<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consultant</title>
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
            @foreach ($consultantdata as $data)
                <div class="bg-white p-6 rounded-lg shadow mb-6">
                    {{-- <!-- <h2 class="text-xl font-bold mb-2">{{ $data->consultant_name }}</h2> --> --}}
                    <h2 class="text-xl font-bold mb-2">{{ $data->consultant_name }}</h2>
                    <form action="/book_consultation" method="POST">
                        @csrf
                        <input type="hidden" name="consultant_id" value="{{ $data->id }}">
                        <button type="submit">Book</button>
                      </form>
                </div>
            @endforeach
        </main>

        <!-- Footer -->
        @include('footer')
    </div>

</body>
</html>