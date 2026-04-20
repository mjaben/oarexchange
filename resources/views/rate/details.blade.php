@extends('layout.master')
@section('content')

<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $coin->coin }} Rates</h3>

                    <div class="table-responsive my-3">
                        <table
                          id="datatable"
                          class="table mb-0 dataTable no-footer"
                          data-toggle="data-table"
                          aria-describedby="datatable_info"
                        >
                          <thead class="">
                            <tr>
                                <th>Id</th>
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
                                Range 1
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
                                Range 2
                              </th>
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
                                Buy
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
                                Sell
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
                                Action
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @if($coin_details)
                            @foreach ($coin_details as $coin_detail)
                            <tr class="odd">
                                <td>{{ $coin_detail->id }}</td>
                                <td class="sorting_1">
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <h6
                                            class="text-primary"
                                        >
                                        {{ $coin_detail->min_amount }}
                                        </h6>
                                    </div>
                                </td>
                                <td class="sorting_1">
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <h6
                                            class="text-primary"
                                        >
                                        {{ $coin_detail->max_amount }}
                                        </h6>
                                    </div>
                                </td>
                                <td class="sorting_1">
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <h6
                                            class="text-primary"
                                        >
                                        {{ $coin_detail->buy }}
                                        </h6>
                                    </div>
                                </td><td class="sorting_1">
                                    <div
                                        class="d-flex align-items-center"
                                    >
                                        <h6
                                            class="text-primary"
                                        >
                                        {{ $coin_detail->sell }}
                                        </h6>
                                    </div>
                                </td>
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
                                            <a href="/rates/edit/{{ $coin_detail->id }}">
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
                                            <a href="/rates/kill/{{ $coin_detail->id }}" onclick="return confirm_delete()">
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