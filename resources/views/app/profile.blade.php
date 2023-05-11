@extends('layouts.app')

@section('content')
    <div class="py-10">
        {{-- <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Profile</h1>
            </div>
        </header> --}}
        <main class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class=" bg-white px-4 py-5 sm:px-6">
                    <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                        <div class="ml-4 mt-2">
                            <h3 class="text-base font-semibold leading-6 text-gray-900"></h3>
                        </div>

                        <div class="ml-4 mt-2 flex-shrink-0">
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/billing">
                                    <button type="button"
                                        class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Billing</button></a>
                                    <button type="submit"
                                        class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Logout</button>
                                </form>


                            </div>
                        </div>
                    </div>

                    <!--
              This example requires some changes to your config:
              
              ```
              // tailwind.config.js
              module.exports = {
                // ...
                plugins: [
                  // ...
                  require('@tailwindcss/forms'),
                ],
              }
              ```
            -->
                    <form action="/profile" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-12">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                                <div>
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Profile</h2>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">This information will not be displayed
                                        publicly. This is information that we, as the company would like to know more about you.</p>
                                </div>

                                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                                    <div class="sm:col-span-4">
                                        <label for="name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                        <div class="mt-2">
                                            <div
                                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                {{-- <span
                                                    class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">http://</span> --}}
                                                <input type="text" name="name" id="name"
                                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                    value="{{ Request::user()->name}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="about"
                                            class="block text-sm font-medium leading-6 text-gray-900">About</label>
                                        <div class="mt-2">
                                            <textarea id="about" name="about" rows="3"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ Request::user()->profile->about}}</textarea>
                                        </div>
                                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about
                                            yourself.</p>
                                    </div>

                                    {{-- <div class="col-span-full">
                                        <label for="photo"
                                            class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                                        <div class="mt-2 flex items-center gap-x-3">
                                            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <button type="button"
                                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                                        </div>
                                    </div> --}}

                                   
                                </div>
                            </div>

                     
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                            <button type="submit"
                                class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Save</button>
                        </div>
                    </form>



                </div>




      



            </div>
        </main>
    </div>
@endsection
