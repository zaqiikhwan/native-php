<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="layanan";
      $action=4;
      require('view/user/layanan.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_layanan'])){
    $class->add_layanan();
    header('Location:HalamanPembayaran.html');
  }
  else{
    $data="";
    $data1="";
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }