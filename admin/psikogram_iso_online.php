<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=psikogram_psikotest_online.doc" );
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Pragma: public");
include "sql_connect.php";
$rumus="select *,c.nama as posisi from register a,papi_final b,kebutuhan c,hasil d,kandidat_persada e,skor_tes f where a.user_id=f.user_id and a.user_id='$_GET[user_name]' and a.user_id=b.id_user and a.user_id=e.user_id and a.user_id=d.user_id and a.kebutuhan=c.id order by d.user_id desc limit 0,1 ";
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
	$hasil=($skor_i+$skor_ii+$skor_iii+$skor_iv)/4;
	$hasile=ceil($hasil);
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="psikogram_iso_online_files/filelist.xml">
<link rel=Edit-Time-Data href="psikogram_iso_online_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Metal.doc</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Subject>Root</o:Subject>
  <o:Author>mETaL mUsIc_cReaToR</o:Author>
  <o:Keywords>GuE=AnDReNaLinE</o:Keywords>
  <o:Description>'Thinking about it...</o:Description>
  <o:LastAuthor>ismail - [2010]</o:LastAuthor>
  <o:Revision>3</o:Revision>
  <o:TotalTime>2</o:TotalTime>
  <o:LastPrinted>2011-10-17T07:51:00Z</o:LastPrinted>
  <o:Created>2015-08-31T07:42:00Z</o:Created>
  <o:LastSaved>2015-08-31T07:42:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>514</o:Words>
  <o:Characters>2933</o:Characters>
  <o:Company>no org</o:Company>
  <o:Lines>24</o:Lines>
  <o:Paragraphs>6</o:Paragraphs>
  <o:CharactersWithSpaces>3441</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
  <o:TargetScreenSize>800x600</o:TargetScreenSize>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="psikogram_iso_online_files/themedata.thmx">
<link rel=colorSchemeMapping
href="psikogram_iso_online_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Print</w:View>
  <w:HideSpellingErrors/>
  <w:HideGrammaticalErrors/>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>0</w:DisplayVerticalDrawingGridEvery>
  <w:UseMarginsForDrawingGridOrigin/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>IN</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" LatentStyleCount="267">
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="99" Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   Name="Table Grid"/>
  <w:LsdException Locked="false" Priority="99" UnhideWhenUsed="false"
   Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="99" UnhideWhenUsed="false"
   Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:SimSun;
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-alt:\5B8B\4F53;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
@font-face
	{font-family:SimSun;
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-alt:\5B8B\4F53;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
@font-face
	{font-family:"Trebuchet MS";
	panose-1:2 11 6 3 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:647 3 0 0 159 0;}
@font-face
	{font-family:"\@SimSun";
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-fareast-font-family:SimSun;
	mso-bidi-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-noshow:yes;
	mso-style-link:"Header Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:12.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-fareast-font-family:SimSun;
	mso-bidi-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-noshow:yes;
	mso-style-link:"Footer Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:12.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-fareast-font-family:SimSun;
	mso-bidi-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-link:"Balloon Text Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-fareast-font-family:SimSun;
	mso-ansi-language:EN-US;
	mso-fareast-language:ZH-CN;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:Header;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-fareast-font-family:SimSun;
	mso-hansi-font-family:"Trebuchet MS";
	mso-fareast-language:ZH-CN;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:Footer;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-fareast-font-family:SimSun;
	mso-hansi-font-family:"Trebuchet MS";
	mso-fareast-language:ZH-CN;}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-ascii-font-family:Tahoma;
	mso-fareast-font-family:SimSun;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;
	mso-fareast-language:ZH-CN;}
