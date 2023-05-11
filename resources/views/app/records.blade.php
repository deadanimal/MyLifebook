@extends('layouts.app')

@section('content')
    {{-- <h3>Ask question</h3>
    <form action="/questions" method="POST">
        @csrf
        <input type="text" name="question" placeholder="ask question here..">
        <button class="rounded-full" type="submit">Ask</button>
    </form> --}}

    @forelse($records as $record)
        {{ $record }} <br />
    @empty
        No Record Exist Yet.
    @endforelse
@endsection
