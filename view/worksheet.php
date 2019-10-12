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
      <main>
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
                           <li class="active"><span>Worksheet</span></li>
                        </ol>
                     </div>
                  </div>
                  <!-- Start Widget -->
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h3 class="panel-title">Worksheet
                               <button type="button" class="btn btn-default pull-right btn-sm" id="print">Print</button>
                            </h3>
                         </div>
                         <div class="panel-body" id="printDiv">
                           <div class="row">
                            <div class="judul_laporan">
                              <p class="cold-md-12" style="text-align: center;font-size: 24px;">
                               <b>KERTAS KERJA YAYASAN JAPFA<br>PERIODE : <?php echo date("d F Y",strtotime($_POST['tanggal_awal_worksheet']));?> s/d <?php echo date("d F Y",strtotime($_POST['tanggal_akhir_worksheet']));?>  
                               </b>
                            </p><br>
                         </div>
                         <div class="col-md-12 col-sm-12 col-xs-12" style="overflow-x:scroll;">
                           <table class="table table-striped table-bordered">
                              <thead>
                                 <tr>
                                    <th class="text-center" style="vertical-align: inherit;" rowspan="2">No</th>
                                    <th class="text-center" style="vertical-align: inherit;" rowspan="2">Nomor Rekening</th>
                                    <th class="text-center" style="vertical-align: inherit;" rowspan="2">Nama Akun</th>
                                    <th class="text-center" colspan="2" rowspan="1">Mutasi</th>
                                    <th class="text-center" colspan="2" rowspan="1">Neraca Saldo</th>
                                    <th class="text-center" colspan="2" rowspan="1">Ayat Jurnal Penyesuaian</th>
                                    <th class="text-center" colspan="2" rowspan="1">Neraca Saldo Disesuaikan</th>
                                 </tr>
                                 <tr>
                                    <th class="text-center">Debet (Rp)</th>
                                    <th class="text-center">Kredit (Rp)</th>
                                    <th class="text-center">Debet (Rp)</th>
                                    <th class="text-center">Kredit (Rp)</th>
                                    <th class="text-center">Debet (Rp)</th>
                                    <th class="text-center">Kredit (Rp)</th>
                                    <th class="text-center">Debet (Rp)</th>
                                    <th class="text-center">Kredit (Rp)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php if (empty($list)) {
                                    ?>
                                    <tr class="text-center">
                                     <td colspan="8" class="text-center">Data Kosong</td>
                                  </tr>
                                  <?php }else{
                                    $no = 1;
                                    foreach ($list as $ws) : ?>
                                    <tr class="text-center">
                                     <?php
                                        $total_debit =  $ws['dm_debit_nilai'] + $ws['dk_debit_nilai'] + $ws['j_debit_nilai'];
                                        $total_kredit = $ws['dm_kredit_nilai'] + $ws['dk_kredit_nilai'] + $ws['j_kredit_nilai'];

                                        if (substr($ws['koderekening'], 0, 1) == "3") {
                                          $total_kredit = $total_debit + $total_kredit;
                                          $total_debit = 0;
                                        }

                                        $nilai_neraca_saldo = $ws['saldoawal'] + ($total_debit - $total_kredit);
                                        $debit_neraca_saldo = 0;
                                        $kredit_neraca_saldo = 0;

                                        if ($nilai_neraca_saldo < 0) 
                                          $kredit_neraca_saldo = abs($nilai_neraca_saldo);
                                        else 
                                          $debit_neraca_saldo = $nilai_neraca_saldo;
                                        

                                        $nilai_jurnal_disesuaikan = (($debit_neraca_saldo + $kredit_neraca_saldo) + $ws['j_debit_nilai']) - $ws['j_kredit_nilai'];
                                        $debit_jurnal_disesuaikan = 0;
                                        $kredit_jurnal_disesuaikan = 0;

                                        if ($nilai_jurnal_disesuaikan < 0) 
                                          $kredit_jurnal_disesuaikan = abs($nilai_jurnal_disesuaikan);
                                        else 
                                          $debit_jurnal_disesuaikan = $nilai_jurnal_disesuaikan;
                                        
                                        
                                        
                                     ?>
                                     <td><?= $no ?>.</td>
                                     <td>
                                        <?php if ($ws['typerekening'] == "besar") : ?>
                                         <span style="background-color:aqua"><?= $ws['koderekening'] ?></span>
                                        <?php else : ?>
                                         <span style="background-color:yellow"><?= $ws['koderekening'] ?></span>
                                        <?php endif; ?>                                        
                                     </td>
                                     <td><?= $ws['uraian_koderekening'] ?></td>
                                     <td><?= number_format($ws['dm_debit_nilai'] + $ws['dk_debit_nilai'] + $ws['j_debit_nilai'],2,",",".") ?></td>
                                     <td><?= number_format($ws['dm_kredit_nilai'] + $ws['dk_kredit_nilai'] + $ws['j_kredit_nilai'],2,",",".") ?></td>
                                     <td><?= number_format($debit_neraca_saldo,2,",",".") ?></td>
                                     <td><?= number_format($kredit_neraca_saldo,2,",",".") ?></td>
                                     <td><?= number_format($ws['j_debit_nilai'],2,",",".") ?></td>
                                     <td><?= number_format($ws['j_kredit_nilai'],2,",",".") ?></td>
                                     <td><?= number_format($debit_jurnal_disesuaikan,2,",",".") ?></td>
                                     <td><?= number_format($kredit_jurnal_disesuaikan,2,",",".") ?></td>
                                  </tr>
                               <?php $no++; endforeach; }?>
                            </tbody>
                         </table>
                      </div>
                      <div>
                        <div>
                                       <!-- <pre>
                                          <?php 
                                             var_dump($list);
                                          ?>
                                       </pre> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- .form -->
                        </div>
                        <!-- panel-body -->
                     </div>
                     <!-- panel -->
                  </div>
                  <!-- col -->
               </div>
               <!-- End row -->
               <!-- end tambah dana masuk -->
            </div>               
            <!-- container -->
            <?php require_once("header/footer.php"); ?>
         </div>
         <!-- content -->
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
   <!-- money masked -->
   <script src="assets/jquery.maskMoney.min.js"></script>
   <script src="assets/autoNumeric-2.0-BETA.js" type="text/javascript"></script>
   <link rel="stylesheet" href="assets/jquery.ui.css">
      <!-- <script src="js/jquery.js"></script>
         <script src="js/jquery-1.7.2.js"></script>-->
         <script src="ui/jquery.ui.core.js"></script>
         <script src="ui/jquery.ui.widget.js"></script>
         <script src="ui/jquery.ui.datepicker.js"></script>
         <script type="text/javascript" src="https://cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
         <script src="https://cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>
         <style>
         .datepicker{z-index:1151;}
      </style>
   </body>
   <script type="text/javascript">
     (function(){
       var 
       form = $('#printDiv'),
       cache_width = form.width(),
    a4  =[ 595.28,  841.89];  // for a4 size paper width and height

    $('#print').on('click',function(){
       $('#printDiv').scrollTop(0);
       createPDF();
    });
//create pdf
function createPDF(){
  getCanvas().then(function(canvas){
    var 
    img = canvas.toDataURL("image/png"),
    doc = new jsPDF({
     unit:'px', 
     format:'a4'
  });     
    doc.addImage(img, 'JPEG', 20, 20);
    doc.save('Worksheet Yayasan Japfa.pdf');
    form.width(cache_width);
 });
}

// create canvas object
function getCanvas(){
  form.width((a4[0]*1.33333) -80).css('max-width','none');
  return html2canvas(form,{
    imageTimeout:2000,
    removeContainer:true
 }); 
}

}());
     var f = new Date();
     document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());

  </script>
  </html>