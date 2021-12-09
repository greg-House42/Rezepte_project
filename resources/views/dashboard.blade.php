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
    @guest
        <a href="{{ route('login') }}">
            <h1 class="text-4xl font-bold text-white text-center">Micha's Rezept-Ecke</h1>
        </a>
    @else
    <a href="list">
        <h1 class="text-4xl font-bold text-white text-center">Micha's Rezept-Ecke</h1>
    </a>
    @endif
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
                    <li class="nav-item">
                        <a class="nav-link" href="/pdf"><i class="text-lg font-bold text-blue-800 text">Rezepte als PDF</i></a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<nav>
    <div><p class="text-2xl font-bold text-white text content-center" align="center">Möchten Sie so etwas kochen können?    </p></div>
    <style>
        #aussendiv {
            display: flex;
            justify-content: space-between;
        }
        .innendiv {
            width:300px;
        }

    </style>
    <div id="aussendiv">
        <div class="innendiv">
            <div class="w-full rounded hover:shadow-2xl">
                <p class="text-2xl font-bold text-white text">Kuchen:    </p>
                <img class src="https://1.bp.blogspot.com/-M5n_2ZCW-NY/VgxC7-GgkDI/AAAAAAAADDU/5ykyc86TcuI/s1600/oreo%2Bkuchen.jpg" border="50" width="250" height="400" alt="Kuchen1">
            </div>
        </div>
        <div class="innendiv">
            <div class="w-full rounded hover:shadow-2xl">
                <p class="text-2xl font-bold text-white text">Nachspeise:    </p>
                <img class src="https://img.chefkoch-cdn.de/rezepte/201681085409610/bilder/19627/crop-600x400/amarettini-kirsch-nachspeise.jpg" border="50" width="250" height="400" alt="Kuchen1">
            </div>
        </div>
        <div class="innendiv">
            <div class="w-full rounded hover:shadow-2xl">
                <p class="text-2xl font-bold text-white text">Vegan:    </p>
                <img class src="https://www.agdaily.com/wp-content/uploads/2021/01/bg-vegan-wording-001-xamnesiacx84-1000x400-1610935246.jpg" border="50" width="250" height="400" alt="Vegan1">
            </div>
        </div>
        <div class="innendiv">
            <div class="w-full rounded hover:shadow-2xl">
                <p class="text-2xl font-bold text-white text">Mit Fleisch:    </p>
                <img class src="https://assets.afcdn.com/story/20201209/2100263_w944h530c1cx600cy400cxt0cyt0cxb1200cyb800.webp" border="50" width="250" height="400" alt="MitFleisch1">
            </div>
        </div>
    </div>

</nav>
@yield('content')

</body>

</html>
