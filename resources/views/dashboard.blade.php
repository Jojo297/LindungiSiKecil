<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LindungiSiKecil || Dashboard</title>
    <link rel="icon" href="{{ asset('image/logoLindungiSiKecil-removebg-preview2.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-red-300">

    @extends('layout.navbar')

    <div class="p-4 pt-[90px]">
        <div class="p-4 border-2 border-gray-200 border-dashed bg-neutral-50 rounded-lg dark:border-gray-700">

            <div class="container mx-auto px-2 pt-8">
                <h1 class="text-2xl font-sans font-bold text-gray-600 mb-6 lg:text-3xl">Selamat Datang,
                    <span class="underline underline-offset-3 decoration-8 decoration-red-400 dark:decoration-blue-600">

                        {{ Auth::user()->username }}🤞
                    </span>
                </h1>
            </div>

            {{-- card anak --}}
            <div class="flex lg:flex-row">
                <div class=" flex px-2 pt-8 truncate ">
                    <div class="carousel overflow-x-auto hide-scrollbar scroll-smooth">
                        @forelse ($childs as $child_with_age)
                            <div class="carousel-item inline-block">
                                <a href="#" class="mr-2">
                                    <div
                                        class="w-52 max-w-sm px-4 py-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 md:w-64 lg:w-72 overflow-hidden">

                                        <div class="flex items-center ">
                                            <img class="mb-3 rounded-full shadow-lg" src="{{ asset('image/man.png') }}"
                                                alt="Bonnie image" width="50" />
                                            <div class=" px-2">
                                                <p
                                                    class="text-ellipsis mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                                    {{ $child_with_age['child']->name }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex ">
                                            <span
                                                class="text-sm text-gray-500 dark:text-gray-400">{{ $child_with_age['age'] }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                {{-- card anak selesai --}}


                {{-- card tambah anak --}}
                <div class="px-2 pt-8  lg:flex-none">
                    <a href="">
                        <div
                            class="w-40 max-w-sm px-4 py-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 overflow-hidden">

                            <div class="grid justify-items-center text-gray-500 hover:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="55" fill="currentColor"
                                    class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                </svg>
                                <p class="text-ellipsis pt-2 text-sm font-medium  dark:text-white">
                                    Tambahkan Anak
                                </p>

                            </div>

                        </div>
                    </a>
                </div>
                {{-- card tambah anak selesai --}}
            </div>


            <hr class="mt-8">

            <div class="container mx-auto ">
                <div class="text-center md:text-left md:flex py-[65px] justify-evenly md:items-center lg:flex">

                    {{-- kelola jadwal imunisasi --}}
                    <a href="{{ route('user.schedule') }}"
                        class="z-0 group block max-w-xs mx-auto rounded-lg p-6 mb-8 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 transition hover:bg-red-400 duration-500 hover:ring-red-400 md:mb-0 lg:w-1/2">
                        <div class="space-x-3">
                            <div class="text-center">
                                <h5 align="center"
                                    class="mb-2 text-2xl text-center font-sans font-semibold tracking-tight text-gray-600 transition group-hover:text-white duration-500  dark:text-white">
                                    Jadwal
                                    Imunisasi</h5>
                            </div>
                        </div>
                        <img src="{{ asset('image/calendar_clock_schedule.png') }}" class=" w-full" alt="" />
                    </a>


                    {{-- kelola infomasi vaksin --}}
                    <a href="#"
                        class="group block max-w-xs mx-auto rounded-lg p-6 mb-8 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 transition hover:bg-red-400 duration-500 hover:ring-red-400 lg:mb-0 lg:w-1/2">
                        <div class="space-x-3">
                            <div class="text-center">
                                <h5 align="center"
                                    class="text-center mb-2 text-2xl font-semibold tracking-tight text-gray-600  transition group-hover:text-white duration-500  dark:text-white">
                                    Informasi Vaksin</h5>
                            </div>
                        </div>
                        <img src="{{ asset('image/informasi-vaksin.png') }}" class=" w-full" alt="" />
                    </a>

                    {{-- kelola grafik pertumbuhan anak --}}
                    <a href="#"
                        class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 transition hover:bg-red-400 duration-500 hover:ring-red-400 md:w-1/5 md:flex-none lg:w-1/2">
                        <div class="space-x-3">
                            <div class="text-center">
                                <h5 align="center"
                                    class="text-center mb-2 text-2xl font-semibold tracking-tight text-gray-600  transition group-hover:text-white duration-500  dark:text-white">
                                    Grafik Pertumbuhan anak</h5>
                            </div>
                        </div>
                        <img src="{{ asset('image/graph.png') }}" class=" w-full" alt="" />
                    </a>
                </div>
            </div>


        </div>
    </div>
    </div>
    {{-- sidebar  --}}



    @vite('resources/js/app,js')
</body>

</html>
