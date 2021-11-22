<!DOCTYPE html>
<html>
<head>
    <title>Micha's Rezept-Ecke</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="center-frame">
        <div class="wild-frame">
            <div align="center">
                <img src="http://www.getdigital.de/images/produkte/t2/t2_kochbuchgeeks.jpg" border="50" width="750" height="950" alt="t2_kochbuchgeeks">
            </div>
        </div>
    </div>
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">Micha's Rezept Ecke</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse show" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Registrierung (Für neue Nutzer)</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signOut') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes/list">Rezepte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes/create">Rezepte hochladen</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')

</body>

</html>
