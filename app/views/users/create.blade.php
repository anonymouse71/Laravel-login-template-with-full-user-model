@extends('layouts.default')
@section('content')

    <div class="container">
        <div id="loginbox" style="margin-top:30px;" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            @include('includes.alert')
            <div class="panel panel-info" >

                <div class="panel-heading">
                    <div class="panel-title">Create Account</div>
                </div>

                <div style="padding-top:15px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    {{ Form::open( ['role' => 'form', 'route' => ['users.store']]) }}


                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::label('name', ' Name') }}
                        {{ Form::text('name',null,['class'=>'form-control']) }}
                    </div>


                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::label('full_name', 'Complete Name') }}
                        {{ Form::text('full_name',null,['class'=>'form-control']) }}
                    </div>



                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email',null,['class'=>'form-control']) }}

                    </div>



                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        {{ Form::label('phone', 'Phone') }}
                        {{ Form::text('phone',null,['class'=>'form-control']) }}
                    </div>

                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::label('reg', ' Reg. No') }}
                        {{ Form::text('reg',null,['class'=>'form-control']) }}
                    </div>

                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::label('session', ' Session') }}
                        {{ Form::text('session',null,['class'=>'form-control']) }}
                    </div>

                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password',['class'=>'form-control']) }}

                    </div>

                    <div style="margin-bottom: 15px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {{ Form::label('password_confirmation', 'Confirm Password') }}
                        {{ Form::password('password_confirmation',['class'=>'form-control']) }}
                    </div>







                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            {{ Form::submit('Sign Up') }}
                        </div>
                    </div>

                    {{ Form::close() }}



                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@stop

