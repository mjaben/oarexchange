@extends('layout.home')
@section('content')
    <!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-2">
      <div class="hero-bg-gradient1"></div>
      <div class="hero-bg-gradient2"></div>
      <div class="hero-gradient-ball alltuchtopdown"></div>
      <div class="ripple-shape">
        <span class="ripple-1"></span>
        <span class="ripple-2"></span>
        <span class="ripple-3"></span>
        <span class="ripple-4"></span>
        <span class="ripple-5"></span>
      </div>
      <div class="container">
        <div class="hero-style2">
          <div class="row">
            <div class="col-lg-12">
              <h6
                class="hero-subtitle"
                style="text-transform: uppercase"
                data-aos="fade-down"
                data-aos-duration="1000"
              >
                Trusted & Transparent
              </h6>
              <h1
                class="hero-title"
                data-aos="flip-down"
                data-aos-duration="3000"
              >
                <!-- Trade Co -->
                Start Trad<span
                  >i<img
                    class="bitcoin"
                    src="{{asset('assets/assetss/img/update/hero/bitcoin.svg')}}"
                    alt="img" /></span
                >ng
              </h1>
              <div class="btn-wrap">
                <h3
                  class="hero-title2"
                  data-aos="zoom-in-left"
                  data-aos-duration="2000"
                >
                  <!-- Experience The Ease! -->
                  Crypto to Naira Easily
                </h3>
                <div class="hero-content">
                  <p
                    class="hero-text"
                    data-aos="flip-up"
                    data-aos-duration="3000"
                  >
                    OAR Exchange offers a highly secure crypto platform. Buy,
                    sell, or trade Bitcoin, Ethereum, and more. Get the best
                    rates here.
                  </p>
                  <a href="{{route('register')}}" class="btn btn3">
                    Get Started Today
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--<div class="container mb-120">-->
    <!--  <div class="row justify-content-center">-->
    <!--    <div class="col-lg-11 col-xl-10">-->
          <!-- <h2 class="hero-countdown-wrap-title">Market Price Rates</h2> -->
    <!--      <div class="row justify-content-center">-->
    <!--        <div class="col-xl-6 col-lg-8">-->
    <!--          <div class="section-title text-center mb-50">-->
    <!--            <span class="sub-title">MODERATE RATES</span>-->
    <!--            <h2-->
    <!--              class="title style2"-->
    <!--              data-aos="flip-down"-->
    <!--              data-aos-duration="1000"-->
    <!--            >-->
    <!--              Our Price List-->
    <!--            </h2>-->
    <!--            <p class="sec-text" data-aos="fade-up" data-aos-duration="2000">-->
    <!--              Dedicated to bridging the gap between digital currencies and-->
    <!--              the Naira with unwavering reliability and innovation.-->
    <!--            </p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div-->
    <!--        class="table-container"-->
    <!--        data-aos="zoom-in-up"-->
    <!--        data-aos-duration="2000"-->
    <!--      >-->
    <!--        <table class="table table-borderless">-->
    <!--          <thead>-->
    <!--            <tr>-->
    <!--              <th scope="col"><h5>Currency / Coin</h5></th>-->
    <!--              <th scope="col"><h5>Sell Rate NGN</h5></th>-->
    <!--              <th scope="col"><h5>Buy Rate NGN</h5></th>-->
    <!--            </tr>-->
    <!--          </thead>-->
    <!--          <tbody>-->
    <!--            @if($rates)-->
    <!--            @foreach($rates as $rate)-->
    <!--            <tr class="rate-table">-->
    <!--              <td class="align-middle">-->
    <!--                <div class="rate-cover">-->
    <!--                  <div class="rate-card-icon">-->
    <!--                    <img src="{{asset($rate->coin_image)}}" alt="img" />-->
    <!--                  </div>-->
    <!--                  <p class="rate-card-text">{{$rate->coin}}</p>-->
    <!--                </div>-->
    <!--              </td>-->
    <!--              <td class="align-middle">-->
    <!--                <p class="rate-card-text">₦{{$rate->buy}}</p>-->
    <!--              </td>-->
    <!--              <td class="align-middle">-->
    <!--                <p class="rate-card-text">₦{{$rate->sell}}</p>-->
    <!--              </td>-->
    <!--            </tr>-->
    <!--            @endforeach-->
    <!--            @endif-->
    <!--          </tbody>-->
    <!--        </table>-->
    <!--      </div>-->

          <!-- MOBILE RATE CARD BELOW    -->
    <!--      <div class="rate-mobile">-->
    <!--        @if($rates)-->
    <!--        @foreach($rates as $rate)-->
    <!--        <div class="rate-card" data-aos="fade-up" data-aos-duration="2000">-->
    <!--          <div class="rate-cover">-->
    <!--            <div class="rate-card-icon">-->
    <!--              <img src="{{$rate->coin_image}}" alt="img" />-->
    <!--            </div>-->
    <!--            <p class="rate-card-text">{{$rate->coin}}</p>-->
    <!--          </div>-->

    <!--          <p>Sell Rate NGN</p>-->

    <!--          <p class="rate-card-text">₦{{$rate->sell}}</p>-->
    <!--          <p>Buy Rate NGN</p>-->
    <!--          <p class="rate-card-text">₦{{$rate->buy}}</p>-->
    <!--        </div>-->
    <!--        @endforeach-->
    <!--        @endif-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!--==============================
    Brand Area 3
    ==============================-->
    <!--<div class="brand-area3">-->
    <!--  <div class="container">-->
    <!--    <div class="row g-0">-->
    <!--      <div class="col-lg-12">-->
    <!--        <div class="brand-title2 text-center">-->
    <!--          <h6 class="title" data-aos="flip-down" data-aos-duration="2000">-->
    <!--            Backed by leading Blockchain investors and founders-->
    <!--          </h6>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="brand-item-wrap3">-->
    <!--      <div class="row g-0 brand-active2">-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-1.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-2.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-3.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-4.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-5.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-1.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-2.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-12">-->
    <!--          <div class="brand-item">-->
    <!--            <img src="{{asset('assets/assetss/img/update/client/client-2-3.svg')}}" alt="img" />-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <!--==============================
    Feature Area 02
    ==============================-->
    <div
      class="feature-area-2 pt-110 pb-140 position-relative overflow-hidden"
      style="
        background-image: url({{asset('assets/assetss/img/update/bg/feature-area-bg.png')}});
        background-size: cover;
        background-position: center;
      "
      id="blockchain"
    >
      <div class="feature-area-shape">
        <img
          class="feature-shape2-1 alltuchtopdown"
          src="{{asset('assets/assetss/img/update/feature/feature-shape-2-1.png')}}"
          alt="img"
        />
        <img
          class="feature-shape2-2 alltuchtopdown"
          src="{{asset('assets/assetss/img/update/feature/feature-shape-2-2.png')}}"
          alt="img"
        />
        <img
          class="feature-shape2-3 leftToRight"
          src="{{asset('assets/assetss/img/update/feature/feature-shape-2-3.png')}}"
          alt="img"
        />
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-8">
            <div class="section-title text-center mb-50">
              <span
                class="sub-title"
                data-aos="fade-down"
                data-aos-duration="1000"
                >ABOUT OAR EXCHANGE</span
              >
              <h2
                class="title style2"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                Why Choose Us?
              </h2>
              <p
                class="sec-text"
                data-aos="zoom-in-up"
                data-aos-duration="1000"
              >
                We provide secure and cost-effective methods to Buy and Sell
                Bitcoin, Ethereum and other cryptocurrencies in Nigeria
              </p>
            </div>
          </div>
        </div>
        <div class="feature-grid-wrap">
          <div
            class="feature-card-grid"
            data-aos="fade-left"
            data-aos-duration="2000"
          >
            <div class="feature-card-details">
              <h3 class="feature-card-title">Flexibility</h3>
              <p class="feature-card-text">
                <!-- Exchange cryptocurrency for Naira effortlessly. -->
                Experience seamless cryptocurrency-to-Naira exchanges with our
                platform.
              </p>
              <div class="checklist">
                <ul>
                  <li>
                    <i class="fas fa-circle"></i>
                    <span> Premium Market Rates </span>
                  </li>
                  <li>
                    <i class="fas fa-circle"></i> Instantly Withdraw Naira to
                    any Nigerian bank account.
                  </li>
                  <li>
                    <i class="fas fa-circle"></i>Fast Transactions & Borderless
                    Transacting
                  </li>
                </ul>
              </div>
            </div>
            <div class="feature-card-img">
              <img
                class="alltuchtopdown"
                src="{{asset('assets/assetss/img/update/feature/feature-card-thumb-6.png')}}"
                alt="img"
              />

              <img
                class="features-card-bg rotating-circle"
                src="{{asset('assets/assetss/img/images/shape-roll.png')}}"
                alt="shape"
              />
            </div>
          </div>
          <div
            class="feature-card-grid"
            data-aos="fade-right"
            data-aos-duration="2000"
          >
            <div class="feature-card-details">
              <h3 class="feature-card-title">Transference</h3>
              <p class="feature-card-text">
                Explore the Opportunities of the Blockchain Era! Create Your
                Account and Start Trading Cryptos Instantly.
              </p>
            </div>
            <div class="feature-card-img">
              <!-- <img
                src="assets/img/update/feature/feature-card-thumb-2.png"
                alt="img"
              /> -->
              <img src="{{asset('assets/assetss/img/update/normal/why_1-1.png')}}" alt="img" />
            </div>
          </div>
          <div
            class="feature-card-grid"
            data-aos="flip-up"
            data-aos-duration="2000"
          >
            <div class="feature-card-details">
              <h3 class="feature-card-title">Safe & Secure</h3>
              <p class="feature-card-text">
                Discover peace of mind with our Safe and Secure cryptocurrency
                platform.
              </p>
              <p class="feature-card-text">
                Join us today and experience the confidence of secure trading.
              </p>
            </div>
            <div class="feature-card-img">
              <img
                src="{{asset('assets/assetss/img/update/feature/feature-card-thumb-3.png')}}"
                alt="img"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==============================
   Sales Area
    ==============================-->
    <div class="pt-60 pb-120 bg-blac">
      <div class="container">
        <div class="section-title text-center mb-50">
          <h2
            class="title style2"
            style="max-width: 550px; margin-left: auto; margin-right: auto"
            data-aos="zoom-in-up"
            data-aos-duration="1000"
          >
            How to Buy Or Sell with OAR Exchange
          </h2>
        </div>
        <div class="row">
          <div class="col-lg-4" data-aos="flip-up" data-aos-duration="1000">
            <div class="partner-card">
              <div class="partner-card-img2">
                <img
                  style="width: 40px"
                  src="{{asset('assets/assetss/img/images/Ресу-shape-2.png')}}"
                  alt="img"
                />
                <p class="text-outline">01.</p>
              </div>
              <h5 class="get-heading">Create An account</h5>
              <p class="partner-card-text">
                Register and finish our straightforward email verification
                procedure.
              </p>
              <a class="btn btn3" href="{{route('register')}}">Get Started</a>
            </div>
          </div>
          <div class="col-lg-4" data-aos="flip-down" data-aos-duration="2000">
            <div class="partner-card">
              <div class="partner-card-img2">
                <img
                  style="width: 40px"
                  src="{{asset('assets/assetss/img/images/Ресу-shape-2.png')}}"
                  alt="img"
                />
                <p>02.</p>
              </div>
              <h5 class="get-heading">Update Your Profile</h5>
              <p class="partner-card-text">
                Quick verification with valid identity card and update your Bank
                Details
              </p>
              <a class="btn btn3" href="{{route('register')}}">Get Started</a>
            </div>
          </div>
          <div class="col-lg-4" data-aos="flip-up" data-aos-duration="3000">
            <div class="partner-card">
              <div class="partner-card-img2">
                <img
                  style="width: 40px"
                  src="{{asset('assets/assetss/img/images/Ресу-shape-2.png')}}"
                  alt="img"
                />
                <p>03.</p>
              </div>
              <h5 class="get-heading">Start Trading!</h5>
              <p class="partner-card-text">
                Click on new order and start trading instantly. Buy and sell
                with ease
              </p>
              <a class="btn btn3" href="{{route('register')}}">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
    Feature Area 03 AlTERNATIVE
    ==============================-->
    <div
      class="pt-140 pb-140 overflow-hidden position-relative z-index-common"
      id="feature"
    >
      <div class="bg-gradient-6"></div>
      <div class="feature-shape-3-1 alltuchtopdown"></div>
      <div class="feature-shape-3-2 alltuchtopdown"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-6 text-center">
            <div
              class="feature-thumb-wrap"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              <img
                src="{{asset('assets/assetss/img/bg/about-hero.png')}}"
                alt="img"
                style="width: 600px"
              />
              <!-- <img
                class="feature-thumb-3-2"
                src="assets/img/update/feature/feature-thumb-3-1.png"
                alt="img"
              /> -->
              <div class="feature-thumb-circle spin"></div>
            </div>
          </div>
          <div class="col-xl-5">
            <div class="section-title mb-75">
              <span
                class="sub-title text-white"
                data-aos="fade-down"
                data-aos-duration="1000"
                >PEOPLE TRUST US</span
              >
              <h2
                class="title style2"
                data-aos="fade-left"
                data-aos-duration="2000"
              >
                Millions of Users Worldwide Trust Us.
              </h2>
              <p class="mt-25" data-aos="flip-up" data-aos-duration="3000">
                Our website boasts state-of-the-art security features, including
                end-to-end encryption, multi-factor authentication, and cold
                storage for your digital assets.
                <a class="text-decoration-underline text-white" href="#"
                  >Join us today and experience the confidence of secure trading
                  platform.</a
                >
              </p>
            </div>
            <div class="counter-grid-wrap">
              <div
                class="counter-wrap"
                data-aos="zoom-in-left"
                data-aos-duration="2000"
              >
                <div class="counter-card">
                  <h3 class="counter-card_number">63K+</h3>
                  <p class="counter-card_text">Users Joined</p>
                </div>
              </div>
              <div
                class="counter-wrap"
                data-aos="zoom-in-up"
                data-aos-duration="3000"
              >
                <div class="counter-card">
                  <h3 class="counter-card_number">1M+</h3>
                  <p class="counter-card_text">Successful Transactions</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--==============================
        Testimonia Area
    ==============================-->
    <div class="pb-140 overflow-hidden">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center mb-50">
              <span
                class="sub-title"
                data-aos="fade-right"
                data-aos-duration="2000"
                >What People Are Saying</span
              >
              <h2
                class="title style2"
                data-aos="fade-left"
                data-aos-duration="3000"
              >
                Positive Experiences and Feedback from Our Satisfied Clients
              </h2>
            </div>
          </div>
        </div>

        <div
          class="testimonial-wrap-3"
          data-aos="zoom-in-up"
          data-aos-duration="3000"
        >
          <div class="testimonial-wrap-circle1 alltuchtopdown"></div>
          <div class="testimonial-wrap-circle2 leftToRight"></div>
          <div class="testimonial-wrap-circle3 leftToRight"></div>
          <div class="testimonial-wrap-bg alltuchtopdown">
            <img src="{{asset('assets/assetss/img/update/bg/testimonial-4-bg.png')}}" alt="img" />
          </div>
          <div class="slider-area testimonial-slider-wrap">
            <div class="row testimonial-slider1">
              <div class="col-lg-6 slider-item">
                <div class="testi-box">
                  <div class="testi-box-profile">
                    <div class="testi-box-profile-thumb">
                      <img
                        src="{{asset('assets/assetss/img/update/testimonial/testi_thumb1_1.png')}}"
                        alt="img"
                      />
                    </div>
                    <div class="testi-box-profile-details">
                      <h4 class="testi-box_name">Akinpele Josef</h4>
                      <span class="testi-box_desig">@akinpelujosef</span>
                    </div>
                    <div class="testi-box-profile-ratting">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                  <p class="testi-box_text">
                    OAR made converting my crypto to Naira a breeze! The process
                    was fast, seamless, and their rates were fantastic.
                    Definitely my go-to platform for crypto transactions.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 slider-item">
                <div class="testi-box">
                  <div class="testi-box-profile">
                    <div class="testi-box-profile-thumb">
                      <img
                        src="{{asset('assets/assetss/img/update/testimonial/testi_thumb1_2.png')}}"
                        alt="img"
                      />
                    </div>
                    <div class="testi-box-profile-details">
                      <h4 class="testi-box_name">Gabriel Popoola</h4>
                      <span class="testi-box_desig">@popoolagabriel20</span>
                    </div>
                    <div class="testi-box-profile-ratting">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                  <p class="testi-box_text">
                    Highly impressed with OAR Exchange! Their platform is
                    user-friendly, and I received my Naira within minutes of
                    initiating the transaction. Trustworthy and efficient
                    service!
                  </p>
                </div>
              </div>
              <div class="col-lg-6 slider-item">
                <div class="testi-box">
                  <div class="testi-box-profile">
                    <div class="testi-box-profile-thumb">
                      <img
                        src="{{asset('assets/assetss/img/update/testimonial/testi_thumb1_4.png')}}"
                        alt="img"
                      />
                    </div>
                    <div class="testi-box-profile-details">
                      <h4 class="testi-box_name">Eniola Ibiyemi</h4>
                      <span class="testi-box_desig">@ennycrytobaby</span>
                    </div>
                    <div class="testi-box-profile-ratting">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                  <p class="testi-box_text">
                    I've tried several crypto-to-Naira platforms, but OAR
                    Exchange stands out for its reliability and excellent
                    customer support. I feel confident using their services for
                    all my crypto needs
                  </p>
                </div>
              </div>
              <div class="col-lg-6 slider-item">
                <div class="testi-box">
                  <div class="testi-box-profile">
                    <div class="testi-box-profile-thumb">
                      <img
                        src="{{asset('assets/assetss/img/update/testimonial/testi_thumb1_3.png')}}"
                        alt="img"
                      />
                    </div>
                    <div class="testi-box-profile-details">
                      <h4 class="testi-box_name">Chuks Azeamaka</h4>
                      <span class="testi-box_desig">@chuksazecrypto</span>
                    </div>
                    <div class="testi-box-profile-ratting">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                  <p class="testi-box_text">
                    Exceeded my expectations! Their transparent fees and fast
                    transactions have earned my trust. I recommend them to
                    anyone looking for a hassle-free way to convert crypto to
                    Naira
                  </p>
                </div>
              </div>
            </div>
            <button
              data-slider-prev=".testimonial-slider1"
              class="slider-arrow prev-btn"
            >
              <i class="fas fa-arrow-left"></i>
            </button>
            <button
              data-slider-next=".testimonial-slider1"
              class="slider-arrow next-btn"
            >
              <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
    CTA Area 3
    ==============================-->
    <div class="pb-120 position-relative z-index-common">
      <div class="container">
        <div class="cta-wrap3" data-aos="fade-up" data-aos-duration="3000">
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
            <a href="{{route('register')}}" class="btn btn3"> Sign Up Now </a>
          </div>
          <div class="cta-3-thumb movingX">
            <img src="{{asset('assets/assetss/img/update/normal/cta_3-1.png')}}" alt="img" />
          </div>
        </div>
      </div>
    </div>
@endsection