<!-- htmlPdf.blade.php -->
<!DOCTYPE html>
    <html lang="en-US">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>HTML 2 PDF</title>
            <style type="text/css">
                .center {
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class="center">
                <h1>Rezept</h1>
            </div>
            <p>
            <div class="h-screen w-full bg-blue-500">
                <div class="flex w-full justify-center">
                    <div class="container mx-px" align="center">
                        <div class="row justify-content-center" align="center">
                            <div class="col-md-4">
                                <div class="card">
                                    <h6 class="text-4xl font-bold text-white text" align="center"><u><i>Rezepte zum Nachkochen:</i></u></h6>
                                    <div class="card-body" align="center">
                                        <form action="{{ route('htmlPdf.index') }}" method="get" enctype="multipart/form-data">
                                            <!-- Add CSRF Token -->
                                            @csrf
                                            @foreach($recipes as $recipe)
                                                <tr align="center">
                                                    <p class="text-4xl font-bold text-white text-center" align="center">
                                                    <div class="form-group">
                                                        </br><p class="text-2xl font-bold text-white text-center">Rezept-Nummer:    </p>
                                                        <p class align="center"><u>{{$recipe->id}}</u></p></br>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-2xl font-bold text-white text" align="center">Titel:    </p>
                                                        <center>
                                                            <p class align="center">{{$recipe->titel}}</p></br>
                                                        </center>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-2xl font-bold text-white text" align="center">Rezept:    </p>
                                                        <p class align="center">{{$recipe->description}}</p></br>
                                                    </div>
                                                    <div class="form-group" align="center">
                                                        <p style="text-align:center">
                                                        <div class="text-2xl font-bold text-white text" align="center">Zutaten:    </div>
                                                        <p class align="center">{{$recipe->ingredients}}</p></br>
                                                        </p>
                                                    </div>
                                                    <div class="container mx-auto space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-5">
                                                        <p class="text-2xl font-bold text-white text content-center" align="center">Bilder:    </p>
                                                        @foreach($recipe->images as $image)
                                                            <div class="form-group">
                                                                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                                    <div class="bg-green-90">
                                                                        <div class="w-full rounded hover:shadow-2xl">
                                                                            <img class="object-scale-down h-48 w-48" src="{{('/storage/pictures/' . $image->path . '/' . $image->name)}}" >
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- col-6 / end -->
                                                            </div>

                                                            {{--                                <td><img src="{{('/storage/pictures/' . $image->name)}}" ></td>--}}
                                                        @endforeach
                                                    </div>
                                                    </p>
                                                </tr>
                                            @endforeach
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </body>
    </html>


<!--https://www.laravelcode.com/post/convert-html-to-pdf-in-laravel-8-with-dompdf-->
