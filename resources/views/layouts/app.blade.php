<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','TituloDefecto')</title>
    {{-- tipografia --}}

 @stack('css')
</head>
<body>
    <header>Hola soy el logo</header>
    @yield('content')
    <footer>Hola soy el footer</footer>

    @stack('js')
</body>
</html>