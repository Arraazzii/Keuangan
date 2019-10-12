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
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=6a3b61f42cded56019b264080e226e40">Pengaturan</a></li>
                                    <li class="active"><span>Kode Rekening</span></li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Kode Rekening</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">kelompok *</label>
                                                    <div class="col-lg-4">
                                                        <select id="kelompok_koderekening" class="form-control">
                                                            <?php for ($i = 0; $i < count($list_kel); $i++) { ?>
                                                            <option value="<?php if (isset($list_kel[$i][1])) {

                                                            echo $list_kel[$i][1];

                                                        } ?>">
                                                                <?php if (isset($list_kel[$i][1])) {

                                                                echo $list_kel[$i][1]." - ".$list_kel[$i][2];

                                                            } ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">No Rekening *</label>
                                                    <div class="col-lg-4">
                                                        <input onkeypress="input_kode_rekening();" maxlength="17" type="text" class="form-control " id="koderekening" name="koderekening" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="ccomment" class="control-label col-lg-2">Uraian *</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control " id="uraian_koderekening" name="uraian_koderekening" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan
                                                        </button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- table edit -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <table id="datatable1" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <!-- <th>No.</th> -->
                                                                                    <th>Kelompok</th>
                                                                                    <th>No. Rek</th>
                                                                                    <th>Uraian</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbody">
                                                                                <?php for ($i = 0; $i < count($list); $i++) { ?>
                                                                                <tr class="tr" id="tr-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                    <!-- <td id="td-1-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>"

                                                                                class="td-<?php if (isset($list[$i][0])) {

                                                                                    echo $list[$i][0];

                                                                                } ?>">

                                                                                <?php if (isset($list[$i][0])) {

                                                                                    echo $list[$i][0];

                                                                                } ?>

                                                                            </td> -->
                                                                                    <td class="td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <textarea readonly id="td-2-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" class="txt-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][1])) {

                                                                                        echo $list[$i][1];

                                                                                    } ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <textarea readonly id="td-3-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" class="txt-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][2])) {

                                                                                        echo $list[$i][2];

                                                                                    } ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <textarea readonly id="td-4-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" class="txt-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][3])) {

                                                                                        echo $list[$i][3];

                                                                                    } ?></textarea>
                                                                                    </td>
                                                                                    <td class="actions text-center td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <a style="cursor:pointer"

                                                                                   id="edit-<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>"

                                                                                   onClick="edit('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>')"

                                                                                   class="on-default edit-row"><i

                                                                                            class="md md-edit"></i></a>
                                                                                        <a style="cursor:pointer" hidden=""

                                                                                   id="save-<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>" class="on-default remove-row"

                                                                                   onClick="save_edit('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>')"><i

                                                                                            class="md md-save"></i></a>
                                                                                        <a style="cursor:pointer" hidden=""

                                                                                   id="cancel-edit-<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>" class="on-default remove-row"

                                                                                   onClick="cancel_edit('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>')"><i class="md md-cancel"></i></a>
                                                                                        <a style="cursor:pointer"

                                                                                   onClick="hapus('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>');"

                                                                                   class="on-default remove-row"><i

                                                                                            class="md md-delete"></i></a>
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
                </div> <!-- content -->
                <?php require_once("header/footer.php"); ?>
            </div>
        </main>
        <main class="hidden-xl hidden-lg">
            <div class="content-page" style="min-height: 0px">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row" style="margin-top: -170px">
                            <!-- Page-Title -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=6a3b61f42cded56019b264080e226e40">Pengaturan</a></li>
                                    <li class="active"><span>Kode Rekening</span></li>
                                </ol>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Kode Rekening</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">kelompok *</label>
                                                    <div class="col-lg-4">
                                                        <select id="kelompok_koderekening" class="form-control">
                                                            <?php for ($i = 0; $i < count($list_kel); $i++) { ?>
                                                            <option value="<?php if (isset($list_kel[$i][1])) {

                                                            echo $list_kel[$i][1];

                                                        } ?>">
                                                                <?php if (isset($list_kel[$i][1])) {

                                                                echo $list_kel[$i][1]." - ".$list_kel[$i][2];

                                                            } ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">No Rekening *</label>
                                                    <div class="col-lg-4">
                                                        <input onkeypress="input_kode_rekening();" maxlength="17" type="text" class="form-control " id="koderekening" name="koderekening" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="ccomment" class="control-label col-lg-2">Uraian *</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control " id="uraian_koderekening" name="uraian_koderekening" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan
                                                        </button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal
                                                        </button>
                                                    </div>
                                                </div>
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
                                                                                    <!-- <th>No.</th> -->
                                                                                    <th>Kelompok</th>
                                                                                    <th>No. Rek</th>
                                                                                    <th>Uraian</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbody">
                                                                                <?php for ($i = 0; $i < count($list); $i++) { ?>
                                                                                <tr class="tr" id="tr-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                    <!-- <td id="td-1-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>"

                                                                                class="td-<?php if (isset($list[$i][0])) {

                                                                                    echo $list[$i][0];

                                                                                } ?>">

                                                                                <?php if (isset($list[$i][0])) {

                                                                                    echo $list[$i][0];

                                                                                } ?>

                                                                            </td> -->
                                                                                    <td class="td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <textarea readonly id="td-2-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" class="txt-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][1])) {

                                                                                        echo $list[$i][1];

                                                                                    } ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <textarea readonly id="td-3-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" class="txt-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][2])) {

                                                                                        echo $list[$i][2];

                                                                                    } ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <textarea readonly id="td-4-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" class="txt-<?php if (isset($list[$i][0])) {

                                                                                              echo $list[$i][0];

                                                                                          } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][3])) {

                                                                                        echo $list[$i][3];

                                                                                    } ?></textarea>
                                                                                    </td>
                                                                                    <td class="actions text-center td-<?php if (isset($list[$i][0])) {

                                                                                echo $list[$i][0];

                                                                            } ?>">
                                                                                        <a style="cursor:pointer"

                                                                                   id="edit-<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>"

                                                                                   onClick="edit('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>')"

                                                                                   class="on-default edit-row"><i

                                                                                            class="md md-edit"></i></a>
                                                                                        <a style="cursor:pointer" hidden=""

                                                                                   id="save-<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>" class="on-default remove-row"

                                                                                   onClick="save_edit('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>')"><i

                                                                                            class="md md-save"></i></a>
                                                                                        <a style="cursor:pointer" hidden=""

                                                                                   id="cancel-edit-<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>" class="on-default remove-row"

                                                                                   onClick="cancel_edit('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>')"><i class="md md-cancel"></i></a>
                                                                                        <a style="cursor:pointer"

                                                                                   onClick="hapus('<?php if (isset($list[$i][0])) {

                                                                                       echo $list[$i][0];

                                                                                   } ?>');"

                                                                                   class="on-default remove-row"><i

                                                                                            class="md md-delete"></i></a>
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
        $('#datatable1').dataTable();

    });
    </script>
    <script>
    function hapus(baris) {

        $.ajax({

            type: "POST",

            url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=koderekening",

            data: 'aksi=hapus' + '&id_koderekening=' + baris,

            success: function(msg) {

                alert(msg);

                $("#tr-" + baris).remove();

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

        var id_pegawai = $('#td-1-' + baris).val();

        var kelompok_koderekening = $('#td-2-' + baris).val();

        var koderekening = $('#td-3-' + baris).val();

        var uraian_koderekening = $('#td-4-' + baris).val();



        //alert(id_pegawai+""+nama_departemen+""+alamat_pegawai+""+jeniskelamin_pegawai+""+tanggallahir_pegawai+""+nomor_pegawai+""+email_pegawai);



        $.ajax({

            type: "POST",

            url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=koderekening",

            data: 'aksi=ubah' + '&id_koderekening=' + baris + '&kelompok_koderekening=' + kelompok_koderekening + '&koderekening=' + koderekening + '&uraian_koderekening=' + uraian_koderekening,

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
    <script type="text/javascript">
    function tambah() {

        var kelompok_koderekening = $("#kelompok_koderekening").val();

        var koderekening = $('#koderekening').val();

        var uraian_koderekening = $('#uraian_koderekening').val();



        //alert(tanggallahir_pegawai);

        $.ajax({

            type: "POST",

            url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=koderekening",

            data: 'aksi=tambah&kelompok_koderekening=' + kelompok_koderekening + '&koderekening=' + koderekening + '&uraian_koderekening=' + uraian_koderekening,

            success: function(msg) {

                //alert(msg);

                $("#kelompok_koderekening option:eq(0)").attr('selected', true);

                $('#koderekening').val("");

                $('#uraian_koderekening').val("");



                if (msg !== "gagal" || msg !== "") {

                    alert("Berhasil Menambahkan Data");

                    $("#tbody").append('<tr class="tr" id="tr-' + msg + '"><td class="td-' + msg + '"><textarea readonly id="td-2-' + msg + '" class="txt-' + msg + '" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + kelompok_koderekening + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-3-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + koderekening + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-4-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + uraian_koderekening + '</textarea></td><td class="actions text-center td-' + msg + '"><a style="cursor:pointer" id="edit-' + msg + '" onClick="edit(\'' + msg + '\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-' + msg + '" class="on-default remove-row" onClick="save_edit(\'' + msg + '\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-' + msg + '" class="on-default remove-row" onClick="cancel_edit(\'' + msg + '\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\'' + msg + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');



                }

            }

        });

    }
    </script>
    <script>
    function input_kode_rekening() {

        $("#koderekening").keypress(function(evt) {

            if (evt.which == 8) {



            } else {

                var a = $('#koderekening').val();



                if (a.length == 3) {

                    var titik = $('#koderekening').val() + ".";

                    $('#koderekening').val(titik);

                }

                if (a.length == 7) {

                    var titik = $('#koderekening').val() + ".";

                    $('#koderekening').val(titik);

                }

                if (a.length == 11) {

                    var titik = $('#koderekening').val() + ".";

                    $('#koderekening').val(titik);

                }

                if (a.length == 14) {

                    var titik = $('#koderekening').val() + ".";

                    $('#koderekening').val(titik);

                }

            }

        });

    }
    </script>
</body>

</html>