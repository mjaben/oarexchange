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
                      src="assets/assetss/img/favicon.png"
                      style="height: 64px"
                      alt="Logo"
                    />
                  </a>
                </div>
                <h3 class="eg-login__title">Activate Account</h3>
                <div class="text-center">
                  @if(session('success'))
                  <div class="alert alert-success" style="width:92%; margin:auto">
                  {{session('success')}}</div>
                  @endif
              </div>
              <br>
              <div class="alert alert-success" style="width:92%; margin:auto">
                <p>
                    Enter the verification code in your email 
                </p>
            </div>
              </div>
              <div class="eg-login__option">
                <div class="comment-form">
                    <form method="POST" action="{{route('verify_user')}}">
                        @csrf
                    <div class="form-grp login__input-box">
                      <label for="email">Activation Code</label>
                      <input
                        type="text" 
                        name="code"
                        placeholder="E-mail Verification Code"
                      />
                      <p class="form_error"></p>
                    </div>
                    <button type="submit" class="btn" style="width: 100%">
                        Activate
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
                Start Trading Cryptocurrencies and Unlock Your Financial
                Potential Don't Miss Out!
              </p>
            </div>
            <a href="/register" class="btn btn3"> Sign Up Now </a>
          </div>
          <div class="cta-3-thumb movingX">
            <img src="assets/assetss/img/update/normal/cta_3-1.png" alt="img" />
          </div>
        </div>
      </div>
    </div>
@endsection