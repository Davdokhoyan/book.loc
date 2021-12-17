<?php

namespace App\Http\Controllers;

use App\Models\BookType;
use App\Http\Requests\StoreBookTypeRequest;
use App\Http\Requests\UpdateBookTypeRequest;

class BookTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreBookTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function show(BookType $bookType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function edit(BookType $bookType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookTypeRequest  $request
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookTypeRequest $request, BookType $bookType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookType  $bookType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookType $bookType)
    {
        //
    }
}
