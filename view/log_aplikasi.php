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
<style type="text/css">
.panel{
	border-radius: 0px !important;
	margin-top: -20px;
}
</style>
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
							<h4 class="pull-left page-title"></h4>
							<ol class="breadcrumb breadcrumb-arrow">
								<li><a href="?page=3edbf72c17de6ffe453f9e729c73468e">Dashboard</a></li>
								<li><a href="?page=6a3b61f42cded56019b264080e226e40">Pengaturan</a></li>
								<li class="active"><span>Log Aplikasi</span></li>
							</ol>
						</div>
					</div><br>
					<!-- Start Widget -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading"><h3 class="panel-title">Log Aplikasi</h3>
								</div>
								<div class="panel-body">
									<div class=" form">
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
																			<!-- <th>No.</th> -->
																			<th class="text-center">No</th>
																			<th>Aktivitas</th>
																			<th class="text-center">Waktu</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $no=1; foreach ($list as $list_user) {?>
																		<tr>
																			<td class="text-center"><?php echo $no++;?></td>

																			<td style="text-transform: capitalize;"><b><?php echo $list_user['user_action'];?></b> <?php echo $list_user['action'];?>
																				<?php
																				if ($list_user['log_action'] == "hapus") {
																					?>
																					<i class="fa fa-trash pull-right"></i>
																					<?php
																				}elseif ($list_user['log_action'] == "edit") {
																					?>
																					<i class="fa fa-edit pull-right"></i>
																					<?php
																				}elseif ($list_user['log_action'] == "simpan") {
																					?>
																					<i class="fa fa-plus-square pull-right"></i>
																					<?php
																				}elseif ($list_user['log_action'] == "login") {
																					?>
																					<i class="fa fa-user pull-right"></i>
																					<?php
																				}elseif ($list_user['log_action'] == "logout") {
																					?>
																					<i class="fa fa-sign-out pull-right"></i>
																					<?php
																				}
																				?>
																			</td>
																			<td class="text-center">
																				<?php 
																				date_default_timezone_set("Asia/Jakarta");
																				$time_sekarang = date('Y-m-d H:i:s');
																				$time_update_log = $list_user['time_action'];
																				$timeCalculator = strtotime($time_sekarang) - strtotime($time_update_log);
																				if ($timeCalculator > (60*60*24*30*12)) {$timeCalculator = round($timeCalculator/60/60/24/30*12) . " year ago";}
																				else if ($timeCalculator > (60*60*24*30)) {$timeCalculator = round($timeCalculator/60/60/24/30) . " month ago";}
																				else if ($timeCalculator > (60*60*24)) {$timeCalculator = round($timeCalculator/60/60/24) . " days ago";}
																				else if ($timeCalculator > (60*60)) {$timeCalculator = round($timeCalculator/60/60) . " hours ago";}
																				else if ($timeCalculator > 60) {$timeCalculator = round($timeCalculator/60) . " minutes ago";}
																				else if ($timeCalculator > 0) {$timeCalculator .= " seconds ago";}

																				echo $timeCalculator ;
																				?>

																			</td>
																		</tr>
																		<?php }?>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$('#datatable1').dataTable();

			$('#btnshow').click(function(){
				event.preventDefault();
				$('.pass').prop("disabled", false);
			});

			$('#simpan_user').click(function(){
				var username = $("input[name='username_tambah']").val();
				var password = $("input[name='password_tambah']").val();
				var status = $("select[name='status_tambah']").val();
				var tambah = 'tambah';
				$.ajax({
					type: "POST",
					url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=operator_management",
					data: {aksi:tambah, username:username, password:password, status:status},
					success: function(msg) {
						if (msg === 'success') {
							swal ( "Success" ,  "Data Berhasil Diinput" ,  "success" );
							location.reload();
						}else if(msg === 'kosong'){
							swal ( "Oops" ,  "Inputan Masih Ada Yang Kosong !" ,  "warning" )
                        // console.log(msg);
                    }else if(msg === 'error'){
                    	swal ( "Oops" ,  "Username Sudah Digunakan!" ,  "error" )
                        // console.log(msg);
                    }
                }
            });
			});

			$('#simpanEdit').click(function(){
				var val_id_user = $("input[name='val_id_user']").val();
				var username_edit = $("input[name='username_edit']").val();
				var password_edit = $("input[name='password_edit']").val();
				var status_edit = $("select[name='status_edit']").val();
				var edit = 'ubah';
				console.log(val_id_user, username_edit, password_edit, status, status_edit);
				$.ajax({
					type: "POST",
					url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=operator_management",
					data: {aksi:edit, val_id_user:val_id_user, username_edit:username_edit, password_edit:password_edit, status_edit:status_edit},
					success: function(msg) {
						if (msg === 'success') {
							swal ( "Success" ,  "Data Berhasil Diinput" ,  "success" );
							location.reload();
						}else if(msg === 'kosong'){
							swal ( "Oops" ,  "Inputan Masih Ada Yang Kosong !" ,  "warning" )
                        // console.log(msg);
                    }
                }
            });
			});

		})
		jQuery(document).ready(function($) {

			$('.counter').counterUp({

				delay: 100,

				time: 1200

			});

		});
	</script>
	<script>
		function hapus(id_user) {
			$.ajax({
				type: "POST",
				url: "index.php?page=6a3b61f42cded56019b264080e226e40&kode=operator_management",
				data: 'aksi=hapus' + '&id_user=' + id_user,
				success: function(msg) {
					swal ( "Success" ,  "Data Berhasil Dihapus" ,  "success" );
					location.reload();
				}
			});
		}
	</script>

</body>

</html>