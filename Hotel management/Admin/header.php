<?php 
@include "config.php";

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

        <link href="css/styles.css" rel="stylesheet" />
        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" href="style.css">

        <script type="text/javascript"> 
            function display_ct6() {
            var x = new Date()
            var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
            hours = x.getHours( ) % 12;
            hours = hours ? hours : 12;
            var x1= hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;

            document.getElementById('ct6').innerHTML = x1;
            display_c6();
            }
            function display_c6(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct6()',refresh)
            }
            display_c6()
        </script>

    </head>

    <body class="sb-nav-fixed"  onload=display_ct(); >
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">JJDVC Admin</a>
            <!-- Sidebar Toggle-->
   
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <div class="d-flex">
                <a class="btn btn-secondary ml-5 mr-5"href="#">View Site</a>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Close Day
                </button>
            </div>

            <div class="time p-1 ml-5">
                <span id='ct6'></span>
            </div>
            

            

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><a class="dropdown-item" href="register_form.php">Register Admin/login</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Management</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-columns"></i>
                                </div>
                                Accounts
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="financialYear.php">Finanacial Year</a>
                                    <a class="nav-link" href="#">Balance Sheet</a>
                                    <a class="nav-link" href="#">Voucher Report</a>
                                    <a class="nav-link" href="#">Profit/Loss</a>
                                    <a class="nav-link" href="#">Book Keeping</a>
                                    <a class="nav-link" href="#">Tax Management</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                Room Facilities
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link" href="#" > Facility List</a>
                                    <a class="nav-link" href="#" >Facility Details List</a>
                                    <a class="nav-link" href="#" >Room Size List</a>
 
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRoomR" aria-expanded="false" aria-controls="collapseRoomR">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                Room Reservation
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="collapseRoomR" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <a class="nav-link" href="#" >Booking List</a>
                                    <a class="nav-link" href="#" >Checked in/Out</a>
                                    <a class="nav-link" href="#" >Room Status</a>
 
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Adminstration</div>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-chart-area"></i>
                                </div>
                                Human Resource
                            </a>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-table"></i>
                                </div>
                                Duty Roster
                            </a>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-table"></i>
                                </div>
                                House Keeping
                            </a>

                            <div class="sb-sidenav-menu-heading">Website Content Management</div>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-chart-area"></i>
                                </div>
                                HomePage
                            </a>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-table"></i>
                                </div>
                                Gallery
                            </a>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-table"></i>
                                </div>
                                About us
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-table"></i>
                                </div>
                                Contact us
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['admin_name'] ?>
                    </div>
                </nav>
            </div>
