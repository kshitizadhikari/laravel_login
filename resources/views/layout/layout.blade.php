<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="-viewport" content="width=device-width, initial-scale=1.0">

    <style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;
        font: inherit;
    }

    .container-fluid {
        background-color: #50577A;
        height: 100vh;
    }
    </style>
    <title>Login Template</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="header">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark p-2">
            <a class="navbar-brand" href="#">KPK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('welcomeView') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categoryView') }}">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('trendingView') }}">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactView') }}">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                @guest
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('loginView') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('signupView') }}">SignUp</a>
                    </li>
                </ul>
                @endguest
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        @yield('content')
    </div>
    <div class="footer bg-dark">Footer Part</div>

</body>

</html>