<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <div class="page_wrapper w-100 d-flex">
        @livewire('inc.sidebar')
        <div class="main-wrapper w-100">
                @livewire('inc.header')
            <div class="container-fluid">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
    @livewireScripts
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    @stack('js')
</body>

</html>
