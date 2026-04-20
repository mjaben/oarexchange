@extends('layout.master')
@section('content')

<div class="container-fluid content-inner pb-0">
    <div class="row mb-4">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body" style="padding: 48px 24px">
            <div class="row">
              <div
                class="col-lg-6 d-flex justify-content-between align-items-center"
              >
                <div>
                  <h1 class="fw-bold mb-3">
                    Welcome back 👋 <span>Admin</span>
                  </h1>

                  <p>
                    At OAR Exchange, we're pioneers in the Nigerian crypto
                    exchange, dedicated to bridging the gap between digital
                    currencies and the Naira.
                  </p>
                  <button type="button" class="btn btn-primary mt-5">
                    Happy Trading!
                  </button>
                </div>
              </div>
            </div>
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
            <div class="vertical-scroll vertical-scroll-res text-center">
              <img
                src="{{asset('../assets/dassets/images/pages/welcome-newuser.png')}}"
                class="img-fluid w-30"
                alt="img1"
                style="padding-top: 10px"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h3>All Orders Record</h3>

            <div
              class="d-flex justify-content-between align-items-center flex-wrap py-4"
            >
              <div class="d-flex flex-column">

              </div>
              <div class="iq-add-symbol">
                <a href="/dashboard" class="btn btn-primary d-flex align-items-center">
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
                  Refresh Page
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
                          class="sorting sorting_asc"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-sort="ascending"
                          aria-label="Symbol: activate to sort column descending"
                          style="width: 108.086px"
                        >
                          Date
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-label="Name: activate to sort column ascending"
                          style="width: 109.172px"
                        >
                          Customer Name
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-label="Price: activate to sort column ascending"
                          style="width: 83.0156px"
                        >
                          Order Id
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-label="%Change: activate to sort column ascending"
                          style="width: 130.531px"
                        >
                          Transaction
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-label="Tech: activate to sort column ascending"
                          style="width: 77.9688px"
                        >
                          Type
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-label="Tech: activate to sort column ascending"
                          style="width: 77.9688px"
                        >
                          Network
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-label="Status: activate to sort column ascending"
                          style="width: 110px"
                        >
                          Status
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="datatable"
                          rowspan="1"
                          colspan="1"
                          aria-label="Hybrid: activate to sort column ascending"
                          style="width: 99.4688px"
                        >
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($historyies as $history)
                      <tr class="odd">
                        <td class="sorting_1">{{ $history['created_at']->toDayDateTimeString() }}</td>
                        <td class="text-primary">{{ $history->firstname}}&nbsp;&nbsp;{{ $history->lastname}}</td>
                        <td>{{ $history->orderId}}</td>
                        <td>{{ $history->coin}}</td>
                        <td>
                          @if($history->type == 'Sell')
                        <div
                          class="badge bg-success-subtle text-light p-2"
                        >
                        {{ $history->type}}
                        </div>
                        @elseif($history->type == 'Buy')
                        <div
                          class="badge bg-primary-subtle text-light p-2"
                        >
                        {{ $history->type}}
                        </div>
                        @endif
                      </td>
                      <td>{{ $history->network}}</td>
                        <td>
                        @if($history->status == 0)
                          <span class="badge bg-primary">Pending</span>
                          @else
                          <span class="badge bg-success">Completed</span>
                        @endif
                        </td>
                        <td>
                            <a href="#" onclick="showRecord({{$history['id']}})"><span class="badge bg-info">View Order</span></a>
                          @if($history->status == 0)
                            <a href="{{ route('accept_payment', $history->id) }}" onclick="return confirm_delete()"><span class="badge bg-danger">Confirm</span></a>
                            @else
                            <span class="text-white">Confirmed</span>
                          @endif
                          </td>
                      </tr>
                    @endforeach
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
    <div
      class="modal fade bd-example-modal-lg"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">
              Save changes
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
        class="modal fade bd-example-modal-lg"
        id="userModal"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Transaction Details</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-start align-items-center mb-3"
                                    >
                                        <div class="pe-3">
                                            <img
                                                src="{{asset('../../assets/assetss/img/update/hero/bitcoin.svg')}}"
                                                class="rounded-circle p-1 bg-danger-subtle"
                                                width="60"
                                                height="60"
                                                alt="1"
                                            />
                                        </div>
                                        <div>
                                            <h5 class="d-flex">
                                                <p><span id="firstName"></span></p>
                                                &nbsp;&nbsp;
                                                <p><span id="lastName"></span></p>
                                            </h5>
                                            <p class="mb-0">
                                                Date:
                                                <span id="createdAt"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <p>
                                            - Transaction Type:
                                            <b><span id="type"></span></b>
                                        </p>
                                        <p>
                                            - Coin:
                                            <b><span id="coin"></span></b>
                                        </p>
                                    </div>
                                    <div class="pt-3">
                                      <p>
                                        - Value:
                                        <b>$<span id="value"></span></b>
                                    </p>
                                    </div>
                                    <div class="pt-3">
                                        <p>
                                            - Total:
                                            <b>₦<span id="total"></span></b>
                                        </p>
                                    </div>
                                    <div class="">
                                      <p id="accountNumWrapper"><strong> - Account Number:</strong> <span id="accountNum"></span></p>
                                    </div>
                                    <div class="">
                                      <p id="bankNameWrapper"><strong> - Bank Name:</strong> <span id="bankname"></span></p>
                                    </div>
                                    <div class="">
                                      <p id="networkWrapper"><strong> - Network:</strong> <span id="network"></span></p>
                                  </div>
                                  <div class="">
                                    <p id="addressWrapper"><strong> - Coin Address:</strong> <span id="address"></span></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-dismiss="modal"
                    >
                        Close Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Setup CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function showRecord(id) {
        $.ajax({
            url: '{{ url('/user_kill') }}/' + id,
            type: 'GET',
            success: function(response) {
              if(response.data) {
                    $('#firstName').text(response.data.firstname);
                    $('#lastName').text(response.data.lastname);
                    let formattedDate = moment(response.data.created_at).format('MMMM Do YYYY, h:mm:ss a');
                    $('#createdAt').text(formattedDate);
                    $('#type').text(response.data.type);
                    $('#coin').text(response.data.coin);
                    $('#value').text(response.data.value);
                    $('#total').text(response.data.total);

                    if(response.data.type == "Sell") {
                        $('#accountNum').text(response.data.acctnumber);
                        $('#bankname').text(response.data.bankname);
                        $('#network').text(response.data.network);
                        $('#accountNumWrapper').show();
                        $('#bankNameWrapper').show();
                        $('#networkWrapper').show();
                        $('#addressWrapper').hide();
                    } else if(response.data.type == "Buy") {
                        $('#address').text(response.data.acctnumber);
                        $('#addressWrapper').show();
                        $('#networkWrapper').hide();
                        $('#accountNumWrapper').hide();
                        $('#bankNameWrapper').hide();
                    } else {
                        $('#networkWrapper').hide();
                        $('#accountNumWrapper').hide();
                        $('#bankNameWrapper').hide();
                    }

                    $('#userModal').modal('show');
                }
            },
            error: function(error) {
                console.log(error);
                alert('Record not found');
            }
        });
    }
</script>
  <script type="text/javascript">
    function confirm_delete() {
      return confirm('Are you sure you want to confirm transaction?');
    }
</script>
@endsection