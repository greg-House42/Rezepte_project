<!DOCTYPE html>
<html>

<head>
    <title>Micha's Rezept-Ecke</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
    <div class="center-frame">
        <div class="wild-frame">
            <div align="center">
                <img src="http://www.getdigital.de/images/produkte/t2/t2_kochbuchgeeks.jpg" border="50" width="250" height="400" alt="t2_kochbuchgeeks">
            </div>
        </div>
    </div>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
<header class="max-w-lg mx-auto">
    <a href="{{ route('login') }}">
        <h1 class="text-4xl font-bold text-white text-center">Micha's Rezept-Ecke</h1>
    </a>
</header>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">

        <div class="collapse navbar-collapse show" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="text-lg font-bold text-blue-800 text">Login</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}"><i class="text-lg font-bold text-blue-800 text">Registrierung (Für neue Nutzer)</i></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signOut') }}"><i class="text-lg font-bold text-blue-800 text">Logout</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes/list"><i class="text-lg font-bold text-blue-800 text">Rezepte zum nachkochen</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes/create"><i class="text-lg font-bold text-blue-800 text">Rezepte hochladen</i></a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')

</body>

</html>
