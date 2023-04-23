@extends('layouts.guest')
@section('guest-content')

<!-- Login-box -->
<div class="container" >
    <div class="row">
        <div class="col-md-4 offset-md-4 p-2" style="background:linear-gradient(233deg, skyblue, skyblue, lightblue);border-radius:2%">
            <div class="login-box hold-transition" style="width:100%">
                <div class="card">
                    <!-- Login card body -->
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
        
                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
        
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />
        
                                        <x-text-input id="password" class="form-control"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />
        
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
        
                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
        
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
        
                                        <x-primary-button class="ml-3 btn-primary float-right">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login form -->
                    </div>
                     <!-- social-auth-links -->
                     <div class="row">
                        <div class="col mt-3 px-5">
                            <p class="text-center"><em>- OR -</em></p>
                            <div class="social-auth-links text-center my-3">
                                <a href="/auth/google/redirect" class="btn btn-block btn-danger">
                                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                                </a>
                                <a href="/auth/github/redirect" class="btn btn-block btn-secondary">
                                    <i class="fab fa-github mr-2"></i> Sign in using Github
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.social-auth-links -->
                    <!-- /.login-card-body -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

@endsection