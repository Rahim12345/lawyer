<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ config('app.name')}} @yield('title')</title>

    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet"/>
    @toastr_css
    @yield('css')

</head>
<body class="antialiased border-top-wide border-primary d-flex flex-column">

@yield('content')

<script src="{{ asset('assets/dist/js/tabler.min.js') }}"></script>
@jquery
@toastr_js
@toastr_render
@yield('js')
</body>
</html>
