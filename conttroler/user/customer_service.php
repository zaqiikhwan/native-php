<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="customer_service";
      $action=4;
      require('view/user/customer_service.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_customer_service'])){
    $class->add_customer_service();
    header('Location:index.php');
  }
  else{
    $data="";
    $data1="";
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }