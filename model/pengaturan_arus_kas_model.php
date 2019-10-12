<?php
require_once("koneksi.php");
class pengaturan_arus_kas_model{
    private $db;
    private $connection;

    public function __construct(){
        $this->db = new koneksi();
        $this->connection = $this->db->createDatabase();
    }

    public function all(){
        $sql0 = "SELECT pengaturanaruskas.id, pengaturanaruskas.koderekening as kodesaldo, tblrek.uraian_koderekening, pengaturanaruskas.jenis as uraian FROM pengaturanaruskas JOIN koderekening as tblrek ON tblrek.koderekening = pengaturanaruskas.koderekening";
        $statement = $this->connection->prepare($sql0);
        $statement->execute();
        $fetch = $statement->fetchAll();
        $statement->closeCursor();
        return $fetch;//json_encode($fetch);
    }

    public function insert($jenis,$koderekening){
        try{
            $sql2 = "SELECT COUNT(koderekening) as id FROM pengaturanaruskas WHERE jenis = :jenis AND koderekening = :koderekening ;";
            $statement = $this->connection->prepare($sql2);
            $statement->bindValue(':jenis',$jenis);
            $statement->bindValue(':koderekening',$koderekening);
            $statement->execute();
            $fetch2 = $statement->fetchAll();
            $statement->closeCursor();
            if($fetch2[0][0] > 0){
                return "gagal";
                exit();
            }
            $sql0 = "INSERT INTO pengaturanaruskas(jenis, koderekening) VALUES(:jenis, :koderekening)";
            $statement = $this->connection->prepare($sql0);
            $statement->bindValue(':jenis',$jenis);
            $statement->bindValue(':koderekening',$koderekening);
            $statement->execute();
            $statement->closeCursor();
            $sql1 = "SELECT id FROM pengaturanaruskas WHERE jenis = :jenis AND koderekening = :koderekening ;";
            $statement = $this->connection->prepare($sql1);
            $statement->bindValue(':jenis',$jenis);
            $statement->bindValue(':koderekening',$koderekening);
            $statement->execute();
            $fetch = $statement->fetchAll();
            $statement->closeCursor();
            return ($fetch[0]['id']);
        }
        catch(PDOException $e){
            return $e;//"gagal";
        }
    }

    public function delete($id){
        try{
            //$sql0 = "SELECT COUNT(id_investor) FROM investor;";
            $sql0 = "DELETE FROM pengaturanaruskas WHERE id = :id;";
            $statement = $this->connection->prepare($sql0);
            $statement->bindValue(':id',$id);
            $statement->execute();
            $statement->closeCursor();
            return "Berhasil Menghapus Data";
        }
        catch(PDOException $e){
            return "gagal";
        }
    }
}
?>