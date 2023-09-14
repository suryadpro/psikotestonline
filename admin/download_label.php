<?php

include"sql_connect.php";
date_default_timezone_set('Asia/Jakarta');
$tanggal= date('Y-m-d');
$jam = date('H:i:s');
function durasi($date1, $date2)
{
	
	$durasi=(strtotime($date1)-strtotime($date2));
	if (floor($durasi/3600)<10)
    {
      	$jam="0".floor($durasi/3600);
	} else {
		$jam=floor($durasi/3600);
	} 
   
	if (floor(($durasi-$jam*3600)/60)<10)
	{
		$menit="0".floor(($durasi-$jam*3600)/60);
	} else {
		$menit=floor(($durasi-$jam*3600)/60);
	}
	   
	if (floor($durasi-$jam*3600-$menit*60)<10)
	{
		$detik="0".floor($durasi-$jam*3600-$menit*60);
	} else {
		$detik=floor($durasi-$jam*3600-$menit*60);
	}
	
	if ($durasi<0){
		$reg_time="00:00";
	} else {
		$reg_time="$jam:$menit";
	}
	return $reg_time;
}




header('Content-type: application/excel');
header('Content-Disposition: attachment; filename="hasil_psikotest.xls"');
session_start();
echo "<?xml version=\"1.0\"?>";
echo "<?mso-application progid=\"Excel.Sheet\"?>";
?>

<?php
function titleCase($string) {
$len=strlen($string);
$i=0;
$last= "";
$new= "";
$string=strtoupper($string);
while ($i<$len):
$char=substr($string,$i,1);
if (ereg( "[A-Z]",$last)):
$new.=strtolower($char);
else:
$new.=strtoupper($char);
endif;
$last=$char;
$i++;
endwhile;
return($new);
}; ?>


<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:o="urn:schemas-microsoft-com:office:office"
 xmlns:x="urn:schemas-microsoft-com:office:excel"
 xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:html="http://www.w3.org/TR/REC-html40">
 <DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
  <Author>Administrator</Author>
  <LastAuthor>Administrator</LastAuthor>
  <Created>2013-07-19T04:03:32Z</Created>
  <Version>14.00</Version>
 </DocumentProperties>
 <OfficeDocumentSettings xmlns="urn:schemas-microsoft-com:office:office">
  <AllowPNG/>
 </OfficeDocumentSettings>
 <ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel">
  <WindowHeight>9285</WindowHeight>
  <WindowWidth>21075</WindowWidth>
  <WindowTopX>240</WindowTopX>
  <WindowTopY>105</WindowTopY>
  <ProtectStructure>False</ProtectStructure>
  <ProtectWindows>False</ProtectWindows>
 </ExcelWorkbook>
 <Styles>
  <Style ss:ID="Default" ss:Name="Normal">
   <Alignment ss:Vertical="Bottom"/>
   <Borders/>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior/>
   <NumberFormat/>
   <Protection/>
  </Style>
  <Style ss:ID="s62">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
  </Style>
  <Style ss:ID="s66">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Interior ss:Color="#FFFF00" ss:Pattern="Solid"/>
  </Style>
 </Styles><?php $rumuse= mysql_query("select * from log_query where user_name='$_SESSION[user_name]' order by log_id desc limit 0,1"); $loop=mysql_fetch_array($rumuse); $query2=mysql_query($loop['query']); while ($while=mysql_fetch_array($query2)) { ?>
 <Worksheet ss:Name="<?php echo $while[user_name]; ?>">
  <Table>
   <Column ss:AutoFitWidth="0" ss:Width="93"/>
   <Column ss:AutoFitWidth="0" ss:Width="67.5"/>
   <Column ss:AutoFitWidth="0" ss:Width="51.75"/>
   <Row ss:Index="3">
    <Cell ss:StyleID="s66"><Data ss:Type="String">user name</Data></Cell>
    <Cell ss:StyleID="s66"><Data ss:Type="String">kode soal</Data></Cell>
    <Cell ss:StyleID="s66"><Data ss:Type="String">jawaban</Data></Cell>
   </Row> <?php $query=mysql_query("select * from jawaban where user_name='$while[user_id]'"); while($row=mysql_fetch_array($query)) { ?>
   <Row> 
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php echo $while[user_name]; ?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php echo $row[kode_soal]; ?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?php if ($row[jawaban] == "Pilih jawaban disini") { echo " "; } elseif ($row['jawaban'] == "|||||") { echo " "; } else { echo $row['jawaban']; }?></Data></Cell>
   </Row> <?php } ?>
  </Table>
  <WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
   <PageSetup>
    <Header x:Margin="0.3"/>
    <Footer x:Margin="0.3"/>
    <PageMargins x:Bottom="0.75" x:Left="0.7" x:Right="0.7" x:Top="0.75"/>
   </PageSetup>
   <Selected/>
   <Panes>
    <Pane>
     <Number>3</Number>
     <ActiveRow>3</ActiveRow>
    </Pane>
   </Panes>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet> <?php } ?>
</Workbook>
