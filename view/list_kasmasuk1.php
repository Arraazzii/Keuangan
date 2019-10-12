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
        <!-- <style>
  .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  font-size: 17px;
}

.hovereffect:hover h2 {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect h2,
.hovereffect p {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
  padding: 0px;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 40%;
  height: 60%;
  border: 2px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(0,0,1);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
}

.hovereffect p {
  width: 20%;
  text-transform: none;
  font-size: 15px;
  line-height: 2;
}

.hovereffect p a {
  color: #fff;
}

.hovereffect p a:hover,
.hovereffect p a:focus {
  opacity: 0.6;
  filter: alpha(opacity=60);
}

.hovereffect  a i {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  padding: 0px 5px;
}

.hovereffect p a:first-child i {
  -webkit-transform: translate3d(-60px,-60px,0);
  transform: translate3d(-60px,-60px,0);
}

.hovereffect p a:nth-child(2) i {
  -webkit-transform: translate3d(60px,-60px,0);
  transform: translate3d(60px,-60px,0);
}

.hovereffect p a:nth-child(3) i {
  -webkit-transform: translate3d(-60px,60px,0);
  transform: translate3d(-60px,60px,0);
}

.hovereffect p a:nth-child(4) i {
  -webkit-transform: translate3d(60px,60px,0);
  transform: translate3d(60px,60px,0);
}

.hovereffect:hover .overlay:before {
  opacity: 1;
  filter: alpha(opacity=100);
  background-color: rgba(0,0,0,0.2);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(1,1,1);
}

.hovereffect:hover p i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  opacity: 1;
  filter: alpha(opacity=100);
}
    </style> -->
  <style type="text/css">
    .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #42b078;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  overflow: hidden;
  padding: 0.5em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

  </style>
   

   
   
   
 <style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 30px;
    right: 100%;
    margin-top: -1px;
}
</style>
 


 
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <?php require_once("header/header.php"); ?>
            
          


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
          <br>
                <div class="content-page" style="min-height: 620px">
              
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->

                        <!-- tambah dana masuk -->
                        <!-- Start Widget -->
                       <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Data Dana Masuk</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm"  novalidate>
                                                  
                                                  
                                                  <div class="form-group">
                                                    <label class="col-md-2 control-label" for="example-input1-group2">Pencarian</label>
                                                    <div class="col-lg-6">

                                                        <div class="col-lg-3" >
                                        
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tgl Awal" id="datepicker">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                      
                                                        <br />
                                                              </div>

                                                              <div class="col-lg-3">
                                                                
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tgl Akhir" id="datepicker2">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        </div><!-- input-group -->
                                                      
                                                        <br />
                                                              </div>

                                                        <div class="input-group">                            
                                                            <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                                            <span class="input-group-btn">
                                                            <button type="button" class="btn waves-effect waves-light btn-success"><i class="fa fa-search"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>




                                                  <div class="form-group ">
                                                    
                                                    <label for="cemail" class="control-label col-lg-2">Nomor *</label>
                                                    <div class="col-lg-2">
                                                        <input class="form-control " id="nomor_danamasuk" type="text" name="nomor_danamasuk" required="" aria-required="true" readonly>
                                                    </div>

                                                    <label for="cemail" class="control-label col-lg-2">Tanggal *</label>
                                                   
                                                <div class="col-lg-2">
                                                   <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker3">
                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><!-- input-group -->
                                                </div>

                                                <label for="cemail" class="control-label col-lg-2">Diterima Dari *</label>
                                                <div class="col-lg-2">
                                                    <select id="diterimadari_danamasuk" class="form-control">
                                                        <?php for($i = 0; $i < count($list_don);$i++){?>
                                                        <option><?php if(isset($list_don[$i][1])){ echo $list_don[$i][1]; }?></option>
                                                        <?php } ?>
                                                    </select>
                                                    
                                                </div>

                                                </div>

                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Rekening *</label>
                                                        <div class="col-lg-4">
                                                        <input  id="rekening_danamasuk" type="radio" name="rekening_danamasuk" required="" aria-required="true" value="Kas"> Kas
                                                   
                                                        <input  id="rekening_danamasuk" type="radio" name="rekening_danamasuk" required="" aria-required="true" value="Bank"> Bank
                                                        </div>
                                                </div>


                                                 <div class="form-group ">

                                                 
                                                    <label for="cemail" class="control-label col-lg-2">Nama Bank *</label>
                                                   
                                                <div class="col-lg-4">
                                                    <select id="namabank_danamasuk" class="form-control">
                                                        <?php for($i = 0; $i < count($list_kelpro);$i++){?>
                                                        <option><?php if(isset($list_kelpro[$i][1])){ echo $list_kelpro[$i][2]; }?></option>
                                                        <?php } ?>
                                                    </select>
                                                    
                                                </div>
										</div>
                                            
                                               <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Jumlah(Rp) *</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="jumlah_danamasuk" type="text" name="jumlah_danamasuk" required="" aria-required="true">
                                                    </div>
                                                </div>

                                                 

                                                <div class="form-group ">

                                                 
                                                    <label for="cemail" class="control-label col-lg-2">Cara Pembayaran *</label>
                                                   
                                                <div class="col-lg-4">
                                                    <select id="carapembayaran_danamasuk" class="form-control">
                                                        <?php for($i = 0; $i < count($list_jenpro);$i++){?>
                                                        <option><?php if(isset($list_jenpro[$i][1])){ echo $list_jenpro[$i][2]; }?></option>
                                                        <?php } ?>
                                                    </select>
                                                    
                                                </div>
                                        
                                                 </div>


                                                 <div class="form-group ">
                                                  <label for="ccomment" class="control-label col-lg-2">Keterangan *</label>
                                                    <div class="col-lg-4">
                                                        <textarea class="form-control " id="keterangan_danamasuk" name="keterangan_danamasuk" required aria-required="true"></textarea>
                                                    </div>                    
                                        
                                                 </div>
                                                <!--<label for="cemail" class="control-label col-lg-2">Tanggal Jatuh Tempo*</label>
                                                   
                                                <div class="col-lg-2">
                                                   <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div>
                                                </div>-->
                                                </div>

											<button class="btn btn-success waves-effect waves-light" onClick="tambah_data();" type="button">Tambah Data</button>
                                            
                                               <div class="panel-body">
                                               
                                               
                                               
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table  class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No. Rekening</th>
                                                            <th>Uraian</th>
                                                            <th>Nilai (Rp)</th>
                                                            <th>Departemen</th>
                                                            <th>Program</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody id="tbody" onDblClick="tambah_row();">
                                                       
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

   

                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Status *</label>
                                                        <div class="col-lg-4">
                                                        <input  id="status_danamasuk" type="radio" name="status_danamasuk" required="" aria-required="true" value="Y"> Approved
                                                   
                                                        <input  id="status_danamasuk" type="radio" name="status_danamasuk" required="" aria-required="true" value="T"> Not Approved
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
                        <!-- end tambah dana masuk -->
    
                        



                        


                    </div> <!-- container -->
                               
                </div> <!-- content -->

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
    
    
    <link rel="stylesheet" href="assets/jquery.ui.css">
       <!-- <script src="js/jquery.js"></script> 
        <script src="js/jquery-1.7.2.js"></script>-->
        <script src="ui/jquery.ui.core.js"></script>
        <script src="ui/jquery.ui.widget.js"></script>
        <script src="ui/jquery.ui.datepicker.js"></script>

         <style>
    .datepicker{z-index:1151;}
      </style>


