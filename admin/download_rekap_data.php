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
}; 

// query
include "sql_connect.php";
$e=$_GET['th'];
$d=$_GET['bln'];
$rumus="select d.nama_lengkap,e.tanggal,e.tes1,e.tes2,e.tes3,e.tes4,e.tes5,c.nama,b.user_name as pic,f.name_region as region from kebutuhan a,region f,admin b,client c,hasil e,register d where e.user_id=d.user_id and a.pic=b.id_admin and a.id=e.label and a.client=c.id and a.tanggal like '$e-$d-%' and b.region=f.id_region";
$query=mysql_query($rumus);
?>

<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:o="urn:schemas-microsoft-com:office:office"
 xmlns:x="urn:schemas-microsoft-com:office:excel"
 xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:html="http://www.w3.org/TR/REC-html40">
 <DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
  <Author>Surya Dewantara</Author>
  <LastAuthor>Persada</LastAuthor>
  <Created>2014-07-02T03:14:04Z</Created>
  <LastSaved>2014-07-14T02:49:53Z</LastSaved>
  <Version>14.00</Version>
 </DocumentProperties>
 <OfficeDocumentSettings xmlns="urn:schemas-microsoft-com:office:office">
  <AllowPNG/>
 </OfficeDocumentSettings>
 <ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel">
  <WindowHeight>7755</WindowHeight>
  <WindowWidth>11475</WindowWidth>
  <WindowTopX>360</WindowTopX>
  <WindowTopY>90</WindowTopY>
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
  <Style ss:ID="s57">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
  </Style>
  <Style ss:ID="s58">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="s65">
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"
    ss:Bold="1"/>
   <Interior ss:Color="#948A54" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s66">
   <Borders/>
  </Style>
  <Style ss:ID="s67">
   <Borders/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="s71">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Interior/>
  </Style>
 </Styles>
 <Worksheet ss:Name="psikotest_online_201406-1">
  <Table>
   <Column ss:Width="18.75"/>
   <Column ss:Width="156"/>
   <Column ss:Width="51"/>
   <Column ss:Width="24.75" ss:Span="3"/>
   <Column ss:Index="8" ss:Width="132.75"/>
   <Column ss:Width="114.75"/>
   <Column ss:Width="87.75"/>
   <Row>
    <Cell ss:StyleID="s65"><Data ss:Type="String">No</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">Nama Lengkap</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">Tanggal</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">tes1</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">tes2</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">tes3</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">tes4</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">tes5</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">Posisi Kerja</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">PIC</Data></Cell>
    <Cell ss:StyleID="s65"><Data ss:Type="String">REGION</Data></Cell>
   </Row>
   <?php $noe=0; while($row=mysql_fetch_array($query)) { $noe++; ?>
   <Row>
    <Cell ss:StyleID="s57"><Data ss:Type="Number"><?php echo $noe; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['nama_lengkap']; ?></Data></Cell>
    <Cell ss:StyleID="s58"><Data ss:Type="DateTime"><?php echo $row['tanggal']; ?>T00:00:00.000</Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['tes1']; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['tes2']; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['tes3']; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['tes4']; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['tes5']; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['nama']; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['pic']; ?></Data></Cell>
    <Cell ss:StyleID="s57"><Data ss:Type="String"><?php echo $row['region']; ?></Data></Cell>
   </Row>
   <?php } ?>
  </Table>
  <WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
   <PageSetup>
    <Header x:Margin="0.3"/>
    <Footer x:Margin="0.3"/>
    <PageMargins x:Bottom="0.75" x:Left="0.7" x:Right="0.7" x:Top="0.75"/>
   </PageSetup>
   <Print>
    <ValidPrinterInfo/>
    <PaperSizeIndex>9</PaperSizeIndex>
    <VerticalResolution>0</VerticalResolution>
   </Print>
   <Selected/>
   <Panes>
    <Pane>
     <Number>3</Number>
     <ActiveRow>7</ActiveRow>
     <ActiveCol>2</ActiveCol>
    </Pane>
   </Panes>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet>
</Workbook>

