<footer class="bg-gradient-to-r from-gray-800 to-gray-900 text-white py-8 px-6 shadow-xl relative overflow-hidden">
    <div class="max-w-screen-xl mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <!-- Logo and Title Section -->
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ URL::to('/assets/logo.png') }}" class="w-10 h-auto">
                <span class="self-center text-2xl font-extrabold ml-5 tracking-widest whitespace-nowrap">Dapur Siber</span>
            </a>
            <!-- Tagline Section -->
            <div class="flex justify-center sm:justify-start">
                <p class="font-medium text-center sm:text-left">Empowering the digital world with cybersecurity.</p>
            </div>
        </div>
        <hr class="my-6 border-gray-700 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="mb-6 md:mb-0">
                <!-- Contact Section -->
                <h2 class="text-lg font-semibold">Reach Us:</h2>
                <p class="text-sm mt-2">
                    <a href="mailto:support@dapursiber.com" class="hover:underline transition-all duration-300 ease-in-out">✉️ support@dapursiber.com</a>
                </p>
                <p class="text-sm mt-1">
                    <a href="tel:+6281234567890" class="hover:underline transition-all duration-300 ease-in-out">📞 +62 812 3456 7890</a>
                </p>
            </div>
            <!-- Footer Text Section -->
            <div class="text-center md:text-right">
                <p class="text-sm">© 2024 Dapur Siber. All Rights Reserved.</p>
                <p class="text-sm">Cybersecurity Services | Consulting</p>
            </div>
        </div>
    </div>
    <style>
        /* Animation for Glow Effect */
        @keyframes glowing {
            0% {
                box-shadow: 0 0 10px rgba(0, 255, 255, 0.7), 0 0 20px rgba(0, 255, 255, 0.5), 0 0 30px rgba(0, 255, 255, 0.3);
            }
            50% {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.9), 0 0 40px rgba(0, 255, 255, 0.7), 0 0 60px rgba(0, 255, 255, 0.5);
            }
            100% {
                box-shadow: 0 0 10px rgba(0, 255, 255, 0.7), 0 0 20px rgba(0, 255, 255, 0.5), 0 0 30px rgba(0, 255, 255, 0.3);
            }
        }

        /* Apply animation to footer */
        footer {
            animation: glowing 3s infinite ease-in-out;
        }
    </style>
</footer>
