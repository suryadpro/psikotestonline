<?php session_start(); 
$id=$_SESSION['id'];
if ($id == "")
{
	?> <script language="javascript">document.location.href="index.php";</script> <?php
}
else
{
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Admin Psikotest Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Tomas Bagdanavicius, http://www.lwis.net/free-css-drop-down-menu/" />
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/ribbon.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/pure-min.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Beginning of compulsory code below -->
<style>
.form-2 {
    /* Size and position */
    width: 95%;
	 margin: 20px auto 10px;
    padding: 15px;
    position: relative;

    /* Styles */
    background: #fffaf6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 
}
</style>
<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/dropdown.vertical.rtl.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/default/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

<!-- / END -->

</head>
<body>

<p><a href="http://www.lwis.net/free-css-drop-down-menu/" class="main-site">Welcome</a></p>

<h1>Admin Psikotest Online Persada</h1>

<!-- Beginning of compulsory code below -->

<ul id="nav" class="dropdown dropdown-horizontal">
	<li><a href="menu.php">Home</a></li>
	<li><span class="dir">Kebutuhan</span>
		<ul>
			<?php if($_SESSION['level'] == 1) { ?><li><a href="menu.php?data=kebutuhan">Input Baru</a></li> <?php } ?>
			<?php if($_SESSION['level'] == 1) { ?><li><a href="menu.php?data=table_kebutuhan">Rekap Data</a></li> <?php } else { ?><li> <a href="menu.php?data=table_kebutuhan_users">Rekap Data</a></li> <?php } ?>
		</ul>
	</li>
	<li><span class="dir">Psikotest</span>
		<ul>
			<?php if($_SESSION['level'] == 1) { ?><li><a href="menu.php?data=monitoring_">Monitoring Hasil Tes</a></li> <?php } else { ?><li><a href="menu.php?data=monitoring_users">Monitoring Hasil Tes</a></li> <?php } ?>
			<?php if($_SESSION['level'] == 1) { ?><li><a href="menu.php?data=tarik_data">Rekap Hasil Psikotest</a></li> <?php } ?>
		</ul>
	</li>
	<?php if($_SESSION['level'] == 1) { ?><li><li><a href="menu.php?data=monitoring_juni">Psikotest Juni</a></li> <?php } ?>
	<?php if($_SESSION['level'] == 1) { ?><li><li><a href="menu.php?data=report">Report</a></li> <?php } ?>
	<?php if($_SESSION['level'] == 1) { ?><li><li><a href="menu.php?data=table_pi">user PIC</a></li> <?php } ?>
	<li><a href="logout.php">Log Out</a></li>
</ul>
<br>
<br>
<!-- / END -->
<?php if(isset($_GET['data'])) { ?> <div class="form-2"> <?php include($_GET['data'].".php"); ?> <br> </div> <?php }  ?>
</body>
</html>
<?php } ?>