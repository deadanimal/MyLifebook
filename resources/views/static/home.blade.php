@extends('layouts.static')

@section('content')
    <div class="bg-white">

        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
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
            <div class="lg:hidden" role="dialog" aria-modal="true">
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
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
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

        <div class="relative isolate pt-14">
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%"
                        y="-1" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path
                        d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
            </svg>
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
                    <div class="flex">

                    </div>
                    <h1 class="mt-10 max-w-lg text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                        Supercharge your life now!
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        <i>Memoir</i> will improve your learning, memory, work, creativity, relationship in your personal and professional
                        life. <i>Memoir</i> is your partner to <b>grow together</b>.
                    </p>

                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="/dashboard"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Access Dashboard</a>
                        <a href="/register" class="text-sm font-semibold leading-6 text-gray-900">Register an account <span
                                aria-hidden="true">→</span></a>
                    </div>

                    {{-- <h1 class="mt-10 max-w-lg text-xl font-bold tracking-tight text-gray-900 sm:text-xl">
                        Download Memoir today
                    </h1>
                    <div class="mt-4 flex items-center gap-x-6">
                        <a href="https://apps.apple.com/us/app/my-memoir/id6448801162">
                            <img src="/assets/images/app_store.svg" class="h-12 pr-4 bounce-top-icons">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=my.memoir.app">
                            <img src="/assets/images/play_store.svg" class="h-12 bounce-top-icons">
                        </a>
                    </div> --}}
                </div>
                <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
                    <svg viewBox="0 0 366 729" role="img" class="mx-auto w-[22.875rem] max-w-full drop-shadow-xl">
                        <title>App screenshot</title>
                        <defs>
                            <clipPath id="2ade4387-9c63-4fc4-b754-10e687a0d332">
                                <rect width="316" height="684" rx="36" />
                            </clipPath>
                        </defs>
                        <path fill="#4B5563"
                            d="M363.315 64.213C363.315 22.99 341.312 1 300.092 1H66.751C25.53 1 3.528 22.99 3.528 64.213v44.68l-.857.143A2 2 0 0 0 1 111.009v24.611a2 2 0 0 0 1.671 1.973l.95.158a2.26 2.26 0 0 1-.093.236v26.173c.212.1.398.296.541.643l-1.398.233A2 2 0 0 0 1 167.009v47.611a2 2 0 0 0 1.671 1.973l1.368.228c-.139.319-.314.533-.511.653v16.637c.221.104.414.313.56.689l-1.417.236A2 2 0 0 0 1 237.009v47.611a2 2 0 0 0 1.671 1.973l1.347.225c-.135.294-.302.493-.49.607v377.681c0 41.213 22 63.208 63.223 63.208h95.074c.947-.504 2.717-.843 4.745-.843l.141.001h.194l.086-.001 33.704.005c1.849.043 3.442.37 4.323.838h95.074c41.222 0 63.223-21.999 63.223-63.212v-394.63c-.259-.275-.48-.796-.63-1.47l-.011-.133 1.655-.276A2 2 0 0 0 366 266.62v-77.611a2 2 0 0 0-1.671-1.973l-1.712-.285c.148-.839.396-1.491.698-1.811V64.213Z" />
                        <path fill="#343E4E"
                            d="M16 59c0-23.748 19.252-43 43-43h246c23.748 0 43 19.252 43 43v615c0 23.196-18.804 42-42 42H58c-23.196 0-42-18.804-42-42V59Z" />
                        <foreignObject width="316" height="684" transform="translate(24 24)"
                            clip-path="url(#2ade4387-9c63-4fc4-b754-10e687a0d332)">
                            <img src="https://tailwindui.com/img/component-images/mobile-app-screenshot.png"
                                alt="" />
                        </foreignObject>
                    </svg>
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
                    <b>Memoir</b> is the partner for you, be it in learning a new language or reminiscing the memories in the past.
                    <i>Memoir</i> is there for you, <b>all the time, everytime</b>.
                </p>
            </div>
        </div>
        <div class="relative overflow-hidden pt-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <img src="https://tailwindui.com/img/component-images/project-app-screenshot.png" alt="App screenshot"
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
                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
                        commodo.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Be accountable to yourself
                    </dt>
                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Your dependable assistant
                    </dt>
                    <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit aute id magna.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Powerful API.
                    </dt>
                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
                        commodo.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-900">
                        <img src="/assets/vectors/love-svgrepo-com.svg" class="absolute left-1 top-1 h-5 w-5 " />
                        Fully secure & privacy-proof
                    </dt>
                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.</dd>
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
                        <p class="mt-4 text-sm leading-6 text-gray-600">The essentials for <i>Memoir</i> to function as your partner in personal life.</p>
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
                        <p class="mt-4 text-sm leading-6 text-gray-600">If you would like to grow personally and professionally, the best plan for you.</p>
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
                        class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500">Subscribe</a>
                </div>
                <div
                    class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 lg:mt-8 lg:rounded-l-none">
                    <div>
                        <div class="flex items-center justify-between gap-x-4">
                            <h3 id="tier-enterprise" class="text-lg font-semibold leading-8 text-gray-900">Enterprise</h3>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-600">Dedicated support and infrastructure for your
                            company.</p>
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
                        class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 ">Subscribe
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
                                    I really appreciate the thereupatic capabilities of this AI that is being able to dispense advice based on respected physcological school of thoughts.
                                </p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="h-10 w-10 rounded-full bg-gray-50"
                                    src="https://pbs.twimg.com/profile_images/1624728504884662277/4B6NakzW_400x400.jpg"
                                    alt="">
                                <div>
                                    <div class="font-semibold text-gray-900">Afeez Aziz</div>
                                    <a href="https://twitter.com/AfeezAziz"><div class="text-gray-600">@AfeezAziz</div></a>
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
                        to our <a href="mailto:asksophy@memoir.my" class="font-semibold text-indigo-600 hover:text-indigo-500">customer
                            support</a> team.</p>
                </div>
                <div class="mt-10 lg:col-span-7 lg:mt-0">
                    <dl class="space-y-10">
                        <div>
                            <dt class="text-base font-semibold leading-7 text-gray-900">Can you learn a new language with <i>Memoir</i>?</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">Yes, you can learn a new language with the help of <b>Sophy</b>. Sophy will keep track of your progress and be your biggest cheerleader and coach to learn a new language.</dd>
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
                    <a href="/dashboard" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Access Dashboard</a>
                    <a href="/register" class="text-sm font-semibold leading-6 text-gray-900">Register <span aria-hidden="true">→</span></a>
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
