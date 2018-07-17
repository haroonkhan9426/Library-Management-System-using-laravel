<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
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
      return view('addCategory');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $cat = new booksCategory;

      $cat->catName = $request->catName;

      $cat->save();
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
