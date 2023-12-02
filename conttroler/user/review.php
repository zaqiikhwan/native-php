<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="REVIEW";
      $action=4;
      require('view/user/review.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_review'])){
    $class->add_review();
    header('Location:index.php');
  }
  else{
    $data="class->get_berita_data()";
    $data1="class->get_kategori_data()";
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }