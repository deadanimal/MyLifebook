@extends('layouts.app')

@section('content')
    <div class="py-10">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Record</h1>
            </div>
        </header>
        <main class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                @forelse($records as $record)
                    {{ $record }} <br />
                @empty
                    No Record Exist Yet.
                @endforelse

            </div>
        </main>
    </div>
@endsection
