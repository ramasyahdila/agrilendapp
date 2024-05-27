<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <title>@yield('title')</title>

</head>
<body class="flex h-screen">
    <aside class="fixed top-0 left-0 w-64 h-full" aria-label="Sidenav">
        <div class="overflow-y-auto py-5 h-full bg-green-400 border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <img src="{{ asset('img/AgrilendLogo.png') }}" alt="Logo" class="w-auto h-auto">
            <hr class="mt-6 border-2 border-green-50"></hr>
            <ul class="space-y-2 mt-8 sidebar-link">
            <li>
                <a class="flex items-center p-2 text-base font-normal bg-green-800 text-white dark:text-white group" href="{{ route('dashboard.pemerintah') }}">
                <i class="fa-solid fa-home ml-3 mr-3"></i>
                <span>Beranda</span>
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('pemerintah.laporan') }}">
                    <i class="fa-solid fa-file ml-3 mr-5"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('pemerintah.poktan') }}">
                    <i class="fa-solid fa-user ml-3 mr-4"></i>
                    <span>Poktan</span>
                </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                    @csrf
                    <button type="submit" class="flex bg-red-400 items-center p-2 text-base font-normal text-white w-full dark:text-white hover:bg-red-600 dark:hover:bg-red-600 group">
                        <i class="fa-solid fa-arrow-right-from-bracket ml-3 mr-4"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
            <li class="flex h-44"></li>
            <hr></hr>
            <li>
                <a class="flex items-center p-2 rounded-full mx-4 mt-4 bg-green-50 h-18 text-base font-normal text-white dark:text-white group" href="{{ route('pemerintah.profile') }}">
                    <i class="fa-solid fa-user fa-2x ml-3 mr-4 text-green-800"></i>
                    <div class="flex flex-col justify-top">
                        <h1 class="text-2x1 text-gray-600 font-bold">{{ Auth::user()->nama_pemerintah ?? 'Nama Pengguna' }}</h1>
                        <h2 class="text-sm text-gray-600 font-semibold">Pemerintah</h1>
                    </div>
                </a>

            </li>
            </ul>
        </div>
    </aside>
    <div class="w-full h-auto flex flex-col bg-gray-50">
        <div class="px-8 flex flex-col py-4 mt-4 mr-4 ml-64 w-auto h-auto mb-2">
            <h1 class="text-3xl font-bold text-green-400 mb-4">Beranda Petani</h1>
            <hr class="border-b-4 border-green-400 w-auto mt-2">
        </div>
        <div class="px-8 py-0 mr-4 ml-64 flex w-auto h-auto">
            <div class="p-8 w-full">
                <div class="rounded-md h-48 shadow-2xl p-0 relative">
                    <img src="{{ asset('img/Container.png') }}" class="object-fill h-full w-full object-center rounded-md" alt="img">
                    <div class="absolute inset-0 flex items-center justify-left ml-8 mr-32">
                        <div>
                            <h2 class="text-2xl font-bold text-white mb-4">Welcome to Our Website</h2>
                            <h3 class="text-sm font-regular text-white">Pertanian adalah upaya kita yang paling bijaksana, karena pada akhirnya akan memberikan kontribusi terbesar terhadap kekayaan nyata, moral yang baik, dan kebahagiaan. - Thomas Jefferson.
                            </h3>
                        </div>
                    </div>
                </div>
                <hr class="my-4 border-b border-solid border-green-400">
                <div class="flex w-full space-x-8">
                    <div class="w-4/6 flex flex-col space-y-8">
                        <div class="bg-green-50 rounded-md shadow-md">
                            <div class="p-8">
                                <p class="text-center mb-4">
                                    Agrilend sebagai platform yang memudahkan petani untuk mengakses modal bagi pengembangan usaha pertanian ..
                                </p>
                                <div class="flex items-center justify-center space-x-4 text-green-500">
                                    <p class="text-center font-bold">
                                        Readmore
                                    </p>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-green-50 rounded-md shadow-md">
                            <div class="p-8">
                                <p class="text-center mb-4">
                                    Agrilend sebagai platform yang memudahkan petani untuk mengakses modal bagi pengembangan usaha pertanian ..
                                </p>
                                <div class="flex items-center justify-center space-x-4 text-green-500">
                                    <p class="text-center font-bold">
                                        Readmore
                                    </p>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative w-2/6 p-4 bg-fill bg-center z-0" style="background-image: url('{{ asset('img/Logo1x1.png') }}')">
                        <img src="{{ asset('img/Rectangle 13.png') }}" class="absolute object-top z-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.href;
            const sidebarLinks = document.querySelectorAll('.sidebar-link');

            sidebarLinks.forEach(link => {
                if (link.href === currentUrl) {
                    link.classList.add('bg-green-600', 'text-white');
                }
            });
        });
    </script>


</body>
</html>
