@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">BookID</th>
          <th scope="col">Title</th>
          <th scope="col">Edition</th>
          <th scope="col">Category</th>
          <th scope="col">Author</th>
          <th scope="col">Books Available</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>

        @foreach($books as $book)
        <tr>
          <td>$book->bookId</td>
          <td>$book->bookTitle</td>
          <td>$book->edition</td>
          <td>$book->catId</td>
          <td>$book->authId</td>
          <td>$book->totalAvail</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>
          @endforeach
        </tr>
        <tr>
          <td>1</td>
          <td>Circuit and Systems II</td>
          <td>Electrical Engineering</td>
          <td>Dr. Arbab Masood</td>
          <td>Donated By Haroon khan from Peshawar</td>
          <td>23</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Circuit and Systems II</td>
          <td>Electrical Engineering</td>
          <td>Dr. Arbab Masood</td>
          <td>Donated By Haroon khan from Peshawar</td>
          <td>23</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Circuit and Systems II</td>
          <td>Electrical Engineering</td>
          <td>Dr. Arbab Masood</td>
          <td>Donated By Haroon khan from Peshawar</td>
          <td>23</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Circuit and Systems II</td>
          <td>Electrical Engineering</td>
          <td>Dr. Arbab Masood</td>
          <td>Donated By Haroon khan from Peshawar</td>
          <td>23</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
  </div>
</div>


@endsection
