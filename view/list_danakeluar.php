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
                    <div class="container-fluid">
                        <!-- Page-Title -->
                        <div class="row" style="margin-top:30px">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=40f57ec532ab642c6c632ee8f9eb6112">Transaksi</a></li>
                                    <li class="active"><span>List Keluar</span></li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">List Dana Keluar
                                        <!-- <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalPrint">Print</button> -->
                                    </h3>
                                </div> 
                                <div class="panel-body">
                                    <!-- <form> -->
                                        <!-- table edit -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <!-- Form Cari-->
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
                                                            <table class="table table-striped table-bordered" id="Example">
                                                                <thead id="thead">
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>No. Transaksi</th>
                                                                        <th>Tanggal</th>
                                                                        <th>Dibayar kepada</th>
                                                                        <th>Uraian</th>
                                                                        <th>Nama Rekening</th>
                                                                        <th>Debet</th>
                                                                        <th>Nama Rekening</th>
                                                                        <th>Kredit</th>
                                                                        <!--  <th>Cara Pembayaran</th> -->
                                                                        <th>Status</th>
                                                                        <!-- <?php 
                                                                        //if(isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])){
                                                                            ?> -->
                                                                            <th>Action</th>
                                                                            <!-- <?php //} ?> -->
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
                                                                            <!--  <th>Cara Pembayaran</th> -->
                                                                            <th>Cari</th>
                                                                            <!-- <?php 
                                                                            //if(isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])){
                                                                                ?> -->
                                                                                <th>Cari</th>
                                                                                <!-- <?php //} ?> -->
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
                                            <!-- </form> -->
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                    </div> <!-- container -->
                    <?php require_once("header/footer.php"); ?>
                </div>
                <!-- Modal -->
                <div id="ModalPrint" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Print Dana Keluar</h4>
                    </div>
                    <div class="modal-body">
                        <form action="index.php?page=printdanakeluar" method="POST" target="_blank">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="from-group">
                                        <label>Dari Tanggal :</label>
                                        <input type="date" name="mulai" class="form-control" id="dari">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="from-group">
                                        <label>Sampai Tanggal :</label>
                                        <input type="date" name="selesai" class="form-control" id="sampai">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-sm pull-right" type="submit">Cetak</button>
                        </form>
                    </div>
                </div>

            </div>
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
                                <li class="active"><span>List Keluar</span></li>
                            </ol>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title">List Dana Keluar <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalPrint">Print</button></h3>
                                </div>
                                <div class="panel-body">
                                    <!-- <form> -->
                                        <!-- table edit -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <!-- Form Cari-->
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
                                                            <table class="table table-striped table-bordered">
                                                                <thead id="thead">
                                                                    <tr>
                                                                        <th>Nomor</th>
                                                                        <th>Tanggal</th>
                                                                        <th>Dibayar kepada</th>
                                                                        <th>Uraian</th>
                                                                        <th>Nama Rek</th>
                                                                        <th>Debet</th>
                                                                        <th>Nama Rek</th>
                                                                        <th>Kredit</th>
                                                                        <!--  <th>Cara Pembayaran</th> -->
                                                                        <th>Status</th>
                                                                        <!-- <?php 
                                                                        //if(isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])){
                                                                            ?> -->
                                                                            <th>Action</th>
                                                                            <!-- <?php //} ?> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="tbody">

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- End Row -->
                                        <!-- akhir table -->
                                        <!-- </form> -->
                                    </div> <!-- .form -->
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> <!-- End row -->
                </div> <!-- container -->
                <!-- Modal -->
                <div id="ModalPrint" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Print Dana Keluar <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#ModalPrint">Print</button></h4>
                    </div>
                    <div class="modal-body">
                        <form action="index.php?page=printdanakeluar" method="POST" target="_blank">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="from-group">
                                        <label>Dari Tanggal :</label>
                                        <input type="date" name="mulai" class="form-control" id="dari">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="from-group">
                                        <label>Sampai Tanggal :</label>
                                        <input type="date" name="selesai" class="form-control" id="sampai">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-sm pull-right" type="submit">Cetak</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
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
    <link rel="stylesheet" href="assets/jquery.ui.css">
    <!-- <script src="js/jquery.js"></script>
    
    <script src="js/jquery-1.7.2.js"></script>-->
    <script src="ui/jquery.ui.core.js"></script>
    <script src="ui/jquery.ui.widget.js"></script>
    <script src="ui/jquery.ui.datepicker.js"></script>
    <!--form validation-->
    <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>
    <!-- money masked -->
    <script src="assets/jquery.maskMoney.min.js"></script>
    <script src="assets/autoNumeric-2.0-BETA.js" type="text/javascript"></script>
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
    window.tableData = {};
    function create_row(item) {
        var result = {};
        var id = 1;
        $.each(item, function(index, value){
            result[index] = {};
            result[index].id = id;
            result[index].id_dana_keluar = value.id_dana_keluar;
            result[index].tanggal_danakeluar = value.tanggal_danakeluar;
            result[index].dibayarkepada_danakeluar = value.dibayarkepada_danakeluar;
            result[index].uraian = value.uraian;
            if (value.posisi == "Debet") {
                result[index].uraian_debet = value.uraian_koderekening;
                result[index].nilai_debet = "Rp " + value.nilai+ " (" + value.carapembayaran_danakeluar + ")";
            } else {
                result[index].uraian_debet = "";
                result[index].nilai_debet = "";
            }

            if (value.posisi == "Kredit") {
                result[index].uraian_kredit = value.uraian_koderekening;
                result[index].nilai_kredit = "Rp " + value.nilai+ " (" + value.carapembayaran_danakeluar + ")";
            } else {
                result[index].uraian_kredit = "";
                result[index].nilai_kredit = "";
            }
            if (value.status_danakeluar == "T") {
                result[index].status = "Not Approved";    
            }
            else if (value.status_danakeluar == "") {
                result[index].status = "Approved";    
            }
            else {
                result[index].status = "";    
            }
            id++;
        });                
                // window.tableData = result;
                return result;
            }
            $(document).ready(function() {
                $('#Example tfoot th').each(function(){
                    var title = $(this).text();
                    $(this).html( '<input type="text" placeholder="'+title+'" />' );
                });
                var form_data = {
                    aksi : "baca_json",
                };
                
                $.ajax({
                    url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=listdanakeluar",
                    type: "POST",
                    dataType: "json",
                    data : form_data,
                    cache: false,
                    async:false,
                    success: function(result){
                        // console.log("response", result);
                        window.tableData = result;
                        // create_row(result);
                    }

                });                
                // console.log(window.tableData);
                window.oTable = $('#Example').DataTable({                
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
                    url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=listdanakeluar",
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
                        })
                        $.each(res, function(index, value){
                            var raw = {};                            
                            raw.id = id+ ".";
                            raw.id_dana_keluar = value.id_dana_keluar;
                            raw.nomor_danakeluar = value.nomor_danakeluar;
                            raw.tanggal_danakeluar = value.tanggal_danakeluar;
                            raw.dibayarkepada_danakeluar = value.dibayarkepada_danakeluar;
                            raw.uraian = value.uraian+ " (" + value.carapembayaran_danakeluar + ": " + value.nomorcekgiro_danakeluar + ")";
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
                            if (value.status_danakeluar == "T") {
                                raw.status = "Not Approved";    
                            }
                            else if (value.status_danakeluar == "Y") {
                                raw.status = "Approved";    
                            }
                            else {
                                raw.status = "";    
                            }
                            raw.idstatus = value.status_danakeluar;
                            id++;
                            result.push(raw);
                        });                                        
                            // window.tableData = result;
                        // console.log(result,anj);
                        return result;
                    },
                    error:function(x, y){
                        console.log(x);

                    }
                },
                // */
                columns: [
                { "data": "id" },
                { "data": "nomor_danakeluar" },
                { "data": "tanggal_danakeluar" },
                { "data": "dibayarkepada_danakeluar" },
                { "data": "uraian" },
                { "data": "uraian_debet" },
                { "data": "nilai_debet" },
                { "data": "uraian_kredit" },
                { "data": "nilai_kredit" },
                { "data": "status" },
                { "data": "id_dana_keluar" ,"render": function ( data, type, row ) {
                        // console.log(row);
                        var buttonList = "";
                        buttonList += '<td class="actions text-center td-'+row.id_dana_keluar+'">';
                        buttonList += '<form action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=210672dd918ab2ee98b69742ecae13b5" method="POST">';
                        buttonList += '<input type="hidden" name="iddanamasuk" id="iddanamasuk" value="'+row.id_dana_keluar+'">';
                        if (row.idstatus == 'T') {
                            buttonList += '<a style="cursor:pointer;width:50%" id="hapus-'+row.id_dana_keluar+'" onClick="hapus(\' '+row.id_dana_keluar+' \');" class="btn btn-danger btn-xs on-default edit-row"><i class="md md-delete"></i></a>';
                            buttonList += '<button title="Edit" type="submit" class="btn btn-success btn-xs" style="width:50%"><i class="md md-edit"></i></button>';
                        <?php if (isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])) { ?>
                            buttonList += '<a style="cursor:pointer;width:100%" id="edit-'+row.id_dana_keluar+'" onClick="acc(\''+row.id_dana_keluar+'\', \''+row.idstatus+'\')" class="btn btn-info btn-xs on-default edit-row"><i class="md md-done"></i></a>';
                        <?php } ?>
                        } else {
                        <?php if (isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])) { 
                            if ($_SESSION['f658f7a22761210065c7ae4211aab09b'] == 'Umar') {?>
                            buttonList += '<a style="cursor:pointer" title="Unapprove" id="edit-'+row.id_dana_keluar+'" onClick="acc(\''+row.id_dana_keluar+'\', \''+ row.idstatus +'\')" class="btn btn-danger btn-xs on-default edit-row"><i class="md md-close"></i></a>';
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

                // /*
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
                // */
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
                var createdAt = data[2]; // Our date column in the table
                console.log(data[2], min, max);

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

//             $("#datepicker_from").datepicker({
//                 showOn: "button",
//                 buttonImage: "images/calendar.gif",
//                 buttonImageOnly: false,
//                 "onSelect": function(date) {
//                   minDateFilter = new Date(date).getTime();
//                   oTable.fnDraw();

//               }
//           }).keyup(function() {
//             minDateFilter = new Date(this.value).getTime();
//             oTable.fnDraw();
//         });

//           $("#datepicker_to").datepicker({
//             showOn: "button",
//             buttonImage: "images/calendar.gif",
//             buttonImageOnly: false,
//             "onSelect": function(date) {
//               maxDateFilter = new Date(date).getTime();
//               oTable.fnDraw();
//               console.log(table);

//           }
//       }).keyup(function() {
//         maxDateFilter = new Date(this.value).getTime();
//         oTable.fnDraw();
//     });


// // Date range filter
// minDateFilter = "";
// maxDateFilter = "";

// $.fn.dataTableExt.afnFiltering.push(
//   function(oSettings, aData, iDataIndex) {
//     if (typeof aData._date == 'undefined') {
//       aData._date = new Date(aData[2]).getTime();
//   }

//   if (minDateFilter && !isNaN(minDateFilter)) {
//       if (aData._date < minDateFilter) {
//         return false;
//     }
// }

// if (maxDateFilter && !isNaN(maxDateFilter)) {
//   if (aData._date > maxDateFilter) {
//     return false;
// }
// }

// return true;
// });
});

