<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookAuthor::All();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
    public function show(Book_author $book_author)
    {
        return User::All();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
    public function edit(Book_author $book_author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book_author $book_author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book_author $book_author)
    {
        //
    }
}
