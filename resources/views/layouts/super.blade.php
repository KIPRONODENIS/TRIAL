<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>chepterit high| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="plugins/style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
   @yield('messages')

   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">chepterit High School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Super Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
           <li class="nav-item has-treeview menu-open">
            <a href="/superadmin" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
               Home
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
          </li>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tenders
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="stenders" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Tender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dtenders" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Delete Tender</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="sfees" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                School Fee
             
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="history" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                History
             
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="smanagement" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Management
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
          </li>
          
           
          <li class="nav-item has-treeview">
            <a href="suniforms" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                 School Uniforms 
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="sevents" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                 Events 
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
          </li>

         
          <li class="nav-item has-treeview ">
            <a href="home" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Carousel
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="studentleaders" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Student leaders
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
           
          </li>
  
           <li class="nav-item has-treeview">
            <a href="agallery" class="nav-link">
              <i class="nav-icon fa fa-picture-o"></i>
              <p>
            Gallery
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
           
          </li>
           
          <li class="nav-item has-treeview">
            <a href="clubs" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Clubs Blog
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
          </li>
  
           <li class="nav-item has-treeview ">
            <a href="tdepartment" class="nav-link ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Departments
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Teachers
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addteacher" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="removeteacher" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Remove Teacher</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="tstaff" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>

                Staff Images
             
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="tassignments" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Assignments
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
           
         
        
         
  
          <li class="nav-header">Messages</li>

          <li class="nav-item has-treeview">
            <a href="messages" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
         inbox
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
        
    
        
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@yield('content')
@yield('script')
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="http://adminlte.io">chepterit high school</a>.</strong>
    All rights reserved.
    

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