</script>
<script type="text/javascript">
    /* ==============================================

     Counter Up


     jQuery(document).ready(function($) {

        $('.counter').counterUp({

            delay: 100,

            time: 1200

        });

    });
    =============================================== */
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



        $("#datepicker8").datepicker({

            changeMonth: true,

            changeYear: true,

            dateFormat: 'yy/mm/dd'

        });



        $("#datepicker9").datepicker({

            changeMonth: true,

            changeYear: true,

            dateFormat: 'yy/mm/dd'

        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#datatable').dataTable();

    });
</script>
<script>
    function format1(n, currency) {
        return currency + " " + n.toFixed(2).replace(/./g, function(c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
        });
    }
</script>
<!-- masking money-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        // $('#').maskMoney();
        // $('#').maskMoney();
        //        $('textarea[name=uang]').maskMoney();
    });
</script>
<script>
    function cari() {

        var datepicker8 = $("#datepicker8").val();

        var datepicker9 = $("#datepicker9").val();

        // alert(datepicker8+"......."+datepicker9);

        $.ajax({

            type: "POST",

            url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=listdanakeluar",

            data: 'aksi=cari&datepicker8=' + datepicker8 + '&datepicker9=' + datepicker9,

            success: function(msg) {

                //alert(msg);

                $('.tr').remove();

                $.each(JSON.parse(msg), function(idx, data) {

                    $("#thead").replaceWith('<thead><tr><th>Nomor</th><th>Tanggal</th><th>Dibayar kepada</th><th>Uraian</th><th>Jumlah</th><th>Status</th><th>Action</th></tr></thead>');

                    if (data.status_danakeluar === 'T') {


                        // var number = format1(data.jumlah_danakeluar, "Rp");

                        //var knt = data.jumlah_danakeluar.maskMoney();



                        $("#tbody").append('<tr class="tr" id="tr-' + data.id_danakeluar + '"><td id="td-1-' + data.nomor_danakeluar + '" class="td-' + data.nomor_danakeluar + '">' + data.nomor_danakeluar + '</td><td id="td-2-' + data.tanggal_danakeluar + '" class="td-' + data.tanggal_danakeluar + '">' + data.tanggal_danakeluar + '</td><td id="td-3-' + data.dibayarkepada_danakeluar + '" class="td-' + data.dibayarkepada_danakeluar + '">' + data.dibayarkepada_danakeluar + '</td><td id="td-4-' + data.keterangan_danakeluar + '" class="td-' + data.keterangan_danakeluar + '">' + data.keterangan_danakeluar + '</td><td id="td-5-' + data.id_danakeluar + '" class="td-' + data.jumlah_danakeluar + '"><input type="text" class="td-99" id="td-99-' + data.id_danakeluar + '" value="' + data.jumlah_danakeluar + '" readonly></td><td id="td-6-' + data.status_danakeluar + '" class="td-' + data.status_danakeluar + '\'">' + "Not Approved" + '</td><td><a style="cursor:pointer" onClick="acc(\'' + data.id_danakeluar + '\',\'' + data.status_danakeluar + '\');"  class="on-default remove-row"><i class="md md-done"></i></a><a style="cursor:pointer" onClick="hapus(\'' + data.id_danakeluar + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');



                    } else {

                        // var jumlah_danakeluar = data.jumlah_danakeluar.maskMoney();



                        $("#tbody").append('<tr class="tr" id="tr-' + data.id_danakeluar + '"><td id="td-1-' + data.nomor_danakeluar + '" class="td-' + data.nomor_danakeluar + '">' + data.nomor_danakeluar + '</td><td id="td-2-' + data.tanggal_danakeluar + '" class="td-' + data.tanggal_danakeluar + '">' + data.tanggal_danakeluar + '</td><td id="td-3-' + data.dibayarkepada_danakeluar + '" class="td-' + data.dibayarkepada_danakeluar + '">' + data.dibayarkepada_danakeluar + '</td><td id="td-4-' + data.keterangan_danakeluar + '" class="td-' + data.keterangan_danakeluar + '">' + data.keterangan_danakeluar + '</td><td id="td-5-' + data.id_danakeluar + '" class="td-' + data.jumlah_danakeluar + '"><input type="text" class="td-99" id="td-99-' + data.id_danakeluar + '" value="' + data.jumlah_danakeluar + '" readonly></td><td id="td-6-' + data.status_danakeluar + '" class="td-' + data.status_danakeluar + '\'">' + "Approved" + '</td><td><a style="cursor:pointer" onClick="acc(\'' + data.id_danakeluar + '\',\'' + data.status_danakeluar + '\');"  class="on-default remove-row"><i class="md md-done"></i></a><a style="cursor:pointer" onClick="hapus(\'' + data.id_danakeluar + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');



                    }



                    $('#td-99-' + data.id_danakeluar).maskMoney();

                    $('#td-99-' + data.id_danakeluar).focus();

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

        // alert(status+"   "+id);

        var iddanamasuk = id;

        $.ajax({

            type: "POST",

            url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=listdanakeluar",

            data: "aksi=ubah&iddanamasuk=" + iddanamasuk + "&status=" + status,

            success: function(msg) {

                alert(msg);

                // window.location.reload();
                window.oTable.ajax.reload( null, false );

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
<script>
    function hapus(baris) {

        $.ajax({

            type: "POST",

            url: "index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=listdanakeluar",

            data: 'aksi=hapus' + '&iddanamasuk=' + baris,

            success: function(msg) {

                alert(msg);

                // window.location.reload();
                window.oTable.ajax.reload( null, false );

            }

        });

    }
</script>
</body>

</html>