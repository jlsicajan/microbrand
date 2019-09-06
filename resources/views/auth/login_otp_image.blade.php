@extends('layouts.app_landing')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center h-100vh">
            <div class="col-md-7 main_login_background"></div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center flex-column my-5">
                    <a class="navbar-brand mb-5" href="{{ url('/') }}">
                        <img src="/images/logo.png" alt="MICROBRAND">
                    </a>

                    <h3 class="influencer_login mt-5">Influencer Login</h3>
                    <form class="mb-5" method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <span class="dont_have_an_account">Enter your phone number</span>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-md-12">

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">331</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-1 mb-5">
                            <div class="col-md-12">
                                <button type="submit" class="btn orange_button color-white"><strong>GET OTP</strong>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="form-group row mt-5">
                        <div class="col-md-12 text-center">
                            <span>Don't have an account?</span>
                            <h4><strong class="resend_otp">SIGN UP AS AN INFLUENCER</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