@page WordSection1
	{size:21.0cm 842.0pt;
	margin:36.0pt 36.0pt 36.0pt 36.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-qformat:yes;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1036"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=IN style='tab-interval:14.2pt'>

<div class=WordSection1>

<p class=MsoNormal><v:shapetype id="_x0000_t75" coordsize="21600,21600" o:spt="75"
 o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="Picture_x0020_2" o:spid="_x0000_s1035" type="#_x0000_t75"
 alt="untitled" style='position:absolute;margin-left:350.25pt;margin-top:-37.5pt;
 width:189pt;height:99pt;z-index:-251658240;visibility:visible'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image001.png" o:title="untitled"/>
</v:shape><span lang=EN-US style='font-size:9.0pt'>PT PERSADA<o:p></o:p></span></p>

<p class=MsoNormal><v:rect id="_x0000_s1031" style='position:absolute;
 margin-left:380.25pt;margin-top:8.3pt;width:105.75pt;height:18pt;z-index:251660288'>
 <v:textbox style='mso-next-textbox:#_x0000_s1031'>
  <![if !mso]>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div>
    <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
    style='font-size:10.0pt'>PSD-F-SM-04 REV.00<o:p></o:p></span></p>
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  <![endif]></v:textbox>
</v:rect><span lang=SV style='font-size:9.0pt;mso-ansi-language:SV'>Jl. Raya
Poltangan No. 35 Tanjung Barat <o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;mso-ansi-language:SV'>Jakarta
Selatan<o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;mso-ansi-language:SV'>Telp.
021-78846139 Fax. 021-78846138<o:p></o:p></span></p>

<p class=MsoNormal><v:line id="Line_x0020_1" o:spid="_x0000_s1029" style='position:absolute;
 z-index:251657216;visibility:visible' from="0,3.2pt" to="486pt,3.2pt"
 o:gfxdata="UEsDBBQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
90jcwfIWJU67QAgl6YK0S0CoHGBkTxKLZGx5TGhvj5O2G0SRWNoz/78nu9wcxkFMGNg6quQqL6RA
0s5Y6ir5vt9lD1JwBDIwOMJKHpHlpr69KfdHjyxSmriSfYz+USnWPY7AufNIadK6MEJMx9ApD/oD
OlTrorhX2lFEilmcO2RdNtjC5xDF9pCuTyYBB5bi6bQ4syoJ3g9WQ0ymaiLzg5KdCXlKLjvcW893
SUOqXwnz5DrgnHtJTxOsQfEKIT7DmDSUCaxw7Rqn8787ZsmRM9e2VmPeBN4uqYvTtW7jvijg9N/y
JsXecLq0q+WD6m8AAAD//wMAUEsDBBQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAX3JlbHMvLnJl
bHOkkMFqwzAMhu+DvYPRfXGawxijTi+j0GvpHsDYimMaW0Yy2fr2M4PBMnrbUb/Q94l/f/hMi1qR
JVI2sOt6UJgd+ZiDgffL8ekFlFSbvV0oo4EbChzGx4f9GRdb25HMsYhqlCwG5lrLq9biZkxWOiqY
22YiTra2kYMu1l1tQD30/bPm3wwYN0x18gb45AdQl1tp5j/sFB2T0FQ7R0nTNEV3j6o9feQzro1i
OWA14Fm+Q8a1a8+Bvu/d/dMb2JY5uiPbhG/ktn4cqGU/er3pcvwCAAD//wMAUEsDBBQABgAIAAAA
IQCJ4cWJEwIAACgEAAAOAAAAZHJzL2Uyb0RvYy54bWysU8uO2jAU3VfqP1jeQxImMBARRlUC3dAO
0sx8gLEdYtWxLdsQUNV/77V5tHQ2VdUsHD/OPT73nuv507GT6MCtE1qVOBumGHFFNRNqV+K319Vg
ipHzRDEiteIlPnGHnxYfP8x7U/CRbrVk3CIgUa7oTYlb702RJI62vCNuqA1XcNho2xEPS7tLmCU9
sHcyGaXpJOm1ZcZqyp2D3fp8iBeRv2k49c9N47hHssSgzcfRxnEbxmQxJ8XOEtMKepFB/kFFR4SC
S29UNfEE7a14R9UJarXTjR9S3SW6aQTlMQfIJkv/yOalJYbHXKA4ztzK5P4fLf162FgkWIkfMFKk
A4vWQnGUhcr0xhUAqNTGhtzoUb2YtabfHFK6aona8ajw9WQgLEYkdyFh4Qzwb/svmgGG7L2OZTo2
tguUUAB0jG6cbm7wo0cUNifZ4wgsxohezxJSXAONdf4z1x0KkxJL0ByJyWHtPEgH6BUS7lF6JaSM
ZkuF+hLPxqNxDHBaChYOA8zZ3baSFh1IaJf4hToA2R3M6r1ikazlhC0vc0+EPM8BL1Xgg1RAzmV2
7ofvs3S2nC6n+SAfTZaDPK3rwadVlQ8mq+xxXD/UVVVnP4K0LC9awRhXQd21N7P877y/vJJzV926
81aG5J49pghir/8oOnoZ7Ds3wlaz08aGagRboR0j+PJ0Qr//vo6oXw988RMAAP//AwBQSwMEFAAG
AAgAAAAhAOPK3RLZAAAABAEAAA8AAABkcnMvZG93bnJldi54bWxMj8tOwzAQRfdI/IM1SGwq6hBQ
gRCnQkB2bPpAbKfxkETE4zR225SvZ8oGlkd3dO+ZfD66Tu1pCK1nA9fTBBRx5W3LtYH1qry6BxUi
ssXOMxk4UoB5cX6WY2b9gRe0X8ZaSQmHDA00MfaZ1qFqyGGY+p5Ysk8/OIyCQ63tgAcpd51Ok2Sm
HbYsCw329NxQ9bXcOQOhfKdt+T2pJsnHTe0p3b68vaIxlxfj0yOoSGP8O4aTvqhDIU4bv2MbVGdA
HokGZregJHy4S4U3v6yLXP+XL34AAAD//wMAUEsBAi0AFAAGAAgAAAAhALaDOJL+AAAA4QEAABMA
AAAAAAAAAAAAAAAAAAAAAFtDb250ZW50X1R5cGVzXS54bWxQSwECLQAUAAYACAAAACEAOP0h/9YA
AACUAQAACwAAAAAAAAAAAAAAAAAvAQAAX3JlbHMvLnJlbHNQSwECLQAUAAYACAAAACEAieHFiRMC
AAAoBAAADgAAAAAAAAAAAAAAAAAuAgAAZHJzL2Uyb0RvYy54bWxQSwECLQAUAAYACAAAACEA48rd
EtkAAAAEAQAADwAAAAAAAAAAAAAAAABtBAAAZHJzL2Rvd25yZXYueG1sUEsFBgAAAAAEAAQA8wAA
AHMFAAAAAA==
"/><span lang=SV style='font-size:10.0pt;mso-bidi-font-family:Tahoma;
mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=SV
style='mso-ansi-language:SV'>PSIKOGRAM<span
style='mso-spacerun:yes'>                                                  
</span><o:p></o:p></span></b></p>

<p class=MsoNormal align=right style='text-align:right'><b><span lang=SV
style='mso-ansi-language:SV'><span style='mso-tab-count:9'>                                  </span></span></b><b><u><span
lang=SV style='font-size:10.0pt;mso-ansi-language:SV'>Rahasia</span></u></b><b><u><span
lang=SV style='font-size:10.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><o:p></o:p></span></u></b></p>

<p class=MsoNormal><span lang=SV style='font-size:10.0pt;mso-ansi-language:
SV'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=708
 style='width:531.0pt;margin-left:4.25pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span lang=SV style='font-size:10.0pt;mso-ansi-language:
  SV'>Nama<span style='mso-spacerun:yes'>  </span><span style='mso-tab-count:
  4'>                  </span>: <?php $nama=strtolower($row['nama_lengkap']); echo ucwords($nama); if($row['gender'] == "pria") { echo " ( L )"; } else { echo " ( P )"; } ?></span><b><u><span
  lang=SV style='font-size:10.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:
  SV'><o:p></o:p></span></u></b></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span lang=SV style='font-size:10.0pt;mso-ansi-language:
  SV'>Pendidikan<span style='mso-tab-count:1'>    </span>: <?php echo $row['level_pend']." - ".$row['jurusan']; ?></span><b><u><span
  lang=SV style='font-size:10.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:
  SV'><o:p></o:p></span></u></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;mso-ansi-language:
  FI'>Tanggal Psikotes<span style='mso-tab-count:1'>     </span>: <?php echo TanggalIndo($date); ?></span><b><u><span
  lang=SV style='font-size:10.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:
  SV'><o:p></o:p></span></u></b></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;mso-ansi-language:
  FI'>Untuk Posisi<span style='mso-tab-count:1'>  </span>: <?php echo $row['posisi']; ?></span><b><u><span
  lang=SV style='font-size:10.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:
  SV'><o:p></o:p></span></u></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=SV style='font-size:10.0pt;mso-ansi-language:
SV'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=704
 style='width:528.15pt;margin-left:4.25pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.0pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:double windowtext 2.25pt;
  border-left:double windowtext 2.25pt;border-bottom:solid windowtext 1.0pt;
  border-right:double black 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double black 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><i><span
  lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>A S P E K<span
  style='mso-spacerun:yes'>   </span>P S I K O L O G I S<o:p></o:p></span></i></b></p>
  </td>
  <td width=187 nowrap colspan=7 style='width:140.0pt;border-top:double windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double black 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>S K A L A<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:13.5pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:none;
  border-left:double windowtext 2.25pt;border-bottom:double windowtext 2.25pt;
  border-right:double black 2.25pt;background:silver;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'><span
  style='mso-spacerun:yes'>  </span>K E C E R D A S A N<o:p></o:p></span></b></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>7<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Intelegensi
  Umum<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($hasile == 5) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($hasile == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Taraf
  intelegensi yang dimiliki pelamar<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Daya
  Tangkap <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($hasile == 5) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($hasile == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($hasile == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.75pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:double windowtext 2.25pt;border-right:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kemampuan
  menangkap informasi yang diperlukan<span style='mso-spacerun:yes'> 
  </span>yang disampaikan oleh orang lain serta mengolah informasi verbal<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 style='width:140.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:13.5pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:none;
  border-left:double windowtext 2.25pt;border-bottom:double windowtext 2.25pt;
  border-right:double black 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><b><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'><span
  style='mso-spacerun:yes'>  </span>S I K A P<span style='mso-spacerun:yes'>  
  </span>K E R J A <o:p></o:p></span></b></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>7<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Sistematika
  Kerja <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['sis_kerja'] == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['sis_kerja'] == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['sis_kerja'] == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['sis_kerja'] == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['sis_kerja'] == 5) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['sis_kerja'] == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['sis_kerja'] == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:SV;mso-fareast-language:
  EN-US'>Menunjukkan cara bekerja yang metodis dan sistematis<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Motivasi
  Berprestasi <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['motiv_prestasi'] == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['motiv_prestasi'] == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['motiv_prestasi'] == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['motiv_prestasi'] == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['motiv_prestasi'] == 5) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['motiv_prestasi'] == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['motiv_prestasi'] == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:10.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=MsoNormal><i><span lang=FI style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:FI;mso-fareast-language:
  EN-US'>Dorongan, kemauan dan kesanggupan<span style='mso-spacerun:yes'> 
  </span>untuk melaksanakan tugas secara optimal<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Nurturance<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['nurturance'] == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['nurturance'] == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['nurturance'] == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['nurturance'] == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['nurturance'] == 5) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['nurturance'] == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['nurturance'] == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:SV;mso-fareast-language:
  EN-US'>Kecenderungan untuk melayani atau memberikan bantuan kepada orang lain<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;mso-border-left-alt:
  double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-right:
  double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:solid windowtext 1.0pt;
  border-left:double windowtext 2.25pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Mobilitas
  <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:double windowtext 2.25pt;mso-border-alt:
  solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['mobilitas'] == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['mobilitas'] == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['mobilitas'] == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['mobilitas'] == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['mobilitas'] == 5) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['mobilitas'] == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['mobilitas'] == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kesanggupan
  untuk bekerja secara mobile, outdoors, moving area<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kepercayaan
  diri <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kepercayaan'] == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kepercayaan'] == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kepercayaan'] == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kepercayaan'] == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US<?php if($row['kepercayaan'] == 5) { echo "X"; } ?>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kepercayaan'] == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['kepercayaan'] == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:SV;mso-fareast-language:
  EN-US'>Kesanggupan untuk tampil di muka umum dengan percaya diri, bersikap
  terbuka dan representatif<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:solid windowtext 1.0pt;
  border-left:double windowtext 2.25pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Ketelitian
  dan detail <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['ketelitian'] == 1) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['ketelitian'] == 2) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['ketelitian'] == 3) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['ketelitian'] == 4) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['ketelitian'] == 5) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['ketelitian'] == 6) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['ketelitian'] == 7) { echo "X"; }?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal><i><span lang=FI style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:FI;mso-fareast-language:
  EN-US'>Menunjukkan ketelitian kerja, kesanggupan mengerjakan tugas-tugas yang
  membutuhkan ketelitian<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>7<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Tempo
  kerja<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'>X<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:SV;mso-fareast-language:
  EN-US'>Ritme kerja yang konsisten dari waktu ke waktu <o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>8<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span lang=SV style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:SV;mso-fareast-language:
  EN-US'>Kesanggupan bekerja dalam situasi menekan / <i style='mso-bidi-font-style:
  normal'>stress<o:p></o:p></i></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>X<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'>X<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:22.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:double windowtext 2.25pt;border-right:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:22.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-ansi-language:SV;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:double windowtext 2.25pt;border-right:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:SV;mso-fareast-language:
  EN-US'>Motivasi atau kesediaan bekerja dalam situasi yang menekan. Kemampuan
  memanfaatkan sumberdaya/energi yang dimiliki untuk bekerja dalam situasi
  menekan. <o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 style='width:140.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-ansi-language:SV;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:13.5pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:none;
  border-left:double windowtext 2.25pt;border-bottom:double windowtext 2.25pt;
  border-right:double black 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><b><span lang=SV style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-ansi-language:SV;mso-fareast-language:
  EN-US'><span style='mso-spacerun:yes'>  </span></span></b><b><span
  lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>K E P R I B A D I A N<o:p></o:p></span></b></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>7<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=498 nowrap style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Stabilitas
  Emosi <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['emosi'] == 1) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['emosi'] == 2) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['emosi'] == 3) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['emosi'] == 4) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['emosi'] == 5) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['emosi'] == 6) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['emosi'] == 7) { echo "X"; }?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:19.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.5pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Menunjukkan
  kematangan pribadi, mampu mengendalkan emosi, tidak mudah marah serta mampu
  untuk menyesuaikan (emosinya) dengan situasi<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Komitmen
  pada tugas <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['komit'] == 1) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['komit'] == 2) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['komit'] == 3) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['komit'] == 4) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['komit'] == 5) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['komit'] == 6) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['komit'] == 7) { echo "X"; }?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kesediaan
  untuk mengerjakan tugas hingga tuntas dengan hasil yang dapat dipertanggung
  jawabkan<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border:
  none;border-right:double black 2.25pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:solid windowtext 1.0pt;
  border-left:double windowtext 2.25pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kerjasama
  <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:double windowtext 2.25pt;mso-border-alt:
  solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kerjasama'] == 1) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kerjasama'] == 2) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kerjasama'] == 3) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kerjasama'] == 4) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['kerjasama'] == 5) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['kerjasama'] == 6) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['kerjasama'] == 7) { echo "X"; }?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;height:19.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.5pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kemauan
  dan kesanggupan untuk bekerjasama dan bertindak kooperatif dengan rekan dalam
  kelompok ataupun dengan lingkungan<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:30;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Hubungan
  Interpersonal <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['interpersonal'] == 1) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['interpersonal'] == 2) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['interpersonal'] == 3) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['interpersonal'] == 4) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['interpersonal'] == 5) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['interpersonal'] == 6) { echo "X"; }?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['interpersonal'] == 7) { echo "X"; }?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:31;height:15.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kesanggupan
  untuk menghadapi bermacam-macam orang secara efektif dalam berbagai situasi<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:32;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;background:silver;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Agresifitas
  Verbal <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['agresifitas'] == 1) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['agresifitas'] == 2) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['agresifitas'] == 3) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['agresifitas'] == 4) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-fareast-language:EN-US'><?php if($row['agresifitas'] == 5) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'><?php if($row['agresifitas'] == 6) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:10.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><?php if($row['agresifitas'] == 7) { echo "X"; } ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:33;mso-yfti-lastrow:yes;height:21.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:double windowtext 2.25pt;border-right:none;background:silver;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
  Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:double windowtext 2.25pt;border-right:double black 2.25pt;
  background:silver;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt'>
  <p class=MsoNormal><i><span lang=EN-US style='font-size:8.0pt;mso-fareast-font-family:
  "Trebuchet MS";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Potensial
  atau kecenderungan perilaku akan bersikap agresif secara verbal yang akan
  muncul pada kondisi tertentu atau potensi melakukan persuasi negatif terhadap
  rekan atau lingkungan kerjanya<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 style='width:140.0pt;border-top:none;
  border-left:none;border-bottom:double windowtext 2.25pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:8.0pt;mso-fareast-font-family:"Trebuchet MS";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='tab-stops:3.0cm 297.7pt 361.5pt'><span lang=EN-US
