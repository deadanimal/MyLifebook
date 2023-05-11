@extends('layouts.app')

@section('content')
    <div class="py-10">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Test</h1>
            </div>
        </header>
        <main class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">


                <form action='/test' method="POST" data-rewardful>

                    @csrf

                    <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Submit
                    </button>
                </form>

            </div>
        </main>
    </div>
@endsection
