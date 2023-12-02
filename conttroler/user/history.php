<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1,$data,$data2,$data3;
      $title="history";
      $action=4;
      require('view/user/history.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_history'])){
    $class->add_history();
    header('Location:index.php');
  }
  else{
    $data=$class->get_layanan_data();
    $data1=$class->get_konsultasi_data();
    $data2=$class->get_customer_service_data();
    $data3=$class->get_review_data();
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }