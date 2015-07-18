@extends('site.layouts.admin')

{{-- Web site Title --}}
@section('title')
    {{{ Lang::get('user/user.login') }}} ::
    @parent
@stop

{{-- Content --}}
@section('content')
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
    {{ Form::open(['url'=>'users/login','class'=>'form-horizontal','name'=>'form','id' => 'form', 'enctype' => 'multipart/form-data']) }}

    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuario">
    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>

    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <button id="btn-login" href="#" class="btn btn-success pull-right"><i class="glyphicon glyphicon-log-in"></i> Ingresar  </button>
                           {{-- <button id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</button>--}}
                        </div>
                    </div>

                    {{--<div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account!
                                <a href="{{ URL::to('users/register') }}">Sign Up Here</a>
                            </div>
                        </div>
                    </div>--}}
                    {{ Form::close() }}

@stop
