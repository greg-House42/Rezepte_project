@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="container mx-px">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text">Rezepte hochladen:</h3>
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
                                            <button type="submit" class="btn btn-primary" id="submit">Submit</button></br>
                                        </div>
                                        <li class="nav-item">
                                            </br><a class="nav-link" href="/recipes/list">Rezepte zum Nachkochen - hier klicken</a>
                                        </li>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
