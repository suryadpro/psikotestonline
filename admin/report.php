<?php
include "sql_connect.php";
?>
<font size="+1">

<form action="menu.php?data=report&proses=yes" method="POST">
Report Month : 
			<select name="bln" required />
				<option value="">Bulan</option>
				<option value="01" <?php if($_POST['bln'] == "01") { echo "selected"; } ?> >Januari</option>
				<option value="02" <?php if($_POST['bln'] == "02") { echo "selected"; } ?>>Februari</option>
				<option value="03" <?php if($_POST['bln'] == "03") { echo "selected"; } ?>>Maret</option>
				<option value="04" <?php if($_POST['bln'] == "04") { echo "selected"; } ?>>April</option>
				<option value="05" <?php if($_POST['bln'] == "05") { echo "selected"; } ?>>Mei</option>
				<option value="06" <?php if($_POST['bln'] == "06") { echo "selected"; } ?>>Juni</option>
				<option value="07" <?php if($_POST['bln'] == "07") { echo "selected"; } ?>>Juli</option>
				<option value="08" <?php if($_POST['bln'] == "08") { echo "selected"; } ?>>Agustus</option>
				<option value="09" <?php if($_POST['bln'] == "09") { echo "selected"; } ?>>September</option>
				<option value="10" <?php if($_POST['bln'] == 10) { echo "selected"; } ?>>Oktober</option>
				<option value="11" <?php if($_POST['bln'] == 11) { echo "selected"; } ?>>November</option>
				<option value="12" <?php if($_POST['bln'] == 12) { echo "selected"; } ?>>Desember</option>
			</select>
			<select name="th" required>
				<option value="">Tahun</option>
				<option <?php if($_POST['th'] == 2014) { echo "selected"; } ?> >2014</option>
				<option <?php if($_POST['th'] == 2015) { echo "selected"; } ?> >2015</option>
			</select>
			<button type="submit" class="pure-button pure-button-primary">Kirim</button>
