<?php
require_once("model/laporan_program_model.php");
class laporan_program_controller{
    private $model;

    public function __construct(){
        $this->model = new laporan_program_model();
    }

    public function invoke($kode){
        if(isset($kode)){
            if($kode == "baca"){
                $hasil = $this->baca();
                return $hasil;
            }
        }
    }

    private function baca(){
        return $this->model->select_all();
    }

}
?>