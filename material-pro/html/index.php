<?php

session_start();
if(!isset($_SESSION['patient'])) {
    header('location: Login-Patient.php');
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
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="profile-patient.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li> -->
                        <!-- <li> <a class="waves-effect waves-dark" href="table-basic.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Medical History</span></a>
                        </li> -->

                    </ul>
                </nav>
                
                <!-- End Sidebar navigation -->
            </div>
            <div class="sidebar-footer">
                <a href="Login-Patient.php" class="link" data-toggle="tooltip" title="Logout"><i class="fa fa-power-off"></i></a> 
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
                                <div class="pro-img"><div class="user-img"><span class="round"><?php echo"<font color='white'>". $_SESSION['init']."</font>"; ?></span> <span class="profile-status away pull-right"></span> </div></div>
                                <h3 class="m-b-0"><?php echo"<font color='gray'>". $_SESSION['patient']."</font>"; ?></h3>
                                <p><?php echo"<font color='gray'>". $_SESSION['estatus']."</font>"; ?> </p>
                                <!-- <a href="javascript:void(0)" href="profile-patient.php" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Profile</a> -->
                                <!-- <div class="row text-center m-t-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">AB+</h3><small>Blood Group</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">99Lb</h3><small>Weight</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">5"10'</h3><small>Height</small></div>
                                </div> -->
                            </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block bg-info">
                                <h4 class="text-white card-title">Emergency Contacts</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark"><!--+--></button></h2>
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <span class="round"><span class="round"><?php echo"<font color='white'>". $_SESSION['dinit']."</font>"; ?></span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5><?php echo"<font color='gray'>".$_SESSION['dfname']."  ".$_SESSION['dlname']."</font>";?></h5> 
                                                <div class="mail-desc"><?php echo"<font color='gray'>". $_SESSION['phno']."</font>"; ?></div>
                                                <div class="mail-desc"><?php echo"<font color='gray'>". $_SESSION['rel']."</font>"; ?></div>
                                            </div>
                                        </a>
                                        <!-- Message
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Singh</h5> <span class="mail-desc">83562839303</span></div>
                                        </a>
                                        Message
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Ankit Mishra</h5> <span class="mail-desc">9636389393</span></div>
                                        </a>
                                        Message
                                        <a href="#">
                                            <div class="user-img"> <span class="round">K</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Kartikey Tyagi</h5> <span class="mail-desc">86363839390</span></div>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="FName"><?php echo"<font color='gray'>". $_SESSION['patient']."</font>"; ?> <?php echo"<font color='gray'>". $_SESSION['p2']."</font>"; ?> <?php echo"<font color='gray'>". $_SESSION['p3']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-pid" class="col-md-12">Patient ID</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="Pid"><?php echo"<font color='gray'>". $_SESSION['id']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="password">******</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="Phno"><?php echo"<font color='gray'>". $_SESSION['phone_no']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Age</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="age"><?php echo"<font color='gray'>". $_SESSION['age']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Gender</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="gender"><?php echo"<font color='gray'>". $_SESSION['gender']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Employment Status</label>
                                        <div class="col-md-12">
                                            <p class="form-control form-control-line" id="gender"><?php echo"<font color='gray'>". $_SESSION['employ']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                        <label class="col-md-12">Flat number</label>
                                        <div class="col-md-12" class="form-control form-control-line">
                                            <p class="form-control form-control-line" id="fno"><?php echo"<font color='gray'>". $_SESSION['flatno']."</font>"; ?></p>
                                        </div>
                                        <label class="col-md-12">Street</label>
                                        <div class="col-md-12" class="form-control form-control-line">
                                            <p class="form-control form-control-line" id="street"><?php echo"<font color='gray'>". $_SESSION['street']."</font>"; ?></p>
                                        </div>
                                        <label class="col-md-12">City</label>
                                        <div class="col-md-12" class="form-control form-control-line">
                                            <p class="form-control form-control-line" id="city"><?php echo"<font color='gray'>". $_SESSION['city']."</font>"; ?></p>
                                        </div>
                                        <label class="col-md-12">State</label>
                                        <div class="col-md-12" class="form-control form-control-line">
                                            <p class="form-control form-control-line" id="state"><?php echo"<font color='gray'>". $_SESSION['state']."</font>"; ?></p>
                                        </div>
                                        <label class="col-md-12">Pincode</label>
                                        <div class="col-md-12" class="form-control form-control-line">
                                            <p class="form-control form-control-line" id="pincode"><?php echo"<font color='gray'>". $_SESSION['pincode']."</font>"; ?></p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Dependents</label>
                                        <div class="col-md-12">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12" class="form-control form-control-line">
                                            <p class="form-control form-control-line" id="dname1"><?php echo"<font color='gray'>". $_SESSION['dfname']."</font>"; ?></p>
                                        </div>
                                        <label class="col-md-12">Phone number</label>
                                        <div class="col-md-12" class="form-control form-control-line">
                                            <p class="form-control form-control-line" id="dphno1"><?php echo"<font color='gray'>". $_SESSION['phno']."</font>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 update">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Records</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                <?php
                                        $con = mysqli_connect('localhost','root','');

                                        mysqli_select_db($con,'dbms');
                                        $s = "SELECT * FROM medical_history where p_id =".$_SESSION['id']; //JOIN patient_info ON medical_history.p_id=patient_info.pid
                                        $result = mysqli_query($con,$s);
                                        $num = mysqli_num_rows($result);
                                        $cnt=1;
                                        echo "<table class='table'>
                                        <tr>
                                        <th>#</th>
                                        <th>Disease</th>
                                        <th>Prescription</th>
                                        <th>Doctor id</th>
                                        <th>Reference number</th>
                                        </tr>";
                                        if($num==1){
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                echo "<td>" . $cnt . "</td>";
                                                echo "<td>" . $row['disease'] . "</td>";
                                                echo "<td>" . $row['prescription'] . "</td>";
                                                echo "<td>" . $row['did'] . "</td>";
                                                echo "<td>" . $row['ref_no'] . "</td>";
                                                echo "</tr>";
                                                $cnt=$cnt+1;
                                                }
                                        }
                                        echo "</table>";
                                        mysqli_close($con);
                                        ?>
                                    </table>
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
            <!-- <footer class="footer"> © Govt. Of India </footer> -->
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
