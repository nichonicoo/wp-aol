<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar -->
    <div class="top-0 py-1 lg:py-2 w-full bg-gradient-to-r from-blue-600 via-cyan-400 to-blue-800 lg:relative z-50">
        <nav class="z-10 sticky top-0 left-0 right-0 max-w-4xl xl:max-w-5xl mx-auto px-5 py-2.5 lg:border-none lg:py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <button>
                    <div class="flex items-center space-x-2">
                        <h2 class="text-white font-bold text-2xl">Jomokers</h2>
                    </div>
                </button>

                <!-- Desktop Navigation Links -->
                <div class="hidden lg:block">
                    <ul class="flex space-x-10 text-base font-bold text-white">
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="#">Our services</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="#">About</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="/OurTeam">Our Team</a>
                        </li>
                        <li
                            class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Login and Register Buttons -->
                <div class="hidden lg:flex lg:items-center gap-x-2">
                    <a href="{{ route('login') }}">
                        <button class="flex items-center justify-center rounded-md bg-white text-blue-600 px-6 py-2.5 font-semibold hover:bg-blue-100 hover:shadow-lg transition duration-200">
                            Login
                        </button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="flex items-center justify-center rounded-md bg-blue-600 text-white px-6 py-2.5 font-semibold hover:bg-blue-700 hover:shadow-lg transition duration-200">
                            Register
                        </button>
                    </a>
                </div>

                <!-- Mobile Hamburger Menu -->
                <div class="flex items-center justify-center lg:hidden">
                    <button class="focus:outline-none text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-2xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</body>
@yield('content')
</html>
