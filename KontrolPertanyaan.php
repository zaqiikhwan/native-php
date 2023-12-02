<?php
class ControllerPertanyaan
{
    private $pertanyaan;
    private $db;
    private $jawaban;

    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_pertanyaan",
            "root",
            ""
        );
    }
    public function getPertanyaan()
    {
        return $this->pertanyaan;
    }
    public function setPertanyaan($pertanyan)
    {
        $this->pertanyaan = $pertanyaan;
        $sql = "INSERT INTO pertanyaan (pertanyaan) VALUES
(:pertanyaan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pertanyaan", $this->pertanyaan);
        $stmt->execute();
    }
    public function getJawaban()
    {
        return $this->jawaban;
    }
    public function setJawaban($jawaban)
    {
        $this->jawaban = $jawaban;
        $sql = "INSERT INTO jawaban (jawaban) VALUES
(:jawaban)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":jawaban", $this->jawaban);
        $stmt->execute();
    }
    public function sendJawaban($jawaban)
    {
        if (!$jawaban) {
            return "Jawaban tidak boleh kosong";
        }
        $this->setJawaban($jawaban);
    }
    public function sendPertanyaan($pertanyaan)
    {
        if (!$pertanyaan) {
            return "Pertanyaan tidak boleh kosong";
        }
        $this->setPertanyaan($pertanyaan);
    }
}
