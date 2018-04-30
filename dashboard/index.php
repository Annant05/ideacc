<?php
	require '../conf/connectdb.php';
	session_start();
	$name = $_SESSION['name'];
	$username = $_SESSION['username'];
?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accelerator - Dashboard</title>
    <meta name="description" content="Accelerator Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="https://static.filestackapi.com/v3/filestack.js"></script>
    <script type="text/javascript">
        var fsClient = filestack.init('AaQGrOEnUR1F2ai27mE6Pz');

        function openPicker() {
            fsClient.pick({
                fromSources: ["local_file_system", "imagesearch", "facebook", "instagram", "dropbox"]
            }).then(function (response) {
                // declare this function to handle response
                handleFilestack(response);
            });
        }
    </script>

</head>
<body>



<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>


                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>


            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><?php echo "Welcome! " . $_SESSION['name'] ;?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                </span> Welcome to the Accelerator Dashboard!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>


        <!---<input type="file" id="upload" name="upload" style="visibility: hidden; width: 1px; height: 1px" multiple />
<a href="" onclick="document.getElementById('upload').click(); return false">
   -->
        <a onClick="openPicker();" return false;>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">

                        <h4 class="mb-0">
                            <span class="count">0</span>
                        </h4>
                        <p class="text-light">Active Courses</p>

                        <h4>Upload Courses</h4>
                        <!--<input type="file" name="fileToUpload" id="fileToUpload">
                        
-->                     <br><br>

                    </div>

                </div>
            </div>
        </a>


        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">

                    <h4 class="mb-0">
                        <span class="count">0</span>
                    </h4>
                    <p class="text-light">Active Courses</p>
                    <h4>View Courses</h4>
                    <br><br>
                </div>
            </div>
        </div>

        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body pb-0">

                    <h4 class="mb-0">
                        <span class="count">5</span>
                    </h4>
                    <p class="text-light">Active Assignments</p>
                    <h4>View Assignments</h4>
                    <br><br>

                </div>


            </div>
        </div>
        <!--/.col-->
        <a onClick="openPicker();" return false;>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">

                        <h4 class="mb-0">
                            <span class="count">5</span>
                        </h4>
                        <p class="text-light">Active Assignments</p>
                        <h4>Upload Assignments</h4>
                        <br><br>


                    </div>
                </div>
            </div>
            <a onClick="openPicker();" return false;>

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-4">
                        <div class="card-body pb-0">

                            <h4 class="mb-0">
                                <span class="count">0</span>
                            </h4>
                            <p class="text-light">Active Quizzes</p>
                            <h4>View Quizzes</h4>
                            <br><br>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3" >
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body pb-0">

                            <h4 class="mb-0">
                                <span class="count">0</span>
                            </h4>
                            <p class="text-light">Active Quizzes</p>
                            <h4>Upload Quizzes</h4>
                            <br><br>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Revenue</div>
                                    <div class="stat-digit">55</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Enrollments</div>
                                    <div class="stat-digit">121</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Submitted</div>
                                    <div class="stat-digit">270</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Pending</div>
                                    <div class="stat-digit">112</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<script>$("#btnfile").click(function () {
        $("#uploadfile").click();
    });</script>
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>
</html>
