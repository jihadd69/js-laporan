<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Starter</title>
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
            
                <!-- Inner menu: contains the tasks -->
               
                      <!-- Task title and progress text -->
                     
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
             
            </ul>
          </li>
          <!-- User Account Menu -->
          
          <!-- Control Sidebar Toggle Button -->
         
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
          <img src="../dist/img/logo.png">
        </div>
        <div class="pull-center info">
          
      </div>

      
     
          
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> ADMIN</li>
        <!-- Optionally, you can add icons to the links -->
       <li class="active"><a href="starter.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="active"><a href="data_siswa1.php"><i class="fa fa-user"></i> <span>Data Siswa</span></a></li>
        <li class="active"><a href="datapendaftar.php"><i class="fa fa-user"></i> <span>Pendaftar</span></a></li>
        <li><a href="tambahpendaftar.php"><i class="fa fa-plus"></i> <span>Tambah Pendaftar <link rel="stylesheet" type="text/css" href=""></span></a></li>
        <li><a href="data_pembayaran.php".php<i class="fa fa-file"></i> <span>Data Pembayaran Kursus <link rel="stylesheet" type="text/css" href=""></span></a></li>
        <li><a href="tambah_kelas.php".php<i class="fa fa-file"></i> <span> Data kelas <link rel="stylesheet" type="text/css" href=""></span></a></li>
        <li><a href="logout.php".php<i class="glyphicon glyphicon-log-out"></i> <span>Logout <link rel="stylesheet" type="text/css" href=""></span></a></li>
  
        
        
          
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pendaftar Baru
        
      </h1>
      
      

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              

              <form class="form-horizontal" role="form" action='prosesdatapendaftar.php' method="post" enctype="multipart/form-data">

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
               <?php
                  if (isset($_GET['pesan'])) {
                    echo 
                    "<div class='alert alert-success'>
                      <p> {$_GET['pesan']} </p>
                    </div>";
                  }
                 ?>
            </div>
            <!-- /.box-header -->
            <div class="table-responsive no-padding">
              <table class="table table-hover table-bordered" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Telfon</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Umur</th> 
            <th>Tagihan</th>        
            <th>Kursus</th>
            <th>Status</th>
            <th>Aksi</th>
        
        </tr>
    </thead>
    <tbody>

        <?php
        $no = 1;
        $sql = "SELECT * FROM tbpendaftar  ";
         $query = mysqli_query($koneksi, $sql);

        while($siswa = mysqli_fetch_array($query))
        {
          $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa where id_pendaftar = '".$siswa['id_pendaftar']."'");
          $num = mysqli_num_rows($data);
            
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$siswa['nama_lengkap']."</td>";
            echo "<td>".$siswa['nomor_telfon']."</td>";
            echo "<td>".$siswa['email']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['tanggal']."</td>";
            echo "<td>".$siswa['umur']."</td>";
            echo "<td>".$siswa['tagihan']."</td>";
            echo "<td>".$siswa['kursus']."</td>";
            echo "<td>".$siswa['status']."</td>";
            echo "<td>";

            echo "<a href='data_kelas.php?id_pendaftar=$siswa[id_pendaftar]' type='button' 
            class='btn btn-default' style='color:white;background-color:Mediumseagreen;padding:4px'><span class='glyphicon glyphicon'></span> Pilih Kelas</a>
            ";
           
            
            $no++;
        }
        ?>

    </tbody>
    <tfoot>
      <tr>
        <td colspan="6"><p>Total: <?php echo mysqli_num_rows($query) ?></p></td>
      </tr>
      
    </tfoot>
    </table>


    
</form>
            </div>
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
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
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