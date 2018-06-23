@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Add</b> New Books</h2></div>
                    <form class="form-horizontal" method="POST" action="/addBooks">
                      {{ csrf_field() }}

                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('name') }}" required autofocus placeholder="Book Title">
                          </div>
                          <!--
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            {{ $errors->has('name') ? ' has-error' : '' }}
                          -->

                        </div>

                        <div class=" custom_field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tasks"></i>
                                <input id="edition" type="number" class="form-control" name="edition" value="{{ old('email') }}" required placeholder="Book Edition">
                          </div>
                        </div>
                          <!--
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            -->

                      <div class="row" style="margin-left: 0px; margin-right: -57px;">
                        <div class="custom_field form-group col-sm-10">

                                <select class="form-control" id="sel1" name="author">
                                <option>--Select Author--</option>
                                <option>opp1</option>
                                @foreach($auths as $auth)
                                  <option> {{$auth->name}} </option>
                                @endforeach
                              </select>
                          </div>
                          <div class="col-sm-2 ">
                            <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="glyphicon glyphicon-plus"></i></button>
                          </div>

                        </div>

                        <div class="row" style="margin-left: 0px; margin-right: -57px;">
                          <div class="custom_field form-group col-sm-10">

                                  <select class="form-control" id="sel1" name="cat">
                                  <option>--Select Category--</option>
                                  <option>opp1</option>
                                  @foreach($cats as $cat)
                                    <option> {{$cat->catName}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="col-sm-2 ">
                              <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="glyphicon glyphicon-plus"></i></button>
                            </div>

                          </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-question-sign"></i>
                                <input id="booksAvail" type="number" class="form-control" name="booksAvail" required placeholder="No of Books Available">
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
