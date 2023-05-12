@extends('layouts.app')

@section('content')
    <div class="py-10">
        <header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Record Management</h1>
            </div>
        </header>
        <main class="py-6">

            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">



                <form action="/records" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow">
                        <div class="px-4 py-5 sm:p-6">

                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                {{-- <span
                                class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">http://</span> --}}
                                <input type="text" name="title" id="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Name of file">
                            </div>

                            <label for="formFile" class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">Record
                                to be uploaded</label>
                            <input
                                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                name="file" type="file" id="formFile" />

                        </div>
                        <div class="px-4 py-4 sm:px-6">
                            <button type="submit">Upload record</button>

                        </div>
                    </div>
                </form>


                <ul role="list" class="divide-y divide-gray-100">
                    @forelse($records as $record)
                        <a href="/records/{{ $record->uuid }}">
                            UUID: {{ $record->uuid }} <br />
                            @if ($record->raw_url)
                                https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ $record->raw_url }}
                            @else
                                No Link
                            @endif
                            <br />
                            Status: {{ $record->status }} <br />
                        </a>
                        <br />



                    @empty
                        No Record Exist Yet.
                    @endforelse

                </ul>



            </div>



        </main>
    </div>
@endsection
