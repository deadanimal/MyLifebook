<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loan & Grant Management System</title>

    @vite('resources/js/app.js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>(function(w,r){w._rwq=r;w[r]=w[r]||function(){(w[r].q=w[r].q||[]).push(arguments)}})(window,'rewardful');</script>
    <script async src='https://r.wdfl.co/rw.js' data-rewardful='9b27d7'></script>    

</head>

<body class="antialiased">

    @include('layouts.proto.navbar')

    @yield('content')

</body>

</html>
