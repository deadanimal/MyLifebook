@extends('layouts.authentication')

@section('content')

<form action="/register" method="POST">
    @csrf

    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="password_confirmation" placeholder="password">

    <button class="rounded-full" type="submit">Register</button>

</form>


@endsection