<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\member;

class MemberController extends Controller
{
    public function index(){

      return view('addMembers');
    }

    public function store(Request $req){

      //Declaring member object
      $mem = new member;


      //Populating member object
      $mem->memName = $req->name;
      $mem->email = $req->email;
      $mem->contact = $req->contact;
      $mem->regNo = $req->regNo;
      $mem->cnic = $req->cnic;
      $mem->dept = $req->dept;
      $mem->memType = $req->memType;
      $mem->password = $req->password;

      //Saving member object
      $mem->save();

      redirect(view('/addMembers'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
