<?php
require_once("model/laporan_aktivitas_model.php");
class laporan_aktivitas_controller{
    private $model;

    public function __construct(){
        $this->model = new laporan_aktivitas_model();
    }

    public function invoke($kode){
        if($kode == "baca") {
            $hasil = $this->baca($kode);
            return $hasil;
        }

        else if($kode == "jenis1"){
            $hasil = $this->jenis1($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
            return $hasil;
        }

        else if($kode == "jenis2"){
            $hasil = $this->jenis2($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
            return $hasil;
        }

        else if($kode == "jenis3"){
            $hasil = $this->jenis3($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
            return $hasil;
        }
        else if($kode == "jenis4"){
            $hasil = $this->jenis4($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
            return $hasil;
        }

        else if($kode == "jenis5"){
            $hasil = $this->jenis5($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
            return $hasil;
        }

        else if($kode == "jenis6"){
            $hasil = $this->jenis6($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
            return $hasil;
        }
        else if($kode == "jenisAll"){
            $hasil = $this->jenisAll($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
            return $hasil;
        }

        else if($kode == "saldo_awal"){
            $hasil = $this->cari_saldo_awal();
            return $hasil;
        }
    }

    private function baca($kode){
        return $this->model->all($kode);
    }

    private function jenis1(){
        return $this->model->jenis_satu($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
    }

    private function jenis2(){
        return $this->model->jenis_dua($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
    }

    private function jenis3(){
        return $this->model->jenis_tiga($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
    }

    private function jenis4(){
        return $this->model->jenis_empat($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
    }

    private function jenis5(){
        return $this->model->jenis_lima($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
    }

    private function jenis6(){
        return $this->model->jenis_enam($_POST['tanggal_awal_aktivitas'], $_POST['tanggal_akhir_aktivitas']);
    }
    private function jenisAll(){
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

        return $this->model->jenisAll($tglAwal, $tglAkhir);
    }

    private function cari_saldo_awal(){
        return $this->model->cari_saldo_awal();
    }
}
?>