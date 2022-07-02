@yield('header')
<!-- Loader starts-->
<div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
  

<!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <!-- <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="javascript:void(0);">
              <h6 class="mt-3 f-14 f-w-600">John Loe</h6></a>
            <p class="mb-0 font-roboto">Admin</p>
          </div> -->
         
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{url('admin')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user"></i><span>User Management</span></a>
                    <ul class="nav-submenu menu-content">
                   
                      <li><a href="{{url('admin/users/create')}}">Add User</a></li>
                      <li><a href="{{url('admin/users')}}">User List</a></li>
                    </ul>
                  </li>
                 
          </nav>
        </header>