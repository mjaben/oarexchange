@extends('layout.home')
@section('content')

        <section
            class="eg-login__area pt-140 pb-140 p-relative z-index-1 fix"
            data-aos="zoom-in-up"
            data-aos-duration="3000"
        >
            <div class="container">
                <div class="row justify-content-center " >
                    <div class="col-xl-6 col-lg-8" >
                        <div class="eg-login__wrapper" style="padding:24px 10px;">
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
                                    Hello! Create your Account
                                </h3>
                                @if(count($errors) > 0)
                                  @foreach($errors->all() as $error)
                                  <div class="alert alert-danger" style="width:100%; margin:auto">
                                      {{$error}}</div>
                                  @endforeach
                                  @endif
                                  @if(session('success'))
                                  <div class="alert alert-success" style="width:100%; margin:auto">
                                  {{session('success')}}</div>
                                  @endif

                                  @if(session('error'))
                                  <div class="alert alert-danger" style="width:100%; margin:auto">
                                  {{session('error')}}</div>
                                  @endif
                                  <br>
                                <p>
                                    Welcome to OAR Exchange Fill in the fields
                                    below to get started.
                                </p>
                            </div>
                            <div class="eg-login__option">
                                <div class="comment-form">
                                    <form
                                        action="{{ route('register') }}"
                                        method="POST"
                                    >
                                        @csrf
                                        <div class="row">
                                            <div
                                                class="form-grp login__input-box"
                                            >
                                                <label for="name"
                                                    >First name</label
                                                >
                                                <input
                                                    type="text"
                                                    name="name"
                                                    placeholder="e.g Nathaniel"
                                                />
                                            </div>

                                            <div
                                                class="form-grp login__input-box"
                                            >
                                                <label for="name"
                                                    >Last name</label
                                                >
                                                <input
                                                    type="text"
                                                    name="last_name"
                                                    placeholder="e.g Adeleke"
                                                />
                                            </div>

                                            <div
                                                class="form-grp login__input-box"
                                            >
                                                <label for="email"
                                                    >Your Email Address</label
                                                >
                                                <input
                                                    id="email"
                                                    type="text"
                                                    placeholder="Enter your email address"
                                                    name="email"
                                                />
                                                <p class="form_error"></p>
                                            </div>
                                            <div
                                                class="form-grp login__input-box"
                                            >
                                                <label for="name"
                                                    >Choose a Username
                                                </label>
                                                <input
                                                    type="text"
                                                    name="username"
                                                    placeholder="@"
                                                />
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
                                                  id="pass-register"
                                                  placeholder="Min. 6 characters"
                                                />
                                                <span class="input-right_icon">
                                                  <i
                                                    id="icon-register"
                                                    class="fa fa-eye"
                                                    onclick="togglePassword('pass-register', 'icon-register')"
                                                  ></i>
                                                </span>
                                            </div>
                                            <div
                                                class="form-grp login__input-box"
                                            >
                                                <label for="name"
                                                    >Confirm Password
                                                </label>
                                                <input
                                                type="password"
                                                name="password_confirmation"
                                                placeholder="Enter confirm password"
                                                id="pass-register-confirm"
                                              />
                                              <span class="input-right_icon">
                                                <i
                                                  id="icon-register-confirm"
                                                  class="fa fa-eye"
                                                  onclick="togglePassword('pass-register-confirm', 'icon-register-confirm')"
                                                ></i>
                                              </span>
                                            </div>
                                            <div
                                                class="form-grp login__input-box"
                                            >
                                                <label for="name"
                                                    >Referral Code (Optional)
                                                </label>
                                                <input
                                                    type="text"
                                                    id="referralCode"
                                                    name="ref_code"
                                                    placeholder="Enter Code"
                                                />
                                            </div>
                                            <div
                                                class="form-grp checkbox-grp"
                                                style="margin-bottom: 30px"
                                            >
                                                <input
                                                    style="margin-top: 0px"
                                                    type="checkbox"
                                                    class="form-check-input"
                                                    id="checkbox"
                                                />
                                                <label for="checkbox"
                                                    >I agree with the
                                                    <a href="#"
                                                        >Terms of Service</a
                                                    >
                                                    and the
                                                    <a href="{{route('privacyPolicy')}}"
                                                        >Privacy Policy .</a
                                                    ></label
                                                >
                                            </div>
                                            
                                            <!-- Cloudflare Turnstile -->
                                            <div class="form-grp login__input-box">
                                                <label for="turnstile">Security Verification</label>
                                                <div class="cf-turnstile" data-sitekey="{{ config('turnstile.site_key') }}"></div>
                                                @if ($errors->has('cf-turnstile-response'))
                                                    <div class="error" style="color: #c0392b; margin-top: 10px;">{{ $errors->first('cf-turnstile-response') }}</div>
                                                @endif
                                            </div>
                                            
                                            <div style="padding:0 20px;">
                                            <button
                                            style="width: 100%;"
                                                type="{{ __('Register') }}"
                                                class="btn"
                                            >
                                                Register Now
                                            </button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    <p class="mb-0 pt-20">
                                        Already have an account?
                                        <span
                                            ><a href="{{ route('login') }}"
                                                >Sign In</a
                                            ></span
                                        >
                                    </p>
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
            data-aos-duration="2000"
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
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endsection