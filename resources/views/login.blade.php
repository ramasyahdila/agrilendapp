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
    <header class="h-16 w-full bg-white shadow-lg z-10">
        <div class="mx-4 h-full flex justify-between p-2">
            <img src="{{ asset('img/AgrilendLogo.png') }}" alt="Logo" class="w-auto h-auto">     
        </div>
    </header>
    <div class="flex h-full z-0">
        <div class="w-1/2 h-full bg-cover bg-center" style="background-image: url(img/LoginPage.jpg)"></div>
        <div class="w-1/2 flex h-full items-center justify-center bg-green-400">
            <!-- Gambar kanan bawah -->
            <div class="absolute bottom-0 right-0 z-0">
                <img src="img/Daun.png" alt="Gambar Kanan Bawah" class="w-80h-80">
            </div>
            <div class="w-96 bg-transparent p-8 m-auto rounded-lg z-10">
                <h2 class="text-4xl font-bold mb-4 text-center text-white mb-16">Selamat Datang Di Agrilend</h2>
                <hr class="border-2 border-white mb-8"></hr>
                <h6 class="text-sm font-regular mb-4 text-center text-white">Silahkan isi form login berikut untuk masuk ke dalam website</h6>
                <form>
                    <div class="mb-4">
                        <label for="email" class="block text-white font-bold mb-2">Username</label>
                        <input type="email" id="email" class=" shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-white font-bold mb-2">Password</label>
                        <input type="password" id="password" class="shadow-lg appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter password">
                        <p class="text-red-600 text-xs italic">Silahkan Masukkan Password Yang Benar</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <a class="w-full text-center bg-green-600 hover:bg-blue-green text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shadow-lg"
                        type="button" href="{{ route('layout.sidebarpetani') }}">
                            Masuk
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>