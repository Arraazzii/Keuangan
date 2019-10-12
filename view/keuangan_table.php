<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
                                    <li class="active"><span>Laporan Posisi Keuangan</span></li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Laporan Posisi Keuangan
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
                                                                    <div class="col-md-4" style="font-size: 18px;color: blue;">
                                                                        <p><b>AKTIVA</b></p>
                                                                    </div>
                                                                    <div id="aktiva">
                                                                        <div class="row">
                                                                            <div class="col-md-11 col-md-offset-1" style="font-size: 17px;">
                                                                                <p><b>Aktiva Lancar</b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Kas</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $Kas = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Kas"){ 
                                                                                            $Kas += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($Kas,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Bank</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $Bank = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Bank"){ 
                                                                                            $Bank += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($Bank,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Piutang</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $Piutang = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Piutang"){ 
                                                                                            $Piutang += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($Piutang,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Investasi Lancar</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $InvestasiLancar = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Investasi Lancar"){ 
                                                                                            $InvestasiLancar += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($InvestasiLancar,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Investasi Jangka Panjang</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $InvestasiJangkaPanjang = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Investasi Jangka Panjang"){ 
                                                                                            $InvestasiJangkaPanjang += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($InvestasiJangkaPanjang,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Uang Muka</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $UangMukaPembelian = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Uang Muka Pembelian"){ 
                                                                                            $UangMukaPembelian += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($UangMukaPembelian,0,",","."));?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="col-md-6 col-md-offset-2">
                                                                                <p style="font-size: 17px;text-align: right;"><b>Total Aktiva Lancar</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-top: 2px solid black;border-bottom: 2px solid black;font-size: 16px;"><b><?php $aktivaLancar = $Kas + $Bank + $Piutang + $InvestasiLancar + $InvestasiJangkaPanjang + $UangMukaPembelian; echo "Rp ".  number_format($aktivaLancar,0,",",".");?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-11 col-md-offset-1" style="font-size: 17px;">
                                                                                <p><b>Aktiva Tidak Lancar</b></p>
                                                                            </div>
                                                                        </div>
                                                                        <!--CONTENT OF AKTIVA LANCAR-->
                                                                        <div class="container">
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Aktiva Tetap</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $AktivaTetap = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Aktiva Tetap"){ 
                                                                                            $AktivaTetap += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($AktivaTetap,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Aktiva Tidak Berwujud</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $AktivaTidakBerwujud = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Aktiva Tidak Berwujud"){ 
                                                                                            $AktivaTidakBerwujud += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($AktivaTidakBerwujud,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>-/- Akumulasi Penyusutan</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $AkumulasiPenyusutan = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Akumulasi Penyusutan"){ 
                                                                                            $AkumulasiPenyusutan += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($AkumulasiPenyusutan,0,",","."));?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="col-md-7 col-md-offset-1">
                                                                                <p style="font-size: 17px;text-align: right;"><b>Total Aktiva Tidak Lancar</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-top: 2px solid black;font-size: 16px;"><b><?php $aktivaTidakLancar = $AktivaTetap + $AktivaTidakBerwujud + $AkumulasiPenyusutan; echo "Rp ".  number_format($aktivaTidakLancar,0,",",".");?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="col-md-4 col-md-offset-4">
                                                                                <p style="font-size: 20px;text-align: right;color: blue;"><b>Total Aktiva </b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-width:5px;  border-style:double;font-size: 16px;"><b><?php $totalAktiva = $aktivaLancar + $aktivaTidakLancar; echo "Rp ".  number_format($totalAktiva,0,",",".");?></b></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--KEWAJIBAN DAN AKTIVA BERSIH-->
                                                                    <div id="wajibbersih">
                                                                        <div class="col-md-12" style="font-size: 18px;color: blue;">
                                                                            <p><b>KEWAJIBAN DAN AKTIVA BERSIH</b></p>
                                                                        </div>
                                                                        <!-- <div class="container-fluid">
                                                                            <div class="col-md-12" style="font-size: 17px;color: blue;">
                                                                                <p><b>KEWAJIBAN</b></p>
                                                                            </div>
                                                                            </div> -->
                                                                        <div class="row">
                                                                            <div class="col-md-11 col-md-offset-1" style="font-size: 17px;">
                                                                                <p><b>Kewajiban</b></p>
                                                                            </div>
                                                                        </div>
                                                                        <!--CONTENT OF AKTIVA LANCAR-->
                                                                        <div class="container">
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Hutang Usaha</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $HutangUsaha = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Hutang Usaha"){ 
                                                                                            $HutangUsaha += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($HutangUsaha,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Hutang Pajak</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $HutangPajak = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Hutang Pajak"){ 
                                                                                            $HutangPajak += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($HutangPajak,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Pendapatan Diterima Dimuka</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $PendapatanDiterimaDimuka = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Pendapatan Diterima Dimuka"){ 
                                                                                            $PendapatanDiterimaDimuka += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($PendapatanDiterimaDimuka,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Biaya Yang Masih Harus Dibayar</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $BiayaYangMasihHarusDibayar = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Biaya Yang Masih Harus Dibayar"){ 
                                                                                            $BiayaYangMasihHarusDibayar += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($BiayaYangMasihHarusDibayar,0,",","."));?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="col-md-6 col-md-offset-2">
                                                                                <p style="font-size: 17px;text-align: right;"><b>Total Kewajiban</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-top: 2px solid black;border-bottom: 2px solid black;font-size: 16px;"><b><?php $kewajiban = $HutangPajak + $HutangUsaha + $PendapatanDiterimaDimuka + $BiayaYangMasihHarusDibayar; echo "Rp ".  number_format($kewajiban,0,",",".");?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <!-- <div class="row">
                                                                            <div class="col-md-11 col-md-offset-1" style="font-size: 17px;">
                                                                                <p><b>Kewajiban Jangka Panjang</b></p>
                                                                            </div>
                                                                            </div> -->
                                                                        <!--CONTENT OF KEWAJIBAN JANGKA PANJANG-->
                                                                        <!--  <div class="container">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <table id="" class="table  table-bordered">
                                                                                    <tbody id="tbody">
                                                                                        <?php 
                                                                                // for($i = 0; $i < count($list4); $i++){
                                                                                //     echo "<tr>";
                                                                                //     echo "<td class='col-md-10'>".$list4[$i][2]."</td>";
                                                                                //     echo "<td class='col-md-2' class='col-md-2' style='text-align: right;'>".number_format($list4[$i][4],2)."</td>";
                                                                                //     echo "</tr>";
                                                                                //     $total_kewajiban_jangka_panjang = $total_kewajiban_jangka_panjang + $list4[$i][4];
                                                                                // }
                                                                                ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            </div> -->
                                                                        <!-- <div class="container">
                                                                            <div class="col-md-6 col-md-offset-2">
                                                                                <p style="font-size: 17px;text-align: right;"><b>Total Kewajiban Jangka Panjang</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-top: 2px solid black;border-bottom: 2px solid black;font-size: 16px;"><b><?php //echo "Rp. ".  number_format($total_kewajiban_jangka_panjang,2);?></b></p>
                                                                            </div>
                                                                            </div> -->
                                                                        <!-- <div class="container">
                                                                            <div class="col-md-4 col-md-offset-4">
                                                                                <p style="font-size: 17px;text-align: right;"><b>Total Kewajiban </b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-width:5px;  border-style:double;font-size: 16px;"><b><?php //echo "Rp. ".  number_format($total_kewajiban_lancar + $total_kewajiban_jangka_panjang,2);?></b></p>
                                                                            </div>
                                                                            </div> -->
                                                                        <div class="row">
                                                                            <div class="col-md-11 col-md-offset-1" style="font-size: 17px;">
                                                                                <p><b>Aktiva Bersih</b></p>
                                                                            </div>
                                                                        </div>
                                                                        <!--CONTENT OF AKTIVA LANCAR-->
                                                                        <div class="container">
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Aktiva Bersih Tidak Terikat</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $Akv1 = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Aktiva Bersih Dan Tidak Terkait"){ 
                                                                                            $Akv1 += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($Akv1,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Aktiva Bersih Terikat Sementara</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $Akv2 = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Aktiva Bersih Terkait Sementara"){ 
                                                                                            $Akv2 += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($Akv2,0,",","."));?></b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;margin-left: 50px;"><b>Aktiva Bersih Terikat Permanen</b></p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <?php
                                                                                    $Akv3 = 0;
                                                                                        foreach ($listAll as $listKuangan) {
                                                                                         if ($listKuangan['jenis'] == "Aktiva Bersih Terkait Permanen"){ 
                                                                                            $Akv3 += $listKuangan[4];
                                                                                            ?>
                                                                                <?php } }?>
                                                                                <p style="font-size: 15px; color: #444;margin-top: 5px;text-align: right;"><b>Rp <?php echo(number_format($Akv3,0,",","."));?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="col-md-4 col-md-offset-4">
                                                                                <p style="font-size: 17px;text-align: right;"><b>Total Aktiva Bersih</b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-top: 2px solid black;font-size: 16px;"><b><?php $AkvTotal = $Akv1 + $Akv2 + $Akv3; echo "Rp ".  number_format($AkvTotal,0,",",".");?></b></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                            <div class="col-md-8 col-md-offset-0">
                                                                                <p style="font-size: 20px;text-align: right;color: blue;"><b>Total Kewajiban Dan Aktiva Bersih </b></p>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <p style="text-align: right;border-width:5px;  border-style:double;font-size: 16px;"><b><?php $TotalSemua = $kewajiban + $AkvTotal; echo "Rp ".  number_format($TotalSemua,0,",",".");?></b></p>
                                                                            </div>
                                                                            <div>
                                                                                <?php /*
                                                                                    echo $total_aktiva_lancar."<br>";
                                                                                    echo $total_aktiva_tidak_lancar."<br>";
                                                                                    echo $total_kewajiban_lancar."<br>";
                                                                                    echo $total_kewajiban_jangka_panjang."<br>";
                                                                                    echo $total_aktiva_bersih."<br>";
                                                                                    */
                                                                                    ?>
                                                                            </div>
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
                doc.save('Laporan Posisi Keuangan Yayasan Japfa.pdf');
                form.width(cache_width);
            });
            pdf.addPage();
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
                doc.save('Laporan Posisi Keuangan Yayasan Japfa.pdf');
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