<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="KATEGORI";
      $action=4;
      require('view/user/kategori.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_kategori'])){
    $class->add_kategori();
    header('Location:index.php?kategori');
  }
  else if(isset($_GET['delete_kategori'])){
    $class->delete_kategori();
    header('Location:index.php?kategori');
  }
  else if(isset($_GET['edit_kategori'])){
    $class->edit_kategori();
    header('Location:index.php?kategori');
  }
  else{
    $data=$class->get_kategori_data();
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }