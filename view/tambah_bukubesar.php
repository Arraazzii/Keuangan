<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Japfa Foundation">
    <meta name="author" content="japfa">
    <link rel="shortcut icon" href="images/favicon_1.ico">
    <title>SIA - Japfa</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs/jq-2.2.4/dt-1.10.15/r-2.1.1/datatables.min.css" />
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
                                    <li class="actiove"><span>Buku Besar</span></li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Buku Besar</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                                <div class="form-group pull-right">
                                                    <div class="col-lg-12" style="margin-right: 15px;">
                                              <!-- <div class="dropdown">
                                                  <button class="btn btn-success waves-effect waves-light dropdown-toggle" type="button" data-toggle="dropdown">Print
                                                      <span class="caret"></span></button>
                                                      <ul class="dropdown-menu">
                                                        <li class="dropdown-header">Print Table</li>
                                                        <li> <a href="#!" class="btn-copy">Copy</a></li>
                                                        <li><a href="#!" class="btn-csv">CSV</a></li>
                                                        <li><a href="#!" class="btn-excel">Excel</a></li>
                                                        <li><a href="#!" class="btn-pdf">PDF</a></li>
                                                        <li><a href="#!" class="btn-print">Print</a></li>
                                                    </ul>
                                                </div> -->
                                                <!-- <button class="btn btn-success waves-effect waves-light" id="btnbsr" type="button">Simpan</button> -->
                                                <!-- <button class="btn btn-default waves-effect" type="button">Batal</button> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cemail" class="control-label col-lg-2">Kelompok Rekening *</label>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <select id="nomor_rekening" onChange="cari_rekening();" class="form-control">
                                                        <option>No. Rekening</option>
                                                        <?php for($i = 0; $i < count($list_rek); $i++){ ?>
                                                        <option value="<?php if(isset($list_rek[$i][1])){
                                                            echo $list_rek[$i][1];
                                                        }?>">
                                                        <?php if(isset($list_rek[$i][1])){
                                                            echo $list_rek[$i][1]." - ".$list_rek[$i][2];
                                                        }?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn waves-effect waves-light btn-success">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Status Rekening *</label>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <input id="stts_rekening" class="form-control">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Tanggal Mulai *</label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                    <label for="cemail" class="control-label col-lg-2">Tanggal Akhir *</label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker2" onChange="cari_rekening_tanggal()">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                </div>
                                <!-- table edit -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <table class="table table-striped table-bordered" id="example">
                                                        <thead>
                                                            <tr>
                                                                <th width="120">Tanggal</th>
                                                                <th width="150">No. Transaksi</th>
                                                                <th width="225">Dibayar/Diterima</th>
                                                                <th width="650">Uraian</th>
                                                                <th width="150">Debit</th>
                                                                <th width="150">Kredit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody">

                                                        </tbody>
                                                    </table>
                                                        <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: white;border:none;">Saldo Awal</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="saldo_awal" class="form-control" type="text" name="email" required="" aria-required="true" value="" colspan="2">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="3"></td>
                                                                <td style="background-color: white;border:none;">Debit</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="total_debit" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;">Kredit</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="total_kredit" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="1"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: white;border:none;">Saldo Akhir</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="saldo_akhir" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="6"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: white;border:none;">Mutasi</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="mutasi" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="6"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Row -->
                                <!-- akhir table -->
                                <button class="btn btn-success waves-effect waves-light pull-right" id="btnbsr" type="button">Print</button>
                                
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
                        <ol class="breadcrumb breadcrumb-arrow">
                            <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                            <li class="actiove"><span>Buku Besar</span></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Buku Besar</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                        <div class="form-group">
                                            <label for="cemail" class="control-label col-lg-2">Kelompok Rekening *</label>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <select id="nomor_rekening" onChange="cari_rekening();" class="form-control">
                                                        <option>No. Rekening</option>
                                                        <?php for($i = 0; $i < count($list_rek); $i++){ ?>
                                                        <option value="<?php if(isset($list_rek[$i][1])){
                                                            echo $list_rek[$i][1];
                                                        }?>">
                                                        <?php if(isset($list_rek[$i][1])){
                                                            echo $list_rek[$i][1]." - ".$list_rek[$i][2];
                                                        }?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn waves-effect waves-light btn-success">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Status Rekening *</label>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <input id="stts_rekening" class="form-control">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Tanggal Mulai *</label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                    <label for="cemail" class="control-label col-lg-2">Tanggal Akhir *</label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker2" onChange="cari_rekening_tanggal()">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                </div>
                                <!-- table edit -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <table class="table table-striped table-bordered" id="examplemid">
                                                        <thead>
                                                            <tr>
                                                                <th width="120">Tanggal</th>
                                                                <th width="150">No. Transaksi</th>
                                                                <th width="225">Dibayar Kepada</th>
                                                                <th width="650">Uraian</th>
                                                                <th width="150">Debit</th>
                                                                <th width="150">Kredit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody">

                                                        </tbody>
                                                    </table>
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-color: white;border:none;">Saldo Awal</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="saldo_awal" class="form-control" type="text" name="email" required="" aria-required="true" value="">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="3"></td>
                                                                <td style="background-color: white;border:none;">Debit</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="total_debit" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;">Kredit</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="total_kredit" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="0"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: white;border:none;">Saldo Akhir</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="saldo_akhir" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="6"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="background-color: white;border:none;">Mutasi</td>
                                                                <td style="background-color: white;border:none;"><input readonly id="mutasi" class="form-control" type="text" name="email" required="" aria-required="true">
                                                                </td>
                                                                <td style="background-color: white;border:none;" colspan="6"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Row -->
                                <!-- akhir table -->
                                <div class="form-group pull-right">
                                    <div class="col-lg-12" style="margin-right: 15px;">
                                        <button class="btn btn-success waves-effect waves-light" type="button" id="btnkcl">Cetak</button>
                                        <!--<button class="btn btn-success waves-effect waves-light" type="button">Simpan</button>-->
                                        <!-- <button class="btn btn-default waves-effect" type="button">Batal</button> -->
                                    </div>
                                </div>
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
<!-- money masked -->
<script src="assets/jquery.maskMoney.min.js"></script>
<script src="assets/autoNumeric-2.0-BETA.js" type="text/javascript"></script>
<!-- Date picker-->
<link rel="stylesheet" href="assets/jquery.ui.css">
<script src="ui/jquery.ui.core.js"></script>
<script src="ui/jquery.ui.widget.js"></script>
<script src="ui/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.12.13/xlsx.full.min.js" type="text/javascript"></script>
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


    });
</script>
<script>
    jQuery(document).ready(function() {

        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });
        $("#datepicker2").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#btnbsr").click(function(){
            var workbook = XLSX.utils.book_new();
            
        //var worksheet_data  =  [['hello','world']];
        //var worksheet = XLSX.utils.aoa_to_sheet(worksheet_data);
        
        var worksheet_data  = document.getElementById("example");
        var worksheet = XLSX.utils.table_to_sheet(worksheet_data);
        
        workbook.SheetNames.push("Test");
        workbook.Sheets["Test"] = worksheet;
        
        exportExcelFile(workbook);
        
        
    });

        $("#btnkcl").click(function(){
            var workbooks = XLSX.utils.book_new();
            
        //var worksheet_data  =  [['hello','world']];
        //var worksheet = XLSX.utils.aoa_to_sheet(worksheet_data);
        
        var worksheet_datas  = document.getElementById("examplemid");
        var worksheets = XLSX.utils.table_to_sheet(worksheet_datas);
        
        workbooks.SheetNames.push("Test");
        workbooks.Sheets["Test"] = worksheets;
        
        exportExcelFile(workbooks);
        
        
    });
    })

    function exportExcelFile(workbook) {
        return XLSX.writeFile(workbook, "Buku Besar.xlsx");
    }
    function exportExcelFiles(workbooks) {
        return XLSX.writeFile(workbooks, "Buku Besar.xlsx");
    }

</script>

<div hidden="" id="status_rekening"></div>
<script>
    $(document).on("click", ".detail-dana",function (params) {
      // console.log($(this).parents('.form-dana'));
      $(this).siblings('button').click();
    });

    function cari_rekening() {
        //        alert($('#saldo_awal').val());
        cari_saldoawal();
        var nomor_rekening = $('#nomor_rekening').val();
        $('#total_debit').val('');
        $('#total_kredit').val('');
        $('#saldo_akhir').val('');
        $('#mutasi').val('');
        $('#stts_rekening').val('');
        $('#datepicker').val('');
        $('#datepicker2').val('');

        $.ajax({
            type: "POST",
            url: "index.php?page=e9fdc907eeadedf3373094ca4bdfb5a1&kode=93c76b0ec853d19db79f463efca8f48b",
            data: 'aksi=cari_rekening&nomor_rekening=' + nomor_rekening,

            success: function(msg) {
                $('.tr').remove();
                $('#status_rekening').text('');
                console.log(JSON.parse(msg));
                // alert(msg);
                var sa = '';
                var dbt = '0';
                var krd = '0';
                var index = 1;
                var a = 0;
                $.each(JSON.parse(msg), function(idx, data) {
                    var buttonList = "";
                    if (data.jenis == "danamasuk") {                          
                      buttonList += '<form class="form-dana" action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=98affdbdb60cf00c98a3f70b218668e7" method="POST">';
                      buttonList += '<input type="hidden" name="iddanamasuk" id="iddanamasuk" value="'+data.nomor_jurnal+'">';
                      buttonList += '<button title="View" type="submit" class="btn btn-primary btn-xs" style="display:none;"><i class="md md-visibility"></i></button>';
                      buttonList += '<span class="detail-dana">' + data.ref + '</span>';
                      buttonList += '</form>';
                    }

                    if (data.jenis == "danakeluar") {
                      buttonList += '<form class="form-dana" action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=210672dd918ab2ee98b69742ecae13b5" method="POST">';
                      buttonList += '<input type="hidden" name="iddanamasuk" id="iddanamasuk" value="'+data.nomor_jurnal+'">';
                      buttonList += '<button title="View" type="submit" class="btn btn-primary btn-xs" style="display:none;"><i class="md md-visibility"></i></button>';
                      buttonList += '<span class="detail-dana">' + data.ref + '</span>';
                      buttonList += '</form>';
                    }
                    
                    if (data.jenis == "jurnal") {                      
                      buttonList += '<form class="form-dana" action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=editmemorial" method="POST">';
                      buttonList += '<input type="hidden" name="iddanamasuk" id="iddanamasuk" value="'+row.nomor_jurnal+'">';
                      buttonList += '<button title="View" type="submit" class="btn btn-primary btn-xs" style="display:none;"><i class="md md-visibility"></i></button>';
                      buttonList += '<span class="detail-dana">' + data.ref + '</span>';
                      buttonList += '</form>';
                    }

                    if (data.posisi == 'Debet') {
                        var partawal = '<tr class="tr" id="tr-' + index + '">';
                        var part1 = '<td class="td-' + index + '"><textarea readonly id="td-1-' + index + '" class="txt-' + index + '" name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.tanggal_jurnal + '</textarea></td>';
                        var part2 = '<td id="td-2-' + index + '" class="td-' + index + '">' + buttonList + '</td>';

                        var part7 = '<td class="td-' + index + '"><textarea readonly id="td-7-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.status + '</textarea></td>';

                        var part3 = '<td class="td-' + index + '"><textarea readonly id="td-3-' + index + '" class="txt-' + index + '" name="" cols="7" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.uraian + '</textarea></td>';

                        var part5 = '<td class="td-' + index + '"><textarea readonly id="td-5-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.nilai + '</textarea></td>';

                        var part6 = '<td class="td-' + index + '" colspan="2"><textarea readonly id="td-6-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + '0' + '</textarea></td>';
                        var partakhir = '</tr>';

                        $("#tbody").append(partawal + part1 + part2 + part7 + part3 + part5 + part6 + partakhir);
                        $('#status_rekening').text(data.status_kelompokrekening);
                        $('#stts_rekening').val(data.status_kelompokrekening);
                        dbt = +dbt + +data.nilai;
                        $('#td-5-' + index).maskMoney();
                        $('#td-5-' + index).maskMoney('mask');
                    } else if (data.posisi === 'Kredit') {
                        var partawal = '<tr class="tr" id="tr-' + index + '">';
                        var part1 = '<td class="td-' + index + '"><textarea readonly id="td-1-' + index + '" class="txt-' + index + '" name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.tanggal_jurnal + '</textarea></td>';
                        var part2 = '<td id="td-2-' + index + '" class="td-' + index + '">' + buttonList + '</td>';

                        var part7 = '<td class="td-' + index + '"><textarea readonly id="td-7-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.status + '</textarea></td>';

                        var part3 = '<td class="td-' + index + '"><textarea readonly id="td-3-' + index + '" class="txt-' + index + '" name="" cols="7" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.uraian + '</textarea></td>';

                        var part5 = '<td class="td-' + index + '"><textarea readonly id="td-5-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + '0' + '</textarea></td>';

                        var part6 = '<td class="td-' + index + '" colspan="2"><textarea readonly id="td-6-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.nilai + '</textarea></td>';
                        var partakhir = '</tr>';

                        $("#tbody").append(partawal + part1 + part2 + part7 + part3 + part5 + part6 + partakhir);
                        $('#status_rekening').text(data.status_kelompokrekening);
                        $('#stts_rekening').val(data.status_kelompokrekening);
                        krd = ((+krd) + (+data.nilai)).toFixed(2);


                        $('#td-6-' + index).maskMoney();
                        $('#td-6-' + index).maskMoney('mask');
                    }



                    /*$("#tbody").append('<tr class="tr" id="tr-'+index+'"><td class="td-'+index+'"><textarea readonly id="td-1-'+index+'" class="txt-'+index+'" name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.tanggal_jurnal+'</textarea></td><td id="td-2-'+index+'" class="td-'+index+'">'+data.nomor_rekening+'</td><td class="td-'+index+'"><textarea readonly id="td-3-'+index+'" class="txt-'+index+'" name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.uraian+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-4-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.nama_departemen+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-5-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.debit_jurnal+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-6-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.kredit_jurnal+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-7-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.nama_program+'</textarea></td></tr>');*/
                    sa = +sa + +$('#td-5-' + index).val();
                    //dbt = +dbt + +$('#td-5-'+index).val();
                    //krd = +krd + +$('#td-6-'+index).val();
                    index++;

                });

          $.ajax({
            type: "POST",
            url: "index.php?page=e9fdc907eeadedf3373094ca4bdfb5a1&kode=93c76b0ec853d19db79f463efca8f48b",
            data: 'aksi=cari_detail_rekening&nomor_rekening=' + nomor_rekening,
            dataType: "json",
            success: function(data) {
                $('#stts_rekening').val(data.status_kelompokrekening);
            }
          });



if ($('#status_rekening').text() === 'Aktiva') {
    $('#total_debit').val(dbt);
    $('#total_kredit').val(krd);
    var total_debit = $('#total_debit').val();
    var total_kredit = $('#total_kredit').val();
                    //$('#saldo_akhir').val(+$('#saldo_awal').val() - sa);
                    //$('#mutasi').val(+$('#saldo_awal').val() - +$('#saldo_akhir').val());
                    var saval = $('#saldo_awal').val();
                    var sd = (+saval + +total_debit);


                    var xx = (+$('#saldo_awal').val() + (+total_debit - +total_kredit)).toFixed(2);
                    var yy = (total_debit - +total_kredit).toFixed(2);

                    $('#saldo_akhir').val((+sd - +total_kredit).toFixed(2));
                    $('#mutasi').val((total_debit - +total_kredit).toFixed(2));
                    $('#saldo_akhir').maskMoney();
                    $('#saldo_akhir').maskMoney('mask');
                    $('#mutasi').maskMoney();
                    $('#mutasi').maskMoney('mask');
                    $('#saldo_awal').maskMoney();
                    $('#saldo_awal').maskMoney('mask');
                    $('#total_debit').maskMoney();
                    $('#total_debit').maskMoney('mask');
                    $('#total_kredit').maskMoney();
                    $('#total_kredit').maskMoney('mask');
                    if (xx < 0) {
                        $('#saldo_akhir').val("-" + $('#saldo_akhir').val());
                    }
                    if (yy < 0) {
                        $('#mutasi').val("-" + $('#mutasi').val());
                    }
                } else if ($('#status_rekening').text() === 'Pasiva') {
                    $('#total_debit').val(dbt);
                    $('#total_kredit').val(krd);
                    var total_debit = $('#total_debit').val();
                    var total_kredit = $('#total_kredit').val();
                    var xx = (+$('#saldo_awal').val() + (+total_debit - +total_kredit)).toFixed(2);
                    var yy = (total_debit - +total_kredit).toFixed(2);

                    //$('#saldo_akhir').val(+$('#saldo_awal').val() - sa);
                    //$('#mutasi').val(+$('#saldo_awal').val() - +$('#saldo_akhir').val());
                    $('#saldo_akhir').val((+$('#saldo_awal').val() + (+total_kredit - +total_debit)).toFixed(2));
                    $('#mutasi').val((total_kredit - +total_debit).toFixed(2));
                    $('#saldo_akhir').maskMoney();
                    $('#saldo_akhir').maskMoney('mask');
                    $('#mutasi').maskMoney();
                    $('#mutasi').maskMoney('mask');
                    $('#saldo_awal').maskMoney();
                    $('#saldo_awal').maskMoney('mask');
                    $('#total_debit').maskMoney();
                    $('#total_debit').maskMoney('mask');
                    $('#total_kredit').maskMoney();
                    $('#total_kredit').maskMoney('mask');

                    if (xx < 0) {
                        $('#saldo_akhir').val("-" + $('#saldo_akhir').val());
                    }
                    if (yy < 0) {
                        $('#mutasi').val("-" + $('#mutasi').val());
                    }

                }
            }
        });
        //<td class="actions text-center td-'+data.id_detail_jurnal+'"><a style="cursor:pointer" id="edit-'+data.id_detail_jurnal+'" onClick="edit(\''+data.id_detail_jurnal+'\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-'+data.id_detail_jurnal+'" class="on-default remove-row" onClick="save_edit(\''+data.id_detail_jurnal+'\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-'+data.id_detail_jurnal+'" class="on-default remove-row" onClick="cancel_edit(\''+data.id_detail_jurnal+'\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\''+data.id_detail_jurnal+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td>
    }
