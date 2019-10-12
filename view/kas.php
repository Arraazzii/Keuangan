<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Japfa Foundation">
    <meta name="author" content="japfa">
    <link rel="shortcut icon" href="images/favicon_1.ico">
    <title>SIA - Japfa Foundation</title>
    <!-- Base Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Font Icons -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/ion/css/ionicons.min.css" rel="stylesheet" />
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- animate css -->
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Waves-effect -->
    <link href="css/waves-effect.css" rel="stylesheet">
    <!-- sweet alerts -->
    <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
    <!-- Custom Files -->
    <link href="css/helper.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/modernizr.min.js"></script>
</head>

<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <?php require_once("header/header.php"); ?>
        <!-- Top Bar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <main class="hidden-xl hidden-lg">
            <div class="content-page" style="min-height: 0px">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row" style="margin-top: -170px">
                            <!-- Page-Title -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=40f57ec532ab642c6c632ee8f9eb6112">Transaksi</a></li>
                                    <li class="active"><span>Dana Keluar</span></li>
                                </ol>
                            </div>
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel panel-border panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Laporan Arus Kas</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Tgl Awal" id="datepicker">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div><!-- input-group -->
                                                <br />
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Tgl Akhir" id="datepicker2">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div><!-- input-group -->
                                                <br />
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="button" value="Cari" class="btn btn-success">
                                                    &nbsp;
                                                    <style type="text/css">
                                                    .btn-default {
                                                        border-color: coral;
                                                        color: coral;
                                                    }
                                                    </style>
                                                    <input type="button" value="Cetak" class="btn btn-default">
                                                    &nbsp;
                                                    <input type="button" value="Batal" class="btn btn-default">
                                                </div><!-- input-group -->
                                                <br />
                                            </div>
                                        </div> <!-- panel-body -->
                                    </div> <!-- panel -->
                                </div>
                            </div> <!-- col -->
                            <div class="col-lg-12">
                                <div class="panel panel-border panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Statistik Arus Kas</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->
                    </div> <!-- container -->
                </div> <!-- content -->
                <?php require_once("header/footer.php"); ?>
            </div>
        </main>
        <main class="hidden-md hidden-sm hidden-xs">
            <div class="content-page" style="min-height: 0px">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Page-Title -->
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel panel-border panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Laporan Arus Kas</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Tgl Awal" id="datepicker">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div><!-- input-group -->
                                                <br />
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Tgl Akhir" id="datepicker2">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div><!-- input-group -->
                                                <br />
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="button" value="Cari" class="btn btn-success">
                                                    &nbsp;
                                                    <style type="text/css">
                                                    .btn-default {
                                                        border-color: coral;
                                                        color: coral;
                                                    }
                                                    </style>
                                                    <input type="button" value="Cetak" class="btn btn-default">
                                                    &nbsp;
                                                    <input type="button" value="Batal" class="btn btn-default">
                                                </div><!-- input-group -->
                                                <br />
                                            </div>
                                        </div> <!-- panel-body -->
                                    </div> <!-- panel -->
                                </div>
                            </div> <!-- col -->
                            <div class="col-lg-12">
                                <div class="panel panel-border panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Statistik Arus Kas</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->
                    </div> <!-- container -->
                </div> <!-- content -->
                <?php require_once("header/footer.php"); ?>
            </div>
        </main>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <script>
    var resizefunc = [];
    </script>
    <!-- jQuery  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="assets/chat/moment-2.2.1.js"></script>
    <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/jquery-detectmobile/detect.js"></script>
    <script src="assets/fastclick/fastclick.js"></script>
    <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/jquery-blockui/jquery.blockUI.js"></script>
    <!-- sweet alerts -->
    <script src="assets/sweet-alert/sweet-alert.min.js"></script>
    <script src="assets/sweet-alert/sweet-alert.init.js"></script>
    <!-- flot Chart -->
    <script src="assets/flot-chart/jquery.flot.js"></script>
    <script src="assets/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="assets/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/flot-chart/jquery.flot.selection.js"></script>
    <script src="assets/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/flot-chart/jquery.flot.crosshair.js"></script>
    <!-- Counter-up -->
    <script src="assets/counterup/waypoints.min.js" type="text/javascript"></script>
    <script src="assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <!-- CUSTOM JS -->
    <script src="js/jquery.app.js"></script>
    <script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/timepicker/bootstrap-datepicker.js"></script>
    <!-- Dashboard -->
    <script src="js/jquery.dashboard.js"></script>
    <!-- Chat -->
    <script src="js/jquery.chat.js"></script>
    <!-- Todo -->
    <script src="js/jquery.todo.js"></script>
    <script type="text/javascript">
    /* ==============================================
            Counter Up
            =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
    </script>
    <script>
    jQuery(document).ready(function() {

        // Time Picker
        jQuery('#timepicker').timepicker({ defaultTIme: false });
        jQuery('#timepicker2').timepicker({ showMeridian: false });
        jQuery('#timepicker3').timepicker({ minuteStep: 15 });

        // Date Picker
        jQuery('#datepicker').datepicker({
            showButtonPanel: true
        });
        jQuery('#datepicker2').datepicker({
            showButtonPanel: true
        });
    });
    </script>
</body>

</html>