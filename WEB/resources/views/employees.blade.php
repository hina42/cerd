<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   WAAR
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{URL::asset('css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::asset('demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          WAAR
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li ><a href="{{route('admin.show', ['page' =>'dashboard'])}}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('employee.show')}}">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Employees</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.show', ['page' =>'role'])}}">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{route('admin.show', ['page' =>'department'])}}">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Departments</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.show', ['page' =>'user'])}}">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li  >
                        <a href="{{route('admin.show', ['page' =>'tables'])}}">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.show', ['page' =>'typography'])}}">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>Typography</p>
                        </a>
                    </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Employees</h4>
               Gender:  
                  <a href="{{route('employee.show',['gender'=>'male'])}}"> Male</a>
                  
                  <a href="{{route('employee.show',['gender'=>'female'])}}"> Female</a>
                  <a href="{{route('employee.show')}}"> Reset</a>
                 
               
              
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                     <th>
                        First Name
                      </th>
                      <th>
                        Last name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                       Gender
                      </th>
                      <th>
                       Job Title
                      </th>
                      <th>
                       Action
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach($data as $employee)
                        <tr>
                        <td>
                            {{$employee->firstName}}
                            </td>
                            <td>
                            {{$employee->lastName}}
                            </td>
                            <td>
                            {{$employee->email}}
                            </td>
                            <td>
                            {{$employee->phone}}
                            </td>
                            <td>
                            {{$employee->gender}}
                            </td>
                            <td>
                            {{$employee->jobTitle}}
                            </td>
                            <td>
                            <a href="{{route('employee.del', ['id'=>$employee->employeeID])}}"><i class="fa fa-remove" style="font-size:20px;color:red"></i></a>
                            <a href="{{route('employee.edit', ['id'=>$employee->employeeID])}}"><i class="fa fa-edit" style="font-size:20px;color:blue;margin-left:10px"></i></a>
                            
                            </td>
                        </tr>
                        </tr>
                        
                        @endforeach   
                    </tbody>
                  </table>
                  </div>{{$data->links()}}
              </div>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Add Employee</h4>

                <div class="container">
  <form action="{{route('employee.create')}}">

  <div class="form-group">
      <label for="FirstName">FirstName:</label>
      <input type="FirstName" class="form-control" id="FirstName" placeholder="Enter FirstName" name="firstName">
    </div>
    <div class="form-group">
      <label for="LastName">LastName:</label>
      <input type="LastName" class="form-control" id="LastName" placeholder="Enter LastName" name="lastName">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
    <div class="form-group">
      <label for="Phone">Phone:</label>
      <input type="Phone" class="form-control" id="Phone" placeholder="Enter Phone" name="phone">
    </div>
    <div class="form-group">
      <label for="Gender">Gender:</label>
      <input type="Gender" class="form-control" id="Gender" placeholder="Enter Gender" name="gender">
    </div>
    <div class="form-group">
      <label for="jobTitle">Job Title:</label>
      <input type="jobTitle" class="form-control" id="jobTitle" placeholder="Enter Job" name="jobTitle">
    </div>
    <div class="form-group">
      <label for="salary">Salary:</label>
      <input type="salary" class="form-control" id="salary" placeholder="Enter salary" name="salary">
    </div>
    <div class="form-group">
      <label for="role">Role:</label>
    <select  type="role" class="form-control" id="role" placeholder="Enter role" name="role">
    @foreach($roles as $k)
    <option>
    {{$k->roleName}}
    </option>
    @endforeach</select>
    </div>
    <div class="form-group">
      <label for="department">Department:</label>
    <select  type="department" class="form-control" id="department" placeholder="Enter department" name="department">
    @foreach($departments as $j)
    <option>
    {{$j->departmentName}}
    </option>
    @endforeach</select>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</div>
              </div>
            </div>
          



 <!--   Core JS Files   -->
 <script src="{{URL::asset('js/core/jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/core/popper.min.js')}}"></script>
  <script src="{{URL::asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{URL::asset('js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{URL::asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::asset('js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{URL::asset('demo/demo.js')}}"></script>
</body>
<script>
$(document).ready(function(){
});

<script>
</html>