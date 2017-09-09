@extends('layouts.app')

@section('content')


    <form class="form-horizontal form-material" id="loginform" action="{{ route('password.request') }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <h3 class="box-title m-b-20">Reset Password</h3>
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

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <input id="password" class="form-control" name="password_confirmation" type="password" required="" placeholder="Confirm Password">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group text-center m-t-20">
            <div class="col-md-12">
                <button class="btn btn-info btn-small btn-block text-uppercase waves-effect waves-light" type="submit">Reset Password</button>
            </div>
        </div>

    </form>

@endsection
