<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="konsultasi";
      $action=4;
      require('view/user/konsultasi.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_konsultasi'])){
    $class->add_konsultasi();
    header('Location:index.php');
  }
  else{
    $data="";
    $data1="";
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }