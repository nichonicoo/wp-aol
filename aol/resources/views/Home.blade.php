@extends('layouts.navigation')

@section('content')


<section class="py-32">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <ul class="grid gap-x-8 gap-y-10 mt-16 sm:grid-cols-2 lg:grid-cols-3 justify-center mx-auto">
            @foreach ($datas as $data)
                <li class="w-full mx-auto group sm:max-w-sm">
                    <img src="{{ asset('storage/' . $data->photo_url) }}" loading="lazy" alt="{{ $data->Title }}" class="w-full rounded-lg" />
                    <div class="mt-3 space-y-2">
                        <span class="block text-indigo-600 text-sm">{{ \Carbon\Carbon::parse($data->created_at)->format('M d, Y') }}</span>
                        <h3 class="text-lg text-gray-800 duration-150 group-hover:text-indigo-600 font-semibold">{{ $data->Title }}</h3>
                        <p class="text-gray-600 text-sm duration-150 group-hover:text-gray-800">{{ $data->Description }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    {{ $datas->links() }}
</section>
@endsection
