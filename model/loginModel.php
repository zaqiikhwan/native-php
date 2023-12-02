<?php
  
  class loginModel{
    //main function
    public function index(){}
    //Login funtion
    public function login(){
      global $con;
      $check=$con->query('SELECT * FROM user');
      $ketemu=0;
      while($c=$check->fetch_assoc()){
        $username=$c['email'];
        $id=$c['id_user'];
        if($username==$_POST['email'] && password_verify($_POST['password'],$c['password']) ){
          $ketemu =1;
            $_SESSION['email']=$username;
            $_SESSION['id']=$id;
        }
      }
      print_r($_SESSION);
      
      if($ketemu==0){
        $_SESSION['message']="
                                <div class='alert alert-danger' role='alert'>
                                  Password Atau Email Mungkin Salah
                                </div>
                              ";
      }
    }
  }