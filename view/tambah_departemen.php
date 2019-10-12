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
    <style type="text/css">
        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
            background: #42b078;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            padding: 50px 20px;
        }

        .hovereffect img {
            display: block;
            position: relative;
            max-width: none;
            width: calc(100% + 20px);
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
            -webkit-transform: translate3d(-10px,0,0);
            transform: translate3d(-10px,0,0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .hovereffect:hover img {
            opacity: 0.4;
            filter: alpha(opacity=40);
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            overflow: hidden;
            padding: 0.5em 0;
            background-color: transparent;
        }

        .hovereffect h2:after {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            content: '';
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(-100%,0,0);
            transform: translate3d(-100%,0,0);
        }

        .hovereffect:hover h2:after {
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }

        .hovereffect a, .hovereffect p {
            color: #FFF;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
            -webkit-transform: translate3d(100%,0,0);
            transform: translate3d(100%,0,0);
        }

        .hovereffect:hover a, .hovereffect:hover p {
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }

    </style>





    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 30px;
            right: 100%;
            margin-top: -1px;
        }
    </style>




</head>



<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php require_once("header/header.php"); ?>




    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <br>
    <div class="content-page" style="min-height: 620px">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->

                <!-- Start Widget -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Tambah Data Departemen</h3></div>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2">Name Departemen *</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="cname" name="name" type="text" required="" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Penanggung Jawab *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="cemail" type="email" name="email" required="" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="ccomment" class="control-label col-lg-2">Keterangan *</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control " id="ccomment" name="comment" required aria-required="true"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success waves-effect waves-light" type="submit">Simpan</button>
                                                <button class="btn btn-default waves-effect" type="button">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->

                </div> <!-- End row -->

                <!-- list table-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">List Derpartemen</h3></div>
                            <div class="panel-body">



                                <!-- table edit -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">

                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <table id="datatable" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>Nomer</th>
                                                                <th>Nama Departemen</th>
                                                                <th>Penanggung Jawab</th>
                                                                <th>Keterangan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>


                                                            <tbody>
                                                            <tr>
                                                                <td>12/12/2014</td>
                                                                <td>9019019019011</td>
                                                                <td>Not Approved</td>
                                                                <td>Departemen A</td>
                                                                <td class="actions text-center">
                                                                    <a href="#" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                    <a href="#" class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12/12/2014</td>
                                                                <td>9019019019011</td>
                                                                <td>Not Approved</td>
                                                                <td>Departemen A</td>

                                                                <td class="actions text-center">
                                                                    <a href="#" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                    <a href="#" class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12/12/2014</td>
                                                                <td>9019019019011</td>
                                                                <td>Not Approved</td>
                                                                <td>Departemen B</td>

                                                                <td class="actions text-center">
                                                                    <a href="#" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                    <a href="#" class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12/12/2014</td>
                                                                <td>9019018019011</td>
                                                                <td>Not Approved</td>
                                                                <td>Departemen C</td>
                                                                <td class="actions text-center">
                                                                    <a href="#" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                    <a href="#" class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12/12/2014</td>
                                                                <td>9019019017011</td>
                                                                <td>Not Approved</td>
                                                                <td>Departemen D</td>
                                                                <td class="actions text-center">
                                                                    <a href="#" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                    <a href="#" class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                </td>
                                                            </tr>

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- End Row -->
                                <!-- akhir table -->



                                </form>
                            </div> <!-- .form -->
                        </div> <!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col -->

            </div> <!-- End row -->
            <!-- end list table-->






        </div> <!-- container -->

    </div> <!-- content -->

    <?php require_once("header/footer.php"); ?>
</div>

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

<!-- Dashboard -->
<script src="js/jquery.dashboard.js"></script>

<!-- Chat -->
<script src="js/jquery.chat.js"></script>

<!-- Todo -->
<script src="js/jquery.todo.js"></script>

<!--form validation-->
<script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>

<!--form validation init-->
<script src="assets/jquery.validate/form-validation-init.js"></script>

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
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>


</body>
</html>