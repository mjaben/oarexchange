@extends('layout.home')
@section('content')

        <section class="eg-login__area pt-140 pb-140 p-relative z-index-1 fix">
            <div class="container pt-40">
                <div class="row justify-content-center">
                    <div
                        class="col-xl-6 col-lg-8"
                        data-aos="zoom-in-up"
                        data-aos-duration="3000"
                    >
                        <div class="eg-login__wrapper">
                            <div class="eg-login__top text-center mb-30">
                                <div style="margin-bottom: 20px">
                                    <a href="index.html">
                                        <img
                                            src="{{asset('assets/assetss/img/favicon.png')}}"
                                            style="height: 64px"
                                            alt="Logo"
                                        />
                                    </a>
                                </div>
                                <h3 class="eg-login__title">
                                    Log in to your account
                                </h3>
                                <!-- <p>
                  Kindly Fill in your details to login
                  <span
                    ><a href="/register.html">Create a free account</a></span
                  >
                </p> -->
                                <p>
                                    Don’t have an account yet?
                                    <span
                                        ><a href="{{ route('register') }}"
                                            >Create a free account</a
                                        ></span
                                    >
                                </p>
                            </div>
                            <div class="text-center">
                                @if(session('error'))
                                   <div class="alert alert-danger" style="width:100%; margin:auto">
                                  <b>{!!session('error')!!}</b></div>
                               @endif
                           </div>
                           <div class="text-center">
                               @if(session('success'))
                               <div class="alert alert-success" style="width:100%; margin:auto">
                               {{session('success')}}</div>
                               @endif
                        </div>
                            <br>
                            <h3>Register new account</h3>
                            <br>
                            <p></p>
                            <div class="eg-login__option">
                                <div class="comment-form">
                                    <form
                                        method="POST"
                                        action="{{ route('login') }}"
                                    >
                                        @csrf
                                        <div class="form-grp login__input-box">
                                            <label for="email"
                                                >Your Email Address</label
                                            >
                                            <input
                                                id="email"
                                                type="email"
                                                placeholder="Enter your email address"
                                                name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                            />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div
                                                class="form-grp login__input-box"
                                            >
                                                <label for="name"
                                                    >Password
                                                </label>

                                                <input
                                                  type="password"
                                                  name="password"
                                                  id="log-login"
                                                  placeholder="Min. 6 characters"
                                                  class="form-control  @error('password') is-invalid @enderror"
                                                />
                                                <span class="input-right_icon">
                                                  <i
                                                    id="icon-log"
                                                    class="fa fa-eye"
                                                    onclick="togglePassword('log-login', 'icon-log')"
                                                  ></i>
                                                </span>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        <div
                                            class="d-flex align-items-center justify-content-between mb-20"
                                        >
                                            <div class="form-grp checkbox-grp">
                                                <input
                                                    style="margin-top: 0px"
                                                    type="checkbox"
                                                    class="form-check-input"
                                                    id="checkbox"
                                                />
                                                <label for="checkbox"
                                                    >Remember me</label
                                                >
                                            </div>
                                            
                                            <div class="eg-login__forgot">
                                                @if(Route::has('password.request'))
                                                <a
                                                    href="{{ route('password.request') }}"
                                                    >Forgot password?</a
                                                >
                                                @endif
                                                <!-- <a href="/forgot"
                                                    >Forgot Password?</a
                                                > -->
                                            </div>
                                        </div>
                                        <button
                                            type="{{ __('Log in') }}"
                                            id="submit"
                                            class="btn"
                                            style="width: 100%"
                                        >
                                            Login
                                        </button>
                                    </form>
                                    <p class="ajax-response mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    CTA Area 3
    ==============================-->
        <div
            class="pb-120 position-relative z-index-common"
            data-aos="zoom-in-up"
            data-aos-duration="3000"
        >
            <div class="container">
                <div class="cta-wrap3">
                    <div class="cta-wrap-details">
                        <div class="section-title mb-20">
                            <h2 class="title style2 text-title">
                                Join the Future of Finance Today!
                            </h2>
                            <p class="sec-text text-title">
                                Start Trading Cryptocurrencies and Unlock Your
                                Financial Potential Don't Miss Out!
                            </p>
                        </div>
                        <a href="{{ route('register') }}" class="btn btn3">
                            Sign Up Now
                        </a>
                    </div>
                    <div class="cta-3-thumb movingX">
                        <img
                            src="{{asset('assets/assetss/img/update/normal/cta_3-1.png')}}"
                            alt="img"
                        />
                    </div>
                </div>
            </div>
        </div>
@endsection