style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:6.0pt;mso-fareast-font-family:"Trebuchet MS";mso-bidi-font-family:
Arial;mso-ansi-language:IN;mso-fareast-language:IN'>(1 = Jauh dibawah
rata-rata; 2 = Dibawah rata-rata; 3 = Rata-rata batas bawah; 4 = Rata-rata; 5 =
Rata-rata batas atas; 6 = Diatas rata-rata; 7 = Jauh diatas rata-rata)<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:3.0cm 326.05pt 389.85pt'><span lang=EN-US
style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:3.0cm 326.05pt 389.85pt'><v:shape id="Picture_x0020_4"
 o:spid="_x0000_s1034" type="#_x0000_t75" style='position:absolute;
 margin-left:396.75pt;margin-top:8.55pt;width:87pt;height:67.5pt;z-index:-251657216;
 visibility:visible'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image002.png" o:title=""/>
</v:shape><span lang=EN-US style='font-size:8.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:3.0cm 326.05pt 389.85pt'><span lang=EN-US
style='font-size:8.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:184.3pt 8.0cm 382.75pt 14.0cm'><span
lang=SV style='font-size:8.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><span style='mso-spacerun:yes'>  </span>REKOMENDASI :<span
style='mso-tab-count:1'>                                                       </span><span
style='mso-spacerun:yes'>      </span><span style='mso-spacerun:yes'> </span>Penanggungjawab<span
style='mso-tab-count:2'>                                                        </span><span
style='mso-spacerun:yes'>      </span><span style='mso-tab-count:3'>              </span><span
style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:14.2pt'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;mso-bidi-font-family:Tahoma'><span
style='mso-spacerun:yes'>  </span></span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;font-family:Wingdings;
mso-ascii-font-family:"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";
mso-bidi-font-family:Tahoma;mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>¨</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'>  </span></span></b><span lang=SV style='font-size:
8.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:SV'>Disarankan<span
style='mso-spacerun:yes'>                 </span><span
style='mso-spacerun:yes'>                                                                                                                       </span><o:p></o:p></span></p>

