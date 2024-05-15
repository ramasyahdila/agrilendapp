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
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="#">
                <i class="fa-solid fa-home ml-3 mr-3"></i>
                <span>Beranda</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('layout.Peminjaman') }}">
                <i class="fa-solid fa-file ml-3 mr-5"></i>
                <span>Peminjaman</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="#">
                <i class="fa-solid fa-file ml-3 mr-5"></i>
                <span>Pengembalian</span>
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="#">
                    <i class="fa-solid fa-bell ml-3 mr-5"></i>
                    <span>Notifikasi</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="#">
                    <i class="fa-solid fa-gear ml-3 mr-4"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <li>
                <a class="flex bg-red-400 items-center p-2 text-base font-normal text-white dark:text-white hover:bg-red-600 dark:hover:bg-red-600 group" href="#">
                <i class="fa-solid fa-arrow-right-from-bracket ml-3 mr-4"></i>
                <span>Logout</span>
                </a>
            </li>
            <li class="flex h-44"></li>
            <hr></hr>
            <li>
                <a class="flex items-center p-2 rounded-full mx-4 mt-4 bg-green-50 h-18 text-base font-normal text-white dark:text-white group" href="#">
                    <img src="{{ asset('img/Rama.jpg') }}" class="h-14 w-14 bg-cover bg-center rounded-full mr-4">
                    <div class="flex flex-col justify-top">
                        <h1 class="text-2x1 text-gray-600 font-bold">Nama Petani</h1>
                        <h2 class="text-sm text-gray-600 font-semibold">Petani</h1>
                    </div>
                </a>
                
            </li>
            </ul>
        </div>
    </aside>
    <div class="w-full h-auto flex flex-col bg-gray-50">
        <div class="px-8 flex flex-col py-4 mt-4 mr-4 ml-64 flex w-auto h-auto">
            <h1 class="text-3xl font-bold text-green-400 mb-4">Form Pengajuan Modal</h1>
            <hr class="border-b-4 border-green-400 w-auto mt-2">
        </div>
        <div class="w-auto ml-64 min-h-screen pt-3">
            <div class="p-8 w-full">
                <form action="" method="POST" style="z-index: -1;">
                    <div class="bg-green-50 rounded-xl shadow-lg">
                        @csrf
                        <h1 class="text-2xl pt-4 font-semibold justify-center flex mb-4">Silahkan isi data berikut dengan lengkap</h1>
                        <hr class="border-b-2 border-green-500 my-3">
                        <div class="px-10 py-5">
                            <div class="flex items-center mb-5">
                                <label for="name"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Nama
                                    Petani</label>
                                <p class="mr-4">:</p>
                                <input type="text" id="name" name="name" placeholder="Masukan Nama Petani"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="pekerjaan"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Pekerjaan</label>
                                <p class="mr-4">:</p>
                                <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="alamat"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Alamat</label>
                                <p class="mr-4">:</p>
                                <input type="text" id="alamat" name="alamat" placeholder="Masukan Alamat"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="poktan"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Poktan</label>
                                <p class="mr-4">:</p>
                                <input type="text" id="poktan" name="poktan" placeholder="Masukan Poktan"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="jumlah_pinjaman"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Jumlah
                                    Peminjaman</label>
                                <p class="mr-4">:</p>
                                <select id="jumlah_pinjaman" name="jumlah_pinjaman" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                    <option value="500000">500.000</option>
                                    <option value="1000000">1.000.000</option>
                                </select>
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="bunga"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Bunga</label>
                                <p class="mr-4">:</p>
                                <input type="number" id="bunga" name="bunga" placeholder="Masukan Bunga"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="jumlah_diterima"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Jumlah
                                    Diterima</label>
                                <p class="mr-4">:</p>
                                <input type="number" id="jumlah_diterima" name="jumlah_diterima"
                                    placeholder="Masukan Jumlah Diterima"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="tanggal_pinjam"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Tanggal
                                    Pinjam</label>
                                <p class="mr-4">:</p>
                                <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Masukan Tanggal Pinjam"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>

                            <div class="flex items-center mb-5">
                                <label for="tanggal_kembali"
                                    class="inline-block w-1/3 mr-5 text-left 
                                            font-bold text-gray-600">Tanggal
                                    Kembali</label>
                                <p class="mr-4">:</p>
                                <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                                    placeholder="Masukan Tanggal Kembali"
                                    class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 
                                    text-gray-600 placeholder-gray-400 shadow-md
                                    outline-none">
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-4 mb-4">
                        <button type="submit" name="submit" class="py-3 rounded-xl px-8 shadow-lg bg-green-600 text-white font-bold" href="'{{ route('layout.Peminjaman') }}'" style="z-index: 5;">Simpan</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
    
</body>
</html>