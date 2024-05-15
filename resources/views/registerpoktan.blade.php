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
<body class="flex flex-col h-screen">
    <header class="fixed h-16 w-full bg-white shadow-lg z-10">
        <div class="mx-4 h-full flex justify-between p-2">
            <img src="{{ asset('img/AgrilendLogo.png') }}" alt="Logo" class="w-auto h-auto">
        </div>
    </header>
    <div class="flex h-auto z-0 pt-16">
        <div class="w-1/3 h-full bg-cover bg-center" style="background-image: url(img/LoginPage.jpg)"></div>
        <div class="w-2/3 flex h-full items-center justify-center bg-green-400">
            <!-- Gambar kanan bawah -->
            <div class="absolute -bottom-96 right-0 z-0">
                <img src="img/Daun.png" alt="Gambar Kanan Bawah" class="w-80h-80">
            </div>
            <div class="w-2/3 bg-transparent p-8 m-auto rounded-lg z-10">
                <h2 class="text-4xl font-bold mb-4 text-center text-white mb-8">Silahkan isi form registrasi berikut</h2>
                <hr class="border-2 border-white mb-8"></hr>
                <form action="" method="post" class="flex flex-col items-center">
                    <a href="#" class="bg-transparent border-dashed border-4 border-white rounded-md w-80 h-40 mb-8 flex flex-col items-center justify-center">
                        <i class="fas fa-image text-4xl mb-2 text-white"></i>
                        <span class="text-white">Upload Foto Anda</span>
                    </a>
                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">Username Poktan</label>
                        <input type="text" id="nama_poktan" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis Nama Poktan Anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">Nama Poktan</label>
                        <input type="text" id="nama_poktan" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis Nama Poktan Anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="alamat_poktan" class="block text-white font-bold mb-2">Alamat Poktan</label>
                        <input type="text" id="alamat_poktan" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis alammat anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">No. Telepon</label>
                        <input type="int" id="no_telp" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis nomor telepon anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">Nama Desa</label>
                        <select id="id_kota" name="id_kota" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Pilih Kota</option>
                            @foreach($data_desa as $desa)
                                <option value="{{ $desa->id_desa }}">{{ $desa->desa }}</option> <!-- Ubah sesuai dengan struktur kolom tabel -->
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">Nama Pemerintah</label>
                        <input type="int" id="no_telp" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis nomor telepon anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">Password</label>
                        <input type="password" id="password" class="shadow-lg appearance-none border mb-8 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan password">
                    </div>

                    <div class="flex">
                        <div class="flex space-x-4 justify-between ">
                            <a class="w-72 bg-red-600 hover:bg-blue-green text-center text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-lg"
                            type="button" href="{{ route('landingpage') }}">
                                Batal
                            </a>
                            <a class="w-72 bg-green-600 hover:bg-blue-green text-center text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-lg"
                            type="button" href="{{ route('poktan.sidebarpoktan') }}">
                                Masuk
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
