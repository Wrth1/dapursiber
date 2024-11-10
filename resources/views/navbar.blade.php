<!--
NAH JADI CERITANYA NANTI NAVBAR INI BISA 3 GITU, ADA USER,
CONSULTANT SAMA ADMIN HARUSNYA NAVABARNYA BEDA2
-->
<?php
use App\Models\Roles;
?>
@if (Roles::role_is(auth()->user(), 'User'))
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/dashboard" class="text-gray-600 hover:text-gray-800">Home</a></li>
                {{-- <li><a href="#" class="text-gray-600 hover:text-gray-800">Profile</a></li> --}}
                <li><a href="/chat" class="text-gray-600 hover:text-gray-800">Chat</a></li>
                <li><a href="/logout" class="text-gray-600 hover:text-gray-800">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
@else
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Home</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Profile</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Settings</a></li>
                <li><a href="/logout" class="text-gray-600 hover:text-gray-800">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
@endif
