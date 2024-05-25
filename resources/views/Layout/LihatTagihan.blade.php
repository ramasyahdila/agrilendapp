<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script> --}}
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
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('dashboard.petani') }}">
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
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('layout.Tagihan') }}">
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
                <a class="flex items-center p-2 rounded-full mx-4 mt-4 bg-green-50 h-18 text-base font-normal text-white dark:text-white group" href="{{ route('layout.profilpetani') }}">
                    <img src="{{ asset('img/Rama.jpg') }}" class="h-14 w-14 bg-cover bg-center rounded-full mr-4">
                    <div class="flex flex-col justify-top">
                        <h1 class="text-2x1 text-gray-600 font-bold">{{ Auth::user()->nama_petani ?? 'Nama Pengguna' }}</h1>
                        <h2 class="text-sm text-gray-600 font-semibold">Petani</h1>
                    </div>
                </a>

            </li>
            </ul>
        </div>
    </aside>
    <div class="w-full h-auto flex flex-col bg-gray-50">
        <div class="px-8 flex flex-col py-4 mt-4 mr-4 ml-64 w-auto h-auto">
            <h1 class="text-3xl font-bold text-green-400 mb-4">Pengembalian Petani</h1>
            <hr class="border-b-4 border-green-400 w-auto mt-2">
        </div>
        <div class="w-auto ml-64 min-h-screen pt-3">
            <div class="p-8 w-full">
                <form id="formTagihan" action="" method="POST" style="z-index: -1;">
                    @csrf
                    <div class="bg-green-50 rounded-xl shadow-lg">
                        <h1 class="text-2xl pt-4 font-semibold justify-center flex mb-4">Silahkan Pilih Metode Pembayaran Anda</h1>
                        <hr class="border-b-2 border-green-500 my-3">
                        <div class="px-10 py-5">
                            <!-- Input fields -->
                            <input type="hidden" name="id_tagihan" value="{{ $tagihan->id_tagihan }}" id="">
                            <div class="flex items-center mb-5">
                                <label for="nama_petani" class="inline-block w-1/3 mr-5 text-left font-bold text-gray-600">Nama Petani</label>
                                <p class="mr-4">:</p>
                                <input readonly value="{{ $tagihan->nama_petani }}" id="nama_petani" name="nama_petani" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                </input>
                            </div>
                            <div class="flex items-center mb-5">
                                <label for="alamat_petani" class="inline-block w-1/3 mr-5 text-left font-bold text-gray-600">Alamat Petani</label>
                                <p class="mr-4">:</p>
                                <input readonly value="{{ $tagihan->alamat_petani }}" id="alamat_petani" name="alamat_petani" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                </input>
                            </div>
                            <div class="flex items-center mb-5">
                                <label for="nama_poktan" class="inline-block w-1/3 mr-5 text-left font-bold text-gray-600">Nama Poktan</label>
                                <p class="mr-4">:</p>
                                <input readonly value="{{ $tagihan->nama_poktan }}" id="nama_poktan" name="nama_poktan" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                </input>
                            </div>
                            <div class="flex items-center mb-5">
                                <label for="jml_pinjam" class="inline-block w-1/3 mr-5 text-left font-bold text-gray-600">Jumlah Kembali</label>
                                <p class="mr-4">:</p>
                                <input readonly value="{{ $tagihan->jml_pinjam }}" id="jml_pinjam" name="jml_pinjam" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                </input>
                            </div>
                            <div class="flex items-center mb-5">
                                <label for="tgl_kembali" class="inline-block w-1/3 mr-5 text-left font-bold text-gray-600">Tenggat Kembali</label>
                                <p class="mr-4">:</p>
                                <input readonly value="{{ $tagihan->tgl_kembali }}" id="tgl_kembali" name="tgl_kembali" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                </input>
                            </div>
                            <div class="flex items-center mb-5">
                                <label for="id_metode_bayar" class="inline-block w-1/3 mr-5 text-left font-bold text-gray-600">Metode Bayar</label>
                                <p class="mr-4">:</p>
                                @if (isset($tagihan->id_pembayaran))
                                    <input readonly value="{{ $tagihan->metode_bayar }}" id="id_metode_bayar" name="id_metode_bayar" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                @else
                                    <select id="id_metode_bayar" name="id_metode_bayar" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                        <option selected="">Pilih metode</option>
                                        @foreach ($metode_bayar as $metode)
                                        <option value="{{ $metode->id_metode_bayar }}">{{ $metode->metode_bayar }}</option>
                                        @endforeach
                                    </select>
                                @endif
                                
                            </div>
                            <div class="flex items-center mb-5">
                                <label for="status_tagihan" class="inline-block w-1/3 mr-5 text-left font-bold text-gray-600">Status Tagihan</label>
                                <p class="mr-4">:</p>
                                <input readonly value="{{ $tagihan->status_tagihan }}" id="status_tagihan" name="status_tagihan" class="flex-1 py-2 px-2 rounded-xl focus:border-green-400 justify-between text-gray-600 placeholder-gray-400 shadow-md outline-none" >
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4 gap-4">
                        @if (isset($tagihan->id_pembayaran))
                            <div class="flex justify-end mt-4 mr-2">
                                <a href="{{ route('layout.Tagihan') }}">
                                    <button class="h-10 bg-green-400 px-10 shadow-lg font-semibold rounded-md text-white" type="button">
                                        Kembali
                                    </button>
                                </a>
                            </div>
                        @else
                            @if (now()->toDateTimeString() >= $tagihan->tgl_kembali)
                                <button onclick="tagihanSubmit(false)" class="h-10 bg-white text-red-400 border-2 border-red-400 px-10 shadow-lg font-semibold rounded-md" type="button">
                                    Tidak Bisa Bayar
                                </button>
                                <button onclick="tagihanSubmit(true)" class="h-10 bg-red-400 px-10 shadow-lg font-semibold rounded-md text-white" type="button">
                                    Bayar
                                </button>
                            @else
                                <div class="flex justify-end mt-4 mr-2">
                                    <a href="{{ route('layout.Tagihan') }}">
                                        <button class="h-10 bg-green-400 px-10 shadow-lg font-semibold rounded-md text-white" type="button">
                                            Kembali
                                        </button>
                                    </a>
                                </div>
                            @endif
                        @endif
                    </div>
                </form>


            </div>
        </div>
    </div>

<script src="{{ asset('script.js') }}"></script>
</body>
</html>
