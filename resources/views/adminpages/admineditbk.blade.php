@extends('layout.master')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="d-flex align-content-center justify-content-center">
        <form method="POST" action="{{route('linked.update', $linked->id)}}" enctype="multipart/form-data" class="identity-upload">
          @csrf
          @method('PUT')
        <div class="card">
          <div class="card-body d-grid gap-2">
            <h4 class="card-title pb-4">Edit Bank Account</h4>
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
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    name="firstname"
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    value="{{$linked->firstname}}"
                    placeholder="John Smith"
                  />
                  <label for="floatingInput">First Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                  name="lastname"
                    type="text"
                    class="form-control"
                    id="floatingId"
                    value="{{$linked->lastname}}"
                    placeholder="*******"
                  />
                  <label for="floatingId">Last Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <select class="form-control" name="bankname">
                        <option value="{{$linked->bankname}}">{{$linked->bankname}}</option>
                        <option value="Access Bank">Access Bank</option>
                        <option value="Opay">Opay</option>
                        <option value="Kuda">Kuda</option>
                        <option value="Palmpay">Palmpay</option>
                        <option value="Maxi">Maxi</option>
                        <option value="Moniepoint">Moniepoint</option>
                        <option value="Paystack wallet">Paystack wallet</option>
                        <option value="Chipper Cash">Chipper Cash</option>
                        <option value="Diamond Bank">Diamond Bank</option>
                        <option value="Ecobank">Ecobank</option>
                        <option value="Fidelity Bank">Fidelity Bank</option>
                        <option value="First Bank">First Bank of Nigeria</option>
                        <option value="First City Monument Bank">First City Monument Bank</option>
                        <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                        <option value="Heritage Bank">Heritage Bank</option>
                        <option value="Keystone Bank">Keystone Bank</option>
                        <option value="Skye Bank">Skye Bank</option>
                        <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                        <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                        <option value="Sterling Bank">Sterling Bank</option>
                        <option value="Union Bank">Union Bank</option>
                        <option value="United Bank of Africa">United Bank of Africa</option>
                        <option value="Unity Bank">Unity Bank</option>
                        <option value="Wema Bank">Wema Bank</option>
                        <option value="Zenith Bank">Zenith Bank</option>
                            </ul>
                    </select>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-floating">
                  <input
                    type="text"
                    name="acctnumber"
                    class="form-control"
                    id="floatingTransation"
                    value="{{$linked->acctnumber}}"
                    placeholder="Enter Your Account Number"
                  />
                  <label for="floatingTransation">Account Number</label>
                </div>
              </div>
            </div>
            <p class="card-text" style="opacity: 0">
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
            </p>
          </div>
          <div class="modal-footer mb-3">
            <a href="/linked-bank">
              <button
                type="button"
                class="btn btn-secondary"
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