@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../images/logo.svg" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="/login" class="text-primary"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
