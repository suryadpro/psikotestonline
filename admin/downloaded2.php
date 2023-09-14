<?php
include "sql_connect.php";
$user_name=$_GET['user_name'];
$query4=mysql_query("update register set status='done' where user_id='$user_name'");
?>
<script language="javascript">document.location.href="menu.php?data=monitoring_&update=yes&download2=yes&id=<?php echo $user_name; ?>";</script>