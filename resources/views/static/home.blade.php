@extends('layouts.static')

@section('content')
    <div class="bg-white">

        <header class="absolute inset-x-0 top-0 z-50" x-data="{ open: false }">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" x-on:click="open = !open"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a> --}}
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="/dashboard" class="text-sm font-semibold leading-6 text-gray-900">Dashboard<span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true" x-show="open">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="/" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="open = !open"> 
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                {{-- <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                      <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                      <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                      <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a> --}}
                            </div>
                            <div class="py-6">
                                <a href="/dashboard"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate overflow-hidden bg-white">

            <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">

                    <h1 class="mt-10 max-w-lg text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                        Supercharge your life with <i>Memoir</i> now!
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        <i>Memoir</i> will improve your learning, memory, work, creativity, relationship in your personal
                        and professional
                        life. <i>Memoir</i> is your partner to <b>grow together</b>.
                    </p>

                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="/dashboard"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Dashboard</a>
                        <a href="/register" class="text-sm font-semibold leading-6 text-gray-900">Register
                            <span aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div
                    class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                    <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                        <div
                            class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                            <img src="/assets/images/dashboard.png"
                                alt="App screenshot" width="2432" height="1442"
                                class="w-[76rem] rounded-md shadow-2xl ring-1 ring-gray-900/10">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Everything you need</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Got problem? Just ask.</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    <b>Memoir</b> is the partner for you, be it in learning a new language or reminiscing the memories in
                    the past.
                    <i>Memoir</i> is there for you, <b>all the time, everytime</b>.
                </p>
            </div>
        </div>
        <div class="relative overflow-hidden pt-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <img src="/assets/images/dashboard.png" alt="App screenshot"
                    class="mb-[-12%] rounded-xl shadow-2xl ring-1 ring-gray-900/10" width="2432" height="1442">
                <div class="relative" aria-hidden="true">
                    <div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]"></div>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8">
            <dl
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Assist you with your relationships
                    </dt>
                    <dd class="inline">Make a <i>memoir</i> of your special ones, to be able to text her forever.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Learn new things
                    </dt>
                    <dd class="inline">Sophy will coach your to learn new languages, new skills such as programming or even
                        life skills such as dating.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Be accountable to yourself
                    </dt>
                    <dd class="inline">Track your progress to grow as a person or professional.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Your dependable coach
                    </dt>
                    <dd class="inline">Sophy will coach you in your quest to upskill yourself. Anywhere, anything, anytime.
                    </dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Godsend assistant
                    </dt>
                    <dd class="inline">Sophy will help you to write text messages, emails and anything that you need from a
                        Virtual Assistant.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Fully secure & privacy-proof
                    </dt>
                    <dd class="inline">We encrypt all of your data. Your conversations will Sophy will always remain
                        private.</dd>
                </div>
            </dl>
        </div>
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Pricing</h2>
                <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Pricing plans for every need possible
                </p>
            </div>
            <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600"></p>
            <div
                class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div
                    class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 lg:mt-8 lg:rounded-r-none">
                    <div>
                        <div class="flex items-center justify-between gap-x-4">
                            <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-gray-900">Personal</h3>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-600">The essentials for <i>Memoir</i> to function as
                            your partner in personal life.</p>
                        <p class="mt-6 flex items-baseline gap-x-1">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">$30</span>
                            <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                        </p>
                        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Unlimited text records & backup
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Unlimited text conversations with Sophy
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                For personal use only
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Community support only
                            </li>
                        </ul>
                    </div>
                    <a href="/register?plan=1" aria-describedby="tier-freelancer"
                        class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">Subscribe</a>
                </div>
                <div
                    class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 lg:z-10 lg:rounded-b-none">
                    <div>
                        <div class="flex items-center justify-between gap-x-4">
                            <h3 id="tier-startup" class="text-lg font-semibold leading-8 text-indigo-600">Professional
                            </h3>
                            <p
                                class="rounded-full bg-indigo-600/10 px-2.5 py-1 text-xs font-semibold leading-5 text-indigo-600">
                                Most popular</p>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-600">If you would like to grow personally and
                            professionally, the best plan for you.</p>
                        <p class="mt-6 flex items-baseline gap-x-1">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">$600</span>
                            <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                        </p>
                        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Everything that comes with Personal Plan
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Can <b><i>talk</i></b> with Sophy
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Develop skills together with Sophy
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Discuss with Sophy on personal issues
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                24-hour support response time
                            </li>
                        </ul>
                    </div>
                    <a href="/register?plan=2" aria-describedby="tier-startup"
                        class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500">Apply
                        for Waitlist</a>
                </div>
                <div
                    class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 lg:mt-8 lg:rounded-l-none">
                    <div>
                        <div class="flex items-center justify-between gap-x-4">
                            <h3 id="tier-enterprise" class="text-lg font-semibold leading-8 text-gray-900">Enterprise</h3>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-600">The ultimate plan to be able to use Sophy as your
                            assistant in life and business.</p>
                        <p class="mt-6 flex items-baseline gap-x-1">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">$3,000</span>
                            <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
                        </p>
                        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Everything that comes with Professional Plan
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Unlimited digital automations
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Advanced personal analytics
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Produce digital output and work
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Dedicated account manager
                            </li>
                        </ul>
                    </div>
                    <a href="/register?plan=3" aria-describedby="tier-enterprise"
                        class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 ">Apply
                        for Waitlist
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-xl text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We are supercharging thousands
                    of amazing people</p>
            </div>
            <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                            <blockquote class="text-gray-900">
                                <p>
                                    I really appreciate the thereupatic capabilities of this AI that is being able to
                                    dispense advice based on respected physcological school of thoughts.
                                </p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="h-10 w-10 rounded-full bg-gray-50"
                                    src="https://pbs.twimg.com/profile_images/1624728504884662277/4B6NakzW_400x400.jpg"
                                    alt="">
                                <div>
                                    <div class="font-semibold text-gray-900">Afeez Aziz</div>
                                    <a href="https://twitter.com/AfeezAziz">
                                        <div class="text-gray-600">@AfeezAziz</div>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- More testimonials... -->
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-5">
                    <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
                    <p class="mt-4 text-base leading-7 text-gray-600">Can’t find the answer you’re looking for? Reach out
                        to our <a href="mailto:asksophy@memoir.my"
                            class="font-semibold text-indigo-600 hover:text-indigo-500">customer
                            support</a> team.</p>
                </div>
                <div class="mt-10 lg:col-span-7 lg:mt-0">
                    <dl class="space-y-10">
                        <div>
                            <dt class="text-base font-semibold leading-7 text-gray-900">Can you learn a new language with
                                <i>Memoir</i>?
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Yes, you can learn a new language with the
                                help of <b>Sophy</b>. Sophy will keep track of your progress and be your biggest cheerleader
                                and coach to learn a new language.</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold leading-7 text-gray-900">Who is <b>Sophy</b>?</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">
                                Sophy is an AI chatbot that has been trained to cater to your personal preference.
                                She is as the smartest, nicest, perhaps prettiest AI in the world.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Boost your productivity.<br>Start
                    using <i>Memoir</i> today.</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">
                    Use <i>Memoir</i> to superchage your personal and professional life today.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/dashboard"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dashboard</a>
                    <a href="/register" class="text-sm font-semibold leading-6 text-gray-900">Register <span
                            aria-hidden="true">→</span></a>
                </div>
                {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="https://apps.apple.com/us/app/my-memoir/id6448801162">
                        <img src="/assets/images/app_store.svg" class="h-12 pr-4 bounce-top-icons">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=my.memoir.app">
                        <img src="/assets/images/play_store.svg" class="h-12 bounce-top-icons">
                    </a>
                </div> --}}

            </div>
        </div>
    </div>
@endsection