</script>
<script>
    function cari_rekening_tanggal() {
        cari_saldoawal();
        var nomor_rekening = $('#nomor_rekening').val();
        $('#total_debit').val('');
        $('#total_kredit').val('');
        $('#saldo_akhir').val('');
        $('#mutasi').val('');
        $('#stts_rekening').val('');
        var tanggal_awal = $('#datepicker').val();
        var tanggal_akhir = $('#datepicker2').val();

        $.ajax({
            type: "POST",
            url: "index.php?page=e9fdc907eeadedf3373094ca4bdfb5a1&kode=93c76b0ec853d19db79f463efca8f48b",
            data: 'aksi=cari_rekening_tanggal&nomor_rekening=' + nomor_rekening + '&tanggal_awal=' + tanggal_awal + '&tanggal_akhir=' + tanggal_akhir,

            success: function(msg) {
                $('.tr').remove();
                $('#status_rekening').text('');
                //alert(msg);
                var sa = '';
                var dbt = '0';
                var krd = '0';
                var index = 1;
                $.each(JSON.parse(msg), function(idx, data) {
                    if (data.posisi == 'Debet') {
                        var partawal = '<tr class="tr" id="tr-' + index + '">';
                        var part1 = '<td class="td-' + index + '"><textarea readonly id="td-1-' + index + '" class="txt-' + index + '" name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.tanggal_jurnal + '</textarea></td>';
                        var part2 = '<td id="td-2-' + index + '" class="td-' + index + '">' + data.ref + '</td>';

                        var part7 = '<td class="td-' + index + '"><textarea readonly id="td-7-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.status + '</textarea></td>';

                        var part3 = '<td class="td-' + index + '"><textarea readonly id="td-3-' + index + '" class="txt-' + index + '" name="" cols="7" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.uraian + '</textarea></td>';

                        var part5 = '<td class="td-' + index + '"><textarea readonly id="td-5-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.nilai + '</textarea></td>';

                        var part6 = '<td class="td-' + index + '" colspan="2"><textarea readonly id="td-6-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + '0' + '</textarea></td>';
                        var partakhir = '</tr>';

                        $("#tbody").append(partawal + part1 + part2 + part7 + part3 + part5 + part6 + partakhir);
                        $('#status_rekening').text(data.status_kelompokrekening);
                        $('#stts_rekening').val(data.status_kelompokrekening);
                        dbt = +dbt + +data.nilai;
                        $('#td-5-' + index).maskMoney();
                        $('#td-5-' + index).maskMoney('mask');
                    } else if (data.posisi === 'Kredit') {
                        var partawal = '<tr class="tr" id="tr-' + index + '">';
                        var part1 = '<td class="td-' + index + '"><textarea readonly id="td-1-' + index + '" class="txt-' + index + '" name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.tanggal_jurnal + '</textarea></td>';
                        var part2 = '<td id="td-2-' + index + '" class="td-' + index + '">' + data.ref + '</td>';

                        var part7 = '<td class="td-' + index + '"><textarea readonly id="td-7-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.status + '</textarea></td>';

                        var part3 = '<td class="td-' + index + '"><textarea readonly id="td-3-' + index + '" class="txt-' + index + '" name="" cols="7" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.uraian + '</textarea></td>';

                        var part5 = '<td class="td-' + index + '"><textarea readonly id="td-5-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + '0' + '</textarea></td>';

                        var part6 = '<td class="td-' + index + '" colspan="2"><textarea readonly id="td-6-' + index + '" class="txt-' + index + '"  name="" cols="5" rows="1" style="width: 100%; height:23px; background:none;border:none; resize:none;">' + data.nilai + '</textarea></td>';
                        var partakhir = '</tr>';

                        $("#tbody").append(partawal + part1 + part2 + part7 + part3 + part5 + part6 + partakhir);
                        $('#status_rekening').text(data.status_kelompokrekening);
                        $('#stts_rekening').val(data.status_kelompokrekening);
                        krd = ((+krd) + (+data.nilai)).toFixed(2);


                        $('#td-6-' + index).maskMoney();
                        $('#td-6-' + index).maskMoney('mask');
                    }

                    /*$("#tbody").append('<tr class="tr" id="tr-'+index+'"><td class="td-'+index+'"><textarea readonly id="td-1-'+index+'" class="txt-'+index+'" name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.tanggal_jurnal+'</textarea></td><td id="td-2-'+index+'" class="td-'+index+'">'+data.nomor_rekening+'</td><td class="td-'+index+'"><textarea readonly id="td-3-'+index+'" class="txt-'+index+'" name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.uraian+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-4-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.nama_departemen+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-5-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.debit_jurnal+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-6-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.kredit_jurnal+'</textarea></td><td class="td-'+index+'"><textarea readonly id="td-7-'+index+'" class="txt-'+index+'"  name="" cols="5" rows="1" style="width: 100%; height:17px; background:none;border:none; resize:none;">'+data.nama_program+'</textarea></td></tr>');*/
                    sa = +sa + +$('#td-5-' + index).val();
                    //dbt = +dbt + +$('#td-5-'+index).val();
                    //krd = +krd + +$('#td-6-'+index).val();
                    index++;

                });
if ($('#status_rekening').text() === 'Aktiva') {
    $('#total_debit').val(dbt);
    $('#total_kredit').val(krd);
    var total_debit = $('#total_debit').val();
    var total_kredit = $('#total_kredit').val();

    var xx = (+$('#saldo_awal').val() + (+total_debit - +total_kredit)).toFixed(2);
    var yy = (total_debit - +total_kredit).toFixed(2);

                    //$('#saldo_akhir').val(+$('#saldo_awal').val() - sa);
                    //$('#mutasi').val(+$('#saldo_awal').val() - +$('#saldo_akhir').val());
                    $('#saldo_akhir').val((+$('#saldo_awal').val() + (+total_debit - +total_kredit)).toFixed(2));
                    $('#mutasi').val((total_debit - +total_kredit).toFixed(2));
                    $('#saldo_akhir').maskMoney();
                    $('#saldo_akhir').maskMoney('mask');
                    $('#mutasi').maskMoney();
                    $('#mutasi').maskMoney('mask');
                    $('#saldo_awal').maskMoney();
                    $('#saldo_awal').maskMoney('mask');
                    $('#total_debit').maskMoney();
                    $('#total_debit').maskMoney('mask');
                    $('#total_kredit').maskMoney();
                    $('#total_kredit').maskMoney('mask');

                    if (xx < 0) {
                        $('#saldo_akhir').val("-" + $('#saldo_akhir').val());
                    }
                    if (yy < 0) {
                        $('#mutasi').val("-" + $('#mutasi').val());
                    }


                } else if ($('#status_rekening').text() === 'Pasiva') {
                    $('#total_debit').val(dbt);
                    $('#total_kredit').val(krd);
                    var total_debit = $('#total_debit').val();
                    var total_kredit = $('#total_kredit').val();
                    var xx = (+$('#saldo_awal').val() + (+total_debit - +total_kredit)).toFixed(2);
                    var yy = (total_debit - +total_kredit).toFixed(2);

                    //$('#saldo_akhir').val(+$('#saldo_awal').val() - sa);
                    //$('#mutasi').val(+$('#saldo_awal').val() - +$('#saldo_akhir').val());
                    $('#saldo_akhir').val((+$('#saldo_awal').val() + (+total_kredit - +total_debit)).toFixed(2));
                    $('#mutasi').val((total_kredit - +total_debit).toFixed(2));
                    $('#saldo_akhir').maskMoney();
                    $('#saldo_akhir').maskMoney('mask');
                    $('#mutasi').maskMoney();
                    $('#mutasi').maskMoney('mask');
                    $('#saldo_awal').maskMoney();
                    $('#saldo_awal').maskMoney('mask');
                    $('#total_debit').maskMoney();
                    $('#total_debit').maskMoney('mask');
                    $('#total_kredit').maskMoney();
                    $('#total_kredit').maskMoney('mask');


                    if (xx < 0) {
                        $('#saldo_akhir').val("-" + $('#saldo_akhir').val());
                    }
                    if (yy < 0) {
                        $('#mutasi').val("-" + $('#mutasi').val());
                    }


                }
            }
        });
        //<td class="actions text-center td-'+data.id_detail_jurnal+'"><a style="cursor:pointer" id="edit-'+data.id_detail_jurnal+'" onClick="edit(\''+data.id_detail_jurnal+'\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-'+data.id_detail_jurnal+'" class="on-default remove-row" onClick="save_edit(\''+data.id_detail_jurnal+'\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-'+data.id_detail_jurnal+'" class="on-default remove-row" onClick="cancel_edit(\''+data.id_detail_jurnal+'\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\''+data.id_detail_jurnal+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td>
    }
</script>
<script>
    function cari_saldoawal() {
        var nomor_rekening = $('#nomor_rekening').val();
        $.ajax({
            type: "POST",
            url: "index.php?page=e9fdc907eeadedf3373094ca4bdfb5a1&kode=93c76b0ec853d19db79f463efca8f48b",
            data: 'aksi=cari_saldoawal&nomor_rekening=' + nomor_rekening,
            success: function(msg) {
                $('#saldo_awal').val('')
                var sa = '';
                $.each(JSON.parse(msg), function(idx, data) {
                    //                    var awal = +$('#saldo_awal').val();
                    //                    $('#saldo_awal').val( +awal + +data.saldoawal);
                    $('#saldo_awal').val(data.saldoawal);
                });
            }
        });
    }
</script>
</body>

</html>