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
                <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
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
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Manage Product</h5>
			  <div class="container mt-3">
				  <table id="mytable" class="table table-hover">
					<thead>
					  <tr>
						<th>id</th>
						<th>cate_id</th>
						<th>prod_name</th>
						<th>main_price</th>
            <th>disc_price</th>
						<th>short_desc</th>
            <th>long_desc</th>
						<th>prod_image</th>
					  </tr>
					</thead>
					<tbody>
					 <?php
					
					foreach($prod_arr as $data)
					{
					?>
					
					  <tr>
						<td><?php echo $data->id?></td>
            <td><?php echo $data->cate_id?></td>
						<td><?php echo $data->prod_name?></td>
						<td><?php echo $data->main_price?></td>
            <td><?php echo $data->disc_price?></td>
						<td><?php echo $data->short_desc?></td>
            <td><?php echo $data->long_desc?></td>
            <td><img src="{{url('upload/product/'.$data->prod_image)}}" width="50px" /></td>
						<td>
							<a href="#" class="btn btn-primary">Edit</a>
							<a href="{{url('manage_product/'.$data->id)}}" class="btn btn-danger">Delete</a>
						</td>
					  </tr>
					 <?php
					}
					 ?> 
					  
					</tbody>
				  </table>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection  