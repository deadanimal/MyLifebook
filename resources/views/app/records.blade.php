@extends('layouts.app')

@section('content')
    <h3>Upload record</h3>
    <form action="/records" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="record">
        <button class="rounded-full" type="submit">Upload</button>
    </form>

    @forelse($records as $record)
        {{ $record }}<br />
    @empty
        No records uploaded Yet
    @endforelse
@endsection
