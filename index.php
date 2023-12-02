<?php
  session_start();
  $con = new mysqli("localhost","root","","db_review");
  if(isset($_GET['logout'])){
    session_unset();
    header("Location:index.php"); 
  }
  else if(isset($_SESSION['email'])){
		if(isset($_GET['review']) || isset($_GET['add_review'])){
			require('conttroler/user/review.php');
		}else if(isset($_GET['layanan']) || isset($_GET['add_layanan'])){
			require('conttroler/user/layanan.php');
		}else if(isset($_GET['konsultasi']) || isset($_GET['add_konsultasi'])){
			require('conttroler/user/konsultasi.php');
		}else if(isset($_GET['customer_service']) || isset($_GET['add_customer_service'])){
			require('conttroler/user/customer_service.php');
		}else if(isset($_GET['history']) ){
			require('conttroler/user/history.php');
		}
		else{
			require('conttroler/user/home.php');
		}	
	
	}
    else if(isset($_GET['email'])){
      require('view/payment.php');
    }
		else if((isset($_GET['jual']))|| isset($_GET['add_jual'])){
		  require('conttroler/user/juals.php');
		}
    else if(isset($_GET['about'])){
      require('view/about.php');
    }
    else if(isset($_GET['lupa_password'])){
		require('conttroler/auth/lupa_password.php');
    }
    else if(isset($_GET['register'])){
      require('conttroler/auth/register.php');
    }
  else{
    require('conttroler/auth/login.php');
  }