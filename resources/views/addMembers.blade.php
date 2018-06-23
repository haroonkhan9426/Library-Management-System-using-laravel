@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Add</b> New Member</h2></div>
                    <form class="form-horizontal" method="POST" action="/addMembers">
                      {{ csrf_field() }}

                        <div class="custom_field form-group ">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Full User Name">
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

                        <div class=" custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="User e-Mail">
                          </div>
                          <!--
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          -->
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-list-alt"></i>
                                <input id="registeration" type="text" class="form-control" name="regNo"  placeholder="Registeration No">
                          </div>
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-earphone"></i>
                                <input id="contact_no" type="text" class="form-control" name="contact"  placeholder="Contact">
                          </div>
                        </div>



                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-check"></i>
                                <input id="cnic" type="text" class="form-control" name="cnic" required placeholder="CNIC#">
                          </div>
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                                <input id="dept" type="text" class="form-control" name="dept" placeholder="Department">
                          </div>
                          <!--
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                {{ $errors->has('password') ? ' has-error' : '' }}
                              -->
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                                <input id="memType" type="memType" class="form-control" name="memType" placeholder="student/employee">
                          </div>
                          <!--
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                {{ $errors->has('password') ? ' has-error' : '' }}
                              -->
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-check"></i>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                          </div>
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-check"></i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Re-enter Password">
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
