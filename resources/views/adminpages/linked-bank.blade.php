@extends('layout.master')
@section('content')

<div class="container-fluid content-inner pb-0">
    <div class="d-flex align-items-center justify-content-between pb-5">
        <h2>Linked Bank Accounts</h2>
        @if(isset($linked))
        <div class="mobile-hidden">
            {{-- <a href="{{route('add-bank-account')}}" class="">
                <button class="btn btn-primary" type="button">
                    + Add Bank Account
                </button>
            </a> --}}
        </div>
        @else
        <div class="mobile-hidden">
            <a href="{{route('add-bank-account')}}" class="">
                <button class="btn btn-primary" type="button">
                    + Add Bank Account
                </button>
            </a>
        </div>
        @endif
    </div>

    @if($linked)
    <div class="row">
        {{-- @foreach ($linked as $items) --}}
        <div class="col-xl-11">
            <div class="card">
                <div class="card-bodyy">
                    <div class="addFlexBetween">
                        <div class="d-flex gap-3 align-itmes-center">
                            <div
                                class="p-3 rounded"
                                style="background: #7635dc"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="32"
                                    height="32"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="m12.37 2.15 9 3.6c.35.14.63.56.63.93V10c0 .55-.45 1-1 1H3c-.55 0-1-.45-1-1V6.68c0-.37.28-.79.63-.93l9-3.6c.2-.08.54-.08.74 0ZM22 22H2v-3c0-.55.45-1 1-1h18c.55 0 1 .45 1 1v3ZM4 18v-7M8 18v-7M12 18v-7M16 18v-7M20 18v-7M1 22h22"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M12 8.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="one-line-text">
                                    {{$linked->bankname}}
                                </h1>
                                <p class="mb-0">{{$linked->firstname}}&nbsp; {{$linked->lastname}}</p>
                                <p class="mb-0">{{$linked->acctnumber}}</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex gap-5 align-itmes-center">
                                <a
                                    href="{{route('linked.edit', $linked->id)}}"
                                    class="iq-sub-card"
                                    style="
                                        margin-bottom: 20px !important;
                                        display: block;
                                    "
                                >
                                    <div class="d-flex">
                                        <img
                                            src="{{asset('../assets/dassets/images/icons/edit.svg')}}"
                                            alt="edit icon"
                                        />
                                        <div class="w-100 ms-2">
                                            <h6
                                                class="mb-0"
                                                style="color: #fbd46a"
                                            >
                                                Edit
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                                <a href="/banks/kill/{{$linked->id}}" class="iq-sub-card">
                                    <div class="d-flex" onclick="return confirm_delete()">
                                        <img
                                            src="{{asset('../assets/dassets/images/icons/delete.svg')}}"
                                            alt="delete icon" 
                                        />
                                        <div class="w-100 ms-2">
                                            <h6
                                                class="mb-0"
                                                style="color: #ff5630"
                                            >
                                                Delete
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
    @endif

    {{-- <div class="">
        <a href="/dashboard/add-bank-account.html" class="">
            <button class="btn btn-primary" type="button">
                + Add Bank Account
            </button>
        </a>
    </div> --}}
</div>
<script type="text/javascript">
    function confirm_delete() {
      return confirm('Are you sure you want to delete bank details?');
    }
</script>
@endsection