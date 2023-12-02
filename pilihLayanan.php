<?php
class Layanan
{
    private $profil;
    private $pemesananLayanan;
    private $riwayatPemesanan;
    private $konsultasiDokter;
    private $customerService;
    public function getProfil()
    {
        return $this->profil;
    }
    public function getPemesananLayanan()
    {
        return $this->pemesananLayanan;
    }
    public function getRiwayatPemesanan()
    {
        return $this->riwayatPemesanan;
    }
    public function getKonsultasiDokter()
    {
        return $this->konsultasiDokter;
    }
    public function getCustomerService()
    {
        return $this->customerService;
    }
}
class ControllerLayanan
{
    private $user;
    private $layanan;
    private $db;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=db_layanan",
            "root",
            ""
        );
    }
    public function getUser()
    {
        return $this->user;
    }
    public function pilihLayanan($user)
    {
        if (!$user) {
            return false;
        }
        switch ($user->pilihanLayanan) {
            case "profil":
                $this->layanan->showDetailProfil();
                break;
            case "pemesananLayanan":
                $this->layanan->showDetailpemesananLayanan();
                break;
            case "riwayatPemesanan":
                $this->layanan->showDetailriwayatPemesanan();
                break;
            case "konsultasiDokter":
                $this->layanan->showDetailkonsultasiDokter();
                break;
            case "customerService":
                $this->layanan->showDetailcustomerService();
                break;
        }
    }
}
