<?php
use App\Models\Roles;
?>
@if (Roles::role_is(auth()->user(), 'User'))
<header class="bg-gradient-to-r from-gray-800 to-gray-900 text-white shadow-xl">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-5 text-white">
        <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">DAPUR SIBER</span>
        <!-- Hamburger for mobile -->
        <button 
        data-collapse-toggle="navbar-solid-bg" 
        type="button" 
        class="inline-flex items-center justify-center w-10 h-10 rounded-lg md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
        aria-controls="navbar-solid-bg" 
        aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14" aria-hidden="true">
            <path 
            d="M1 1h15M1 7h15M1 13h15" 
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" />
        </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col mt-4 md:mt-0 md:flex-row md:space-x-8 font-medium bg-gray-50 md:bg-transparent rounded-lg md:rounded-none dark:bg-gray-800 md:dark:bg-transparent">
                <li><a href="/dashboard" class="block py-2 md:py-0 text-white hover:text-gray-400">Home</a></li>
                <li><a href="/chat" class="block py-2 md:py-0 text-white hover:text-gray-400">Chat</a></li>
                <li><a href="/logout" class="block py-2 md:py-0 text-white hover:text-gray-400">Logout</a></li>
            </ul>
        </div>
    </div>
</header>
@elseif (Roles::role_is(auth()->user(), 'Consultant'))
<header class="bg-gradient-to-r from-blue-400 via-grey-400 to-gray-900 text-white shadow-xl">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-5 text-white">
        <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">DAPUR SIBER</span>
        <!-- Hamburger for mobile -->
        <button 
        data-collapse-toggle="header-navigation" 
        type="button" 
        class="inline-flex items-center justify-center w-10 h-10 rounded-lg md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
        aria-controls="header-navigation" 
        aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14" aria-hidden="true">
            <path 
            d="M1 1h15M1 7h15M1 13h15" 
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" />
        </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="header-navigation">
            <ul class="flex flex-col mt-4 md:mt-0 md:flex-row md:space-x-8 font-medium bg-gray-50 md:bg-transparent rounded-lg md:rounded-none dark:bg-gray-800 md:dark:bg-transparent">
                <li><a href="/dashboard" class="block py-2 md:py-0 text-white hover:text-gray-400">Home</a></li>
                <li><a href="/chat" class="block py-2 md:py-0 text-white hover:text-gray-400">Chat</a></li>
                <li><a href="/logout" class="block py-2 md:py-0 text-white hover:text-gray-400">Logout</a></li>
            </ul>
        </div>
    </div>
</header>
@elseif (Roles::role_is(auth()->user(), 'Admin'))
<header class="bg-gradient-to-r from-blue-900 via-grey-900 to-red-900 text-white shadow-xl">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-5 text-white">
        <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">DAPUR SIBER</span>
        <!-- Hamburger for mobile -->
        <button 
        data-collapse-toggle="header-navigation" 
        type="button" 
        class="inline-flex items-center justify-center w-10 h-10 rounded-lg md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
        aria-controls="header-navigation" 
        aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14" aria-hidden="true">
            <path 
            d="M1 1h15M1 7h15M1 13h15" 
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" />
        </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="header-navigation">
            <ul class="flex flex-col mt-4 md:mt-0 md:flex-row md:space-x-8 font-medium bg-gray-50 md:bg-transparent rounded-lg md:rounded-none dark:bg-gray-800 md:dark:bg-transparent">
                <li><a href="/dashboard" class="block py-2 md:py-0 text-white hover:text-gray-400">Home</a></li>
                <li><a href="/chat" class="block py-2 md:py-0 text-white hover:text-gray-400">Chat</a></li>
                <li><a href="/logout" class="block py-2 md:py-0 text-white hover:text-gray-400">Logout</a></li>
            </ul>
        </div>
    </div>
</header>
@else
<header class="bg-gradient-to-r from-gray-800 to-gray-900 text-white shadow-xl">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-5 text-white">
        <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">DAPUR SIBER</span>
        <!-- Hamburger for mobile -->
        <button 
        data-collapse-toggle="header-navigation" 
        type="button" 
        class="inline-flex items-center justify-center w-10 h-10 rounded-lg md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
        aria-controls="header-navigation" 
        aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14" aria-hidden="true">
            <path 
            d="M1 1h15M1 7h15M1 13h15" 
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" />
        </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="header-navigation">
            <ul class="flex flex-col mt-4 md:mt-0 md:flex-row md:space-x-8 font-medium bg-gray-50 md:bg-transparent rounded-lg md:rounded-none dark:bg-gray-800 md:dark:bg-transparent">
                <li><a href="#" class="block py-2 md:py-0 text-white hover:text-gray-400">Home</a></li>
                <li><a href="/login" class="block py-2 md:py-0 text-white hover:text-gray-400">Login</a></li>
            </ul>
        </div>
    </div>
</header>
@endif
