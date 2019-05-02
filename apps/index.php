<?php
    error_reporting(0);
    session_start();
    require_once "brd.php";
    if (empty($_SESSION['user_name']) || empty($_SESSION['token'])){                
        _redirectTo('../apps/login.php?msg=err_access');
    }
    else{
        require_once "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Wasse Key Point Apps - Backend Administrator</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/node_modules/summernote/dist/summernote-bs4.css">
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">    
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 0px;
            border-radius: 0px;
            background-color: #515151; 
        }
        ::-webkit-scrollbar-thumb:window-inactive {
            background: #CCC; 
        }
    </style>
</head>

<body class="fixed-layout mini-sidebar skin-green-dark">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Wasse Key Point Apps</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" title="Wasse Key Point Apps">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         Wasse KP Apps
                            <!-- <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                        </span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                                              
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="#"><i class="icon-settings"></i> Setting</a></li>
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="sign_out.php"><i class="icon-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile" style="margin-top: 0px !important;">
                    <div class="user-pro-body">
                        <div>
                            <img src="../assets/images/users/avatar.png" alt="user-img" class="img-circle">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false"><?php UserNameLogin(); ?>
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">                                
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-settings"></i> Change Password</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="sign_out.php" class="dropdown-item">
                                    <i class="icon-lock"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a class="waves-effect waves-dark" href="../apps/?" aria-expanded="false">
                                <i class="icon-home"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>                        
                        <li>
                            <a class="waves-effect waves-dark" href="?module=syllabus" aria-expanded="false">
                                <i class="icon-layers"></i>
                                <span class="hide-menu">Syllabus</span>
                            </a>
                        </li>                        
                        <li>
                            <a class="waves-effect waves-dark" href="?module=recomended_book" aria-expanded="false">
                                <i class="icon-notebook"></i>
                                <span class="hide-menu">Recomended Book</span>
                            </a>
                        </li> 
                        <li>
                            <a class="waves-effect waves-dark" href="?module=qa" aria-expanded="false">
                                <i class="icon-question"></i>
                                <span class="hide-menu">Question &amp; Answer</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="?module=tutorial" aria-expanded="false">
                                <i class="icon-film"></i>
                                <span class="hide-menu">Tutorial</span>
                            </a>
                        </li> 
                        <li>
                            <a class="waves-effect waves-dark" href="?module=top_news" aria-expanded="false">
                                <i class="icon-note"></i>
                                <span class="hide-menu">Top News</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="?module=group_chat" aria-expanded="false">
                                <i class="icon-people"></i>
                                <span class="hide-menu">Groups Chat</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="?module=univ_coll" aria-expanded="false">
                                <i class="icon-graduation"></i>
                                <span class="hide-menu">Univ. Collection</span>
                            </a>
                        </li> 
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">  
                    <?php
                        brd($_GET['module']);
                    ?>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <?php
                    
                    $module = $_GET['module'];
                    if(isset($module)){
                        include "$module".".php";
                    }
                    else{                    
                ?>

                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-layers"></i></h3>
                                                <p class="text-muted">SYLLABUS DATA</p>
                                            </div>
                                            <div class="ml-auto">
                                                <h2 class="counter text-primary">23</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-notebook"></i></h3>
                                                <p class="text-muted">RECOMENDED BOOK DATA</p>
                                            </div>
                                            <div class="ml-auto">
                                                <h2 class="counter text-cyan">169</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-question"></i></h3>
                                                <p class="text-muted">QUESTION &amp; ANSWER DATA</p>
                                            </div>
                                            <div class="ml-auto">
                                                <h2 class="counter text-purple">157</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h3><i class="icon-film"></i></h3>
                                                <p class="text-muted">TUTORIAL DATA</p>
                                            </div>
                                            <div class="ml-auto">
                                                <h2 class="counter text-success">431</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="../assets/node_modules/datatables/datatables.min.js"></script>
    <script src="../assets/node_modules/summernote/dist/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

            $('.summernote').summernote({
                height: 250, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });

            $('.summernote1').summernote({
                height: 250, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });

        })
    </script>
</body>
</html>
<?php
    }
?>