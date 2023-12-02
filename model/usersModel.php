<?php
  
  class userModel{
    //main function
    public function index($data){
      
    }
    
    //Insert user to database
    public function add_review()
    {
      global $con;
      $con->query('
        INSERT INTO review (isi, id_user)
        VALUES ("'.$_POST['isi'].'","'.$_SESSION['id'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }
    
    //Insert user to database
    public function add_layanan()
    {
      global $con;
      $con->query('
        INSERT INTO layanan (produk,lokasi,tanggal, id_user)
        VALUES ("'.$_POST['produk'].'","'.$_POST['lokasi'].'","'.$_POST['tanggal'].'","'.$_SESSION['id'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }
    
    //Insert user to database
    public function add_konsultasi()
    {
      global $con;
      $con->query('
        INSERT INTO konsultasi (isi, id_user)
        VALUES ("'.$_POST['isi'].'","'.$_SESSION['id'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }
    
    //Insert user to database
    public function add_customer_service()
    {
      global $con;
      $con->query('
        INSERT INTO customer_service (kritik,saran, id_user)
        VALUES ("'.$_POST['kritik'].'","'.$_POST['saran'].'","'.$_SESSION['id'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }
    //get all data from user table
    public function get_layanan_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM layanan where id_user='".$_SESSION['id']."' ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }
    public function get_review_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM review where id_user='".$_SESSION['id']."' ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }
    public function get_konsultasi_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM konsultasi where id_user='".$_SESSION['id']."' ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }
    public function get_customer_service_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM customer_service where id_user='".$_SESSION['id']."' ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    
  }