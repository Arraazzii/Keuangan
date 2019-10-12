<?php
require_once("koneksi.php");
class laporan_program_model{
    private $db;
    private $connection;
    private $jenis_dasar;

    public function __construct(){
        $this->db = new koneksi();
        $this->connection = $this->db->createDatabase();
        $this->jenis_dasar = array();
    }

    public function select_all(){
        $sql1 = "SELECT
jenisprogram.nomer_jenisprogram,
program.nama_program,
program.pagu_program,
(SELECT SUM(danakeluar_detail.nilai) FROM danakeluar_detail WHERE danakeluar_detail.program = program.jenis_program)
+
(SELECT SUM(danamasuk_detail.nilai) FROM danamasuk_detail WHERE danamasuk_detail.program = program.jenis_program)
+
(SELECT SUM(jurnal_detail.nilai) FROM jurnal_detail WHERE jurnal_detail.program = program.jenis_program)
 as realisasi
FROM
program,
jenisprogram
WHERE
program.jenis_program = jenisprogram.namajenis_jenisprogram
GROUP BY program.jenis_program";
        $statement = $this->connection->prepare($sql1);
        $statement->execute();
        $fetch1 = $statement->fetchAll();
        $statement->closeCursor();
        return $fetch1;
    }

    /*
     *
     * SELECT
jenisprogram.nomer_jenisprogram,
program.nama_program,
program.pagu_program,
(SELECT SUM(danakeluar_detail.nilai) FROM danakeluar_detail WHERE danakeluar_detail.program = program.jenis_program)
+
(SELECT SUM(danamasuk_detail.nilai) FROM danamasuk_detail WHERE danamasuk_detail.program = program.jenis_program)
+
(SELECT SUM(jurnal_detail.nilai) FROM jurnal_detail WHERE jurnal_detail.program = program.jenis_program)
 as realisasi
FROM
program,
jenisprogram
WHERE
program.jenis_program = jenisprogram.namajenis_jenisprogram
GROUP BY program.jenis_program

     *
     *
     * */

}
?>