<?php
class ControllerReview
{
    private $review;
    private $db;
    private $tanggapan;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_review",
            "root",
            ""
        );
    }
    public function getReview()
    {
        return $this->review;
    }
    public function setReview($review)
    {
        $this->review = $review;
        $sql = "INSERT INTO review (review) VALUES (:kritik_saran)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":review", $this->review);
        $stmt->execute();
    }
}
