@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Bthesis List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">thesisID</th>
          <th scope="col">Title</th>
          <th scope="col">mem1id</th>
          <th scope="col">mem2id</th>
          <th scope="col">mem3id</th>
          <th scope="col">supvisor</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
    <tbody>
    @foreach($thesis as $thi)
    <tr>
      <td>{{$thi->thesisId}}</td>
      <td>{{$thi->thesisTitle}}</td>
      <td>{{$thi->mem1Id}}</td>
      <td>{{$thi->mem2Id}}</td>
      <td>{{$thi->mem3Id}}</td>
      <td>{{$thi->supName}}</td>
      <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

      </td>
    </tr>
    @endforeach   
  </div>
</div>


@endsection
