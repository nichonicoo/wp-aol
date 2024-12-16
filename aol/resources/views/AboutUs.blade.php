@extends('layouts.navigation')

@section('content')

    <!-- Main Container -->
    <div class="flex flex-col min-h-screen bg-gray-100 font-sans">
        <!-- Content Section -->
        <div class="flex-grow py-10 max-w-screen-lg mx-auto">
            <!-- Heading -->
            <div class="text-center mb-16">
                <h3 class="text-3xl sm:text-4xl font-extrabold tracking-wide text-gray-800">
                    Tentang <span class="text-indigo-600">Oceanis</span>
                </h3>
            </div>

            <!-- About Section -->
            <div class="flex justify-between items-start space-x-10 mb-16">
                <!-- Description -->
                <div class="w-3/4 text-justify leading-relaxed text-gray-700 text-lg">
                    <p>
                        Oceanis adalah sebuah tim yang berdedikasi untuk melindungi dan melestarikan lautan kita demi masa
                        depan yang lebih baik. Dengan semakin meningkatnya polusi dan kerusakan lingkungan, kami berkomitmen
                        untuk meningkatkan kesadaran dan mengambil tindakan nyata untuk mengembalikan keindahan serta
                        kesehatan laut kita.
                    </p>
                    <p class="mt-4">
                        Melalui inisiatif yang melibatkan masyarakat, kegiatan bersih pantai, dan edukasi lingkungan, kami
                        berupaya menciptakan dampak positif dengan menginspirasi orang untuk ikut serta dalam gerakan menuju
                        laut yang lebih bersih dan berkelanjutan. Baik itu dengan membersihkan pantai atau mendorong
                        perubahan kebijakan, kami bersatu dalam semangat untuk membuat perbedaan yang bertahan lama dalam
                        melindungi kehidupan laut.
                    </p>
                </div>

                <!-- Image -->
                <div class="w-1/4">
                    <img src="{{ asset('img/images.png') }}" alt="Oceanis"
                        class="w-full h-48 object-cover rounded-md">
                </div>
            </div>

            <!-- Team Section -->
            <div class="text-center mb-8">
                <p class="text-gray-500 uppercase text-sm font-semibold tracking-wide">THE TEAM</p>
            </div>

            <!-- Team Members Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- Member Card -->
                <div class="text-center bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
                    <img src="https://media.licdn.com/dms/image/v2/C4E03AQGRnRiquV0Ang/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1631716474330?e=1740009600&v=beta&t=omRTw0xwp63P2MHjSvj6bgLqjSYGaK2pGJ25-Lkz2J0"
                        alt="Nicholas"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <a href="#" class="text-lg font-semibold text-gray-800 hover:text-indigo-500 transition">
                            Nicholas Terrence Salim
                        </a>
                        <p class="text-gray-500 uppercase text-sm mt-1">Web Developer</p>
                    </div>
                </div>

                <!-- Member Card -->
                <div class="text-center bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
                    <img src="https://media.licdn.com/dms/image/v2/D5603AQHTmmrfpEvm0A/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1727671558533?e=1740009600&v=beta&t=7R1AFnhGdb4SWfAlNA9hvAydblrpXmDGveA1MmY4n_o"
                        alt="Fabio"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <a href="#" class="text-lg font-semibold text-gray-800 hover:text-indigo-500 transition">
                            Fabio Valentino William
                        </a>
                        <p class="text-gray-500 uppercase text-sm mt-1">President & CEO</p>
                    </div>
                </div>

                <!-- Member Card -->
                <div class="text-center bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
                    <img src="https://media.licdn.com/dms/image/v2/D5635AQHoF2idru0Btg/profile-framedphoto-shrink_400_400/profile-framedphoto-shrink_400_400/0/1729243047848?e=1734966000&v=beta&t=BOK2em7lRMaaHuMkGOETbznHHhkc60mAohK-udq2Jp8"
                        alt="Samuel"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <a href="#" class="text-lg font-semibold text-gray-800 hover:text-indigo-500 transition">
                            Samuel Theophylus Wieguna
                        </a>
                        <p class="text-gray-500 uppercase text-sm mt-1">WEB DEVELOPER</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Centered Members -->
            <div class="flex justify-center gap-8 mt-10">
                <!-- Member Card -->
                <div class="text-center bg-white rounded-lg shadow-md border border-gray-200 w-1/3 overflow-hidden">
                    <img src="https://media.licdn.com/dms/image/v2/C4D03AQH9iYQ4PZkU8Q/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1663922813178?e=1740009600&v=beta&t=V1cSwV_L5KW2tnW3uXpWxCSpOd0IyGYnKT4Hi_HWorw"
                        alt="Jensen"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <a href="#" class="text-lg font-semibold text-gray-800 hover:text-indigo-500 transition">
                            Jensen Ramadhaniel Putra Esene
                        </a>
                        <p class="text-gray-500 uppercase text-sm mt-1">Yang Terhormat</p>
                    </div>
                </div>

                <!-- Member Card -->
                <div class="text-center bg-white rounded-lg shadow-md border border-gray-200 w-1/3 overflow-hidden">
                    <img src="https://media.licdn.com/dms/image/v2/D5635AQFYPobEALbJlg/profile-framedphoto-shrink_400_400/profile-framedphoto-shrink_400_400/0/1734017245509?e=1734966000&v=beta&t=zHyNQtJnOtlhUuJzeFxINjcBv7EDm0EM6cIdSkaPZUU"
                        alt="Dave"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <a href="#" class="text-lg font-semibold text-gray-800 hover:text-indigo-500 transition">
                            Dave Daniel Christian
                        </a>
                        <p class="text-gray-500 uppercase text-sm mt-1">WEB DEVELOPER</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
