<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>OAR Exchange | Cryptocurrency Exchange Admin Dashboard</title>
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
    <main class="main-content">
      <div class="container-fluid content-inner pb-0">
        <div class="row">
        <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="card">
                <div class="text-center">
                    @if(session('success'))
                    <div class="alert alert-success" style="width:92%; margin:auto">
                    {{session('success')}}</div>
                    @endif
                </div>
              <form action="{{route('sellMail')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                  <div class="">
                    <h2>Order Id: {{ $sale->orderId }}</h2>
                    <!-- <h5 class="pt-1">Transaction Notice!</h5> -->
                  </div>
                  <div class="">
                    <img
                      src="../assets/dassets/images/logo.svg"
                      class="img-fluid"
                      style="min-width: 48px"
                      alt="logo"
                    />
                  </div>
                </div>

                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                    <symbol
                      id="info-fill"
                      fill="currentColor"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                      ></path>
                    </symbol>
                  </svg>
                  <div
                    class="alert alert-info d-flex align-items-center justify-content-between"
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                        <use xlink:href="#info-fill"></use>
                      </svg>
                      <div>
                        Send with Priority fees or high charges to avoid payment delay
                      </div>
                    </div>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </div>

                <div
                  class="pt-3 d-flex flex-wrap justify-content-center gap-1 justify-content-lg-start"
                >
                  <p class="mb-0"> <b>Processing Time:</b></p>
                  <p><b>Wallet Expire Within 60hrs (HOUR)</b></p>
                </div>
                <input type="hidden" id="rateId" value="{{ $sale->rate_id }}">
                <div class="col-md-12 mb-3">
                    @if($networks->isNotEmpty())
                    <select
                        id="networkSelect"
                        class="form-select"
                        aria-label="Floating label select example"
                        name="network"
                        >
                            <option
                                selected disabled
                            >
                                Select
                                Network
                            </option>
                            @foreach ($networks as $network )
                            <option
                            value="{{$network->type}}"
                            data-coin1="{{$network->type}}"
                            >{{$network->type}}</option>
                            @endforeach
                    </select>
                    @endif
                </br>
                </div>
                @if($networks->isNotEmpty())
                <div class="d-flex align-i  tems-center gap-2 pb-3 flex-wrap">
                    <b>Network:</b>
                    <span id="networkName">No network selected</span>
                </div>
                @endif
                {{-- <div class="d-flex align-items-center gap-2 pb-3 flex-wrap">
                  <b>Network:</b>
                  <span
                    >This transaction will be processed through the  coin network!</span
                  >
                </div> --}}
                <p>- Please Send <b>${{ $sale->value}}</b> to this address</p>
                @if($networks->isNotEmpty())
                <div class="d-flex align-items-center gap-2 pb-3 flex-wrap">
                  <b>Address:</b>
                  <span id="wallet-span">No address available</span>
                  <div
                    id="copy-btn"
                    onclick="copyWallet()"
                    style="cursor: pointer"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        stroke="#d3d3d3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M16 12.9v4.2c0 3.5-1.4 4.9-4.9 4.9H6.9C3.4 22 2 20.6 2 17.1v-4.2C2 9.4 3.4 8 6.9 8h4.2c3.5 0 4.9 1.4 4.9 4.9z"
                      ></path>
                      <path
                        stroke="#d3d3d3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M22 6.9v4.2c0 3.5-1.4 4.9-4.9 4.9H16v-3.1C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2h4.2C20.6 2 22 3.4 22 6.9z"
                      ></path>
                    </svg>
                  </div>
                </div>
                @else
                <div class="d-flex align-items-center gap-2 pb-3 flex-wrap">
                  <b>Address:</b>
                  <span>{{ $coin_info->address }}</span>
                  <div
                    id="copy-btn"
                    onclick="copyWallet()"
                    style="cursor: pointer"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        stroke="#d3d3d3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M16 12.9v4.2c0 3.5-1.4 4.9-4.9 4.9H6.9C3.4 22 2 20.6 2 17.1v-4.2C2 9.4 3.4 8 6.9 8h4.2c3.5 0 4.9 1.4 4.9 4.9z"
                      ></path>
                      <path
                        stroke="#d3d3d3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M22 6.9v4.2c0 3.5-1.4 4.9-4.9 4.9H16v-3.1C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2h4.2C20.6 2 22 3.4 22 6.9z"
                      ></path>
                    </svg>
                  </div>
                </div>
                @endif
                @if($networks->isNotEmpty())
                <div class="pt-4 d-md-flex align-items-center mb-3 gap-5">
                  <small class="hide-mobile">- <b>Scan QR Code</b></small>
                  <div class="qr-bg d-flex d-flex justify-content-center">
                    <img id="qrImage" style="width: 100px; height: 100px" src="" alt="QR Code" />
                  </div>
                </div>
                @else
                <div class="pt-4 d-md-flex align-items-center mb-3 gap-5">
                  <small class="hide-mobile">- <b>Scan QR Code</b></small>
                  <div class="qr-bg d-flex d-flex justify-content-center">
                    <img style="width: 100px; height: 100px" src="{{ $coin_info->barcode }}" alt="QR Code" />
                  </div>
                </div>
                @endif
                <br>
                <h5>Amount Receivable:<b><span>₦</span>@money($sale->total)</b></h5>
                <div class="card border-info">
                    <div class="card-body text-info">
                      <h4 class="card-title text-info">PLEASE NOTE!</h4>
                      <p class="card-text">
                        <!-- You get paid the total amount of value received in our
                        unique wallet which can be verified on blockchain
                        explorer. -->
                        The total value received in our unique wallet will be the
                        total amount credited to your account, and you can easily
                        verify the transaction on the blockchain using a
                        blockchain explorer
                      </p>
                    </div>
                  </div>
                <h5>Recieving Account Below:</h5>
                <div
                  class="pt-4 d-flex justify-content-start align-items-center mb-3 gap-5"
                >
                  <small class="hide-mobile">-<b>Recieving Account:</b></small>

                  <div>
                    <p>Bank Name: {{ $usAct['bankname'] }}</p>
                    <div class="d-flex align-items-center gap-2 pb-3 flex-wrap">
                      <span> Account Number: </span>
                      <span id="number-span">{{ $usAct['acctnumber'] }}</span>
                      <div
                        id="copy-btn"
                        onclick="copyNumber()"
                        style="cursor: pointer"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          height="20"
                          viewBox="0 0 24 24"
                          fill="none"
                        >
                          <path
                            stroke="#d3d3d3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M16 12.9v4.2c0 3.5-1.4 4.9-4.9 4.9H6.9C3.4 22 2 20.6 2 17.1v-4.2C2 9.4 3.4 8 6.9 8h4.2c3.5 0 4.9 1.4 4.9 4.9z"
                          ></path>
                          <path
                            stroke="#d3d3d3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M22 6.9v4.2c0 3.5-1.4 4.9-4.9 4.9H16v-3.1C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2h4.2C20.6 2 22 3.4 22 6.9z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <p>Account Name : {{ $usAct['firstname']}}&nbsp;{{ $usAct['lastname']}}</p>
                  </div>
                </div>
                <h5>
                  Your transaction will be made as soon as we confirm your
                  Payment!
                </h5>
                <div class="pt-3">
                  <p>
                    Click on "CONFIRM" after payment. We will recieve a
                    notification and check the receipt of funds
                  </p>
                </div>
                <div class="modal-footer mb-3 d-flex">
                  @auth
                      @role('admin')
                      <div class="d-flex justify-content-center align-items-center">
                          <input type="text" name="orderId" value="{{ $sale->orderId }}" hidden='hidden'>
                          <input type="text" name="linkId" value="{{ $sale->id }}" hidden='hidden'>
                          {{-- <input type="submit" class="btn btn-primary px-4 me-3" value="Confirm" hidden='hidden'>  --}}
                      </div>
                      @endrole
                      @role('customer')
                        <a href="{{route('cancelSale', encrypt($sale->id))}}" class="btn btn-danger" style="margin-right:20px">Cancel</a>
                          <input type="text" name="orderId" value="{{ $sale->orderId }}" hidden='hidden'>
                          <input type="text" name="linkId" value="{{ $sale->id }}" hidden='hidden'>
                          <input type="text" name="value" value="{{ $sale->value }}" hidden='hidden'>
                          <input type="text" name="total" value="{{ $sale->total }}" hidden='hidden'>
                          <input type="text" name="sender_name" value="{{ $sale->sender_name }}" hidden='hidden'>
                          <input type="hidden" name="network" id="networkInput">
                          <input type="submit" class="btn btn-primary" value="Proceed">
                      @endrole
                  @endauth
                </div>
              </div>
            </form>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>
    </div>
    </main>
    <script>
    document.getElementById('networkSelect').addEventListener('change', function() {
    const networkType = this.value;
    const coin = document.getElementById('rateId').value;
    fetch(`/fetch-address/${coin}/${networkType}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('networkName').textContent = data.network || 'N/A';
            document.getElementById('networkInput').value = this.value;
            document.getElementById('wallet-span').textContent = data.wallet || 'No address available';
            if (data.qr_code) {
                document.getElementById('qrImage').src = data.qr_code;
                document.getElementById('qrImage').style.display = 'block';
            } else {
                document.getElementById('qrImage').style.display = 'none';
            }
        })
        .catch(() => {
            document.getElementById('wallet-span').textContent = 'Error fetching address';
            document.getElementById('qrImage').style.display = 'none';
        });
});
    </script>
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