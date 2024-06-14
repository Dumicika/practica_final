<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Image;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::all();
        return view('collections.index', ['collections' => $collections]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collection = new Collection();
        $collection->name = $request->name;
        $collection->user_id = auth()->id();
        $collection->likes = 0;
        $collection->save();
        $id = $collection->id;
        foreach ($request->images as $fille){
            $extension  = $fille->getClientOriginalExtension();
            $image = new Image();
            $image->collection_id = $id;
            $image->name = md5(bcrypt(date('l jS \of F Y h:i:s A'))).'.'.$extension;
            $fille->move(public_path(env('UPLOADS_IMAGE')), $image->name);
            $image->save();
        }
        return redirect()->route('collections.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        //
    }
}
