<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    {{-- Menghubungkan file Sass menggunakan Vite --}}
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container m-5">
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <<img class="img-thumbnail" src="{{ Vite::asset('resources/images/image2VectorSplit.svg') }}" alt="image">
    </div>
    {{-- Menghubungkan file JavaScript menggunakan Vite --}}
    @vite('resources/js/app.js')

    {{-- Mengizinkan konten dinamis dari blade template --}}
    @yield('content')
</body>

</html>
