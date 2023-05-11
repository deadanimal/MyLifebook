@extends('layouts.app')

@section('content')
    <div class="py-10">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Conversation</h1>
            </div>
        </header>
        <main class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="flow-root">
                    <ul role="list" class="-mb-8">

                        @forelse($chats as $chat)
                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute left-5 top-5 -ml-px h-full w-0.5 bg-gray-200"
                                        aria-hidden="true"></span>
                                    <div class="relative flex items-start space-x-3">
                                        <div class="relative">

                                            <svg class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-400 ring-8 ring-white"
                                                viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                            {{-- <span class="absolute -bottom-0.5 -right-1 rounded-tl bg-white px-0.5 py-px">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span> --}}
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <div>
                                                <div class="text-sm">
                                                    <a href="#" class="font-medium text-gray-900">You</a>
                                                </div>
                                                <p class="mt-0.5 text-sm text-gray-500">Commented {{ $chat->created_at }}
                                                    ago</p>
                                            </div>
                                            <div class="mt-2 text-sm text-gray-700">
                                                <p>{{ $chat->message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex items-start space-x-3">
                                        <div class="relative">
                                            <img class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-400 ring-8 ring-white"
                                                src="/assets/vectors/sophy.png" alt="">


                                            {{-- <span class="absolute -bottom-0.5 -right-1 rounded-tl bg-white px-0.5 py-px">
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span> --}}
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <div>
                                                <div class="text-sm">
                                                    <a href="#" class="font-medium text-gray-900">Sophy</a>
                                                </div>
                                                <p class="mt-0.5 text-sm text-gray-500">Commented {{ $chat->updated_at }}
                                                    ago</p>
                                            </div>
                                            <div class="mt-2 text-sm text-gray-700">
                                                <p>
                                                    {{ $chat->response }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            No Conversation Exist Yet.
                        @endforelse

                    </ul>
                </div>




            </div>
        </main>
    </div>
@endsection
