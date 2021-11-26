@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="container mx-px">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="text-4xl font-bold text-white text">Rezepte zum Nachkochen:</h1>
                         <div class="card-body">
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
                                                <div class="bg-green-90">
                                                    <img class="object-scale-down h-48 w-48" src="{{('/storage/pictures/' . $image->name)}}" >
                                                </div>
            {{--                                <td><img src="{{('/storage/pictures/' . $image->name)}}" ></td>--}}
                                            @endforeach
                                        </div>
                                    </tr>

                                @endforeach
                            </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
