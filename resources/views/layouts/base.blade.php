<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">SHOW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="{{route('home')}}">Ingredients</a>
                    <a class="nav-item nav-link" href="{{route('atelier')}}">Atelier</a>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="w-100 text-center bg-dark text-white fixed-bottom">
            Charles de Lalaing le bg
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
