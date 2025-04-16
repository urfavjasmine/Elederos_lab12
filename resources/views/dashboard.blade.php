@extends('layouts.app')

@section('contents')

   <h1>Dashboard</h1>
   <h2>Welcome {{ $user->name}}</h2>

   <form action="{{ route('auth.logout') }}" method="POST">
       @csrf
       <input type="submit" value="logout">
   </form>

@endsection
