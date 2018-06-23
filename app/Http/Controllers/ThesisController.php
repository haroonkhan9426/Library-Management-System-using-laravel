<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thesis;

class ThesisController extends Controller
{
    public function index(){


    }

    /**
    *store the newly created resources
    *@return null
    */

    public function store(Request $req){

      $thesis = new thesis;

      $thesis->thesisTitle = $req->title;
      $thesis->mem1ID = $req->mem1Id;
      $thesis->mem2ID = $req->mem2Id;
      $thesis->mem3ID = $req->mem3Id;
      $thesis->supName = $req->supName;

      $thesis->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('addThesis');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\booksCategory  $booksCategory
     * @return \Illuminate\Http\Response
     */
    public function show(booksCategory $booksCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booksCategory  $booksCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(booksCategory $booksCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booksCategory  $booksCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booksCategory $booksCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booksCategory  $booksCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(booksCategory $booksCategory)
    {
        //
    }
}
