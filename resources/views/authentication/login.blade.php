@extends('layouts.authentication')

@section('content')

<form action="/login" method="POST">
    @csrf

    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">

    <button class="rounded-full" type="submit">Login</button>

</form>


@endsection