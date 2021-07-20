@extends('Auth.layout.master')

@section('title')
- {{ __('login.login') }}
@endsection

@section('css')

@endsection

@section('content')
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <a href="."><img src="{{ asset('assets/front/images/favicon/android-chrome-192x192.png') }}" height="54" alt="Logo"></a>
            </div>
            <form class="card card-md" action="{{ route('login.post') }}" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('login.login_to_your_account') }}</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('login.email_address') }}</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="{{ __('login.enter_email') }}" value="{{ old('email',\Illuminate\Support\Facades\Cookie::get('email')) }}">
                        @error('email')<span class="text-danger m-1 fst-italic font-weight-bold">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">
                            {{ __('login.password') }}
                            <span class="form-label-description">
                </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" id="password" name="password" class="form-control"  placeholder="{{ __('login.password') }}"  autocomplete="off" value="{{ old('password',\Illuminate\Support\Facades\Cookie::get('password')) }}">
                        </div>
                        @error('password')<span class="text-danger m-1 fst-italic font-weight-bold">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" name="remember_me" class="form-check-input" {{ \Illuminate\Support\Facades\Cookie::get('rememberMe') }}/>
                            <span class="form-check-label">{{ __('login.remember_me_on_this_device') }}</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{ __('login.sign_in') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
