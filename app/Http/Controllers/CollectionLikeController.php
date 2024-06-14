<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionLikeController extends Controller
{
    public function like(Request $request)
    {
        $collectionId = $request->input('collection_id');

        $request->validate([
            'collection_id' => 'required|integer',
        ]);

        $collection = Collection::findOrFail($collectionId);

        $collection->likes++;
        $collection->save();

        return response()->json([
            'likes' => $collection->likes,
        ]);
    }
}
