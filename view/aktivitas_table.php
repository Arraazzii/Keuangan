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
      <script src="js/modernizr.min.js"></script>
   </head>
   <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">
         <?php require_once("header/header.php"); ?>
         <!-- ============================================================== -->
         <!-- Start right Content here -->
         <!-- ============================================================== -->
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
                              <li><a href="?page=laporan">Laporan</a></li>
                              <li class="active"><span>Laporan Aktivitas</span></li>
                           </ol>
                        </div>
                        <div class="col-sm-12">
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h3 class="panel-title">Laporan Aktivitas
                                    <button type="button" class="btn btn-default pull-right btn-sm" id="print">Print</button>
                                 </h3>
                              </div>
                              <div class="panel-body" id="printDiv">
                                 <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                       <div class="judul_laporan">
                                          <p class="cold-md-12" style="text-align: center;font-size: 24px;">
                                            <?php
                                              $bulan = $_POST['bulan'];
                                              $tahun = $_POST['tahun'];
                                              $tglAwal = $tahun."-".$bulan."-01";
                                              $tglAkhir = date("Y-m-t", strtotime($tglAwal));
                                              if (!empty($bulan) && !empty($tahun)) {
                                                $tglAwal = $tahun."-".$bulan."-01";
                                                $tglAkhir = date("Y-m-t", strtotime($tglAwal));
                                              }

                                              if (!empty($tahun) && empty($bulan)) {
                                                $tglAwal = $tahun."-01-01";
                                                $tglAkhir = date("Y-m-t", strtotime($tahun."-12-01"));
                                              }
                                            ?>
                                             <b>YAYASAN JAPFA<br>LAPORAN AKTIVITAS<br>PERIODE : <?php echo date("d F Y",strtotime($tglAwal));?> s/d <?php echo date("d F Y",strtotime($tglAkhir));?> 
                                             </b>
                                          </p>
                                       </div>
                                       <!-- table edit -->
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="panel panel-default">
                                                <div class="panel-body">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>Tidak Terikat (Rp.)</b></p>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>Terikat Sementara (Rp.)</b></p>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>Terikat Permanen (Rp.)</b></p>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>TOTAL (Rp.)</b></p>
                                                            <br>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 18px">
                                                         <p><b>PENERIMANAAN</b></p>
                                                         <p style="font-size: 16px"><b>PENDAPATAN, PENGHASILAN</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <table id="" class="table  ">
                                                            <tbody id="tbody">
                                                               <?php
                                                                  $total_penerimaan = 0;
                                                                  $total_penerimaan_pendapatan = 0;
                                                                  $total_penerimaan_berakhir = 0;
                                                                  $total_penerimaan_pendapatan_tidak_terikat = 0;
                                                                  $total_penerimaan_pendepatan_terikat_sementara = 0;
                                                                  $total_penerimaan_pendapatan_terikat_permanen = 0;
                                                                  $total_penerimaan_berakhir_tidak_terikat = 0;
                                                                  $total_penerimaan_berakhir_terikat_sementara = 0;
                                                                  $total_penerimaan_berakhir_terikat_permanen = 0;
                                                                  
                                                                  
                                                                  
                                                                  $total_pengeluaran = 0;
                                                                  $total_pengeluaran_program = 0;
                                                                  $total_pengeluaran_umum = 0;
                                                                  $total_pengeluaran_pencarian = 0;
                                                                  
                                                                  $total_pengeluaran_program_tidak_terikat = 0;
                                                                  $total_pengeluaran_program_terikat_sementara = 0;
                                                                  $total_pengeluaran_program_terikat_permanen = 0;
                                                                  
                                                                  $total_pengeluaran_umum_tidak_terikat = 0;
                                                                  $total_pengeluaran_umum_terikat_sementara = 0;
                                                                  $total_pengeluaran_umum_terikat_permanen = 0;
                                                                  
                                                                  $total_pengeluaran_pencarian_tidak_terikat = 0;
                                                                  $total_pengeluaran_pencarian_terikat_sementara = 0;
                                                                  $total_pengeluaran_pencarian_terikat_permanen = 0;
                                                                  for($i = 0; $i < count($list1); $i++){
                                                                      echo "<tr>";
                                                                      echo "<td class='col-md-4'>".$list1[$i][2]."</td>";
                                                                      if($list1[$i][4] == 'Tidak Terikat'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list1[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list1[$i][5],2)."</td>";
                                                                          $total_penerimaan_pendapatan_tidak_terikat = $total_penerimaan_pendapatan_tidak_terikat + $list1[$i][5];
                                                                      }
                                                                      else if($list1[$i][4] == 'Terikat Sementara'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list1[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list1[$i][5],2)."</td>";
                                                                          $total_penerimaan_pendepatan_terikat_sementara = $total_penerimaan_pendepatan_terikat_sementara + $list1[$i][5];
                                                                      }
                                                                      else if($list1[$i][4] == 'Terikat Permanen'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list1[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list1[$i][5],2)."</td>";
                                                                          $total_penerimaan_pendapatan_terikat_permanen = $total_penerimaan_pendapatan_terikat_permanen + $list1[$i][5];
                                                                      }
                                                                      echo "</tr>";
                                                                      $total_penerimaan_pendapatan = $total_penerimaan_pendapatan + $list1[$i][5];
                                                                      $total_penerimaan = $total_penerimaan + $total_penerimaan_pendapatan;
                                                                  }
                                                                  ?>
                                                            </tbody>
                                                         </table>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Pendapatan</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_pendapatan_tidak_terikat,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_pendepatan_terikat_sementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_pendapatan_terikat_permanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_pendapatan,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 16px">
                                                         <p><b>AKTIVA BERSIH YANG BERAKHIR BATASNYA</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <table id="" class="table  ">
                                                            <tbody id="tbody">
                                                               <?php
                                                                  for($i = 0; $i < count($list3); $i++){
                                                                      echo "<tr>";
                                                                      echo "<td class='col-md-4'>".$list3[$i][2]."</td>";
                                                                      if($list3[$i][4] == 'Tidak Terikat'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list3[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list3[$i][5],2)."</td>";
                                                                          $total_penerimaan_berakhir_tidak_terikat = $total_penerimaan_berakhir_tidak_terikat + $list3[$i][5];
                                                                      }
                                                                      else if($list3[$i][4] == 'Terikat Sementara'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list3[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list3[$i][5],2)."</td>";
                                                                          $total_penerimaan_berakhir_terikat_sementara = $total_penerimaan_berakhir_terikat_sementara + $list3[$i][5];
                                                                      }
                                                                      else if($list3[$i][4] == 'Terikat Permanen'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list3[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list3[$i][5],2)."</td>";
                                                                          $total_penerimaan_berakhir_terikat_permanen = $total_penerimaan_berakhir_terikat_permanen + $list3[$i][5];
                                                                      }
                                                                      echo "</tr>";
                                                                      $total_penerimaan_berakhir = $total_penerimaan_berakhir + $list3[$i][5];
                                                                      $total_penerimaan = $total_penerimaan + $total_penerimaan_berakhir;
                                                                  }
                                                                  ?>
                                                            </tbody>
                                                         </table>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Aktiva Bersih yang Berakhir Batasannya</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir_tidak_terikat,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir_terikat_sementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir_terikat_permanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>TOTAL PENERIMAAN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir_tidak_terikat + $total_penerimaan_pendapatan_tidak_terikat,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir_terikat_sementara + $total_penerimaan_pendepatan_terikat_sementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir_terikat_permanen + $total_penerimaan_pendapatan_terikat_permanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_penerimaan_berakhir + $total_penerimaan_pendapatan,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 14px">
                                                         <p style="font-size: 18px"><b>PENGELUARAN</b></p>
                                                         <p><b>BIAYA PROGRAM</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <table id="" class="table  ">
                                                            <tbody id="tbody">
                                                               <?php
                                                                  for($i = 0; $i < count($list4); $i++){
                                                                      echo "<tr>";
                                                                      echo "<td class='col-md-4'>".$list4[$i][2]."</td>";
                                                                      if($list4[$i][4] == 'Tidak Terikat'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list4[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list4[$i][5],2)."</td>";
                                                                          $total_pengeluaran_program_tidak_terikat = $total_pengeluaran_program_tidak_terikat + $list4[$i][5];
                                                                      }
                                                                      else if($list4[$i][4] == 'Terikat Sementara'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list4[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list4[$i][5],2)."</td>";
                                                                          $total_pengeluaran_program_terikat_sementara = $total_pengeluaran_program_terikat_sementara + $list4[$i][5];
                                                                      }
                                                                      else if($list4[$i][4] == 'Terikat Permanen'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list4[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list4[$i][5],2)."</td>";
                                                                          $total_pengeluaran_program_terikat_permanen = $total_pengeluaran_program_terikat_permanen + $list4[$i][5];
                                                                      }
                                                                      echo "</tr>";
                                                                      $total_pengeluaran_program = $total_pengeluaran_program + $list4[$i][5];
                                                                      $total_pengeluaran = $total_pengeluaran + $total_pengeluaran_program;
                                                                  }
                                                                  ?>
                                                            </tbody>
                                                         </table>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Biaya Program</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program_tidak_terikat,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program_terikat_sementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program_terikat_permanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 14px">
                                                         <p><b>BIAYA UMUM & ADMINISTRASI</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <table id="" class="table ">
                                                            <tbody id="tbody">
                                                               <?php
                                                                  for($i = 0; $i < count($list6); $i++){
                                                                      echo "<tr>";
                                                                      echo "<td class='col-md-4'>".$list6[$i][2]."</td>";
                                                                      if($list6[$i][4] == 'Tidak Terikat'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list6[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list6[$i][5],2)."</td>";
                                                                          $total_pengeluaran_umum_tidak_terikat = $total_pengeluaran_umum_tidak_terikat + $list6[$i][5];
                                                                      }
                                                                      else if($list6[$i][4] == 'Terikat Sementara'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list6[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list6[$i][5],2)."</td>";
                                                                          $total_pengeluaran_umum_terikat_sementara = $total_pengeluaran_umum_terikat_sementara + $list6[$i][5];
                                                                      }
                                                                      else if($list6[$i][4] == 'Terikat Permanen'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list6[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list6[$i][5],2)."</td>";
                                                                          $total_pengeluaran_umum_terikat_permanen = $total_pengeluaran_umum_terikat_permanen + $list6[$i][5];
                                                                      }
                                                                      echo "</tr>";
                                                                      $total_pengeluaran_umum = $total_pengeluaran_umum + $list6[$i][5];
                                                                      $total_pengeluaran = $total_pengeluaran + $total_pengeluaran_umum;
                                                                  }
                                                                  ?>
                                                            </tbody>
                                                         </table>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Biaya Umum & Administrasi</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_umum_tidak_terikat,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_umum_terikat_sementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_umum_terikat_permanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_umum,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 14px">
                                                         <p><b>BIAYA PENCARIAN DANA</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <table id="" class="table ">
                                                            <tbody id="tbody">
                                                               <?php
                                                                  for($i = 0; $i < count($list7); $i++){
                                                                      echo "<tr>";
                                                                      echo "<td class='col-md-4'>".$list7[$i][2]."</td>";
                                                                      if($list7[$i][4] == 'Tidak Terikat'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list7[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list7[$i][5],2)."</td>";
                                                                          $total_pengeluaran_pencarian_tidak_terikat = $total_pengeluaran_pencarian_tidak_terikat + $list7[$i][5];
                                                                      }
                                                                      else if($list7[$i][4] == 'Terikat Sementara'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list7[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list7[$i][5],2)."</td>";
                                                                          $total_pengeluaran_pencarian_terikat_sementara = $total_pengeluaran_pencarian_terikat_sementara + $list7[$i][5];
                                                                      }
                                                                      else if($list7[$i][4] == 'Terikat Permanen'){
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format(0,2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list7[$i][5],2)."</td>";
                                                                          echo "<td class='col-md-2' style='text-align: right;'>".number_format($list7[$i][5],2)."</td>";
                                                                          $total_pengeluaran_pencarian_terikat_permanen = $total_pengeluaran_pencarian_terikat_permanen + $list7[$i][5];
                                                                      }
                                                                      echo "</tr>";
                                                                      $total_pengeluaran_pencarian = $total_pengeluaran_pencarian + $list7[$i][5];
                                                                      $total_pengeluaran = $total_pengeluaran + $total_pengeluaran_pencarian;
                                                                  }
                                                                  ?>
                                                            </tbody>
                                                         </table>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Biaya Pencarian Dana</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_pencarian_tidak_terikat,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_pencarian_terikat_sementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_pencarian_terikat_permanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_pencarian,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>TOTAL PENGELUARAN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program_tidak_terikat + $total_pengeluaran_umum_tidak_terikat + $total_pengeluaran_pencarian_tidak_terikat,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program_terikat_sementara + $total_pengeluaran_umum_terikat_sementara + $total_pengeluaran_pencarian_terikat_sementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program_terikat_permanen + $total_pengeluaran_umum_terikat_permanen + $total_pengeluaran_pencarian_terikat_permanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format($total_pengeluaran_program + $total_pengeluaran_umum + $total_pengeluaran_pencarian,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>PERUBAHAN AKTIVA BERSIH</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir_tidak_terikat + $total_penerimaan_pendapatan_tidak_terikat)-($total_pengeluaran_program_tidak_terikat + $total_pengeluaran_umum_tidak_terikat + $total_pengeluaran_pencarian_tidak_terikat),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir_terikat_sementara + $total_penerimaan_pendepatan_terikat_sementara
                                                               )+($total_pengeluaran_program_terikat_sementara + $total_pengeluaran_umum_terikat_sementara + $total_pengeluaran_pencarian_terikat_sementara),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir_terikat_permanen + $total_penerimaan_pendapatan_terikat_permanen)+($total_pengeluaran_program_terikat_permanen + $total_pengeluaran_umum_terikat_permanen + $total_pengeluaran_pencarian_terikat_permanen),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir + $total_penerimaan_pendapatan)+($total_pengeluaran_program + $total_pengeluaran_umum + $total_pengeluaran_pencarian),2);?> </b></p>
                                                            <br>
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>AKTIVA BERSIH AWAL TAHUN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(0,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(0,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(0,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(0,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>AKTIVA BERSIH AKHIR TAHUN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir_tidak_terikat + $total_penerimaan_pendapatan_tidak_terikat)-($total_pengeluaran_program_tidak_terikat + $total_pengeluaran_umum_tidak_terikat + $total_pengeluaran_pencarian_tidak_terikat),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir_terikat_sementara + $total_penerimaan_pendepatan_terikat_sementara
                                                               )+($total_pengeluaran_program_terikat_sementara + $total_pengeluaran_umum_terikat_sementara + $total_pengeluaran_pencarian_terikat_sementara),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir_terikat_permanen + $total_penerimaan_pendapatan_terikat_permanen)+($total_pengeluaran_program_terikat_permanen + $total_pengeluaran_umum_terikat_permanen + $total_pengeluaran_pencarian_terikat_permanen),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($total_penerimaan_berakhir + $total_penerimaan_pendapatan)+($total_pengeluaran_program + $total_pengeluaran_umum + $total_pengeluaran_pencarian),2);?> </b></p>
                                                            <br>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 2px black">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- End Row -->
                                       <!-- akhir table -->
                                    </form>
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
                  </div>
                  <!-- container -->
               </div>
               <!-- content -->
               <?php require_once("header/footer.php"); ?>
            </div>
         </main>
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
                              <li><a href="?page=laporan">Laporan</a></li>
                              <li class="active"><span>Laporan Aktivitas</span></li>
                           </ol>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h3 class="panel-title">Laporan Aktivitas
                                    <button type="button" class="btn btn-default pull-right btn-sm" id="print1">Print</button>
                                 </h3>
                              </div>
                              <div class="panel-body" id="print2">
                                 <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                       <div class="judul_laporan">
                                          <p class="cold-md-12" style="text-align: center;font-size: 24px;">
                                             <?php
                                              $bulan = $_POST['bulan'];
                                              $tahun = $_POST['tahun'];
                                              $tglAwal = $tahun."-".$bulan."-01";
                                              $tglAkhir = date("Y-m-t", strtotime($tglAwal));
                                              if (!empty($bulan) && !empty($tahun)) {
                                                $tglAwal = $tahun."-".$bulan."-01";
                                                $tglAkhir = date("Y-m-t", strtotime($tglAwal));
                                              }

                                              if (!empty($tahun) && empty($bulan)) {
                                                $tglAwal = $tahun."-01-01";
                                                $tglAkhir = date("Y-m-t", strtotime($tahun."-12-01"));
                                              }
                                            ?>
                                             <b>YAYASAN JAPFA<br>LAPORAN AKTIVITAS<br>PERIODE : <?php echo date("d F Y",strtotime($tglAwal));?> s/d <?php echo date("d F Y",strtotime($tglAkhir));?> 
                                             </b>
                                          </p>
                                       </div>
                                       <!-- table edit -->
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="panel panel-default">
                                                <div class="panel-body">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>Tidak Terikat (Rp.)</b></p>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>Terikat Sementara (Rp.)</b></p>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>Terikat Permanen (Rp.)</b></p>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <p style="text-align: center"><b>TOTAL (Rp.)</b></p>
                                                            <br>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 18px">
                                                         <p><b>PENERIMANAAN</b></p>
                                                         <p style="font-size: 16px"><b>PENDAPATAN, PENGHASILAN</b></p>
                                                      </div>
                                                      <!-- <?php //echo "<pre>"; var_dump($listAll);?> -->
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Sumbangan / Hibah</b></p>
                                                                  <?php
                                                                     foreach ($listAll as $listAktivitas) {
                                                                         if ($listAktivitas['jenis'] == "Sumbangan Hibah"){ 
                                                                           $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  </tr>
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Penghasilan Bunga Jasa Giro</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Penghasilan Bunga Jasa Giro") { 
                                                                      $listAktivitas[5] = abs($listAktivitas[5]);     
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444; margin-top: 5px;"><b>Penghasilan Investasi Jangka Panjang</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Penghasilan Investasi Jangka Panjang") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } } ?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Pendapatan Lain-lain</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Pendapatan Lain-lain") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Pendapatan</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $tidakterkait = 0;
                                                               foreach ($listAll as $uang) {
                                                                   if ($uang['status'] == "Tidak Terikat") {
                                                                       if ($uang['jenis'] == "Pendapatan Lain-lain" || $uang['jenis'] == "Sumbangan Hibah" || $uang['jenis'] == "Penghasilan Bunga Jasa Giro" || $uang['jenis'] == "Penghasilan Investasi Jangka Panjang") {
                                                                           $tidakterkait += abs($uang[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($tidakterkait,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitsementara = 0;
                                                               foreach ($listAll as $uang) {
                                                                   if ($uang['status'] == "Terikat Sementara") {
                                                                       if ($uang['jenis'] == "Pendapatan Lain-lain" || $uang['jenis'] == "Sumbangan Hibah" || $uang['jenis'] == "Penghasilan Bunga Jasa Giro" || $uang['jenis'] == "Penghasilan Investasi Jangka Panjang") {
                                                                           $terkaitsementara += abs($uang[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitsementara,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitpermanen = 0;
                                                               foreach ($listAll as $uang) {
                                                                   if ($uang['status'] == "Terikat Permanen") {
                                                                       if ($uang['jenis'] == "Pendapatan Lain-lain" || $uang['jenis'] == "Sumbangan Hibah" || $uang['jenis'] == "Penghasilan Bunga Jasa Giro" || $uang['jenis'] == "Penghasilan Investasi Jangka Panjang") {
                                                                           $terkaitpermanen += abs($uang[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitpermanen,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $total = 0;
                                                               foreach ($listAll as $uang) {
                                                                   if ($uang['jenis'] == "Pendapatan Lain-lain" || $uang['jenis'] == "Sumbangan Hibah" || $uang['jenis'] == "Penghasilan Bunga Jasa Giro" || $uang['jenis'] == "Penghasilan Investasi Jangka Panjang") {
                                                                       $total += abs($uang[5]);
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($total,2);?>  </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 16px">
                                                         <p><b>AKTIVA BERSIH YANG BERAKHIR BATASNYA</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Berakhir Karena Program</b></p>
                                                                  <?php
                                                                     foreach ($listAll as $listAktivitas) {
                                                                         if ($listAktivitas['jenis'] == "Berakhir Karena Program"){ 
                                                                           $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  </tr>
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Berakhir Karena Waktu</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Berakhir Karena Waktu") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Aktiva Bersih yang Berakhir Batasannya</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $tidakterkaits = 0;
                                                               foreach ($listAll as $uangt) {
                                                                   if ($uangt['status'] == "Tidak Terikat") {
                                                                       if ($uangt['jenis'] == "Berakhir Karena Program" || $uangt['jenis'] == "Berakhir Karena Waktu") {
                                                                           $tidakterkaits += abs($uangt[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($tidakterkaits,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitsementaras = 0;
                                                               foreach ($listAll as $uanga) {
                                                                   if ($uanga['status'] == "Terikat Sementara") {
                                                                       if ($uanga['jenis'] == "Berakhir Karena Program" || $uanga['jenis'] == "Berakhir Karena Waktu") {
                                                                           $terkaitsementaras += abs($uanga[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitsementaras,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitpermanens = 0;
                                                               foreach ($listAll as $uangs) {
                                                                   if ($uangs['status'] == "Terikat Permanen") {
                                                                       if ($uangs['jenis'] == "Berakhir Karena Program" || $uangs['jenis'] == "Berakhir Karena Waktu") {
                                                                           $terkaitpermanens += abs($uangs[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitpermanens,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $totalakt = 0;
                                                               foreach ($listAll as $uangakt) {
                                                                   if ($uangakt['jenis'] == "Berakhir Karena Program" || $uangakt['jenis'] == "Berakhir Karena Waktu") {
                                                                       $totalakt += abs($uangakt[5]);
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($totalakt,2);?>  </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                         <br><br><br><br>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>TOTAL PENERIMAAN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $tidakterkaitkur = abs($tidakterkaits + $tidakterkait); echo number_format($tidakterkaitkur,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $terkaitsementarakur = abs($terkaitsementara + $terkaitsementaras); echo number_format($terkaitsementarakur,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $terkaitpermanenkur =abs( $terkaitpermanen + $terkaitpermanens); echo number_format($terkaitpermanenkur,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $totalkur = abs($total + $totalakt); echo number_format($totalkur,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8 col-md-offset-4">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 14px">
                                                         <p style="font-size: 18px"><b>PENGELUARAN</b></p>
                                                         <p><b>BIAYA PROGRAM</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Progam Bantuan Pendidikan & Beasiswa</b></p>
                                                                  <?php
                                                                     foreach ($listAll as $listAktivitas) {
                                                                         if ($listAktivitas['jenis'] == "Progam Bantuan Pendidikan Beasiswa"){ 
                                                                           $listAktivitas[5] = abs($listAktivitas[5]);
                                                                      ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  </tr>
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Pengembangan SD</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Pengembangan SD") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444; margin-top: 5px;"><b>Program Pengembangan SMK</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Pengembangan SMK") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } } ?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Pengembangan Pesantren</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Pengembangan Pesantren") { 
                                                                        $listAktivitas[5] = abs($listAktivitas[5]);     
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Pengembangan/Perbaikan Gedung Sekolah</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Perbaikan Gedung Sekolah") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Perbaikan Gizi</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Perbaikan Gizi") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program COSI (Pemberdayaan Masyarakat)</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program COSI") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                          <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Investasi Sosial</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Investasi Sosial") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Olahraga</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Olahraga") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Bantuan Bencana Alam</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Bantuan Bencana Alam") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Program Lainnya</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Program Lainnya") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>


                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total Biaya Program</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $tidakterkait2 = 0;
                                                               foreach ($listAll as $uang2) {
                                                                   if ($uang2['status'] == "Tidak Terikat") {
                                                                       if ($uang2['jenis'] == "Progam Bantuan Pendidikan Beasiswa" || $uang2['jenis'] == "Program Pengembangan SD" || $uang2['jenis'] == "Program Pengembangan SMK" || $uang2['jenis'] == "Program Pengembangan Pesantren" || $uang2['jenis'] == "Program Perbaikan Gedung Sekolah" || $uang2['jenis'] == "Program Investasi Sosial" || $uang2['jenis'] == "Program Perbaikan Gizi" || $uang2['jenis'] == "Program COSI" || $uang2['jenis'] == "Program Olahraga" || $uang2['jenis'] == "Program Bantuan Bencana Alam" || $uang2['jenis'] == "Program Lainnya") {
                                                                           $tidakterkait2 += abs($uang2[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($tidakterkait2,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitsementara2 = 0;
                                                               foreach ($listAll as $uang22) {
                                                                   if ($uang22['status'] == "Terikat Sementara") {
                                                                       if ($uang22['jenis'] == "Progam Bantuan Pendidikan Beasiswa" || $uang22['jenis'] == "Program Pengembangan SD" || $uang22['jenis'] == "Program Pengembangan SMK" || $uang22['jenis'] == "Program Pengembangan Pesantren" || $uang22['jenis'] == "Program Perbaikan Gedung Sekolah" || $uang22['jenis'] == "Program Investasi Sosial" || $uang22['jenis'] == "Program Perbaikan Gizi" || $uang22['jenis'] == "Program COSI" || $uang22['jenis'] == "Program Olahraga" || $uang22['jenis'] == "Program Bantuan Bencana Alam" || $uang22['jenis'] == "Program Lainnya") {
                                                                           $terkaitsementara2 += abs($uang22[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitsementara2,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitpermanen2 = 0;
                                                               foreach ($listAll as $uang222) {
                                                                   if ($uang222['status'] == "Terikat Permanen") {
                                                                       if ($uang222['jenis'] == "Progam Bantuan Pendidikan Beasiswa" || $uang222['jenis'] == "Program Pengembangan SD" || $uang222['jenis'] == "Program Pengembangan SMK" || $uang222['jenis'] == "Program Pengembangan Pesantren" || $uang222['jenis'] == "Program Perbaikan Gedung Sekolah" || $uang222['jenis'] == "Program Investasi Sosial" || $uang222['jenis'] == "Program Perbaikan Gizi" || $uang222['jenis'] == "Program COSI" || $uang222['jenis'] == "Program Olahraga" || $uang222['jenis'] == "Program Bantuan Bencana Alam" || $uang222['jenis'] == "Program Lainnya") {
                                                                           $terkaitpermanen22 += abs($uang222[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitpermanen2,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $total2 = 0;
                                                               foreach ($listAll as $uang2222) {
                                                                   if ($uang2222['jenis'] == "Progam Bantuan Pendidikan Beasiswa" || $uang2222['jenis'] == "Program Pengembangan SD" || $uang2222['jenis'] == "Program Pengembangan SMK" || $uang2222['jenis'] == "Program Pengembangan Pesantren" || $uang2222['jenis'] == "Program Perbaikan Gedung Sekolah" || $uang2222['jenis'] == "Program Investasi Sosial" || $uang2222['jenis'] == "Program Perbaikan Gizi" || $uang2222['jenis'] == "Program COSI" || $uang2222['jenis'] == "Program Olahraga" || $uang2222['jenis'] == "Program Bantuan Bencana Alam" || $uang2222['jenis'] == "Program Lainnya") {
                                                                       $total2 += abs($uang2222[5]);
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($total2,2);?>  </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 14px">
                                                         <p><b>BIAYA UMUM & ADMINISTRASI</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Pegawai</b></p>
                                                                  <?php
                                                                     foreach ($listAll as $listAktivitas) {
                                                                         if ($listAktivitas['jenis'] == "Biaya Pegawai"){ 
                                                                           $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  </tr>
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Keperluan Kantor</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Biaya Keperluan Kantor") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444; margin-top: 5px;"><b>Biaya Perjalanan Dinas</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Biaya Perjalanan Dinas") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } } ?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Transportasi Lokal</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Biaya Transportasi Lokal") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Operasional</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Biaya Operasional") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Bank</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Biaya Bank") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Penyusutan</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Biaya Penyusutan") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Pengembangan Software</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Biaya Pengembangan Software") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Pembulatan</b></p>
                                                                  <?php foreach ($listAll as $listAktivitas) {
                                                                     if ($listAktivitas['jenis'] == "Pembulatan") { 
                                                                       $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                  </tr>
                                                                  <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>



                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>Total  Biaya Umum & Administrasi</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $tidakterkait3 = 0;
                                                               foreach ($listAll as $uang3) {
                                                                   if ($uang3['status'] == "Tidak Terikat") {
                                                                       if ($uang3['jenis'] == "Biaya Pegawai" || $uang3['jenis'] == "Biaya Keperluan Kantor"  || $uang3['jenis'] == "Biaya Perjalanan Dinas"  || $uang3['jenis'] == "Biaya Transportasi Lokal"  || $uang3['jenis'] == "Biaya Operasional"  || $uang3['jenis'] == "Biaya Operasional"  || $uang3['jenis'] == "Biaya Penyusutan" || $uang3['jenis'] == "Biaya Pengembangan Software"  || $uang3['jenis'] == "Pembulatan") {
                                                                           $tidakterkait3 += abs($uang3[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($tidakterkait3,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitsementara3 = 0;
                                                               foreach ($listAll as $uang33) {
                                                                   if ($uang33['status'] == "Terikat Sementara") {
                                                                       if ($uang33['jenis'] == "Biaya Pegawai" || $uang33['jenis'] == "Biaya Keperluan Kantor"  || $uang33['jenis'] == "Biaya Perjalanan Dinas"  || $uang33['jenis'] == "Biaya Transportasi Lokal"  || $uang33['jenis'] == "Biaya Operasional"  || $uang33['jenis'] == "Biaya Operasional"  || $uang33['jenis'] == "Biaya Penyusutan" || $uang33['jenis'] == "Biaya Pengembangan Software"  || $uang33['jenis'] == "Pembulatan") {
                                                                           $terkaitsementara3 += abs($uang33[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitsementara3,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitpermanen3 = 0;
                                                               foreach ($listAll as $uang333) {
                                                                   if ($uang333['status'] == "Terikat Permanen") {
                                                                       if ($uang333['jenis'] == "Biaya Pegawai" || $uang333['jenis'] == "Biaya Keperluan Kantor"  || $uang333['jenis'] == "Biaya Perjalanan Dinas"  || $uang333['jenis'] == "Biaya Transportasi Lokal"  || $uang333['jenis'] == "Biaya Operasional"  || $uang333['jenis'] == "Biaya Operasional"  || $uang333['jenis'] == "Biaya Penyusutan"  || $uang333['jenis'] == "Biaya Pengembangan Software"  || $uang333['jenis'] == "Pembulatan") {
                                                                           $terkaitpermanen3 += abs($uang333[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitpermanen3,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $total3 = 0;
                                                               foreach ($listAll as $uang3333) {
                                                                   if ($uang3333['jenis'] == "Biaya Pegawai" || $uang3333['jenis'] == "Biaya Keperluan Kantor"  || $uang3333['jenis'] == "Biaya Perjalanan Dinas"  || $uang3333['jenis'] == "Biaya Transportasi Lokal"  || $uang3333['jenis'] == "Biaya Operasional"  || $uang3333['jenis'] == "Biaya Operasional"  || $uang3333['jenis'] == "Biaya Penyusutan"  || $uang3333['jenis'] == "Biaya Pengembangan Software" || $uang3333['jenis'] == "Pembulatan") {
                                                                       $total3 += abs($uang3333[5]);
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($total3,2);?>  </b></p>
                                                         </div> 
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4" style="font-size: 14px">
                                                         <p><b>BIAYA PENCARIAN DANA</b></p>
                                                      </div>
                                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="container-fluid">
                                                            <table id="" class="table " style="display: block;">
                                                               <tbody id="tbody">
                                                                  <!-- <p style="font-size: 15px; color: #444;margin-top: 5px;"><b>Biaya Pencarian Dana</b></p> -->
                                                                  <?php
                                                                     foreach ($listAll as $listAktivitas) {
                                                                         if ($listAktivitas['jenis'] == "Biaya Pencarian Dana"){ 
                                                                           $listAktivitas[5] = abs($listAktivitas[5]);
                                                                  ?>
                                                                  <tr>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo $listAktivitas['koderekening'];?> (<?php echo $listAktivitas[2];?>)</td>
                                                                     <?php if ($listAktivitas['status'] == "Tidak Terikat"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Sementara"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <?php if ($listAktivitas['status'] == "Terikat Permanen"){ ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <?php }else{ ?>
                                                                     <td class="col-md-2" style="text-align: right;">0</td>
                                                                     <?php } ?>
                                                                     <td class="col-md-2" style="text-align: right;"><?php echo number_format($listAktivitas[5],2);?></td>
                                                                     <!-- <pre><?php var_dump($listAktivitas); ?></pre> -->
                                                                  </tr>
                                                                  <?php } }?>
                                                               </tbody>
                                                            </table>
                                                         </div>

                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b></b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $tidakterkait4 = 0;
                                                               foreach ($listAll as $uang4) {
                                                                   if ($uang4['status'] == "Tidak Terikat") {
                                                                       if ($uang4['jenis'] == "Biaya Pencarian Dana") {
                                                                           $tidakterkait4 += abs($uang4[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($tidakterkait4,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitsementara4 = 0;
                                                               foreach ($listAll as $uang44) {
                                                                   if ($uang44['status'] == "Terikat Sementara") {
                                                                       if ($uang44['jenis'] == "Biaya Pencarian Dana") {
                                                                           $terkaitsementara4 += abs($uang44[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitsementara4,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $terkaitpermanen4 = 0;
                                                               foreach ($listAll as $uang444) {
                                                                   if ($uang444['status'] == "Terikat Permanen") {
                                                                       if ($uang444['jenis'] == "Biaya Pencarian Dana") {
                                                                           $terkaitpermanen4 += abs($uang444[5]);
                                                                       }
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($terkaitpermanen4,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <?php 
                                                               $total4 = 0;
                                                               foreach ($listAll as $uang4444) {
                                                                   if ($uang4444['jenis'] == "Biaya Pencarian Dana") {
                                                                       $total4 += abs($uang4444[5]);
                                                                   }
                                                               } 
                                                               ?>
                                                            <p style='text-align: right;'><b> <?php  echo number_format($total4,2);?>  </b></p>
                                                         </div> 
                                                         
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 1px black">
                                                         </div><br><br><br><br>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>TOTAL PENGELUARAN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $tidakterkaitkur2 = abs($tidakterkait2 + $tidakterkait3 + $tidakterkait4); echo number_format($tidakterkaitkur2,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $terkaitsementarakur2 = abs($terkaitsementara2 + $terkaitsementara3 + $terkaitsementara4); echo number_format($terkaitsementarakur2,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $terkaitpermanenkur2 = abs($terkaitpermanen2 + $terkaitpermanen3 + $terkaitpermanen4); echo number_format($terkaitpermanenkur2,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $totalkur2 = abs($total2 + $total3 + $total4); echo number_format($totalkur2,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8 col-md-offset-4">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>PERUBAHAN AKTIVA BERSIH</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $ttkur = $tidakterkaitkur - $tidakterkaitkur2; echo number_format(($tidakterkaitkur) - ($tidakterkaitkur2),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $tskur = $terkaitsementarakur - $terkaitsementarakur2; echo number_format(($terkaitsementarakur) - ($terkaitsementarakur2),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php  $tpkur = $terkaitpermanenkur - $terkaitpermanenkur2; echo number_format(($terkaitpermanenkur) - ($terkaitpermanenkur2),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $tkur = $totalkur - $totalkur2; echo number_format(($totalkur) - ($totalkur2),2);?> </b></p>
                                                            <br>
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>AKTIVA BERSIH AWAL TAHUN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $ttaw = "0"; echo number_format("0",2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $tsaw = "0"; echo number_format(0,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $tpaw = "0"; echo number_format(0,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php $taw = "0"; echo number_format(0,2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-9">
                                                            <hr style="border:solid 1px black">
                                                         </div>
                                                         <div class="col-md-4" style="font-size: 15px">
                                                            <p><b>AKTIVA BERSIH AKHIR TAHUN</b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($ttkur)-($ttaw),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($tskur)-($tsaw),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($tpkur)-($tpaw),2);?> </b></p>
                                                         </div>
                                                         <div class="col-md-2" style="font-size: 14px">
                                                            <p style='text-align: right;'><b> <?php echo number_format(($tkur)-($taw),2);?> </b></p>
                                                            <br>
                                                         </div>
                                                         <div class="col-md-4">
                                                         </div>
                                                         <div class="col-md-8">
                                                            <hr style="border:solid 2px black">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- End Row -->
                                       <!-- akhir table -->
                                    </form>
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
                  </div>
                  <!-- container -->
               </div>
               <!-- content -->
               <div>
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
      <script type="text/javascript" src="https://cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
      <script src="https://cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>
      <script type="text/javascript">
         /* ==============================================
          Counter Up
          =============================================== */
          jQuery(document).ready(function($) {
            // console.log(<?php echo json_encode($listAll) ?>);
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
         jQuery(document).ready(function() {
             $('#saldoawal').maskMoney();
             $('textarea[name=uang]').maskMoney();
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('#datatable').dataTable();
         });
      </script>
      <script type="text/javascript">
         function tambah() {
             //        alert($('#saldoawal').maskMoney("unmasked")[0]);
             var saldoawal = $('#saldoawal').val();
             var saldoawal1 = $('#saldoawal').maskMoney("unmasked")[0];
             var kode_rekening = $('#kode_rekening').val();
             //  alert(nama_departemen);
             $.ajax({
                 type: "POST",
                 url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=saldoawal",
                 data: 'aksi=tambah' + '&saldoawal=' + saldoawal1 + '&kode_rekening=' + kode_rekening,
                 success: function(msg) {
                     if (msg !== "gagal" || msg !== "") {
                         alert("Berhasil Menambahkan Data");
                         var awal = '<tr class="tr" id="tr-' + msg + '">';
                         var part1 = '<td id="td-1-' + msg + '" class="td-' + msg + '">' + msg + '</td>';
                         var part2 = '<td class="td-' + msg + '"><textarea readonly id="td-3-' + msg + '" class="txt-' + msg + '" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + kode_rekening + '</textarea></td>';
                         var part3 = '<td class="td-' + msg + '"><textarea readonly id="td-2-' + msg + '" class="txt-' + msg + '" name="uang" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + saldoawal + '</textarea></td>';
                         var part4 = '<td class="actions text-center td-' + msg + '"><a style="cursor:pointer" id="edit-' + msg + '" onClick="edit(\'' + msg + '\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-' + msg + '" class="on-default remove-row" onClick="save_edit(\'' + msg + '\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-' + msg + '" class="on-default remove-row" onClick="cancel_edit(\'' + msg + '\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\'' + msg + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td>';
                         var akhir = '</tr>';
                         $('#tbody').append(awal + part1 + part2 + part3 + part4 + akhir);
                         //                    $("#tbody").append('<tr class="tr" id="tr-'+msg+'"><td id="td-1-'+msg+'" class="td-'+msg+'">'+msg+'</td><td class="td-'+msg+'"><textarea readonly id="td-3-'+msg+'" class="txt-'+msg+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+kode_rekening+'</textarea></td><td class="td-'+msg+'"><textarea readonly id="td-2-'+msg+'" class="txt-'+msg+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+saldoawal+'</textarea></td><td class="actions text-center td-'+msg+'"><a style="cursor:pointer" id="edit-'+msg+'" onClick="edit(\''+msg+'\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-'+msg+'" class="on-default remove-row" onClick="save_edit(\''+msg+'\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-'+msg+'" class="on-default remove-row" onClick="cancel_edit(\''+msg+'\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\''+msg+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');
                         $('#saldoawal').val('');
                     }
                 }
             });
         }
      </script>
      <script>
         function hapus(baris) {
         
             $.ajax({
                 type: "POST",
                 url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=saldoawal",
                 data: 'aksi=hapus' + '&id_saldoawal=' + baris,
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
             $('textarea[name=uang]').maskMoney();
             $(".txt-" + baris).attr("readonly", false);
             $("#save-" + baris).attr("hidden", false);
             $("#edit-" + baris).attr("hidden", true);
             $("#cancel-edit-" + baris).attr("hidden", false);
             $(".txt-" + baris).css("background-color", "coral");
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
             window.location.reload();
         }
      </script>
      <script>
         function save_edit(baris) {
             //        var saldoawal = $('#td-2-'+baris).val();
             var kode_rekening = $('#td-3-' + baris).val();
             // alert($('#td-2-'+baris).maskMoney("unmasked")[0]);
             var saldoawal1 = $('#td-2-' + baris).maskMoney("unmasked")[0];
             //        alert(saldoawal1);
             $.ajax({
                 type: "POST",
                 url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=saldoawal",
                 data: 'aksi=ubah&id_saldoawal=' + baris + '&saldoawal=' + saldoawal1 + '&kode_rekening=' + kode_rekening,
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
            doc.save('Laporan Aktivitas Yayasan Japfa.pdf');
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
      <script type="text/javascript">
         (function(){
           var 
           form = $('#print2'),
           cache_width = form.width(),
            a4  =[ 595.28,  841.89];  // for a4 size paper width and height
         
            $('#print1').on('click',function(){
               $('#print2').scrollTop(0);
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
            doc.save('Laporan Aktivitas Yayasan Japfa.pdf');
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
   </body>
</html>