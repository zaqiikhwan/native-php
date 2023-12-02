<?php

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);
class ControllerPembayaran
{
    private $db;
    private $idPembayaran;
    private $paymentMethod;
    private $payment;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_pembayaran",
            "root",
            ""
        );
    }
    public function setIdPembayaran($idPembayaran)
    {
        $this->idPembayaran = $idPembayaran;
    }
    public function getIdPembayaran()
    {
        return $this->idPembayaran;
    }
    public function setPaymentMethod($userPayment)
    {
        $paymentMethod = $userPayment;
        if ($paymentMethod === "e-wallet") {
            return $this->paymentMethod = new
                ControllerEWallet();
        }
        return $this->paymentMethod = "Cash";
    }
    public function setPayment($name, $jumlah, $tanggal)
    {
        $this->payment = [
            "nama" => $name,
            "jumlah" => $jumlah,
            "tanggal" => $tanggal,
        ];
        $sql =
            "INSERT INTO pembayaran (nama, jumlah,
tanggal) VALUES (:nama, :jumlah, :tanggal)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $this->payment["nama"]);
        $stmt->bindParam(":jumlah", $this->payment["jumlah"]);
        $stmt->bindParam(":tanggal", $this->payment["tanggal"]);
        $stmt->execute();
    }
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    public function getPayment()
    {
        return $this->payment;
    }
    public function sendPayment()
    {
        $name = $_POST["nama"];
        $jumlah = $_POST["jumlah"];
        $tanggal = $_POST["tanggal"];
        $this->setPayment($name, $jumlah, $tanggal);
    }
    public function getPaymentById($id)
    {
        $sql = "SELECT * FROM pembayaran WHERE
id_pembayaran = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
class ControllerEWallet
{
    private $id_EWallet;
    private $id_user;
    private $saldo;
    private $pin;
    private $db;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_pembayaran",
            "root",
            ""
        );
    }
    public function getId_EWallet()
    {
        return $this->id_EWallet;
    }
    public function setId_EWallet($id_EWallet)
    {
        $this->id_EWallet = $id_EWallet;
    }
    public function getId_user()
    {
        return $this->id_user;
    }
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getPin()
    {
        return $this->pin;
    }
    public function setPin($pin)
    {
        $this->pin = $pin;
    }
    public function getDb()
    {
        return $this->db;
    }
    public function setDb($db)
    {
        $this->db = $db;
    }
    public function getEWalletByIdUser($id_user)
    {
        $sql = "SELECT * FROM e_wallet WHERE id_user = :id_user";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_user", $id_user);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->setId_EWallet($result["id_EWallet"]);
        $this->setId_user($result["id_user"]);
        $this->setSaldo($result["saldo"]);
        $this->setPin($result["pin"]);
    }
    public function getEWalletById($id_EWallet)
    {
        $sql = "SELECT * FROM e_wallet WHERE id_EWallet = :id_EWallet";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_EWallet", $id_EWallet);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->setId_EWallet($result["id_EWallet"]);
        $this->setId_user($result["id_user"]);
        $this->setSaldo($result["saldo"]);
        $this->setPin($result["pin"]);
    }
}
