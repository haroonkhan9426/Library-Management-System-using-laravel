<?php

namespace App\Http\Controllers;

use App\booksReturned;
use Illuminate\Http\Request;

class BooksReturnedController extends Controller
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
        return view('returnBooks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        booksReturned::create([
          'bookId' => $req->bookId,
          'memId' => $req->memberId,
          'retDate' => $req->returnDate
        ]);

        return redirect('returnBooks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booksReturned  $booksReturned
     * @return \Illuminate\Http\Response
     */
    public function show(booksReturned $booksReturned)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booksReturned  $booksReturned
     * @return \Illuminate\Http\Response
     */
    public function edit(booksReturned $booksReturned)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booksReturned  $booksReturned
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booksReturned $booksReturned)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booksReturned  $booksReturned
     * @return \Illuminate\Http\Response
     */
    public function destroy(booksReturned $booksReturned)
    {
        //
    }
}
