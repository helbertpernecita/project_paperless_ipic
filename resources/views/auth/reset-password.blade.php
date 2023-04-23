@extends('layouts.guest')
@section('guest-content')
    
    <!-- reset password-box -->
<div class="container" >
    <div class="row">
        <div class="col-md-4 offset-md-4 p-2" style="background:linear-gradient(233deg, skyblue, skyblue, lightblue);border-radius:2%">
            <div class="login-box hold-transition" style="width:100%">
                <div class="card">
                    <!-- card body -->
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.n</p>
                        <div class="row">
                            <div class="col">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('password.store') }}">
                                    @csrf
                            
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            
                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                            
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />
                                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                            
                                    <!-- Confirm Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            
                                        <x-text-input id="password_confirmation" class="form-control"
                                                            type="password"
                                                            name="password_confirmation" required autocomplete="new-password" />
                            
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                            
                                    <div class="flex items-center justify-end mt-4">
                                        <x-primary-button class="btn btn-sm btn-primary float-right">
                                            {{ __('Reset Password') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login form -->
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

@endsection
    