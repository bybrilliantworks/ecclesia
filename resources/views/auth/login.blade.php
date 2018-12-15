@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<a href="{{url("/")}}" class="logo-name text-lg text-center">Ecclesia</a>
<p class="text-center m-t-md">Please login into your account.</p>

<form class="m-t-md" action="{{url("/login")}}" method="post">
    {!! csrf_field() !!}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" name="password" class="form-control" placeholder="Password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
    <a href="#" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
    {{-- <p class="text-center m-t-xs text-sm">Do not have an account?</p> --}}
    {{-- <a href="{{ url('register')}}" class="btn btn-default btn-block m-t-md">Create an account</a> --}}
</form>
@endsection