</form>
<?php if($_GET['proses'] == "yes") {	?>
<font size="+2">
<p><b>Report Data TMK</b></p>
<table width="100%" bgcolor="white" class="a">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Nomor KTP</th>
		<th>Tanggal Tes</th>
		<th>Rekomendasi</th>
		<th>Posisi</th>
		<th>Mitra</th>
		<th>Nomor Kontrak</th>
		<th>TMT</th>
	</tr>
	<?php $no=0; $rumus4=mysql_query("select tgl_lahir,id,nama_lengkap,tanggal_input,nmr_ktp from kandidat_persada where tanggal_input between '$_POST[th]-$_POST[bln]-01' and '$_POST[th]-$_POST[bln]-31' order by tanggal_input"); while($c=mysql_fetch_array($rumus4)) { ?>
	<tr>
		<td><?php echo $no=$no+1; ?></td>
		<td><?php echo $c['nama_lengkap']; ?></td>
		<td><?php echo $c['nmr_ktp']; ?></td>
		<td><?php echo $c['tanggal_input']; ?></td>
		<td align="center"><?php  $d=mysql_query("select status from psikotest where id='$c[id]' and pic <>'' order by id_psi desc;"); $da=mysql_fetch_array($d); switch($da['status']) { case 0 : echo "-"; break; case 1 : echo "Lulus"; break; case 2 : echo "Tidak Lulus"; break; case 3 : echo "Tidak Hadir"; break;} ?> </td>
		
		<?php include "koneksi_orchid_new.php";
		$rumusa="SELECT DISTINCT
a.nik AS NIK,c.oldnik AS OLDNIK,a.firstname AS NAMALENGKAP,
la.defaultvalue AS J_KELAMIN,
birthdate AS TGL_LAHIR,
birthplace AS TEMPAT_LAHIR,
a.address AS ALAMAT,
lb.defaultvalue AS KOTA,
a.zip AS KODE_POS,
mobilephone AS NO_HANDPHONE,
fixedphone AS NO_TELEPHONE,
a.email AS EMAIL,
bloodtype AS GOL_DARAH,
lc.defaultvalue AS PENDIDIKAN,
ld.defaultvalue AS JURUSAN,
latescampus AS LEMBAGA,
p1.gpavalue AS IPK,
p1.graduationyear AS THN_LULUS,
le.defaultvalue AS STATUS,
maritaldate AS TGL_NIKAH,
lf.defaultvalue AS AGAMA,
sidnumber AS NO_KTP,
contractsequence AS KONTRAK_KE,
c.joiningdate AS TMT,
b.startdate AS AWAL_KONTRAK,
b.enddate AS AKHIR_KONTRAK,
cln.name AS CLIENT,
pos.positionname AS JABATAN,
accountnumber AS NO_REKENING,
accountname AS NAMA_REKENING,
lg.defaultvalue AS BANK,
lh.defaultvalue AS LOKASI,
locationspecific AS LOKASI2,
org.name AS ORGANISASI,
jamsostek AS NO_JAMSOSTEK,
ae.defaultvalue AS PTKP,
npwp AS NO_NPWP,
ab.defaultvalue AS JENISPO,
refdoc.numbercode AS NO_PO,
sbu.name AS SBU,
workdescription AS DESKRIPSI_PO,
resigndate AS TGL_KELUAR,
ad.defaultvalue AS KET_KELUAR,
resignnote AS KETERANGAN,
af.defaultvalue AS JENISPENAMBAHAN,
a.created,
a.creator
FROM emp_biodata AS a
LEFT JOIN emp_adminattribute AS b ON a.nik = b.nik
LEFT JOIN emp_generalattribute AS c ON a.nik = c.nik
LEFT JOIN sys_lookup AS la ON la.lookuptype = 'GENDER' AND la.lookupstring = a.gender
LEFT JOIN sys_lookup AS lb ON lb.lookuptype = 'CTY_CODE' AND lb.lookupstring = a.city
LEFT JOIN sys_lookup AS lc ON lc.lookuptype = 'EDU_LEV' AND lc.lookupstring = latesducation
LEFT JOIN sys_lookup AS ld ON ld.lookuptype = 'EDU_MJR' AND ld.lookupstring = latesmajoring
LEFT JOIN sys_lookup AS le ON le.lookuptype = 'MRT_STAT' AND le.lookupstring = maritalstatus
LEFT JOIN sys_lookup AS lf ON lf.lookuptype = 'REF_REL' AND lf.lookupstring = religion
LEFT JOIN sys_lookup AS ad ON ad.lookupstring = c.resigncaused AND ad.lookuptype='SPR_DESC'
LEFT JOIN sys_lookup AS af ON af.lookupstring = c.joiningtype AND af.lookuptype='MCRT_CODE'
LEFT JOIN sys_lookup AS ae ON ae.lookuptype = 'TAX_CODE' AND ae.lookupstring = c.ptkp
LEFT JOIN cfg_clients AS cln ON cln.cln_id = CLIENT
LEFT JOIN cfg_position AS pos ON pos.pos_id = b.positioncode
LEFT JOIN sys_lookup AS lg ON lg.lookuptype = 'BANK' AND lg.lookupstring = accountbank
LEFT JOIN sys_lookup AS lh ON lh.lookuptype = 'CTY_CODE' AND lh.lookupstring = locationcity
LEFT JOIN cfg_clientorganization AS org ON org.code = placementonclient
LEFT JOIN refdoc_basicattribute AS refdoc ON refdoc.ref_id = referencedoc
LEFT JOIN emp_contractrecord AS con ON b.nik = con.nik AND b.startdate=con.startdate AND b.enddate=con.enddate
LEFT JOIN sys_lookup AS ab ON ab.lookupstring = c.employeestatus AND ab.lookuptype='EMP_STAT'
LEFT JOIN emp_educationrecord AS p1 ON p1.nik = a.nik
LEFT JOIN cfg_sbu AS sbu ON refdoc.sbucode=sbu.sbu_id
WHERE a.sidnumber='$c[nmr_ktp]' or birthplace='$c[tgl_lahir]' and a.firstname like '$c[nama_lengkap]'
ORDER BY a.created;";
$query_or=mysql_query($rumusa); $row=mysql_fetch_array($query_or); $num=mysql_num_rows($query_or); ?>
		<td align="center"><?php echo $row['JABATAN']; ?> </td>
		<td align="center"><?php echo $row['CLIENT']; ?> </td>
		<td align="center"><?php echo $row['NO_PO']; ?> </td>
		<td align="center"><?php echo $row['TMT']; ?> </td>
	</tr>
	<?php include "koneksi.php"; } ?>
</table>
<br>
<?php } ?>