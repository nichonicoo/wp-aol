
@extends('layouts.navigation')

@section('content')

    <div class="relative w-full h-[400px]">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1557775311-64cec3d1296c?q=80&w=2023&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Ocean" class="absolute inset-0 w-full h-full object-cover">

        <!-- Text Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <h2 class="text-2xl md:text-4xl font-bold text-white drop-shadow-lg text-center">
                Welcome back, {{ auth()->user()->name }}!
            </h2>
        </div>
    </div>
    <div class="max-w-screen-2xl mx-auto px-4 md:px-8 mb-10">
        <h2 class="text-2xl font-semibold text-gray-600 mb-6 mt-10">
            Your Reports
        </h2>

        <div class="relative overflow-hidden border rounded-lg shadow-lg">
            <table class="w-full text-sm text-gray-700 bg-white">
                <thead class="text-xs font-medium text-white uppercase bg-blue-500 border-b">
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
                                <img src="{{ Storage::disk('s3')->url('/images/' . $data->photo_url) }}"
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
