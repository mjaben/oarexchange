@extends('layout.master')
@section('content')

<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3>All Wallets</h3>

                    <div
                        class="d-flex justify-content-between align-items-center flex-wrap py-4"
                    >
                        <div class="d-flex flex-column">
                            <a href="/dashboard">
                                <button
                                    type="button"
                                    class="btn btn-outline-primary"
                                    data-bs-dismiss="modal"
                                >
                                    Go Back
                                </button>
                            </a>
                        </div>
                        <div class="iq-add-symbol">
                            <a
                                href="{{route('address.create')}}""
                            >
                                <button
                                    type="button"
                                    class="btn btn-primary d-flex align-items-center"
                                >
                                    <svg
                                        width="15"
                                        class="me-2"
                                        viewBox="0 0 10 10"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M4.75 9.65415C4.336 9.65415 4 9.31815 4 8.90415V1.57715C4 1.16315 4.336 0.827148 4.75 0.827148C5.164 0.827148 5.5 1.16315 5.5 1.57715V8.90415C5.5 9.31815 5.164 9.65415 4.75 9.65415Z"
                                            fill="currentColor"
                                        ></path>
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M8.4165 5.99023H1.0835C0.668496 5.99023 0.333496 5.65423 0.333496 5.24023C0.333496 4.82623 0.668496 4.49023 1.0835 4.49023H8.4165C8.8305 4.49023 9.1665 4.82623 9.1665 5.24023C9.1665 5.65423 8.8305 5.99023 8.4165 5.99023Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                    Add New Address
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div
                            id="datatable_wrapper"
                            class="dataTables_wrapper dt-bootstrap4 no-footer"
                        >
                            <div class="table-responsive my-3">
                                <table
                                    id="datatable"
                                    class="table mb-0 dataTable no-footer"
                                    data-toggle="data-table"
                                    aria-describedby="datatable_info"
                                >
                                    <thead class="">
                                        <tr>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="datatable"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Price: activate to sort column ascending"
                                                style="
                                                    width: 83.0156px;
                                                "
                                            >
                                                Wallet Address
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="datatable"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="%Change: activate to sort column ascending"
                                                style="
                                                    width: 130.531px;
                                                "
                                            >
                                                Wallet QR Code
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="datatable"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="%Change: activate to sort column ascending"
                                                style="
                                                    width: 130.531px;
                                                "
                                            >
                                                Network
                                            </th>

                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="datatable"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Hybrid: activate to sort column ascending"
                                                style="
                                                    width: 99.4688px;
                                                "
                                            >
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($coin_arr))
                                        @foreach ($coin_arr as $coin)
                                        <tr class="odd">

                                            <td>{{$coin['address']}}</td>
                                            <td>
                                                <div class="qr-bg">
                                                  <img
                                                    style="width: 100px; height: 100px"
                                                    src="{{$coin['barcode']}}"
                                                    alt=""
                                                  />
                                                </div>
                                              </td>
                                              <td>{{$coin['network']}}</td>
                                            <td>
                                                <div
                                                    class="d-flex gap-5 align-itmes-center"
                                                >
                                                    <div
                                                        style="
                                                            cursor: pointer;
                                                        "
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit Coin"
                                                    >
                                                        <a href="{{route('address.edit', $coin['id'])}}">
                                                            <div
                                                                class="d-flex"
                                                            >
                                                                <img
                                                                    src="{{asset('../assets/dassets/images/icons/edit.svg')}}"
                                                                    alt="edit icon"
                                                                />
                                                                <div
                                                                    class="w-100 ms-2"
                                                                >
                                                                    <h6
                                                                        class="mb-0"
                                                                        style="
                                                                            color: #fbd46a;
                                                                        "
                                                                    >
                                                                        Edit
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div
                                                        style="
                                                            cursor: pointer;
                                                        "
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Delete Coin"
                                                    >
                                                        <a href="/address/kill/{{$coin['id']}}" onclick="return confirm_delete()">
                                                            <div
                                                                class="d-flex"
                                                            >
                                                                <img
                                                                    src="{{asset('../assets/dassets/images/icons/delete.svg')}}"
                                                                    alt="delete icon"
                                                                />
                                                                <div
                                                                    class="w-100 ms-2"
                                                                >
                                                                    <h6
                                                                        class="mb-0"
                                                                        style="
                                                                            color: #ff5630;
                                                                        "
                                                                    >
                                                                        Delete
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function confirm_delete() {
      return confirm('Are you sure you want to delete bank details?');
    }
</script>
@endsection