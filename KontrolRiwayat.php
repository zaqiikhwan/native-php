<?php
class ControllerRiwayat
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_riwayat",
            "root",
            ""
        );
    }
    public function getRiwayat()
    {
        return $this->getData();
    }
    public function getData()
    {
        $query = "SELECT * FROM riwayat";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
}
