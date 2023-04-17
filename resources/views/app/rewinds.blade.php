@extends('layouts.app')

@section('content')
    @forelse($rewinds as $rewind)
        {{ $rewind }} <br />
    @empty
        No rewind Asked Yet
    @endforelse
@endsection
