<?php session_start(); 
include "sql_connect.php"; 
$username=$_POST['user_name']; 
$password=$_POST['password']; 
#$query=mysql_query("select * from admin where user_name='$username' and password='$password'"); 
echo $rumus = "select * from admin where user_name='$username' and password='$password'";
$query=mysqli_query($koneksi,$rumus); 
echo $cek=mysqli_num_rows($query);
$row=mysqli_fetch_array($query); 
if($cek){ 
 $_SESSION['id']=$row['id_admin'];
 $_SESSION['user_name']=$username;
 $_SESSION['level'] =$row['level'];
  
echo '<meta http-equiv="refresh" content="0;url=menu.php" />';  exit;
}else{ 
// echo "<script>alert('Username / password tidak sesuai');</script>";
// echo '<meta http-equiv="refresh" content="0;url=index.php" />';   exit;
 echo mysql_error(); 
} 
?> 