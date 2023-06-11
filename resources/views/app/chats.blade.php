@extends('layouts.app')

@section('content')
    <div class="pt-10">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Conversation with Sophie</h1>
            </div>
        </header>
        <main class="pt-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="flow-root">
                    <ul role="list" class="-mb-8">

                        @forelse($chats->reverse() as $chat)
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
                                                    <a href="#" class="font-medium text-gray-900">Sophie</a>
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

                @if (isset($chat))
                    <div class="flex items-start space-x-4 pt-6">
                        <div class="flex-shrink-0">
                            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{-- <img class="inline-block h-10 w-10 rounded-full"
                            src="https://img.icons8.com/?size=512&id=qeYxlZaoymoc&format=png" alt=""> --}}
                        </div>
                        <div class="min-w-0 flex-1">
                            <form action="/chats" method="POST">
                                @csrf
                                <div class="border-b border-gray-200 focus-within:border-indigo-600">
                                    <label for="comment" class="sr-only">Chat with Sophie</label>
                                    <textarea rows="3" name="message" id="comment"
                                        class="block w-full resize-none border-0 border-b border-transparent p-0 pb-2 text-gray-900 placeholder:text-gray-400 focus:border-indigo-600 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="Ask Sophie anything..."></textarea>
                                </div>
                                <div class="flex justify-between pt-2">
                                    <div class="flex items-center space-x-5">
                                        <div class="flow-root">
                                            {{-- <button type="button"
                                            class="-m-2 inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                            </svg>
                                            <span class="sr-only">Attach a file</span>
                                        </button> --}}
                                        </div>
                                        <div class="flow-root">
                                            <div>
                                                <label id="listbox-label" class="sr-only">Your mood</label>
                                                <div class="relative">
                                                    {{-- <button type="button"
                                                    class="relative -m-2 inline-flex h-10 w-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500"
                                                    aria-haspopup="listbox" aria-expanded="true"
                                                    aria-labelledby="listbox-label">
                                                    <span class="flex items-center justify-center">
                                                        <!-- Placeholder label, show/hide based on listbox state. -->
                                                        <span>
                                                            <svg class="h-6 w-6 flex-shrink-0" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                                            </svg>
                                                            <span class="sr-only">Add your mood</span>
                                                        </span>
                                                        <!-- Selected item label, show/hide based on listbox state. -->
                                                        <span>
                                                            <span
                                                                class="flex h-8 w-8 items-center justify-center rounded-full bg-red-500">
                                                                <svg class="h-5 w-5 flex-shrink-0 text-white"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                            <span class="sr-only">Excited</span>
                                                        </span>
                                                    </span>
                                                </button> --}}

                                                    <!--
                                        Select popover, show/hide based on select state.
                      
                                        Entering: ""
                                          From: ""
                                          To: ""
                                        Leaving: "transition ease-in duration-100"
                                          From: "opacity-100"
                                          To: "opacity-0"
                                      -->
                                                    {{-- <ul class="absolute z-10 -ml-6 w-60 rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:ml-auto sm:w-64 sm:text-sm"
                                                    tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                                    aria-activedescendant="listbox-option-5">
                                                    <!--
                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
                      Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
                    -->
                                                    <li class="bg-white relative cursor-default select-none px-3 py-2"
                                                        id="listbox-option-0" role="option">
                                                        <div class="flex items-center">
                                                            <div
                                                                class="bg-red-500 flex h-8 w-8 items-center justify-center rounded-full">
                                                                <svg class="text-white h-5 w-5 flex-shrink-0"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </div>
                                                            <span class="ml-3 block truncate font-medium">Excited</span>
                                                        </div>
                                                    </li>
                                                    <!--
                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
                      Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
                    -->
                                                    <li class="bg-white relative cursor-default select-none px-3 py-2"
                                                        id="listbox-option-1" role="option">
                                                        <div class="flex items-center">
                                                            <div
                                                                class="bg-pink-400 flex h-8 w-8 items-center justify-center rounded-full">
                                                                <svg class="text-white h-5 w-5 flex-shrink-0"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
                                                                </svg>
                                                            </div>
                                                            <span class="ml-3 block truncate font-medium">Loved</span>
                                                        </div>
                                                    </li>
                                                    <!--
                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
                      Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
                    -->
                                                    <li class="bg-white relative cursor-default select-none px-3 py-2"
                                                        id="listbox-option-2" role="option">
                                                        <div class="flex items-center">
                                                            <div
                                                                class="bg-green-400 flex h-8 w-8 items-center justify-center rounded-full">
                                                                <svg class="text-white h-5 w-5 flex-shrink-0"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-4.464a.75.75 0 10-1.061-1.061 3.5 3.5 0 01-4.95 0 .75.75 0 00-1.06 1.06 5 5 0 007.07 0zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </div>
                                                            <span class="ml-3 block truncate font-medium">Happy</span>
                                                        </div>
                                                    </li>
                                                    <!--
                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
                      Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
                    -->
                                                    <li class="bg-white relative cursor-default select-none px-3 py-2"
                                                        id="listbox-option-3" role="option">
                                                        <div class="flex items-center">
                                                            <div
                                                                class="bg-yellow-400 flex h-8 w-8 items-center justify-center rounded-full">
                                                                <svg class="text-white h-5 w-5 flex-shrink-0"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm-3.536-3.475a.75.75 0 001.061 0 3.5 3.5 0 014.95 0 .75.75 0 101.06-1.06 5 5 0 00-7.07 0 .75.75 0 000 1.06zM9 8.5c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S7.448 7 8 7s1 .672 1 1.5zm3 1.5c.552 0 1-.672 1-1.5S12.552 7 12 7s-1 .672-1 1.5.448 1.5 1 1.5z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </div>
                                                            <span class="ml-3 block truncate font-medium">Sad</span>
                                                        </div>
                                                    </li>
                                                    <!--
                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
                      Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
                    -->
                                                    <li class="bg-white relative cursor-default select-none px-3 py-2"
                                                        id="listbox-option-4" role="option">
                                                        <div class="flex items-center">
                                                            <div
                                                                class="bg-blue-500 flex h-8 w-8 items-center justify-center rounded-full">
                                                                <svg class="text-white h-5 w-5 flex-shrink-0"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
                                                                </svg>
                                                            </div>
                                                            <span
                                                                class="ml-3 block truncate font-medium">Thumbsy</span>
                                                        </div>
                                                    </li>
                                                    <!--
                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
  
                      Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
                    -->
                                                    <li class="bg-white relative cursor-default select-none px-3 py-2"
                                                        id="listbox-option-5" role="option">
                                                        <div class="flex items-center">
                                                            <div
                                                                class="bg-transparent flex h-8 w-8 items-center justify-center rounded-full">
                                                                <svg class="text-gray-400 h-5 w-5 flex-shrink-0"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                                                </svg>
                                                            </div>
                                                            <span class="ml-3 block truncate font-medium">I feel
                                                                nothing</span>
                                                        </div>
                                                    </li>
                                                </ul> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button type="submit"
                                            class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif



            </div>
        </main>
    </div>

    <script>
        window.scrollTo(0, document.body.scrollHeight);
    </script>
@endsection
