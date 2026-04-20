@extends('layout.master')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div
            class="d-flex align-content-center justify-content-center"
        >
            <div class="card">
                <div class="card-body d-grid gap-2">
                    <h4 class="card-title">Quick Transaction</h4>
                    <div class="">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            style="display: none"
                        >
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
                                <svg
                                    class="bi flex-shrink-0 me-2"
                                    width="24"
                                    height="24"
                                >
                                    <use
                                        xlink:href="#info-fill"
                                    ></use>
                                </svg>
                                <div>
                                    We advised pay directly with
                                    your own Bank Account registered
                                    with Us
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
                    <div class="text-center">
                        @if(session('error'))
                           <div class="alert alert-danger" style="width:100%; margin:auto">
                          <b>{!!session('error')!!}</b></div>
                       @endif
                   </div>
                   <div class="text-center">
                       @if(session('success'))
                       <div class="alert alert-success" style="width:100%; margin:auto">
                       {{session('success')}}</div>
                       @endif
                   </div>
                    <div class="card-body">
                        <ul
                            class="nav nav-pills mb-3 nav-fill"
                            id="pills-tab-1"
                            role="tablist"
                        >
                        <li
                                class="nav-item"
                                role="presentation"
                            >
                                <a
                                    class="nav-link change-text-color active"
                                    id="pills-SELL-tab-fill"
                                    data-bs-toggle="pill"
                                    href="#pills-SELL-fill"
                                    role="tab"
                                    aria-selected="false"
                                    tabindex="-1"
                                    >SELL YOUR CRYPTO</a
                                >
                            </li>
                            <li
                                class="nav-item"
                                role="presentation"
                            >
                                <a
                                    class="nav-link change-text-color"
                                    id="pills-BUY-tab-fill"
                                    data-bs-toggle="pill"
                                    href="#pills-BUY-fill"
                                    role="tab"
                                    aria-selected="true"
                                    >BUY NEW CRYPTO</a
                                >
                            </li>
                        </ul>
                        <div
                            class="tab-content"
                            id="pills-tabContent-1"
                        >
                        <div
                                class="tab-pane fade active show"
                                id="pills-SELL-fill"
                                role="tabpanel"
                                aria-labelledby="pills-SELL-tab-fill"
                            >
                            <div class="d-flex">
                                <b><span style="color: rgb(233, 236, 16)">current rate: </span>&nbsp;&#8358;</b><b id="label_sell"></b><b>/USD</b>&nbsp; <span style="color: rgb(233, 236, 16)"><b>| Min:&nbsp; </b></span> <b> 30 USD</b>&nbsp; <span style="color: rgb(233, 236, 16)"><b>| Max:&nbsp; </b></span><b> 50,000 USD</b>
                            </div>
                            <br>
                                <form action="{{ route('sales.store')}}" method="post" class="pt-5 currency2_validate">
                                    @csrf
                                    <input type="hidden" id="selected_coin" name="coin" />
                                    <div class="row g-2">
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <select
                                                    class="form-select"
                                                    id="mySelect_sell"
                                                    aria-label="Floating label select example"
                                                    name="rate_sell" 
                                                    onchange="copy_sell()"
                                                    required
                                                >
                                                    <option
                                                        selected
                                                    >
                                                        Select
                                                        Cryptocurrency
                                                    </option>
                                                    @if($rates)
                                                    @foreach ($rates as $rate)
                                                    <option
                                                        value="{{$rate->sell}}"
                                                        data-coin="{{$rate->coin}}"
                                                    >
                                                    {{$rate->coin}}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                <label
                                                    for="floatingSelectGrid"
                                                    >Select
                                                    Currency</label
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
        
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="val2"
                                                    placeholder="Dec 20 2024"
                                                    name="value_sell" 
                                                    onkeyup="myFunction_sell()"
                                                    required
                                                />
                                                <label
                                                    for="floatingDate"
                                                    >Amount in
                                                    USD</label
                                                >
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small style="color: rgb(233, 236, 16)" class="text:right"><b><span id="ShowSell"></span></b></small>
                                                <input type="text" id="InputSell" hidden="hidden" name="total">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <input
                                                    type="text"
                                                    name="sender_name"
                                                    class="form-control"
                                                    value="{{auth()->user()->name." ".auth()->user()->last_name}}"
                                                    id="floatingTransation"
                                                    readonly
                                                />
                                                <label
                                                    for="floatingTransation"
                                                    >Sender Name
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p
                                        class="card-text"
                                        style="opacity: 0"
                                    >
                                        DON'T DELETE It is a long
                                        established fact that a
                                        reader will be distracted by
                                        the readable content of a
                                        page when looking at its
                                        layout.
                                    </p>
                                    <div class="modal-footer mb-3">
                                        {{-- <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Go Back
                                        </button> --}}
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                            id="placeOrderButton2"
                                        >
                                            Place Order
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <div
                                class="tab-pane fade"
                                id="pills-BUY-fill"
                                role="tabpanel"
                                aria-labelledby="pills-BUY-tab-fill"
                            >
                                <form action="{{ route('purchases.store')}}" method="post" name="myform" id="buyCoins" class="currency_validate pt-5">
                                    @csrf
                                    <input type="hidden" id="selected_coin1" name="coin" />
                                    <div class="d-flex">
                                        <b><span style="color: rgb(233, 236, 16)">Current rate: </span>&nbsp;&#8358;</b><b id="label_buy"></b><b>/USD</b> &nbsp; <span style="color: rgb(233, 236, 16)"><b>| Min:&nbsp; </b></span> <b> 30 USD</b>&nbsp; <span style="color: rgb(233, 236, 16)"><b>| Max:&nbsp; </b></span><b> 50,000 USD</b>
                                    </div>
                                    <br>
                                    <div class="row g-2">
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <select
                                                    class="form-select"
                                                    aria-label="Floating label select example"
                                                    id="mySelect_buy" 
                                                    name="rate" 
                                                    onchange="copy_buy()" 
                                                    required
                                                >
                                                    <option
                                                        selected
                                                    >
                                                        Select
                                                        Cryptocurrency
                                                    </option>
                                                    @foreach ($rates as $rate)
                                                    <option 
                                                    value="{{$rate->buy}}"
                                                    data-coin1="{{$rate->coin}}"
                                                    >{{$rate->coin}}</option>
                                                    @endforeach
                                                </select>
                                                <label
                                                    for="floatingSelectGrid"
                                                    >Select
                                                    Currency</label
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <select
                                                    class="form-select"
                                                    id="floatingSelectGrid"
                                                    name="method"
                                                    aria-label="Floating label select example"
                                                    required
                                                >
                                                    <option
                                                        selected
                                                    >
                                                        Select
                                                        Payment
                                                        Method
                                                    </option>
                                                    <option
                                                        value="Bank Transfer"
                                                    >
                                                        Bank
                                                        Transfer
                                                    </option>
                                                    {{-- <option
                                                        value="2"
                                                    >
                                                        Crypto
                                                    </option> --}}
                                                </select>
                                                <label
                                                    for="floatingSelectGrid"
                                                    >
                                                    Payment Method</label
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <input
                                                    type="text"
                                                    name="btcaddress"
                                                    class="form-control"
                                                    id="floatingId"
                                                    placeholder="Wallet Address"
                                                    required
                                                />
                                                <label
                                                    for="floatingId"
                                                    >Recieving Address</label
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Dec 20 2024"
                                                    id="val1" 
                                                    name="value" 
                                                    onkeyup="myFunction_buy()"
                                                    required
                                                />
                                                <label
                                                    for="floatingDate"
                                                    >Amount in
                                                    USD</label
                                                >
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small style="color: rgb(233, 236, 16)" class="text:right"><b><span id="ShowRes"></span></b></small>
                                                <input type="text" id="InputRes" hidden="hidden" name="total">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div
                                                class="form-floating"
                                            >
                                                <input
                                                    type="text"
                                                    name="sender_name"
                                                    class="form-control"
                                                    id="floatingTransation"
                                                    value="{{auth()->user()->name." ".auth()->user()->last_name}}"
                                                    readonly
                                                />
                                                <label
                                                    for="floatingTransation"
                                                    >Sender Name
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p
                                        class="card-text"
                                        style="opacity: 0"
                                    >
                                        DON'T DELETE It is a long
                                        established fact that a
                                        reader will be distracted by
                                        the readable content of a
                                        page when looking at its
                                        layout.
                                    </p>
                                    <div class="modal-footer mb-3">
                                        {{-- <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Go Back
                                        </button> --}}
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                            id="placeOrderButton"
                                        >
                                            Place Order
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copy_buy() { 
        var select = document.getElementById('mySelect_buy');
        var coin = select.options[select.selectedIndex].getAttribute('data-coin1');
        document.getElementById('label_buy').innerHTML = select.value;
        document.getElementById('selected_coin1').value = coin;
    }
