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
            <div class="absolute -bottom-20 right-0 z-0">
                <img src="img/Daun.png" alt="Gambar Kanan Bawah" class="w-80h-80">
            </div>
            <div class="w-2/3 bg-transparent p-8 m-auto rounded-lg z-10">
                <h2 class="text-4xl font-bold mb-4 text-center text-white mb-8">Silahkan isi form registrasi berikut</h2>
                <hr class="border-2 border-white mb-8"></hr>
                <form action="{{ route('petani.store') }}" method="post" class="flex flex-col items-center" enctype="multipart/form-data">
                    @csrf <!-- Token CSRF -->
                    <!-- Input Foto -->
                    <div class="mb-4 w-full">
                        <label for="foto" class="block text-white font-bold mb-2">Upload Foto</label>
                        <input type="file" id="foto" name="foto" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4 w-full">
                        <label for="email" class="block text-white font-bold mb-2">Nama</label>
                        <input type="text" id="nama_petani" name="nama_petani" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis Nama Anda">
                    </div>

                    <!-- Input Username -->
                    <div class="mb-4 w-full">
                        <label for="username_petani" class="block text-white font-bold mb-2">Username</label>
                        <input type="text" id="username_petani" name="username_petani" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan username" required>
                    </div>

                    
                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">Tempat, Tanggal Lahir</label>
                        <input type="date" id="ttl_petani" name="ttl_petani" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Pilih Tanggal Lahir Anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="nik" class="block text-white font-bold mb-2">NIK</label>
                        <input type="text" id="nik" name="nik" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis NIK anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="pekerjaan" class="block text-white font-bold mb-2">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis pekerjaan anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="alamat_petani" class="block text-white font-bold mb-2">Alamat Petani</label>
                        <input type="text" id="alamat_petani" name="alamat_petani" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis alamat anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="no_telp" class="block text-white font-bold mb-2">No. Telepon</label>
                        <input type="text" id="no_telp" name="no_telp" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis nomor telepon anda">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="id_desa" class="block text-white font-bold mb-2">Nama Desa</label>
                        <select id="id_desa" name="id_desa" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Pilih Desa</option>
                            @foreach($data_desa as $desa)
                                <option value="{{ $desa->id_desa }}">{{ $desa->desa }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="id_poktan" class="block text-white font-bold mb-2">Nama Poktan</label>
                        <select id="id_poktan" name="id_poktan" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus                        :outline-none focus:shadow-outline">
                            <option value="">Pilih Poktan</option>
                            @foreach($data_poktan as $poktan)
                                <option value="{{ $poktan->id_poktan }}">{{ $poktan->nama_poktan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4 w-full">
                        <label for="password" class="block text-white font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan password">
                    </div>

                     <!-- Input Konfirmasi Password -->
                     <div class="mb-4 w-full">
                        <label for="password_confirmation" class="block text-white font-bold mb-2">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="shadow-lg appearance-none border mb-8 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Konfirmasi password" required>
                    </div>
                    <div class="flex">
                        <div class="flex space-x-4 justify-between ">
                            <a class="w-72 bg-red-600 hover:bg-blue-green text-center text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-lg"
                            type="button" href="{{ route('landingpage') }}">
                                Batal
                            </a>
                            <button class="w-72 bg-green-600 hover:bg-blue-green text-center text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-lg" type="submit">
                                Daftar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

