<?php session_start();
include "sql_connect.php";
$id=$_POST['id'];
$id_=$_POST['ide'];
$y=0;
for($x=1;$x<=100;$x++){
$a=$_POST['nm'.$x];
$b=$_POST['usr'.$x];
$c=$_POST['kd'.$x];
$d=$_POST['pw'.$x];

if($a != "") {
$query = mysql_query("insert into register values('','$a','','$b$c','$d','','','$id','-')");
$y=$y+1;
}
}
if ($query) {
$query2 = mysql_query("update kebutuhan set used=1 where id='$id'"); ?>
<script language="javascript">document.location.href="menu.php?data=monitoring_&id=<?php echo $id; ?>";</script> <?php
}
?>