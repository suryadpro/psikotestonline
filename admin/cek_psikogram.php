<?php
include "sql_connect.php";
$rumus="select *,c.nama as posisi from register a,skor_tes b,kebutuhan c,kandidat_persada e where a.kebutuhan=c.id and a.user_id='$_GET[user_name]' and a.user_id=b.user_id and a.user_id=e.user_id order by a.user_id desc limit 0,1 ";
$query=mysql_query($rumus);
$row=mysql_fetch_array($query);
 $date=$row['tanggal'];
 function TanggalIndo($date){
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl   = substr($date, 8, 2);

	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
	return($result);
}

	if($row['skor_i'] == 20) { $skor_i=7; } elseif($row['skor_i'] >= 18) { $skor_i=6; } elseif($row['skor_i'] >= 15) { $skor_i=5; } elseif($row['skor_i'] >= 11) { $skor_i=4; } elseif($row['skor_i'] >= 8) { $skor_i=3; } elseif($row['skor_i'] >= 4) { $skor_i=2; } elseif($row['skor_i'] >= 0) { $skor_i=1; }
	if($row['skor_ii'] >= 19) { $skor_ii=7; } elseif($row['skor_ii'] >= 17) { $skor_ii=6; } elseif($row['skor_ii'] >= 14) { $skor_ii=5; } elseif($row['skor_ii'] >= 11) { $skor_ii=4; } elseif($row['skor_ii'] >= 8) { $skor_ii=3; } elseif($row['skor_ii'] >= 5) { $skor_ii=2; } elseif($row['skor_ii'] >= 0) { $skor_ii=1; }
	if($row['skor_iii'] == 20) { $skor_iii=7; } elseif($row['skor_iii'] == 19) { $skor_iii=6; } elseif($row['skor_iii'] >= 15) { $skor_iii=5; } elseif($row['skor_iii'] >= 10) { $skor_iii=4; } elseif($row['skor_iii'] >= 6) { $skor_iii=3; } elseif($row['skor_iii'] >= 2) { $skor_iii=2; } elseif($row['skor_iii'] >= 0) { $skor_iii=1; }
	if($row['skor_iv'] >= 19) { $skor_iv=7; } elseif($row['skor_iv'] >= 17) { $skor_iv=6; } elseif($row['skor_iv'] >= 13) { $skor_iv=5; } elseif($row['skor_iv'] >= 10) { $skor_iv=4; } elseif($row['skor_iv'] >= 6) { $skor_iv=3; } elseif($row['skor_iv'] >= 3) { $skor_iv=2; } elseif($row['skor_iv'] >= 0) { $skor_iv=1; }
$verbal=($skor_i+$skor_ii)/2; echo "Hasil tes verbal : $verbal<br>";
$aritmatik=$skor_iii; echo "Hasil tes aritmatik : $aritmatik<br>";
$general=($skor_ii+$skor_iv)/2; echo "Hasil tes general : $general<br>";
switch($verbal) { case 7 : $i="Tinggi"; break; case 6 : $i="Tinggi"; break; case 5 : $i="Tinggi"; break; case 4 : $i="Rata-rata"; break; case 3 : $i="Rata-rata"; break; case 2 : $i="Rendah"; break; case 1 : $i="Rendah"; break; case 0 : $i="Rendah"; break;	}
switch($aritmatik) { case 7 : $ii="Tinggi"; break; case 6 : $ii="Tinggi"; break; case 5 : $ii="Tinggi"; break; case 4 : $ii="Rata-rata"; break; case 3 : $ii="Rata-rata"; break; case 2 : $ii="Rendah"; break; case 1 : $ii="Rendah"; break; case 0 : $ii="Rendah"; break;	}
switch($general) { case 7 : $iii="Tinggi"; break; case 6 : $iii="Tinggi"; break; case 5 : $iii="Tinggi"; break; case 4 : $iii="Rata-rata"; break; case 3 : $iii="Rata-rata"; break; case 2 : $iii="Rendah"; break; case 1 : $iii="Rendah"; break; case 0 : $iii="Rendah"; break;	}
//switch($skor_iv) { case 7 : $iv="Tinggi"; break; case 6 : $iv="Tinggi"; break; case 5 : $iv="Tinggi"; break; case 4 : $iv="Rata-rata"; break; case 3 : $iv="Rata-rata"; break; case 2 : $iv="Rendah"; break; case 1 : $iv="Rendah"; break;	}
switch($i) { case "Tinggi" : $a=3; break; case "Rata-rata" : $a=2; break; case "Rendah" : $a=1; break; }
switch($ii) { case "Tinggi" : $b=3; break; case "Rata-rata" : $b=2; break; case "Rendah" : $b=1; break; }
switch($iii) { case "Tinggi" : $c=3; break; case "Rata-rata" : $c=2; break; case "Rendah" : $c=1; break; }
if($a >= 2 && $b >= 2 && $c >= 2) { $srn="þ"; $dpt="¨"; $tds="¨"; }
if($a < 2 || $b < 2 || $c < 2) { $srn="¨"; $dpt="þ"; $tds="¨"; }
if($a < 2) { if($b < 2 || $c < 2) { $srn="¨"; $dpt="¨"; $tds="þ"; } } elseif($b < 2) { if($a < 2 || $c < 2) { $srn="¨"; $dpt="¨"; $tds="þ"; } } elseif($c < 2) { if($a < 2 || $b < 2) { $srn="¨"; $dpt="¨"; $tds="þ"; } }
	?>