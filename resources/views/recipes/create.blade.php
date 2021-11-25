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
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="files[]" placeholder="Choose files" multiple >
                            </div>
                            @error('files')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes/list">Rezepte</a>
                    </li>
                </form>
            </div>
        </body>
    </html>
