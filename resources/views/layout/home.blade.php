<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>OAR Exchange | Buy & Sell Bitcoin, Ethereum & Crypto | Fast & Secure</title>

<meta name="description" content="Buy, sell, and trade Bitcoin, Ethereum, and other cryptocurrencies on OAR Exchange. Fast, secure, and reliable digital currency exchange.">

  <meta name="robots" content="index, follow">
  <meta name="author" content="oarex, Oarexchange">
  <meta property="og:title" content="OAR Exchange - Buy and Sell BTC, ETH & other Crypto with ease">
  <!--<meta property="og:description" content="Buy, sell, and trade Bitcoin, Ethereum, and other cryptocurrencies on OAR Exchange. Fast, secure, and reliable digital currency exchange.">-->
  
  <meta property="og:description" content="buy and sell crypto, digital currencies exchange,oar exchange, bitcoin exchange,And oarex, Oarexchange,crypto to naira, digital trading, digital asset exchange digital exchange platform, Ember promo">
  
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('assets/assetss/img/favicon.png')}}"
    />

    <link rel="stylesheet" href="{{asset('assets/assetss/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/default.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/assetss/css/responsive.css')}}" />

    <!-- Silktide Cookie Consent Manager -->
    <link rel="stylesheet" id="silktide-consent-manager-css" href="{{asset('cookie-banner/silktide-consent-manager.css')}}">
    <script src="{{asset('cookie-banner/silktide-consent-manager.js')}}"></script>
    <script>
    silktideCookieBannerManager.updateCookieBannerConfig({
      background: {
        showBackground: true
      },
      cookieIcon: {
        position: "bottomLeft"
      },
      cookieTypes: [
        {
          id: "necessary",
          name: "Necessary",
          description: "<p>These cookies are necessary for the website to function properly and cannot be switched off. They help with things like logging in and setting your privacy preferences.</p>",
          required: true,
          onAccept: function() {
            console.log('Add logic for the required Necessary here');
          }
        },
        {
          id: "analytics",
          name: "Analytics",
          description: "<p>These cookies help us improve the site by tracking which pages are most popular and how visitors move around the site.</p>",
          required: true,
          onAccept: function() {
            console.log('Add logic for the required Analytics here');
          }
        },
        {
          id: "advertising",
          name: "Advertising",
          description: "<p>These cookies provide extra features and personalization to improve your experience. They may be set by us or by partners whose services we use.</p>",
          required: true,
          onAccept: function() {
            console.log('Add logic for the required Advertising here');
          }
        }
      ],
      text: {
        banner: {
          description: "<p>We use cookies on our site to enhance your user experience, provide personalized content, and analyze our traffic. <a href=\"https://oarexchange.com/privacy-policy\" target=\"_blank\">Cookie Policy.</a></p>",
          acceptAllButtonText: "Accept all",
          acceptAllButtonAccessibleLabel: "Accept all cookies",
          rejectNonEssentialButtonText: "Reject non-essential",
          rejectNonEssentialButtonAccessibleLabel: "Reject non-essential",
          preferencesButtonText: "Preferences",
          preferencesButtonAccessibleLabel: "Toggle preferences"
        },
        preferences: {
          title: "Customize your cookie preferences",
          description: "<p>We respect your right to privacy. You can choose not to allow some types of cookies. Your cookie preferences will apply across our website.</p>",
          creditLinkText: "Get this banner for free",
          creditLinkAccessibleLabel: "Get this banner for free"
        }
      },
      position: {
        banner: "bottomCenter"
      }
    });
    </script>
  </head>

  <body class="home-purple-gradientt">
  
    <div id="preloader">
      <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
    <!-- Preloader -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
<!--<div-->
<!--      class=""-->
<!--      style="-->
<!--        position: fixed;-->
<!--        top: 0;-->
<!--        background: white;-->
<!--        color: black;-->
<!--        width: 100%;-->
<!--        height: 24px;-->
<!--        font-size: 14px;-->
<!--        z-index: 999;-->
<!--      "-->
<!--    >-->
<!--      <marquee>-->
<!--        <b>Ember Promo!</b> Trade Digital Assets & Earn Free Data! Trade digital-->
<!--        assets worth: <b>$100 - $499</b> get <b>2GB-3GB free data</b> --->
<!--        <b>$500-$999 </b> get <b>5GB-7GB free data</b> --->
<!--        <b>$1,000-$4,999 </b> get <b>20GB+ free data </b> --->
<!--        <b>$5,000+ December Raffle Ticket</b> Draw & exciting prizes!-->
<!--        <b> <a href="{{ route('register') }}"> Sign up</a></b> now and start trading!-->
<!--        <span style="font-weight: 500"-->
<!--          >Terms and Conditions apply.</span-->
<!--        ></marquee-->
<!--      >-->
<!--    </div>-->
    @include('includes.header')
	   @yield('content')
	  @include('includes.footer')

    <!-- JS here -->
    <script src="{{asset('assets/assetss/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/assetss/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/assetss/js/jquery.easing.js')}}"></script>
    <script src="{{asset('assets/assetss/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/assetss/js/aos.js')}}"></script>
    <script src="{{asset('assets/assetss/js/main.js')}}"></script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2WS3GZTDPF">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-2WS3GZTDPF');
    </script>

    <script>
      function getParameterByName(name, url = window.location.href) {
          name = name.replace(/[\[\]]/g, '\\$&');
          let regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
              results = regex.exec(url);
          if (!results) return null;
          if (!results[2]) return '';
          return decodeURIComponent(results[2].replace(/\+/g, ' '));
      }
      // Get the referral code from the URL
      let referralCode = getParameterByName('ref');

      // If a referral code exists, fill the form field
      if (referralCode) {
          document.getElementById('referralCode').value = referralCode;
      }
      // Ensure the referral code remains in the URL when the form is submitted
      document.getElementById('registerForm').addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent the form from submitting immediately

          let formAction = this.action; // Get the current form action URL
          if (referralCode) {
              // Append the referral code to the form action URL
              formAction += (formAction.includes('?') ? '&' : '?') + 'ref=' + encodeURIComponent(referralCode);
              this.action = formAction; // Set the new form action URL
          }
          this.submit(); // Submit the form
      });
    </script>
  </body>
</html>
