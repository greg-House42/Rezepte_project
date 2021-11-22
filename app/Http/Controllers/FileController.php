<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{npx tailwindcss initnpx tailwindcss init
    public function fileGallery()
    {
        $files = File::all()->sortBy('recipe_id')->groupBy('id');

        return view('recipes.list')->with('output', $files);
    }
}
