<!-- htmlPdf.blade.php -->
<!--@<!include('recipes.list')-->


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
                    <tbody>
                    @foreach($recipes as $recipe)
                        <tr>
                            <div class="form-group" align="center">
                                <p style="text-align:center">
                                <div class="text-2xl font-bold text-white text" align="center">Zutaten:    </div>
                                <p class align="center">{{$recipe->ingredients}}</p></br>
                                </p>
                            </div>
                            <div class="form-group">
                                <p class="text-2xl font-bold text-white text" align="center">Rezept:    </p>
                                <p class align="center">{{$recipe->description}}</p></br>
                            </div>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </p>
        </body>
    </html>


<!--https://www.laravelcode.com/post/convert-html-to-pdf-in-laravel-8-with-dompdf-->
