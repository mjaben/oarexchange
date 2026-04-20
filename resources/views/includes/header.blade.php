
    <header id="header" class="header-layout1">
      <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
          <div class="row">
            <div class="col-12">
              <div class="menu-wrap">
                <nav class="menu-nav">
                  <div class="logo">
                    <a href="/" 
                      ><img
                        src="{{asset('assets/assetss/img/logo/OAR-EXCHANGE-LOGO.svg')}}"
                        style="height: 50px"
                        alt="Logo"
                    /></a>
                  </div>
                  <div class="navbar-wrap main-menu d-none d-lg-flex">
                    <ul class="navigation">
                      <li class="active menu-item-has-children">
                        <a class="section-link" href="/">Home</a>
                      </li>
                      <li>
                        <a href="/about" class="section-link">About</a>
                      </li>
                      <li>
                        <a href="{{route('how-to-trade')}}" class="section-link"
                          >How To Trade</a
                        >
                      </li>

                      <li><a href="{{ route('register') }}">Register</a></li>
                      <li><a href="{{ route('login') }}">Sign In</a></li>
                    </ul>
                  </div>
                  <div class="header-action">
                    <ul class="list-wrap">
                      <li class="header-login">
                        <a class="btn2" href="{{ route('login') }}">GET STARTED</a>
                      </li>
                    </ul>
                  </div>
                  <div class="mobile-nav-toggler">
                    <i class="fas fa-bars"></i>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <nav class="menu-box">
          <div class="close-btn"><i class="fas fa-times"></i></div>
          <div class="nav-logo">
            <a href="/"
              ><img
                src="{{asset('assets/assetss/img/logo/OAR-EXCHANGE-LOGO.svg')}}"
                style="height: 35px"
                alt="Logo"
            /></a>
          </div>
          <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          </div>
          <div class="social-links">
            <ul class="clearfix list-wrap">
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#">
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
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="menu-backdrop"></div>
      <!-- End Mobile Menu -->
    </header>