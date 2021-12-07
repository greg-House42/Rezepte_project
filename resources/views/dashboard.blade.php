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
                @endguest
            </ul>
        </div>
    </div>
</nav>
<nav>
    <div class="container mx-auto space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-5">
        <p class="text-2xl font-bold text-white text content-center" align="center">Möchten Sie so etwas kochen können?    </p>

        <div class="form-group">
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <div class="bg-green-90">
                    <div class="w-full rounded hover:shadow-2xl">
                        <p class="text-2xl font-bold text-white text" align="center">Kuchen:    </p>
                        <img class src="https://1.bp.blogspot.com/-M5n_2ZCW-NY/VgxC7-GgkDI/AAAAAAAADDU/5ykyc86TcuI/s1600/oreo%2Bkuchen.jpg" border="50" width="250" height="400" alt="Kuchen1">
                        <img class src="https://4.bp.blogspot.com/-bWyVaF76uAc/Vgwg-M1--mI/AAAAAAAADC8/e9lhofcsmT4/s1600/DSCF5695%2B-%2BKopie%2B-%2BKopie.JPG" border="50" width="250" height="400" alt="Kuchen2">
                        <img class src="https://christinas-fitlife.de/wp-content/uploads/2017/06/Himbeere-Vanille-Kuchen3-e1524011415570.jpg" border="50" width="250" height="400" alt="Kuchen3">
                        <img class src="https://christinas-fitlife.de/wp-content/uploads/2017/06/Himbeere-Vanille-Kuchen6.jpg" border="50" width="250" height="400" alt="Kuchen4">
                    </div>
                    <div class="w-full rounded hover:shadow-2xl">
                        <p class="text-2xl font-bold text-white text" align="center">Vegan:    </p>
                        <img class src="https://www.agdaily.com/wp-content/uploads/2021/01/bg-vegan-wording-001-xamnesiacx84-1000x400-1610935246.jpg" border="50" width="250" height="400" alt="Vegan1">
                        <img class src="https://vegan-pratique.fr/wp-content/uploads/2016/11/steak-vege-768x1152.jpg" border="50" width="250" height="400" alt="Vegan2">
                        <img class src="https://assets.afcdn.com/story/20200714/2073158_w944h530c1cxt0cyt0cxb1732cyb1732.webp" border="50" width="250" height="400" alt="Vegan3">
                        <img class src="https://assets.afcdn.com/story/20210216/2108629_w944h530c1cx727cy944cxt0cyt0cxb1603cyb1871.webp" border="50" width="250" height="400" alt="Vegan4">
                    </div>
                    <div class="w-full rounded hover:shadow-2xl">
                        <p class="text-2xl font-bold text-white text" align="center">Mit Fleisch:    </p>
                        <img class src="https://assets.afcdn.com/story/20201209/2100263_w944h530c1cx600cy400cxt0cyt0cxb1200cyb800.webp" border="50" width="250" height="400" alt="MitFleisch1">
                        <img class src="https://assets.afcdn.com/story/20201209/2100272_w500h643cxt0cyt0cxb700cyb900.webp" border="50" width="250" height="400" alt="MitFleisch2">
                        <img class src="https://assets.afcdn.com/story/20201209/2100273_w500h643cxt0cyt0cxb700cyb900.webp" border="50" width="250" height="400" alt="MitFleisch3">
                        <img class src="https://assets.afcdn.com/story/20201209/2100274_w500h643cxt0cyt0cxb700cyb900.webp" border="50" width="250" height="400" alt="MitFleisch4">
                    </div>
                </div>
            </div> <!-- col-6 / end -->
        </div>
        {{--                                hintergrundbild--}}
    </div>

</nav>
@yield('content')

</body>

</html>
