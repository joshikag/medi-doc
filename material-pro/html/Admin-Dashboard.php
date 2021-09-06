<?php

session_start();
if(!isset($_SESSION['user'])) {
    header('location: Login-Admin.php');
}
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
    <title>MediDoc</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <span class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                            <span><img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> </span>
                         <span><strong class="heading">MEDIDOC</strong></span> </a>
                    </span>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        
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
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="Admin-Dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="profile-admin.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="patient-record-view.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">View Patient History</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="patient-record-modify.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Modify Patient Record</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <a href="Login-Admin.php" class="link" data-toggle="tooltip" title="Logout"><i class="fa fa-power-off"></i></a> 
            </div>
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
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <!-- Row -->
                <!-- Row -->

                <div class="row">
                   
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="../assets/images/background/profile-bg.jpg" alt="Card image cap">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><div class="user-img"> <span class="round"><?php echo"<font color='white'>". $_SESSION['user'][0]."</font>"; ?></span> <span class="profile-status away pull-right"></span> </div></div>
                                <h3 class="m-b-0"><?php echo"<font color='gray'>". $_SESSION['user']."</font>"; ?></h3>
                                <p>Head Admin </p>
                                <!-- <a href="javascript:void(0)" href="profile-admin.php" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Profile</a> -->
                                <!-- <div class="row text-center m-t-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">1</h3><small>Hospital Rank</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">348</h3><small>Accreditions</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">94.98%</h3><small>Success Ratio</small></div>
                                </div> -->
                            </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block bg-info">
                                <h4 class="text-white card-title">Head of Departments</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-5">The Gems of our hospital</h6>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                                    <div class="message-widget contact-widget">
                                    <?php
                                        /*$con = mysqli_connect('localhost','root','');
                                        mysqli_select_db($con,'dbms');
                                        $s = "SELECT * FROM doc where a_id =".$_SESSION['id']; //JOIN patient_info ON medical_history.p_id=patient_info.pid
                                        $result = mysqli_query($con,$s);
                                        $num = mysqli_num_rows($result);
                                        if($num==1){
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<div class='user-img'> <span class='round'><div class=".$row['name'][0]."</div></span> <span class='profile-status away pull-right'></span> </div>
                                                <div class='mail-contnet'>
                                                    <h5>".$row['name']."</h5><span class='mail-desc'>".$row['d_id']."</span><span class='mail-desc'>".$row['speciality']."</span><span class='mail-desc'>".$row['qualification']."</span>
                                                </div>";                    
                                                }
                                        }
                                        echo "</table>";
                                        mysqli_close($con);
                                        */?>
                                        <!-- Message
                                        <a href="#">
                                            <div class="user-img"> <span class="round">S</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sovan Sinha</h5> <span class="mail-desc">MD</span></div>
                                        </a>
                                        Message
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Singh</h5> <span class="mail-desc">Neurologist</span></div>
                                        </a>
                                        Message
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Ankit Mishra</h5> <span class="mail-desc">Physician</span></div>
                                        </a>
                                        Message
                                        <a href="#">
                                            <div class="user-img"> <span class="round">K</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Kartikey Tyagi</h5> <span class="mail-desc">Management</span></div>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © Govt. Of India </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <script src="profile.js"></script>
</body>

</html>
