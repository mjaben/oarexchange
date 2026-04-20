@extends('layout.home')
@section('content')
<section
  class="eg-login__area pt-140 pb-140 p-relative z-index-1 fix"
  data-aos="zoom-in-up"
  data-aos-duration="3000"
>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
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
            <h3 class="eg-login__title">Reset Your Password</h3>
            <!-- <p>
              Welcome to OAR Exchange Fill in the fields below to get
              started.
            </p> -->
          </div>
          <div class="eg-login__option">
            <div class="comment-form">
              <form method="POST" action="{{ url('user-reset-password') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="row">
                  <div class="form-grp login__input-box">
                    <label for="email">Your Email Address</label>
                    <input
                      id="email"
                      type="email"
                      placeholder="Enter your email address"
                      name="email"
                      value="{{ $email ?? old('email') }}" required autofocus
                    />
                    <p class="form_error"></p>
                  </div>
                  <div class="form-grp login__input-box">
                    <label for="name">New Password </label>

                    <input
                      type="password"
                      name="password"
                      id="pass-input"
                      placeholder="Min. 6 characters"
                    />
                    <span class="input-right_icon">
                      <i
                        id="icon-password"
                        class="fa fa-eye"
                        onclick="togglePassword('pass-input', 'icon-password')"
                      ></i>
                    </span>
                  </div>

                  <div class="form-grp login__input-box">
                    <label for="name">Confirm Password </label>

                    <input
                      type="password"
                      name="password_confirmation"
                      id="confirm-pass-input"
                      placeholder="Enter confirm password"
                    />
                    <span class="input-right_icon">
                      <i
                        id="icon-confirm-password"
                        class="fa fa-eye"
                        onclick="togglePassword('confirm-pass-input', 'icon-confirm-password')"
                      ></i>
                    </span>
                  </div>

                  <button type="submit" class="btn">Reset Password</button>
                </div>
              </form>

              <p class="ajax-response mb-0"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection