@extends('layouts.app')

@section('contents')
<h1>Registration</h1>

<form action="{{ route('auth.register') }}" method="POST">

    @csrf

    <input placeholder="name" type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <small style="color: red;">{{ $message }}</small>
        <br>
    @enderror

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
