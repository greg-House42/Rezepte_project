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
                            <div class="container mx-auto">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <h1 class="text-4xl font-bold text-white text">Rezepte hochladen:</h1>
                                                <div class="card-body">
                                                    <form action="{{ route('recipes.store') }}" method="post" enctype="multipart/form-data">
                                                        <!-- Add CSRF Token -->
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Titel:</label></br>
                                                            <input type="text" class="form-control" name="titel"></br>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Rezept:</label></br>
                                                            <input type="text" class="form-control" name="description"></br>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Zutaten:</label></br>
                                                            <input type="text" class="form-control" name="ingredients"></br>
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

                                                            <br class="col-md-12">
                                                                <button type="submit" class="btn btn-primary" id="submit"><u>Submit</u></button>
                                                            </div>
                                                            <li class="nav-item">
                                                                </br><a class="nav-link" href="/recipes/list"><u class="text-4xl font-bold text-blue-200 text">Rezepte zum Nachkochen - hier klicken</u></a>
                                                            </li>
                                                    </form>
                                                </div>
                                        </div>
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
