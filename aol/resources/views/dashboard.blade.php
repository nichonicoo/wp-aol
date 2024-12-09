{{-- <x-app-layout>
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <!-- Heading for Your Data -->
        <h2 class="text-2xl font-semibold text-gray-800 mt-16 mb-8 text-center">
            Welcome Back {{ auth()->user()->name }}!
        </h2>

        <h2 class="text-2xl font-semibold text-gray-800 mt-16 mb-8 text-left">
            Your reports!
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
</x-app-layout> --}}

@extends('layouts.navigation')

@section('content')
    {{-- <div class="max-w-screen-xl mx-auto px-4 md:px-8">
            <!-- Heading for Your Data -->
            <h2 class="text-2xl font-semibold text-gray-800 mt-16 mb-8 text-center">

                <p>Welcome back, {{ auth()->user()->name }}!</p>
            </h2>
            <h2 class="text-2xl font-semibold text-gray-800 mt-16 mb-8 text-left">
                Your reports!
            </h2>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tingkat Kesulitan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Submit
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">


                            <td class="p-4">
                                <img src="{{ asset('storage/' . $data->photo_url) }}"" class="w-30 h-40 max-w-full max-h-full " alt="Apple Watch">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $data->Title }}
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{ $data->Description }}
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                               {{$data->Location}}
                            </td>

                            @if ($data->Tingkat_Kesulitan == 'Sangat Susah')
                            <td class="px-6 py-4 font-semibold text-red-900 dark:text-red-500">
                                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3">
                                    <span class="flex w-2.5 h-2.5 bg-red-500 rounded-full me-1.5 flex-shrink-0">
                                </span>
                                    {{$data->Tingkat_Kesulitan}}
                                </span>
                            </td>
                            @elseif ($data->Tingkat_Kesulitan == 'Susah')
                            <td class="px-6 py-4 font-semibold text-red-900 dark:text-red-500">
                                    <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3">
                                        <span class="flex w-2.5 h-2.5 bg-red-500 rounded-full me-1.5 flex-shrink-0">
                                    </span>
                                        {{$data->Tingkat_Kesulitan}}
                                    </span>
                                </td>
                            @elseif ($data->Tingkat_Kesulitan == 'Normal')
                                <td class="px-6 py-4 font-semibold text-green-900 dark:text-blue-500">
                                    <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3">
                                        <span class="flex w-2.5 h-2.5 bg-gray-500 rounded-full me-1.5 flex-shrink-0">
                                    </span>
                                        {{$data->Tingkat_Kesulitan}}
                                    </span>
                                </td>
                            @elseif ($data->Tingkat_Kesulitan == 'Gampang')
                                <td class="px-6 py-4 font-semibold text-green-900 dark:text-blue-500">
                                    <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3">
                                        <span class="flex w-2.5 h-2.5 bg-green-500 rounded-full me-1.5 flex-shrink-0">
                                    </span>
                                        {{$data->Tingkat_Kesulitan}}
                                    </span>
                                </td>
                            @endif

                            @if ($data->Status == 'Belum Dikerjakan')
                                <td class="px-6 py-4 font-semibold text-red-900 dark:text-red-500">
                                    {{$data->Status}}
                            </td>

                            @elseif ($data->Status == 'Sedang Di Diskusikan')
                                <td class="px-6 py-4 font-semibold text-red-900 dark:text-red-500">
                                    {{$data->Status}}
                            </td>
                            @elseif ($data->Status == 'Sedang Dikerjakan')
                                <td class="px-6 py-4 font-semibold text-green-900 dark:text-blue-500">
                                    {{$data->Status}}
                            </td>

                            @elseif ($data->Status == 'Sudah Selesai')
                                <td class="px-6 py-4 font-semibold text-blue-600 dark:text-blue-500">
                                    {{$data->Status}}
                            </td>
                            @endif


                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                {{$data->Tanggal_Pembuatan}}
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{ route('user_datas.edit', ['id' => $data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                <form action="{{ route('user_datas.delete', ['id'=>$data->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete </button>
                                </form>

                                <a href="{{ route('datas.details', ['id' => $data->id]) }}"
                                    class="font-medium text-green-600 dark:text-green-500 hover:underline">
                                    Details
                                 </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div> --}}
    <div class="relative w-full h-[400px]">
        <!-- Background Image -->
        <img src="https://plus.unsplash.com/premium_photo-1666286163385-abe05f0326c4?q=80&w=1975&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Ocean" class="absolute inset-0 w-full h-full object-cover">

        <!-- Text Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h2 class="text-2xl md:text-4xl font-bold text-white drop-shadow-lg text-center">
                Welcome back, {{ auth()->user()->name }}!
            </h2>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <h2 class="text-2xl font-semibold text-gray-600 mb-6 mt-10">
            Your Reports
        </h2>

        <div class="relative overflow-hidden border rounded-lg shadow-lg">
            <table class="w-full text-sm text-gray-700 bg-white">
                <thead class="text-xs font-medium text-gray-600 uppercase bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-4 text-left">Image</th>
                        <th class="px-6 py-4 text-left">Title</th>
                        <th class="px-6 py-4 text-left">Description</th>
                        <th class="px-6 py-4 text-left">Location</th>
                        <th class="px-6 py-4 text-left">Difficulty</th>
                        <th class="px-6 py-4 text-left">Status</th>
                        <th class="px-6 py-4 text-left">Submitted At</th>
                        <th class="px-6 py-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">
                                <img src="{{ asset('storage/' . $data->photo_url) }}"
                                    class="w-20 h-20 object-cover rounded-lg" alt="Image">
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $data->Title }}</td>
                            <td class="px-6 py-4">{{ Str::limit($data->Description, 50) }}</td>
                            <td class="px-6 py-4">{{ $data->Location }}</td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium text-white rounded-full
                                    {{ $data->Tingkat_Kesulitan == 'Sangat Susah'
                                    ? 'bg-red-600'
                                    : ($data->Tingkat_Kesulitan == 'Susah'
                                        ? 'bg-orange-500'
                                        : ($data->Tingkat_Kesulitan == 'Normal'
                                            ? 'bg-gray-500'
                                            : 'bg-green-500')) }}">
                                    {{ $data->Tingkat_Kesulitan }}
                                </span>

                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium text-white rounded-full
                                    {{ $data->Status == 'Belum Dikerjakan'
                                        ? 'bg-red-500'
                                        : ($data->Status == 'Sedang Dikerjakan'
                                            ? 'bg-blue-500'
                                            : 'bg-green-500') }}">
                                    {{ $data->Status }}
                                </span>
                            </td>
                            <td class="px-6 py-4">{{ $data->Tanggal_Pembuatan }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('user_datas.edit', ['id' => $data->id]) }}"
                                    class="text-blue-600 hover:underline">
                                    Edit
                                </a>
                                <form action="{{ route('user_datas.delete', ['id' => $data->id]) }}" method="post"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                                <a href="{{ route('datas.details', ['id' => $data->id]) }}"
                                    class="text-green-600 hover:underline">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