<p class=MsoNormal><v:shape id="Picture_x0020_5" o:spid="_x0000_s1033" type="#_x0000_t75"
 style='position:absolute;margin-left:430.05pt;margin-top:687.2pt;width:88.85pt;
 height:50.25pt;z-index:-251660288;visibility:visible'>
 <v:textbox style='mso-rotate-with-shape:t'/>
</v:shape><v:shape id="Picture_x0020_3" o:spid="_x0000_s1032" type="#_x0000_t75"
 style='position:absolute;margin-left:430.05pt;margin-top:687.2pt;width:88.85pt;
 height:50.25pt;z-index:-251661312;visibility:visible'>
 <v:textbox style='mso-rotate-with-shape:t'/>
</v:shape><b style='mso-bidi-font-weight:normal'><span lang=EN-US
style='font-size:8.0pt;mso-bidi-font-family:Tahoma'><span
style='mso-spacerun:yes'>  </span></span></b><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='font-size:8.0pt;font-family:Wingdings;
mso-ascii-font-family:"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";
mso-bidi-font-family:Tahoma;mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>o</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'>  </span></span></b><span lang=SV style='font-size:
8.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:SV'>Dipertimbangkan<span
style='mso-tab-count:11'>                                                                </span>ttd<span
style='mso-tab-count:13'>                                                                             </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
mso-bidi-font-family:Tahoma'><span style='mso-spacerun:yes'>  </span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:8.0pt;
font-family:Wingdings;mso-ascii-font-family:"Trebuchet MS";mso-hansi-font-family:
"Trebuchet MS";mso-bidi-font-family:Tahoma;mso-char-type:symbol;mso-symbol-font-family:
Wingdings'><span style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>þ</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'>  </span></span></b><span lang=SV style='font-size:
8.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:SV'>Tidak disarankan<span
style='mso-spacerun:yes'>                                          </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:6.0cm;text-indent:14.2pt'><span lang=SV
style='font-size:8.0pt;mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-tab-count:10'>                                                                </span></span><span
lang=SV style='font-size:8.0pt;mso-ansi-language:SV'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:1'>                                                                                  </span><span
style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'>  </span>(TRIMULYONO
HERNADI)<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'>                                                                     
</span>SIPP : 0288/SIPP/HIMPSI-JB/11/04</span><span style='font-size:8.0pt;
mso-bidi-font-family:Tahoma;mso-ansi-language:IN'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span style='font-size:8.0pt;mso-bidi-font-family:Tahoma;
mso-ansi-language:IN'><span
style='mso-spacerun:yes'>                                                                                                                                 
</span><span style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span style='font-size:8.0pt;mso-bidi-font-family:Tahoma;
mso-ansi-language:IN'><span
style='mso-spacerun:yes'>                                                                                                                           
</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
