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
              <li class="active"><span>Tutup Buku</span></li>
            </ol>
          </div>
        </div><br>
        <!-- Start Widget -->
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title">Tutup Buku</h3>
              </div>
              <div class="panel-body">
                <div class=" form">
                  <!-- table edit -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <form action="" class="cmxform form-horizontal tasi-form">
                            <div class="form-group">
                              <label for="cemail" class="control-label col-lg-2">Bulan</label>
                              <div class="col-lg-6">
                                <select class="form-control" name="bulan">
                                  <option hidden="">Pilih Bulan</option>
                                  <option value="01">Januari</option>
                                  <option value="02">Februari</option>
                                  <option value="03">Maret</option>
                                  <option value="04">April</option>
                                  <option value="05">Mei</option>
                                  <option value="06">Juni</option>
                                  <option value="07">Juli</option>
                                  <option value="08">Agustus</option>
                                  <option value="09">September</option>
                                  <option value="10">Oktober</option>
                                  <option value="11">November</option>
                                  <option value="12">Desember</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group ">
                              <label class="control-label col-lg-2">Tahun</label>
                              <div class="col-lg-6">
                                <input type="number" min="2015" max="2030" name="tahun" class="form-control" value="<?= date("Y"); ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <button type="button" id="simpan_user" class="btn btn-success">Simpan</button>
                              </div>
                            </div>
                          </form>
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <table id="datatable1" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <!-- <th>No.</th> -->
                                    <th>No.</th>
                                    <th>Target Tutup Buku</th>
                                    <th>Petugas</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                  $no = 1; 
                                  foreach($list as $data){
                                    if ($data['bulan_tutupBuku'] == '01') {
                                      $bulan = "Januari";
                                    }else if ($data['bulan_tutupBuku'] == '02') {
                                      $bulan = "Februari";
                                    }else if ($data['bulan_tutupBuku'] == '03') {
                                      $bulan = "Maret";
                                    }else if ($data['bulan_tutupBuku'] == '04') {
                                      $bulan = "April";
                                    }else if ($data['bulan_tutupBuku'] == '05') {
                                      $bulan = "Mei";
                                    }else if ($data['bulan_tutupBuku'] == '06') {
                                      $bulan = "Juni";
                                    }else if ($data['bulan_tutupBuku'] == '07') {
                                      $bulan = "Juli";
                                    }else if ($data['bulan_tutupBuku'] == '08') {
                                      $bulan = "Agustus";
                                    }else if ($data['bulan_tutupBuku'] == '09') {
                                      $bulan = "September";
                                    }else if ($data['bulan_tutupBuku'] == '10') {
                                      $bulan = "Oktober";
                                    }else if ($data['bulan_tutupBuku'] == '11') {
                                      $bulan = "November";
                                    }else if ($data['bulan_tutupBuku'] == '12') {
                                      $bulan = "Desember";
                                    }
                                    ?>
                                    <tr>
                                      <td><?php echo $no++;?></td>
                                      <td><?php echo $bulan; ?> <?php echo $data['tahun_tutupBuku']; ?></td>
                                      <td><?php echo $data['petugas']; ?></td>
                                      <td><a onclick="hapus(<?php echo $data['id_tutupBuku'];?>)" style="cursor:pointer" class="on-default remove-row"><i class="md md-delete"></i></a></td>
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
                  </div> <!-- .form -->
                </div> <!-- panel-body -->
              </div> <!-- panel -->
            </div> <!-- col -->
          </div> <!-- End row -->
        </div> <!-- container -->
      </div> <!-- content -->
      <?php require_once("header/footer.php"); ?>
    </div>
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable1').dataTable();
      $("#simpan_user").click(function(){
        var bulan = $("select[name='bulan']").val();
        var tahun = $("input[name='tahun']").val();
        var petugas = "<?php echo $_SESSION['f658f7a22761210065c7ae4211aab09b'];?>";
        console.log(bulan, tahun, petugas);
        $.ajax({
          type: "POST",
          url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=tutupBuku",
          data: {aksi:"insert", bulan:bulan, tahun:tahun, petugas:petugas},
          success: function(msg) {
            if (msg === 'success') {
              swal ( "Success" ,  "Berhasil Tutup Buku" ,  "success" );
              location.reload();
            }else if(msg === 'kosong'){
              swal ( "Oops" ,  "Inputan Masih Ada Yang Kosong !" ,  "warning" )
            }else if(msg === 'error'){
              swal ( "Oops" ,  "Buku Sudah Ditutup Pada Bulan dan Tahun Tersebut!" ,  "error" )
            }
          }
        });
      });
    });
  </script>
  <script type="text/javascript">
      function hapus(id_tutupBuku) {
    var result = confirm("Want to delete?");
        
    if (result) {
        $.ajax({
          type: "POST",
          url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=tutupBuku",
          data: 'aksi=hapus' + '&id_tutupBuku=' + "<?php echo $data['id_tutupBuku'];?>",
          success: function(msg) {
            swal ( "Success" ,  "Data Berhasil Dihapus" ,  "success" );
            location.reload();
          }
        });
      }
      }
  </script>
</body>
</html>