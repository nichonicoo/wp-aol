@extends('layouts.navigation')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg" style="max-width: 800px; margin: auto; border-radius: 12px; overflow: hidden;">
        <div class="row g-0">
            <!-- Content Section -->
            <div class="col-md-12">
                <div class="card-body text-center">
                    <h2 class="card-title mb-4 text-primary fw-bold" style="font-size: 2.5rem;">Data Details</h2>
                </div>
            </div>
        </div>

        <div class="row g-0">
            <!-- Image Section -->
            @if ($id->photo_url)
                <div class="col-md-4">
                    <img src="{{ Storage::disk('s3')->url('/images/' . $id->photo_url) }}"
                         class="img-fluid"
                         alt="Data Image"
                         style="height: 100%; object-fit: cover;">
                </div>
            @endif

            <!-- Data Info Section -->
            <div class="col-md-8">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Title:</strong> {{ $id->Title }}</li>
                        <li class="mb-2"><strong>Description:</strong> {{ $id->Description }}</li>
                        <li class="mb-2"><strong>Location:</strong> {{ $id->Location }}</li>
                        <li class="mb-2"><strong>Status:</strong> {{ $id->Status }}</li>
                        <li class="mb-2"><strong>Difficulty Level:</strong> {{ $id->Tingkat_Kesulitan }}</li>
                        <li class="mb-2"><strong>Created On:</strong> {{ $id->Tanggal_Pembuatan }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
   <!-- Back Button -->
<div class="text-center mt-4">
    @if (Auth::check())
        <!-- Jika sudah login -->
        <a href="{{ route('dashboard') }}"
           class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded transition duration-300">
            Back to Dashboard
        </a>
    @else
        <!-- Jika belum login -->
        <a href="{{ route('home.index') }}"
           class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded transition duration-300">
            Back to Homepage
        </a>
    @endif
</div>

</div>
@endsection
