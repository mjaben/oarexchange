@extends('layout.master')
@section('content')

<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3>Transaction History</h3>

                    <div
                        class="d-flex justify-content-between align-items-center flex-wrap py-4"
                    >
                        <div class="d-flex flex-column">
                            {{-- <span
                                >Last Transact: 02/08/2021 at 02:45
                                PM</span
                            > --}}
                        </div>
                        {{-- <div class="iq-add-symbol">
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
                                Create New
                            </button>
                        </div> --}}
                    </div>
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
                                aria-label="Status: activate to sort column ascending"
                                style="width: 110px"
                              >
                                Status
                              </th>
                              {{-- <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="datatable"
                                rowspan="1"
                                colspan="1"
                                aria-label="Hybrid: activate to sort column ascending"
                                style="width: 99.4688px"
                              >
                                Action
                              </th> --}}
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
                              <td>
                              @if($history->status == 0)
                                <span class="badge bg-primary">Pending</span>
                                @else
                                <span class="badge bg-success">Completed</span>
                              @endif
                              </td>
                              {{-- <td>
                                <div class="d-flex align-content-center gap-4">
                                  <div
                                    style="cursor: pointer"
                                    data-bs-toggle="tooltip"
                                    data-bs-original-title="View Details"
                                  >
                                    <span
                                      data-bs-toggle="modal"
                                      data-bs-target=".bd-example-modal-lg"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M21.25 9.15C18.94 5.52 15.56 3.43 12 3.43c-1.78 0-3.51.52-5.09 1.49-1.58.98-3 2.41-4.16 4.23-1 1.57-1 4.12 0 5.69 2.31 3.64 5.69 5.72 9.25 5.72 1.78 0 3.51-.52 5.09-1.49 1.58-.98 3-2.41 4.16-4.23 1-1.56 1-4.12 0-5.69ZM12 16.04c-2.24 0-4.04-1.81-4.04-4.04S9.76 7.96 12 7.96s4.04 1.81 4.04 4.04-1.8 4.04-4.04 4.04Z"
                                          fill="#46505c"
                                        ></path>
                                        <path
                                          d="M11.998 9.14a2.855 2.855 0 0 0 0 5.71c1.57 0 2.86-1.28 2.86-2.85s-1.29-2.86-2.86-2.86Z"
                                          fill="#46505c"
                                        ></path>
                                      </svg>
                                    </span>
                                  </div>
                                  <!-- <a
                                    href="#"
                                  
                                    data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-lg"
                                  >
                                  </a> -->
      
                                  <a
                                    href="#"
                                    class="nav-link"
                                    id="mail-drop"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                  >
                                    <img
                                      src="{{asset('../assets/dassets/images/icons/more.svg')}}"
                                      alt="more icon"
                                    />
                                  </a>
                                  <div
                                    class="sub-drop dropdown-menu dropdown-menu-end p-0"
                                    aria-labelledby="mail-drop"
                                  >
                                    <div
                                      class="card shadow-none m-0 bg-transparent"
                                    >
                                      <div class="card-body p-4">
                                        <a
                                          href="#"
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
                                            <div class="w-100 ms-3">
                                              <h6
                                                class="mb-0"
                                                style="color: #fbd46a"
                                              >
                                                Edit
                                              </h6>
                                            </div>
                                          </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                          <div class="d-flex">
                                            <img
                                              src="{{asset('../assets/dassets/images/icons/delete.svg')}}"
                                              alt="delete icon"
                                            />
                                            <div class="w-100 ms-3">
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
                              </td> --}}
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection