<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta aut>
    <title>@yield('title','Hoja de Babel')</title>
    <link rel="icon" type="image/png" href="{{ asset('icon.png') }}">
    <link rel="stylesheet" href='{{ asset('css/estilos.css') }}'>
    <link rel="stylesheet" href='{{ asset('css/layout.css') }}'>
    @yield('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('layouts.navbar')

    <main class="bg-dark">
        @yield('content')
    </main>

    @include('layouts.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>