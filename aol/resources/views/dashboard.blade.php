<x-app-layout>
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <!-- Heading for Your Data -->
        <h2 class="text-2xl font-semibold text-gray-800 mt-16 mb-8 text-center">
            Your Data
        </h2>

        <ul class="grid gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 justify-center mx-auto">
            @foreach ($datas as $data)
                <li class="w-full mx-auto group sm:max-w-sm bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
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
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
