<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>

    <nav>
        <div class="nav-wrapper blue darken-1">
            <a href="/" class="center brand-logo"><i class="material-icons">cloud</i>TWIXT</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/login"><i class="material-icons">contacts</i></a></li>
                <li><a href="/post"><i class="material-icons">add</i></a></li>
                <li><a href="/profile"><i class="material-icons">group</i></a></li>
            </ul>
        </div>
    </nav>

    @include('includes.mensagem')

    @yield('conteudo')

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
