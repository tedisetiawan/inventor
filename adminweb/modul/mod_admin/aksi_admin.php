<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Input user
if ($module=='admin' AND $act=='input'){
  $pass=md5($_POST[password]);
  mysql_query("INSERT INTO admins(username,
                                 password,
                                 nama_lengkap,
                                 email, 
                                 no_telp,
								 level,
                                 id_session) 
	                       VALUES('$_POST[username]',
                                '$pass',
                                '$_POST[nama_lengkap]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
								'$_POST[level]',
                                '$pass')");
  header('location:../../media.php?module='.$module);
}

// Update user
elseif ($module=='admin' AND $act=='update'){
  if (empty($_POST[password])) {
    mysql_query("UPDATE admins SET nama_lengkap   = '$_POST[nama_lengkap]',
                                  email          = '$_POST[email]',
                                  blokir         = '$_POST[blokir]',  
                                  no_telp        = '$_POST[no_telp]',
								  level          = '$_POST[level]'  
                           WHERE  id_session     = '$_POST[id]'");
  }
  // Apabila password diubah
  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE admins SET password        = '$pass',
                                 nama_lengkap    = '$_POST[nama_lengkap]',
                                 email           = '$_POST[email]',  
                                 blokir          = '$_POST[blokir]',  
                                 no_telp         = '$_POST[no_telp]',
								 level 			 = '$_POST[level]'  
                           WHERE id_session      = '$_POST[id]'");
  }
  header('location:../../media.php?module='.$module);
}
}
?>
