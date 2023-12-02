<?php
class ControllerLogin
{
    private $db;
    private $email;
    private $password;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_pembayaran",
            "root",
            ""
        );
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function login()
    {
        $query = $this->db->prepare("SELECT * FROM tb_user WHERE email = :email AND password = :password");
        $query->bindParam(":email", $this->email);
        $query->bindParam(":password", $this->password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}