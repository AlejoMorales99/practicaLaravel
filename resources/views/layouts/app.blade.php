<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/estilo.css"> --}}
    <title>@yield('title')</title>
</head>
<body>

    <ul>
        <li><a class="btn btn-primary" href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('posts.index') }}">blog</a></li>
        <li><a href="{{ route('about')}}">about</a></li>
        <li><a href="{{ route('contac')}}">contacto</a></li>
    </ul>

    @yield('contenido')


    <script src="/js/prueba.js" ></script>

</body>
</html>
