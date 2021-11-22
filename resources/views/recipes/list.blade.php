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
                    @foreach($output as $data)
                        <tr>
                            <div class="form-group">
                                </br><label>Nummer:    </label>
                                <td>{{$data->id}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Titel:     </label>
                                <td>{{$data->titel}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Rezept:     </label>
                                <td>{{$data->description}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Zutaten:    </label>
                                <td>{{$data->ingredients}}</td></br>
                            </div>
                            <div class="form-group">
                                <label>Bilder:      </label>
                                @foreach($data->images as $image)
                                <td><img src="{{base_path($image->file_path)}}" ></td>
                                @endforeach
                            </div>
                        </tr>

                    @endforeach
                </form>
            </div>
        </body>
    </html>
