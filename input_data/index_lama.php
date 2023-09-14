<?php session_start();
$user=$_SESSION['user_name'];
if(isset($_SESSION['user_name']))
{
    ?>  <script language="javascript">document.location.href="homepage.php";</script><?php

}
else
{ ?>
<html>
<head>
<title> Psikotest Online Persada</title>
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
#wrapper {
	width: 860px;
	background-color: #FFF;
	margin: auto;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 20px;
	height: auto;
	border-top-style: double;
	border-right-style: double;
	border-bottom-style: double;
	border-left-style: double;
	border-top-width: 10px;
	border-right-width: 10px;
	border-bottom-width: 10px;
	border-left-width: 10px;
}
body {
	margin-left: 75px;
	margin-top: 25px;
	margin-right: 75px;
	margin-bottom: 25px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body background="image/background_green.png">
<div id="#wrapper">
  <div id="wrapper">
    <p align="center">
    <a href="/"><img src="image/logo_persada.png"align="center"></a></p>
    <p align="center">&nbsp;</p>
    <h3 align="center">Form Log In Psikotest Online Persada</h3>
    <p>&nbsp;</p>
    <form action="login_cek.php"method="POST">
      <table border="1" align="center"width="50%"height="35%"class="sample">
        <tr align="center">
          <td>
            <table border="0"align="center">
              <tr align="center">
                <td border="0"> User Name </td>
                <td> : </td>
                <td> <input type="text"name="user_name" required > </td>
              </tr>
              <tr align="center">
                <td> Password </td>
                <td> : </td>
                <td> <input type="password"name="password" required > </td>
              </tr>
              <tr align="center">
                <td colspan="3"> <input type="submit"value="Log In"> </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>
    <p>&nbsp;</p>
    <h3 align="center">Copyright Persada 2013.</h3>
  </div>
</div>
</body></html>
<?php
}
?>
