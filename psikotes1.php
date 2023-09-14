<?php
session_start();
if(!isset($_SESSION['user_name']))
{
    include "menu_login.php";
}
?>
<frameset cols="30%,40%,*">
<frame src="wp-soal_i/welcome.php"name="frame kiri"scrolling="auto">
<frame src="wp-soal_ii/welcome.php"name="tengah"scrolling="no">
<frame src="wp-soal_iii/welcome.php"name="frame kanan"scrolling="no">
</frameset>
</head>
<body>
<a href="finish_step_i.php">Finish</a>
</body>
</html>