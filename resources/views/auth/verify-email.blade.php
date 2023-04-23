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
                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>
                        @if (session('status') == 'verification-link-sent')
                            <p class="login-box-msg">A new verification link has been sent to the email address you provided during registration.</p>
                        @endif
                        <div class="row">
                            <div class="col">
                               
                                {{-- FORM HERE --}}
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                        
                                    <div>
                                        <x-primary-button class="btn btn-primary form-control">
                                            {{ __('Resend Verification Email') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                        
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                        
                                    <button type="submit" class="btn btn-secondary form-control mt-3">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                                {{-- /FORM --}}
                            </div>
                        </div>
                        <!-- Login form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

@endsection
