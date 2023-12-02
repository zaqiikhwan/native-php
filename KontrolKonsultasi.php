<?php class ControllerKonsultasi
{
    private $konsultasi;
    private $db;
    public function getKonsultasi()
    {
        return $this->konsultasi;
    }
    public function setKonsultasi($konsultasi)
    {
        $this->konsultasi = $konsultasi;
        $sql = "INSERT INTO konsultasi (konsultasi) VALUES (:konsultasi)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":konsultasi", $this->konsultasi);
        $stmt->execute();
    }
    public function sendKonsultasi($konsultasi)
    {
        $this->setKonsultasi($konsultasi);
    }
}
