<?php
$con=mysql_connect('10.0.0.200','agung','agungalika') or die('something error');
$konek=mysql_select_db('orchid_mm',$con);
$select=mysql_query("USE orchid_mm");
?>