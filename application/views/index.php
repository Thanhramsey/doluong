<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title_page; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/bower_components/font-awesome/css/font-awesome.min.css">
      
     
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asserts/dist/css/skins/_all-skins.min.css">
       
        <?php 
            $this->load->view($load.'/css');
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <?php
    $result = $this->session->userdata('login');
    //print_r($result);
    ?>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>VNPT</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>VNPT</b> Gia Lai</span>
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
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?php echo base_url(); ?>asserts/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs"><?php echo $result[0]['fullname']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url(); ?>asserts/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            <?php echo $result[0]['fullname']; ?>
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url('admin/user/edit_user/' . $result[0]['id']); ?>" class="btn btn-default btn-flat">Thông tin</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('Home/logout'); ?>" class="btn btn-default btn-flat">Đăng xuất</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
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
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>asserts/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $result[0]['fullname']; ?></p>
                            <!-- Status -->
                            <a href="<?php echo base_url('home/user/change_password/' . $result[0]['id']) ?>"><i class="fa fa-circle text-success"></i> Đổi mật khẩu</a>
                        </div>
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
                        <li class="header">Danh sách menu</li>
						<!-- Optionally, you can add icons to the links -->
                        <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-laptop"></i>
                                <span>Quản lý danh mục</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                 </span>
                             </a>
                             <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url("Category"); ?>"><i class="fa fa-circle-o"></i> <span>Loại năng lực thử nghiệm</span></a></li>
                                        <li><a href="<?php echo base_url("Method"); ?>"><i class="fa fa-circle-o"></i> <span>Năng lực thử nghiệm</span></a></li>
                                        <li><a href="<?php echo base_url("Code"); ?>"><i class="fa fa-circle-o"></i> <span>Quản lý QC</span></a></li>
                             </ul>
                        </li>

                        <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i>
                                <span>Quản lý giấy biên nhận</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                 </span>
                             </a>
                             <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url("Required"); ?>"><i class="fa fa-circle-o"></i> <span>Danh sách giấy biên nhận</span></a></li>
                                    <li><a href="<?php echo base_url("Required/Create"); ?>"><i class="fa fa-circle-o"></i> <span>Tạo giấy biên nhận</span></a></li>
                             </ul>
                        </li>
						
                      
                        <li><a href="<?php echo base_url("Transfer"); ?>"><i class="fa fa-share"></i> <span>Danh sách giấy chuyển mẫu</span></a></li>
                        <li><a href="<?php echo base_url("Result"); ?>"><i class="fa fa-book"></i> <span>Danh sách giấy trả kết quả</span></a></li>
                            <?php $id = $this->session->userdata('login')[0]['id']; ?>
                       
                     

                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php $this->load->view($template_content); ?>
            </div>
            <!-- /.content-wrapper -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>
        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 3 -->
        <script src="<?php echo base_url(); ?>asserts/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>asserts/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asserts/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>asserts/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url(); ?>asserts/bower_components/jquery-ui/jquery-ui.min.js"></script>
      
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>asserts/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>asserts/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>asserts/dist/js/adminlte.min.js"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>asserts/dist/js/demo.js"></script>

        <script src="<?php echo base_url(); ?>asserts/dist/js/datatable.js"></script>
        <script src="<?php echo base_url(); ?>asserts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      
        <?php 
            $this->load->view($load.'/ajax');
        ?>
        

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
      
       <?php if(isset($ajax)){
           $this->load->view('admin/menu/ajax');
       } ?>

       
    </body>
</html>
