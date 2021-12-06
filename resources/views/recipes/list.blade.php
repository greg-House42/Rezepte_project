@extends('dashboard')

@section('content')
    @guest
        <script>window.location = "/login";</script>
    @else

        <main class="signup-form" align="center">
            <div class="h-screen w-full bg-blue-500">
                <div class="flex w-full justify-center">
                    <div class="container mx-px" align="center">
                        <div class="row justify-content-center" align="center">
                            <div class="col-md-4">
                                <div class="card">
                                    <h6 class="text-4xl font-bold text-white text" align="center">Rezepte zum Nachkochen3:</h6>
                                    <div class="card-body" align="center">
                                        <form action="{{ route('recipes.index') }}" method="get" enctype="multipart/form-data">
                                            <!-- Add CSRF Token -->
                                            @csrf
                                            @foreach($recipes as $recipe)
                                                <tr align="center">
                                                    <p class="text-4xl font-bold text-white text-center" align="center">
                                                    <div class="form-group">
                                                        </br><p class="text-4xl font-bold text-white text-center">Nummer:    </p>
                                                        <td>{{$recipe->id}}</td></br>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-4xl font-bold text-white text" align="center">Titel:    </p>
                                                        <center>
                                                            <td>{{$recipe->titel}}</td></br>
                                                        </center>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-4xl font-bold text-white text" align="center">Rezept:    </p>
                                                        <td>{{$recipe->description}}</td></br>
                                                    </div>
                                                    <!-- login card -->
                                                    <div class="fixed h-full w-full flex items-center justify-center bg-opacity-50 bg-gray-700">
                                                        <div class="z-10">
                                                            <div id="login-card"
                                                                 class="w-56 h-64 text-center bg-orange-500 rounded-lg"
                                                            ><p>Hi</p></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" align="center">
                                                        <p style="text-align:center">
                                                            <div class="text-4xl font-bold text-white text" align="center">Zutaten:    </div>
                                                            <p class align="center">{{$recipe->ingredients}}</p></br>
                                                        </p>
                                                    </div>
                                                    <div class="container mx-auto space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-5">
                                                        <p class="text-4xl font-bold text-white text content-center" align="center">Bilder:    </p>
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
        </main>
    @endif

@endsection
