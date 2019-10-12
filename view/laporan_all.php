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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                    <div class="container-fluid">
                        <!-- Start Widget -->
                        <div class="row" style="margin-top: -190px"><br>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="panel1 panel-default" style="background:#29b6f6">
                                    <!-- <a href="?page=eec7e3026fc0eb5af67364365d98c221&kode=8c29be6a2c55f0d698f5193676ef1b7f"> -->
                                        <a href="#" type="button" data-toggle="modal" data-target="#modalArusKas">
                                            <div class="panel-body hidden-xs">
                                                <center><i class="ion ion-ios-analytics" style="font-size:200px;color:white"></i> <h3 style="color:white">Laporan Arus Kas</h3></center>
                                            </div>
                                            <div class="panel-body hidden-md hidden-sm">
                                                <center><i class="ion ion-ios-analytics" style="font-size:100px;color:white"></i> <h5 style="color:white">Laporan Arus Kas</h5></center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="panel1 panel-default" style="background:#ec407a">
                                        <!-- <a href="?page=7769c8dfb376a214ed0a52eb2b1346e7&kode=8c29be6a2c55f0d698f5193676ef1b7f"> -->
                                            <a href="#" type="button" data-toggle="modal" data-target="#modalPosisiKeuangan">
                                                <div class="panel-body hidden-xs">
                                                    <center><i class="ion ion-pinpoint" style="font-size:200px;color:white"></i> <h3 style="color:white">Laporan Posisi Keuangan</h3></center>
                                                </div>
                                                <div class="panel-body hidden-md hidden-sm">
                                                    <center><i class="ion ion-pinpoint" style="font-size:100px;color:white"></i> <h5 style="color:white">Laporan Posisi Keuangan</h5></center>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="panel1 panel-default" style="background:#ffd740">
                                            <!-- <a href="?page=f8a92caddcb153912917c55e9064574e&kode=8c29be6a2c55f0d698f5193676ef1b7f"> -->
                                                <a href="#" type="button" data-toggle="modal" data-target="#modalAktivitas">
                                                    <div class="panel-body hidden-xs">
                                                        <center><i class="ion ion-ios-pulse-strong" style="font-size:200px;color:white"></i> <h3 style="color:white">Laporan Aktivitas</h3></center>
                                                    </div>
                                                    <div class="panel-body hidden-md hidden-sm">
                                                        <center><i class="ion ion-ios-pulse-strong" style="font-size:100px;color:white"></i> <h5 style="color:white">Laporan Aktivitas</h5></center>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End row-->
                                </div> <!-- container -->
                            </div> <!-- content -->
                            <!-- Modal -->
                            <div id="modalArusKas" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Arus Kas</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Tanggal Awal</label>
                                                <input type="date" name="tanggal_awal_worksheet" class="form-control" placeholder="Tanggal Awal">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Tanggal Akhir</label>
                                                <input type="date" name="tanggal_akhir_worksheet" class="form-control" placeholder="Tanggal Akhir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success" id="submit">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Modal -->
                    <div id="modalPosisiKeuangan" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Posisi Keuangan</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label>
                                        <input type="date" name="tanggal_awal_worksheet" class="form-control" placeholder="Tanggal Awal">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label>
                                        <input type="date" name="tanggal_akhir_worksheet" class="form-control" placeholder="Tanggal Akhir">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" id="submit">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal -->
            <div id="modalAktivitas" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Aktivitas</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Tanggal Awal</label>
                                <input type="date" name="tanggal_awal_worksheet" class="form-control" placeholder="Tanggal Awal">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input type="date" name="tanggal_akhir_worksheet" class="form-control" placeholder="Tanggal Akhir">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="submit">Submit</button>
                </div>
            </div>

        </div>
    </div>
    <?php require_once("header/footer.php"); ?>
