<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as IlluminateFile;
use Illuminate\Support\Facades\Storage;
use Mimey\MimeTypes;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $recipe = Recipe::all();
        return view('recipes.list', ['recipes' => $recipe]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the inputs
        $request->validate([
            'titel' => 'required|nullable',
            'description'=> 'required|nullable',
            'ingredients' => 'required|nullable',
            'file' => 'mimes:jpg,bmp,png',
        ]);

        // ensure the request has a file before we attempt anything else.

            // Store the record, using the new file hashname which will be it's new filename identity.
            $recipe = new Recipe([
                "description" => $request->description,
                "titel" => $request->titel,
                "ingredients" => $request->ingredients,
            ]);
            $recipe->save(); // Finally, save the record.
            //dd($request->file());




        if ($request->hasFile('file')) {

            $filename = uniqid();
            $path = substr($filename, 0, 2);
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('/images'),$filename);

            //$image_path = "/images/" . $image_name;

            //IlluminateFile::makeDirectory(storage_path() . '/images/' . $path);
            IlluminateFile::move($request->file->getRealPath(), storage_path(). '/public/images/' . $path . '/' . $filename);
            //Storage::move('old/file.jpg', 'new/file.jpg');
            //Storage::putFile('photos', new File('/path/to/photo'), 'public/images/');




            $originalfile = $request->file('file');
            //$hashname = $file->hashName(); // Generate a unique, random name...
            //$extension = $file->extension(); // Determine the file's extension based on the file's MIME type...

            $file = new File();
            $name = $originalfile->getClientOriginalName();
            $extension = $originalfile->getClientOriginalExtension();

            $file->recipe_id = $recipe->id;
            $file->file_path = $filename;
            $file->name = $name;
            $file->extension = $extension;


            //hier mime type feststellen und in Datenbank schreiben
            //Im model mutator bauen, der anhand des mime_type die Dateiendung anhängen - anhand des mime_types in der DB - an Hash anhängen
            $file->save(); // Finally, save the record.
        }

        //ToDo
        //

        return redirect(route('recipes.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
