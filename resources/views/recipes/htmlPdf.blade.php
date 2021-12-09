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
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Rezept</th>
                    <th>Zutaten</th>
                    <th>Bilder</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        <form action="{{ route('recipes.htmlPdf') }}" method="get" enctype="multipart/form-data">
                            <!-- Add CSRF Token -->
                            @csrf
                                @foreach($recipes as $recipe)
                                <tr>
                                    <td>{{$recipe->id}}</td>
                                    <td>{{$recipe->titel}}</td>
                                    <td>{{$recipe->description}}</td>
                                    <td>{{$recipe->ingredients}}</td>
                                    <td>
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
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>
            </p>
        </body>
    </html>


<!--https://www.laravelcode.com/post/convert-html-to-pdf-in-laravel-8-with-dompdf-->
