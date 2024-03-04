<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Evento</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">


</head>
<body class="antialiased">
@include('Admin.partials.navbar')
@include('Admin.partials.sidebar')
<div id="" class="  overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-800 text-slate-50 min-h-screen">
    <main class="lg:ml-10 pt-28">

@yield('content')
    </main>
    @include('Admin.partials.footer')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="{{asset('assets/js/sidebar.js')}}"></script>
</body>
</html>
