<?php
include "sql_connect.php";
$cari=$_POST['tahap_psikotes'];
if($cari="Tahap I")
{
   ?> <script language="javascript">document.location.href("hasil_cariI.php");</script><?php
}
if($cari="Tahap II")
{
   ?> <script language="javascript">document.location.href("hasil_cariII.php");</script><?php
}
?>