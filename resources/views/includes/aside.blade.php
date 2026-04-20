<aside class="sidebar sidebar-default navs-rounded">
    <div
      class="sidebar-header d-flex align-items-center justify-content-start"
    >
      <a href="/dashboard" class="navbar-brand dis-none align-items-center">
        <img src="{{asset('../assets/dassets/images/logo.svg')}}" class="img-fluid" alt="logo" />
        <h4 style="margin-left: 6px" class="logo-title">OAR EXCHANGE</h4>
      </a>
      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
        <i class="icon">
          <svg
            width="20"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4.25 12.2744L19.25 12.2744"
              stroke="currentColor"
              stroke-width="1.5"
            ></path>
            <path
              d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976"
              stroke="currentColor"
              stroke-width="1.5"
            ></path>
          </svg>
        </i>
      </div>
    </div>
    <div class="sidebar-body p-0 data-scrollbar">
      <div class="navbar-collapse pe-3" id="sidebar">
        <ul class="navbar-nav iq-main-menu">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard">
              <i class="icon">
                <svg
                  width="22"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                    fill="currentColor"
                  ></path>
                </svg>
              </i>
              <span class="item-name">Dashboard</span>
            </a>
          </li>
          @role(['admin','customer'])
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="collapse"
              href="#transactions"
              role="button"
              aria-expanded="false"
              aria-controls="transactions"
            >
              <i class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    fill="currentColor"
                    d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81v8.37C2 19.83 4.17 22 7.81 22h8.37c3.64 0 5.81-2.17 5.81-5.81V7.81C22 4.17 19.83 2 16.19 2z"
                    opacity=".4"
                  ></path>
                  <path
                    fill="currentColor"
                    d="M17.85 13.53a.782.782 0 00-.41-.41.717.717 0 00-.29-.06H6.85c-.41 0-.75.34-.75.75s.34.75.75.75h8.5l-1.76 1.76c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l3.04-3.04c.07-.07.12-.15.16-.24a.8.8 0 000-.57zM6.15 10.47c.08.18.22.33.41.41.09.04.19.06.29.06h10.31c.41 0 .75-.34.75-.75s-.34-.75-.75-.75h-8.5l1.76-1.76c.29-.29.29-.77 0-1.06a.755.755 0 00-1.06 0L6.32 9.65c-.07.07-.13.16-.17.25a.8.8 0 000 .57z"
                  ></path>
                </svg>
              </i>
              <span class="item-name">Transaction</span>
              <i class="right-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </i>
            </a>
            <ul
              class="sub-nav collapse"
              id="transactions"
              data-bs-parent="#transactions"
            >
              @role('customer')
              <li class="nav-item">
                <a class="nav-link" href="/create-transaction">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        fill="currentColor"
                        d="M21.75 6.73c0-.2-.08-.39-.22-.53l-3.72-3.72a.754.754 0 00-1.06 0c-.29.29-.29.77 0 1.06l2.45 2.45H3c-.41 0-.75.34-.75.75s.34.75.75.75h16.19l-2.44 2.44c-.29.29-.29.77 0 1.06.15.15.34.22.53.22s.38-.07.53-.22l3.71-3.71c.07-.07.13-.16.17-.26 0-.01 0-.02.01-.03.03-.09.05-.17.05-.26z"
                        opacity=".4"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M21 16.52H4.81l2.44-2.44c.29-.29.29-.77 0-1.06a.754.754 0 00-1.06 0l-3.71 3.71c-.07.07-.13.16-.17.26 0 .01 0 .02-.01.03-.03.08-.05.17-.05.26 0 .2.08.39.22.53l3.72 3.72c.15.15.34.22.53.22s.38-.07.53-.22c.29-.29.29-.77 0-1.06L4.8 18.02H21c.41 0 .75-.34.75-.75s-.34-.75-.75-.75z"
                      ></path>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> U </i>
                  <span class="item-name">Create Transaction</span>
                </a>
              </li>
              @endrole

              @role('admin')
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="{{route('transaction-history.index')}}"
                >
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        fill="currentColor"
                        d="M10.98 6.19L7.27 2.48a.782.782 0 00-.26-.17c-.01 0-.02 0-.03-.01a.751.751 0 00-.26-.05c-.2 0-.39.08-.53.22L2.47 6.19c-.29.29-.29.77 0 1.06.29.29.77.29 1.06 0L5.98 4.8V21c0 .41.34.75.75.75s.75-.34.75-.75V4.81l2.44 2.44c.15.15.34.22.53.22s.38-.07.53-.22c.29-.29.29-.76 0-1.06z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M21.53 16.75a.754.754 0 00-1.06 0l-2.45 2.45V3c0-.41-.34-.75-.75-.75s-.75.34-.75.75v16.19l-2.44-2.44a.754.754 0 00-1.06 0c-.29.29-.29.77 0 1.06l3.71 3.71c.07.07.16.13.26.17.01 0 .02 0 .03.01.08.03.17.05.26.05.2 0 .39-.08.53-.22l3.72-3.72c.29-.3.29-.77 0-1.06z"
                        opacity=".4"
                      ></path>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> U </i>
                  <span class="item-name">Transaction History</span>
                </a>
              </li>
              @endrole

              @role('customer')
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="/transaction"
                >
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        fill="currentColor"
                        d="M10.98 6.19L7.27 2.48a.782.782 0 00-.26-.17c-.01 0-.02 0-.03-.01a.751.751 0 00-.26-.05c-.2 0-.39.08-.53.22L2.47 6.19c-.29.29-.29.77 0 1.06.29.29.77.29 1.06 0L5.98 4.8V21c0 .41.34.75.75.75s.75-.34.75-.75V4.81l2.44 2.44c.15.15.34.22.53.22s.38-.07.53-.22c.29-.29.29-.76 0-1.06z"
                      ></path>
                      <path
                        fill="currentColor"
                        d="M21.53 16.75a.754.754 0 00-1.06 0l-2.45 2.45V3c0-.41-.34-.75-.75-.75s-.75.34-.75.75v16.19l-2.44-2.44a.754.754 0 00-1.06 0c-.29.29-.29.77 0 1.06l3.71 3.71c.07.07.16.13.26.17.01 0 .02 0 .03.01.08.03.17.05.26.05.2 0 .39-.08.53-.22l3.72-3.72c.29-.3.29-.77 0-1.06z"
                        opacity=".4"
                      ></path>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> U </i>
                  <span class="item-name">Transaction History</span>
                </a>
              </li>
              @endrole
            </ul>
          </li>
          @endrole
          @role(['admin','customer'])
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="collapse"
              href="#sidebar-special"
              role="button"
              aria-expanded="false"
              aria-controls="sidebar-special"
            >
              <i class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M22 19v3H2v-3c0-.55.45-1 1-1h18c.55 0 1 .45 1 1Z"
                    fill="currentColor"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    opacity=".6"
                    d="M8 11H4v7h4v-7Z"
                    fill="currentColor"
                  ></path>
                  <path
                    opacity=".4"
                    d="M12 11H8v7h4v-7Z"
                    fill="currentColor"
                  ></path>
                  <path
                    opacity=".6"
                    d="M16 11h-4v7h4v-7Z"
                    fill="currentColor"
                  ></path>
                  <path
                    opacity=".4"
                    d="M20 11h-4v7h4v-7Z"
                    fill="currentColor"
                  ></path>
                  <path
                    d="M23 22.75H1c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h22c.41 0 .75.34.75.75s-.34.75-.75.75ZM21.37 5.75l-9-3.6c-.2-.08-.54-.08-.74 0l-9 3.6c-.35.14-.63.55-.63.93V10c0 .55.45 1 1 1h18c.55 0 1-.45 1-1V6.68c0-.38-.28-.79-.63-.93ZM12 8.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5Z"
                    fill="currentColor"
                  ></path>
                </svg>
              </i>
              <span class="item-name">Bank Account</span>
              <i class="right-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </i>
            </a>
            <ul
              class="sub-nav collapse"
              id="sidebar-special"
              data-bs-parent="#sidebar"
            >
              <li class="nav-item">
                <a class="nav-link" href="/linked-bank">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M12.498 14.75h-2.5c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h2.5c2.62 0 4.75-2.13 4.75-4.75s-2.13-4.75-4.75-4.75h-5c-2.62 0-4.75 2.13-4.75 4.75 0 1.1.39 2.17 1.09 3.02.26.32.22.79-.1 1.06-.32.26-.79.22-1.06-.1a6.236 6.236 0 0 1-1.44-3.98c0-3.45 2.8-6.25 6.25-6.25h5c3.45 0 6.25 2.8 6.25 6.25s-2.79 6.25-6.24 6.25Z"
                        fill="currentColor"
                      ></path>
                      <path
                        opacity=".4"
                        d="M16.5 21.75h-5c-3.45 0-6.25-2.8-6.25-6.25s2.8-6.25 6.25-6.25H14c.41 0 .75.34.75.75s-.34.75-.75.75h-2.5c-2.62 0-4.75 2.13-4.75 4.75s2.13 4.75 4.75 4.75h5c2.62 0 4.75-2.13 4.75-4.75 0-1.1-.39-2.17-1.09-3.02a.758.758 0 0 1 .1-1.06.75.75 0 0 1 1.06.1 6.236 6.236 0 0 1 1.44 3.98c-.01 3.45-2.81 6.25-6.26 6.25Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon">P </i>
                  <span class="item-name">Linked Bank</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('add-bank-account')}}">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="m11.94 2.212-2.41 5.61H7.12c-.4 0-.79.03-1.17.11l1-2.4.04-.09.06-.16c.03-.07.05-.13.08-.18 1.16-2.69 2.46-3.53 4.81-2.89ZM18.731 8.09l-.02-.01c-.6-.17-1.21-.26-1.83-.26h-6.26l2.25-5.23.03-.07c.14.05.29.12.44.17l2.21.93c1.23.51 2.09 1.04 2.62 1.68.09.12.17.23.25.36.09.14.16.28.2.43.04.09.07.17.09.26.15.51.16 1.09.02 1.74ZM18.288 9.52c-.45-.13-.92-.2-1.41-.2h-9.76c-.68 0-1.32.13-1.92.39a4.894 4.894 0 0 0-2.96 4.49v1.95c0 .24.02.47.05.71.22 3.18 1.92 4.88 5.1 5.09.23.03.46.05.71.05h7.8c3.7 0 5.65-1.76 5.84-5.26.01-.19.02-.39.02-.59V14.2a4.9 4.9 0 0 0-3.47-4.68Zm-3.79 6.67h-1.75V18c0 .41-.34.75-.75.75s-.75-.34-.75-.75v-1.81h-1.75a.749.749 0 1 1 0-1.5h1.75V13c0-.41.34-.75.75-.75s.75.34.75.75v1.69h1.75a.749.749 0 1 1 0 1.5Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon">A </i>
                  <span class="item-name">Add Bank Account</span>
                </a>
              </li>
            </ul>
          </li>
          @endrole
          @role(['admin','assistant'])
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="collapse"
              href="#coin-rate"
              role="button"
              aria-expanded="false"
              aria-controls="coin-rate"
            >
              <i class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    opacity=".4"
                    d="M9.99 17.98A7.99 7.99 0 1 0 9.99 2a7.99 7.99 0 0 0 0 15.98Z"
                    fill="currentColor"
                  ></path>
                  <path
                    d="M21.968 15.988c0 3.3-2.68 5.98-5.98 5.98a5.97 5.97 0 0 1-4.91-2.57 9.458 9.458 0 0 0 8.32-8.32 5.97 5.97 0 0 1 2.57 4.91ZM11.45 9.71l-2.4-.84c-.24-.08-.29-.1-.29-.45 0-.26.18-.47.41-.47h1.5c.32 0 .58.29.58.65 0 .41.34.75.75.75s.75-.34.75-.75c0-1.15-.89-2.09-2-2.14v-.05a.749.749 0 1 0-1.5 0v.05h-.09c-1.05 0-1.91.88-1.91 1.97 0 .95.42 1.56 1.29 1.86l2.41.84c.24.08.29.1.29.45 0 .26-.18.47-.41.47h-1.5c-.32 0-.58-.29-.58-.65 0-.41-.34-.75-.75-.75s-.75.34-.75.75c0 1.15.89 2.09 2 2.14v.06c0 .41.34.75.75.75s.75-.34.75-.75v-.05h.09c1.05 0 1.91-.88 1.91-1.97 0-.95-.43-1.56-1.3-1.87Z"
                    fill="currentColor"
                  ></path>
                </svg>
              </i>
              <span class="item-name">Coin Rate</span>
              <i class="right-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </i>
            </a>
            <ul
              class="sub-nav collapse"
              id="coin-rate"
              data-bs-parent="#sidebar"
            >
            <li class="nav-item">
              <a class="nav-link" href="{{route('rates.create')}}">
                <i class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      opacity=".4"
                      d="M18.57 22H14c-2.29 0-3.43-1.14-3.43-3.43v-7.14C10.57 9.14 11.71 8 14 8h4.57C20.86 8 22 9.14 22 11.43v7.14c0 2.29-1.14 3.43-3.43 3.43Z"
                      fill="currentColor"
                    ></path>
                    <path
                      d="M13.43 5.43v1.34c-2.62.21-4.11 1.89-4.11 4.66V16H5.43C3.14 16 2 14.86 2 12.57V5.43C2 3.14 3.14 2 5.43 2H10c2.29 0 3.43 1.14 3.43 3.43ZM18.13 14.251h-.88v-.88c0-.41-.34-.75-.75-.75s-.75.34-.75.75v.88h-.88c-.41 0-.75.34-.75.75s.34.75.75.75h.88v.88c0 .41.34.75.75.75s.75-.34.75-.75v-.88h.88c.41 0 .75-.34.75-.75s-.34-.75-.75-.75Z"
                      fill="currentColor"
                    ></path>
                  </svg>
                </i>
                <i class="sidenav-mini-icon">A </i>
                <span class="item-name">Add New Coin rate</span>
              </a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('all-coins')}}">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        opacity=".4"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23 15.219a.75.75 0 0 1 .75.75 7.745 7.745 0 0 1-7.75 7.75.75.75 0 0 1-.643-1.136l1.05-1.75a.75.75 0 1 1 1.286.772l-.271.452a6.246 6.246 0 0 0 4.828-6.088.75.75 0 0 1 .75-.75ZM6.578 1.88A6.246 6.246 0 0 0 1.75 7.97a.75.75 0 0 1-1.5 0A7.745 7.745 0 0 1 8 .219a.75.75 0 0 1 .643 1.136l-1.05 1.75a.75.75 0 1 1-1.286-.772l.271-.452Z"
                        fill="currentColor"
                      ></path>
                      <path
                        opacity=".4"
                        d="M14.85 15.33c0 3.41-2.76 6.17-6.17 6.17s-6.17-2.76-6.17-6.17 2.76-6.17 6.17-6.17c.16 0 .31.01.48.02 3.03.23 5.45 2.65 5.68 5.68 0 .15.01.3.01.47Z"
                        fill="currentColor"
                      ></path>
                      <path
                        d="M21.5 8.67c0 3.41-2.76 6.17-6.17 6.17h-.49a6.174 6.174 0 0 0-5.68-5.68v-.49c0-3.41 2.76-6.17 6.17-6.17s6.17 2.76 6.17 6.17ZM11.12 15.011c.12-.25.19-.52.19-.81 0-1-.88-1.88-1.88-1.88h-.26v-.38c0-.41-.34-.75-.75-.75s-.75.34-.75.75v.38H6.62c-.41 0-.75.34-.75.75v4.5c0 .41.34.75.75.75h1.05v.38c0 .41.34.75.75.75s.75-.34.75-.75v-.38h.66c1.12 0 2.04-.84 2.04-1.88 0-.57-.3-1.09-.75-1.43Zm-3.75-1.19h2.06c.21 0 .38.23.38.38 0 .21-.17.38-.38.38H7.37v-.76Zm2.46 3.01H7.36v-.75h2.46c.32 0 .54.2.54.38s-.21.37-.53.37Z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon">P </i>
                  <span class="item-name">Manage Coins</span>
                </a>
              </li>
            </ul>
          </li>
          @endrole
          @role('admin')
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="collapse"
              href="#wallet"
              role="button"
              aria-expanded="false"
              aria-controls="wallet"
            >
              <i class="icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    opacity=".4"
                    d="M22 12v5c0 3-2 5-5 5H7c-3 0-5-2-5-5v-5c0-2.72 1.64-4.62 4.19-4.94.26-.04.53-.06.81-.06h10c.26 0 .51.01.75.05C20.33 7.35 22 9.26 22 12Z"
                    fill="currentColor"
                  ></path>
                  <path
                    d="M17.751 7.05c-.24-.04-.49-.05-.75-.05h-10c-.28 0-.55.02-.81.06.14-.28.34-.54.58-.78l3.25-3.26a3.525 3.525 0 0 1 4.96 0l1.75 1.77c.64.63.98 1.43 1.02 2.26ZM22 12.5h-3c-1.1 0-2 .9-2 2s.9 2 2 2h3"
                    fill="currentColor"
                  ></path>
                </svg>
              </i>
              <span class="item-name">Wallet</span>
              <i class="right-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </i>
            </a>
            <ul
              class="sub-nav collapse"
              id="wallet"
              data-bs-parent="#sidebar"
            >
            <li class="nav-item">
              <a class="nav-link" href="{{route('address.create')}}">
                <i class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      opacity=".4"
                      d="M19.945 12.604h1.967v-1.401a3.668 3.668 0 0 0-3.66-3.66H7.078a3.668 3.668 0 0 0-3.66 3.66v4.253a3.892 3.892 0 0 1 6.327 3.037c0 .73-.205 1.421-.565 2.005-.204.35-.467.662-.769.915h9.84a3.668 3.668 0 0 0 3.66-3.66v-1.158h-1.849c-1.051 0-2.015-.769-2.102-1.82a1.955 1.955 0 0 1 .584-1.587 1.94 1.94 0 0 1 1.401-.584Z"
                      fill="currentColor"
                    ></path>
                    <path
                      d="M15.439 3.846v3.699H7.078a3.668 3.668 0 0 0-3.66 3.66V7.633c0-1.159.71-2.19 1.79-2.6l7.73-2.92c1.206-.447 2.5.439 2.5 1.733ZM22.942 13.598v2.005a1 1 0 0 1-.974.993h-1.907c-1.052 0-2.015-.769-2.103-1.82a1.955 1.955 0 0 1 .584-1.586 1.94 1.94 0 0 1 1.402-.585h2.024a1 1 0 0 1 .974.993ZM14.61 12.41H7.796c-.399 0-.73-.332-.73-.73 0-.4.331-.73.73-.73h6.814c.399 0 .73.33.73.73 0 .398-.331.73-.73.73ZM8.605 15.741a3.896 3.896 0 0 0-2.327-1.115 3.865 3.865 0 0 0-3.18 1.115 3.816 3.816 0 0 0-1.018 1.817 3.864 3.864 0 0 0 1.019 3.69 3.8 3.8 0 0 0 2.498 1.121c.392.035.798 0 1.19-.103a3.816 3.816 0 0 0 1.818-1.019 3.892 3.892 0 0 0 0-5.506Zm-3.47 1.294c0-.399.331-.73.73-.73.406.008.73.331.737.737l-.007.723.695-.007c.406.007.73.33.736.736a.746.746 0 0 1-.736.737l-.695-.007.007.723a.746.746 0 0 1-.737.736.754.754 0 0 1-.73-.73v-.73H4.38a.722.722 0 0 1-.517-.212.722.722 0 0 1-.213-.517c0-.399.33-.73.73-.73h.757v-.729Z"
                      fill="currentColor"
                    ></path>
                  </svg>
                </i>
                <i class="sidenav-mini-icon">A </i>
                <span class="item-name">Add New Wallet</span>
              </a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('address.index')}}">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M5 15c-2.21 0-4 1.79-4 4 0 .75.21 1.46.58 2.06A3.97 3.97 0 0 0 5 23c1.46 0 2.73-.78 3.42-1.94.37-.6.58-1.31.58-2.06 0-2.21-1.79-4-4-4Zm1.97 3.67-2.13 1.97c-.14.13-.33.2-.51.2-.19 0-.38-.07-.53-.22l-.99-.99a.754.754 0 0 1 0-1.06c.29-.29.77-.29 1.06 0l.48.48 1.6-1.48c.3-.28.78-.26 1.06.04s.26.78-.04 1.06ZM17.751 7.05c-.24-.04-.49-.05-.75-.05h-10c-.28 0-.55.02-.81.06.14-.28.34-.54.58-.78l3.25-3.26a3.525 3.525 0 0 1 4.96 0l1.75 1.77c.64.63.98 1.43 1.02 2.26Z"
                        fill="currentColor"
                      ></path>
                      <path
                        opacity=".4"
                        d="M22 12v5c0 3-2 5-5 5H7.63c.31-.26.58-.58.79-.94.37-.6.58-1.31.58-2.06 0-2.21-1.79-4-4-4-1.2 0-2.27.53-3 1.36V12c0-2.72 1.64-4.62 4.19-4.94.26-.04.53-.06.81-.06h10c.26 0 .51.01.75.05C20.33 7.35 22 9.26 22 12Z"
                        fill="currentColor"
                      ></path>
                      <path
                        d="M22 12.5h-3c-1.1 0-2 .9-2 2s.9 2 2 2h3"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon">P </i>
                  <span class="item-name">Manage Wallets</span>
                </a>
              </li>
            </ul>
          </li>
          @endrole
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="collapse"
              href="#sidebar-widget"
              role="button"
              aria-expanded="false"
              aria-controls="sidebar-widget"
            >
              <i class="icon">
                <svg
                  width="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    opacity="0.4"
                    d="M21.25 13.4764C20.429 13.4764 19.761 12.8145 19.761 12.001C19.761 11.1865 20.429 10.5246 21.25 10.5246C21.449 10.5246 21.64 10.4463 21.78 10.3076C21.921 10.1679 22 9.97864 22 9.78146L21.999 7.10415C21.999 4.84102 20.14 3 17.856 3H6.144C3.86 3 2.001 4.84102 2.001 7.10415L2 9.86766C2 10.0648 2.079 10.2541 2.22 10.3938C2.36 10.5325 2.551 10.6108 2.75 10.6108C3.599 10.6108 4.239 11.2083 4.239 12.001C4.239 12.8145 3.571 13.4764 2.75 13.4764C2.336 13.4764 2 13.8093 2 14.2195V16.8949C2 19.158 3.858 21 6.143 21H17.857C20.142 21 22 19.158 22 16.8949V14.2195C22 13.8093 21.664 13.4764 21.25 13.4764Z"
                    fill="currentColor"
                  ></path>
                  <path
                    d="M15.4303 11.5887L14.2513 12.7367L14.5303 14.3597C14.5783 14.6407 14.4653 14.9177 14.2343 15.0837C14.0053 15.2517 13.7063 15.2727 13.4543 15.1387L11.9993 14.3737L10.5413 15.1397C10.4333 15.1967 10.3153 15.2267 10.1983 15.2267C10.0453 15.2267 9.89434 15.1787 9.76434 15.0847C9.53434 14.9177 9.42134 14.6407 9.46934 14.3597L9.74734 12.7367L8.56834 11.5887C8.36434 11.3907 8.29334 11.0997 8.38134 10.8287C8.47034 10.5587 8.70034 10.3667 8.98134 10.3267L10.6073 10.0897L11.3363 8.61268C11.4633 8.35868 11.7173 8.20068 11.9993 8.20068H12.0013C12.2843 8.20168 12.5383 8.35968 12.6633 8.61368L13.3923 10.0897L15.0213 10.3277C15.2993 10.3667 15.5293 10.5587 15.6173 10.8287C15.7063 11.0997 15.6353 11.3907 15.4303 11.5887Z"
                    fill="currentColor"
                  ></path>
                </svg>
              </i>
              <span class="item-name">Referral</span>
              <i class="right-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </i>
            </a>
            <ul
              class="sub-nav collapse"
              id="sidebar-widget"
              data-bs-parent="#sidebar"
            >
              <li class="nav-item">
                <a class="nav-link" href="/referrals">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      width="16"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <circle
                        cx="12"
                        cy="12"
                        r="7.5"
                        stroke="currentColor"
                      ></circle>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> W </i>
                  <span class="item-name">Manage Referrals</span>
                </a>
              </li>
            </ul>
          </li>
          <li><hr class="hr-horizontal" /></li>
          
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="collapse"
              href="#sidebar-user"
              role="button"
              aria-expanded="false"
              aria-controls="sidebar-user"
            >
              <i class="icon">
                <svg
                  width="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                    fill="currentColor"
                  ></path>
                  <path
                    opacity="0.4"
                    d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                    fill="currentColor"
                  ></path>
                </svg>
              </i>
              <span class="item-name">User Profile</span>
              <i class="right-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </i>
            </a>
            <ul
              class="sub-nav collapse"
              id="sidebar-user"
              data-bs-parent="#sidebar"
            >
              {{-- <li class="nav-item">
                <a class="nav-link" href="/dashboard/user-dashboard.html">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      width="16"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <circle
                        cx="12"
                        cy="12"
                        r="7.5"
                        stroke="currentColor"
                      ></circle>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> U </i>
                  <span class="item-name">User Dashboard</span>
                </a>
              </li> --}}
              @role('admin')
              <li class="nav-item">
                <a class="nav-link" href="/users">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      width="16"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <circle
                        cx="12"
                        cy="12"
                        r="7.5"
                        stroke="currentColor"
                      ></circle>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> U </i>
                  <span class="item-name">All Users</span>
                </a>
              </li>
              @endrole
              <li class="nav-item">
                <a class="nav-link" href="/settings">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      width="16"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <circle
                        cx="12"
                        cy="12"
                        r="7.5"
                        stroke="currentColor"
                      ></circle>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> U </i>
                  <span class="item-name">Manage Profile</span>
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('password.change')}}">
                  <i class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      width="16"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <circle
                        cx="12"
                        cy="12"
                        r="7.5"
                        stroke="currentColor"
                      ></circle>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> U </i>
                  <span class="item-name">Change password</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div
        id="sidebar-footer"
        class="position-relative sidebar-footer"
        style="padding-top: 50px !important"
      >
        <div class="card mx-4">
          <div class="card-body">
            <div class="sidebarbottom-content">
              <div class="image">
                <img
                  src="{{asset('/assets/dassets/images/coins/13.png')}}"
                  alt="User-Profile"
                  class="img-fluid"
                />
              </div>
              <p class="mb-0">Need a Urgent Customer Support?</p>
              <br>
              <a href="mailto:support@oarexchange.com" class="btn btn-primary">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>