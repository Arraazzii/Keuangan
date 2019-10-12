<?php
require_once("model/pengaturan_arus_kas_model.php");
class pengaturan_arus_kas_controller{
    private $model;

    public function __construct(){
        $this->model = new pengaturan_arus_kas_model();
    }

    public function invoke($kode){
        if($kode === "baca"){
            return $this->baca();
        }
        else if($kode === "tambah"){
            return $this->insert();
        }
        else if($kode === "hapus"){
            return $this->delete();
        }
    }

    private function baca(){
        $hasil = $this->model->all();
        return $hasil;
    }

    private function insert(){
        $hasil = $this->model->insert($_POST['jenis'],$_POST['koderekening']);
        return $hasil;
    }

    private function delete(){
        $hasil = $this->model->delete($_POST['id']);
        return $hasil;
    }
}
?>