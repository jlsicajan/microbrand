@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-container-login">
                    <div class="back_button w-100 float-left main_text_color mt-4 ml-4">
                        <i class="fas fa-arrow-left mr-2"></i> <span class="text_back_button"> Back</span>
                    </div>
                    <div class="card-body d-flex align-items-center flex-column my-5">
                        <h3 class="influencer_login mb-5">Influencer Login</h3>
                        <form method="POST" action="{{ route('login') }}" autocomplete="off">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="phone_number" type="text" class="form-control main_input_style"
                                           name="phone_number" value=""
                                           placeholder="Enter OTP sent to your phone number" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row mt-1">
                                <div class="col-md-12 text-center">
                                    <span class="dont_have_an_account">OTP was sent to: +12843281429</span>
                                </div>
                            </div>

                            <div class="form-group row mt-5">
                                <div class="col-md-12">
                                    <button type="submit" class="btn orange_button color-white"><strong>LOGIN</strong>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row mt-5">
                                <div class="col-md-12 text-center">
                                    <span class="resend_otp">Resend OTP</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
