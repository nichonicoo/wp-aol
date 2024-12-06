@extends('layouts.navigation')

@section('content')


        <div class="max-w-screen-xl mx-auto px-4 md:px-8">
            <!-- Heading for Your Data -->
            <h2 class="text-2xl font-semibold text-gray-800 mt-16 mb-8 text-center">

                <p>Welcome back, {{ auth()->user()->name }}!</p>
            </h2>


        </div>



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
            @foreach ($datas2 as $data)
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
                    {{$data->Tingkat_Kesulitan}}
                </td>
                @elseif ($data->Tingkat_Kesulitan == 'Susah')
                    <td class="px-6 py-4 font-semibold text-red-900 dark:text-red-500">
                        {{$data->Tingkat_Kesulitan}}
                    </td>
                @elseif ($data->Tingkat_Kesulitan == 'Normal')
                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                        {{$data->Tingkat_Kesulitan}}
                    </td>
                @elseif ($data->Tingkat_Kesulitan == 'Gampang')
                    <td class="px-6 py-4 font-semibold text-green-900 dark:text-blue-500">
                        {{$data->Tingkat_Kesulitan}}
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
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>



@endsection