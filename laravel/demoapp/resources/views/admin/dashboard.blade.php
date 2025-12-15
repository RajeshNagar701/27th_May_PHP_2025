@extends('admin.layout.frame')

@section('main_section')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-bell"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="message-body">
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 1
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 2
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
               
              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="admin_logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!--  Row 1 -->
          <div class="row">
            <div class="col-lg-8">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Sales Overview</h4>
                      <p class="card-subtitle">
                        Ample admin Vs Pixel admin
                      </p>
                    </div>
                    <div class="ms-auto">
                      <ul class="list-unstyled mb-0">
                        <li class="list-inline-item text-primary">
                          <span class="round-8 text-bg-primary rounded-circle me-1 d-inline-block"></span>
                          Ample
                        </li>
                        <li class="list-inline-item text-info">
                          <span class="round-8 text-bg-info rounded-circle me-1 d-inline-block"></span>
                          Pixel Admin
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="sales-overview" class="mt-4 mx-n6"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card overflow-hidden">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-start">
                    <div>
                      <h4 class="card-title">Weekly Stats</h4>
                      <p class="card-subtitle">Average sales</p>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a href="javascript:void(0)" class="text-muted" id="year1-dropdown" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <i class="ti ti-dots fs-7"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="year1-dropdown">
                          <li>
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 pb-3 d-flex align-items-center">
                    <span class="btn btn-primary rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-shopping-cart fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">Top Sales</h5>
                      <span class="text-muted fs-3">Johnathan Doe</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                  </div>
                  <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-warning rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-star fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">Best Seller</h5>
                      <span class="text-muted fs-3">MaterialPro Admin</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                  </div>
                  <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-success rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-message-dots fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">Most Commented</h5>
                      <span class="text-muted fs-3">Ample Admin</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                  </div>
                  <div class="pt-3 mb-7 d-flex align-items-center">
                    <span class="btn btn-secondary rounded-circle round-48 hstack justify-content-center">
                      <i class="ti ti-diamond fs-6"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bolder fs-4">Top Budgets</h5>
                      <span class="text-muted fs-3">Sunil Joshi</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-secondary-subtle text-muted">+15%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          
          </div>
 @endsection      