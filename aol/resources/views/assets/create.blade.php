<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">


    <!-- Centered Container -->
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">

            <!-- Form Heading -->
            <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Create a Product</h1>

            <!-- Form Start -->
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')

                {{-- id --}}

                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">

                <!-- Title Input -->
                <div class="mb-4">
                    <label for="Title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="Title" id="Title" placeholder="Enter the product title"
                        class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Description Input -->
                <div class="mb-4">
                    <label for="Description" class="block text-sm font-medium text-gray-700">Description</label>
                    <input type="text" name="Description" id="Description" placeholder="Enter product description"
                        class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Location Input -->
                <div class="mb-4">
                    <label for="Location" class="block text-sm font-medium text-gray-700">Location</label>
                    <select name="Location" id="Location"
                        class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @foreach($locations as $location)
                            <option value="{{ $location }}">{{ $location }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Difficulty Select -->
                <div class="mb-4">
                    <label for="Tingkat-Kesulitan" class="block text-sm font-medium text-gray-700">Tingkat Kesulitan</label>
                    <select name="Tingkat_Kesulitan" id="Tingkat_Kesulitan"
                        class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @foreach($tingkats as $tingkat)
                            <option value="{{ $tingkat }}">{{ $tingkat }}</option>
                        @endforeach
                    </select>
                </div>

                <input type="hidden" name="Status" value="Belum Dikerjakan">

                <!-- Status Select -->
                {{-- <div class="mb-4">
                    <label for="Status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="Status" id="Status"
                        class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @foreach($stats as $status)
                            <option value="{{ $status }}">{{ $status }}</option>
                        @endforeach
                    </select>
                </div> --}}

                {{-- <!-- Tanggal Pembuatan Input -->
                <div class="mb-4">
                    <label for="Tanggal_Pembuatan" class="block text-sm font-medium text-gray-700">Tanggal Pembuatan</label>
                    <input type="date" name="Tanggal_Pembuatan" id="Tanggal_Pembuatan"
                        class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div> --}}

                <!-- Image Upload -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                    <input type="file" name="image" id="image"
                        class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Create Forum
                    </button>
                </div>
            </form>

            <!-- Button to go back to the home page (main menu) -->
            <div class="mt-6 text-center">
                <a href="{{ Auth::check() ? route('dashboard') : route('home.index') }}" class="text-indigo-600 font-semibold hover:text-indigo-800">
                    Back to Home
                </a>
            </div>

        </div>
    </div>

</body>

</html>
