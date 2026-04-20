@extends('layout.master')
@section('content')

<div class="container-fluid content-inner pb-0">
    <div class="row">
        <form action="{{route('address.update', $address->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
      <div class="d-flex align-content-center justify-content-center">
        <div class="card">
          <div class="card-body d-grid gap-2">
            <h4 class="card-title pb-4">Edit Coin Wallet</h4>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" style="width:92%; margin:auto">
                    {{$error}}</div>
                @endforeach
                @endif
                @if(session('success'))
                <div class="alert alert-success" style="width:92%; margin:auto">
                {{session('success')}}</div>
                @endif
        
                @if(session('error'))
                <div class="alert alert-danger" style="width:92%; margin:auto">
                {{session('error')}}</div>
            @endif
            <br>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  {{-- <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="i.e Bitcoin"
                  /> --}}
                  <select name="coin" class="form-control">
                    <option value="{{$c_id}}">{{$c_name}}</option>
                    @foreach ($rates as $rate)
                    <option value="{{$rate->id}}">
                        {{$rate->coin}}
                    </option>
                    @endforeach
                </select>
                  <label for="floatingInput">Coin Name</label>
                </div>
              </div>
              {{-- <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    type="file"
                    class="form-control"
                    id="floatingId"
                    placeholder="coin Upload"
                  />
                  <label for="floatingId">Upload Coin Image</label>
                </div>
              </div> --}}
              <div class="col-md-6 mb-3 d-flex">
                <div class="form-floating">
                  <input
                    type="file"
                    name="barcode"
                    class="form-control"
                    id="floatingId"
                    placeholder="Upload Wallet QR Code"
                  />
                  <label for="floatingId">Upload Wallet QR Code</label>
                </div>
                <div><img id="output" style="width:100px" src="{{$address->barcode}}"></div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    type="text"
                    name="address" 
                    value="{{$address->address}}"
                    class="form-control"
                    id="floatingDate"
                    placeholder="Wallet Address"
                  />
                  <label for="floatingDate">Wallet Address</label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div
                    class="form-floating"
                >
                    <select
                        class="form-select"
                        aria-label="Floating label select example"
                        name="network" 
                    >
                        <option value="{{$address->network}}">{{$address->network}}</option>
                        <option value="ERC20">ERC20</option>
                        <option value="TRC20">TRC20</option>
                        <option value="BSC (BEP20)">BSC (BEP20)</option>
                        <option value="TON">TON</option>
                        <option value="AVAXC">AVAXC</option>
                        <option value="SOL">SOL</option>
                        <option value="MATIC">MATIC</option>
                        <option value="Arbitrum One">Arbitrum One</option>
                        <option value="Optimism">Optimism</option>
                    </select>
                    <label
                        for="floatingSelectGrid"
                        >
                        Mandatory For USDT & USDC Transactions
                    </label
                    >
                </div>
            </div>
            </div>
            <p class="card-text" style="opacity: 0">
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
            </p>
          </div>
          <div
            class="d-flex align-content-center justify-content-end gap-3 mb-3"
          >
            <a href="/address">
              <button
                type="button"
                class="btn btn-outline-primary"
                data-bs-dismiss="modal"
              >
                Go Back
              </button>
            </a>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection