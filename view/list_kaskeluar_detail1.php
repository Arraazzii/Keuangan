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

                <!-- tambah dana masuk -->
                <!-- Start Widget -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Input Data</h3></div>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm"  novalidate>

                                        <div class="form-group">
                                            <label for="cemail" class="control-label col-lg-3">
                                                <h2>DANA KELUAR</h2>
                                            </label>
                                        </div>

                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Nomor</label>
                                            <div class="col-lg-2">
                                                <input class="form-control " id="nomor_danamasuk" type="text" name="nomor_danamasuk" required="" aria-required="true" readonly>
                                            </div>

                                            <label for="cemail" class="control-label col-lg-2">Tanggal</label>

                                            <div class="col-lg-2">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="yyyy/mm/dd" id="datepicker3">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div><!-- input-group -->
                                            </div>

                                            <label for="cemail" class="control-label col-lg-2">Dibayar Kepada</label>
                                            <div class="col-lg-2">
                                               <!--  <select id="diterimadari_danamasuk" class="form-control">
                                                     <?php for($i = 0; $i < count($list_dept); $i++){ ?>
                                                        <option value="<?php if(isset($list_dept[$i][1])){ echo $list_dept[$i][1];}?>"><?php if(isset( $list_dept[$i][1])){ echo $list_dept[$i][1]; }?></option>
                                                    <?php } ?>
                                                </select> -->
                                                <input class="form-control " id="diterimadari_danamasuk" type="text" name="diterimadari_danamasuk" required="" aria-required="true">

                                            </div>

                                        </div>

                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Rekening</label>
                                            <div class="col-lg-4">
                                                <input  id="rekening_danamasuk" type="radio" name="rekening_danamasuk" required="" aria-required="true" value="Kas"> Kas

                                                <input  id="rekening_danamasuk" type="radio" name="rekening_danamasuk" required="" aria-required="true" value="Bank"> Bank
                                            </div>


                                           <!--  <label for="ccomment" class="control-label col-lg-2">Keterangan *</label>
                                            <div class="col-lg-4">
                                                <textarea style="resize: none" class="form-control " id="keterangan_danamasuk" name="keterangan_danamasuk" required aria-required="true"></textarea>
                                            </div> -->



                                        </div>

                                        <div class="form-group ">
                                           <!--  <label for="cemail" class="control-label col-lg-2">Rekening *</label>
                                            <div class="col-lg-4">
                                                <input  id="rekening_danamasuk" type="radio" name="rekening_danamasuk" required="" aria-required="true" value="Kas"> Kas

                                                <input  id="rekening_danamasuk" type="radio" name="rekening_danamasuk" required="" aria-required="true" value="Bank"> Bank
                                            </div> -->


                                            <label for="ccomment" class="control-label col-lg-2">Keperluan</label>
                                            <div class="col-lg-4">
                                                <textarea style="resize: none" class="form-control " id="keterangan_danamasuk" name="keterangan_danamasuk" required aria-required="true"></textarea>
                                            </div>



                                        </div>


                                        <div class="form-group ">


                                            <label for="cemail" class="control-label col-lg-2">Nama Bank</label>

                                            <div class="col-lg-4">
                                                <select id="namabank_danamasuk" class="form-control">
                                                    <option selected="true">-</option>
                                                    <option>BCA</option>
                                                    <option>MANDIRI</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Jumlah(Rp)</label>
                                            <div class="col-lg-4">
                                                <input class="form-control " id="jumlah_danamasuk" type="text" name="jumlah_danamasuk" required="" aria-required="true">
                                            </div>
                                        </div>



                                        <div class="form-group ">


                                            <label for="cemail" class="control-label col-lg-2">Cara Pembayaran</label>

                                            <div class="col-lg-4">
                                                <select id="carapembayaran_danamasuk" name="carapembayaran_danamasuk" class="form-control">
                                                     <option>-</option>
                                                    <option>Tunai</option>
                                                    <option>Transfer</option>
                                                    <option>Giro</option>
                                                    <option>Cek</option>
                                                </select>

                                            </div>

                                        </div>

                                         <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Nomor Cek/Giro </label>
                                            <div class="col-lg-4">
                                                <input class="form-control " id="nomorcekgiro_danamasuk" type="text" name="nomorcekgiro_danamasuk" required="" aria-required="true" disabled="disabled">
                                            </div>
                                        </div>

                                        <!--                                                 <div class="form-group ">-->
                                        <!--                                                    <label for="cemail" class="control-label col-lg-2">Tanggal Jatuh Tempo</label>-->
                                        <!--                                                   -->
                                        <!--                                                <div class="col-lg-2">-->
                                        <!--                                                   <div class="input-group">-->
                                        <!--                                                    <input type="text" class="form-control" placeholder="yyyy/mm/dd" id="datepicker2">-->
                                        <!--                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>-->
                                        <!--                                                    </div>-->
                                        <!--                                                </div>-->
                                        <!--                                                </div>-->



                                        <div class="form-group">
                                            <label for="cemail" class="control-label col-lg-2">
                                                <h2>Transaksi</h2>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="cemail" class="control-label col-lg-2">
                                                Kode Rekening
                                            </label>
                                            <div class="col-lg-4">
                                                <!-- <select id="koderekening_danamasuk" class="form-control" onchange="set_uraian();"> -->
                                                <select id="koderekening_danamasuk" class="form-control">
                                                    <option>-- Pilih --</option>
                                                    <?php for($i = 0; $i < count($list_korek); $i++){ ?>
                                                        <option value="<?php if(isset($list_korek[$i][2])){ echo $list_korek[$i][2];}?>"><?php if(isset($list_korek[$i][2])){ echo $list_korek[$i][2]."-".$list_korek[$i][3]; }?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>


                                        <!-- <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Uraian</label>
                                            <div class="col-lg-4">
                                                <select id="uraian_danamasuk" class="form-control" disabled>
                                                    <option>-- Pilih --</option>
                                                    <?php for($i = 0; $i < count($list_korek); $i++){ ?>
                                                        <option value="<?php if(isset($list_korek[$i][3])){echo $list_korek[$i][3];}?>"><?php if(isset($list_korek[$i][3])){echo $list_korek[$i][3];}?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Uraian</label>
                                            <div class="col-lg-4">
                                                <input class="form-control " id="uraian_danamasuk" type="text" name="uraian_danamasuk" required="" aria-required="true">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="cemail" class="control-label col-lg-2">
                                                Jenis Program
                                            </label>
                                            <div class="col-lg-4">
                                                <select  id="jenisprogram_danamasuk" class="form-control">
                                                    <option>-- Pilih --</option>
                                                    <?php for($i = 0; $i < count($list_jenpro); $i++){ ?>
                                                        <option value="<?php if(isset($list_jenpro[$i][2])){ echo $list_jenpro[$i][2];}?>"><?php if(isset( $list_jenpro[$i][2])){ echo $list_jenpro[$i][2]; }?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label for="cemail" class="control-label col-lg-2">
                                                Departemen
                                            </label>
                                            <div class="col-lg-4">
                                                <select id="departemen_danamasuk" class="form-control">
                                                    <option>-- Pilih --</option>
                                                    <?php for($i = 0; $i < count($list_dept); $i++){ ?>
                                                        <option value="<?php if(isset($list_dept[$i][1])){ echo $list_dept[$i][1];}?>"><?php if(isset( $list_dept[$i][1])){ echo $list_dept[$i][1]; }?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                        </div>






                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2">Jumlah (Rp)</label>
                                            <div class="col-lg-4">
                                                <input class="form-control " id="uang_danamasuk" type="text" name="uang_danamasuk" required="" aria-required="true">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Posisi</label>
                                            <div class="col-lg-2">

                                                <input type="radio" name="posisi" id="debet" value="Debet">
                                                <label for="radio1">
                                                    Debet
                                                </label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="posisi" id="kredit" value="Kredit">
                                                <label for="radio2">
                                                    Kredit
                                                </label>
                                            </div>
                                        </div>

                                </div>

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-success waves-effect waves-light" onClick="tambah_data_new();" type="button">Tambah Data</button>


                                <div class="panel-body">



                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table  class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>No. Rekening</th>
                                                    <th>Uraian</th>
                                                    <th>Debet</th>
                                                    <th>Kredit</th>
                                                    <th>Jenis Program</th>
                                                    <th>Depertemen</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>


                                                <tbody id="tbody" onDblClick="tambah_row();">

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-group ">
                                    <!-- <label for="cemail" class="control-label col-lg-2">Status *</label> -->
                                    <div class="col-lg-4">
                                        <input  id="status_danamasuk" type="hidden" name="status_danamasuk" required="" aria-required="true" value="Y"> 

                                        <input  id="status_danamasuk" type="hidden" name="status_danamasuk" required="" aria-required="true" value="T">
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
            <!-- end tambah dana masuk -->








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
<script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
<!--<script src="assets/timepicker/bootstrap-datepicker.js"></script>-->

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


<link rel="stylesheet" href="assets/jquery.ui.css">
<!-- <script src="js/jquery.js"></script>
 <script src="js/jquery-1.7.2.js"></script>-->
<script src="ui/jquery.ui.core.js"></script>
<script src="ui/jquery.ui.widget.js"></script>
<script src="ui/jquery.ui.datepicker.js"></script>

<!-- money masked -->
<script src="assets/jquery.maskMoney.min.js"></script>
<script src="assets/autoNumeric-2.0-BETA.js" type="text/javascript"></script>


<style>
    .datepicker{z-index:1151;}
</style>


<script>
    jQuery(document).ready(function() {

        $( "#datepicker3" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy/mm/dd'
        });
        $( "#datepicker2" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy/mm/dd'
        });
    });

</script>

<!-- masking money-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        $('#jumlah_danamasuk').maskMoney();
        $('#uang_danamasuk').maskMoney();
//        $('textarea[name=uang]').maskMoney();
    });
</script>


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

<script>
    jQuery(document).ready(function() {

        // Time Picker
        jQuery('#timepicker').timepicker({defaultTIme: false});
        jQuery('#timepicker2').timepicker({showMeridian: false});
        jQuery('#timepicker3').timepicker({minuteStep: 15});

        // Date Picker
        jQuery('#datepicker').datepicker({
            showButtonPanel: true,

        });
        $('#datepicker2').datepicker({dateFormat:'yy-mm-dd', showButtonPanel:true}).val();
        jQuery('#datepicker2').datepicker({
            showButtonPanel: true,
            dateFormat:'yy-mm-dd'
        });
        jQuery('#datepicker3').datepicker({
            showButtonPanel: true,
            dateFormat:'yy-mm-dd'
        });
    });

</script>

<script type="text/javascript">

      var jumlah_cek;

    $(document).ready(function() {
        $('#datatable').dataTable();

        jumlah_cek = 0;

    } );
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    } );
</script>


<script>
    function cari(){
        var cari = $("#cari").val();
        $.ajax({
            type:"POST",
            url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=1adb175b1879e5b15081a095e2860e1b",
            data:'aksi=cari&cari='+cari,
            success: function(msg){
                $('.tr').remove();
                $.each(JSON.parse(msg),function(idx,data){
                    $("#tbody").append('<tr class="tr" id="tr-'+data.nomor_departemen+'"><td id="td-1-'+data.nomor_departemen+'" class="td-'+data.nomor_departemen+'">'+data.nomor_departemen+'</td><td class="td-'+data.nomor_departemen+'"><textarea readonly id="td-2-'+data.nomor_departemen+'" class="txt-'+data.nomor_departemen+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+data.nama_departemen+'</textarea></td><td class="td-'+data.nomor_departemen+'"><textarea readonly id="td-3-'+data.nomor_departemen+'" class="txt-'+data.nomor_departemen+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+data.penanggungjawab_departemen+'</textarea></td><td class="td-'+data.nomor_departemen+'"><textarea readonly id="td-4-'+data.nomor_departemen+'" class="txt-'+data.nomor_departemen+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+data.keterangan_departemen+'</textarea></td><td class="actions text-center td-'+data.nomor_departemen+'"><a style="cursor:pointer" id="edit-'+data.nomor_departemen+'" onClick="edit(\''+data.nomor_departemen+'\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-'+data.nomor_departemen+'" class="on-default remove-row" onClick="save_edit(\''+data.nomor_departemen+'\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-'+data.nomor_departemen+'" class="on-default remove-row" onClick="cancel_edit(\''+data.nomor_departemen+'\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\''+data.nomor_departemen+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');
                });
            }
        });
    }
</script>

<script type="text/javascript">
    //id_danamasuk, nomor_danamasuk, tanggal_danamasuk, diterimadari_danamasuk, rekening_danamasuk, namabank_danamasuk, jumlah_danamasuk, carapembayaran_danamasuk, keterangan_danamasuk, status_danamasuk
    function tambah(){
        // if($('#namabank_danamasuk').val() === '-- Pilih --' || $('#carapembayaran_danamasuk').val() === '-- Pilih --'){
        if($('#carapembayaran_danamasuk').val() === '-'){
            alert('Cara pembayaran tidak boleh kosong!');
        }
        else{
            var nomor_danamasuk = $('#nomor_danamasuk').val();
            var tanggal_danamasuk = $('#datepicker3').val();
            var diterimadari_danamasuk = $('#diterimadari_danamasuk').val();
            var rekening_danamasuk = $('#rekening_danamasuk').val();
            var namabank_danamasuk = $('#namabank_danamasuk').val();
//            var jumlah_danamasuk = $('#jumlah_danamasuk').val();
            var jumlah_danamasuk = $('#jumlah_danamasuk').maskMoney('unmasked')[0];
            var carapembayaran_danamasuk = $('#carapembayaran_danamasuk').val();
            var nomorcekgiro_danamasuk = $('#nomorcekgiro_danamasuk').val();
            var keterangan_danamasuk = $('#keterangan_danamasuk').val();
            var status_danamasuk = $('input[name=status_danamasuk]:checked').val();
            var tanggal_jatuh_tempo = $('#datepicker2').val();

            //if(+jumlah_cek != +jumlah_danamasuk){
                if(jumlah_cek != jumlah_danamasuk){
                alert("Mohon cek kembali jumlah detail transaksi!");
            }
            else{
            $.ajax({
                type:"POST",
                url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=1adb175b1879e5b15081a095e2860e1b",
                data:'aksi=tambah'+'&nomor_danamasuk='+nomor_danamasuk+'&tanggal_danamasuk='+tanggal_danamasuk+'&diterimadari_danamasuk='+diterimadari_danamasuk+'&rekening_danamasuk='+rekening_danamasuk+'&namabank_danamasuk='+namabank_danamasuk+'&jumlah_danamasuk='+jumlah_danamasuk+'&carapembayaran_danamasuk='+carapembayaran_danamasuk+'&nomorcekgiro_danamasuk='+nomorcekgiro_danamasuk+'&keterangan_danamasuk='+keterangan_danamasuk+'&status_danamasuk='+status_danamasuk+'&tanggaljatuhtempo_danamasuk='+tanggal_jatuh_tempo,
                success: function(msg){
                    if(msg !== "gagal" || msg !== ""){
                        tambah2(msg);
                        alert("Berhasil Menyimpan Data");
                        window.location.reload();
                        }
                    }
                });
            }
        }
    }

    //id_detail_dana_masuk, id_dana_masuk, no_rekening, uraian, nilai, departemen, program
    function tambah2(id_danamasuk){
        var batas = +$('#row_count').text();
        var index_count = $('#index_count').text();
        var index_array = index_count.split(',');
        for(i = 0; i < index_array.length; i++){
            try{
                var no_rekening = $('#td-1-'+index_array[i]).val();
                var uraian = $('#td-2-'+index_array[i]).val();
                var posisi1 = $('#td-3-'+index_array[i]).val();
                var posisi2 = $('#td-4-'+index_array[i]).val();
                var jenisprogram = $('#td-5-'+index_array[i]).val();
                var departemen = $('#td-6-'+index_array[i]).val();
                if(posisi1 !== '' && posisi2 === ''){
//                    var nilai = $('#td-3-'+index_array[i]).val();
                    var nilai = $('#td-3-'+index_array[i]).maskMoney('unmasked')[0];
                    var posisi = 'Debet';
                    $.ajax({
                        type:"POST",
                        url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=1adb175b1879e5b15081a095e2860e1b",
                        data:'aksi=tambah_detail'+'&id_dana_masuk='+id_danamasuk+'&no_rekening='+no_rekening+'&uraian='+uraian+'&nilai='+nilai+'&posisi='+posisi+'&jenisprogram='+jenisprogram+'&departemen='+departemen,
                        success: function(msg){

                        }
                    });
                }
                else if(posisi2 !== '' && posisi1 === ''){
//                    var nilai = $('#td-4-'+index_array[i]).val();
                    var nilai = $('#td-4-'+index_array[i]).maskMoney('unmasked')[0];
                    var posisi = 'Kredit';
                    $.ajax({
                        type:"POST",
                        url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=1adb175b1879e5b15081a095e2860e1b",
                        data:'aksi=tambah_detail'+'&id_dana_masuk='+id_danamasuk+'&no_rekening='+no_rekening+'&uraian='+uraian+'&nilai='+nilai+'&posisi='+posisi+'&jenisprogram='+jenisprogram+'&departemen='+departemen,
                        success: function(msg){

                        }
                    });
                }
            }catch(err){
                alert('Gagal');
            }
        }
    }
</script>


<!-- FUNGSI FUNGSI UNTUK EDIT -->
<!--<script>
    function edit(baris){
        var a = $(".td-"+baris).val();
        $(".txt-"+baris).attr("readonly",false);
        $("#save-"+baris).attr("hidden",false);
        $("#edit-"+baris).attr("hidden",true);
        $("#cancel-edit-"+baris).attr("hidden",false);
        $(".txt-"+baris).css("background-color","coral");
    }
</script>

<script>
    function save_edit(baris){
        var nama_departemen = $('#td-2-'+baris).val();
        var penanggung_jawab = $('#td-3-'+baris).val();
        var keterangan = $('#td-4-'+baris).val();

        $.ajax({
            type:"POST",
            url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=1adb175b1879e5b15081a095e2860e1b",
            data:'aksi=ubah&nomor_departemen='+baris+'&nama_departemen='+nama_departemen+'&penanggung_jawab='+penanggung_jawab+'&keterangan='+keterangan,
            success: function(msg){
                alert(msg);
                $(".txt-"+baris).attr("readonly",true);
                $("#save-"+baris).attr("hidden",true);
                $("#cancel-edit-"+baris).attr("hidden",true);
                $("#edit-"+baris).attr("hidden",false);
                $(".txt-"+baris).css("background-color","transparent");
            }
        });
    }
</script>

<script>
    function cancel_edit(baris){
        $('#td-1-'+baris).val($('#td-1-'+baris).text());
        $('#td-2-'+baris).val($('#td-2-'+baris).text());
        $('#td-3-'+baris).val($('#td-3-'+baris).text());
        $('#td-4-'+baris).val($('#td-4-'+baris).text());
        $(".txt-"+baris).attr("readonly",true);
        $("#save-"+baris).attr("hidden",true);
        $("#edit-"+baris).attr("hidden",false);
        $("#cancel-edit-"+baris).attr("hidden",true);
        $(".txt-"+baris).css("background-color","transparent");
    }
</script>-->


<script>
    function hapus(baris){
        $("#tr-"+baris).remove();
        var row_count = +$("#row_count").text() - 1;
        $("#row_count").text(row_count);
        index_count_remove(baris);
    }
</script>

<script>
    $(document).ready(function(e) {
        $.ajax({
            type:"POST",
            url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=1adb175b1879e5b15081a095e2860e1b",
            data:'aksi=id',
            success: function(msg){
                //alert(msg);
                $("#nomor_danamasuk").val(msg);
            }
        });
    });

</script>

<div hidden="" id="row_count">0</div>
<div hidden="" id="index_count"></div>
<div id="departement_list"></div>

<script>
    function index_count_remove(index){
        var index_count = $('#index_count').text();
        var index_array = index_count.split(',');
        $('#index_count').text('');
        if(index_array.length > 1){
            for(var i = 0; i < index_array.length; i++ ){
                if(index_array[i] != index){
                    if($('#index_count').text() === ''){
                        $('#index_count').append(index_array[i]);
                    }
                    else{
                        $('#index_count').append(',',index_array[i]);
                    }
                }
            }
        }
        else{
            $('#index_count').text('');
        }
    }
</script>

<script>
    function index_count_set(index){
        if($('#index_count').text() == ''){
            $('#index_count').append(index);
        }
        else{
            $('#index_count').append(','+ index);
        }
    }
</script>

<script>
    function tambah_data_new(){
        if($('#koderekening_danamasuk').val() === '-- Pilih --' || $('#jenisprogram_danamasuk').val() === '-- Pilih --'  || $('#departemen_danamasuk').val() === '-- Pilih --'){
            alert('Tambah data transaksi tidak valid!');
        }
        else{
            //var no_rek = $('#koderekening_danamasuk').val()+'.'+ $('#jenisprogram_danamasuk').val() +'.0'+ $('#departemen_danamasuk').val();
            var no_rek = $('#koderekening_danamasuk').val();
            var uraian = $('#uraian_danamasuk').val();
            var jumlahdana = $('#uang_danamasuk').val();
            var posisi = $('input[name=posisi]:checked').val();
            var id_detail_dana_masuk = +$("#row_count").text() + 1;
            var jenisprogram = $('#jenisprogram_danamasuk').val();
            var departemen = $('#departemen_danamasuk').val();

            var masked = $('#uang_danamasuk').maskMoney('unmasked')[0];
            var rider = $('#jumlah_danamasuk').maskMoney('unmasked')[0];

                
            if (masked != rider) {
                alert('Jumlah tidak valid!');
            }
            else{
                if(posisi === 'Debet'){
                var partawal = '<tr class="tr" id="tr-'+id_detail_dana_masuk+'">';
                var part1 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-1-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+no_rek+'</textarea></td>';
                var part2 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-2-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+uraian+'</textarea></td>';
                var part3 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-3-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+jumlahdana+'</textarea></td>';
                var part4 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-4-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"></textarea></td>';
                var partj = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-5-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+jenisprogram+'</textarea></td>';
                var partd = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-6-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+departemen+'</textarea></td>';
                var part5 = '<td class="actions text-center td-'+id_detail_dana_masuk+'"><a style="cursor:pointer" onClick="hapus(\''+id_detail_dana_masuk+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>';
                var partakhir = '</tr>';
                $("#tbody").append(partawal+part1+part2+part3+part4+partj+partd+part5+partakhir);
                }
                else if(posisi === 'Kredit'){
                var partawal = '<tr class="tr" id="tr-'+id_detail_dana_masuk+'">';
                var part1 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-1-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+no_rek+'</textarea></td>';
                var part2 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-2-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+uraian+'</textarea></td>';
                var part3 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-3-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"></textarea></td>';
                var part4 = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-4-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+jumlahdana+'</textarea></td>';
                var partj = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-5-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+jenisprogram+'</textarea></td>';
                var partd = '<td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-6-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+departemen+'</textarea></td>';
                var part5 = '<td class="actions text-center td-'+id_detail_dana_masuk+'"><a style="cursor:pointer" onClick="hapus(\''+id_detail_dana_masuk+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>';
                var partakhir = '</tr>';
                $("#tbody").append(partawal+part1+part2+part3+part4+partj+partd+part5+partakhir);
            }

        }

             var jumlah_unmask = $('#uang_danamasuk').maskMoney('unmasked')[0];

            // jumlah_cek = jumlah_cek + +jumlah_unmask;
            jumlah_cek = jumlah_unmask;

            index_count_set(id_detail_dana_masuk);
            $("#row_count").text( +$("#row_count").text()+ 1);
        }
    }
</script>
<script>
    function set_uraian(){
        var index = $('#koderekening_danamasuk').prop('selectedIndex');
//                $('#uraian_danamasuk option:eq('+index+')').attr('selected',true);
        $('select#uraian_danamasuk').prop('selectedIndex',index);
        // alert(index);
    }
</script>

<script>
   $('input:radio[name="rekening_danamasuk"]').change(function() {
    if ($(this).val()=='Kas') {
        $('#namabank_danamasuk').attr('disabled', true);
    } 
    else if ($(this).val()=='Bank') {
        $('#namabank_danamasuk').attr('disabled', false);
    }
});
</script>

<script>
    $('select[name="carapembayaran_danamasuk"]').change(function(){
        if ($(this).val()==='Cek') {
            $('#nomorcekgiro_danamasuk').attr('disabled', false);
        }
        else if ($(this).val()==='Tunai') {
            $('#nomorcekgiro_danamasuk').attr('disabled', true);
        }
        else if ($(this).val()==='Transfer') {
            $('#nomorcekgiro_danamasuk').attr('disabled', true);
        }
        else if ($(this).val()==='Giro') {
            $('#nomorcekgiro_danamasuk').attr('disabled', false);
        }
        else if ($(this).val()==='-') {
            $('#nomorcekgiro_danamasuk').attr('disabled', true);
        }
    });
</script>


</body>
</html>