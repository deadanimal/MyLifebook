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
                <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow">
                    <div class="px-4 py-5 sm:px-6">
                        Upload Record
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card headers on desktop than on body sections -->
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <!-- Content goes here -->
                        <form action="/records" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="title">
                            <input type="file" name="file">
                            <button type="submit">Create record</button>
                        </form>
                    </div>
                </div>

                <!-- Be sure to use this with a layout container that is full-width on mobile -->
                <div class="px-4 py-5 overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class=" sm:p-6">


                        <!-- Main area -->
                        <ul role="list" class="divide-y divide-gray-100">
                            @forelse($records as $record)
                                UUID: {{ $record->uuid }} <br />
                                @if ($record->raw_url)
                                    <a
                                        href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ $record->raw_url }}">Link</a>
                                @else
                                    No Link
                                @endif
                                <br /><br /><br /><br />


                                {{-- <li class="flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">

            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">

                        <span class="absolute inset-x-0 -top-px bottom-0"></span>
                        Leslie Alexander

                    </p>
                    <p class="mt-1 flex text-xs leading-5 text-gray-500">
                        leslie.alexander@example.com
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-x-4">
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time
                            datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>

                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>

            </div>

        </li>                     --}}

                            @empty
                                No Record Exist Yet.
                            @endforelse

                        </ul>


                    </div>
                </div>



            </div>


        </main>
    </div>
@endsection
