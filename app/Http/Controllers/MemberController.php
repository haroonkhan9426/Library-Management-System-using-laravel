<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\member;
use App\memStaff;
use App\memStudent;

class MemberController extends Controller
{



  //Listing the resources
    public function index(){

      if(Auth::check()){
        $members = member::all();
        return view('membersList', ['members' => $members]);
      }else {
        return redirect('auth/login');
      }

    }

/**
*
*
*
*
**/

    public function store(Request $req){

      if(Auth::check()){
        //Declaring member object
        $mem = new member;
        $staff = new memStaff;
        $student = new memStudent;
        //Add data to members Table
        member::create([
          'memName' => $req->name,
          'email' => $req->email,
          'contact' => $req->contact,
          'cnic' => $req->cnic,
          'dept' => $req->dept,
          'address' => $req->address,
          'memType' => $req->memType,
          'password' => $req->password
        ]);
        //Add data either to memStaff or memStudent depending on the value of memType field.
        if($req->memType == "Student"){
          memStudent::create([
            'memId' => member::where('cnic', $req->cnic)->first()->memId,
            'regNo' => $req->regNo,
            'batch' => $req->batch,
          ]);
        } else if($req->memType == "Staff"){
          memStaff::create([
            'memId' => member::where('cnic', $req->cnic)->first()->memId,
            'designation' => $req->designation
          ]);
        }
        return redirect('/addMembers');
      }else {
        return redirect('auth/login');
      }


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
      if(Auth::check()){
        return view('addMembers');
      }else {
        return redirect('auth/login');
      }

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
