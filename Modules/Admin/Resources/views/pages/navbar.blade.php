@yield('section') <!-- page-wrapper Start       -->
 <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="{{url('admin')}}"><img class="img-fluid" src="#" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="{{url('admin')}}"><img class="img-fluid" src="#" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><img class="img-40 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt=""></div>
                <ul class="notification-dropdown onhover-show-div">
                  <div class="text-center user-img">
                    <img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}"  alt="">
                    <a href="javascript:void(0);">
                      <h6 class="mt-3 f-14 f-w-600">Admin</h6>
                      {{ __('You are logged in!') }}
                    </a>
                  
                  </div>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form> 
                <button class="btn btn-primary-light" type="submit"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>Log out</a></button>
        
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>