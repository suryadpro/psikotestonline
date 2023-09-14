<?php session_start(); 
include "sql_connect.php"; 
$username=$_POST['username']; 
$password=$_POST['password']; 
/*$query=mysql_query("select * from register where user_name='$username' and password='$password' order by user_id desc limit 0,1"); 
$cek=mysql_num_rows($query);
$row=mysql_fetch_array($query); */
$query=mysqli_query($koneksi,"select * from register where user_name='$username' and password='$password' order by user_id desc limit 0,1");
$cek=mysqli_num_rows($query);
$row=mysqli_fetch_array($query); 
if($cek){ 
 $_SESSION['user_name']=$username;
 $_SESSION['user_id'] =$row['user_id'];
 
 ?><script language="javascript">document.location.href="homepage2.php";</script><?php 
}else{ 
 ?><script>alert('Anda gagal login. silahkan Login kembali');window.history.back();</script><?php 
 echo mysql_error(); 
} 
?> 