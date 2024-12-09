@extends('layouts.navigation')
@section('content')
<div class="bg-gray-100 h-screen">
    <div class="py-10 max-w-screen-lg mx-auto">
        <div class="text-center mb-16">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                THE TEAM
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Our<span class="text-indigo-600"> Team</span>
            </h3>
        </div>

        <div class="grid grid-cols-3 gap-10">
            <!-- Existing Member 1 -->
            <div class="text-center bg-white">
                <img class="w-100" src="https://images.pexels.com/photos/1587014/pexels-photo-1587014.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Nicholas Terrence Salim Mohammadi</a>
                        <p class="text-gray-500 uppercase text-sm">CEO</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <!-- Add Social Icons here -->
                    </div>
                </div>
            </div>

            <!-- Existing Member 2 -->
            <div class="text-center bg-white">
                <img class="w-100" src="https://images.pexels.com/photos/2897883/pexels-photo-2897883.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Fabio Valentino William R. Makarim</a>
                        <p class="text-gray-500 uppercase text-sm">CTO</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <!-- Add Social Icons here -->
                    </div>
                </div>
            </div>

            <!-- New Member 1 -->
            <div class="text-center bg-white">
                <img class="w-100" src="https://images.pexels.com/photos/1587014/pexels-photo-1587014.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Samuel Theophylus Wieguna</a>
                        <p class="text-gray-500 uppercase text-sm">COO</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <!-- Add Social Icons here -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Centered Members at the Bottom -->
        <div class="flex justify-center gap-10 mt-8">
            <!-- New Member 2 -->
            <div class="text-center bg-white w-1/3">
                <img class="w-100" src="https://images.pexels.com/photos/1587014/pexels-photo-1587014.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Jensen Ramadhaniel Putra Esene</a>
                        <p class="text-gray-500 uppercase text-sm">CFO</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <!-- Add Social Icons here -->
                    </div>
                </div>
            </div>

            <!-- New Member 3 -->
            <div class="text-center bg-white w-1/3">
                <img class="w-100" src="https://images.pexels.com/photos/1587014/pexels-photo-1587014.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500">
                <div class="p-4">
                    <div class="text-md">
                        <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Dave Daniel Christian</a>
                        <p class="text-gray-500 uppercase text-sm">Role</p>
                    </div>
                    <div class="my-4 flex justify-center items-center">
                        <!-- Add Social Icons here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer with Copyright -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-10">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</div>
@endsection
