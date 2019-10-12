<?php
error_reporting(E_ALL);
session_start();
require_once("controller/user_controller.php");
require_once("controller/departemen_controller.php");
require_once("controller/pegawai_controller.php");
require_once("controller/donatur_controller.php");
require_once("controller/vendor_controller.php"); 
require_once("controller/program_controller.php");
require_once("controller/dana_masuk_controller.php");
require_once("controller/dana_keluar_controller.php");
require_once("controller/jurnal_memorial_controller.php");
require_once("controller/buku_besar_controller.php");
require_once("controller/buku_pembantu_controller.php");
require_once("controller/laporan_arus_kas_controller.php");
require_once("controller/pengaturan_arus_kas_controller.php");
require_once("controller/pengaturan_aktivitas_controller.php");
require_once("controller/pengaturan_posisi_keuangan_controller.php");
require_once("controller/laporan_aktivitas_controller.php");
require_once("controller/laporan_program_controller.php");
require_once("controller/laporan_keuangan_controller.php");
require_once("controller/tutupBuku_Controller.php");


require_once("controller/saldoawal_controller.php");
require_once("controller/kelompokrekening_controller.php");
require_once("controller/kelompokprogram_controller.php");
require_once("controller/jenisprogram_controller.php");
require_once("controller/koderekening_controller.php");
require_once("controller/operator_management_controller.php");

require_once("controller/list_dana_masuk_controller.php");
require_once("controller/list_dana_keluar_controller.php");
require_once("controller/list_jurnal_memorial_controller.php");

require_once("controller/print_dana_keluar_masuk.php");

$user_controller 						= new user_controller();
$departemen_controller 					= new departemen_controller();
$pegawai_controller 					= new pegawai_controller();
$donatur_controller 					= new donatur_controller();
$vendor_controller 						= new vendor_controller();
$program_controller 					= new program_controller();
$dana_masuk_controller 					= new dana_masuk_controller();
$dana_keluar_controller 				= new dana_keluar_controller();
$jurnal_memorial_controller 			= new jurnal_memorial_controller();
$buku_besar_controller 					= new buku_besar_controller();
$buku_pembantu_controller 				= new buku_pembantu_controller();
$laporan_arus_kas_controller 			= new laporan_arus_kas_controller();
$laporan_keuangan_controller 			= new laporan_keuangan_controller();
$pengaturan_arus_kas_controller 		= new pengaturan_arus_kas_controller();
$pengaturan_aktivitas_controller 		= new pengaturan_aktivitas_controller();
$pengaturan_posisi_keuangan_controller 	= new pengaturan_posisi_keuangan_controller();
$laporan_aktivitas_controller 			= new laporan_aktivitas_controller();
$laporan_program_controller 			= new laporan_program_controller();	

$saldoawal_controller 					= new saldoawal_controller();
$kelompokrekening_controller 			= new kelompokrekening_controller();
$kelompokprogram_controller 			= new kelompokprogram_controller();
$jenisprogram_controller 				= new jenisprogram_controller();
$koderekening_controller 				= new koderekening_controller();
$operator_management_controller 		= new operator_management_controller();

$list_dana_masuk_controller 			= new list_dana_masuk_controller();
$list_dana_keluar_controller 			= new list_dana_keluar_controller();
$list_jurnal_memorial_controller 		= new list_jurnal_memorial_controller();

$print_dana_keluar_masuk 				= new print_dana_keluar_masuk();
$tutupBuku_controller 					= new tutupBuku_controller();

	//Untuk usser yang sudah melakukan proses login dan terdaftar
