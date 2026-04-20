@extends('layout.master')
@section('content')
<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div>
            <div class="card">
                <div class="card-body d-grid gap-2">
                    @role(['admin','assistant'])
                    <h4 class="card-title">All Users</h4>
                    @endrole
                    <div class="card-body">
                        @role(['admin','assistant'])
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
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="
                                                        width: 50px;
                                                    "
                                                >
                                                    Referral Code
                                                </th>
                                                <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="datatable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="
                                                        width: 129.172px;
                                                    "
                                                >
                                                    Fullname
                                                </th>
                                                <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="datatable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="
                                                        width: 129.172px;
                                                    "
                                                >
                                                    Username
                                                </th>
                                                
                                                <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="datatable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="
                                                        width: 129.172px;
                                                    "
                                                >
                                                    Personal Transaction
                                                </th>
                                                <th
                                                    class="sorting"
                                                    tabindex="0"
                                                    aria-controls="datatable"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="
                                                        width: 129.172px;
                                                    "
                                                >
                                                    Referred Users
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
                                                    Referral Transactions
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
                                                    Referral Bonus
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($admin_rec)
                                            @foreach($admin_rec as $user)  
                                            @if($user->hasRole('admin'))
                                            @continue
                                            @endif
                                            <tr class="odd">
                                                <td>{{ $user->referral_code }}</td>
                                                <td class="text-white">
                                                {{ $user->name}}&nbsp;&nbsp;{{ $user->last_name}}
                                            </td>
                                                <td>{{ $user->username }}</td>
                                                <td>${{ $user->total_transactions}}</td>
                                                <td class="sorting_1">
                                                    {{ $user->referrals_count }}
                                                </td>
                                                <td>${{ number_format($user->total_transactions_from_referrals, 2) }}</td>
                                                <td>₦{{ number_format($user->bonus_balance, 2) }}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        @endrole
                        @role('customer')
                        <div class="d-flex justify-content-between mb-4">
                            <div class="">
                              <h2>Refer Friend. Earn Transaction Commission Together</h2>
                              <p class="pt-1">
                                Earn up to 10% Commission on every trade made on our
                                platform
                              </p>
                            </div>
                            <div class="hide-mobile">
                              <img
                                src="../assets/dassets/images/logo.svg"
                                class="img-fluid"
                                style="min-width: 48px"
                                alt="logo"
                              />
                            </div>
                          </div>
                          <h2>Your Stats</h2>
                          <div
                            class="d-flex gap-3 align-itemes-center justify-content-center justify-content-lg-start pt-4"
                          >
                          @foreach($admin_rec as $referral)
                          @if($referral->id == auth()->user()->id)
                            <div
                              class="p-3 rounded d-flex align-items-center justify-content-center shadow-sm"
                              style="
                                background: #7635dc;
                                width: 150px;
                                height: 180px;
                                position: relative;
                              "
                            >
                              <h2
                                style="
                                  font-size: 48px;
                                  font-weight: 700;
                                  padding-bottom: 20px;
                                "
                              >
                              {{ $referral->referrals_count }}
                              </h2>
                
                              <p
                                class="mb-0"
                                style="font-size: 12px; position: absolute; bottom: 16px"
                              >
                                Friends Joined
                              </p>
                            </div>
                            <div
                              class="p-3 rounded d-flex align-items-center justify-content-center shadow-sm"
                              style="
                                background: #4204d3;
                                width: 150px;
                                height: 180px;
                                position: relative;
                              "
                            >
                              <h2 style="font-weight: 700; padding-bottom: 20px">
                                ₦{{$referral->bonus_balance}}
                              </h2>
                
                              <p
                                class="mb-0"
                                style="font-size: 12px; position: absolute; bottom: 16px"
                              >
                                Earned Reward
                              </p>
                            </div>
                            @endif
                          @endforeach
                          </div>
                          <div
                            class="pt-5 d-flex flex-wrap justify-content-center gap-1 justify-content-lg-start"
                          >
                            <p class="mb-0">Referral Code Steps:</p>
                            <p>
                              <b
                                >Share your code and earn each time a referred friend
                                completes a transaction with us
                              </b>
                            </p>
                          </div>
                          @if(auth()->user()->hasRole('customer'))
                          <div class="pt-4 d-md-flex align-items-center mb-3 gap-5">
                            <small class="hide-mobile">-Referral Code</small>
                            <div class="d-flex justify-content-center">
                              <h2
                                style="
                                  font-size: 48px;
                                  font-weight: 700;
                                  padding-bottom: 20px;
                                "
                                id="referral-span"
                              >
                              {{strtoupper($referal_code)}}
                              </h2>
                            </div>
                          </div>
                          <div class="d-flex align-items-center gap-2 pb-3 flex-wrap">
                            <span>Copy Referral ID</span>
                            <div
                              id="copy-btn"
                              onclick="copyReferral()"
                              style="cursor: pointer"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                              >
                                <path
                                  stroke="#d3d3d3"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.5"
                                  d="M16 12.9v4.2c0 3.5-1.4 4.9-4.9 4.9H6.9C3.4 22 2 20.6 2 17.1v-4.2C2 9.4 3.4 8 6.9 8h4.2c3.5 0 4.9 1.4 4.9 4.9z"
                                ></path>
                                <path
                                  stroke="#d3d3d3"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.5"
                                  d="M22 6.9v4.2c0 3.5-1.4 4.9-4.9 4.9H16v-3.1C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2h4.2C20.6 2 22 3.4 22 6.9z"
                                ></path>
                              </svg>
                            </div>
                          </div>
                          <div class="d-flex align-items-center gap-2 pb-3 flex-wrap">
                            <span>Copy or Share Referral Link</span>
                            <div
                              id="copy-btn"
                              onclick="copyReferralLink()"
                              style="cursor: pointer"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                              >
                                <path
                                  stroke="#d3d3d3"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.5"
                                  d="M16 12.9v4.2c0 3.5-1.4 4.9-4.9 4.9H6.9C3.4 22 2 20.6 2 17.1v-4.2C2 9.4 3.4 8 6.9 8h4.2c3.5 0 4.9 1.4 4.9 4.9z"
                                ></path>
                                <path
                                  stroke="#d3d3d3"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.5"
                                  d="M22 6.9v4.2c0 3.5-1.4 4.9-4.9 4.9H16v-3.1C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2h4.2C20.6 2 22 3.4 22 6.9z"
                                ></path>
                              </svg>
                            </div>
                          </div>
                          <p id="referrallink-span">
                            https://oarexchange.com/register?ref={{$referal_code}}
                          </p>
                          <div class="card border-info pt-5">
                            <div class="card-body text-info">
                              <h4 class="card-title text-info">PLEASE NOTE!</h4>
                              <p class="card-text">
                                All referral earnings will be credited to your account on
                                a monthly basis, and will be deposited into the account
                                you have registered on our platform.
                              </p>
                            </div>
                          </div>
                          @endif
                          <h5>Any Question?</h5>
                          <div class="pt-3">
                            <p>Kindly Contact "SUPPORT" for more information</p>
                          </div>
                          <div class="modal-footer mb-3">
                              <a href="mailto:support@oarexchange.com" class="btn btn-primary">Contact Support</a>
                          </div>      
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copy_buy() { 
        document.getElementById("label_buy").innerHTML=document.getElementById("mySelect_buy").value
    }
</script>
<script>
    function myFunction_buy() {
    first = Number($('#val1').val());
    second = Number($('#mySelect_buy').val());
    if(first && second && !isNaN(first) && !isNaN(second)){
        //console.log(first * second + ".00"+ " NGN");
        $('span#ShowRes').text( "You receive: " + first * second + ".00"+ " NGN" );
        $('input#InputRes').val(first * second);
    }
    else {
        $('span#ShowRes').text(" ");
    }
}
</script>
<script>
    function copy_sell() { 
        document.getElementById("label_sell").innerHTML=document.getElementById("mySelect_sell").value
    }
</script>
<script>
    function myFunction_sell() {
    first = Number($('#val2').val());
    second = Number($('#mySelect_sell').val());
    if(first && second && !isNaN(first) && !isNaN(second)){
        $('span#ShowSell').text( "You receive: " + first * second + ".00"+ " NGN" );
        $('input#InputSell').val(first * second);
    }
    else {
        $('span#ShowSell').text(" ");
    }
}
</script>
@endsection