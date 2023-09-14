<?php session_start();
$user=$_SESSION['user_name'];
if(isset($_SESSION['user_name']))
{
    ?> <p align="center"> Selamat datang <?php echo $user; ?> <br />
    Silahkan klik <a href="menu.php">ini</a> untuk mengecek hasil Psikotes </p><?php

}
else
{
?>
<body background="image/background_green.png">
<style type="text/css">
table.sample {
	border-width: thick;
	border-spacing: 2px;
	border-style: inset;
	border-color: green;
	border-collapse: separate;
	background-color: white;
}
table.sample th {
	border-width: thin;
	padding: 3px;
	border-style: dashed;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
table.sample td {
	border-width: thin;
	padding: 3px;
	border-style: dashed;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
</style>
<h3 align="center">Master Log In</h3>
<br>
<form action="login_cek.php"method="POST">
<table border="1" align="center"width="50%"height="35%"class="sample">
	<tr align="center">
		<td>
<table border="0"align="center">
	<tr align="center">
		<td border="0"> User Name </td>
		<td> : </td>
		<td> <input type="text"name="user_name"> </td>
	</tr>
	<tr align="center">
		<td> Password </td>
		<td> : </td>
		<td> <input type="password"name="password"> </td>
	</tr>
	<tr align="center">
		<td colspan="2"> <input type="submit"value="Log In"> </td>
	</tr>
</table>
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>