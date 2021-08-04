<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    @toastr_css
    @yield('css')
</head>
<body class="antialiased">
<div class="page">
    <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/front/images/favicon/android-chrome-192x192.png') }}" width="110" height="32" alt="{{ config('app.name') }}" class="navbar-brand-image">
                </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                        <span class="avatar avatar-sm"><i class="fa fa-user fa-2x"></i></span>
                        <div class="d-none d-xl-block ps-2">
                            <div>{{ auth()->user()->name }}</div>
                            <div class="mt-1 small text-muted">Admin</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="#" class="dropdown-item">{{ __('admin_master.profile_and_account') }}</a>
                        <a href="{{ route('admin.notifications') }}" class="dropdown-item">{{ __('admin_master.notifications') }} - &nbsp;<span class="badge bg-red float-right">{{ $notification_count }}</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item">{{ __('admin_master.logout') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'admin.dashboard') active @endif">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                                </span>
                                <span class="nav-link-title">
                                  {{ __('admin_master.home') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'admin.settings') active @endif">
                            <a class="nav-link" href="{{ route('admin.settings') }}" >
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                                </span>
                                <span class="nav-link-title">
                                  {{ __('admin_master.settings') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'admin.subscribers') active @endif">
                            <a class="nav-link" href="{{ route('admin.subscribers') }}" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                                <span class="nav-link-title">
                                  {{ __('admin_master.subscribers') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'admin.vekiller.index') active @endif">
                            <a class="nav-link" href="{{ route('admin.vekiller.index') }}" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" /><line x1="9" y1="7" x2="13" y2="7" /><line x1="9" y1="11" x2="13" y2="11" /></svg>
                                <span class="nav-link-title">
                                  {{ __('admin_master.attorneys') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'about.create') active @endif">
                            <a class="nav-link" href="{{ route('about.create') }}" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5.5 5.5l1.706 5.685m5.607 5.609l5.687 1.706" /><path d="M11.683 12.317l6.817 -6.817" /><circle cx="5.5" cy="5.5" r="1.5" /><circle cx="18.5" cy="5.5" r="1.5" /><circle cx="18.5" cy="18.5" r="1.5" /><circle cx="8.5" cy="15.5" r="4.5" /></svg>
                                <span class="nav-link-title">
                                  {{ __('front_master.about') }}
                                </span>
                            </a>
                        </li>

                        <li class="nav-item @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'service.create') active @endif">
                            <a class="nav-link" href="{{ route('service.create') }}" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" /><path d="M13 15v-6l3 4l3 -4v6" /></svg>
                                <span class="nav-link-title">
                                  {{ __('admin_master.services') }}
                                </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-xl d-flex flex-column justify-content-center">
@yield('content')
        </div>
        <footer class="footer footer-transparent d-print-none">
            <div class="container">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; 2020 - {{ date('Y') }}
                                <a href="{{ route('admin.dashboard') }}" class="link-secondary">{{ config('app.name') }}</a>.
                                {{ __('admin_master.all_rights_reserved') }}.
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('admin.dashboard') }}" class="link-secondary" rel="noopener">v0.0.1-beta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{ asset('assets/dist/js/tabler.min.js') }}"></script>
@jquery
@toastr_js
@toastr_render

<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
@yield('js')
</body>
</html>
