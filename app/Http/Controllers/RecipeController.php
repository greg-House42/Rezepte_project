<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipe = DB::table('recipes')->get();
        foreach($recipe as $key => $output)
        {
            //to get each columns value
            //$value->name
            $output->id;
            $output->titel;
            $output->description;
            //$output->file_path;
        }
        return view('recipes.create')->with('output', $recipe);

        //$recipe = DB::table('recipes')->select('id','titel','description')->get();

        //return view('recipes.create')->with('output', $recipe);

        //$recipe = DB::table('recipes')->get();

        //return view('recipes.create')->with('output', $recipe);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    /**
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
            'description'=> 'required|nullable'
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /recipes
            $request->file->store('recipes', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $Recipe = new Recipe([
                "description" => $request->get('description'),
                "titel" => $request->get('titel'),
                "file_path" => $request->file->hashName()
            ]);
            $Recipe->save(); // Finally, save the record.
        }

        return view('recipes.create');

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
