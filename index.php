<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo.png">
        <link rel="icon" type="image/png" href="./assets/img/logo.png">
        <title>
            HOME
        </title>
        <!-- FONTS AND ICONS  -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- NUCLEO ICONS -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- FONT AWESOME ICONS -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- MATERIAL ICONS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS FILES -->
        <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <link href="./assets/css/suman.css" rel="stylesheet" />
    </head>

    <body class="g-sidenav-show  bg-gray-200">
        <aside  id="sidebar" class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start sidebargradientBG" id="sidenav-main">
            <div class="sidenav-header d-flex justify-content-between"> 
                <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0" href="">
                    <img src="./assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
                    <span class="ms-1 font-weight-bold text-white">DEMO SITE</span>
                </a>  

                <div id="sidebarCollapse" class="text-white text-center me-2 d-flex align-items-center justify-content-center pointer-cursor">
                      <span class="material-icons fs-2">menu </span>
                </div>       
            </div>
            <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">DASHBOARD</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">User Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="material-icons">format_indent_increase</span>
                            </div>
                            <span class="nav-link-text ms-1">Order tracking</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="material-icons">monetization_on</span>
                            </div>
                            <span class="nav-link-text ms-1">Payments</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <span class="material-icons">format_list_bulleted</span>
                            </div>
                            <span class="nav-link-text ms-1">Order list</span>
                        </a>
                    </li>                    
                </ul>
            </div>            
        </aside>
        <main class="main-content position-relative max-height-vh-100 h-100">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 shadow-none " id="navbarBlur" navbar-scroll="true" style="background-color: #fff;">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <h6 class="font-weight-bolder mb-0">Dashboard</h6>                        
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <form class="form-inline ml-auto ml15">
                            <div class="form-group has-white">
                                <input type="text" class="form-control topSbp" placeholder="Search">
                            </div>                
                        </form>
                    </div>
                    <ul class="navbar-nav  justify-content-end" style="margin-right: 30px">

                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a style="padding-right: .5rem !important;" href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer" style="font-size: 1.2rem;"></i>
                                <span class="badge rounded-pill badge-notification bg-danger" style="position: absolute;font-size: .6rem;margin-top: -0.1rem;margin-left: -0.5rem;padding: 0.2em 0.45em;">5</span>
                            </a>
                        </li>

                        <li class="nav-item d-flex align-items-center">
                            <div class="dropdown">
                                <a  class=" dropdown-toggle" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user me-sm-1"  style="font-size: 1.2rem;"></i>
                                </a>

                            </div>

                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-xl-12 col-sm-12 mb-4">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">                                  
                                    <figure class="highcharts-figure">
                                        <div id="containerBar"></div>
                                    </figure>                    
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 ">Website Views</h6>
                                <p class="text-sm ">Last Campaign Performance</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2  ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                    <figure class="highcharts-figure">
                                        <div id="containerLine"></div>
                                    </figure>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 "> Daily Sales </h6>
                                <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> updated 4 min ago </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mb-3">
                        <div class="card z-index-2 ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-chart3 shadow-dark border-radius-lg py-3 pe-1">
                                    <figure class="highcharts-figure">
                                        <div id="container"></div>
                                    </figure>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0">Website Views</h6>
                                <p class="text-sm ">Last Campaign Performance</p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm">just updated</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2 pb-0">
                                <div class="icon icon-lg icon-shape shadow-dark text-center border-radius-xl mt-n4 position-absolute" style="background-color: #59C7DF !important">
                                    <img src="assets/img/facebook-f-brands 1.png" class="img-fluid" style="height: 30px;margin-top: 18px;">
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Followers</p>
                                    <h4 class="mb-0">+240</h4>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="mb-0"><div class="text-success text-end" style="font-size: 14px;">
                                        <a href="#" style="text-decoration: none;color: #117E85"  data-bs-toggle="modal" data-bs-target="#followersList">More 
                                            <i class="material-icons opacity-10" style="color: #A6A1A1;vertical-align: middle;">keyboard_arrow_right</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2 pb-0">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                    <img src="assets/img/chart-bar-regular 1.png" class="img-fluid" style="height: 30px;margin-top: 18px;">
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Pending Order</p>
                                    <h4 class="mb-0">18</h4>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="mb-0"><div class="text-success text-end" style="font-size: 14px;">
                                        <a href="#" style="text-decoration: none;color: #117E85" data-bs-toggle="modal" data-bs-target="#followersList">More 
                                            <i class="material-icons opacity-10" style="color: #A6A1A1;vertical-align: middle;">keyboard_arrow_right</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2 pb-0">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <img src="assets/img/home.png" class="img-fluid" style="height: 30px;margin-top: 18px;">
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Todays reveniew</p>
                                    <h4 class="mb-0">3,50,550</h4>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="mb-0"><div class="text-success text-end" style="font-size: 14px;">
                                        <a href="#" style="text-decoration: none;color: #117E85" data-bs-toggle="modal" data-bs-target="#followersList">More 
                                            <i class="material-icons opacity-10" style="color: #A6A1A1;vertical-align: middle;">keyboard_arrow_right</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-header p-3 pt-2 pb-0">
                                <div class="icon icon-lg icon-shape  shadow-info text-center border-radius-xl mt-n4 position-absolute" style="background-color: #F09D35;">
                                    <img src="assets/img/list.png" class="img-fluid" style="height: 30px;margin-top: 18px;">
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Tota Order</p>
                                    <h4 class="mb-0">55</h4>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="mb-0"><div class="text-success text-end" style="font-size: 14px;">
                                        <a href="#" style="text-decoration: none;color: #117E85" data-bs-toggle="modal" data-bs-target="#followersList">More 
                                            <i class="material-icons opacity-10" style="color: #A6A1A1;vertical-align: middle;">keyboard_arrow_right</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4  mt-4">
                    <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-warning shadow-primary border-radius-lg" style="padding: 28px 28px 28px 60px !important">
                                    <h6 class="text-white text-capitalize" style="margin-bottom: 0px;font-size: 18px!important;font-weight: 300!important;">RECENT ACTIVITIES</h6>
                                    <div class="subtitle-1 font-weight-light" style="color: hsla(0,0%,100%,.8);font-weight: 300 !important;font-size: 13px !important;"> Emoployee ID wise Activity </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-dark text-xs font-weight-bolder">ID</th>
                                                <th class="text-dark text-xs font-weight-bolder">Name</th>
                                                <th class="text-dark text-xs font-weight-bolder">Sale posting</th>
                                                <th class="text-dark text-xs font-weight-bolder">Posting conversion</th>
                                                <th class="text-dark text-xs font-weight-bolder">Area</th>
                                                <th class="text-dark text-xs font-weight-bolder">Entry time</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                        <?php
                                        include "dbConn.php"; // Using database connection file here
                                        $sql = "select * from activity_logs";
                                        $records = mysqli_query($db, $sql ); // fetch data from database
                                        //var_dump($records);
                                        while($data = mysqli_fetch_array($records))
                                        {
                                        ?>
                                        <tr>
                                            
                                       
                                            <td>
                                                    <p class="text-xs text-secondary mb-0"><?php echo $data['user_id']; ?></p>                                                    
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0"><?php echo $data['name']; ?></p>                                                    
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0 text-center"><?php echo $data['sale_posting']; ?></p>                                                    
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0 text-center"><?php echo $data['posting_conversion']; ?></p>                                                    
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0"><?php echo $data['area']; ?></p>                                                    
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0"><?php echo $data['entry_time']; ?></p>                                                    
                                                </td>
                                            </tr>	
                                        <?php
                                        }
                                        ?>
                                         <tbody>
                                        </table>

                                        <?php mysqli_close($db); // Close connection ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">

                        <div class="card my-4 last-card-res">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <!--                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                                                    <h6 class="text-white text-capitalize ps-3">Achievements</h6>
                                                                </div>-->

                                <div class="nav-tabs-navigation  shadow-primary border-radius-lg" style="background-color: #4caf50 !important;border-color: #4caf50 !important;padding: 32px 20px !important;">
                                    <div class="nav-tabs-wrapper">                              
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-bottom: 0px !important;">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Achievements</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Requisition</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Application</button>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                   <!-- Tab panes -->
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade container show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <h3>Achievements </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                       <h3> Requisition </h3>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="tab-pane fade container" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                       <h3> Application </h3>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
        
        <!-- bottom mobile menu-->
        <div class="bottomContent">
            <div class="webIconPart">
                <div class="row" style="margin: 0;">
                    <div class="col-2p4">
                        <div class="webIconCont">
                            <a href="#" class="webIconLink">
                                <img class="img-fluid mx-auto d-block WiconSize" src="assets/img/home-solidXYZ.png" alt="home">
                                <div class="webIconName">
                                    Home
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-2p4">
                        <div class="webIconCont">
                            <a href="#" class="webIconLink">
                                <img class="img-fluid mx-auto d-block WiconSize" src="assets/img/ListOfVehicle.png" alt="List of vehicle">
                                <div class="webIconName">
                                    List of vehicle
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-2p4">
                        <div class="webIconCont">
                            <a href="#" class="webIconLink">
                                <img class="img-fluid mx-auto d-block WiconSize" src="assets/img/LiveTracking.png" alt="LIve tracking">
                                <div class="webIconName">
                                    LIve tracking
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-2p4">
                        <div class="webIconCont">
                            <a href="#" class="webIconLink">
                                <img class="img-fluid mx-auto d-block WiconSize" src="assets/img/Reports.png" alt="Reports">
                                <div class="webIconName">
                                    Reports
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-2p4">
                        <div class="webIconCont">
                            <a href="#" class="webIconLink">
                                <img class="img-fluid mx-auto d-block WiconSize" src="assets/img/Morexyz.png" alt="More">
                                <div class="webIconName">
                                    More
                                </div>
                            </a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom mobile menu end-->
        <!-- modal content -->

            <!-- Button trigger modal -->
               

                <!-- Modal -->
                <div class="modal fade" id="followersList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!-- Scrollable modal -->
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Details data list</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-dark text-xs font-weight-bolder">ID</th>
                                        <th class="text-dark text-xs font-weight-bolder">Full Name</th>
                                        <th class="text-dark text-xs font-weight-bolder">Likes</th>
                                        <th class="text-dark text-xs font-weight-bolder">Orders</th>
                                        <th class="text-dark text-xs font-weight-bolder">From</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">10102</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Abdul Malek</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">20</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">10</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Mohakhali</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                    <tr>
                                    
                                
                                    <td>
                                        <p class="text-xs text-secondary mb-0">10101</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Baker Uddin</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">20</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">10</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Rampura</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                    <tr>
                                    <td>
                                            <p class="text-xs text-secondary mb-0">10103</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Akash Srabon</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">5</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">3</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">DHOS, Mirpur</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                    <tr>
                                    <td>
                                            <p class="text-xs text-secondary mb-0">10104</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Nazim udding</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">2</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">5</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Pallabi</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                                                        <tr>
                                    
                                
                                    <td>
                                            <p class="text-xs text-secondary mb-0">10105</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Abrar Rahman</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">11</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">9</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Bonsree</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                                                        <tr>
                                    
                                
                                    <td>
                                            <p class="text-xs text-secondary mb-0">10106</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Rafiq Jilani</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">33</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">8</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Gulshan</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                                                        <tr>
                                    
                                
                                    <td>
                                            <p class="text-xs text-secondary mb-0">10107</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Noyon Tara</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">22</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">11</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Dhanmondi</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                                                        <tr>
                                    
                                
                                    <td>
                                            <p class="text-xs text-secondary mb-0">10108</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Jay Jay din</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">11</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0 text-center">15</p>                                                    
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">Rayer Bazar</p>                                                    
                                        </td>
                                        
                                    </tr>	
                                                                            </tbody><tbody>
                                </tbody>
                            </table>     
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
        <!-- modal content end -->
        <!-- CORE JS FILES -->
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="./assets/js/plugins/chartjs.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>

        <!-- charts js-->
        <script>

            $(document).ready(function () {
                var areaChart1 = 0;
                var areaChart2 = 0;
                var areaChart3 = 0;
                showGraph();
                showGraph2();
                showGraph3();
            });
            //chart 1 hight chart
            function showGraph()
            {
                {
                    $.post("data.php",
                    function (data)
                    {
                        console.log(data);
                        areaChart1 = data;
                                // high charts
                                Highcharts.chart('containerBar', {
                                chart: {
                                    backgroundColor: '#EC407A',
                                    type: 'column',
                                    height: 300
                                    
                                },
                                accessibility: {
                                    description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
                                },
                                title: {
                                    text: ''
                                },
                                subtitle: {
                                    text: ''
                                },
                                xAxis: {
                                    categories: [
                                        '0', 
                                    ],
                                    labels: {
                                        style: {
                                            color: '#fff',
                                        }
                                    },
                                    title: {
                                        style: {
                                            color: '#fff',
                                        }            
                                    }
                                },
                                yAxis: {
                                    labels: {
                                        style: {
                                            color: '#fff',
                                        }
                                    },
                                    title: {
                                        style: {
                                            color: '#fff',
                                        }            
                                    }
                                },
                                tooltip: {
                                    pointFormat: '{series.name} views <b>{point.y:,.0f}</b><br/>days in {point.x}'
                                },
                                plotOptions: {
                                    area: {
                                        pointStart: 0,
                                        marker: {
                                            enabled: false,
                                            symbol: 'circle',
                                            radius: 2,
                                            states: {
                                                hover: {
                                                    enabled: true
                                                }
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    name: 'Campaign',
                                    color:'#fff',
                                    data: areaChart1,
                                    type: 'column'
                                   
                                }]
                            }); 
                    });
                }
            }


            //chart 2 hight chart
            function showGraph2()
            {
                {
                    $.post("data2.php",
                    function (data)
                    {
                        console.log(data);
                        areaChart2 = data;
                                // high charts
                                Highcharts.chart('containerLine', {
                                chart: {
                                    backgroundColor: '#65ad5c', 
                                    color: '#fff',
                                    type: 'line',
                                    height: 300
                                },
                                accessibility: {
                                    description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
                                },
                                title: {
                                    text: ''
                                },
                                subtitle: {
                                    text: ''
                                },
                                xAxis: {
                                    categories: [
                                        '0', 
                                    ],
                                    labels: {
                                        style: {
                                            color: '#fff',
                                        }
                                    },
                                    title: {
                                        style: {
                                            color: '#fff',
                                        }            
                                    }
                                },
                                yAxis: {
                                    labels: {
                                        style: {
                                            color: '#fff',
                                        }
                                    },
                                    title: {
                                        style: {
                                            color: '#fff',
                                        }            
                                    }
                                },
                                tooltip: {
                                    pointFormat: '{series.name} sales <b>{point.y:,.0f}</b><br/>days in {point.x}'
                                },
                                plotOptions: {
                                    area: {
                                        pointStart: 0,
                                        marker: {
                                            enabled: false,
                                            symbol: 'circle',
                                            radius: 2,
                                            states: {
                                                hover: {
                                                    enabled: true
                                                }
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    name: '',
                                    color:'#fff',
                                    data: areaChart2,
                                    type: 'line'
                                   
                                }]
                            }); 
                    });
                }
            }
            //chart 3 hight chart
            function showGraph3()
            {
                {
                    $.post("data3.php",
                    function (data)
                    {
                        console.log(data);
                        areaChart3 = data;
                                // high charts
                                Highcharts.chart('container', {
                                chart: {
                                    backgroundColor: 'rgb(89, 197, 224)',
                                    fill: '#fff',
                                    type: 'area',
                                    height: 300
                                },
                                accessibility: {
                                    description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
                                },
                                title: {
                                    text: ''
                                },
                                xAxis: {
                                    categories: [
                                        '0',
                                        
                                    ],
                                    lineColor: '#000',
                                    labels: {
                                        style: {
                                            color: '#222',
                                        }
                                    },
                                    title: {
                                        style: {
                                            color: '#222',
                                        }            
                                    }
                                },
                                yAxis: {
                                    labels: {
                                        style: {
                                            color: '#222',
                                        }
                                    },
                                    title: {
                                        style: {
                                            color: '#222',
                                        }            
                                    }
                                },
                                subtitle: {
                                    text: ''
                                },
                                
                                tooltip: {
                                    pointFormat: '{series.name} views <b>{point.y:,.0f}</b><br/>days in {point.x}'
                                },
                                plotOptions: {
                                    area: {
                                        pointStart: 0,
                                        marker: {
                                            enabled: false,
                                            symbol: 'circle',
                                            radius: 2,
                                            states: {
                                                hover: {
                                                    enabled: true
                                                }
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    name: 'Campaign',
                                    color:'#b9e7f2',
                                    fill: '#fff',
                                    data: areaChart3,
                                    type: 'area'
                                   
                                }]
                            }); 
                    });
                }
            }
            </script>
        <!-- GITHUB BUTTONS -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
        <script src="./assets/js/suman.js"></script>
    </body>

</html>