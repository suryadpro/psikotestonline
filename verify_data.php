<?php session_start();
include "sql_connect.php";
#$rumus="select * from kandidat_persada where user_id='$_SESSION[user_id]'";
/*$query=mysql_query($rumus);
$num=mysql_num_rows($query);*/
$query=mysqli_query($koneksi,"select * from kandidat_persada where user_id='$_SESSION[user_id]'");
$num=mysqli_num_rows($query);
if($_SESSION['user_id'] == 548 || $_SESSION['user_id'] == 550) {
	
}
elseif($num > 0) { echo "<meta http-equiv=\"refresh\" content=\"0;url=wp-soal_i/welcome.php \">"; exit; } ?><html> <title>Psikotest Online</title>
    <link href=".bootstrap.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
		<link href="style/jquery.datepick.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="style/jquery.plugin.js"></script>
<script src="style/jquery.datepick.js"></script>	
	<script>
	function disable_f5(e)
{
  if ((e.which || e.keyCode) == 116)
  {
      e.preventDefault();
  }
}

$(document).ready(function(){
    $(document).bind("keydown", disable_f5);    
});
$(function() {
	$('.popupDatepicker').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script type="text/javascript"> function validasi_input(form){ var mincar = 5; if (form.nmr_ktp.value.length < mincar){ alert("Panjang Username Minimal 5 Karater!"); form.username.focus(); return (false); } return (true); } </script>
<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
     <style>
		body { 
		  background: url(blue-sky.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		.form-2 {
    /* Size and position */
	width:1300px;
	margin:40px auto;
	padding:20px;
	position:relative;
    /* Styles */
    background: #fffaf6;
    border-radius: 4px;
    color: #7e7975;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 
}
		.form-1 {
    /* Size and position */
	width:1050px;
	margin: auto;
	position:relative;
}
#sub {
    /* Width and position */
    width: 30%;
    padding: 8px 5px;
  
    /* Styles */
    border: 1px solid #0273dd; /* Fallback */
    border: 1px solid rgba(0,0,0,0.4);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 10px 10px rgba(255,255,255,0.1);
    border-radius: 3px;
    background: #38a6f0;
    cursor:pointer;
  
    /* Font styles */
    font-family: 'Ubuntu', 'Lato', sans-serif;
    color: white;
    font-weight: 700;
    font-size: 15px;
    text-shadow: 0 -1px 0 rgba(0,0,0,0.8);
}
	</style>
    <body  style=""><font face="aharoni"><br>
	<h4 align="center">Psikotest Online persada</p>
	<div class="form-1">
	<img src="logo.png">
	</div>
	<br>
	<div class="form-2">
<table border="0"align="center">
<h3 align="center">Form Registrasi Psikotest Online</h3>
<hr>
<form method="post" action="proses.php" class="contact_form" enctype="multipart/form-data">
  <tr>
    <td width="168">Nama Lengkap</td>
    <td width="10">:</td>
    <td><input  autocomplete="off"  class="do" type="text" name="nama_lengkap" class="stopRKey"  onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"required><font color="red"><i>*Wajib sesuai KTP</i></font></td>
  </tr>
	<tr>
    <td>Tempat Lahir</td>
    <td valign="top">:</td>
    <td><input  autocomplete="off"  type="text" name="tempat_lahir" required class="do"  onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)">
    </td>
  <tr>  
    <td>Tgl Lahir</td>
    <td>:</td>
    <td>
			<input  autocomplete="off"  class="popupDatepicker" name="tgl_lahir" type="text" required onKeyPress="return goodchars(event,'',this)">	</td>
  </tr>

  <tr>  
    <td>Gender</td>
    <td>:</td>
    <td><input  autocomplete="off"  type="radio" name="gender" value="pria" required>Pria
        <input  autocomplete="off"  type="radio" name="gender" value="wanita" required>Wanita </td>
  </tr>
  <tr>  
    <td>Tinggi Badan</td>
    <td>:</td>
    <td><input  autocomplete="off"  class="heig" type="text" name="tinggi" required onKeyPress="return goodchars(event,'1234567890',this)" size="3" maxlength="3"> Cm
	, Berat Badan : <input  autocomplete="off"   class="heig" type="text" name="berat" required onKeyPress="return goodchars(event,'1234567890',this)"maxlength="3" size="3"> Kg </td>
  </tr>
  <tr>
    <td>Status Kawin</td>
    <td>:</td>
    <td><select name="status_kawin" required class="go">
		<option value="" selected="selected"></option>
		<option value="TK">Belum Menikah</option>
		<option value="SM">Sudah Menikah</option>
		</select>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
  <td><select name="agama" required class="go">
  		<option value="" selected="selected"></option>
  		<option value="ISLAM">ISLAM</option>
		<option value="PROTESTAN">PROTESTAN</option>
		<option value="KATOLIK">KATOLIK</option>
		<option value="HINDU">HINDU</option>
		<option value="BUDHA">BUDHA</option>
		</select></td>
  </tr>
  <tr>
    <td valign="top">Alamat Lengkap</td>
    <td valign="top">:</td>
    <td valign="top"><input  autocomplete="off"  class="do" type="text" name="alamat_lengkap"  onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',this)"required>
		RT : <input  autocomplete="off"  class="heig" type="text" name="rt" required onKeyPress="return goodchars(event,'1234567890',this)" maxlength="3">
		 | RW : <input  autocomplete="off"  class="heig" type="text" name="rw" required onKeyPress="return goodchars(event,'1234567890',this)" maxlength="3">
		 <br><br>Kelurahan : <input  autocomplete="off"  class="do" type="text" name="kel"  onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',this)"required>
		 | Kecamatan : <input  autocomplete="off"  class="do" type="text" name="kec"  onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',this)"required>
		<br><font color="red"><i>*Wajib sesuai KTP</i></font></td>
	</tr>
  <tr>
    <td valign="top">Kota</td>
    <td valign="top">:</td>
<td><select name="kota" required class="go">
<option align="center" value=""></option>
<option>AMBON</option>
<option>BALIKPAPAN</option>
<option>BANDA ACEH</option>
<option>BANDAR LAMPUNG</option>
<option>BANDUNG</option>
<option>BANJAR</option>
<option>BANJARBARU</option>
<option>BANJARMASIN</option>
<option>BANTAENG</option>
<option>BANTUL</option>
<option>BATAM</option>
<option>BATU</option>
<option>BAU-BAU</option>
<option>BEKASI</option>
<option>BENGKULU</option>
<option>BIMA</option>
<option>BINJAI</option>
<option>BITUNG</option>
<option>BLITAR</option>
<option>BLORA</option>
<option>BOGOR</option>
<option>BONE</option>
<option>BONTANG</option>
<option>BOYOLALI</option>
<option>BREBES</option>
<option>BUKITTINGGI</option>
<option>BULUKUMBA</option>
<option>CIAMIS</option>
<option>CIANJUR</option>
<option>CIAWI</option>
<option>CILACAP</option>
<option>CILEGON</option>
<option>CIMAHI</option>
<option>CIMAHI</option>
<option>CIREBON</option>
<option>DENPASAR</option>
<option>DEPOK</option>
<option>DUMAI</option>
<option>ENREKANG</option>
<option>GARUT</option>
<option>GORONTALO</option>
<option>GOWA</option>
<option>GUNUNGSITOLI</option>
<option>INDRAMAYU</option>
<option>N/A</option>
<option>JAKARTA BARAT</option>
<option>JAKARTA PUSAT</option>
<option>JAKARTA SELATAN</option>
<option>JAKARTA TIMUR</option>
<option>JAKARTA UTARA</option>
<option>JAMBI</option>
<option>JAYAPURA</option>
<option>JENEPONTO</option>
<option>KARAWANG</option>
<option>KEBUMEN</option>
<option>KEDIRI</option>
<option>KENDARI</option>
<option>KLATEN</option>
<option>KOTAMOBAGU</option>
<option>KUNINGAN</option>
<option>KUPANG</option>
<option>LANGSA</option>
<option>LEBAK</option>
<option>LHOKSEMAWE</option>
<option>LUBUK LINGGAU</option>
<option>MADIUN</option>
<option>MAGETAN</option>
<option>MAGELANG</option>
<option>MAJALENGKA</option>
<option>MAJENE</option>
<option>MAKASSAR</option>
<option>MALANG</option>
<option>MAMASA</option>
<option>MAMUJU</option>
<option>MAMUJU UTARA</option>
<option>MANADO</option>
<option>MAROS</option>
<option>MATARAM</option>
<option>MEDAN</option>
<option>METRO</option>
<option>MOJOKERTO</option>
<option>NAGELANG</option>
<option>NGANJUK</option>
<option>NGAWI</option>
<option>PACITAN</option>
<option>PADANG</option>
<option>PADANG PANJANG</option>
<option>PADANG SIDEMPUAN</option>
<option>PAGAR ALAM</option>
<option>PALANGKA RAYA</option>
<option>PALEMBANG</option>
<option>PALOPO</option>
<option>PALU</option>
<option>PANDEGLANG</option>
<option>PANGKAL PINANG</option>
<option>PAREPARE</option>
<option>PARIAMAN</option>
<option>PASURUAN</option>
<option>PATI</option>
<option>PAYAKUMBUH</option>
<option>PEKALONGAN</option>
<option>PEKANBARU</option>
<option>PEMALANG</option>
<option>PEMATANG SIANTAR</option>
<option>PEMEKASAN</option>
<option>PINRANG</option>
<option>POLEWALI MANDAR</option>
<option>PONTIANAK</option>
<option>PRABUMULIH</option>
<option>PROBOLINGGO</option>
<option>PURBALINGGA</option>
<option>PURWAKARTA</option>
<option>PURWOKERTO</option>
<option>PURWOREJO</option>
<option>SABANG</option>
<option>SALATIGA</option>
<option>SALATIGA</option>
<option>SAMARINDA</option>
<option>SAWAH LUNTO</option>
<option>SEMARANG</option>
<option>SERANG</option>
<option>SIBOLGA</option>
<option>SINGKAWANG</option>
<option>SINJAI</option>
<option>SLEMAN</option>
<option>SOLO</option>
<option>SOLOK</option>
<option>SOPPENG</option>
<option>SORONG</option>
<option>SUBANG</option>
<option>SUBULUSSALAM</option>
<option>SUKABUMI</option>
<option>SUMEDANG</option>
<option>SUNGAIPENUH</option>
<option>SURABAYA</option>
<option>TAKALAR</option>
<option>TANA TORAJA</option>
<option>TANGERANG</option>
<option>TANGERANG SELATAN</option>
<option>TANJUNG BALAI</option>
<option>TANJUNG PINANG</option>
<option>TARAKAN</option>
<option>TASIKMALAYA</option>
<option>TEBING TINGGI</option>
<option>TEGAL</option>
<option>TERNATE</option>
<option>TOMOHON</option>
<option>TORAJA UTARA</option>
<option>TUAL</option>
<option>TULUNGAGUNG</option>
<option>WAJO</option>
<option>WONOGIRI</option>
<option>WONOSOBO</option>
<option>YOGYAKARTA</option>
</select><font color="red"><i>*Wajib sesuai KTP</i></font
</td>
   </tr>
  <tr>
    <td>Kode Pos</td>
    <td>:</td>
    <td><input  autocomplete="off"  type="text" class="do" name="kode_pos" onKeyPress="return goodchars(event,'0123456789',this)" maxlength="6"></td>
  </tr>
  <tr>
    <td>Level Pend</td>
    <td>:</td>
    <td><select name="level_pend" required class="go">
		<option value="" selected="selected"></option>
		<option value="SMP">SMP</option>
		<option value="SMU">SMU</option>
		<option value="SMK">SMK</option>
		<option value="MA">MA</option>
		<option value="D1">D1</option>
		<option value="D2">D2</option>
		<option value="D3">D3</option>
		<option value="D4">D4</option>
		<option value="S1">S1</option>
		<option value="S2">S2</option>
		<option value="S3">S3</option>
		</select>
  </tr><tr>
    <td>Jurusan</td>
    <td>:</td>
    <td><input  autocomplete="off"  class="do" type="text" name="jurusan" required onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',this)"></td>
  <tr>
    <td>Tahun Lulus</td>
    <td>:</td>
    <td><input  autocomplete="off"  class="do" type="text" name="tahun_lulus" required onKeyPress="return goodchars(event,'0123456789',this)"></td>
  </tr>
    <tr>
    <td>IPK</td>
    <td>:</td>
    <td><input  autocomplete="off"  class="do" type="text" name="ipk" onKeyPress="return goodchars(event,'.0123456789',this)"><font color="red"> *Jika belum memiliki IPK ketik 0</td>
  </tr>
  <tr>
    <td>Sekolah/Universitas</td>
    <td>:</td>
    <td><input  autocomplete="off"  class="do" type="text" name="sekolah_universitas"  onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',this)"required></td>
  </tr>
    <tr>
      <td valign="top">Nmr Ktp</td>
      <td valign="top">:</td>
      <td><input  autocomplete="off"  class="do"  maxlength="16" pattern=".{16,16}" required title="16 characters" type="text" name="nmr_ktp"  onKeyPress="return goodchars(event,'0123456789',this)"required><font color="red"><i>*Wajib sesuai KTP</i></font></td>
    </tr>
    <tr>
      <td>Tlp Rumah</td>
      <td>:</td>
      <td><input  autocomplete="off"  class="do" type="text" name="tlp_rumah"  onKeyPress="return goodchars(event,'0123456789',this)"> <span class="form_hint">Jika tidak punya , ketik 0</span></td>
    </tr>
    <tr>
      <td>Mobile Phone</td>
      <td>:</td>
      <td><input  autocomplete="off"  class="do" type="text" name="mobile_phone" onKeyPress="return goodchars(event,'0123456789/',this)" required><span class="form_hint">*jika nomor hp lebih dari 1 , tambahkan tanda / untuk meneruskan penulisan</span></td> 
    </tr><!--
	<tr>
		<td> Upload CV </td>
		<td>:</td>
		<td><input  autocomplete="off"  name="userfile" type="file" size="50"> *jika ada</td>
	</tr> -->
    <tr>
      <td>Info Lowongan</td>
      <td>:</td>
      <td><input  autocomplete="off"  type="text" name="info" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',this)"></td>
    </tr>
	<tr>
		<td>Nama Ibu Kandung</td>
		<td>:</td>
		<td><input  autocomplete="off"  class="go" type="text" name="ibu" placeholder="nama ibu kandung" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" required></td>
    <tr>
	<tr>
		<td>Gaji yang diinginkan</td>
		<td>:</td>
		<td><select name="gaji" class="go">
				<option>500.000 sampai 1.000.000</option>
				<option>1.000.000 sampai 2.000.000</option>
				<option>2.000.000 sampai 3.000.000</option>
				<option> > 3.000.000 </option></td>
	</tr>
	<tr>
		<td>Lokasi Penempatan yang diinginkan</td>
		<td>:</td>
		<td>1.<input  autocomplete="off"  type="text" name="lokasi1" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)">
			2.<input  autocomplete="off"  type="text" name="lokasi2" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)">
				</td>
	</tr>
	<tr>
		<Td> Pengalaman Kerja </td>
		<Td>:</td>
		<td>1. Posisi : <input  autocomplete="off"  type="text" name="posisi1" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',this)"> Perusahaan : <input  autocomplete="off"  type="text" name="perusahaan1" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789',this)"> Periode :
			<select name="durasi1" class="go">
				<option value="-"><-Pilih salah satu-></option>
				<option>-</option>
				<option>Fresh Graduate</option>
				<option>0 s/d 6 bulan </option>
				<option>7 s/d 11 bulan </option>
				<option>1 tahun </option>
				<option>2 tahun </option>
				<option>3 tahun </option>
				<option> > 3 tahun </option>			
			</select>
		</td>
	</tr>
	<tr>
		<Td></td>
		<Td></td>
		<td>2. Posisi : <input  autocomplete="off"  type="text" name="posisi2" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',this)"> Perusahaan : <input  autocomplete="off"  type="text" name="perusahaan2" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',this)"> Periode :
			<select name="durasi2" class="go">
				<option value="-"><-Pilih salah satu-></option>
				<option>-</option>
				<option>Fresh Graduate</option>
				<option>0 s/d 6 bulan </option>
				<option>7 s/d 11 bulan </option>
				<option>1 tahun </option>
				<option>2 tahun </option>
				<option>3 tahun </option>
				<option> > 3 tahun </option>			
			</select></td>
	</tr>
	<tr>
		<Td></td>
		<Td></td>
		<td>3. Posisi : <input  autocomplete="off"  type="text" name="posisi3" onKeyPress="return goodchars(event,'0 abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789',this)"> Perusahaan : <input  autocomplete="off"  type="text" name="perusahaan3" onKeyPress="return goodchars(event,' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',this)"> Periode :
			<select name="durasi3" class="go">
				<option value="-"><-Pilih salah satu-></option>
				<option>-</option>
				<option>Fresh Graduate</option>
				<option>0 s/d 6 bulan </option>
				<option>7 s/d 11 bulan </option>
				<option>1 tahun </option>
				<option>2 tahun </option>
				<option>3 tahun </option>
				<option> > 3 tahun </option>			
			</select></td>
	</tr>
    <tr>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><button id="sub" type="submit">Registrasi</button></td>
    </tr>
</form>  
</table>
    </div>
</body>
</html>