if(isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])){
//--------------------------------------------------------------------------------------------------------------------------------------------------------		
	if(isset($_GET['logout'])){
		session_destroy();
		header("location:?");
		exit();
	}
//--------------------------------------------------------------------------------------------------------------------------------------------------------		
	else if(isset($_GET['page'])){

			//page halaman_utama_sia_japfa_aftech
		if($_GET['page'] === "3edbf72c17de6ffe453f9e729c73468e"){
			require_once("view/home.php");
			exit();
		}else if($_GET['page'] === "worksheet"){
			$list 		= $koderekening_controller->invoke('worksheet');
			require_once("view/worksheet.php");
			exit();
		}else if($_GET['page'] === "laporan"){
			require_once("view/laporan_all.php");
			exit();
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page data_sia_japfa_aftech			
		else if($_GET['page'] === "9176f6233d9bf1733d94155843e330d8"){
			if(isset($_GET['kode'])){

					// kode departemen_sia_japfa_aftech	
				if($_GET['kode'] === "4ff52963acc666306f1986689961951b"){
					if(isset($_POST['aksi'])){
						$hasil = $departemen_controller->invoke($_POST['aksi']);


						echo $hasil;
						exit();
					}

					$list = $departemen_controller->invoke('baca');						
					require_once("view/list_departemen.php");
					exit();
				}

					//kode pegawai_sia_japfa_aftech	
				else if($_GET['kode'] === "71bc2b1c1c04df08b74760769d91e3af"){

					if(isset($_POST['aksi'])){
						$hasil = $pegawai_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list_dept = $departemen_controller->invoke('baca');
					$list = $pegawai_controller->invoke('baca');
					require_once("view/list_pegawai.php");
					exit();
				}

					//kode donatur_sia_japfa_aftech	
				else if($_GET['kode'] === "bcad65f0322e1c55d2e29dfeef78efe4"){

					if(isset($_POST['aksi'])){
						$hasil = $donatur_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list = $donatur_controller->invoke('baca');						
					require_once("view/list_donatur.php");
					exit();
				}

					//kode vendor_sia_japfa_aftech	
				else if($_GET['kode'] === "cabf07da878d3be6191e98e19e4d7653"){

					if(isset($_POST['aksi'])){
						$hasil = $vendor_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list = $vendor_controller->invoke('baca');						
					require_once("view/list_vendor.php");
					exit();
				}

					//kode program_sia_japfa_aftech	
				else if($_GET['kode'] === "b7033f835ba67381342279436b12a1f2"){

					if(isset($_POST['aksi'])){
						$hasil = $program_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list = $program_controller->invoke('baca');
					$list_ven = $vendor_controller->invoke('baca');	
					$list_dept = $departemen_controller->invoke('baca');
					$list_kelpro = $kelompokprogram_controller->invoke('baca');
					$list_jenpro = $jenisprogram_controller->invoke('baca');	
					require_once("view/list_program.php");
					exit();
				}
			}
			else{
				require_once("view/data.php");
				exit();
			}
		}

			//halaman PRINT 	
		else if($_GET['page'] === "printdanakeluar"){ 
			$list = $print_dana_keluar_masuk->invoke('baca');	
			require_once("view/print_datakeluar.php");
		}else if($_GET['page'] === "printdanamasuk"){ 
			$list = $print_dana_keluar_masuk->invoke('baca1');	
			require_once("view/print_datamasuk.php");
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------
			//page transaksi_sia_japfa_aftech
		else if($_GET['page'] === "40f57ec532ab642c6c632ee8f9eb6112"){
			if(isset($_GET['kode'])){

					//kode dana_masuk_sia_japfa_aftech
				if($_GET['kode'] === "453b827706f2499dacaea8101d3eb09f"){
					if(isset($_POST['aksi'])){
						$hasil = $dana_masuk_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$status_buku = $tutupBuku_controller->invoke("status");
					$list_don = $donatur_controller->invoke('baca');
					$list_kelpro = $kelompokprogram_controller->invoke('baca');
					$list_jenpro = $jenisprogram_controller->invoke('baca');
					$list_dept = $departemen_controller->invoke('baca');
					$list_korek = $koderekening_controller->invoke('baca');			
					require_once("view/list_kasmasuk.php");
					exit();
				}

					//kode dana_keluar_sia_japfa_aftech
				else if($_GET['kode'] === "1adb175b1879e5b15081a095e2860e1b"){
					if(isset($_POST['aksi'])){
						$hasil = $dana_keluar_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$status_buku = $tutupBuku_controller->invoke("status");
					$list_don = $donatur_controller->invoke('baca');
					$kodeakhir = $dana_keluar_controller->invoke('kodeakhir');
					$list_kelpro = $kelompokprogram_controller->invoke('baca');
					$list_jenpro = $jenisprogram_controller->invoke('baca');
					$list_dept = $departemen_controller->invoke('baca');
					$list_korek = $koderekening_controller->invoke('baca');	
					require_once("view/list_kaskeluar.php");
					exit();
				}

					//kode jurnal_memorial_sia_japfa_aftech
				else if($_GET['kode'] === "398186c3fc1776d5de93b41171fddbba"){
					if(isset($_POST['aksi'])){
						$hasil = $jurnal_memorial_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$status_buku = $tutupBuku_controller->invoke("status");
					$list_korek = $koderekening_controller->invoke('baca');	
					$list_jenpro = $jenisprogram_controller->invoke('baca');
					$list_dept = $departemen_controller->invoke('baca');
					require_once("view/list_memorial.php");
					exit();
				} 

				else if ($_GET['kode'] === "get_num_trans") {
					if (isset($_POST['aksi'])) {
						$hasil = $dana_masuk_controller->invoke($_POST['aksi']);
						$data = [
							'result' => $hasil
						];
						echo json_encode($data);
						exit();
					}
				}

					//kode list _dana_masuk_sia_japfa_aftech
				else if($_GET['kode'] === "listdanamasuk"){
					if(isset($_POST['aksi'])){
						$hasil = $list_dana_masuk_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list = $list_dana_masuk_controller->invoke('baca');	

					require_once("view/list_danamasuk.php");
					exit();
				}

				elseif ($_GET['kode'] === "printdanamasuk") {
					$data = $list_dana_masuk_controller->invoke('print');

					require_once("view/print_danamasuk.php");
					exit();
				}

				else if($_GET['kode'] === "detail_listdanamasuk"){
					if(isset($_POST['aksi'])){
						$hasil = $list_dana_masuk_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list2 = $list_dana_masuk_controller->invoke('baca_detail');
					$list3 = $list_dana_masuk_controller->invoke('baca_detail1');

					require_once("view/list_kasmasuk_detail.php");
					exit();
				}

					//aftecheditdanamasuk
				else if($_GET['kode'] === "98affdbdb60cf00c98a3f70b218668e7"){
					if(isset($_POST['aksi'])){
						$hasil = $dana_masuk_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}

					$list_don = $donatur_controller->invoke('baca');
					$list_kelpro = $kelompokprogram_controller->invoke('baca');
					$list_jenpro = $jenisprogram_controller->invoke('baca');
					$list_dept = $departemen_controller->invoke('baca');
					$list_korek = $koderekening_controller->invoke('baca');

					$list2 = $list_dana_masuk_controller->invoke('baca_detail');
					$list3 = $list_dana_masuk_controller->invoke('baca_detail1');

					require_once ("view/edit_danamasuk.php");
					exit();
				}

                    //aftecheditdanakeluar
				else if($_GET['kode'] === "210672dd918ab2ee98b69742ecae13b5"){
					if(isset($_POST['aksi'])){
						$hasil = $dana_keluar_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit(); 
					}

					$list_don = $donatur_controller->invoke('baca');
					$list_kelpro = $kelompokprogram_controller->invoke('baca');
					$list_jenpro = $jenisprogram_controller->invoke('baca');
					$list_dept = $departemen_controller->invoke('baca');
					$list_korek = $koderekening_controller->invoke('baca');

					$list2 = $list_dana_keluar_controller->invoke('baca_detail');
					$list3 = $list_dana_keluar_controller->invoke('baca_detail1');

					require_once ("view/edit_danakeluar.php");
					exit();
				}

				else if($_GET['kode'] === "listdanakeluar"){
					if(isset($_POST['aksi'])){
						$hasil = $list_dana_keluar_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list = $list_dana_keluar_controller->invoke('baca');	

					require_once("view/list_danakeluar.php");
					exit();
				}

				else if($_GET['kode'] === "detail_listdanakeluar"){
					if(isset($_POST['aksi'])){
						$hasil = $list_dana_keluar_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list2 = $list_dana_keluar_controller->invoke('baca_detail');
					$list3 = $list_dana_keluar_controller->invoke('baca_detail1');

					require_once("view/list_kaskeluar_detail.php");
					exit();
				}

				else if ($_GET['kode'] === "get_num_trans2") {
					if (isset($_POST['aksi'])) {
						$hasil = $dana_keluar_controller->invoke($_POST['aksi']);
						$data = [
							'result' => $hasil
						];
						echo json_encode($data);
						exit();
					}
				}

				else if($_GET['kode'] === "listjurnalmemorial"){
					if(isset($_POST['aksi'])){
						$hasil = $list_jurnal_memorial_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list_don = $donatur_controller->invoke('baca');
					$list_kelpro = $kelompokprogram_controller->invoke('baca');
					$list_jenpro = $jenisprogram_controller->invoke('baca');
					$list_dept = $departemen_controller->invoke('baca');
					$list_korek = $koderekening_controller->invoke('baca');

					$list = $list_jurnal_memorial_controller->invoke('baca');	

					require_once("view/list_jurnal_memorial.php");
					exit();
				}

				elseif ($_GET['kode'] === "editmemorial") {
						if(isset($_POST['aksi'])){
							$hasil = $list_jurnal_memorial_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list_don = $donatur_controller->invoke('baca');
						$list_kelpro = $kelompokprogram_controller->invoke('baca');
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						$list_korek = $koderekening_controller->invoke('baca');


						$list = $list_jurnal_memorial_controller->invoke('baca');
						$list2 = $list_jurnal_memorial_controller->invoke('baca_detail');
						$list3 = $list_jurnal_memorial_controller->invoke('baca_detail1');	

						require_once("view/edit_memorial.php");
						exit();
					}

				else{
					require_once("view/transaksi.php");
					exit();
				}
			}
			else{
				require_once("view/transaksi.php");
				exit();
			}
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page buku_sia_japfa_aftech
		else if($_GET['page'] === "e9fdc907eeadedf3373094ca4bdfb5a1"){

			if(isset($_GET['kode'])){
					//kode buku_besar_sia_japfa_aftech
				if($_GET['kode'] === "93c76b0ec853d19db79f463efca8f48b"){
					if(isset($_POST['aksi'])){
						$hasil = $buku_besar_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$saldo_awal = $saldoawal_controller->invoke('baca');
						//$list_rek = $kelompokrekening_controller->invoke('baca');
					$list_rek = $buku_besar_controller->invoke('baca');
					require_once("view/tambah_bukubesar.php");
					exit();
				}

					//kode buku_pembantu_sia_japfa_aftech
				else if($_GET['kode'] === "965061478967c37fd4bd471a7091086e"){
					if(isset($_POST['aksi'])){
						$hasil = $buku_pembantu_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$saldo_awal = $saldoawal_controller->invoke('baca');
					$list_rek = $buku_pembantu_controller->invoke('baca');
						//$list_rek = $koderekening_controller->invoke('baca');
					require_once("view/tambah_bukupembantu.php");
					exit();
				}

				else{
					require_once("view/bukubesar.php");
					exit();
				}

			}				
			else{
				require_once("view/bukubesar.php");
				exit();
			}
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page kas_sia_japfa_aftech
		else if($_GET['page'] === "eec7e3026fc0eb5af67364365d98c221"){
			if(isset($_GET['kode'])){

					//kode data_grafik_sia_japfa_aftech
					// if($_GET['kode'] === "5460602f4d26aea8fbb99531b1b81bb1"){
					// 	require_once("view/kas.php");
					// 	exit();
					// } 

					//kode data_tabel_sia_japfa_aftech
				if($_GET['kode'] === "8c29be6a2c55f0d698f5193676ef1b7f"){
					$list1 = $laporan_arus_kas_controller->invoke('jenis1');
//                        $list2 = $laporan_arus_kas_controller->invoke('jenis2');
					$list3 = $laporan_arus_kas_controller->invoke('jenis3');
					$list4 = $laporan_arus_kas_controller->invoke('jenis4');
//                        $list5 = $laporan_arus_kas_controller->invoke('jenis5');
					$list6 = $laporan_arus_kas_controller->invoke('jenis6');
					$listAll = $laporan_arus_kas_controller->invoke('jenisAll');
					$saldo = $laporan_arus_kas_controller->invoke('saldo_awal');
					require_once("view/kas_table.php");
					exit();
				}

				else{
					require_once("view/arus_kas.php");
					exit();
				}
			}
			else{
				require_once("view/arus_kas.php");
				exit();
			}
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page keuangan_sia_japfa_aftech
		else if($_GET['page'] === "7769c8dfb376a214ed0a52eb2b1346e7"){
			if(isset($_GET['kode'])){

					//kode data_grafik_sia_japfa_aftech
				if($_GET['kode'] === "5460602f4d26aea8fbb99531b1b81bb1"){
					require_once("view/keuangan.php");
					exit();
				}

					//kode data_tabel_sia_japfa_aftech
				else if($_GET['kode'] === "8c29be6a2c55f0d698f5193676ef1b7f"){
					$list1 = $laporan_keuangan_controller->invoke('jenis1');
                    $list2 = $laporan_keuangan_controller->invoke('jenis2');
					$list3 = $laporan_keuangan_controller->invoke('jenis3');
					$list4 = $laporan_keuangan_controller->invoke('jenis4');
                    $list5 = $laporan_keuangan_controller->invoke('jenis5');
					$list6 = $laporan_keuangan_controller->invoke('jenis6');
					$listAll = $laporan_keuangan_controller->invoke('jenisAll');
					$saldo = $laporan_keuangan_controller->invoke('saldo_awal');
					require_once("view/keuangan_table.php");
					exit();
				}

				else{
					require_once("view/posisi_keuangan.php");
					exit();
				}
			}
			else{
				require_once("view/posisi_keuangan.php");
				exit();
			}
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page aktivitas_sia_japfa_aftech
		else if($_GET['page'] === "f8a92caddcb153912917c55e9064574e"){
			if(isset($_GET['kode'])){

					//kode data_grafik_sia_japfa_aftech
					// if($_GET['kode'] === "5460602f4d26aea8fbb99531b1b81bb1"){
					// 	require_once("view/aktivitas.php");
					// 	exit();
					// }

					//kode data_tabel_sia_japfa_aftech
				if($_GET['kode'] === "8c29be6a2c55f0d698f5193676ef1b7f"){
					$list1 = $laporan_aktivitas_controller->invoke('jenis1');
//                        $list2 = $laporan_arus_kas_controller->invoke('jenis2');
					$list3 = $laporan_aktivitas_controller->invoke('jenis2');
					$list4 = $laporan_aktivitas_controller->invoke('jenis3');
//                        $list5 = $laporan_arus_kas_controller->invoke('jenis5');
					$list6 = $laporan_aktivitas_controller->invoke('jenis4');
					$list7 = $laporan_aktivitas_controller->invoke('jenis5');
					$listAll = $laporan_aktivitas_controller->invoke('jenisAll');
					$saldo = $laporan_aktivitas_controller->invoke('saldo_awal');
					require_once("view/aktivitas_table.php");
					exit();
				}

				else{
					require_once("view/aktivitas_menu.php");
					exit();
				}
			}
			else{
				require_once("view/aktivitas_menu.php");
				exit();
			}
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page aset_sia_japfa_aftech
		else if($_GET['page'] === "a5ae16b51ac05d5152bf693d75007a46"){
			if(isset($_GET['kode'])){

					//kode data_grafik_sia_japfa_aftech
					// if($_GET['kode'] === "5460602f4d26aea8fbb99531b1b81bb1"){
					// 	require_once("view/aset.php");
					// 	exit();
					// }

					//kode data_tabel_sia_japfa_aftech
				if($_GET['kode'] === "8c29be6a2c55f0d698f5193676ef1b7f"){
					$list = $laporan_program_controller->invoke("baca");
					require_once("view/program_table.php");
					exit();
				}

				else{
					require_once("view/perubahan_aset.php");
					exit();
				}
			}
			else{
				require_once("view/perubahan_aset.php");
				exit();
			}

		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page program_sia_japfa_aftech
			// else if($_GET['page'] === "b7033f835ba67381342279436b12a1f2") {
   //              require_once("view/laporan.php");
   //              exit();
			// }

//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page pengaturan_sia_japfa_aftech
		else if($_GET['page'] === "6a3b61f42cded56019b264080e226e40"){
			if (isset($_GET['kode'])) {

                    //kelompok rekening
				if ($_GET['kode'] == "kelompokrekening") {
					if(isset($_POST['aksi'])){
						$hasil = $kelompokrekening_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list 		= $kelompokrekening_controller->invoke('baca');	
					require_once("view/kelompok_rekening.php");
					exit();
				}
				else if($_GET['kode'] == "koderekening"){
					if(isset($_POST['aksi'])){
						$hasil 	= $koderekening_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list 		= $koderekening_controller->invoke('baca');
					$list_kel 	= $kelompokrekening_controller->invoke('baca');
					require_once("view/kode_rekening.php");
					exit();
				}
				else if ($_GET['kode'] == "kelompokprogram"){
					if(isset($_POST['aksi'])){
						$hasil 	= $kelompokprogram_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list 		= $kelompokprogram_controller->invoke('baca');	
					require_once("view/kelompok_program.php");
					exit();
				}
				else if ($_GET['kode'] == "jenisprogram"){
					if(isset($_POST['aksi'])){
						$hasil 	= $jenisprogram_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list 		= $jenisprogram_controller->invoke('baca');
					$list_kel 	= $kelompokprogram_controller->invoke('baca');	
					require_once("view/jenis_program.php");
					exit();
				}
				else if ($_GET['kode'] == "saldoawal") {
					if(isset($_POST['aksi'])){
						$hasil = $saldoawal_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}

					$list 		= $saldoawal_controller->invoke('baca');		
					$list_rek 	= $koderekening_controller->invoke('baca');				
					require_once("view/saldo_awal.php");
					exit();
				}
				else if ($_GET['kode'] == "operator_management") {
					if(isset($_POST['aksi'])){
						$hasil = $operator_management_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}

					$list 		= $operator_management_controller->invoke('baca');		
					require_once("view/operator_management.php");
					exit();
				}

				else if ($_GET['kode'] == "log_aplikasi") {
					$list = $operator_management_controller->invoke('list_log');		
					require_once("view/log_aplikasi.php");
					exit();
				}
				else if ($_GET['kode'] == "format_arus_kas") {
					if(isset($_POST['aksi'])){
						$hasil = $pengaturan_arus_kas_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}

					$list 		= $pengaturan_arus_kas_controller->invoke('baca');
					$list_rek 	= $koderekening_controller->invoke('baca_parent');
					require_once("view/pengaturan_laporan_arus_kas.php");
					exit();
				}
				else if ($_GET['kode'] == "format_aktivitas") {
					if(isset($_POST['aksi'])){
						$hasil = $pengaturan_aktivitas_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}

					$list 		= $pengaturan_aktivitas_controller->invoke('baca');
					$list_rek 	= $koderekening_controller->invoke('baca_parent');
					require_once("view/pengaturan_laporan_aktivitas.php");
					exit();
				}else if ($_GET['kode'] == "format_posisi_keuangan") {
						if(isset($_POST['aksi'])){
							$hasil = $pengaturan_posisi_keuangan_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}

						$list = $pengaturan_posisi_keuangan_controller->invoke('baca');
						$list_rek = $koderekening_controller->invoke('baca_parent');
						require_once("view/pengaturan_laporan_posisi_keuangan.php");
						exit();
				}
				else if ($_GET['kode'] == "exportDatabase") {
					require_once("model/dropDb.php");
					exit();
				}else if ($_GET['kode'] == "importDatabase") {
					require_once("model/importDb.php");
					exit();
				}
				else if ($_GET['kode'] == "tutupBuku") {
					$tutupBuku_controller = new tutupBuku_controller();
					if(isset($_POST['aksi'])){
						$hasil = $tutupBuku_controller->invoke($_POST['aksi']);
						echo $hasil;
						exit();
					}
					$list = $tutupBuku_controller->invoke('all_json');	
					require_once("view/tutupBuku.php");
					exit();
				}

        elseif ($_GET['kode'] == "getBuku") {
          if(isset($_POST['aksi'])){
            $tutupBuku_controller = new tutupBuku_controller();
						$hasil = $tutupBuku_controller->invoke($_POST['aksi']);
						echo json_encode($hasil);
						exit();
					}
        }

				else {
					require_once("view/pengaturan.php");
					exit();
				}
			}
			else {
				require_once("view/pengaturan.php");
				exit();

			}
		}

//--------------------------------------------------------------------------------------------------------------------------------------------------------						
		else{
			header("location:?page=3edbf72c17de6ffe453f9e729c73468e");	
			exit();
		}
//--------------------------------------------------------------------------------------------------------------------------------------------------------			
		} // end else if(isset($_GET['page']))
//--------------------------------------------------------------------------------------------------------------------------------------------------------		
		else{
			header("location:?page=3edbf72c17de6ffe453f9e729c73468e");	
			exit();
		}
//--------------------------------------------------------------------------------------------------------------------------------------------------------		
	} //end if isset($_SESSION['f658f7a22761210065c7ae4211aab09b'])
	else if(isset($_SESSION['kmbWnRknFjoImgRoIljCbTXOyRAbHEQj'])){
//--------------------------------------------------------------------------------------------------------------------------------------------------------		
		if(isset($_GET['logout'])){
			session_destroy();
			header("location:?");
			exit();
		}
	//--------------------------------------------------------------------------------------------------------------------------------------------------------		
		else if(isset($_GET['page'])){

				//page halaman_utama_sia_japfa_aftech
			if($_GET['page'] === "02128891946701900312913949889898"){
				require_once("view/home.php");
				exit();
			}
		//--------------------------------------------------------------------------------------------------------------------------------------------------------
			//page transaksi_sia_japfa_aftech
			else if($_GET['page'] === "40f57ec532ab642c6c632ee8f9eb6112"){
				if(isset($_GET['kode'])){

					//kode dana_masuk_sia_japfa_aftech
					if($_GET['kode'] === "453b827706f2499dacaea8101d3eb09f"){
						if(isset($_POST['aksi'])){
							$hasil = $dana_masuk_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$status_buku = $tutupBuku_controller->invoke("status");
						$list_don = $donatur_controller->invoke('baca');
						$list_kelpro = $kelompokprogram_controller->invoke('baca');
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						$list_korek = $koderekening_controller->invoke('baca');			
						require_once("view/list_kasmasuk.php");
						exit();
					}

					//kode dana_keluar_sia_japfa_aftech
					else if($_GET['kode'] === "1adb175b1879e5b15081a095e2860e1b"){
						if(isset($_POST['aksi'])){
							$hasil = $dana_keluar_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$status_buku = $tutupBuku_controller->invoke("status");
						$list_don = $donatur_controller->invoke('baca');
						$kodeakhir = $dana_keluar_controller->invoke('kodeakhir');
						$list_kelpro = $kelompokprogram_controller->invoke('baca');
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						$list_korek = $koderekening_controller->invoke('baca');	
						require_once("view/list_kaskeluar.php");
						exit();
					}

					//kode jurnal_memorial_sia_japfa_aftech
					else if($_GET['kode'] === "398186c3fc1776d5de93b41171fddbba"){
						if(isset($_POST['aksi'])){
							$hasil = $jurnal_memorial_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$status_buku = $tutupBuku_controller->invoke("status");
						$list_korek = $koderekening_controller->invoke('baca');	
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						require_once("view/list_memorial.php");
						exit();
					} 

					else if ($_GET['kode'] === "get_num_trans") {
						if (isset($_POST['aksi'])) {
							$hasil = $dana_masuk_controller->invoke($_POST['aksi']);
							$data = [
								'result' => $hasil
							];
							echo json_encode($data);
							exit();
						}
					}

					//kode list _dana_masuk_sia_japfa_aftech
					else if($_GET['kode'] === "listdanamasuk"){
						if(isset($_POST['aksi'])){
							$hasil = $list_dana_masuk_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list = $list_dana_masuk_controller->invoke('baca');	

						require_once("view/list_danamasuk.php");
						exit();
					}

					elseif ($_GET['kode'] === "printdanamasuk") {
						$data = $list_dana_masuk_controller->invoke('print');

						require_once("view/print_danamasuk.php");
						exit();
					}

					else if($_GET['kode'] === "detail_listdanamasuk"){
						if(isset($_POST['aksi'])){
							$hasil = $list_dana_masuk_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list2 = $list_dana_masuk_controller->invoke('baca_detail');
						$list3 = $list_dana_masuk_controller->invoke('baca_detail1');

						require_once("view/list_kasmasuk_detail.php");
						exit();
					}

					//aftecheditdanamasuk
					else if($_GET['kode'] === "98affdbdb60cf00c98a3f70b218668e7"){
						if(isset($_POST['aksi'])){
							$hasil = $dana_masuk_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}

						$list_don = $donatur_controller->invoke('baca');
						$list_kelpro = $kelompokprogram_controller->invoke('baca');
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						$list_korek = $koderekening_controller->invoke('baca');

						$list2 = $list_dana_masuk_controller->invoke('baca_detail');
						$list3 = $list_dana_masuk_controller->invoke('baca_detail1');

						require_once ("view/edit_danamasuk.php");
						exit();
					}

                    //aftecheditdanakeluar
					else if($_GET['kode'] === "210672dd918ab2ee98b69742ecae13b5"){
						if(isset($_POST['aksi'])){
							$hasil = $dana_keluar_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit(); 
						}

						$list_don = $donatur_controller->invoke('baca');
						$list_kelpro = $kelompokprogram_controller->invoke('baca');
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						$list_korek = $koderekening_controller->invoke('baca');

						$list2 = $list_dana_keluar_controller->invoke('baca_detail');
						$list3 = $list_dana_keluar_controller->invoke('baca_detail1');

						require_once ("view/edit_danakeluar.php");
						exit();
					}

					else if($_GET['kode'] === "listdanakeluar"){
						if(isset($_POST['aksi'])){
							$hasil = $list_dana_keluar_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list = $list_dana_keluar_controller->invoke('baca');	

						require_once("view/list_danakeluar.php");
						exit();
					}

					else if($_GET['kode'] === "detail_listdanakeluar"){
						if(isset($_POST['aksi'])){
							$hasil = $list_dana_keluar_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list2 = $list_dana_keluar_controller->invoke('baca_detail');
						$list3 = $list_dana_keluar_controller->invoke('baca_detail1');

						require_once("view/list_kaskeluar_detail.php");
						exit();
					}

					else if ($_GET['kode'] === "get_num_trans2") {
						if (isset($_POST['aksi'])) {
							$hasil = $dana_keluar_controller->invoke($_POST['aksi']);
							$data = [
								'result' => $hasil
							];
							echo json_encode($data);
							exit();
						}
					}

					else if($_GET['kode'] === "listjurnalmemorial"){
						if(isset($_POST['aksi'])){
							$hasil = $list_jurnal_memorial_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list_don = $donatur_controller->invoke('baca');
						$list_kelpro = $kelompokprogram_controller->invoke('baca');
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						$list_korek = $koderekening_controller->invoke('baca');

						$list = $list_jurnal_memorial_controller->invoke('baca');	

						require_once("view/list_jurnal_memorial.php");
						exit();
					}

					elseif ($_GET['kode'] === "editmemorial") {
						if(isset($_POST['aksi'])){
							$hasil = $list_jurnal_memorial_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list_don = $donatur_controller->invoke('baca');
						$list_kelpro = $kelompokprogram_controller->invoke('baca');
						$list_jenpro = $jenisprogram_controller->invoke('baca');
						$list_dept = $departemen_controller->invoke('baca');
						$list_korek = $koderekening_controller->invoke('baca');


						$list = $list_jurnal_memorial_controller->invoke('baca');
						$list2 = $list_jurnal_memorial_controller->invoke('baca_detail');
						$list3 = $list_jurnal_memorial_controller->invoke('baca_detail1');	

						require_once("view/edit_memorial.php");
						exit();
					}

					else{
						require_once("view/transaksi.php");
						exit();
					}
				}
				else{
					require_once("view/transaksi.php");
					exit();
				}
			}
			else if($_GET['page'] === "printdanakeluar"){ 
				$list = $print_dana_keluar_masuk->invoke('baca');	
				require_once("view/print_datakeluar.php");
			}else if($_GET['page'] === "printdanamasuk"){ 
				$list = $print_dana_keluar_masuk->invoke('baca1');	
				require_once("view/print_datamasuk.php");
			}
		//--------------------------------------------------------------------------------------------------------------------------------------------------------			
			//page pengaturan_sia_japfa_aftech
			else if($_GET['page'] === "6a3b61f42cded56019b264080e226e40"){
				if (isset($_GET['kode'])) {

                    //kelompok rekening
					if ($_GET['kode'] == "kelompokrekening") {
						if(isset($_POST['aksi'])){
							$hasil = $kelompokrekening_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list = $kelompokrekening_controller->invoke('baca');	
						require_once("view/kelompok_rekening.php");
						exit();
					}
					else if($_GET['kode'] == "koderekening"){
						if(isset($_POST['aksi'])){
							$hasil = $koderekening_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list = $koderekening_controller->invoke('baca');
						$list_kel = $kelompokrekening_controller->invoke('baca');
						require_once("view/kode_rekening.php");
						exit();
					}
					else if ($_GET['kode'] == "kelompokprogram"){
						if(isset($_POST['aksi'])){
							$hasil = $kelompokprogram_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list = $kelompokprogram_controller->invoke('baca');	
						require_once("view/kelompok_program.php");
						exit();
					}
					else if ($_GET['kode'] == "jenisprogram"){
						if(isset($_POST['aksi'])){
							$hasil = $jenisprogram_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						$list = $jenisprogram_controller->invoke('baca');
						$list_kel = $kelompokprogram_controller->invoke('baca');	
						require_once("view/jenis_program.php");
						exit();
					}
					else if ($_GET['kode'] == "changePassword") {
						if(isset($_POST['aksi'])){
							$hasil = $operator_management_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}

						require_once("view/pengaturan.php");
						exit();
					}
					else if ($_GET['kode'] == "format_arus_kas") {
						if(isset($_POST['aksi'])){
							$hasil = $pengaturan_arus_kas_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}
						else if ($_GET['kode'] == "exportDatabase") {
							require_once("model/dropDb.php");
							exit();
						}
						$list = $pengaturan_arus_kas_controller->invoke('baca');
						$list_rek = $koderekening_controller->invoke('baca_parent');
						require_once("view/pengaturan_laporan_arus_kas.php");
						exit();
					}
					else if ($_GET['kode'] == "format_aktivitas") {
						if(isset($_POST['aksi'])){
							$hasil = $pengaturan_aktivitas_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}

						$list = $pengaturan_aktivitas_controller->invoke('baca');
						$list_rek = $koderekening_controller->invoke('baca_aktivitas');
						require_once("view/pengaturan_laporan_aktivitas.php");
						exit();
					}
					else if ($_GET['kode'] == "format_posisi_keuangan") {
						if(isset($_POST['aksi'])){
							$hasil = $pengaturan_posisi_keuangan_controller->invoke($_POST['aksi']);
							echo $hasil;
							exit();
						}

						$list = $pengaturan_posisi_keuangan_controller->invoke('baca');
						$list_rek = $koderekening_controller->invoke('baca_parent');
						require_once("view/pengaturan_laporan_posisi_keuangan.php");
						exit();
					}
					else if ($_GET['kode'] == "exportDatabase") {
						require_once("model/dropDb.php");
						exit();
					}else if ($_GET['kode'] == "importDatabase") {
						require_once("model/importDb.php");
						exit();
					}

					else {
						require_once("view/pengaturan.php");
						exit();
					}
				}
				else {
					require_once("view/pengaturan.php");
					exit();

				}
			}
		//END OF PAGE
		}
		else{
			header("location:?page=02128891946701900312913949889898");	
			exit();
		}
	}
//--------------------------------------------------------------------------------------------------------------------------------------------------------	
	else{
//--------------------------------------------------------------------------------------------------------------------------------------------------------		
		if(isset($_GET['page'])){
//--------------------------------------------------------------------------------------------------------------------------------------------------------			
		 //Untuk Proses Login get login_sia_japfa_aftech post username_sia_japfa_aftech , password_sia_japfa_aftech
			if( $_GET['page'] === "fa78b3c9479db3de19f2fee27c9dd5c2" && isset($_POST['26a1a30b2d140e6690329dfeb4a79407']) && isset($_POST['82f9be04f6ef4a897b8287573e3af4ae'])){

				$login = $user_controller->invoke("login");
				if($login === "Berhasil"){				 
					header("location:?page=3edbf72c17de6ffe453f9e729c73468e");
					exit();
				}else if($login === "user" || $login === "admin"){				 
					header("location:?page=02128891946701900312913949889898");
					exit();
				}
				else{		
					// var_dump($login);
					header("location:?");
					exit();
				}		
			}

			else{
				header("location:?");
				exit(); 
			}

		}
		//--------------------------------------------------------------------------------------------------------------------------------------------------------
		else{
			require_once("view/index.php");
			exit();	
		}
	}
	?>