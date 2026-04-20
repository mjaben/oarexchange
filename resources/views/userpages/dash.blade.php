@extends('layout.master')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div class="row __web-inspector-hide-shortcut__">
      <div class="col-lg-12">
        <div class="card">
          <div
            class="bg-secondary-subtle iq-user-profile-bg"
            style="
              min-height: 200px;
              max-height: 280px;
              overflow: hidden;
              position: relative;
              border-radius: 16px;
            "
          >
            <img
              src="{{asset('../assets/dassets/images/icons/cover_image.jpeg')}}"
              alt="header"
              class="img-fluid w-100 h-100 object-fit-cover"
              style="min-height: 200px"
            />
            <div class="black-overlay"></div>
          </div>
          <div class="card-body profile-card-container">
            <div class="d-flex align-items-center justify-content-between">
              <div class="col-lg-6 pad-left">
                <h1 class="fw-bold mb-3">
                  Welcome back, <span class="title-small">
                    <br class="desktop-hidden" />{{auth()->user()->last_name}}
                  </span>
                </h1>

                <p class="mobile-hidden">
                  At OAR Exchange, we're pioneers in the Nigerian crypto
                  exchange, dedicated to bridging the gap between digital
                  currencies and the Naira.
                </p>
                @if(auth()->user()->address == null || auth()->user()->city == null || auth()->user()->country == null || auth()->user()->phone == null)
                <a href="/settings" class="btn btn-primary mt-1">Update Your Profile</a>
                @else
                <button type="button" class="btn btn-primary mt-1">
                  Happy Trading!
                </button>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="row">
        <br>
          <div class="text-center">
               @if(session('error'))
                  <div class="alert alert-danger" style="width:92%; margin:auto">
                 <b>{!!session('error')!!}</b></div>
              @endif
          </div>
          <div class="text-center">
              @if(session('success'))
              <div class="alert alert-success" style="width:92%; margin:auto">
              {{session('success')}}</div>
              @endif
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5">
        <div class="card">
          <div class="card-body">
            <div class="tab-content" id="pills-tabContent1">
              <div
                class="tab-pane fade active show"
                id="pills-buy"
                role="tabpanel"
                aria-labelledby="pills-buy-tab"
              >
                <div class="tabs-panel">
                  <p class="text-success py-3 mb-4">
                    Keep track of your Transaction at anytime with OAR
                    Exchange .
                  </p>
                  <a href="/buy-coin" class="btn btn-primary w-100">Create Transaction</a>
                  <div class="text-center pt-3">
                    <p class="mb-0">100% SAFE AND SECURE</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-4 border-bottom px-0 mx-4">
              <div class="header-title">
                <div
                  class="d-flex align-items-center justify-content-between"
                >
                  <h4 class="card-title text-white">Transaction History</h4>
                </div>
              </div>
            </div>
            <div class="card-body team-card">
              <ul class="list-inline m-0 p-0">
                @if($cat_arr)
                @foreach ($cat_arr as $cat)
                <li class="iq-transaction">
                  <div class="transaction-data">
                    <div class="transaction-content">
                      <img
                        src="{{asset('../assets/dassets/images/coins/01.png')}}"
                        class="img-fluid avatar-40 avatar-rounded"
                        alt="img6"
                      />
                      <div class="ms-3">
                        <h6 class="mb-2">Your {{$cat->coin}} order was received</h6>
                        <p class="mb-0">{!! date('d-M-y', strtotime($cat->created_at)) !!} | {{$cat->coin}}</p>
                      </div>
                    </div>
                    <span>
                      @if($cat->status == 0)
                        <span class="badge bg-primary">Pending</span>
                        @else
                        <span class="badge bg-success">Completed</span>
                      @endif
                    </span>
                  </div>
                </li>
                @endforeach
                @else
                <div class="transaction-content">
                  <span style="text-align:center">No Transactions Yet!</span>
                </div>
                @endif
              </ul>
              @if($cat_arr)
              <div class="text-center pt-4">
                <a href="/transaction" class="btn btn-primary">See All</a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection