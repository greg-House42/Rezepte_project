@extends('dashboard')

    <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title><Micha's Rezepte Ecke></title>

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

                <style>
                    body {
                        font-family: 'Nunito', serif;
                    }
                </style>
            </head>
        <body>

        <!-- if validation in the controller fails, show the errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div>
                <form action="{{ route('recipes.store') }}" method="post" enctype="multipart/form-data">
                    <!-- Add CSRF Token -->
                    @csrf
                    <div class="form-group">
                        <label>Titel</label>
                        <input type="text" class="form-control" name="titel">
                    </div>
                    <div class="form-group">
                        <label>Rezept</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label>Zutaten</label>
                        <input type="text" class="form-control" name="ingredients">
                    </div>
                    <div class="form-group">
                        <input type="file" name="file">
                        <input type="image" name="image">
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes/list">Rezepte</a>
                    </li>
                </form>
            </div>
        </body>
    </html>
