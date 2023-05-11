@extends('layouts.app')

@section('content')
    Dashboard

    amount of records - text, audio, video<br/>
    topics trend, learning <br/>
    notifications e.g. birthday or social aspect <br/>
    phone book/email, etc.. <br/>

    <h1>sophy said</h1>
    <h2>ask sophy</h2>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
