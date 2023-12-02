<?php
  include("fungsi.php");
  $ciphering = "AES-128-CTR";
    
  // Use OpenSSl Encryption method
  $iv_length = openssl_cipher_iv_length($ciphering);
  $options = 0;
    
  // Non-NULL Initialization Vector for encryption
  $encryption_iv = '1234567891011121';
    
  // Store the encryption key
  $encryption_key = "dcc";
  $ciphering = "AES-128-CTR";
  $decryption_iv = '1234567891011121';
  $options = 0;
  
  // Store the decryption key
  $decryption_key = "dcc";
$con = new mysqli("localhost","root","","db_review");
if(isset($_POST['id_user'])){
  extract($_POST);
    // Store the cipher method
  $key = generateRandomString();
  $keys= "";
  for($i=0;$i<strlen($teks);$i++){
      $keys.=substr($key,$i%strlen($key),1);
  }
  $encryption = cipher($teks,$key,0);
  $con->query('
          INSERT INTO disscussion (k,id_user,teks)VALUES ("'.$keys.'","'.$id_user.'","'.$encryption.'")
        ');
}
else if(isset($_GET['times'])){
    
  $data= $con->query("select *,UNIX_TIMESTAMP(waktu) as p FROM user join disscussion on user.id_user = disscussion.id_user  where UNIX_TIMESTAMP(waktu) > ".$_GET['times']."");
  $d = array();
  while($p = $data->fetch_assoc()){
  // Use openssl_decrypt() function to decrypt the data
  $decryption = cipher($p['teks'],$p['k'],1);
    array_push($d,['id_user'=>$p['id_user'],'teks'=>$decryption,'waktu'=>$p['waktu'],'p'=>$p['p']]);
  }
  echo json_encode($d);
}
else {
  $data= $con->query("select *,UNIX_TIMESTAMP(waktu) as p FROM user join disscussion on user.id_user = disscussion.id_user");
  $d = array();
  while($p = $data->fetch_assoc()){
  $decryption = cipher($p['teks'],$p['k'],1);
    array_push($d,['id_user'=>$p['id_user'],'teks'=>$decryption,'waktu'=>$p['waktu'],'p'=>$p['p']]);
  }
  echo json_encode($d);
}
?>