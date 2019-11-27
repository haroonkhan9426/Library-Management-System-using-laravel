@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>MCD</b> Library</h2></div>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="custom_field form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <div class="inner-addon right-addon">
                          
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Student Name">
                                <span class="fas fa-user smuser"></span>
                          </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class=" custom_field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="inner-addon right-addon">
                             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Student e-Mail">
                             <span class="fas fa-envelope-open-text smuser"></span>
                          </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                          
                                <input id="registeration" type="text" class="form-control" name="reg_no" required placeholder="Registeration No">
                                <span class="fas fa-user-plus smreg"></span>
                          </div>
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                                <input id="contact_no" type="text" class="form-control" name="contact" required placeholder="Contact">
                                <span class="fas fa-id-badge smuser"></span>
                          </div>
                        </div>


                        <div class="custom_field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <div class="inner-addon right-addon">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="User Password">
                                <span class="fas fa-lock smlock"></span>
                          </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                          
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Re-enter Password">
                                <span class="fas fa-unlock-alt smlock"></span>
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
<br><br><br><br><br><br>
@endsection
