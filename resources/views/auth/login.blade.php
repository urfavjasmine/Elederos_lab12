@extends('layouts.app')

@section('contents')
<h1>Login</h1>

<form action="{{ route('login.attempt') }}" method="POST">

    @csrf


    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif


    <input placeholder="email" type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <small style="color: red;">{{ $message }}</small>
        <br>
    @enderror

    <input placeholder="password" type="password" name="password" value="{{ old('password') }}">
    @error('password')
        <small style="color: red;">{{ $message }}</small>
        <br>
    @enderror

    <input type="submit" value="register">

</form>

@endsection