</script>
<script>
    function myFunction_buy() {
        first = Number($('#val1').val());
        second = Number($('#mySelect_buy').val());
        placeOrderButton = $('#placeOrderButton');

        if (first && second && !isNaN(first) && !isNaN(second)) {
            if (first < 30) {
                $('span#ShowRes').text("Amount must be at least $30.");
                $('input#InputRes').val('');
                placeOrderButton.prop('disabled', true);
            } else if (first > 50000) {
                $('span#ShowRes').text("Amount must be less than or equal to $50,000.");
                $('input#InputRes').val('');
                placeOrderButton.prop('disabled', true);
            } else {
                $('span#ShowRes').text("You receive: " + first * second + ".00 NGN");
                $('input#InputRes').val(first * second);
                placeOrderButton.prop('disabled', false);
            }
        } else {
            $('span#ShowRes').text(" ");
        }
    }
</script>

<script>
    function copy_sell() {
        var select = document.getElementById('mySelect_sell');
        var coin = select.options[select.selectedIndex].getAttribute('data-coin');
        document.getElementById('label_sell').innerHTML = select.value;
        document.getElementById('selected_coin').value = coin;
    }
</script>
<script>
    function myFunction_sell() {
    first = Number($('#val2').val());
    second = Number($('#mySelect_sell').val());
    placeOrderButton = $('#placeOrderButton2');
        if (first && second && !isNaN(first) && !isNaN(second)) {
            if (first < 30) {
                $('span#ShowSell').text("Amount must be at least $30.");
                $('input#InputSell').val('');
                placeOrderButton.prop('disabled', true);
            } else if (first > 50000) {
                $('span#ShowSell').text("Amount must be less than or equal to $50,000.");
                $('input#InputSell').val('');
                placeOrderButton.prop('disabled', true);
            } else {
                $('span#ShowSell').text( "You receive: " + first * second + ".00"+ " NGN" );
                $('input#InputSell').val(first * second);
                placeOrderButton.prop('disabled', false);
            }
        } else {
            $('span#ShowSell').text(" ");
            placeOrderButton.prop('disabled', true);
        }
    }
</script>
@endsection