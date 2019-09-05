@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-container-login">

                <div class="card-body d-flex align-items-center flex-column my-5">
                    <h3 class="influencer_sign_up mb-5">Influencer Sign up</h3>
                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="phone_number" type="text" class="form-control main_input_style"
                                       name="phone_number" value=""
                                       placeholder="Name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="phone_number" type="text" class="form-control main_input_style"
                                       name="phone_number" value=""
                                       placeholder="Email" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="phone_number" type="text" class="form-control main_input_style"
                                       name="phone_number" value=""
                                       placeholder="Address" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn main_text_color connect_with_instagram w-100"><i class="fab fa-instagram"></i> <span>Connect with Instagram</span></button>
                            </div>
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <button type="submit" class="btn orange_button color-white"><strong>SIGN UP</strong>
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <div class="col-md-12 text-center">
                                <span class="sign_up_condition">By signing up you agree to our <a href="javascript();">terms of service</a> and <a href="javascript();">privacy policy.</a></span>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
