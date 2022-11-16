<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BooksResource;
use App\Models\Book;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return BooksResource::collection(Book::all());
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
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return BooksResource
     */
    public function store(StoreBookRequest $request)
    {
        $book = Book::create([
            'name' => 'Sasho K',
            'description' => 'some descr.....',
            'published' => '20.01.2022',
        ]);

        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param Book $book
     * @return HasMany
     */
    public function show(Book $book)
    {
        return new BooksResource($book);
      //  dd($book->authors());
        return $book->authors();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param Book $book
     * @return BooksResource
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update([
            'name' => 'Jana' //$request->....
        ]);
        return new BooksResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response($book, '304');
    }
}
