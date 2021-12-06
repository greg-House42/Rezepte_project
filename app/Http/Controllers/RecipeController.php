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
            'files' => 'required',
            'files.*' =>'mimes:jpg,bmp,png',
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

        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $key => $file) {
                $filename = uniqid();

                $path = substr($filename, 11, 2);
                $filename = $file->getClientOriginalName();
                $file->move(public_path('/storage/pictures/' . $path . '/'), $filename);
                $originalfile = $file;

                $file = new File();
                $name = $originalfile->getClientOriginalName();
                $extension = $originalfile->getClientOriginalExtension();

                $file->recipe_id = $recipe->id;
                $file->path = $path;
                $file->file_path = $filename;
                $file->name = $name;
                $file->extension = $extension;

                //ToDo
                //hier mime type feststellen und in Datenbank schreiben
                //Im model mutator bauen, der anhand des mime_type die Dateiendung anhängen - anhand des mime_types in der DB - an Hash anhängen
                $file->save(); // Finally, save the record.
            }

        }



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
