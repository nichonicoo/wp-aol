@extends('layouts.navigation')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h3 class="text-2xl font-semibold mb-4">Reports</h3>
            @foreach ($datas as $data)
                <div class="mb-4">
                    <p><strong>Index</strong> {{ $data->id }}</p>
                    <p><strong>Title:</strong> {{ $data->Title }}</p>
                    <p><strong>Description:</strong> {{ $data->Description }}</p>
                    <p><strong>Location:</strong> {{ $data->Location }}</p>
                    <p><strong>Tingkat Kesulitan:</strong> {{ $data->Tingkat_Kesulitan }}</p>
                    <p><strong>Status:</strong> {{ $data->Status }}</p>
                    <p><strong>Photo URL:</strong> <a href="{{ asset('storage/' . $data->photo_url) }}" target="_blank">{{ $data->photo_url }}</a></p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
