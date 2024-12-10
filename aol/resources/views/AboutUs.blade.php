@extends('layouts.navigation')

@section('content')

    <div class="flex flex-col min-h-screen bg-gray-100">
        <!-- Main Content -->
        <div class="flex-grow py-10 max-w-screen-lg mx-auto">
            <div class="text-center mb-16">
                <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                    Tentang<span class="text-indigo-600"> Oceanis</span>
                </h3>
                <div class="mt-8 flex">
                    <div class="w-3/4 text-justify">
                        <p>
                            Oceanis adalah sebuah tim yang berdedikasi untuk melindungi dan melestarikan lautan kita demi
                            masa depan yang lebih baik. Dengan semakin meningkatnya polusi dan kerusakan lingkungan, kami
                            berkomitmen untuk meningkatkan kesadaran dan mengambil tindakan nyata untuk mengembalikan
                            keindahan serta kesehatan laut kita.

                            Melalui inisiatif yang melibatkan masyarakat, kegiatan bersih pantai, dan edukasi lingkungan,
                            kami berupaya menciptakan dampak positif dengan menginspirasi orang untuk ikut serta dalam
                            gerakan menuju laut yang lebih bersih dan berkelanjutan. Baik itu dengan membersihkan pantai
                            atau mendorong perubahan kebijakan, kami bersatu dalam semangat untuk membuat perbedaan yang
                            bertahan lama dalam melindungi kehidupan laut.
                        </p>
                    </div>
                    <div class="w-1/5 ml-20">

                    <img src="{{ asset('img/images.png') }}" >


                    </div>
                </div>
            </div>
            <div class="text-center mt-16 mb-5">
                <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                    THE TEAM
                </p>
            </div>

            <div class="grid grid-cols-3 gap-10">
                <!-- Existing Member 1 -->
                <div class="text-center bg-white">
                    <img class="w-100"
                        src="https://media.licdn.com/dms/image/v2/C4E03AQGRnRiquV0Ang/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1631716474330?e=1738800000&v=beta&t=8shTnD2blhz5Gv7gwNDgzJWbFCdispMV2aUkZAYkTqg">
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Nicholas
                                Terrence Salim</a>
                            <p class="text-gray-500 uppercase text-sm">Web developer</p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <!-- Add Social Icons here -->
                        </div>
                    </div>
                </div>

                <!-- Existing Member 2 -->
                <div class="text-center bg-white">
                    <img class="w-100"
                        src="https://media.licdn.com/dms/image/v2/D5603AQHTmmrfpEvm0A/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1727671558552?e=1738800000&v=beta&t=7tG09JBHOXiC_BKnv3zY07845aAyEgAC4TadmZv5p8o">
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Fabio
                                Valentino William</a>
                            <p class="text-gray-500 uppercase text-sm">President & CEO</p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <!-- Add Social Icons here -->
                        </div>
                    </div>
                </div>

                <!-- New Member 1 -->
                <div class="text-center bg-white">
                    <img class="w-100"
                        src="https://media.licdn.com/dms/image/v2/D5635AQHoF2idru0Btg/profile-framedphoto-shrink_800_800/profile-framedphoto-shrink_800_800/0/1729243047848?e=1733929200&v=beta&t=QsylvOJcgbgAzKWi5CW0gtKcjmwwMPXMAIugHzMWdDk">
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Samuel
                                Theophylus Wieguna</a>
                            <p class="text-gray-500 uppercase text-sm">Role</p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <!-- Add Social Icons here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Centered Members at the Bottom -->
            <div class="flex justify-center gap-10 mt-8">
                <!-- New Member 2 -->
                <div class="text-center bg-white w-1/3">
                    <img class="w-100"
                        src="https://media.licdn.com/dms/image/v2/C4D03AQH9iYQ4PZkU8Q/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1663922813178?e=1738800000&v=beta&t=AwD11Blytnp-03SaF6rV3jvJZ_bZwT_6McW7aOqE-pc">
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Jensen
                                Ramadhaniel Putra Esene</a>
                            <p class="text-gray-500 uppercase text-sm">Yang Terhormat</p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <!-- Add Social Icons here -->
                        </div>
                    </div>
                </div>

                <!-- New Member 3 -->
                <div class="text-center bg-white w-1/3">
                    <img class="w-100"
                        src="https://media.licdn.com/dms/image/v2/D5603AQGEHcy9VBEZsg/profile-displayphoto-shrink_400_400/B56ZOvXkNnGgAg-/0/1733814012209?e=1739404800&v=beta&t=_ZHuAg7qfVtwpjzqyuukRoswT_84_qugQIzIZslhfxM">
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">Dave
                                Daniel Christian</a>
                            <p class="text-gray-500 uppercase text-sm">Role</p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <!-- Add Social Icons here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
