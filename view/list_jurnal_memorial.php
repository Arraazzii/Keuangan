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
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" />
    <script src="js/modernizr.min.js"></script>
    <style type="text/css">
    tfoot input {
        width: 100%;
        padding: 0;
        box-sizing: border-box;
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
                                    <li><a href="?page=40f57ec532ab642c6c632ee8f9eb6112">Transaksi</a></li>
                                    <li class="active"><span>List Memorial</span></li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">                                    
                                    <div class="panel-heading"><h3 class="panel-title">List Jurnal Memorial</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <!-- table edit -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                       <div id="date_filter" style="float:left;margin:20px 10px 20px 10px;">
                                                            <div class="input-group input-daterange">
                                                                <div class="input-group-addon">From</div>
                                                                <input type="date" id="min-date" class="form-control date-range-filter" placeholder="From:">
                                                                <div class="input-group-addon">To</div>
                                                                <input type="date" id="max-date" class="form-control date-range-filter" placeholder="To:">
                                                            </div>
                                                        </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <table id="datatable" class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>No. Rekening</th>
                                                                    <th>Tanggal</th>
                                                                    <th>Keterangan</th>
                                                                    <th>Nama Rekening</th>
                                                                    <th>Debet</th>
                                                                    <th>Nama Rekening</th>
                                                                    <th>Kredit</th>
                                                                    <!--  <th>Cara Pembayaran</th> -->
                                                                    <th>Status</th>
                                                                    <?php 
                                                                    //if (isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])) {?>
                                                                    <th>Action</th>
                                                                    <?php// } ?>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">                                                                
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                            </tr>
                                                        </tfoot>
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
                            <li><a href="?page=40f57ec532ab642c6c632ee8f9eb6112">Transaksi</a></li>
                            <li class="active"><span>List Memorial</span></li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">List Jurnal Memorial</h3>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <!-- table edit -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div id="date_filter" style="float:left;margin:20px 10px 20px 10px;">
                                                    <div class="input-group input-daterange">
                                                        <div class="input-group-addon">From</div>
                                                        <input type="date" id="min-date" class="form-control date-range-filter" placeholder="From:">
                                                        <div class="input-group-addon">To</div>
                                                        <input type="date" id="max-date" class="form-control date-range-filter" placeholder="To:">
                                                    </div>
                                                </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <table id="datatable" class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>No. Rekening</th>
                                                                    <th>Tanggal</th>
                                                                    <th>Keterangan</th>
                                                                    <th>Nama Rekening</th>
                                                                    <th>Debet</th>
                                                                    <th>Nama Rekening</th>
                                                                    <th>Kredit</th>
                                                                    <!--  <th>Cara Pembayaran</th> -->
                                                                    <th>Status</th>
                                                                    <?php 
                                                                     //if (isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])) {?>
                                                                    <th>Action</th>
                                                                    <?php // } ?>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody">                                                                
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                                <th>Cari</th>
                                                            </tr>
                                                        </tfoot>
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
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/chat/moment-2.2.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
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
    $('#datatable tfoot th').each(function(){
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="'+title+'" />' );
    });
    $(document).ready(function() {
        window.oTable = $('#datatable').DataTable({
            dom: 'Bfrtip',
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                language: {
                    "decimal":        "",
                    "emptyTable":     "Data Tidak Tersedia Di Table",
                    "info":           "Menampilkan _START_ Sampai _END_ Dari _TOTAL_ Data",
                    "infoEmpty":      "Menampilkan 0 Sampai 0 Dari 0 Data",
                    "infoFiltered":   "(Dari Total _MAX_ Data)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Menampilkan _MENU_ Data",
                    "loadingRecords": "Loading...",
                    "processing":     "Memproses...",
                    "search":         "Cari :",
                    "zeroRecords":    "Tidak Ada Data Yang Sesuai",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Selanjutnya",
                        "previous":   "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },
                
                responsive: true,
                // /*ss
                // "processing": true,
                //  "serverSide": true,
                "ajax":{
                    url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=listjurnalmemorial",
                    type: "Post",
                    "data": function(d) {
                        d.aksi = "baca_json";                    
                    },
                    dataSrc: function (res) {
                        // console.log(res);
                        var result = new Array();
                        var id = 1;
                        const formatter = new Intl.NumberFormat('en-US', {
                            style: 'decimal',
                            currency: 'IDR'
                        });
                        $.each(res, function(index, value){
                            var raw = {};                            
                            raw.id = id+".";
                            raw.nomor_jurnal = value.nomor_jurnal;
                            raw.tanggal_jurnal = value.tanggal_jurnal;
                            raw.keterangan_jurnal = value.keterangan_jurnal;
                            if (value.posisi == "Debet") {
                                raw.uraian_debet = value.uraian_koderekening;
                                raw.nilai_debet = formatter.format(value.nilai);
                            } else {
                                raw.uraian_debet = "";
                                raw.nilai_debet = "";
                            }

                            if (value.posisi == "Kredit") {
                                raw.uraian_kredit = value.uraian_koderekening;
                                raw.nilai_kredit = formatter.format(value.nilai);
                            } else {
                                raw.uraian_kredit = "";
                                raw.nilai_kredit = "";
                            }
                            if (value.status_jurnal == "T") {
                                raw.status = "Not Approved";    
                            }
                            else if (value.status_jurnal == "Y") {
                                raw.status = "Approved";    
                            }
                            else {
                                raw.status = "";    
                            }
                            raw.idstatus = value.status_jurnal;
                            id++;
                            result.push(raw);
                        });                                        
                            // window.tableData = result;
                        // console.log(result);
                        return result;
                    },
                    error:function(x, y){
                        console.log(x);

                    }
                },
                // */
                // /*
                columns: [
                { "data": "id" },
                { "data": "nomor_jurnal" },
                { "data": "tanggal_jurnal" },
                { "data": "keterangan_jurnal" },
                { "data": "uraian_debet" },
                { "data": "nilai_debet" },
                { "data": "uraian_kredit" },
                { "data": "nilai_kredit" },
                { "data": "status" },
                { "data": "nomor_jurnal" ,"render": function ( data, type, row ) {
                        // console.log(row);
                        var buttonList = "";
                        buttonList += '<td class="actions text-center td-'+ row.nomor_jurnal +'">';
                        buttonList += '<form action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=editmemorial" method="POST">';
                        buttonList += '<input type="hidden" name="iddanamasuk" id="iddanamasuk" value="'+row.nomor_jurnal+'">';
                        if (row.idstatus == 'T') {
                            buttonList += '<a style="cursor:pointer;width:50%" id="hapus-'+row.nomor_jurnal+'" onClick="hapus(\' '+row.nomor_jurnal+' \');" class="btn btn-danger btn-xs on-default edit-row"><i class="md md-delete"></i></a>';
                            buttonList += '<button title="Edit" type="submit" class="btn btn-success btn-xs" style="width:50%"><i class="md md-edit"></i></button>';
                        <?php if (isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])) { ?>
                            buttonList += '<a style="cursor:pointer;width:100%" id="edit-'+row.nomor_jurnal+'" onClick="acc(\''+row.nomor_jurnal+'\', \''+row.idstatus+'\')" class="btn btn-info btn-xs on-default edit-row"><i class="md md-done"></i></a>';
                        <?php } ?>
                        } else {
                        <?php if (isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])) { 
                            if ($_SESSION['f658f7a22761210065c7ae4211aab09b'] == 'Umar') {?>
                            buttonList += '<a style="cursor:pointer" title="Unapprove" id="edit-'+row.nomor_jurnal+'" onClick="acc(\''+row.nomor_jurnal+'\', \''+ row.idstatus +'\')" class="btn btn-danger btn-xs on-default edit-row"><i class="md md-close"></i></a>';
                        <?php } } ?>
                            buttonList += '<button title="View" type="submit" class="btn btn-primary btn-xs"><i class="md md-visibility"></i></button>';
                        }   
                        buttonList += '</form>';
                        buttonList += '</td>';
                        if(type === 'display'){
                            return buttonList;
                        }else if(type === 'sort'){
                            return data;
                        }else{
                            return data;
                        }
                    }},
                    ],
                    initComplete: function(){
                        this.api().columns([0]).every(function(){
                            var column = this;
                            var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function(){
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                    );
                                column
                                .search(val ? '^' + val + '$' : '' ,true ,false)
                                .draw();
                                // console.log(val, (val ? '^' + val + '$' : '' ,true ,false));
                            });
                            column.data().unique().sort().each(function( d, j){
                                var val = $('<div>').html(d).text();
                                // console.log(val);
                                select.append( '<option value="' + val + '">' + val + '</option>' );
                            });
                        });
                    }
            });            
            window.oTable.columns().every(function(){
                var that = this;

                $( 'input', this.footer() ).on('keyup change',function(){
                    // console.log("value : "+this.value, that.search());
                    if (that.search() !== this.value) {
                        that
                        .search(this.value)
                        .draw();
                    }
                });
            });            
            // Extend dataTables search
            $.fn.dataTable.ext.search.push(
              function(settings, data, dataIndex) {
                var min = $('#min-date').val();
                var max = $('#max-date').val();
                var createdAt = data[1]; // Our date column in the table
                // console.log(data[1], min, max);

                if ((min == "" || max == "") || (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))) {
                    return true;
                }
                return false;
            });            
            

            // Re-draw the table when the a date range filter changes
            $('.date-range-filter').change(function() {
                // console.log("test");
                window.oTable.draw();
            });
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
<script type="text/javascript">
    function acc(id, status) {
        // alert(status);
        var iddanamasuk = id;
        $.ajax({
            type: "POST",
            url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=listjurnalmemorial",
            data: "aksi=ubah&iddanamasuk=" + iddanamasuk + "&status=" + status,
            success: function(msg) {
                alert(msg);
                window.oTable.ajax.reload( null, false );
                // location.reload();
            }


        });

    }
</script>
    <!-- <script>
    function edit(baris){
        var a = $(".td-"+baris).val();
        $(".txt-"+baris).attr("readonly",false);
        $("#save-"+baris).attr("hidden",false);
        $("#edit-"+baris).attr("hidden",true);
        $("#cancel-edit-"+baris).attr("hidden",false);
        $(".txt-"+baris).css("background-color","coral");
    }
</script> -->
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
<script type="text/javascript">
    $(document).ready(function() {

        $('#datatable').dataTable();

    });
</script>
<script>
    function hapus(baris) {
        $.ajax({
            type: "POST",
            url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=398186c3fc1776d5de93b41171fddbba",
            data: 'aksi=hapus' + '&nomor_jurnal=' + baris.trim(),
            success: function(msg) {
                hapus_detail(baris.trim());
            }
        });
    }

    function hapus_detail(baris) {
        $.ajax({
            type: "POST",
            url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=398186c3fc1776d5de93b41171fddbba",
            data: 'aksi=hapus_detail' + '&nomor_jurnal=' + baris,
            success: function(msg) {
                alert(msg);
                // $("#tr-" + baris).remove();
                window.oTable.ajax.reload( null, false );
            }
        });
    }
</script>
</body>

</html>