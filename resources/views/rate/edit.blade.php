@extends('layout.master')
@section('content')

<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="d-flex align-content-center justify-content-center">
        <form action="{{route('rates.update', $rates->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input
            type="text"
            class="form-control"
            name="coin"
            value="{{$coin_name->coin}}"
            id="floatingInput"
            placeholder="i.e Bitcoin"
            hidden
            />
        <div class="card">
          <div class="card-body d-grid gap-2">
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
            <h4 class="card-title pb-4">Edit Coin Rate</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    type="file"
                    name="coin_image"
                    class="form-control"
                    id="floatingId"
                    placeholder="coin Upload"
                  />
                  <label for="floatingId">Upload Coin Image</label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    name="coin"
                    value="{{$rates->coin}}"
                    id="floatingInput"
                    placeholder="i.e Bitcoin"
                    disabled
                  />
                  <label for="floatingInput">Coin Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    type="text"
                    name="buy"
                    value="{{$rates->buy}}"
                    class="form-control"
                    id="floatingDate"
                    placeholder="Buy Rate"
                  />
                  <label for="floatingDate">Buy Rate</label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    type="text"
                    name="sell"
                    value="{{$rates->sell}}"
                    class="form-control"
                    id="floatingTransation"
                    placeholder="Sell Rate"
                  />
                  <label for="floatingTransation">Sell Rate </label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="min_amount" value="{{$rates->min_amount}}" class="form-control" id="floatingTransation" placeholder="Min Amount">
                    <label for="floatingDate"
                        >Min Amount</label
                    >
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="max_amount" value="{{$rates->max_amount}}" class="form-control" id="floatingTransation" placeholder="Max Amount">
                    <label for="floatingTransation"
                        >Max Amount
                    </label>
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
            <a href="{{route('all-coins')}}">
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
    </form>
      </div>
    </div>
  </div>
@endsection