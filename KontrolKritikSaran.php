<?php
class ControllerKritikSaran
{
    private $kritikSaran;
    private $db;
    private $tanggapan;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_kritiksaran",
            "root",
            ""
        );
    }
    public function getKritikSaran()
    {
        return $this->kritikSaran;
    }
    public function setKritikSaran($kritikSaran)
    {
        $this->kritikSaran = $kritikSaran;
        $sql = "INSERT INTO kritik_saran (kritik_saran) VALUES (:kritik_saran)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kritik_saran", $this->kritikSaran);
        $stmt->execute();
    }
    public function getTanggapan()
    {
        return $this->tanggapan;
    }
    public function setTanggapan($tanggapan)
    {
        $this->tanggapan = $tanggapan;
        $sql = "INSERT INTO tanggapan (tanggapan) VALUES (:tanggapan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tanggapan", $this->tanggapan);
        $stmt->execute();
    }
    public function sendTanggapan($tanggapan)
    {
        if (!$tanggapan) {
            return "Tanggapan tidak boleh kosong";
        }
        $this->setTanggapan($tanggapan);
    }
    public function sendKritikSaran($kritikSaran)
    {
        if (!$kritikSaran) {
            return "Kritik dan saran tidak boleh kosong";
        }
        $this->setKritikSaran($kritikSaran);
    }
}
