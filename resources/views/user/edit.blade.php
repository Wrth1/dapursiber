<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
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
            <h1 class="text-2xl font-bold mb-4">Edit User</h1>
            <form action="{{ route('user.update', $user->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label class="block text-gray-700">Username:</label>
                    <input type="text" name="username" value="{{ $user->username }}" required class="w-full mt-2 p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email:</label>
                    <input type="email" name="email" value="{{ $user->email }}" required class="w-full mt-2 p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Bio:</label>
                    <textarea name="bio" class="w-full mt-2 p-2 border rounded">{{ $user->bio }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Role:</label>
                    <select name="role_id" class="w-full mt-2 p-2 border rounded">
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                            {{ $role->role_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </main>

        <!-- Footer -->
        @include('footer')
    </div>
</body>
</html>