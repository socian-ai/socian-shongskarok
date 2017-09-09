@extends('layouts.app')

@section('content')
    <form class="form-horizontal form-material" id="loginform" action="{{ route('password.email') }}" method="post">
        {{ csrf_field() }}
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

        <div class="form-group text-center m-t-20">
            <div class="col-md-12">
                <button class="btn btn-info btn-small btn-block text-uppercase waves-effect waves-light" type="submit">Send Password Reset Link</button>

            </div>
        </div>

        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>
                    <a class="btn btn-link" href="{{ route('login') }}">
                        Remembered Password?
                    </a>
                </p>
            </div>
        </div>

    </form>
@endsection
