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
                                    <li><a href="?page=9176f6233d9bf1733d94155843e330d8">Data</a></li>
                                    <li class="active"><span>Program</span></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Tambah Data Program</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" novalidate>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Kelompok Program *</label>
                                                    <div class="col-lg-4">
                                                        <select id="kelompok_program" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_kelpro) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_kelpro[$i][2])){ echo $list_kelpro[$i][2];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <label for="cemail" class="control-label col-lg-2">Tanggal Mulai *</label>
                                                    <div class="col-lg-2">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Jenis Program *</label>
                                                    <div class="col-lg-4">
                                                        <select id="jenis_program" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_jenpro) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_jenpro[$i][2])){ echo $list_jenpro[$i][2];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <label for="cemail" class="control-label col-lg-2">Tanggal Akhir *</label>
                                                    <div class="col-lg-2">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker3">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Program *</label>
                                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                                        <input class="form-control " id="nama_program" type="text" name="nama_program" required="" aria-required="true">
                                                    </div>
                                                    <div class="clearfix hidden-lg"></div>
                                                    <label for="cemail" class="control-label col-lg-2">Pagu Program *</label>
                                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                                        <input class="form-control " id="pagu_program" type="text" name="pagu_program" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Departamen *</label>
                                                    <div id="" class="col-lg-4 col-md-12 col-xs-12">
                                                        <select id="nama_departemen" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_dept) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_dept[$i][1])){ echo $list_dept[$i][1];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix hidden-lg"></div>
                                                    <label for="cemail" class="control-label col-lg-2">Status Program *</label>
                                                    <div class="col-lg-4">
                                                        <select id="status_program" class="form-control">
                                                            <option>Not Started</option>
                                                            <option>Started</option>
                                                            <option>Finish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Vendor *</label>
                                                    <div class="col-lg-4">
                                                        <select id="nama_vendor" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_ven) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_ven[$i][3])){ echo $list_ven[$i][3];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Kontak Person *</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="kontakperson_program" type="kontakperson_program" name="text" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nomer Telepon/HP *</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="notelepon_program" type="text" name="notelepon_program" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Email*</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="email_program" type="email" name="email_program" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan</button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                        <!-- end program -->
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">List Program</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <!-- table edit -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <!-- Form Cari-->
                                                        <div style="float:right;margin:20px 10px 20px 10px;">
                                                            <label for="cari">Cari</label>
                                                            <input name="cari" id="cari" type="text" onKeyUp="cari();">
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: auto">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Id Program</th>
                                                                                <th>Kelompok Program</th>
                                                                                <th>Tanggal Mulai</th>
                                                                                <th>Tanggal Akhir</th>
                                                                                <th>Jenis Program</th>
                                                                                <th>Nama Program</th>
                                                                                <th>Nama Departemen</th>
                                                                                <th>Nama Vendor</th>
                                                                                <th>Pagu Program</th>
                                                                                <th>Kontak Person</th>
                                                                                <th>Nomer Telepon/Hp</th>
                                                                                <th>Email</th>
                                                                                <th>Status Program</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody">
                                                                            <?php for($i = 0 ; $i < count($list); $i++){ ?>
                                                                            <tr class="tr" id="tr-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                <td id="td-1-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-2-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][1])){ echo $list[$i][1];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][2])){ echo $list[$i][2];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-4-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][3])){ echo $list[$i][3];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-5-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][4])){ echo $list[$i][4];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-6-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][5])){ echo $list[$i][5];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-7-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][6])){ echo $list[$i][6];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-8-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][7])){ echo $list[$i][7];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-9-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][8])){ echo $list[$i][8];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-10-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][9])){ echo $list[$i][9];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-11-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][10])){ echo $list[$i][10];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-12-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][11])){ echo $list[$i][11];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-13-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][12])){ echo $list[$i][12];} ?></textarea></td>
                                                                                <td class="actions text-center td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <a style="cursor:pointer" id="edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" onClick="edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')" class="on-default edit-row"><i class="md md-edit"></i></a>
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
                <?php require_once("header/footer.php"); ?>
            </div> <!-- content -->
        </main>
        <main class="hidden-xl hidden-lg">
            <div class="content-page" style="min-height: 0px">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- Start Widget -->
                        <div class="row" style="margin-top: -170px">
                            <!-- Page-Title -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb breadcrumb-arrow">
                                    <li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
                                    <li><a href="?page=9176f6233d9bf1733d94155843e330d8">Data</a></li>
                                    <li class="active"><span>Program</span></li>
                                </ol>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Tambah Data Program</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" novalidate>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Kelompok Program *</label>
                                                    <div class="col-lg-4">
                                                        <select id="kelompok_program" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_kelpro) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_kelpro[$i][2])){ echo $list_kelpro[$i][2];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <label for="cemail" class="control-label col-lg-2">Tanggal Mulai *</label>
                                                    <div class="col-lg-2">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Jenis Program *</label>
                                                    <div class="col-lg-4">
                                                        <select id="jenis_program" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_jenpro) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_jenpro[$i][2])){ echo $list_jenpro[$i][2];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <label for="cemail" class="control-label col-lg-2">Tanggal Akhir *</label>
                                                    <div class="col-lg-2">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker3">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Program *</label>
                                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                                        <input class="form-control " id="nama_program" type="text" name="nama_program" required="" aria-required="true">
                                                    </div>
                                                    <div class="clearfix hidden-lg"></div>
                                                    <label for="cemail" class="control-label col-lg-2">Pagu Program *</label>
                                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                                        <input class="form-control " id="pagu_program" type="text" name="pagu_program" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Departamen *</label>
                                                    <div id="" class="col-lg-4 col-md-12 col-xs-12">
                                                        <select id="nama_departemen" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_dept) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_dept[$i][1])){ echo $list_dept[$i][1];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix hidden-lg"></div>
                                                    <label for="cemail" class="control-label col-lg-2">Status Program *</label>
                                                    <div class="col-lg-4">
                                                        <select id="status_program" class="form-control">
                                                            <option>Not Started</option>
                                                            <option>Started</option>
                                                            <option>Finish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Vendor *</label>
                                                    <div class="col-lg-4">
                                                        <select id="nama_vendor" class="form-control">
                                                            <?php for($i = 0 ; $i < count($list_ven) ; $i++){?>
                                                            <option>
                                                                <?php if(isset($list_ven[$i][3])){ echo $list_ven[$i][3];} ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Kontak Person *</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="kontakperson_program" type="kontakperson_program" name="text" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nomer Telepon/HP *</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="notelepon_program" type="text" name="notelepon_program" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Email*</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="email_program" type="email" name="email_program" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" onClick="tambah();" type="button">Simpan</button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                        <!-- end program -->
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">List Program</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <!-- table edit -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <!-- Form Cari-->
                                                        <div style="float:right;margin:20px 10px 20px 10px;">
                                                            <label for="cari">Cari</label>
                                                            <input name="cari" id="cari" type="text" onKeyUp="cari();">
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: auto">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Id Program</th>
                                                                                <th>Kelompok Program</th>
                                                                                <th>Tanggal Mulai</th>
                                                                                <th>Tanggal Akhir</th>
                                                                                <th>Jenis Program</th>
                                                                                <th>Nama Program</th>
                                                                                <th>Nama Departemen</th>
                                                                                <th>Nama Vendor</th>
                                                                                <th>Pagu Program</th>
                                                                                <th>Kontak Person</th>
                                                                                <th>Nomer Telepon/Hp</th>
                                                                                <th>Email</th>
                                                                                <th>Status Program</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody">
                                                                            <?php for($i = 0 ; $i < count($list); $i++){ ?>
                                                                            <tr class="tr" id="tr-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                <td id="td-1-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-2-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][1])){ echo $list[$i][1];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-3-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][2])){ echo $list[$i][2];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-4-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][3])){ echo $list[$i][3];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-5-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][4])){ echo $list[$i][4];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-6-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][5])){ echo $list[$i][5];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-7-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][6])){ echo $list[$i][6];} ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-8-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][7])){ echo $list[$i][7];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-9-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][8])){ echo $list[$i][8];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-10-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][9])){ echo $list[$i][9];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-11-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][10])){ echo $list[$i][10];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-12-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][11])){ echo $list[$i][11];} ?></textarea></td>
                                                                                <td class="td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <textarea readonly id="td-13-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" class="txt-<?php if(isset($list[$i][0])){echo $list[$i][0];}?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if(isset($list[$i][12])){ echo $list[$i][12];} ?></textarea></td>
                                                                                <td class="actions text-center td-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>">
                                                                                    <a style="cursor:pointer" id="edit-<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>" onClick="edit('<?php if(isset($list[$i][0])){ echo $list[$i][0];} ?>')" class="on-default edit-row"><i class="md md-edit"></i></a>
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
                <?php require_once("header/footer.php"); ?>
            </div> <!-- content -->
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
    <!-- Date picker-->
    <link rel="stylesheet" href="assets/jquery.ui.css">
    <script src="ui/jquery.ui.core.js"></script>
    <script src="ui/jquery.ui.widget.js"></script>
    <script src="ui/jquery.ui.datepicker.js"></script>
    <style>
        .datepicker{z-index:1151;}
      </style>
    <script>
    jQuery(document).ready(function() {

        $("#datepicker3").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy/mm/dd'
        });
        $("#datepicker2").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy/mm/dd'
        });
    });
    </script>
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
    /*jQuery(document).ready(function() {
                    
                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker({
                  showButtonPanel: true
                });
                jQuery('#datepicker2').datepicker({
                  showButtonPanel: true
                });
        jQuery('#datepicker3').datepicker({
                  showButtonPanel: true
                });
                     });
              */
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    });
    </script>
    <script>
    function cari() {
        var cari = $("#cari").val();
        $.ajax({
            type: "POST",
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=b7033f835ba67381342279436b12a1f2",
            data: 'aksi=cari&cari=' + cari,
            success: function(msg) {
                //alert(msg);
                /////alert(msg);id_program, kelompok_program, tanggalmulai_program, tanggalakhir_program, jenis_program, nama_program, nama_departemen, nama_vendor, pagu_program, kontakperson_program, notelepon_program, email_program, status_program
                $('.tr').remove();
                $.each(JSON.parse(msg), function(idx, data) {
                    $("#tbody").append('<tr class="tr" id="tr-' + data.id_program + '"><td id="td-1-' + data.id_program + '" class="td-' + data.id_program + '">' + data.id_program + '</td><td class="td-' + data.id_program + '"><textarea readonly id="td-2-' + data.id_program + '" class="txt-' + data.id_program + '" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.kelompok_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-3-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.tanggalmulai_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-4-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.tanggalakhir_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-5-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.jenis_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-6-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.nama_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-7-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.nama_departemen + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-8-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.nama_vendor + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-9-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.pagu_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-10-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.kontakperson_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-11-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.notelepon_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-12-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.email_program + '</textarea></td><td class="td-' + data.id_program + '"><textarea readonly id="td-13-' + data.id_program + '" class="txt-' + data.id_program + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + data.status_program + '</textarea></td><td class="actions text-center td-' + data.id_program + '"><a style="cursor:pointer" id="edit-' + data.id_program + '" onClick="edit(\'' + data.id_program + '\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-' + data.id_program + '" class="on-default remove-row" onClick="save_edit(\'' + data.id_program + '\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-' + data.id_program + '" class="on-default remove-row" onClick="cancel_edit(\'' + data.id_program + '\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\'' + data.id_program + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');
                });
            }
        });
    }
    </script>
    <script type="text/javascript">
    function tambah() {
        //id_program, kelompok_program, tanggalmulai_program, tanggalakhir_program, jenis_program, nama_program, nama_departemen, nama_vendor, pagu_program, kontakperson_program, notelepon_program, email_program, status_program
        var kelompok_program = $("#kelompok_program").val();
        var tanggalmulai_program = $("#datepicker2").val();
        var tanggalakhir_program = $("#datepicker3").val();
        var jenis_program = $("#jenis_program").val();
        var nama_program = $("#nama_program").val();
        var nama_departemen = $("#nama_departemen").val();
        var nama_vendor = $("#nama_vendor").val();
        var pagu_program = $("#pagu_program").val();
        var kontakperson_program = $("#kontakperson_program").val();
        var notelepon_program = $("#notelepon_program").val();
        var email_program = $("#email_program").val();
        var status_program = $("#status_program").val();
        //alert(tanggallahir_pegawai);
        $.ajax({
            type: "POST",
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=b7033f835ba67381342279436b12a1f2",
            data: 'aksi=tambah&kelompok_program=' + kelompok_program + '&tanggalmulai_program=' + tanggalmulai_program + '&jenis_program=' + jenis_program + '&tanggalakhir_program=' + tanggalakhir_program + '&nama_program=' + nama_program + '&pagu_program=' + pagu_program + '&nama_departemen=' + nama_departemen + '&status_program=' + status_program + '&nama_vendor=' + nama_vendor + '&notelepon_program=' + notelepon_program + '&email_program=' + email_program + '&kontakperson_program=' + kontakperson_program,
            success: function(msg) {
                //alert(msg);
                $("#jenis_program option:eq(0)").attr('selected', true);
                $("#kelompok_program option:eq(0)").attr('selected', true);
                $("#datepicker2").val();
                $("#datepicker3").val();
                $("#nama_program").val();
                $("#nama_departemen option:eq(0)").attr('selected', true);
                $("#nama_vendor option:eq(0)").attr('selected', true);
                $("#pagu_program").val();
                $("#kontakperson_program").val();
                $("#notelepon_program").val();
                $("#email_program").val();
                $("#status_program option:eq(0)").attr('selected', true);
                // , , , , , , 
                if (msg !== "gagal" || msg !== "") {
                    alert("Berhasil Menambahkan Data");
                    $("#tbody").append('<tr class="tr" id="tr-' + msg + '"><td id="td-1-' + msg + '" class="td-' + msg + '">' + msg + '</td><td class="td-' + msg + '"><textarea readonly id="td-2-' + msg + '" class="txt-' + msg + '" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + kelompok_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-3-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + tanggalmulai_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-4-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + tanggalakhir_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-5-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + jenis_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-6-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + nama_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-7-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + nama_departemen + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-8-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + nama_vendor + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-9-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + pagu_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-10-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + kontakperson_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-11-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + notelepon_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-12-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + email_program + '</textarea></td><td class="td-' + msg + '"><textarea readonly id="td-13-' + msg + '" class="txt-' + msg + '"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">' + status_program + '</textarea></td><td class="actions text-center td-' + msg + '"><a style="cursor:pointer" id="edit-' + msg + '" onClick="edit(\'' + msg + '\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-' + msg + '" class="on-default remove-row" onClick="save_edit(\'' + msg + '\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-' + msg + '" class="on-default remove-row" onClick="cancel_edit(\'' + msg + '\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\'' + msg + '\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');

                }
            }
        });
    }
    </script>
    <script>
    function edit(baris) {
        var a = $(".td-" + baris).val();
        $(".txt-" + baris).attr("readonly", false);
        $("#save-" + baris).attr("hidden", false);
        $("#edit-" + baris).attr("hidden", true);
        $("#cancel-edit-" + baris).attr("hidden", false);
        $(".txt-" + baris).css("background-color", "coral");
    }
    </script>
    <script>
    function save_edit(baris) {
        var id_program = $('#td-1-' + baris).val();
        var kelompok_program = $('#td-2-' + baris).val();
        var tanggalmulai_program = $('#td-3-' + baris).val();
        var tanggalakhir_program = $('#td-4-' + baris).val();
        var jenis_program = $('#td-5-' + baris).val();
        var nama_program = $('#td-6-' + baris).val();
        var nama_departemen = $('#td-7-' + baris).val();
        var nama_vendor = $('#td-8-' + baris).val();
        var pagu_program = $('#td-9-' + baris).val();
        var kontakperson_program = $('#td-10-' + baris).val();
        var notelepon_program = $('#td-11-' + baris).val();
        var email_program = $('#td-12-' + baris).val();
        var status_program = $('#td-13-' + baris).val();

        //alert(id_program+""+nama_departemen+""+alamat_pegawai+""+jeniskelamin_pegawai+""+tanggallahir_pegawai+""+nomor_pegawai+""+email_pegawai);

        $.ajax({
            type: "POST",
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=b7033f835ba67381342279436b12a1f2",
            data: 'aksi=ubah' + '&id_program=' + baris + '&kelompok_program=' + kelompok_program + '&tanggalmulai_program=' + tanggalmulai_program + '&jenis_program=' + jenis_program + '&tanggalakhir_program=' + tanggalakhir_program + '&nama_program=' + nama_program + '&pagu_program=' + pagu_program + '&nama_departemen=' + nama_departemen + '&status_program=' + status_program + '&nama_vendor=' + nama_vendor + '&notelepon_program=' + notelepon_program + '&email_program=' + email_program + '&kontakperson_program=' + kontakperson_program,
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
            url: "index.php?page=9176f6233d9bf1733d94155843e330d8&kode=b7033f835ba67381342279436b12a1f2",
            data: 'aksi=hapus' + '&id_program=' + baris,
            success: function(msg) {
                alert(msg);
                $("#tr-" + baris).remove();
            }
        });
    }
    </script>
</body>

</html>