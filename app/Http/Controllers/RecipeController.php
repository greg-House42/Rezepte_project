<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Recipe;
use Illuminate\Http\Request;


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

        return view('recipes.list', ['output' => $recipe]);

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

        $file = new File();
        if ($request->hasFile('file')) {
            $file->recipe_id = $recipe->id;
            $file->file_path = $file->path;
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
