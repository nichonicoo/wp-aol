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
        <img src="https://images.unsplash.com/photo-1557775311-64cec3d1296c?q=80&w=2023&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
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

    <!-- Testimonials -->
<div class="overflow-hidden bg-gradient-to-r from-blue-700 to-blue-400">
    <div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <!-- Title -->
      <div class="max-w-2xl w-3/4 lg:w-1/2 mb-6 sm:mb-10 md:mb-16">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl text-white font-semibold">
          User Testimonies
        </h2>
      </div>
      <!-- End Title -->

      <!-- Grid -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card -->
        <div class="flex h-auto">
          <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
            <div class="flex-auto p-4 md:p-6">
              <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                " Website ini sangat membantu orang yang peduli dengan lingkungan namun tidak memiliki waktu karena jadwal yang padat. "
              </p>
            </div>

            <div class="p-4 bg-gray-100 rounded-b-xl md:px-7 dark:bg-neutral-800">
              <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                  <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                </div>

                <div class="grow">
                  <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                    Joko
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Mahasiswa Bina Nusantara University | Entusias Lingkungan Bersih
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex h-auto">
          <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
            <div class="flex-auto p-4 md:p-6">
              <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                " Saya mendukung sepenuhnya website ini karena ingin membantu memperbaiki lingkungan yang kotor. "
              </p>
            </div>

            <div class="p-4 bg-gray-100 rounded-b-xl md:px-7 dark:bg-neutral-800">
              <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                  <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                </div>

                <div class="grow">
                  <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                    Yeni
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Mahasiswa Bina Nusantara University | Entusias lingkungan bersih
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex h-auto">
          <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
            <div class="flex-auto p-4 md:p-6">
              <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                " Ide yang bagus karena membentuk komunitas peduli lingkungan melalui website ini. Semangat terus!!! "
              </p>
            </div>

            <div class="p-4 bg-gray-100 rounded-b-xl md:px-7 dark:bg-neutral-800">
              <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                  <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Avatar">
                </div>

                <div class="grow">
                  <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                    Siti
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Warga Jakarta | Entusias Lingkungan bersih
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Grid -->
    </div>
  </div>
  <!-- End Testimonials -->
@endsection