</div>
</main>
<main class="hidden-xs hidden-sm hidden-md">
    <div class="content-page" style="min-height: 0px">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Page-Title -->
                <!-- Start Widget -->
                <div class="row"><br><br>
                    <div class="col-lg-3">
                        <div class="panel1 panel-default" style="background:#29b6f6">
                            <!-- <a href="?page=eec7e3026fc0eb5af67364365d98c221&kode=8c29be6a2c55f0d698f5193676ef1b7f"> -->
                            <a href="#" type="button" data-toggle="modal" data-target="#modalArusKasLarge">
                                <div class="panel-body">
                                    <center><i class="ion ion-ios-analytics" style="font-size:200px;color:white"></i> <h3 style="color:white">Laporan Arus Kas</h3></center>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="panel1 panel-default" style="background:#ec407a">
                            <!-- <a href="?page=7769c8dfb376a214ed0a52eb2b1346e7&kode=8c29be6a2c55f0d698f5193676ef1b7f"> -->
                            <a href="#" type="button" data-toggle="modal" data-target="#modalPosisiKeuanganLarge">
                                <div class="panel-body">
                                    <center><i class="ion ion-pinpoint" style="font-size:200px;color:white"></i> <h3 style="color:white">Laporan Posisi Keuangan</h3></center>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="panel1 panel-default" style="background:#ffd740">
                            <!-- <a href="?page=f8a92caddcb153912917c55e9064574e&kode=8c29be6a2c55f0d698f5193676ef1b7f"> -->
                            <a href="#" type="button" data-toggle="modal" data-target="#modalAktivitasLarge">
                                <div class="panel-body">
                                    <center><i class="ion ion-ios-pulse-strong" style="font-size:200px;color:white"></i> <h3 style="color:white">Laporan Aktivitas</h3></center>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End row-->
            </div> <!-- container -->
        </div> <!-- content -->
                                    <!-- Modal -->
                            <div id="modalArusKasLarge" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Laporan Arus Kas</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="?page=eec7e3026fc0eb5af67364365d98c221&kode=8c29be6a2c55f0d698f5193676ef1b7f" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select class="form-control" name="tahun" id="tahun_kas" required>
                                                  <option value="">Pilih Tahun</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select class="form-control" name="bulan" id="bulan_kas">
                                                  <option value="">Pilih Bulan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display:none">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Tanggal Awal</label>
                                                <input type="date" name="tanggal_awal_kas" class="form-control" placeholder="Tanggal Awal">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Tanggal Akhir</label>
                                                <input type="date" name="tanggal_akhir_kas" class="form-control" placeholder="Tanggal Akhir">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                                    </form>
                                </div>
                               <!--  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                     <button type="button" class="btn btn-success" id="submit">Submit</button>
                                </div> -->
                                                            </div>

                        </div>
                    </div>
                    <!-- Modal -->
                    <div id="modalPosisiKeuanganLarge" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Laporan Posisi Keuangan</h4>
                        </div>
                        <div class="modal-body">
                            <form action="?page=7769c8dfb376a214ed0a52eb2b1346e7&kode=8c29be6a2c55f0d698f5193676ef1b7f" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select class="form-control" name="tahun" id="tahun_keuangan" required>
                                          <option value="">Pilih Tahun</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select class="form-control" name="bulan" id="bulan_keuangan">
                                          <option value="">Pilih Bulan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display:none">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label>
                                        <input type="date" name="tanggal_awal_keuangan" class="form-control" placeholder="Tanggal Awal">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label>
                                        <input type="date" name="tanggal_akhir_keuangan" class="form-control" placeholder="Tanggal Akhir">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right" id="submit">Submit</button>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div> -->
                    </div>

                </div>
            </div>
            <!-- Modal -->
            <div id="modalAktivitasLarge" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Laporan Aktivitas</h4>
                </div>
                <div class="modal-body">
                            <form action="?page=f8a92caddcb153912917c55e9064574e&kode=8c29be6a2c55f0d698f5193676ef1b7f" method="POST">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                      <label>Tahun</label>
                                      <select class="form-control" name="tahun" id="tahun_aktivitas" required>
                                        <option value="">Pilih Tahun</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Bulan</label>
                                    <select class="form-control" name="bulan" id="bulan_aktivitas">
                                      <option value="">Pilih Bulan</option>
                                    </select>
                                  </div>
                              </div>
                            </div>
                            <div class="row" style="display:none">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label>
                                        <input type="date" name="tanggal_awal_aktivitas" class="form-control" placeholder="Tanggal Awal">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label>
                                        <input type="date" name="tanggal_akhir_aktivitas" class="form-control" placeholder="Tanggal Akhir">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right" id="submit">Submit</button>
                            </form>
                        </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="submit">Submit</button>
                </div> -->
            </div>

        </div>
    </div>
        <?php require_once('header/footer.php'); ?>
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

              var bulanList = {
                  "01" : "January",
                  "02" : "February",
                  "03" : "Maret",
                  "04" : "April",
                  "05" : "May",
                  "06" : "June",
                  "07" : "July",
                  "08" : "August",
                  "09" : "September",
                  "10" : "October",
                  "11" : "November",
                  "12" : "Desember"
              }

              var form_data = {
                aksi : 'all_json'
              }
              $.ajax({
                  type: "POST",
                  url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=getBuku",
                  data: form_data,
                  dataType: 'json',
                  success: function(response) {
                    console.log(response);
                    var min = (response[0].tahun_tutupBuku) - 5;
                    max = 2021;

                    var option = "<option value=''>Pilih Tahun</option> \n";
                    for (var i = min; i<=max; i++){
                      option += "<option value='"+i+"'>"+i+"</option> \n";
                      // select.appendChild(opt);
                    }
                    $("#tahun_kas").html(option);
                    $("#tahun_keuangan").html(option);
                    $("#tahun_aktivitas").html(option);
                  }
                });

                


                $('.dropdown-submenu a.test').on("click", function(e) {
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });

                $("#tahun_kas").change(function (e) {
                  var tahun = $(this).val();
                  var form_data = {
                    tahun : tahun,
                    aksi : 'all_json'
                  }

                  $.ajax({
                    type: "POST",
                    url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=getBuku",
                    data: form_data,
                    dataType: 'json',
                    success: function(response) {
                      // console.log(response.sort(compare));
                      response = response.sort(compare);
                      var option = "<option value=''>Pilih Bulan</option> \n";
                      $.each(response, function (index, value) {
                        if (tahun == value.tahun_tutupBuku) {
                          option += "<option value='"+value.bulan_tutupBuku+"'>"+bulanList[value.bulan_tutupBuku]+"</option> \n";
                        }
                      });

                      $("#bulan_kas").empty();
                      $("#bulan_kas").html(option);
                    }
                  });
                  
                });

                $("#tahun_keuangan").change(function (e) {
                  var tahun = $(this).val();
                  var form_data = {
                    tahun : tahun,
                    aksi : 'all_json'
                  }

                  $.ajax({
                    type: "POST",
                    url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=getBuku",
                    data: form_data,
                    dataType: 'json',
                    success: function(response) {
                      // console.log(response);
                      response = response.sort(compare);
                      var option = "<option value=''>Pilih Bulan</option> \n";
                      $.each(response, function (index, value) {
                        if (tahun == value.tahun_tutupBuku) {
                          option += "<option value='"+value.bulan_tutupBuku+"'>"+bulanList[value.bulan_tutupBuku]+"</option> \n";
                        }
                      });

                      $("#bulan_keuangan").empty();
                      $("#bulan_keuangan").html(option);
                    }
                  });
                  
                });

                $("#tahun_aktivitas").change(function (e) {
                  var tahun = $(this).val();
                  var form_data = {
                    tahun : tahun,
                    aksi : 'all_json'
                  }

                  $.ajax({
                    type: "POST",
                    url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=getBuku",
                    data: form_data,
                    dataType: 'json',
                    success: function(response) {
                      // console.log(response);
                      response = response.sort(compare);
                      var option = "<option value=''>Pilih Tahun</option> \n";
                      $.each(response, function (index, value) {
                        if (tahun == value.tahun_tutupBuku) {
                          option += "<option value='"+value.bulan_tutupBuku+"'>"+bulanList[value.bulan_tutupBuku]+"</option> \n";
                        }
                      });

                      $("#bulan_aktivitas").empty();
                      $("#bulan_aktivitas").html(option);
                    }
                  });
                  
                });
            });

            function compare(a, b) {
              if (a.bulan_tutupBuku < b.bulan_tutupBuku)
                  return -1;
              if (a.bulan_tutupBuku > b.bulan_tutupBuku)
                  return 1;
              return 0;
            }

        </script>
    </body>

    </html>