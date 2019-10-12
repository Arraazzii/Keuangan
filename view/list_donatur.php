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
    <link rel="stylesheet" href="assets/jquery-datatables-editable/datatables.css" />
    <script src="js/modernizr.min.js"></script>
</head>

<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">
        <?php require_once("header/header.php"); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <main class="hidden-md hidden-sm hidden-xs">
            <div class="content-page" style="min-height: 0px">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <!-- Page-Title -->
                        <div class="row" style="margin-top:30px">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=9176f6233d9bf1733d94155843e330d8">Data</a></li>
                                    <li class="active"><span>Donatur</span></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Tambah Data Donatur</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" novalidate>
                                                <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Nama Investor *</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="nama_investor" name="nama_investor" type="text" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="ccomment" class="control-label col-lg-2">Alamat *</label>
                                                    <div class="col-lg-10">
                                                        <textarea class="form-control " id="alamat" name="alamat" required aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">No Telepon/HP*</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="no_telepon" type="text" name="no_telepon" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Email *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="email" type="email" name="email" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan</button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                        <!-- end tambah donatur -->
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">List Donatur</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <!-- table edit -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <!-- Form Cari-->
                                                        <div style="float:right;margin:20px 10px 20px 10px;">
                                                            <label for="cari">Cari</label>
                                                            <input name="cari" id="cari" type="text" onKeyUp="cari();">
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nama Investor</th>
                                                                                <th>Alamat</th>
                                                                                <th>Nomer Telepon/Hp</th>
                                                                                <th>Email</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody">
                                                                            <?php for($i = 0 ; $i < count($list); $i++){ ?>
                                                                            <tr class="tr" id="tr-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-2-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][1])){ echo $list[$i][1];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][2])){ echo $list[$i][2];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-4-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][3])){ echo $list[$i][3];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-5-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][4])){ echo $list[$i][4];} ?></textarea>
                                                                                </td>
                                                                                <td class="actions text-center td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <a style="cursor:pointer" id="edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" onClick="edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                                    <a style="cursor:pointer" hidden="" id="save-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="save_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-save"></i></a>
                                                                                    <a style="cursor:pointer" hidden="" id="cancel-edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="cancel_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-cancel"></i></a>
                                                                                    <a style="cursor:pointer" onClick="hapus('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>');"  class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php } ?>
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
                </div> <!-- container -->
                <?php require_once("header/footer.php"); ?>
            </div> <!-- content -->
        </main>
        <main class="hidden-xl hidden-lg">
            <div class="content-page" style="min-height: 0px">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- Start Widget -->
                        <div class="row" style="margin-top: -170px">
                            <!-- Page-Title -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=9176f6233d9bf1733d94155843e330d8">Data</a></li>
                                    <li class="active"><span>Donatur</span></li>
                                </ol>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Tambah Data Donatur</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" novalidate>
                                                <div class="form-group ">
                                                    <label for="cname" class="control-label col-lg-2">Nama Investor *</label>
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" id="nama_investor" name="nama_investor" type="text" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="ccomment" class="control-label col-lg-2">Alamat *</label>
                                                    <div class="col-lg-10">
                                                        <textarea class="form-control " id="alamat" name="alamat" required aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">No Telepon/HP*</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="no_telepon" type="text" name="no_telepon" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Email *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="email" type="email" name="email" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan</button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                        <!-- end tambah donatur -->
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">List Donatur</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <!-- table edit -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <!-- Form Cari-->
                                                        <div style="float:right;margin:20px 10px 20px 10px;">
                                                            <label for="cari">Cari</label>
                                                            <input name="cari" id="cari" type="text" onKeyUp="cari();">
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nama Investor</th>
                                                                                <th>Alamat</th>
                                                                                <th>Nomer Telepon/Hp</th>
                                                                                <th>Email</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody">
                                                                            <?php for($i = 0 ; $i < count($list); $i++){ ?>
                                                                            <tr class="tr" id="tr-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-2-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][1])){ echo $list[$i][1];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][2])){ echo $list[$i][2];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-4-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][3])){ echo $list[$i][3];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-5-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][4])){ echo $list[$i][4];} ?></textarea>
                                                                                </td>
                                                                                <td class="actions text-center td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <a style="cursor:pointer" id="edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" onClick="edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                                    <a style="cursor:pointer" hidden="" id="save-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="save_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-save"></i></a>
                                                                                    <a style="cursor:pointer" hidden="" id="cancel-edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="cancel_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-cancel"></i></a>
                                                                                    <a style="cursor:pointer" onClick="hapus('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>');"  class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php } ?>
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
                </div> <!-- container -->
                <?php require_once("header/footer.php"); ?>
            </div> <!-- content -->
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
    <!--form validation-->
    <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>
    <!--form validation init-->
    <script src="assets/jquery.validate/form-validation-init.js"></script>
    <script src="assets/magnific-popup/magnific-popup.js"></script>
    <script src="assets/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="assets/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/jquery-datatables-editable/datatables.editable.init.js"></script>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    });
    </script>
    <script>
    function cari() {
        var cari = $("#cari").val();
        $.ajax({
            type: "POST",
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=bcad65f0322e1c55d2e29dfeef78efe4",
            data: 'aksi=cari&cari=' + cari,
            success: function(msg) {
                //alert(msg);
                $('.tr').remove();
                $.each(JSON.parse(msg), function(idx, data) {
                    $("#tbody").append('<tr class="tr" id="tr-' + data.id_investor + '"><td id="td-1-' + data.id_investor + '" class="td-' + data.id_investor + '">' + data.id_investor + '</td><td class="td-' + data.id_investor + '"><textarea readonly id="td-2-' + data.id_investor + '" class="txt-' + data.id_investor + '" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.nama_investor + '</textarea></td><td class="td-' + data.id_investor + '"><textarea readonly id="td-3-' + data.id_investor + '" class="txt-' + data.id_investor + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.alamat_investor + '</textarea></td><td class="td-' + data.id_investor + '"><textarea readonly id="td-4-' + data.id_investor + '" class="txt-' + data.id_investor + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.notelepon_investor + '</textarea></td><td class="td-' + data.id_investor + '"><textarea readonly id="td-5-' + data.id_investor + '" class="txt-' + data.id_investor + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.email_investor + '</textarea></td><td class="actions text-center td-' + data.id_investor + '"><a style="cursor:pointer" id="edit-' + data.id_investor + '" onClick="edit(\'' + data.id_investor + '\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-' + data.id_investor + '" class="on-default remove-row" onClick="save_edit(\'' + data.id_investor + '\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-' + data.id_investor + '" class="on-default remove-row" onClick="cancel_edit(\'' + data.id_investor + '\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\'' + data.id_investor + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');
                });
            }
        });
    }
    </script>
    <script type="text/javascript">
    function tambah() {
        var nama_investor = $('#nama_investor').val();
        var alamat_investor = $('#alamat').val();
        var nomor_investor = $('#no_telepon').val();
        var email_investor = $('#email').val();
        //alert(tanggallahir_investor);
        $.ajax({
            type: "POST",
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=bcad65f0322e1c55d2e29dfeef78efe4",
            data: 'aksi=tambah&nama_investor=' + nama_investor + '&alamat_investor=' + alamat_investor + '&nomortelepon_investor=' + nomor_investor + '&email_investor=' + email_investor,
            success: function(msg) {
                //alert(msg);
                $('#nama_investor').val("");
                $('#alamat').val("");
                $('#no_telepon').val("");
                $('#email').val("");

                if (msg !== "gagal" || msg !== "") {
                    alert("Berhasil Menambahkan Data");
                    var awal = '<tr class="tr" id="tr-' + msg + '">';
                    var part1 = '<td id="td-1-' + msg + '" class="td-' + msg + '">' + msg + '</td>';
                    var part2 = '<td class="td-' + msg + '"><textarea readonly id="td-2-' + msg + '" class="txt-' + msg + '" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + nama_investor + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-3-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + alamat_investor + '</textarea></td>';
                    var part3 = '<td class="td-' + msg + '"><textarea readonly id="td-4-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + nomor_investor + '</textarea></td>';
                    var part4 = '<td class="td-' + msg + '"><textarea readonly id="td-5-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + email_investor + '</textarea></td>';
                    var part5 = '<td class="actions text-center td-' + msg + '"><a style="cursor:pointer" id="edit-' + msg + '" onClick="edit(\'' + msg + '\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-' + msg + '" class="on-default remove-row" onClick="save_edit(\'' + msg + '\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-' + msg + '" class="on-default remove-row" onClick="cancel_edit(\'' + msg + '\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\'' + msg + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td>';
                    var akhir = '</tr>';
                    $("#tbody").append(awal + part2 + part3 + part4 + part5 + akhir);

                }
            }
        });
    }
    </script>
    <script>
    function edit(baris) {
        var a = $(".td-" + baris).val();
        $(".txt-" + baris).attr("readonly", false);
        $("#save-" + baris).attr("hidden", false);
        $("#edit-" + baris).attr("hidden", true);
        $("#cancel-edit-" + baris).attr("hidden", false);
        $(".txt-" + baris).css("background-color", "coral");
    }
    </script>
    <script>
    function save_edit(baris) {
        var id_investor = $('#td-1-' + baris).val();
        var nama_investor = $('#td-2-' + baris).val();
        var alamat_investor = $('#td-3-' + baris).val();
        var nomor_investor = $('#td-4-' + baris).val();
        var email_investor = $('#td-5-' + baris).val();

        //alert(id_investor+""+nama_departemen+""+alamat_investor+""+jeniskelamin_investor+""+tanggallahir_investor+""+nomor_investor+""+email_investor);

        $.ajax({
            type: "POST",
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=bcad65f0322e1c55d2e29dfeef78efe4",
            data: 'aksi=ubah' + '&id_investor=' + baris + '&nama_investor=' + nama_investor + '&alamat_investor=' + alamat_investor + '&nomortelepon_investor=' + nomor_investor + '&email_investor=' + email_investor,
            success: function(msg) {
                alert(msg);
                $(".txt-" + baris).attr("readonly", true);
                $("#save-" + baris).attr("hidden", true);
                $("#cancel-edit-" + baris).attr("hidden", true);
                $("#edit-" + baris).attr("hidden", false);
                $(".txt-" + baris).css("background-color", "transparent");
            }
        });
    }
    </script>
    <script>
    function cancel_edit(baris) {
        $('#td-2-' + baris).val($('#td-2-' + baris).text());
        $('#td-3-' + baris).val($('#td-3-' + baris).text());
        $('#td-4-' + baris).val($('#td-4-' + baris).text());
        $(".txt-" + baris).attr("readonly", true);
        $("#save-" + baris).attr("hidden", true);
        $("#edit-" + baris).attr("hidden", false);
        $("#cancel-edit-" + baris).attr("hidden", true);
        $(".txt-" + baris).css("background-color", "transparent");
    }
    </script>
    <script>
    function hapus(baris) {
        $.ajax({
            type: "POST",
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=bcad65f0322e1c55d2e29dfeef78efe4",
            data: 'aksi=hapus' + '&id_investor=' + baris,
            success: function(msg) {
                alert(msg);
                $("#tr-" + baris).remove();
            }
        });
    }
    </script>
</body>

</html>