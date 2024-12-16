@extends('layouts.navigation')

@section('content')

    <div class="flex justify-center items-center min-h-screen bg-gray-100 font-sans">

        <div class="relative w-full max-w-lg p-8">

            <div class="absolute -inset-2 bg-gray-300 opacity-25 rounded-lg blur-2xl"></div>

            <!-- Card -->
            <div class="relative bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
                <!-- Card Heading -->
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-6 tracking-wide">
                    Data Details
                </h2>

                <!-- Image Section (Rectangle) -->
                @if ($id->photo_url)
                    <div class="flex justify-center mb-6">
                        <img src="{{ Storage::disk('s3')->url('images/' . $id->photo_url) }}" alt="Data Image"
                            class="w-full h-48 object-cover rounded-md shadow-md border border-gray-200">
                    </div>
                @endif

                <!-- Data Information -->
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-500">Title</span>
                        <span class="text-gray-800 font-semibold">{{ $id->Title }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-500">Description</span>
                        <span class="text-gray-800 font-semibold">{{ $id->Description }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-500">Location</span>
                        <span class="text-gray-800 font-semibold">{{ $id->Location }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-500">Status</span>
                        <span class="text-gray-800 font-semibold">{{ $id->Status }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-500">Difficulty Level</span>
                        <span class="text-gray-800 font-semibold">{{ $id->Tingkat_Kesulitan }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-500">Created On</span>
                        <span class="text-gray-800 font-semibold">{{ $id->Tanggal_Pembuatan }}</span>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mt-8 flex justify-center">
                    @if (Auth::check())
                        <a href="{{ route('dashboard') }}"
                            class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md">
                            Back to Dashboard
                        </a>
                    @else
                        <a href="{{ route('home.index') }}"
                            class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md">
                            Back to Homepage
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
