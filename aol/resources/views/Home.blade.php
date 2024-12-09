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


<section class="py-32 bg-gray-50">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <ul class="grid gap-x-8 gap-y-12 mt-16 sm:grid-cols-2 lg:grid-cols-3 justify-center mx-auto">
            @foreach ($datas as $data)
                <li class="w-full mx-auto group sm:max-w-sm bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">

                    <!-- Tambahkan Link -->
                    <a href="{{ route('datas.details', $data->id) }}" class="block">
                        <img src="{{ Storage::disk('s3')->url('/images/' . $data->photo_url) }}" loading="lazy" alt="{{ $data->Title }}" class="w-full h-48 object-cover" />
                        <div class="p-4 space-y-3">
                            <span class="block text-indigo-500 text-xs font-medium uppercase">
                                {{ \Carbon\Carbon::parse($data->Tanggal_Pembuatan)->format('M d, Y') }}
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
    <div class="mt-8">
        {{ $datas->links() }}
    </div>
</section>
@endsection
