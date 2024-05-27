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
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('poktan.sidebarpoktan') }}">
                <i class="fa-solid fa-home ml-3 mr-3"></i>
                <span>Beranda</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('poktan.peminjaman') }}">
                <i class="fa-solid fa-file ml-3 mr-5"></i>
                <span>Peminjaman</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('poktan.tagihan') }}">
                <i class="fa-solid fa-file ml-3 mr-5"></i>
                <span>Pengembalian</span>
                </a>
            </li>
            <li class="mb-4">
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('poktan.laporan') }}">
                    <i class="fa-solid fa-file ml-3 mr-5"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('poktan.pemerintah') }}">
                    <i class="fa-solid fa-user ml-3 mr-4"></i>
                    <span>Pemerintah</span>
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 text-base font-normal text-white dark:text-white hover:bg-green-600 dark:hover:bg-gray-700 group" href="{{ route('poktan.petani') }}">
                    <i class="fa-solid fa-user ml-3 mr-4"></i>
                    <span>Petani</span>
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
                <a class="flex items-center p-2 rounded-full mx-4 mt-4 bg-green-50 h-18 text-base font-normal text-white dark:text-white group" href="{{ route('poktan.profilpoktan') }}">
                    <i class="fa-solid fa-user fa-2x ml-3 mr-4 text-green-800"></i>
                    <div class="flex flex-col justify-top">
                        <h1 class="text-2x1 text-gray-600 font-bold">{{ Auth::user()->nama_poktan ?? 'Nama Pengguna' }}</h1>
                        <h2 class="text-sm text-gray-600 font-semibold">Poktan</h1>
                    </div>
                </a>

            </li>
            </ul>
        </div>
    </aside>
    <div class="w-full h-full flex flex-col bg-gray-50">
        <div class="px-8 flex flex-col py-4 mt-4 mr-4 ml-64 w-auto h-auto mb-2">
            <h1 class="text-3xl font-bold text-green-400 mb-4">Profil Anda</h1>
            <hr class="border-b-4 border-green-400 w-auto mt-2">
        </div>
        <div class="flex flex-col -full">
            <!-- Bagian untuk menampilkan gambar yang diunggah -->
            <div class="flex w-full">
                <div class="flex flex-col mt-8 mx-24 w-full justify-center items-center">
                    <span class="text-green-500 text-2xl font-semibold">Upload Foto Anda</span>

                    <label for="foto" class="flex flex-col w-96 h-48 bg-transparent rounded-lg border-4 border-dashed border-green-400 items-center justify-center cursor-pointer">
                        <img id="preview"  src="{{ asset('storage/' . $dataPoktan->foto_profil) }}" class="w-full h-full object-cover" src="#" alt="Preview">
                    </label>
                </div>
            </div>

        </div>
        <div class="flex h-full w-auto mt-16 ml-64">
            <div class="flex flex-col mx-24 w-full items-right">
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Terjadi kesalahan!</strong>
                    <span class="block sm:inline">Silakan periksa inputan Anda.</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 5.652a1 1 0 011.414 1.414L11.414 11l4.348 4.348a1 1 0 01-1.414 1.414L10 12.414l-4.348 4.348a1 1 0 01-1.414-1.414L8.586 11 4.24 6.652a1 1 0 111.414-1.414L10 9.586l4.348-4.348z"/>
                        </svg>
                    </span>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form method="POST" action="{{ route('update.profilpoktan') }}" class="w-full" enctype="multipart/form-data">
                    @csrf
                    <input type="file" id="foto" name="foto" class="hidden" accept="image/*">

                    <div class="flex mb-8">
                        <label for="nama_poktan" class="block text-gray-900 font-bold w-1/3">Nama Poktan</label>
                        <input type="text" id="nama_poktan" name="nama_poktan" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight shadow-md focus:outline-none focus:shadow-outline" placeholder="Siapa Gituu" value="{{ $dataPoktan->nama_poktan }}" >
                    </div>
                    <div class="flex mb-8">
                        <label for="alamat_poktan" class="block text-gray-900 font-bold w-1/3">Alamat Poktan</label>
                        <input type="text" id="alamat_poktan" name="alamat_poktan" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight shadow-md focus:outline-none focus:shadow-outline" placeholder="alamat" value="{{$dataPoktan->alamat_poktan}}" >
                    </div>
                    <div class="flex mb-8">
                        <label for="no_telp" class="block text-gray-900 font-bold w-1/3">No. Telepon</label>
                        <input type="text" id="no_telp" name= 'no_telp' class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight shadow-md focus:outline-none focus:shadow-outline" placeholder="Poktan Melati" value="{{$dataPoktan->no_tlp}}" >
                    </div>
                    <div class="flex mb-8">
                        <label for="Pemerintah" class="block text-gray-900 font-bold w-1/3">Nama Pemerintah</label>
                        <input type="nama_pemerintah" id="nama_pemerintah" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-500 leading-tight shadow-md focus:outline-none focus:shadow-outline" placeholder="Jl. Melati No.05 Lumajang" value="{{ $dataPemerintah->nama_pemerintah}}" readonly>
                    </div>
                    <div class="flex text-right justify-center space-x-8">
                        <div class="text-right object-right mb-7 mt-3">
                            <a href="{{ route('poktan.profilpoktan') }}" class="py-3 rounded-xl shadow px-8 bg-red-400 text-white font-bold" style="z-index: 5;">Batal</a>
                        </div>
                        <div class="text-right object-right mb-8">
                            <button type="submit" class="py-3 rounded-xl shadow px-8 bg-green-400 text-white font-bold" style="z-index: 5;">Simpan</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        var dialogOpened = true; // Variabel untuk memeriksa apakah dialog telah dibuka atau belum

        document.getElementById('preview').addEventListener('click', function() {
            if (!dialogOpened) { // Periksa apakah dialog belum dibuka
                document.getElementById('foto').click(); // Memicu klik pada input file tersembunyi saat gambar diklik
                dialogOpened = true; // Setel variabel dialogOpened menjadi true karena dialog telah dibuka
            }
        });

        document.getElementById('foto').addEventListener('change', function() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var imgPath = e.target.result;
                    // Menampilkan gambar yang diunggah
                    document.getElementById('preview').src = imgPath;
                }
                reader.readAsDataURL(input.files[0]);
                dialogOpened = true; // Setel kembali variabel dialogOpened menjadi false setelah memilih gambar
            }
        });
    </script>
</body>
</html>
