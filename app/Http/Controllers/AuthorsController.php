<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\AuthorsResource;
use App\Models\Author;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return AuthorsResource::collection(Author::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return AuthorsResource
     */
    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create([
            'name' => 'Sasho K'
        ]);

        return new AuthorsResource($author);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return AuthorsResource
     */
    public function show(Author $author)
    {
        return new AuthorsResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return AuthorsResource
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update([
            'name' => 'Jana' //$request->....
        ]);
        return new AuthorsResource($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return response(null, 204);
    }
}
