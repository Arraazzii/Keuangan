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
                                    <div class="panel-heading"><h3 class="panel-title">Laporan Aktivitas
                                        <button type="button" class="btn btn-default pull-right btn-sm" id="print">Print</button>
                                    </h3>
                                </div>
                                <div class="panel-body" id="printDiv">
                                    <div class=" form">
                                        <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                            <div class="judul_laporan">
                                                <p class="cold-md-12" style="text-align: center;font-size: 24px;">
                                                    <b>YAYASAN JAPFA<br>LAPORAN AKTIVITAS<br>PERIODE : <?php echo date("d F Y",strtotime($_POST['tanggal_awal_aktivitas']));?> s/d <?php echo date("d F Y",strtotime($_POST['tanggal_akhir_aktivitas']));?> 
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
                                                                    <table id="" class="table  table-bordered">
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
                                                                    <table id="" class="table  table-bordered">
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
                                                                    <table id="" class="table  table-bordered">
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
                                                                    <table id="" class="table table-bordered">
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
                                                                    <table id="" class="table table-bordered">
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
                                        <div class="panel-heading"><h3 class="panel-title">Laporan Aktivitas
                                            <button type="button" class="btn btn-default pull-right btn-sm" id="print1">Print</button>
                                        </h3>
                                    </div>
                                    <div class="panel-body" id="print2">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                                <div class="judul_laporan">
                                                    <p class="cold-md-12" style="text-align: center;font-size: 24px;">
                                                        <b>YAYASAN JAPFA<br>LAPORAN AKTIVITAS<br>PERIODE : <?php echo date("d F Y",strtotime($_POST['tanggal_awal_aktivitas']));?> s/d <?php echo date("d F Y",strtotime($_POST['tanggal_akhir_aktivitas']));?> 
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
                                                                        <table id="" class="table  table-bordered">
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
                                                                        <table id="" class="table  table-bordered">
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
                                                                        <table id="" class="table  table-bordered">
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
                                                                        <table id="" class="table table-bordered">
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
                                                                        <table id="" class="table table-bordered">
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