<script>
            jQuery(document).ready(function() {
                    
                $( "#datepicker3" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy/mm/dd'
    });
    $( "#datepicker2" ).datepicker({
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
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

<script>
            jQuery(document).ready(function() {
                    
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
              
        </script>

         <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
			
			
			//id_danamasuk, nomor_danamasuk, tanggal_danamasuk, diterimadari_danamasuk, rekening_danamasuk, namabank_danamasuk, jumlah_danamasuk, carapembayaran_danamasuk, keterangan_danamasuk, status_danamasuk
			
        </script>
    
    	
        <script>
        	function cari(){
				var cari = $("#cari").val();				
				$.ajax({
					type:"POST",
					url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=453b827706f2499dacaea8101d3eb09f",
					data:'aksi=cari&cari='+cari,
					success: function(msg){
						$('.tr').remove();
						$.each(JSON.parse(msg),function(idx,data){
							$("#tbody").append('<tr class="tr" id="tr-'+data.nomor_departemen+'"><td id="td-1-'+data.nomor_departemen+'" class="td-'+data.nomor_departemen+'">'+data.nomor_departemen+'</td><td class="td-'+data.nomor_departemen+'"><textarea readonly id="td-2-'+data.nomor_departemen+'" class="txt-'+data.nomor_departemen+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+data.nama_departemen+'</textarea></td><td class="td-'+data.nomor_departemen+'"><textarea readonly id="td-3-'+data.nomor_departemen+'" class="txt-'+data.nomor_departemen+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+data.penanggungjawab_departemen+'</textarea></td><td class="td-'+data.nomor_departemen+'"><textarea readonly id="td-4-'+data.nomor_departemen+'" class="txt-'+data.nomor_departemen+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'+data.keterangan_departemen+'</textarea></td><td class="actions text-center td-'+data.nomor_departemen+'"><a style="cursor:pointer" id="edit-'+data.nomor_departemen+'" onClick="edit(\''+data.nomor_departemen+'\')" class="on-default edit-row"><i class="md md-edit"></i></a><a style="cursor:pointer" hidden="" id="save-'+data.nomor_departemen+'" class="on-default remove-row" onClick="save_edit(\''+data.nomor_departemen+'\')"><i class="md md-save"></i></a><a style="cursor:pointer" hidden="" id="cancel-edit-'+data.nomor_departemen+'" class="on-default remove-row" onClick="cancel_edit(\''+data.nomor_departemen+'\')"><i class="md md-cancel"></i></a><a style="cursor:pointer" onClick="hapus(\''+data.nomor_departemen+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>');							
						});
					}
				});
			}
        </script>
        
        <script type="text/javascript">
		//id_danamasuk, nomor_danamasuk, tanggal_danamasuk, diterimadari_danamasuk, rekening_danamasuk, namabank_danamasuk, jumlah_danamasuk, carapembayaran_danamasuk, keterangan_danamasuk, status_danamasuk
        	function tambah(){
				var nomor_danamasuk = $('#nomor_danamasuk').val();
				var tanggal_danamasuk = $('#tanggal_danamasuk').val();
				var diterimadari_danamasuk = $('#diterimadari_danamasuk').val();
				var rekening_danamasuk = $('#rekening_danamasuk').val();
				var namabank_danamasuk = $('#namabank_danamasuk').val();
				var jumlah_danamasuk = $('#jumlah_danamasuk').val();
				var carapembayaran_danamasuk = $('#carapembayaran_danamasuk').val();
				var keterangan_danamasuk = $('#keterangan_danamasuk').val();
				var status_danamasuk = $('#status_danamasuk').val();
				

				$.ajax({
					type:"POST",
					url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=453b827706f2499dacaea8101d3eb09f",
					data:'aksi=tambah'+'&nomor_danamasuk='+nomor_danamasuk+'&tanggal_danamasuk='+tanggal_danamasuk+'&diterimadari_danamasuk='+diterimadari_danamasuk+'&rekening_danamasuk='+rekening_danamasuk+'&namabank_danamasuk='+namabank_danamasuk+'&jumlah_danamasuk='+jumlah_danamasuk+'&carapembayaran_danamasuk='+carapembayaran_danamasuk+'&keterangan_danamasuk='+keterangan_danamasuk+'&status_danamasuk='+status_danamasuk,
					success: function(msg){
						//alert(msg);
						if(msg !== "gagal" || msg !== ""){
							tambah2(msg);
							alert("Berhasil");
							window.location.reload();
						}
						
					}
				});
			}
			
			//id_detail_dana_masuk, id_dana_masuk, no_rekening, uraian, nilai, departemen, program
			function tambah2(id_danamasuk){
				var batas = +$('#row_count').text();
				for(i = 1; i <= batas; i++){
					var no_rekening = $('#td-1-'+i).val();
					var uraian = $('#td-2-'+i).val();
					var nilai = $('#td-3-'+i).val();
					var departemen = $('#td-4-'+i).val();
					var program = $('#td-5-'+i).val();
					
					$.ajax({
					type:"POST",
					url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=453b827706f2499dacaea8101d3eb09f",
					data:'aksi=tambah_detail'+'&id_dana_masuk= '+id_danamasuk+' &no_rekening= '+no_rekening+' &uraian= '+uraian+' &nilai= '+nilai+' &departemen= '+departemen+' &program='+program,
					success: function(msg){
						//alert(msg);
						if(msg !== "gagal" || msg !== ""){
						
						}
						
					}
				});
					
				}
			}
			
        </script>
        
        <script>
        	function edit(baris){
				var a = $(".td-"+baris).val();
				$(".txt-"+baris).attr("readonly",false);
				$("#save-"+baris).attr("hidden",false);
				$("#edit-"+baris).attr("hidden",true);
				$("#cancel-edit-"+baris).attr("hidden",false);
				$(".txt-"+baris).css("background-color","coral");
			}
        </script>
        
        <script>
        	function save_edit(baris){
				var nama_departemen = $('#td-2-'+baris).val();
				var penanggung_jawab = $('#td-3-'+baris).val();
				var keterangan = $('#td-4-'+baris).val();
				
				$.ajax({
					type:"POST", 
					url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=453b827706f2499dacaea8101d3eb09f",
					data:'aksi=ubah&nomor_departemen='+baris+'&nama_departemen='+nama_departemen+'&penanggung_jawab='+penanggung_jawab+'&keterangan='+keterangan,
					success: function(msg){
						alert(msg);
						$(".txt-"+baris).attr("readonly",true);
						$("#save-"+baris).attr("hidden",true);
						$("#cancel-edit-"+baris).attr("hidden",true);
						$("#edit-"+baris).attr("hidden",false);
						$(".txt-"+baris).css("background-color","transparent");
					}
				});
			}
        </script>
        
        <script>
        	function cancel_edit(baris){
				$('#td-2-'+baris).val($('#td-2-'+baris).text());
				$('#td-3-'+baris).val($('#td-3-'+baris).text());
				$('#td-4-'+baris).val($('#td-4-'+baris).text());
				$(".txt-"+baris).attr("readonly",true);
				$("#save-"+baris).attr("hidden",true);
				$("#edit-"+baris).attr("hidden",false);
				$("#cancel-edit-"+baris).attr("hidden",true);
				$(".txt-"+baris).css("background-color","transparent");
			}
        </script>
        
        
        <script>
        	function hapus(baris){
				$("#tr-"+baris).remove();	
				var row_count = +$("#row_count").text() - 1;
				$("#row_count").text(row_count)		
				/*$.ajax({
					type:"POST",
					url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=453b827706f2499dacaea8101d3eb09f",
					data:'aksi=hapus'+'&nomor_departemen='+baris,
					success: function(msg){
						alert(msg);
						$("#tr-"+baris).remove();
					}
				});*/
			}
        </script>
        
        <script>
        	$(document).ready(function(e) {
				$.ajax({
					type:"POST",
					url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=453b827706f2499dacaea8101d3eb09f",
					data:'aksi=id',
					success: function(msg){
						//alert(msg);
						$("#nomor_danamasuk").val(msg);
					}
				});
			});
        </script>
        
        <div hidden="" id="row_count">0</div>
        <div id="departement_list"></div>
        
        <script>
        	function tambah_data(){
				var departemen = [];
				var program = [];
				$.ajax({
					type:"POST",
					url:"index.php?page=40f57ec532ab642c6c632ee8f9eb6112&kode=453b827706f2499dacaea8101d3eb09f",
					data:'aksi=data_json',
					success: function(msg){
						$.each(JSON.parse(msg),function(idx,data){
							//departemen.push(data.nama_departemen);
							//alert(data.departemen[1].nama_departemen);
							for(i = 0 ; i < data.departemen.length; i++){
								departemen.push(data.departemen[i].nama_departemen);
							}
							for(i = 0 ; i < data.program.length; i++){
								program.push(data.program[i].namajenis_jenisprogram);
							}
						});
						var a = '';
						for(i = 0; i < departemen.length; i++){
						   a +='<option>'+departemen[i]+'</option>';
						}
						var b = '';
						for(i = 0; i < program.length; i++){
						   b +='<option>'+program[i]+'</option>';
						}
						
						var part1 = '<tr class="tr" id="tr-'+id_detail_dana_masuk+'"><td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-1-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"></textarea></td><td class="td-'+""+'"><textarea  id="td-2-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"></textarea></td><td class="td-'+id_detail_dana_masuk+'"><textarea  id="td-3-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"></textarea></td><td class="td-'+id_detail_dana_masuk+'"><select id="td-4-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">'
						var part2 = a;
						var part3 = '</select></td><td class="td-'+id_detail_dana_masuk+'"><select id="td-5-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;">';
						var part4 = b;
						var part5 = '</select></td><td class="actions text-center td-'+id_detail_dana_masuk+'"><a style="cursor:pointer" onClick="hapus(\''+id_detail_dana_masuk+'\');"  class="on-default remove-row"><i class="md md-delete"></i></a></td></tr>';
						$("#tbody").append(part1+part2+part3+part4+part5);
					}
				});
				
				var id_detail_dana_masuk = +$("#row_count").text() + 1;
				$("#row_count").text( +$("#row_count").text()+ 1);
			}
			
			//<textarea  id="td-4-'+id_detail_dana_masuk+'" class="txt-'+id_detail_dana_masuk+'"  name="" cols="5" rows="1" style="overflow:hidden;width: 100%; height:17px; background:none;border:none; resize:none;"></textarea>
			
			/*<a style="cursor:pointer" id="edit-'+id_detail_dana_masuk+'" onClick="edit(\''+id_detail_dana_masuk+'\')" class="on-default edit-row"><i class="md md-edit"></i></a>
				<a style="cursor:pointer" hidden="" id="save-'+id_detail_dana_masuk+'" class="on-default remove-row" onClick="save_edit(\''+id_detail_dana_masuk+'\')"><i class="md md-save"></i></a>
				<a style="cursor:pointer" hidden="" id="cancel-edit-'+id_detail_dana_masuk+'" class="on-default remove-row" onClick="cancel_edit(\''+id_detail_dana_masuk+'\')"><i class="md md-cancel"></i></a>*/
			
        </script>
    
    </body>
</html>