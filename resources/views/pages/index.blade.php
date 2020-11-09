@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    <h1>Welcome to Ascend!  </h1>
        <p>Our features includes:</p>
        <div>
        <dl>
            <dd>Register with sms otp</dd>
            <dd>Reset password with otp</dd>
            <dd>Register with email link</dd>
            <dd>Reset password with email link</dd>
            
        </dl>
        @if (!Auth::check())
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
@endsection
