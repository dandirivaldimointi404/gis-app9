  <!--**********************************
            Header start
        ***********************************-->
  <div class="header">
      <div class="header-content clearfix">

          <div class="nav-control">
              <div class="hamburger">
                  <span class="toggle-icon"><i class="icon-menu"></i></span>
              </div>
          </div>

          <div class="header-right">
              <ul class="clearfix">
                  <li class="icons dropdown">
                      <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                          <span class="activity active"></span>
                          <img src="{{ asset('assets_panel/images/user/1.png') }}" height="40" width="40"
                              alt="">
                      </div>
                      <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                          <div class="dropdown-content-body">
                              <ul>
                                  <li>
                                      <a href="app-profile.html"><i class="icon-user"></i>
                                          <span>Profile</span></a>
                                  </li>
                                  <hr class="my-2">
                                  <form id="logout-form" method="POST" action="/keluar">
                                      @csrf
                                      <li>
                                          <a href="/keluar"
                                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                              <i class="icon-key"></i> <span>Logout</span>
                                          </a>
                                      </li>
                                  </form>

                              </ul>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>

  {{-- <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); his.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form> --}}
  <!--**********************************
          Header end ti-comment-alt
      ***********************************-->
