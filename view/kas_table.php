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
                                        <li class="active"><span>Laporan Arus Kas</span></li>
                                    </ol>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Laporan Arus Kas
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
                                                                        <div class="col-md-4" style="font-size: 18px">
                                                                            <p><b>ARUS KAS DARI AKTIVITAS OPERASI</b></p>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <table id="" class="table  table-bordered">
                                                                                <tbody id="tbody">
                                                                                    <?php
                                                                                        $total_operasi = 0;
                                                                                        $total_investasi = 0;
                                                                                        $total_penerimaan = 0;
                                                                                        $total_penghapusan = 0;
                                                                                        $total_pendanaan = 0;
                                                                                        for($i = 0; $i < count($list1); $i++){
                                                                                            echo "<tr>";
                                                                                            echo "<td class='col-md-10'>".$list1[$i][2]."</td>";
                                                                                            echo "<td class='col-md-2' class='col-md-2' style='text-align: right;'>".number_format($list1[$i][4],2)."</td>";
                                                                                            echo "</tr>";
                                                                                            $total_operasi = $total_operasi + $list1[$i][4];
                                                                                        }
                                                                                        ?>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>KAS BERSIH DARI/(UNTUK) AKTIVITAS OPERASI</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 14px">
                                                                                <p style='text-align: right;'><b> <?php echo "Rp. ".  number_format($total_operasi,2);?> </b></p>
                                                                                <hr style="border:solid 1px black">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4" style="font-size: 14px">
                                                                            <p style="font-size: 18px"><b>ARUS KAS DARI AKTIVITAS INVESTASI</b></p>
                                                                            <p><b>PENERIMAAN DARI BUNGA BANK, JASA GIRO & DEPOSITO</b></p>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <table id="" class="table  table-bordered">
                                                                                <tbody id="tbody">
                                                                                    <?php
                                                                                        //                                                                        print_r($list1);
                                                                                                for($i = 0; $i < count($list3); $i++){
                                                                                                    echo "<tr>";
                                                                                                    echo "<td class='col-md-10'>".$list3[$i][2]."</td>";
                                                                                                    echo "<td class='col-md-2' class='col-md-2' style='text-align: right;'>".number_format($list3[$i][4],2)."</td>";
                                                                                                    echo "</tr>";
                                                                                                    $total_investasi = $total_investasi + $list3[$i][4];
                                                                                                    $total_penerimaan = $total_penerimaan + $list3[$i][4];
                                                                                                }
                                                                                                ?>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="col-md-10" style="font-size: 14px">
                                                                                <p><b>Total Penerimaan dari Bunga Bank, Jasa Giro & Deposito</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 14px">
                                                                                <p style='text-align: right;'><b> <?php echo "Rp. ".  number_format($total_investasi,2);?> </b></p>
                                                                                <hr style="border:solid 1px black">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4" style="font-size: 14px">
                                                                            <p><b>PENGHAPUSAN/(PENAMBAHAN) AKTIVA TETAP</b></p>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <table id="" class="table table-bordered">
                                                                                <tbody id="tbody">
                                                                                    <?php
                                                                                        //                                                                        print_r($list1);
                                                                                                for($i = 0; $i < count($list4); $i++){
                                                                                                    echo "<tr>";
                                                                                                    echo "<td class='col-md-10'>".$list4[$i][2]."</td>";
                                                                                                    echo "<td class='col-md-2' class='col-md-2' style='text-align: right;'>".number_format($list4[$i][4],2)."</td>";
                                                                                                    echo "</tr>";
                                                                                                    $total_investasi = $total_investasi + $list4[$i][4];
                                                                                                    $total_penghapusan = $total_penghapusan + $list4[$i][4];
                                                                                                }
                                                                                                ?>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="col-md-10" style="font-size: 14px">
                                                                                <p><b>Total Penghapusan/(Penambahan) Aktiva Tetap</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 14px">
                                                                                <p style='text-align: right;'><b> <?php echo "Rp. ".  number_format($total_penghapusan,2);?> </b></p>
                                                                                <hr style="border:solid 1px black">
                                                                            </div>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>KAS BERSIH DARI/(UNTUK) AKTIVITAS INVESTASI</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style='text-align: right;'><b> <?php echo "Rp. ".  number_format($total_investasi,2);?> </b></p>
                                                                                <hr style="border:solid 1px black">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4" style="font-size: 18px">
                                                                            <p><b>ARUS KAS DARI AKTIVITAS PENDANAAN</b></p>
                                                                            <p style="font-size: 14px"><b>PEMBAYARAN KEWAJIBAN JANGKA PANJANG</b></p>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <table id="" class="table  table-bordered">
                                                                                <tbody id="tbody">
                                                                                    <?php
                                                                                        //                                                                        print_r($list1);
                                                                                                for($i = 0; $i < count($list6); $i++){
                                                                                                    echo "<tr>";
                                                                                                    echo "<td class='col-md-10'>".$list6[$i][2]."</td>";
                                                                                                    echo "<td class='col-md-2' class='col-md-2' style='text-align: right;'>".number_format($list6[$i][4],2)."</td>";
                                                                                                    echo "</tr>";
                                                                                                    $total_pendanaan = $total_pendanaan + $list6[$i][4];
                                                                                                }
                                                                                                ?>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>KAS BERSIH DARI/(UNTUK) AKTIVITAS PENDANAAN</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style='text-align: right;'><b> <?php echo "Rp. ".  number_format($total_pendanaan,2);?> </b></p>
                                                                                <hr style="border:solid 1px black">
                                                                            </div>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>Kenaikan/(Penurunan) Dalam Kas & Setara Kas</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style='text-align: right;'><b> <?php echo number_format($total_operasi+$total_investasi+$total_pendanaan,2);?> </b></p>
                                                                            </div>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>Kas & Setara Kas Awal Tahun</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style='text-align: right;'><b> <?php echo   number_format($saldo,2);?> </b></p>
                                                                                <hr style="border:solid 1px black">
                                                                            </div>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>KAS & SETARA KAS AKHIR TAHUN </b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style='text-align: right;'><b> <?php echo "Rp. ".  number_format($total_operasi+$total_investasi+$total_pendanaan + $saldo,2);?> </b></p>
                                                                                <hr style="border:double 2px black">
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
                                        <li class="active"><span>Laporan Arus Kas</span></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Laporan Arus Kas
                                                <button type="button" class="btn btn-default pull-right btn-sm" id="printlarge">Print</button>
                                            </h3>
                                        </div>
                                        <div class="panel-body" id="printDivlarge">
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
                                                                        <div class="col-md-4" style="font-size: 18px">
                                                                            <p style="color:blue;"><b>ARUS KAS DARI AKTIVITAS OPERASI</b></p>
                                                                        </div>
                                                                        <div class="col-md-8"></div>
                                                                        <br>
                                                                        <br>
                                                                        <div class="container">
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Sumbangan Hibah</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a1 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Sumbangan Hibah"){ 
                                                                                            $a1 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a1,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Penghasilan Investasi Jangka Panjang</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a2 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Penghasilan Investasi Jangka Panjang"){ 
                                                                                            $a2 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a2,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Hasil Penjualan Aktiva</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a3 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Hasil Penjualan Aktiva"){ 
                                                                                            $a3 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a3,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Aktiva Bersih Berakhir Karena Program</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a4 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Aktiva Bersih Berakhir Karena Program"){ 
                                                                                            $a4 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a4,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Aktiva Bersih Berakhir Karena Waktu</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a5 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Aktiva Bersih Berakhir Karena Waktu"){ 
                                                                                            $a5 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a5,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pendapatan Lain-lain</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a6 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pendapatan Lain-lain"){ 
                                                                                            $a6 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a6,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Progam Bantuan Pendidikan Beasiswa</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a7 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Progam Bantuan Pendidikan Beasiswa"){ 
                                                                                            $a7 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a7,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Pengembangan SD</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a8 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Pengembangan SD"){ 
                                                                                            $a8 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a8,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Pengembangan SMK</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a9 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Pengembangan SMK"){ 
                                                                                            $a9 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a9,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Pengembangan Pesantren</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a10 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Pengembangan Pesantren"){ 
                                                                                            $a10 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a10,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Perbaikan Gedung Sekolah</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a11 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Perbaikan Gedung Sekolah"){ 
                                                                                            $a11 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a11,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Peningkatan Mutu Kepala Sekolah</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a12 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Peningkatan Mutu Kepala Sekolah"){ 
                                                                                            $a12 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a12,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Perbaikan Gizi</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a13 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Perbaikan Gizi"){ 
                                                                                            $a13 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a13,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program COSI (Pemberdayaan Masyarakat)</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a14 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program COSI"){ 
                                                                                            $a14 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a14,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Olahraga</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a15 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Olahraga"){ 
                                                                                            $a15 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a15,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Bantuan Bencana Alam</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a16 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Bantuan Bencana Alam"){ 
                                                                                            $a16 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a16,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Realisasi Program Lainnya</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a17 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Realisasi Program Lainnya"){ 
                                                                                            $a17 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a17,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Penempatan Investasi Jangka Panjang</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a18 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Penempatan Investasi Jangka Panjang"){ 
                                                                                            $a18 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a18,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pembayaran Untuk Biaya Pegawai</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a19 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pembayaran Untuk Biaya Pegawai"){ 
                                                                                            $a19 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a19,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pembayaran Untuk Biaya Keperluan Kantor</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a20 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pembayaran Untuk Biaya Keperluan Kantor"){ 
                                                                                            $a20 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a20,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pembayaran Untuk Biaya Perjalanan Dinas</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a21 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pembayaran Untuk Biaya Perjalanan Dinas"){ 
                                                                                            $a21 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a21,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pembayaran Untuk Biaya Transportasi Lokal</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a22 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pembayaran Untuk Biaya Transportasi Lokal"){ 
                                                                                            $a22 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a22,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pembayaran Untuk Biaya Operasional</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a23 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pembayaran Untuk Biaya Operasional"){ 
                                                                                            $a23 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a23,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pembayaran Untuk Biaya Bank</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a24 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pembayaran Untuk Biaya Bank"){ 
                                                                                            $a24 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a24,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pembulatan</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a25 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pembulatan"){ 
                                                                                            $a25 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a25,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Hutang Pajak</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a26 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Hutang Pajak"){ 
                                                                                            $a26 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a26,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Hutang Pajak Yang Dilunasi</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a27 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Hutang Pajak Yang Dilunasi"){ 
                                                                                            $a27 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a27,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Hutang Lainnya</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a28 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Hutang Lainnya"){ 
                                                                                            $a28 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a28,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pendapatan Diterima Dimuka</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a29 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pendapatan Diterima Dimuka"){ 
                                                                                            $a29 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a29,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Biaya Dibayar Dimuka</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a30 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Biaya Dibayar Dimuka"){ 
                                                                                            $a30 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a30,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Biaya Yang Masih Harus Dibayar</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a31 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Biaya Yang Masih Harus Dibayar"){ 
                                                                                            $a31 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a31,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pelunasan Dari Hutang Biaya Thn 2016</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a32 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Pelunasan Dari Hutang Biaya Thn 2016"){ 
                                                                                            $a32 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a32,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Penempatan Deposito</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $a33 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Penempatan Deposito"){ 
                                                                                            $a33 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($a33,0,",","."));?></b></p>
                                                                            </div>
                                                                            <br><br>
                                                                            <div class="col-md-8">
                                                                                <p style="font-size: 17px;color: blue;"><b>KAS BERSIH DARI / (UNTUK) AKTIVITAS OPERASI</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-width:5px;  border-style:double;font-size: 16px;"><b><?php $operasi = $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10 + $a11 + $a12 + $a13 + $a14 + $a15 + $a16 + $a17 + $a18 + $a19 + $a20 + $a21 + $a22 + $a23 + $a24 + $a25 + $a26 + $a27 + $a28 + $a29 + $a30 + $a31 + $a32 + $a33 ; echo "Rp ".  number_format($operasi,0,",",".");?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6" style="font-size: 14px">
                                                                            <p style="font-size: 18px; color: blue;"><b>ARUS KAS DARI AKTIVITAS INVESTASI</b></p>
                                                                            <p style="font-size: 16px;margin-left: 10px;"><b>PENERIMAAN DARI BUNGA BANK, JASA GIRO & DEPOSITO</b></p>
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="container">
                                                                            <br><br>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Penerimaan Jasa Giro</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $b1 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Penerimaan Jasa Giro"){ 
                                                                                            $b1 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($b1,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Penerimaan Bunga Deposito</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $b2 = 0;
                                                                                        foreach ($listAll as $listArus) {
                                                                                         if ($listArus['jenis'] == "Penerimaan Bunga Deposito"){ 
                                                                                            $b2 += $listArus[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($b2,0,",","."));?></b></p>
                                                                            </div>
                                                                            <br><br>
                                                                            <div class="col-md-8" style="font-size: 16px;">
                                                                                <p><b>Total Penerimaan dari Bunga Bank, Jasa Giro & Deposito</b></p>
                                                                            </div>
                                                                            <div class="col-md-4" style="font-size: 16px">
                                                                                <p style='text-align: right;border-top: 2px solid black;'><b> <?php $penerimaan = $b1 + $b2;  echo "Rp. ".  number_format($penerimaan,0,",",".");?> </b></p>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-md-6" style="font-size: 16px;margin-left: 10px;">
                                                                            <p><b>PENGHAPUSAN/(PENAMBAHAN) AKTIVA TETAP</b></p>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="container">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 40px;"><b>Aktiva Tetap Harga Perolehan</b></p>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <?php
                                                                                        $c1 = 0;
                                                                                            foreach ($listAll as $listArus) {
                                                                                             if ($listArus['jenis'] == "Aktiva Tetap Harga Perolehan"){ 
                                                                                                $c1 += $listArus[4];
                                                                                                ?>
                                                                                    <?php } }?>
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;margin-right: -10px;"><b>Rp <?php echo(number_format($c1,0,",","."));?></b></p>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 40px;"><b>Aktiva Tidak Berwujud - Perolehan</b></p>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <?php
                                                                                        $c2 = 0;
                                                                                            foreach ($listAll as $listArus) {
                                                                                             if ($listArus['jenis'] == "Aktiva Tidak Berwujud - Perolehan"){ 
                                                                                                $c2 += $listArus[4];
                                                                                                ?>
                                                                                    <?php } }?>
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;margin-right: -10px;"><b>Rp <?php echo(number_format($c2,0,",","."));?></b></p>
                                                                                </div>
                                                                                <br><br>
                                                                                <div class="col-md-8" style="font-size: 16px;">
                                                                                    <p><b>Total Penghapusan / (Penambahan) Aktiva Tetap     </b></p>
                                                                                </div>
                                                                                <div class="col-md-4" style="font-size: 16px">
                                                                                    <p style='text-align: right;border-top: 2px solid black;margin-right: -10px;'><b> <?php $penghapusan = $c1 + $c2;  echo "Rp. ".  number_format($penghapusan,0,",",".");?> </b></p>
                                                                                </div>
                                                                                <div class="row">
                                                                                <div class="col-md-8">
                                                                                <p style="font-size: 17px;color: blue;"><b>KAS BERSIH DARI / (UNTUK) AKTIVITAS INVESTASI</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-width:5px;  border-style:double;font-size: 16px;margin-right: 5px;"><b><?php $investasi = $penerimaan + $penghapusan; echo "Rp ".  number_format($investasi,0,",",".");?></b></p>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4" style="font-size: 18px">
                                                                            <p style="color:blue;"><b>ARUS KAS DARI AKTIVITAS PENDANAAN</b></p>
                                                                            <p style="font-size: 16px;margin-left: 10px;"><b>PEMBAYARAN KEWAJIBAN JANGKA PANJANG</b></p>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                           <div class="container">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 40px;"><b>Hutang Pihak III</b></p>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <?php
                                                                                        $d1 = 0;
                                                                                            foreach ($listAll as $listArus) {
                                                                                             if ($listArus['jenis'] == "Hutang Pihak III"){ 
                                                                                                $d1 += $listArus[4];
                                                                                                ?>
                                                                                    <?php } }?>
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;margin-right: -10px;"><b>Rp <?php echo(number_format($d1,0,",","."));?></b></p>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 40px;"><b>Hutang Jangka Panjang </b></p>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <?php
                                                                                        $d2 = 0;
                                                                                            foreach ($listAll as $listArus) {
                                                                                             if ($listArus['jenis'] == "Hutang Jangka Panjang "){ 
                                                                                                $d2 += $listArus[4];
                                                                                                ?>
                                                                                    <?php } }?>
                                                                                    <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;margin-right: -10px;"><b>Rp <?php echo(number_format($d2,0,",","."));?></b></p>
                                                                                </div>
                                                                                <br><br>
                                                                                <div class="col-md-8" style="font-size: 16px;">
                                                                                    <p><b>Total Pembayaran Kewajiban Jangka Panjang</b></p>
                                                                                </div>
                                                                                <div class="col-md-4" style="font-size: 16px">
                                                                                    <p style='text-align: right;border-top: 2px solid black;margin-right: -10px;'><b> <?php $kewajibanJangkaPanjang = $d1 + $d2;  echo "Rp. ".  number_format($kewajibanJangkaPanjang,0,",",".");?> </b></p>
                                                                                </div>
                                                                                <div class="row">
                                                                                <div class="col-md-8">
                                                                                <p style="font-size: 17px;color: blue;"><b>KAS BERSIH DARI / (UNTUK) AKTIVITAS PENDANAAN</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-width:5px;  border-style:double;font-size: 16px;margin-right: 5px;"><b><?php $kasBersih = $d1 + $d2;  echo "Rp. ".  number_format($kasBersih,0,",",".");?></b></p>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>Kenaikan/(Penurunan) Dalam Kas & Setara Kas</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style="text-align: right;"><b> Rp <?php $awaltahun = $operasi + $investasi + $kasBersih; echo number_format($awaltahun,0,",",".");?> </b></p>
                                                                            </div>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>Kas & Setara Kas Awal Tahun</b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style="text-align: right;"><b>Rp <?php $saldo2 = "0"; echo number_format($saldo2,0,",",".");?> </b></p>
                                                                                <hr style="border:solid 1px black">
                                                                            </div>
                                                                            <div class="col-md-10" style="font-size: 15px">
                                                                                <p><b>KAS & SETARA KAS AKHIR TAHUN </b></p>
                                                                            </div>
                                                                            <div class="col-md-2" style="font-size: 15px">
                                                                                <p style='text-align: right;'><b> <?php echo "Rp. ".  number_format($awaltahun + $saldo,0,",",".");?> </b></p>
                                                                                <hr style="border:double 2px black">
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
                form = $('#printDivlarge'),
                cache_width = form.width(),
            a4  =[ 595.28,  841.89];  // for a4 size paper width and height
            
            $('#printlarge').on('click',function(){
                $('#printDivlarge').scrollTop(0);
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
                doc.save('Laporan Arus Kas Yayasan Japfa.pdf');
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
                doc.save('Laporan Arus Kas Yayasan Japfa.pdf');
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