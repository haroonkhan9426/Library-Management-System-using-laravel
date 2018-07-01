@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Members List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">CNIC</th>
          <th scope="col">Department</th>
          <th scope="col">Address</th>
          <th scope="col">Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($members as $mem)
        <tr>
          <td>{{$mem->memId}}</td>
          <td>{{$mem->memName}}</td>
          <td>{{$mem->email}}</td>
          <td>{{$mem->contact}}</td>
          <td>{{$mem->cnic}}</td>
          <td>{{$mem->dept}}</td>
          <td>{{$mem->address}}</td>
          <td>{{$mem->memType}}</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>
          </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
