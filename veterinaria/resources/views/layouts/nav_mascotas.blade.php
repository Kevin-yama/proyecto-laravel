<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <title>mascotas</title>
</head>
<body>
<nav>
    <ul>
        <li> <a href="/"> home </a></li>
        <li> <a href="/usuarios/mostrar"> usuarios </a></li>

    </ul>
</nav>
<div class="form-group">
    @yield('formulario')
</div>
<div class="form-group">
    @yield('datos')
</div>

<script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
