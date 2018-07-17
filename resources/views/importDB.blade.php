@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Add</b> excel file</h2></div>
                    <form class="form-horizontal" method="POST" action="/importgetfile">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">
                        get format
                    </button>
                    </form>
                    <form class="form-horizontal" method="POST" action="/importDBfile" enctype="multipart/form-data">
                      {{ csrf_field() }}

                        <div class="custom_field form-group ">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i>
                                <input type="file" name="importfile" >
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    import file
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
