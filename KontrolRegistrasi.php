<?php
class ControllerRegistrasi
{
    private $db;
    private $password;
    private $email;
    private $nama_lengkap;
    private $alamat;
    private $no_hp;
    private $jenis_kelamin;
    private $tanggal_lahir;
    private $verificationCode;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_registrasi",
            "root",
            ""
        );
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getNamaLengkap()
    {
        return $this->nama_lengkap;
    }
    public function setNamaLengkap($nama_lengkap)
    {
        $this->nama_lengkap = $nama_lengkap;
    }
    public function getAlamat()
    {
        return $this->alamat;
    }
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    public function getNoHp()
    {
        return $this->no_hp;
    }
    public function setNoHp($no_hp)
    {
        $this->no_hp = $no_hp;
    }
    public function getJenisKelamin()
    {
        return $this->jenis_kelamin;
    }
    public function setJenisKelamin($jenis_kelamin)
    {
        $this->jenis_kelamin = $jenis_kelamin;
    }
    public function getTanggalLahir()
    {
        return $this->tanggal_lahir;
    }
    public function setTanggalLahir($tanggal_lahir)
    {
        $this->tanggal_lahir = $tanggal_lahir;
    }
    public function getVerificationCode()
    {
        return $this->verificationCode;
    }
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }
    public function registrasiUser()
    {
        $sql =
            "INSERT INTO registrasi (password, email, nama_lengkap,
            alamat, no_hp, jenis_kelamin, tanggal_lahir) VALUES (:password, :email,
:nama_lengkap, :alamat, :no_hp, :jenis_kelamin, :tanggal_lahir)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":nama_lengkap", $this->nama_lengkap);
        $stmt->bindParam(":alamat", $this->alamat);
        $stmt->bindParam(":no_hp", $this->no_hp);
        $stmt->bindParam(":jenis_kelamin", $this->jenis_kelamin);
        $stmt->bindParam(":tanggal_lahir", $this->tanggal_lahir);
        $stmt->execute();
    }
    public function verifyUser()
    {
        $sql = "INSERT INTO verification_code (email, verification_code) VALUES (:email, :verification_code)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":verification_code", $this->verificationCode);
        $stmt->execute();
    }
}