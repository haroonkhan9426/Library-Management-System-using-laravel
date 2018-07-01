@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Category ID</th>
          <th scope="col">Cateogry Name</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($cats as $cat)
        <tr>
          <td>{{$cat->catId}}</td>
          <td>{{$cat->catName}}</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>
        </tr>
          @endforeach
  </div>
</div>


@endsection
