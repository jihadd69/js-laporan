
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User | Daftar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <?php require_once 'koneksi1.php'; ?>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="starter.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>English</b>Today</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-center image">
          <img src="../dist/img/logo2.jpg">
        </div>
        <div class="pull-center info">
          
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> USER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="http://localhost/School%20Free%20Website%20Template%20-%20Free-CSS.com/EnglishToday/index.html"><i class="fa fa-link"></i> <span> Home</span></a></li>
        <li><a href="pendaftaran.php"><i class="fa fa-link"></i> <span>Pendaftaran <link rel="stylesheet" type="text/css" href=""></span></a></li>
        <li><a href=""><i class="fa fa-link"></i> <span>Another<link rel="stylesheet" type="text/css" href=""></span></a></li>
        
          <ul class="treeview-menu">
            <li><a href="#">Minggu</a></li>
            <li><a href="#">Bulan</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Form Pendaftaran</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">



      <!--------------------------
        | Your Page Content Here |
        -------------------------->
       
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
              
            <div class="container">
              <h1> Isi Biodata Dengan Lengkap</h1>
              

                <form class="form-horizontal" role="form" action='function/prosespendaftar.php' method="post" enctype="multipart/form-data">

                
                <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama Lengkap </label>
                <div class="col-sm-9"><input type="text" id="form-field-1-1" placeholder="Nama Lengkap" class="col-xs-10 col-sm-5" name="nama_lengkap" required="">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nomor Telfon </label>
                <div class="col-sm-9"><input type="tel" id="form-field-1-1" placeholder="Nomor Telfon Yang Aktif" class="col-xs-10 col-sm-5" name="nomor_telfon" required="">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email</label>
                <div class="col-sm-9"><input type="text" id="form-field-1-1" placeholder="Email Yang Aktif" class="col-xs-10 col-sm-5" name="email" required="">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Umur </label>
                <div class="col-sm-9"><input type="tel" id="form-field-1-1" placeholder="Umur" class="col-xs-10 col-sm-5" name="umur" required="">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Alamat </label>
                <div class="col-sm-9"><input type="text" id="form-field-1-1" placeholder="Alamat" class="col-xs-10 col-sm-5" name="alamat" required="">
                </div>
                </div>
                
               <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Pilih Kursus </label>
                <h4><select name="kursus">
                  <option>-Pilih Kursus-</option>
                <option value="3000000-English For Conversation">English For Conversation </option>
                <option value="3000000-English for Gramer">English for Gramer </option>
                <option value="3000000-English For Business">English For Business</option>
                <option value="300000-Toefl">Toefl</option>
                <option value="300000-Toeic">Toeic</option>/
              </select>
              </h4>

                <div class="form-group">
                  <button class="btn btn-primary"name="registrasi" type="submit">TAMBAH</button>
                </div>
              </form>

              
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

</body>
</html>