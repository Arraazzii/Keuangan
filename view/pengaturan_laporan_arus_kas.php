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
                                    <li><a href="?page=6a3b61f42cded56019b264080e226e40">Pengaturan</a></li>
                                    <li class="active"><span>Format Laporan Arus Kas</span></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Pengaturan Laporan Arus Kas</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Kode Rekening*</label>
                                                    <div class="col-lg-4">
                                                        <select id="kode_rekening" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_rek) ; $i++){?>
                                                            <option value="<?php if(isset($list_rek[$i][2])){ echo $list_rek[$i][2];} ?>">
                                                                <?php if(isset($list_rek[$i][2])){ echo $list_rek[$i][2]." - ".$list_rek[$i][3];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Jenis* </label>
                                                    <div class="col-lg-4">
                                                        <select id="jenis" class="form-control">
                                                            <option hidden="">Silahkan Pilih</option>
                                                            <option value="Operasi">Operasi</option>
                                                            <!--                                                    <option value="Investasi">Investasi</option>-->
                                                            <!--                                                    <option value="Pendanaan">Pendanaan</option>-->
                                                            <option value="Penerimaan dari Bank, Jasa Giro & Deposito">[Investasi]Penerimaan dari Bank, Jasa Giro & Deposito</option>
                                                            <option value="Penghapusan/(Penambahan) Aktiva Tetap">[Investasi]Penghapusan/(Penambahan) Aktiva Tetap</option>
                                                            <option value="Pembayaran Kewajiban Jangka Panjang">[Pendanaan]Pembayaran Kewajiban Jangka Panjang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group jenis2" id="s1">
                                                        <label for="cemail" class="control-label col-lg-2">Sub Header* </label>
                                                        <div class="col-lg-4">
                                                            <select id="pendapatan_penghasilan" class="form-control">
                                                                <option value="Sumbangan Hibah">Sumbangan / Hibah</option>
                                                                <option value="Penghasilan Investasi Jangka Panjang">Penghasilan Investasi Jangka Panjang</option>
                                                                <option value="Hasil Penjualan Aktiva">Hasil Penjualan Aktiva</option>
                                                                <option value="Aktiva Bersih Berakhir Karena Program">Aktiva Bersih Berakhir Karena Program</option>
                                                                <option value="Aktiva Bersih Berakhir Karena Waktu">Aktiva Bersih Berakhir Karena Waktu</option>
                                                                <option value="Pendapatan Lain-lain">Pendapatan Lain-lain</option>
                                                                <option value="Realisasi Progam Bantuan Pendidikan Beasiswa">Realisasi Progam Bantuan Pendidikan & Beasiswa</option>
                                                                <option value="Realisasi Program Pengembangan SD">Realisasi Program Pengembangan SD</option>
                                                                <option value="Realisasi Program Pengembangan SMK">Realisasi Program Pengembangan SMK</option>
                                                                <option value="Realisasi Program Pengembangan Pesantren">Realisasi Program Pengembangan Pesantren</option>
                                                                <option value="Realisasi Program Perbaikan Gedung Sekolah">Realisasi Program Perbaikan Gedung Sekolah</option>
                                                                <option value="Realisasi Program Peningkatan Mutu Kepala Sekolah">Realisasi Program Peningkatan Mutu Kepala Sekolah</option>
                                                                <option value="Realisasi Program Perbaikan Gizi">Realisasi Program Perbaikan Gizi</option>
                                                                <option value="Realisasi Program COSI">Realisasi Program COSI (Pemberdayaan Masyarakat)</option>
                                                                <option value="Realisasi Program Olahraga">Realisasi Program Olahraga</option>
                                                                <option value="Realisasi Program Bantuan Bencana Alam">Realisasi Program Bantuan Bencana Alam</option>
                                                                <option value="Realisasi Program Lainnya">Realisasi Program Lainnya</option>
                                                                <option value="Penempatan Investasi Jangka Panjang">Penempatan Investasi Jangka Panjang</option>
                                                                <option value="Pembayaran Untuk Biaya Pegawai">Pembayaran Untuk Biaya Pegawai</option>
                                                                <option value="Pembayaran Untuk Biaya Keperluan Kantor">Pembayaran Untuk Biaya Keperluan Kantor</option>
                                                                <option value="Pembayaran Untuk Biaya Perjalanan Dinas">Pembayaran Untuk Biaya Perjalanan Dinas</option>
                                                                <option value="Pembayaran Untuk Biaya Transportasi Lokal">Pembayaran Untuk Biaya Transportasi Lokal</option>
                                                                <option value="Pembayaran Untuk Biaya Operasional">Pembayaran Untuk Biaya Operasional</option>
                                                                <option value="Pembayaran Untuk Biaya Bank">Pembayaran Untuk Biaya Bank</option>
                                                                <option value="Pembulatan">Pembulatan</option>
                                                                <option value="Hutang Pajak">Hutang Pajak</option>
                                                                <option value="Hutang Pajak Yang Dilunasi">Hutang Pajak Yang Dilunasi</option>
                                                                <option value="Hutang Lainnya">Hutang Lainnya</option>
                                                                <option value="Pendapatan Diterima Dimuka">Pendapatan Diterima Dimuka</option>
                                                                <option value="Biaya Dibayar Dimuka">Biaya Dibayar Dimuka</option>
                                                                <option value="Biaya Yang Masih Harus Dibayar">Biaya Yang Masih Harus Dibayar</option>
                                                                <option value="Pelunasan Dari Hutang Biaya Thn 2016">Pelunasan Dari Hutang Biaya Thn 2016</option>
                                                                <option value="Penempatan Deposito">Penempatan Deposito</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group jenis2" id="s2">
                                                        <label for="cemail" class="control-label col-lg-2">Sub Header* </label>
                                                        <div class="col-lg-4">
                                                            <select id="aktiva_bersih" class="form-control">
                                                                <option value="Penerimaan Jasa Giro">Penerimaan Jasa Giro</option>
                                                                <option value="Penerimaan Bunga Deposito">Penerimaan Bunga Deposito</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group jenis2" id="s3">
                                                        <label for="cemail" class="control-label col-lg-2">Sub Header* </label>
                                                        <div class="col-lg-4">
                                                            <select id="biaya_program" class="form-control">
                                                                <option value="Aktiva Tetap Harga Perolehan">Aktiva Tetap - Harga Perolehan</option>
                                                                <!-- <option value="Hutang Pajak">Hutang Pajak</option> -->
                                                                <option value="Aktiva Tidak Berwujud - Perolehan">Aktiva Tidak Berwujud - Perolehan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group jenis2" id="s4">
                                                        <label for="cemail" class="control-label col-lg-2">Sub Header* </label>
                                                        <div class="col-lg-4">
                                                            <select id="biaya_umum_administrasi" class="form-control">
                                                                <option value="Hutang Pihak III">Hutang Pihak III</option>
                                                                <option value="Hutang Jangka Panjang ">Hutang Jangka Panjang </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan</button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal</button>
                                                    </div>
                                                </div>
                                                <!-- table edit -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <table id="datatable1" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <!--                                                                        <th>No.</th>-->
                                                                                    <th>Kode Rekening</th>
                                                                                    <th>Nama Rekening</th>
                                                                                    <th>Jenis</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbody">
                                                                                <?php for($i = 0 ; $i < count($list); $i++){ ?>
                                                                                <tr class="tr" id="tr-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <!--                                                                            <td id="td-1--->
                                                                                    <?php //if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                    <!--" class="td--->
                                                                                    <?php //if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                    <!--">-->
                                                                                    <!--                                                                                -->
                                                                                    <?php //if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                    <!--                                                                            </td>-->
                                                                                    <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][1])){ echo $list[$i][1];} ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][2])){ echo $list[$i][2];} ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <textarea readonly name="uang" id="td-2-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][3])){ setlocale(LC_MONETARY,"en_US"); echo $list[$i][3];} ?></textarea>
                                                                                    </td>
                                                                                    <td class="actions text-center td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <a hidden style="cursor:pointer" id="edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" onClick="edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                                        <a style="cursor:pointer" hidden="" id="save-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="save_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-save"></i></a>
                                                                                        <a style="cursor:pointer" hidden="" id="cancel-edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="cancel_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-cancel"></i></a>
                                                                                        <a style="cursor:pointer" onClick="hapus('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>');"  class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                                    </td>
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
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=6a3b61f42cded56019b264080e226e40">Pengaturan</a></li>
                                    <li class="active"><span>Format Arus Kas</span></li>
                                </ol>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Pengaturan Laporan Arus Kas</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Kode Rekening*</label>
                                                    <div class="col-lg-4">
                                                        <select id="kode_rekening" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_rek) ; $i++){?>
                                                            <option value="<?php if(isset($list_rek[$i][2])){ echo $list_rek[$i][2];} ?>">
                                                                <?php if(isset($list_rek[$i][2])){ echo $list_rek[$i][2]." - ".$list_rek[$i][3];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Jenis* </label>
                                                    <div class="col-lg-4">
                                                        <select id="jenis" class="form-control">
                                                            <option value="Operasi">Operasi</option>
                                                            <!--                                                    <option value="Investasi">Investasi</option>-->
                                                            <!--                                                    <option value="Pendanaan">Pendanaan</option>-->
                                                            <option value="Penerimaan dari Bank, Jasa Giro & Deposito">[Investasi]Penerimaan dari Bank, Jasa Giro & Deposito</option>
                                                            <option value="Penghapusan/(Penambahan) Aktiva Tetap">[Investasi]Penghapusan/(Penambahan) Aktiva Tetap</option>
                                                            <option value="Pembayaran Kewajiban Jangka Panjang">[Pendanaan]Pembayaran Kewajiban Jangka Panjang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan</button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal</button>
                                                    </div>
                                                </div>
                                                <!-- table edit -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <table id="datatable" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <!--                                                                        <th>No.</th>-->
                                                                                    <th>Kode Rekening</th>
                                                                                    <th>Nama Rekening</th>
                                                                                    <th>Jenis</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbody">
                                                                                <?php for($i = 0 ; $i < count($list); $i++){ ?>
                                                                                <tr class="tr" id="tr-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <!--                                                                            <td id="td-1--->
                                                                                    <?php //if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                    <!--" class="td--->
                                                                                    <?php //if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                    <!--">-->
                                                                                    <!--                                                                                -->
                                                                                    <?php //if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                    <!--                                                                            </td>-->
                                                                                    <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][1])){ echo $list[$i][1];} ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][2])){ echo $list[$i][2];} ?></textarea>
                                                                                    </td>
                                                                                    <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <textarea readonly name="uang" id="td-2-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][3])){ setlocale(LC_MONETARY,"en_US"); echo $list[$i][3];} ?></textarea>
                                                                                    </td>
                                                                                    <td class="actions text-center td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                        <a hidden style="cursor:pointer" id="edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" onClick="edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')" class="on-default edit-row"><i class="md md-edit"></i></a>
                                                                                        <a style="cursor:pointer" hidden="" id="save-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="save_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-save"></i></a>
                                                                                        <a style="cursor:pointer" hidden="" id="cancel-edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="on-default remove-row" onClick="cancel_edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')"><i class="md md-cancel"></i></a>
                                                                                        <a style="cursor:pointer" onClick="hapus('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>');"  class="on-default remove-row"><i class="md md-delete"></i></a>
                                                                                    </td>
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
        $('#datatable1').dataTable();
    });
    </script>
    <script type="text/javascript">
            $(document).ready(function(){
        $(".jenis2").hide();
        $("#jenis").change(function(){
            if($(this).val() == "Operasi"){
              $("#s1").fadeIn();
              $("#s2").fadeOut();
              $("#s3").fadeOut();
              $("#s4").fadeOut();
          }else if($(this).val() == "Penerimaan dari Bank, Jasa Giro & Deposito"){
              $("#s1").fadeOut();
              $("#s2").fadeIn();
              $("#s3").fadeOut();
              $("#s4").fadeOut();
          }else if($(this).val() == "Penghapusan/(Penambahan) Aktiva Tetap"){
              $("#s1").fadeOut();
              $("#s2").fadeOut();
              $("#s3").fadeIn();
              $("#s4").fadeOut();
          }else if($(this).val() == "Pembayaran Kewajiban Jangka Panjang"){
              $("#s1").fadeOut();
              $("#s2").fadeOut();
              $("#s3").fadeOut();
              $("#s4").fadeIn();
          }

    });
    }); 
    function tambah() {
        var jenis = "";
          if($("#jenis").val() == "Operasi"){
            jenis = $("#pendapatan_penghasilan").val();
          }else if($("#jenis").val() == "Penerimaan dari Bank, Jasa Giro & Deposito"){
            jenis = $("#aktiva_bersih").val();
          }else if($("#jenis").val() == "Penghapusan/(Penambahan) Aktiva Tetap"){
            jenis = $("#biaya_program").val();
          }else if($("#jenis").val() == "Pembayaran Kewajiban Jangka Panjang"){
            jenis = $("#biaya_umum_administrasi").val();
          }
        // var jenis = $('#jenis').val();
        var kode_rekening = $('#kode_rekening').val();
        $.ajax({
            type: "POST",
            url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=format_arus_kas",
            data: 'aksi=tambah' + '&jenis=' + jenis + '&koderekening=' + kode_rekening,
            success: function(msg) {
                if (msg !== "gagal" || msg !== "") {
                    //                    alert(msg);
                    if (msg == "gagal") {
                        alert("Gagal Menambahkan Data");
                    } else {
                        alert("Berhasil Menambahkan Data");
                        var awal = '<tr class="tr" id="tr-' + msg + '">';
                        var part1 = '<td id="td-1-' + msg + '" class="td-' + msg + '">' + msg + '</td>';
                        var part2 = '<td class="td-' + msg + '"><textarea readonly id="td-3-' + msg + '" class="txt-' + msg + '" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + kode_rekening + '</textarea></td>';
                        var part3 = '<td class="td-' + msg + '"><textarea readonly id="td-2-' + msg + '" class="txt-' + msg + '" name="uang" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + jenis + '</textarea></td>';
                        var part4 = '<td class="actions text-center td-' + msg + '"><a hidden style="cursor:pointer" id="edit-' + msg + '" onClick="edit(\'' + msg + '\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-' + msg + '" class="on-default remove-row" onClick="save_edit(\'' + msg + '\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-' + msg + '" class="on-default remove-row" onClick="cancel_edit(\'' + msg + '\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\'' + msg + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td>';
                        var akhir = '</tr>';
                        $('#tbody').append(awal + part2 + part3 + part4 + akhir);
                        $('#saldoawal').val('');
                    }
                }
            }
        });
    }
    </script>
    <script>
    function hapus(baris) {

        $.ajax({
            type: "POST",
            url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=format_arus_kas",
            data: 'aksi=hapus' + '&id=' + baris,
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
            url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=format_arus_kas",
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
</body>

</html>