<?php session_start();
include "sql_connect.php";
$username = $_POST['user_name'];
$a = $_POST['password'];
$query = mysql_query("select * from register where user_name='$username'AND password='$a'");
if ($query) {
    echo "sukses login";
    include "./index.php";
} else {
    echo " gagal log in  User name / password salah";
    include "menu_login.php";
}
?>