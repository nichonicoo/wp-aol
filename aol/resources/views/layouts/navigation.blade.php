<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oceanis</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script> <!-- Adding Alpine.js for dropdown functionality -->
</head>

<body>
    <!-- Navbar -->
    <div class="top-0 py-1 lg:py-2 w-full bg-gradient-to-r from-indigo-800 via-blue-500 to-cyan-300 lg:relative z-50">
        <nav class="z-10 sticky top-0 left-0 right-0 max-w-4xl xl:max-w-5xl mx-auto px-5 py-2.5 lg:border-none lg:py-4">
            <div class="flex items-center justify-between">

                <button>
                    <div class="flex items-center space-x-2">
                        <!-- Logo with increased size -->
                        <img src="{{ asset('img/image.png') }}" alt="Logo" class="h-12">
                        <!-- Adjust the height as needed -->

                        <!-- Text next to the logo -->
                        <span class="text-white text-lg font-semibold">Oceanis</span>
                    </div>
                </button>

                <!-- Desktop Navigation Links -->
                <div class="hidden lg:block">
                    <ul class="flex space-x-10 text-base font-bold text-white">
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ Auth::check() ? route('dashboard') : route('home.index') }}">Home</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('products.create') }}">Create</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('allreports.index') }}">All Reports</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('donate.process') }}">Donations</a>
                        </li>
                    </ul>
                </div>


                <!-- User Profile and Logout (if logged in) -->
                <div class="hidden lg:flex lg:items-center gap-x-2">
                    @if (Auth::check())
                        <!-- Display "You are logged in" and user's name -->
                        <div class="relative">
                            <span class="text-white text-sm">You are logged in</span>

                            <!-- Dropdown Button with Alpine.js for toggling -->
                            <div x-data="{ open: false }" class="relative">
                                <button @click="open = !open" class="flex items-center text-white font-semibold mt-2">
                                    <!-- User's name and Dropdown Arrow -->
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <!-- Dropdown Menu -->
                                <div x-show="open" @click.away="open = false"
                                    class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md z-50">
                                    <div class="py-1">
                                        <a href="{{ route('profile.edit') }}"
                                            class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">Profile</a>
                                        @if (Auth::user()->role == 'user')
                                            <a href="{{ route('dashboard') }}"
                                                class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">View
                                                {{ Auth()->user()->name }}'s Dashboard</a>
                                            </a>
                                        @endif
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ route('admin.dashboard') }}"
                                                class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">Admin
                                                dashboard</a>
                                        @endif
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="block w-full text-left px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Jika tidak login, tampilkan tombol Login dan Register -->
                        <div class="flex space-x-4">
                            <a href="{{ route('login') }}"
                                class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md transition-transform duration-200 hover:bg-blue-700 hover:scale-105">
                                Login
                            </a>
                            <a href="{{ route('register') }}"
                                class="px-6 py-2 bg-green-600 text-white font-semibold rounded-md shadow-md transition-transform duration-200 hover:bg-green-700 hover:scale-105">
                                Register
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Mobile Hamburger Menu -->
                <div class="flex items-center justify-center lg:hidden">
                    <button @click="open = !open" class="focus:outline-none text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                            aria-hidden="true" class="text-2xl" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <!-- Responsive Navigation Menu (Hamburger Menu) -->
    <div x-data="{ open: false }" :class="{ 'block': open, 'hidden': !open }" class="lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ Auth::check() ? route('dashboard') : route('home.index') }}"
                class="block text-base font-bold text-white hover:underline">Home</a>
            <a href="{{ route('products.create') }}"
                class="block text-base font-bold text-white hover:underline">Create</a>
        </div>

        <!-- Profile and Logout Section for Mobile -->
        @if (Auth::check())
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <a href="{{ route('profile.edit') }}"
                        class="block text-base font-bold text-white hover:underline">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block text-base font-bold text-white hover:underline">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @endif
    </div>

    <div class="flex flex-col min-h-screen">
        <!-- Konten Utama -->
        <main class="flex-1">
            @yield('content')
        </main>
    </div>

    @yield('scripts')

    {{-- @yield('content') --}}
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 grid grid-cols-1 md">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Section 1: Brand -->
            <div class="flex flex-col items-center md:items-start">
                <h2 class="text-2xl font-bold mb-2">Oceanis</h2>
                <p class="text-gray-400 text-sm">Save the Ocean through Oceanis.</p>
            </div>

            <!-- Section 2: Links -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-xl font-semibold mb-2">Quick Links</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ Auth::check() ? route('dashboard') : route('home.index') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('aboutUs', ['id'=>1]) }}" class="hover:text-white">About Us</a></li>
                    <li><a href="{{ route('contact', ['id'=>1]) }}" class="hover:text-white">Contact</a></li>
                    <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Section 3: Social Media -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-xl font-semibold mb-2">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M22 4.01a9.985 9.985 0 0 1-2.883.79A4.95 4.95 0 0 0 21.447 2.4a9.91 9.91 0 0 1-3.14 1.2A4.928 4.928 0 0 0 15.2.75a4.92 4.92 0 0 0-4.92 4.92c0 .38.04.75.12 1.1A13.97 13.97 0 0 1 2.62 2.1a4.928 4.928 0 0 0-.67 2.48 4.92 4.92 0 0 0 2.19 4.1 4.91 4.91 0 0 1-2.23-.62v.06c0 2.3 1.63 4.22 3.78 4.66a4.925 4.925 0 0 1-2.22.08 4.94 4.94 0 0 0 4.6 3.43A9.875 9.875 0 0 1 1 19.55a13.94 13.94 0 0 0 7.55 2.22c9.06 0 14.02-7.5 14.02-14.02 0-.21-.01-.42-.02-.62A10.005 10.005 0 0 0 22 4.01Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.94 3.61 9.04 8.32 9.84v-6.95h-2.5v-2.89h2.5v-2.2c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.55v1.88h2.78l-.44 2.89h-2.34v6.95c4.71-.8 8.32-4.9 8.32-9.84 0-5.5-4.46-9.96-9.96-9.96Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 4.56c-.89.4-1.85.67-2.85.79a4.94 4.94 0 0 0 2.16-2.72 9.91 9.91 0 0 1-3.12 1.2 4.922 4.922 0 0 0-8.38 4.49 13.97 13.97 0 0 1-10.14-5.14 4.922 4.922 0 0 0 1.52 6.56 4.91 4.91 0 0 1-2.23-.62v.06c0 2.3 1.63 4.22 3.78 4.66a4.925 4.925 0 0 1-2.22.08 4.94 4.94 0 0 0 4.6 3.43A9.88 9.88 0 0 1 1 19.55a13.94 13.94 0 0 0 7.55 2.22c9.06 0 14.02-7.5 14.02-14.02 0-.21-.01-.42-.02-.62A10.005 10.005 0 0 0 24 4.56Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8 text-gray-500 text-sm">
            &copy; 2024 Oceanis. All rights reserved.
        </div>
    </footer>

</body>

</html>
