@extends('layout.master')
@section('content')
    
<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
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
                <div class="card-body">
                    <h3>All Users</h3>

                    <div
                        class="d-flex justify-content-between align-items-center flex-wrap py-4"
                    >
                        <div class="d-flex flex-column">
                            <!--<span>5 New Users</span>-->
                            <!--<span-->
                            <!--    >updated 02/06/2024 at 02:45-->
                            <!--    PM</span>-->
                            
                        </div>
                        <div class="iq-add-symbol">
                            <a href="/users" class="btn btn-primary d-flex align-items-center">
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
                                Reload
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
                                                style="
                                                    width: 108.086px;
                                                "
                                            >
                                                ID
                                            </th>
                                            <th
                                                class="sorting"
                                                tabindex="0"
                                                aria-controls="datatable"
                                                rowspan="1"
                                                colspan="1"
                                                aria-label="Name: activate to sort column ascending"
                                                style="
                                                    width: 109.172px;
                                                "
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
                                                style="
                                                    width: 83.0156px;
                                                "
                                            >
                                                Phone
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
                                                Email
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
                                                style="
                                                    width: 99.4688px;
                                                "
                                            >
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($users)
                                        @foreach($users as $user)
                                        <tr class="odd">
                                            <td class="sorting_1">
                                                {{$user->id}}
                                            </td>
                                            <td class="text-white">
                                                {{ $user->name}}&nbsp;&nbsp;{{ $user->last_name}}
                                            </td>
                                            <td>{{$user->phone}}</td>
                                            <td>
                                                {{$user->email}}
                                            </td>

                                            <td>
                                                @if($user->verify_user == 0)
                                                <span
                                                    class="badge bg-primary"
                                                    >Pending
                                            </span>
                                                @else
                                                <span
                                                    class="badge bg-success"
                                                    >Verified
                                                </span
                                                >
                                                @endif
                                            </td>
                                            <td>
                                 

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
                                                            <div
                                                                class="card-body p-4"
                                                            >
                                                            @if($user->hasRole('admin'))
                                                            <p>Super Admin</p>
                                                            @elseif($user->hasRole('assistant'))
                                                            <p style="text-align: center">Admin User</p>
                                                            <a
                                                            href="{{route('revoke_admin', $user->id)}}" onclick="return revoke_admin()"
                                                                class="iq-sub-card"
                                                            >
                                                                <div
                                                                    class="d-flex"
                                                                >
                                                                    <img
                                                                        src="{{asset('../assets/dassets/images/icons/edit.svg')}}"
                                                                        alt="delete icon"
                                                                    />
                                                                    <div
                                                                        class="w-100 ms-3"
                                                                    >
                                                                        <h6
                                                                            class="mb-0"
                                                                            style="
                                                                                color: #ece513;
                                                                            "
                                                                        >
                                                                            Revoke Access
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            @else
                                                            <a
                                                            href="{{route('assign_admin', $user->id)}}" onclick="return confirm_admin()"
                                                                class="iq-sub-card"
                                                            >
                                                                <div
                                                                    class="d-flex"
                                                                >
                                                                    <img
                                                                        src="{{asset('../assets/dassets/images/icons/edit.svg')}}"
                                                                        alt="delete icon"
                                                                    />
                                                                    <div
                                                                        class="w-100 ms-3"
                                                                    >
                                                                        <h6
                                                                            class="mb-0"
                                                                            style="
                                                                                color: #ece513;
                                                                            "
                                                                        >
                                                                            Admin Access
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            @endif
                                                            <br>
                                                            @if($user->verify_user == 0)
                                                                <a
                                                                href="{{route('admin_verify_user', $user->id)}}" 
                                                                    class="iq-sub-card"
                                                                >
                                                                    <div
                                                                        class="d-flex"
                                                                    >
                                                                        <img
                                                                            src="{{asset('../assets/dassets/images/icons/edit.svg')}}"
                                                                            alt="delete icon"
                                                                        />
                                                                        <div
                                                                            class="w-100 ms-3"
                                                                        >
                                                                            <h6
                                                                                class="mb-0"
                                                                                style="
                                                                                    color: #ece513;
                                                                                "
                                                                            >
                                                                                Verify
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                @endif
                                                                <br>
                                                                @if($user->hasRole('admin'))
                                                                <p></p>
                                                                @else
                                                                <a
                                                                href="/user/kill/{{$user->id}}" onclick="return confirm_delete()"
                                                                    class="iq-sub-card"
                                                                >
                                                                    <div
                                                                        class="d-flex"
                                                                    >
                                                                        <img
                                                                            src="{{asset('../assets/dassets/images/icons/delete.svg')}}"
                                                                            alt="delete icon"
                                                                        />
                                                                        <div
                                                                            class="w-100 ms-3"
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
                                                                @endif
                                                            </div>
                                                        </div>
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
                    <h5 class="modal-title">User Details</h5>
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
                                                src="{{asset('../../assets/dassets/images/avatars/02.png')}}"
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
                                                Account Created:
                                                <span id="createdAt"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <p>
                                            - Email Address:
                                            <b><span id="email"></span></b>
                                        </p>
                                        <p>
                                            - Phone Number:
                                            <b><span id="phone"></span></b>
                                        </p>
                                    </div>
                                    <div
                                        class="pt-4 d-flex justify-content-start align-items-center mb-3 gap-5"
                                    >
                                        <small
                                            >- Account
                                            Details</small
                                        >
                                        <div>
                                            <p>
                                                Bank Name: Keystone
                                                Bank 082|KEYS TONE
                                            </p>
                                            <p>
                                                Acct Number:
                                                <b>876876545</b>
                                            </p>
                                            <p>
                                                Account Name :
                                                Olamide Kazeem
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <small
                                            >- Status:
                                            <span
                                                class="badge bg-dark" id="verify"
                                                ></span
                                            ></small
                                        >
                                    </div>
                                    <div class="pt-3">
                                        <p>
                                            - Country:
                                            <b><span id="country"></span></b>
                                        </p>
                                    </div>
                                    <div class="">
                                        <p>- City: <b><span id="city"></span></b></p>
                                    </div>
                                    <div class="">
                                        <p>
                                            - Address:
                                            <b
                                                ><span id="address"></span></b
                                            >
                                        </p>
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
                    let verify = response.data.verify_user;
                    if (verify == 0) {
                        $('#verify').text('Pending');
                    } else {
                        $('#verify').text('Verified');
                    }
                    $('#firstName').text(response.data.name);
                    $('#lastName').text(response.data.last_name);
                    let formattedDate = moment(response.data.created_at).format('MMMM Do YYYY, h:mm:ss a');
                    $('#createdAt').text(formattedDate);
                    $('#email').text(response.data.email);
                    $('#phone').text(response.data.phone);
                    // $('#verify').text(response.data.verify_user);
                    $('#country').text(response.data.country);
                    $('#city').text(response.data.city);
                    $('#address').text(response.data.address);
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
      return confirm('Are you sure you want to delete user?');
    }

    function confirm_admin() {
      return confirm('Are you sure you want to give this user admin access?');
    }

    function revoke_admin() {
      return confirm('Are you sure you want to revoke this user admin access?');
    }
</script>
@endsection