@extends('layouts.navigation')

@section('content')


<form action="{{ route('datas.search') }}" method="GET" class="flex justify-end items-center space-x-2 mb-4 mr-2 mt-2">
    <input type="text" name="query" placeholder="Search by title"
        class="px-3 py-1 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    <button type="submit" class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700">
        Search
    </button>
</form>


<div class="relative w-full h-[400px]">
        <!-- Background Image -->
        <img src="https://images.pexels.com/photos/847393/pexels-photo-847393.jpeg"
            alt="Ocean" class="absolute inset-0 w-full h-full object-cover">

        <!-- Text Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h2 class="text-2xl md:text-4xl font-bold text-white drop-shadow-lg text-center">
                Save the ocean through Oceanis.
            </h2>
        </div>
    </div>

<section class="py-32 bg-gray-50">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <ul class="grid gap-x-8 gap-y-12 mt-0 sm:grid-cols-2 lg:grid-cols-3 justify-center mx-auto">
            @foreach ($datas2 as $data)
                <li class="w-full mx-auto group sm:max-w-sm bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Bungkus dengan Link -->
                    <a href="{{ route('datas.details', $data->id) }}" class="block">
                        <img src="{{ asset('storage/' . $data->photo_url) }}" loading="lazy" alt="{{ $data->Title }}" class="w-full h-48 object-cover" />
                        <div class="p-4 space-y-3">
                            <span class="block text-indigo-500 text-xs font-medium uppercase">
                                {{ \Carbon\Carbon::parse($data->created_at)->format('M d, Y') }}
                            </span>
                            <h3 class="text-lg text-gray-800 font-bold duration-150 group-hover:text-indigo-600">
                                {{ $data->Title }}
                            </h3>
                            <p class="text-gray-600 text-sm duration-150 group-hover:text-gray-800">
                                {{ $data->Description }}
                            </p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
