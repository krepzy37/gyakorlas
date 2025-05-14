<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            $contents = Content::get();

        return response()->json($contents);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $content = new Content();

        $content->title = $request->title;

        $content->body = $request->body;

        $content->img = $request->img;

        $content->save();

        return response()->json(['message' => 'Tárolva']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         $content = Content::findOrFail($id);

        return response()->json($content);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $content = Content::findOrFail($id);

        $content->update($request->only(['title', 'body', 'img']));

        return response()->json(['message' => 'Frissítve']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         Content::destroy($id);

        return response()->json(['message' => 'Törölve']);
    }
}
