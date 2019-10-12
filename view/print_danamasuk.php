<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                                    <li class="active"><span>List Masuk</span></li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">List Dana Masuk</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!-- <form> -->
                                            <!-- table edit -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <!-- Form Cari-->
                                                        <div style="float:left;margin:20px 10px 20px 10px;">
                                                            <label for="cari">Cari</label>
                                                            <input name="datepicker8" id="datepicker8" type="text"> -
                                                            <input name="datepicker9" id="datepicker9" type="text">
                                                            <button class="btn btn-link btn-xs" onclick="cari();"><i class="md md-search"></i></button>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <table class="table table-striped table-bordered display nowrap" id="Example">
                                                                        <thead id="thead">
                                                                            <tr>
                                                                                <th>No.</th>
                                                                                <th>No. Transaksi</th>
                                                                                <th>Tanggal</th>
                                                                                <th>Diterima dari</th>
                                                                                <th>Uraian</th>
                                                                                <th>Nama Rekening</th>
                                                                                <th>Debet</th>
                                                                                <th>Nama Rekening</th>
                                                                                <th>Kredit</th>
                                                                                <!--  <th>Cara Pembayaran</th> -->
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody">
                                                                            <?php $no = 1;
                                                                            for ($i = 0; $i < count($list); $i++) { ?>
                                                                            <tr class="tr" id="tr-<?php if (isset($list[$i][0])) {
                                                                                                        echo $list[$i][0];
                                                                                                    } ?>">
                                                                                <td><?= $no++; ?>.</td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-2-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][1])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][1];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-3-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][2])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][2];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-4-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][3])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][3];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][4])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][4];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][5])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Debet") {
                                                                                                                                                                                                                                                                                                                                                                    echo $list[$i][6] . " - " . $list[$i][6];
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][6])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Debet") {
                                                                                                                                                                                                                                                                                                                                                                    echo number_format($list[$i][7], 2);
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][7])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Kredit") {
                                                                                                                                                                                                                                                                                                                                                                    echo $list[$i][6] . " - " . $list[$i][6];
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][6])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Kredit") {
                                                                                                                                                                                                                                                                                                                                                                    echo number_format($list[$i][7], 2);
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:19px; background:none;border:none; resize:none;"><?php if (isset($list[$i][8])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][9] == 'T') {
                                                                                                                                                                                                                                                                                                                                                                    echo "Not Approved";
                                                                                                                                                                                                                                                                                                                                                                } else if ($list[$i][9] == 'Y') {
                                                                                                                                                                                                                                                                                                                                                                    echo "Approved";
                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                            } ?>
                                                                                    </textarea>
                                                                                </td>
                                                                                <td class="actions text-center td-<?php if (isset($list[$i][0])) {
                                                                                                                        echo $list[$i][0];
                                                                                                                    } ?>">
                                                                                    <form action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=98affdbdb60cf00c98a3f70b218668e7" method="POST">
                                                                                    <!-- <a style="cursor:pointer" id="detail-<?php if (isset($list[$i][0])) {
                                                                                                                                    echo $list[$i][0];
                                                                                                                                } ?>" onClick="" class="on-default edit-row"><i class="md md-search"></i></a> -->
                                                                                    <a style="cursor:pointer" title="Approvement" id="edit-<?php if (isset($list[$i][0])) {
                                                                                                                                                echo $list[$i][0];
                                                                                                                                            } ?>" onClick="acc('<?php if (isset($list[$i][0])) {
                                                                                                                                                                                                                    echo $list[$i][0];
                                                                                                                                                                                                                } ?>', '<?php if (isset($list[$i][9])) {
                                                                                                                                                                                                                                                                            echo $list[$i][9];
                                                                                                                                                                                                                                                                        } ?>')" class="btn btn-info btn-xs on-default edit-row"><i class="md md-done"></i></a>
                                                                                    <a style="cursor:pointer" title="Hapus" id="hapus-<?php if (isset($list[$i][0])) {
                                                                                                                                            echo $list[$i][0];
                                                                                                                                        } ?>" onClick="hapus('<?php if (isset($list[$i][0])) {
                                                                                                                                                                                                                echo $list[$i][0];
                                                                                                                                                                                                            } ?>');" class="btn btn-danger btn-xs on-default edit-row"><i class="md md-delete"></i></a>
                                                                                    <input type="hidden" name="iddanamasuk" id="iddanamasuk" value="<?php if (isset($list[$i][0])) {
                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                    } ?>">
                                                                                    <button title="Edit" type="submit" class="btn btn-success btn-xs"><i class="md md-edit"></i></button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                            <?php 
                                                                        } ?>
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
                                                                                <th>Cari</th>
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
                                    <li class="active"><span>List Masuk</span></li>
                                </ol>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">List Dana Masuk</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!-- <form> -->
                                            <!-- table edit -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <!-- Form Cari-->
                                                        <div style="float:left;margin:20px 10px 20px 10px;">
                                                            <label for="cari">Cari</label>
                                                            <input name="datepicker8" type="text"> -
                                                            <input name="datepicker9" type="text">
                                                            <button class="md md-search" onclick="cari();"></button>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead id="thead">
                                                                            <tr>
                                                                                <th>Nomor</th>
                                                                                <th>Tanggal</th>
                                                                                <th>Diterima dari</th>
                                                                                <th>Uraian</th>
                                                                                <th>Nama Rek</th>
                                                                                <th>Debet</th>
                                                                                <th>Nama Rek</th>
                                                                                <th>Kredit</th>
                                                                                <!--  <th>Cara Pembayaran</th> -->
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbody">
                                                                            <?php for ($i = 0; $i < count($list); $i++) { ?>
                                                                            <tr class="tr" id="tr-<?php if (isset($list[$i][0])) {
                                                                                                        echo $list[$i][0];
                                                                                                    } ?>">
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-2-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][1])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][1];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-3-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][2])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][2];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-4-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][3])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][3];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][4])) {
                                                                                                                                                                                                                                                                                                                                                                echo $list[$i][4];
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][5])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Debet") {
                                                                                                                                                                                                                                                                                                                                                                    echo $list[$i][5] . " - " . $list[$i][6];
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][6])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Debet") {
                                                                                                                                                                                                                                                                                                                                                                    echo number_format($list[$i][7], 2);
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][7])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Kredit") {
                                                                                                                                                                                                                                                                                                                                                                    echo $list[$i][5] . " - " . $list[$i][6];
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"><?php if (isset($list[$i][6])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][8] == "Kredit") {
                                                                                                                                                                                                                                                                                                                                                                    echo number_format($list[$i][7], 2);
                                                                                                                                                                                                                                                                                                                                                                };
                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="td-<?php if (isset($list[$i][0])) {
                                                                                                    echo $list[$i][0];
                                                                                                } ?>">
                                                                                    <textarea readonly id="td-5-<?php if (isset($list[$i][0])) {
                                                                                                                    echo $list[$i][0];
                                                                                                                } ?>" class="txt-<?php if (isset($list[$i][0])) {
                                                                                                                                                                                        echo $list[$i][0];
                                                                                                                                                                                    } ?>" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:19px; background:none;border:none; resize:none;"><?php if (isset($list[$i][8])) {
                                                                                                                                                                                                                                                                                                                                                                if ($list[$i][9] == 'T') {

                                                                                                                                                                                                                                                                                                                                                                    echo "Not Approved";

                                                                                                                                                                                                                                                                                                                                                                } else if ($list[$i][9] == 'Y') {

                                                                                                                                                                                                                                                                                                                                                                    echo "Approved";

                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                            } ?></textarea>
                                                                                </td>
                                                                                <td class="actions text-center td-<?php if (isset($list[$i][0])) {
                                                                                                                        echo $list[$i][0];
                                                                                                                    } ?>">
                                                                                    <!-- <a style="cursor:pointer" id="detail-<?php if (isset($list[$i][0])) {
                                                                                                                                    echo $list[$i][0];
                                                                                                                                } ?>" onClick="" class="on-default edit-row"><i class="md md-search"></i></a> -->
                                                                                    <form action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=detail_listdanamasuk" method="POST">
                                                                                        <input type="hidden" name="iddanamasuk" id="iddanamasuk" value="<?php if (isset($list[$i][0])) {
                                                                                                                                                            echo $list[$i][0];
                                                                                                                                                        } ?>">
                                                                                        <!-- <input type="hidden" name="aksi" id="aksi" value="baca_detail" > -->
                                                                                        <button title="Detail" type="submit" class="md md-search"></button>
                                                                                    </form>
                                                                                    <a style="cursor:pointer" title="Approvement" id="edit-<?php if (isset($list[$i][0])) {
                                                                                                                                                echo $list[$i][0];
                                                                                                                                            } ?>" onClick="acc('<?php if (isset($list[$i][0])) {
                                                                                                                                                                                                                    echo $list[$i][0];
                                                                                                                                                                                                                } ?>', '<?php if (isset($list[$i][9])) {
                                                                                                                                                                                                                                                                            echo $list[$i][9];
                                                                                                                                                                                                                                                                        } ?>')" class="on-default edit-row"><i class="md md-done"></i></a>
                                                                                    <a style="cursor:pointer" title="Hapus" id="hapus-<?php if (isset($list[$i][0])) {
                                                                                                                                            echo $list[$i][0];
                                                                                                                                        } ?>" onClick="hapus('<?php if (isset($list[$i][0])) {
                                                                                                                                                                                                                echo $list[$i][0];
                                                                                                                                                                                                            } ?>');" class="on-default edit-row"><i class="md md-delete"></i></a>
                                                                                    <form action="index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=98affdbdb60cf00c98a3f70b218668e7" method="POST">
                                                                                        <input type="hidden" name="iddanamasuk" id="iddanamasuk" value="<?php if (isset($list[$i][0])) {
                                                                                                                                                            echo $list[$i][0];
                                                                                                                                                        } ?>">
                                                                                        <!-- <input type="hidden" name="aksi" id="aksi" value="baca_detail" > -->
                                                                                        <button title="Edit" type="submit" class="md md-edit"></button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                            <?php 
                                                                        } ?>
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
                <?php require_once("header/footer.php"); ?>
            </div>
        </main>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
</body>
</html>