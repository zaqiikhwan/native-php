<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="HOME";
      $action=4;
      require('view/user/home.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_berita'])){
    $class->add_berita();
    header('Location:index.php?berita');
  }
  else if(isset($_GET['delete_berita'])){
    $class->delete_berita();
    header('Location:index.php?berita');
  }
  else if(isset($_GET['edit_berita'])){
    $class->edit_berita();
    header('Location:index.php?berita');
  }
  else{
    $data="class->get_berita_data()";
    $data1="class->get_kategori_data()";
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }