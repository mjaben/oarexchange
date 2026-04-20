<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>OAR Exchange | Cryptocurrency Exchange Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="/admin/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('css/iziToast.css') }}">
    <link rel="shortcut icon" href="{{asset('assets/dassets/images/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('assets/dassets/css/core/libs.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/dassets/css/coinex.min862f.css?v=4.1.0')}}" />
    <link rel="stylesheet" href="{{asset('assets/dassets/css/custom.min862f.css?v=4.1.0')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
      rel="stylesheet"
    />
    <style>
      .copy-btn {
          cursor: pointer;
          padding: 10px 20px;
          background-color: #007bff;
          color: white;
          border: none;
          border-radius: 5px;
      }

      .copy-btn:hover {
          background-color: #0056b3;
      }

      .tooltip {
          visibility: hidden;
          background-color: black;
          color: #fff;
          text-align: center;
          border-radius: 5px;
          padding: 5px;
          position: absolute;
          z-index: 1;
      }

      .copy-container {
          position: relative;
          display: inline-block;
      }

      .copy-container:hover .tooltip {
          visibility: visible;
      }
  </style>
  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
        <div class="loader-body"></div>
      </div>
    </div>
    <!-- loader END -->
    @include('includes.aside')
    <main class="main-content">
      @include('includes.nav')
	   @yield('content')
	  @include('includes.footer-1')
    </main>
    <!-- Backend Bundle JavaScript -->
    <script>
       function copyToClipboard() {
            // Get the text field
            let copyText = document.getElementById("copyText");
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            // Copy the text inside the text field
            document.execCommand("copy");
            // Show tooltip
            let tooltip = document.getElementById("tooltip");
            tooltip.style.visibility = "visible";
            setTimeout(() => {
                tooltip.style.visibility = "hidden";
            }, 2000);
        }
    </script>
    <script src="{{asset('assets/dassets/js/core/libs.min.js')}}"></script>
    <script src="{{asset('assets/dassets/js/core/external.min.js')}}"></script>
    <script src="{{ asset('js/iziToast.js') }}"></script>
    @include('vendor.lara-izitoast.toast')
    <!-- widgetchart JavaScript -->
    <script src="{{asset('assets/dassets/js/charts/widgetcharts.js')}}"></script>

    <!-- GSAP Animation JS-->
    <script src="{{asset('assets/dassets/vendor/gsap/gsap.min.js')}}"></script>
    <script src="{{asset('assets/dassets/vendor/gsap/ScrollTrigger.min.js')}}"></script>

    <!-- fslightbox JavaScript -->
    <script src="{{asset('assets/dassets/js/fslightbox.js')}}"></script>

    <!-- Mapchart JavaScript -->
    <script src="{{asset('assets/dassets/js/charts/vector-chart.js')}}"></script>
    <script src="{{asset('assets/dassets/js/charts/dashboard.js')}}"></script>

    <!-- app JavaScript -->
    <script src="{{asset('assets/dassets/js/coinex.js')}}"></script>

    <!-- apexchart JavaScript -->
    <script src="{{asset('assets/dassets/js/charts/apexcharts.js')}}"></script>

    <!-- Gsap Animation Init -->
    <script src="{{asset('assets/dassets/js/gsap.js')}}"></script>
  </body>
</html>
