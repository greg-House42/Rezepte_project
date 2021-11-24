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
                <form action="{{ route('recipes.index') }}" method="get" enctype="multipart/form-data">
                    <!-- Add CSRF Token -->
                    @csrf
                    @foreach($recipes as $recipe)
                        <tr>
                            <div class="form-group">
                                </br><label>Nummer:    </label>
                                <td>{{$recipe->id}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Titel:     </label>
                                <td>{{$recipe->titel}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Rezept:     </label>
                                <td>{{$recipe->description}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Zutaten:    </label>
                                <td>{{$recipe->ingredients}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Bilder:      </label>
                                @foreach($recipe->images as $image)
                                    <div class="bg-green-300">
                                        <img class="object-scale-down h-48 w-48" src="{{('/storage/pictures/' . $image->name)}}" >
                                    </div>
{{--                                <td><img src="{{('/storage/pictures/' . $image->name)}}" ></td>--}}
                                @endforeach
                            </div>
                        </tr>

                    @endforeach
                </form>
            </div>
        </body>
    </html>
