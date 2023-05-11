@extends('layouts.app')

@section('content')
    <div class="py-10">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Profile</h1>
            </div>
        </header>
        <main class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <h3>Dashboard</h3>

                update password<br />
                {{-- update email<br /> --}}
                {{-- 2MFA <br /> --}}

                delete account and files <br />
                migrate all data <br />

                <a href="/billing">Go to billing</a>

                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>

            </div>
        </main>
    </div>
@endsection
