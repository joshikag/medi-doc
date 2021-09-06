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
    <title>Medical History</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
            <!-- End Bottom points-->
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Medical History</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Medical History</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
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
                                    <!-- <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Doctor_ID</th>
                                                <th>Ailment</th>
                                            </tr>
                                        </thead> -->
                                        <!-- <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>24th July</td>
                                                <td>D01011</td>
                                                <td>Fever</td>
                                                <td>Paracetamol & Inhaler</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>4th August</td>
                                                <td>D01011</td>
                                                <td>Cough</td>
                                                <td>Hajmola</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>10th Sept</td>
                                                <td>D01011</td>
                                                <td>HeadAche</td>
                                                <td>Watch F.R.I.E.N.D.S</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>10th Sept</td>
                                                <td>D01011</td>
                                                <td>HeadAche</td>
                                                <td>Watch Brooklyn99</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>10th Sept</td>
                                                <td>D01011</td>
                                                <td>HeadAche</td>
                                                <td>Stop TV</td>
                                            </tr>
                                            
                                        </tbody> -->
                                    </table>
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
            <footer class="footer">
                © 2017 Material Pro Admin by Team RK
            </footer>
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
</body>

</html>
