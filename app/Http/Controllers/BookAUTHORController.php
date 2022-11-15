<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookAUTHORRequest;
use App\Http\Requests\UpdateBookAUTHORRequest;
use App\Models\BookAuthor;

class BookAUTHORController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBookAUTHORRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookAUTHORRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAUTHOR
     * @return \Illuminate\Http\Response
     */
    public function show(BookAuthor $bookAUTHOR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookAuthor  $bookAUTHOR
     * @return \Illuminate\Http\Response
     */
    public function edit(BookAuthor $bookAUTHOR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookAUTHORRequest  $request
     * @param  \App\Models\BookAuthor  $bookAUTHOR
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookAUTHORRequest $request, BookAuthor $bookAUTHOR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookAuthor  $bookAUTHOR
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookAuthor $bookAUTHOR)
    {
        //
    }
}
