<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>
<body>
    <h1>Pagina privada</h1>
    <p> @auth Hola  {{Auth::user()->name}} @endauth </p>

    <a href="{{route('logout')}}">Salir</a>
</body>
</html>