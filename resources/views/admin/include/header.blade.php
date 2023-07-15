<header class="top-header">        
    <nav class="navbar navbar-expand">
      <div class="mobile-toggle-icon d-xl-none">
          <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar d-none d-xl-block">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
        </ul>
        </div>
        <div class="search-toggle-icon d-xl-none ms-auto">
          <i class="bi bi-search"></i>
        </div>
        <form class="searchbar d-none d-xl-flex ms-auto">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-3">
          <ul class="navbar-nav align-items-center">
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="user-setting d-flex align-items-center gap-1">
                <img src="{{ asset('adminAsset') }}/assets/images/avatars/avatar-1.png" class="user-img" alt="">
                <div class="user-name d-none d-sm-block">{{auth()->user()->name}}</div>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                      <img src="{{ asset('adminAsset') }}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                      </div>
                   </div>
                 </a>
               </li>
               <li><hr class="dropdown-divider"></li>
               <li>
                  <a class="dropdown-item" href="pages-user-profile.html">
                     <div class="d-flex align-items-center">
                       <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                       <div class="setting-text ms-3"><span>Profile</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                       <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                       <div class="setting-text ms-3"><span>Setting</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="index2.html">
                     <div class="d-flex align-items-center">
                       <div class="setting-icon"><i class="bi bi-speedometer"></i></div>
                       <div class="setting-text ms-3"><span>Dashboard</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                       <div class="setting-icon"><i class="bi bi-piggy-bank-fill"></i></div>
                       <div class="setting-text ms-3"><span>Earnings</span></div>
                     </div>
                   </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                       <div class="setting-icon"><i class="bi bi-cloud-arrow-down-fill"></i></div>
                       <div class="setting-text ms-3"><span>Downloads</span></div>
                     </div>
                   </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                     <div class="d-flex align-items-center">
                       <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                       <div class="setting-text ms-3"><span>Logout</span></div>
                     </div>
                   </a>
                   <form action="{{ route('logout') }}" method="post" id="logoutForm">
                    @csrf
                   </form>
                </li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="projects">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
               
            </div>
          </li>
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="messages">
                <span class="notify-badge">5</span>
                <i class="bi bi-messenger"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="p-2 border-bottom m-2">
                  <h5 class="h5 mb-0">Messages</h5>
              </div>
             <div class="header-message-list p-2">
                <div class="dropdown-item bg-light radius-10 mb-1">
                  <form class="dropdown-searchbar position-relative">
                    <div class="position-absolute top-50 start-0 translate-middle-y px-3 search-icon"><i class="bi bi-search"></i></div>
                    <input class="form-control" type="search" placeholder="Search Messages">
                  </form>
                </div>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                      <img src="{{ asset('adminAsset') }}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="52" height="52">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                      </div>
                   </div>
                 </a>
                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                     <img src="{{ asset('adminAsset') }}/assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="52" height="52">
                     <div class="ms-3 flex-grow-1">
                       <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                       <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                     </div>
                  </div>
                </a>
            </div>
            <div class="p-2">
              <div><hr class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <div class="text-center">View All Messages</div>
                </a>
            </div>
           </div>
          </li>
          <li class="nav-item dropdown dropdown-large d-none d-sm-block">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
              <div class="notifications">
                <span class="notify-badge">8</span>
                <i class="bi bi-bell-fill"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0">
              <div class="p-2 border-bottom m-2">
                  <h5 class="h5 mb-0">Notifications</h5>
              </div>
              <div class="header-notifications-list p-2">
                 <div class="dropdown-item bg-light radius-10 mb-1">
                  <form class="dropdown-searchbar position-relative">
                    <div class="position-absolute top-50 start-0 translate-middle-y px-3 search-icon"><i class="bi bi-search"></i></div>
                    <input class="form-control" type="search" placeholder="Search Messages">
                  </form>
                  </div>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                       <div class="notification-box"><i class="bi bi-basket2-fill"></i></div>
                       <div class="ms-3 flex-grow-1">
                         <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                         <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                       </div>
                    </div>
                  </a>
                 <a class="dropdown-item" href="#">
                   <div class="d-flex align-items-center">
                    <div class="notification-box"><i class="bi bi-people-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                      </div>
                   </div>
                 </a>
             </div>
             <div class="p-2">
               <div><hr class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">
                   <div class="text-center">View All Notifications</div>
                 </a>
             </div>
            </div>
            </li>
          </ul>
          </div>
    </nav>
  </header>