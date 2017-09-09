@extends('layouts.app')

@section('content')


    <form class="form-horizontal form-material" id="loginform" action="{{ route('register') }}" method="post">
        {{ csrf_field() }}
        <h3 class="box-title m-b-20">Register</h3>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" name="name" id="name" type="text" value="{{ old('name') }}" required autofocus placeholder="Name">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" name="email" id="email" type="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <input id="password" class="form-control" name="password" type="password" required="" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
            </div>
        </div>


        <div class="form-group text-center m-t-20">
            <div class="col-md-12">
                <button class="btn btn-info btn-small btn-block text-uppercase waves-effect waves-light" type="submit">Register</button>
            </div>
        </div>

        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>Already have an account? <a href="{{ route('login') }}" class="text-primary m-l-5"><b>Login</b></a></p>
            </div>
        </div>

    </form>

@endsection
