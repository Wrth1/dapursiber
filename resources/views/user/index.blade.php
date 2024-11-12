<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
    @include('header')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        @include('navbar')

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-6">
            @include('alerts.error')
            @include('alerts.success')
            <h1 class="text-2xl font-bold mb-4">User List</h1>
            @foreach($users as $user)
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-xl font-bold mb-2">{{ $user->username }}</h2>
                <p class="text-gray-700">Email: {{ $user->email }}</p>
                <p class="text-gray-700">Role: {{ $user->role->role_name }}</p>
                <div class="flex space-x-4 mt-4">
                    <a href="{{ route('user.edit', $user->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </main>

        <!-- Footer -->
        @include('footer')
    </div>
</body>
</html>
