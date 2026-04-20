<footer
      class="footer-wrapper footer-layout2 pb-50"
      data-aos="fade-up"
      data-aos-duration="3000"
    >
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-auto col-lg-6 order-xl-1">
            <div class="widget footer-widget">
              <div class="widget-about">
                <div class="footer-logo">
                  <a href="index.html"
                    ><img
                      src="{{asset('assets/assetss/img/logo/OAR-EXCHANGE-LOGO.svg')}}"
                      style="height: 50px"
                      alt="oar exchange logo"
                  /></a>
                </div>
                <p class="about-text">
                  Secure crypto platform, providing safe and cost-effective
                  avenues to purchase, sell, or trade Bitcoin, Ethereum, and
                  other cryptocurrencies into Naira.
                  <!-- OAR Exchange offers a secure crypto platform, providing safe
                  and cost-effective avenues to purchase, sell, or trade
                  Bitcoin, Ethereum, and other cryptocurrencies into Naira. -->
                </p>
                <div class="social-btn style2">
                  <a href="https://facebook.com/oarexchange"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a href="https://twitter.com/oarxchange">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      fill="none"
                    >
                      <path
                        d="M10.0596 7.34522L15.8879 0.570312H14.5068L9.44607 6.45287L5.40411 0.570312H0.742188L6.85442 9.46578L0.742188 16.5703H2.12338L7.4676 10.3581L11.7362 16.5703H16.3981L10.0593 7.34522H10.0596ZM8.16787 9.54415L7.54857 8.65836L2.62104 1.61005H4.74248L8.71905 7.29827L9.33834 8.18405L14.5074 15.5779H12.386L8.16787 9.54449V9.54415Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </a>
                  <a href="https://www.instagram.com/oarxchange"
                    ><i class="fab fa-instagram"></i
                  ></a>
                  {{-- <a href="https://www.linkedin.com/"
                    ><i class="fab fa-linkedin"></i
                  ></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-auto col-lg-6 order-xl-3">
            <div class="footer-widget widget-newsletter">
              <h3 class="fw-title">NAVIGATION</h3>
              <div class="contact-info-link">
                <a style="color: #92939e" href="/">Home</a>
              </div>
              <div class="contact-info-link">
                <a style="color: #92939e" href="/about">About Us</a>
              </div>
              <div class="contact-info-link">
                <a style="color: #92939e" href="{{route('how-to-trade')}}"
                  >How To Trade</a
                >
              </div>

              <!-- <div class="contact-info-link">
                <a style="color: #92939e" href="/login.html">Login </a>
              </div> -->
              <div class="contact-info-link">
                <a style="color: #92939e" href="{{route('register')}}">Register</a>
              </div>
              <div class="contact-info-link">
                <a style="color: #92939e" href="{{route('terms')}}">Terms</a>
              </div>
              <div class="contact-info-link">
                <a style="color: #92939e" href="{{route('privacyPolicy')}}">Privacy Policy</a>
              </div>
              <div class="contact-info-link">
                <a style="color: #92939e" href="{{route('refundPolicy')}}">Refund Policy</a>
              </div>

              <form class="newsletter-form" style="opacity: 0">
                <div class="form-group">
                  <input
                    class="form-control"
                    type="email"
                    placeholder="Your Email Address"
                    required=""
                  />
                </div>
                <button type="submit" class="btn btn5">Subscribe</button>
              </form>
            </div>
          </div>
          <div class="col-xl-auto col-lg-6 order-xl-2">
            <div class="footer-widget widget-contact">
              <h3 class="fw-title">CONTACT US</h3>

              <div class="contact-info-link">
                Call Us: <a href="tel:+2349056779090">+234-905-677-9090</a>
              </div>
              <div class="contact-info-link">
                E -mail:
                <a href="mailto:info@oarexchange.com">info@oarexchange.com</a>
              </div>
              <p class="contact-info-text">Address: Lagos, Nigeria</p>
              {{-- <p class="contact-info-textt" style="opacity: 0">
                202 Helga Springs Rd, Crawford, TN 38554
              </p> --}}
              <p class="copyright-text">
                © 2024 <a href="#">OAR Exchange</a> All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>