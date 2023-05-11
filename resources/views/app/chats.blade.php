@extends('layouts.app')

@section('content')
    {{-- <h3>Ask question</h3>
    <form action="/questions" method="POST">
        @csrf
        <input type="text" name="question" placeholder="ask question here..">
        <button class="rounded-full" type="submit">Ask</button>
    </form> --}}

    @forelse($chats as $chat)
        {{ $chat }} <br />
    @empty
        No Conversation Exist Yet.
    @endforelse
@endsection
