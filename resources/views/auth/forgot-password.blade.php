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
                        <p class="login-box-msg">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        <div class="row">
                            <div class="col">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control" type="email" placeholder="your_email@sample.com" name="email" :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <x-primary-button class="btn btn-primary btn-sm float-right">
                                            {{ __('Email Password Reset Link') }}
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