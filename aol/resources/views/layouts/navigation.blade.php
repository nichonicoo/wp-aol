<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script> <!-- Adding Alpine.js for dropdown functionality -->
</head>
<body>
    <!-- Navbar -->
    <div class="top-0 py-1 lg:py-2 w-full bg-gradient-to-r from-blue-600 via-cyan-400 to-blue-800 lg:relative z-50">
        <nav class="z-10 sticky top-0 left-0 right-0 max-w-4xl xl:max-w-5xl mx-auto px-5 py-2.5 lg:border-none lg:py-4">
            <div class="flex items-center justify-between">

                <button>
                    <div class="flex items-center space-x-2">
                        <!-- Logo with increased size -->
                        <img src="{{ asset('img/images.png') }}" alt="Logo" class="h-12"> <!-- Adjust the height as needed -->

                        <!-- Text next to the logo -->
                        <span class="text-white text-lg font-semibold">Sandawara Group</span>
                    </div>
                </button>

                <!-- Desktop Navigation Links -->
                <div class="hidden lg:block">
                    <ul class="flex space-x-10 text-base font-bold text-white">
                        <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ Auth::check() ? route('dashboard') : route('home.index') }}">Home</a>
                        </li>
                        <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('products.create') }}">Create</a>
                        </li>
                        <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('Ourteam.index') }}">Our Team</a>
                        </li>
                        <li class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('allreports.index') }}">All Reports</a>
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
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <!-- Dropdown Menu -->
                                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md z-50">
                                    <div class="py-1">
                                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">Profile</a>
                                        @if (Auth::user()->role == 'user')
                                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">View
                                                {{Auth()->user()->name}}'s Dashboard</a>
                                            </a>

                                        @endif
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">Admin dashboard</a>

                                        @endif
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-800 hover:bg-blue-100">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Jika tidak login, tampilkan tombol Login dan Register -->
                    <div class="flex space-x-4">
                        <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md transition-transform duration-200 hover:bg-blue-700 hover:scale-105">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="px-6 py-2 bg-green-600 text-white font-semibold rounded-md shadow-md transition-transform duration-200 hover:bg-green-700 hover:scale-105">
                            Register
                        </a>
                    </div>
                    @endif
                </div>

                <!-- Mobile Hamburger Menu -->
                <div class="flex items-center justify-center lg:hidden">
                    <button @click="open = !open" class="focus:outline-none text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-2xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <!-- Responsive Navigation Menu (Hamburger Menu) -->
    <div x-data="{ open: false }" :class="{'block': open, 'hidden': !open}" class="lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ Auth::check() ? route('dashboard') : route('home.index') }}" class="block text-base font-bold text-white hover:underline">Home</a>
            <a href="{{ route('products.create') }}" class="block text-base font-bold text-white hover:underline">Create</a>
        </div>

        <!-- Profile and Logout Section for Mobile -->
        @if (Auth::check())
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <a href="{{ route('profile.edit') }}" class="block text-base font-bold text-white hover:underline">Profile</a>
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

    @yield('content')
</body>
</html>
