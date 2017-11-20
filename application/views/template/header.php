<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>/assets/material/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url()?>/assets/material/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Data Balikan Apps Ver. 1.0</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>/assets/material/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url()?>/assets/material/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url()?>/assets/material/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <script src="<?php echo base_url()?>/assets/material/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/material/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/material/js/material.min.js" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="<?php echo base_url()?>/assets/material/js/chartist.min.js"></script>
    <!--  Dynamic Elements plugin -->
    <script src="<?php echo base_url()?>/assets/material/js/arrive.min.js"></script>
    <!--  PerfectScrollbar Library -->
    <script src=".<?php echo base_url()?>/assets/material/js/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()?>/assets/material/js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Material Dashboard javascript methods -->
    <script src="<?php echo base_url()?>/assets/material/js/material-dashboard.js?v=1.2.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url()?>/assets/material/js/demo.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="<?php echo base_url()?>/assets/material/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Data Balikan
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url('home');?>">
                            <i class="material-icons">dvr</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('upload');?>">
                            <i class="material-icons">attach_file</i>
                            
                            <p>Upload From Excel</p>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('upload_dmp');?>">
                            <i class="material-icons">cloud_upload</i>
                            <p>Upload From DMP</p>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('verifikasi');?>">
                            <i class="material-icons">verified_user</i>
                            <p>Verifikasi Dan Cleansing</p>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('detail');?>">
                            <i class="material-icons">assignment</i>
                            <p>Detail Penduduk</p>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="material-icons">power_settings_new</i>
                            <p>LOGOUT</p>
                        </a>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Data Balikan Apps Ver. 1.0 </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">power_settings_new</i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
            
            