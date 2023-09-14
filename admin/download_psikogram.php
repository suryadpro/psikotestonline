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
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="form_files/filelist.xml">
<link rel=Edit-Time-Data href="form_files/editdata.mso">
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
  <o:LastAuthor>Persada</o:LastAuthor>
  <o:Revision>4</o:Revision>
  <o:TotalTime>3</o:TotalTime>
  <o:LastPrinted>2011-10-17T07:51:00Z</o:LastPrinted>
  <o:Created>2014-07-12T07:51:00Z</o:Created>
  <o:LastSaved>2014-07-12T07:53:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>411</o:Words>
  <o:Characters>2346</o:Characters>
  <o:Company>no org</o:Company>
  <o:Lines>19</o:Lines>
  <o:Paragraphs>5</o:Paragraphs>
  <o:CharactersWithSpaces>2752</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=dataStoreItem href="form_files/item0010.xml"
target="form_files/props011.xml">
<link rel=themeData href="form_files/themedata.thmx">
<link rel=colorSchemeMapping href="form_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Print</w:View>
  <w:HideSpellingErrors/>
  <w:HideGrammaticalErrors/>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
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
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
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
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" LatentStyleCount="371">
  <w:LsdException Locked="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   UnhideWhenUsed="true" Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true"
   Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="99" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
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
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1107305727 0 0 415 0;}
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
	{font-family:"Palatino Linotype";
	panose-1:2 4 5 2 5 5 5 3 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870265 1073741843 0 0 415 0;}
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
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-unhide:no;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.0in right 6.0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-unhide:no;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.0in right 6.0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-unhide:no;
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;}
 /* Page Definitions */
 @page
	{}
@page WordSection1
	{size:595.35pt 842.0pt;
	margin:.5in .5in .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:16977660;
	mso-list-type:hybrid;
	mso-list-template-ids:662444764 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1
	{mso-list-id:38020165;
	mso-list-type:hybrid;
	mso-list-template-ids:1272065336 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2
	{mso-list-id:65882497;
	mso-list-type:hybrid;
	mso-list-template-ids:643325894 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3
	{mso-list-id:70935200;
	mso-list-type:hybrid;
	mso-list-template-ids:-1595524866 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4
	{mso-list-id:96414352;
	mso-list-type:hybrid;
	mso-list-template-ids:459015876 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l4:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l4:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l4:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l4:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l4:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5
	{mso-list-id:146439381;
	mso-list-type:hybrid;
	mso-list-template-ids:-1752794488 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6
	{mso-list-id:198324856;
	mso-list-type:hybrid;
	mso-list-template-ids:-1013443982 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l6:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l6:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l6:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l6:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7
	{mso-list-id:208340602;
	mso-list-type:hybrid;
	mso-list-template-ids:871894514 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l7:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l7:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l7:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l7:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l7:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l7:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l8
	{mso-list-id:215971111;
	mso-list-type:hybrid;
	mso-list-template-ids:1490222660 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l8:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l8:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l8:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l8:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l8:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l8:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l8:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l8:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l8:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l9
	{mso-list-id:265580411;
	mso-list-type:hybrid;
	mso-list-template-ids:690896860 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l9:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l9:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l9:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l9:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l9:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l9:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l9:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l9:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l9:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l10
	{mso-list-id:268707817;
	mso-list-type:hybrid;
	mso-list-template-ids:-1770378204 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l10:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l10:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l10:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l10:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l10:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l10:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l10:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l10:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l10:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l11
	{mso-list-id:272591355;
	mso-list-type:hybrid;
	mso-list-template-ids:1077181578 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l11:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l11:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l11:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l11:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l11:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l11:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l11:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l11:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l11:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l12
	{mso-list-id:278150512;
	mso-list-type:hybrid;
	mso-list-template-ids:1884834808 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l12:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l12:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l12:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l12:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l12:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l12:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l12:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l12:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l12:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l13
	{mso-list-id:289477316;
	mso-list-type:hybrid;
	mso-list-template-ids:736906236 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l13:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l13:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l13:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l13:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l13:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l13:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l13:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l13:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l13:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l14
	{mso-list-id:309746305;
	mso-list-type:hybrid;
	mso-list-template-ids:2053519684 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l14:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l14:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l14:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l14:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l14:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l14:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l14:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l14:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l14:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l15
	{mso-list-id:340551234;
	mso-list-type:hybrid;
	mso-list-template-ids:-2059376718 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l15:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l15:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l15:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l15:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l15:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l15:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l15:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l15:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l15:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l16
	{mso-list-id:349797812;
	mso-list-type:hybrid;
	mso-list-template-ids:1194118712 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l16:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l16:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l16:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l16:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l16:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l16:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l16:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l16:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l16:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l17
	{mso-list-id:397019911;
	mso-list-type:hybrid;
	mso-list-template-ids:-1640619672 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l17:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l17:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l17:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l17:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l17:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l17:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l17:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l17:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l17:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l18
	{mso-list-id:405107281;
	mso-list-type:hybrid;
	mso-list-template-ids:-966107058 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l18:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l18:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l18:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l18:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l18:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l18:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l18:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l18:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l18:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l19
	{mso-list-id:420221533;
	mso-list-type:hybrid;
	mso-list-template-ids:-1942199942 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l19:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l19:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l19:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l19:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l19:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l19:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l19:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l19:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l19:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l20
	{mso-list-id:439105254;
	mso-list-type:hybrid;
	mso-list-template-ids:-1230447036 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l20:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l20:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l20:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l20:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l20:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l20:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l20:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l20:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l20:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l21
	{mso-list-id:442576603;
	mso-list-type:hybrid;
	mso-list-template-ids:-1562621700 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l21:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l21:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l21:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l21:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l21:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l21:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l21:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l21:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l21:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l22
	{mso-list-id:445544006;
	mso-list-type:hybrid;
	mso-list-template-ids:1855615482 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l22:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l22:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l22:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l22:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l22:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l22:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l22:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l22:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l22:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l23
	{mso-list-id:449469087;
	mso-list-type:hybrid;
	mso-list-template-ids:-1610861604 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l23:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l23:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l23:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l23:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l23:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l23:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l23:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l23:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l23:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l24
	{mso-list-id:453713548;
	mso-list-type:hybrid;
	mso-list-template-ids:517661028 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l24:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l24:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l24:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l24:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l24:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l24:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l24:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l24:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l24:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l25
	{mso-list-id:465127334;
	mso-list-type:hybrid;
	mso-list-template-ids:-463179444 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l25:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l25:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l25:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l25:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l25:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l25:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l25:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l25:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l25:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l26
	{mso-list-id:476580671;
	mso-list-type:hybrid;
	mso-list-template-ids:548729698 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l26:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l26:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l26:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l26:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l26:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l26:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l26:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l26:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l26:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l27
	{mso-list-id:491917691;
	mso-list-type:hybrid;
	mso-list-template-ids:-1675167222 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l27:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l27:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l27:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l27:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l27:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l27:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l27:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l27:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l27:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l28
	{mso-list-id:593977628;
	mso-list-type:hybrid;
	mso-list-template-ids:2075946890 -935582176 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l28:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.75in;
	text-indent:-.25in;
	font-family:Wingdings;
	mso-fareast-font-family:SimSun;
	mso-bidi-font-family:Tahoma;
	mso-ansi-font-weight:bold;}
@list l28:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.25in;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l28:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l28:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l28:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.75in;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l28:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l28:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;
	font-family:Symbol;}
@list l28:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:4.25in;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l28:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:4.75in;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l29
	{mso-list-id:602541115;
	mso-list-type:hybrid;
	mso-list-template-ids:-778537618 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l29:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l29:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l29:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l29:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l29:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l29:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l29:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l29:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l29:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l30
	{mso-list-id:671764397;
	mso-list-type:hybrid;
	mso-list-template-ids:-1228126466 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l30:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l30:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l30:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l30:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l30:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l30:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l30:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l30:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l30:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l31
	{mso-list-id:806976164;
	mso-list-type:hybrid;
	mso-list-template-ids:1735581468 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l31:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l31:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l31:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l31:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l31:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l31:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l31:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l31:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l31:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l32
	{mso-list-id:810289054;
	mso-list-type:hybrid;
	mso-list-template-ids:-631847960 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l32:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l32:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l32:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l32:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l32:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l32:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l32:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l32:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l32:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l33
	{mso-list-id:829254445;
	mso-list-type:hybrid;
	mso-list-template-ids:-211884614 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l33:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l33:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l33:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l33:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l33:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l33:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l33:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l33:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l33:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l34
	{mso-list-id:872228930;
	mso-list-type:hybrid;
	mso-list-template-ids:1680097528 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l34:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l34:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l34:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l34:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l34:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l34:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l34:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l34:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l34:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l35
	{mso-list-id:909273715;
	mso-list-type:hybrid;
	mso-list-template-ids:179876940 -935582176 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l35:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;
	mso-fareast-font-family:SimSun;
	mso-bidi-font-family:Tahoma;
	mso-ansi-font-weight:bold;}
@list l35:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l35:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l35:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l35:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l35:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l35:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l35:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l35:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l36
	{mso-list-id:912473549;
	mso-list-type:hybrid;
	mso-list-template-ids:1383616638 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l36:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l36:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l36:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l36:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l36:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l36:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l36:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l36:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l36:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l37
	{mso-list-id:922299483;
	mso-list-type:hybrid;
	mso-list-template-ids:-646810266 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l37:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l37:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l37:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l37:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l37:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l37:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l37:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l37:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l37:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l38
	{mso-list-id:953487498;
	mso-list-type:hybrid;
	mso-list-template-ids:1823486112 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l38:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l38:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l38:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l38:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l38:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l38:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l38:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l38:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l38:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l39
	{mso-list-id:986667435;
	mso-list-type:hybrid;
	mso-list-template-ids:1627828394 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l39:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l39:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l39:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l39:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l39:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l39:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l39:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l39:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l39:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l40
	{mso-list-id:994920456;
	mso-list-type:hybrid;
	mso-list-template-ids:1346534616 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l40:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l40:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l40:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l40:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l40:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l40:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l40:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l40:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l40:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l41
	{mso-list-id:1030951524;
	mso-list-type:hybrid;
	mso-list-template-ids:-1829726332 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l41:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l41:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l41:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l41:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l41:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l41:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l41:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l41:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l41:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l42
	{mso-list-id:1046562194;
	mso-list-type:hybrid;
	mso-list-template-ids:1981578106 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l42:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l42:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l42:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l42:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l42:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l42:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l42:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l42:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l42:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l43
	{mso-list-id:1060447159;
	mso-list-type:hybrid;
	mso-list-template-ids:-1237056732 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l43:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l43:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l43:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l43:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l43:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l43:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l43:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l43:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l43:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l44
	{mso-list-id:1185632980;
	mso-list-type:hybrid;
	mso-list-template-ids:-1351466538 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l44:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l44:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l44:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l44:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l44:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l44:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l44:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l44:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l44:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l45
	{mso-list-id:1211188800;
	mso-list-type:hybrid;
	mso-list-template-ids:-1787555542 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l45:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l45:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l45:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l45:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l45:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l45:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l45:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l45:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l45:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l46
	{mso-list-id:1264219574;
	mso-list-type:hybrid;
	mso-list-template-ids:244465314 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l46:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l46:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l46:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l46:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l46:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l46:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l46:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l46:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l46:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l47
	{mso-list-id:1267270396;
	mso-list-type:hybrid;
	mso-list-template-ids:2035316728 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l47:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l47:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l47:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l47:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l47:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l47:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l47:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l47:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l47:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l48
	{mso-list-id:1298149334;
	mso-list-type:hybrid;
	mso-list-template-ids:-538120044 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l48:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l48:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l48:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l48:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l48:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l48:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l48:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l48:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l48:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l49
	{mso-list-id:1298611429;
	mso-list-type:hybrid;
	mso-list-template-ids:-954546684 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l49:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l49:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l49:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l49:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l49:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l49:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l49:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l49:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l49:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l50
	{mso-list-id:1306667082;
	mso-list-type:hybrid;
	mso-list-template-ids:-1231284246 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l50:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l50:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l50:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l50:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l50:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l50:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l50:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l50:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l50:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l51
	{mso-list-id:1321422816;
	mso-list-type:hybrid;
	mso-list-template-ids:528150596 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l51:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l51:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l51:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l51:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l51:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l51:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l51:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l51:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l51:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l52
	{mso-list-id:1345932888;
	mso-list-type:hybrid;
	mso-list-template-ids:-1682265070 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l52:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l52:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l52:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l52:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l52:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l52:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l52:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l52:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l52:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l53
	{mso-list-id:1361004927;
	mso-list-type:hybrid;
	mso-list-template-ids:-1662910386 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l53:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l53:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l53:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l53:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l53:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l53:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l53:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l53:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l53:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l54
	{mso-list-id:1375497539;
	mso-list-type:hybrid;
	mso-list-template-ids:-696907268 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l54:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l54:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l54:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l54:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l54:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l54:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l54:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l54:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l54:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l55
	{mso-list-id:1400595791;
	mso-list-type:hybrid;
	mso-list-template-ids:-1277395300 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l55:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l55:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l55:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l55:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l55:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l55:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l55:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l55:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l55:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l56
	{mso-list-id:1418133984;
	mso-list-type:hybrid;
	mso-list-template-ids:1217711730 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l56:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l56:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l56:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l56:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l56:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l56:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l56:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l56:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l56:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l57
	{mso-list-id:1461994029;
	mso-list-type:hybrid;
	mso-list-template-ids:-345469868 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l57:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l57:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l57:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l57:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l57:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l57:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l57:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l57:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l57:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l58
	{mso-list-id:1470125173;
	mso-list-type:hybrid;
	mso-list-template-ids:-1502339552 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l58:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l58:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l58:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l58:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l58:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l58:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l58:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l58:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l58:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l59
	{mso-list-id:1484738139;
	mso-list-type:hybrid;
	mso-list-template-ids:-1314081530 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l59:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l59:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l59:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l59:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l59:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l59:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l59:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l59:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l59:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l60
	{mso-list-id:1485394261;
	mso-list-type:hybrid;
	mso-list-template-ids:-304985170 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l60:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l60:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l60:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l60:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l60:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l60:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l60:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l60:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l60:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l61
	{mso-list-id:1494565070;
	mso-list-type:hybrid;
	mso-list-template-ids:-1498638918 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l61:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l61:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l61:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l61:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l61:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l61:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l61:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l61:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l61:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l62
	{mso-list-id:1500195626;
	mso-list-type:hybrid;
	mso-list-template-ids:1546040798 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l62:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l62:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l62:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l62:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l62:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l62:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l62:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l62:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l62:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l63
	{mso-list-id:1527056031;
	mso-list-type:hybrid;
	mso-list-template-ids:1545257938 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l63:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l63:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l63:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l63:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l63:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l63:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l63:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l63:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l63:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l64
	{mso-list-id:1564758637;
	mso-list-type:hybrid;
	mso-list-template-ids:-1451066880 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l64:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l64:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l64:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l64:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l64:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l64:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l64:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l64:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l64:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l65
	{mso-list-id:1568952453;
	mso-list-type:hybrid;
	mso-list-template-ids:-2073015144 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l65:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l65:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l65:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l65:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l65:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l65:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l65:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l65:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l65:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l66
	{mso-list-id:1572620759;
	mso-list-type:hybrid;
	mso-list-template-ids:368577264 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l66:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l66:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l66:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l66:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l66:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l66:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l66:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l66:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l66:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l67
	{mso-list-id:1609198717;
	mso-list-type:hybrid;
	mso-list-template-ids:1891544608 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l67:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l67:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l67:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l67:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l67:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l67:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l67:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l67:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l67:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l68
	{mso-list-id:1660962342;
	mso-list-type:hybrid;
	mso-list-template-ids:-1103327046 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l68:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l68:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l68:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l68:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l68:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l68:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l68:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l68:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l68:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l69
	{mso-list-id:1675498948;
	mso-list-type:hybrid;
	mso-list-template-ids:1316142760 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l69:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l69:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l69:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l69:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l69:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l69:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l69:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l69:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l69:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l70
	{mso-list-id:1719360657;
	mso-list-type:hybrid;
	mso-list-template-ids:-541196128 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l70:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l70:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l70:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l70:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l70:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l70:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l70:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l70:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l70:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l71
	{mso-list-id:1749306613;
	mso-list-type:hybrid;
	mso-list-template-ids:1353239202 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l71:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l71:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l71:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l71:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l71:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l71:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l71:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l71:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l71:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l72
	{mso-list-id:1767072811;
	mso-list-type:hybrid;
	mso-list-template-ids:52436944 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l72:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l72:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l72:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l72:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l72:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l72:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l72:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l72:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l72:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l73
	{mso-list-id:1781876345;
	mso-list-type:hybrid;
	mso-list-template-ids:-1539507940 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l73:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l73:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l73:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l73:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l73:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l73:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l73:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l73:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l73:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l74
	{mso-list-id:1809130760;
	mso-list-type:hybrid;
	mso-list-template-ids:-1490541310 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l74:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l74:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l74:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l74:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l74:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l74:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l74:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l74:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l74:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l75
	{mso-list-id:1823540000;
	mso-list-type:hybrid;
	mso-list-template-ids:1128063210 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l75:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l75:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l75:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l75:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l75:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l75:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l75:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l75:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l75:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l76
	{mso-list-id:1935212791;
	mso-list-type:hybrid;
	mso-list-template-ids:1927846306 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l76:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l76:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l76:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l76:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l76:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l76:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l76:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l76:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l76:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l77
	{mso-list-id:1940528033;
	mso-list-type:hybrid;
	mso-list-template-ids:821176164 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l77:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l77:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l77:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l77:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l77:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l77:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l77:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l77:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l77:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l78
	{mso-list-id:1969625337;
	mso-list-type:hybrid;
	mso-list-template-ids:-1265436438 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l78:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l78:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l78:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l78:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l78:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l78:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l78:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l78:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l78:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l79
	{mso-list-id:1973097685;
	mso-list-type:hybrid;
	mso-list-template-ids:-625448432 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l79:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l79:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l79:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l79:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l79:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l79:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l79:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l79:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l79:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l80
	{mso-list-id:1996908108;
	mso-list-type:hybrid;
	mso-list-template-ids:-1764738672 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l80:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l80:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l80:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l80:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l80:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l80:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l80:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l80:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l80:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l81
	{mso-list-id:2006590779;
	mso-list-type:hybrid;
	mso-list-template-ids:326412162 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l81:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l81:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l81:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l81:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l81:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l81:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l81:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l81:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l81:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l82
	{mso-list-id:2019458168;
	mso-list-type:hybrid;
	mso-list-template-ids:-1371907170 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l82:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l82:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l82:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l82:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l82:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l82:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l82:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l82:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l82:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l83
	{mso-list-id:2043552607;
	mso-list-type:hybrid;
	mso-list-template-ids:1435109390 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l83:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l83:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l83:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l83:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l83:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l83:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l83:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l83:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l83:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l84
	{mso-list-id:2088502250;
	mso-list-type:hybrid;
	mso-list-template-ids:-1155991768 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l84:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l84:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l84:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l84:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l84:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l84:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l84:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l84:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l84:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l85
	{mso-list-id:2098819335;
	mso-list-type:hybrid;
	mso-list-template-ids:-787726180 -1142794766 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l85:level1
	{mso-level-number-format:bullet;
	mso-level-text:þ;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l85:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l85:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l85:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l85:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l85:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l85:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l85:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l85:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
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
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2049"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:14.2pt'>

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
</v:shapetype><v:shape id="Picture_x0020_2" o:spid="_x0000_s1030" type="#_x0000_t75"
 alt="untitled" style='position:absolute;margin-left:355.05pt;margin-top:-22pt;
 width:189pt;height:99pt;z-index:-251652096;visibility:visible;
 mso-wrap-style:square;mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
 mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
 mso-position-horizontal:absolute;mso-position-horizontal-relative:text;
 mso-position-vertical:absolute;mso-position-vertical-relative:text'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image001.png" o:title="untitled"/>
</v:shape><span style='font-size:9.0pt;font-family:"Trebuchet MS","sans-serif"'>PT. PERSADA<o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;font-family:"Trebuchet MS","sans-serif";
mso-ansi-language:SV'>Jl. Raya Poltangan No. 35 Tanjung Barat <o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;font-family:"Trebuchet MS","sans-serif";
mso-ansi-language:SV'>Jakarta Selatan<o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;font-family:"Trebuchet MS","sans-serif";
mso-ansi-language:SV'>Telp. 021-78846139 Fax. 021-78846138<o:p></o:p></span></p>

<p class=MsoNormal><v:line id="Line_x0020_1" o:spid="_x0000_s1029" style='position:absolute;
 z-index:251663360;visibility:visible;mso-wrap-style:square;
 mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
 mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text;mso-width-percent:0;mso-height-percent:0;
 mso-width-relative:page;mso-height-relative:page' from="0,3.2pt" to="486pt,3.2pt"
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
"/><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=SV
style='font-family:"Trebuchet MS","sans-serif";mso-ansi-language:SV'>PSIKOGRAM<span
style='mso-spacerun:yes'>                                                  
</span><o:p></o:p></span></b></p>

<p class=MsoNormal align=right style='text-align:right'><b><span lang=SV
style='font-family:"Trebuchet MS","sans-serif";mso-ansi-language:SV'><span
style='mso-tab-count:9'>                                  </span></span></b><b><u><span
lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";
mso-ansi-language:SV'>Rahasia</span></u></b><b><u><span lang=SV
style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'><o:p></o:p></span></u></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=708
 style='width:531.0pt;margin-left:4.25pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-ansi-language:SV'>Nama<span style='mso-spacerun:yes'>  </span><span
  style='mso-tab-count:4'>                  </span>: <?php $nama=strtolower($row['nama_lengkap']); echo ucwords($nama); if($row['gender'] == "pria") { echo " ( L )"; } else { echo " ( P )"; } ?></span><b><u><span lang=SV
  style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:
  Tahoma;mso-ansi-language:SV'><o:p></o:p></span></u></b></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-ansi-language:SV'>Pendidikan<span style='mso-tab-count:1'>  </span>:
  <?php echo $row['level_pend']." - ".$row['jurusan']; ?></span><b><u><span lang=SV style='font-size:10.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma;
  mso-ansi-language:SV'><o:p></o:p></span></u></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-ansi-language:FI'>Tanggal Psikotes<span style='mso-tab-count:1'>  </span>:
  <?php echo TanggalIndo($date); ?></span><b><u><span lang=SV style='font-size:10.0pt;font-family:
  "Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma;mso-ansi-language:
  SV'><o:p></o:p></span></u></b></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-ansi-language:FI'>Untuk Posisi<span style='mso-tab-count:1'>  </span>:
  <?php echo $row['posisi']; ?></span><b><u><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p></o:p></span></u></b></p>
  </td>
 </tr>
</table>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=704
 style='width:528.15pt;margin-left:4.25pt;border-collapse:collapse;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.0pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:double windowtext 2.25pt;
  border-left:double windowtext 2.25pt;border-bottom:solid windowtext 1.0pt;
  border-right:double black 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>A S
  P E K<span style='mso-spacerun:yes'>   </span>P S I K O L O G I S<o:p></o:p></span></i></b></p>
  </td>
  <td width=187 nowrap colspan=7 style='width:140.0pt;border-top:double windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double black 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>S K
  A L A<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:13.5pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:none;
  border-left:double windowtext 2.25pt;border-bottom:double windowtext 2.25pt;
  border-right:double black 2.25pt;background:silver;padding:0in 5.4pt 0in 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-fareast-language:EN-US'><span style='mso-spacerun:yes'>  </span>K E C E R
  D A S A N<o:p></o:p></span></b></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>7<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Intelegensi</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>Umum</span><o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile ==2) { echo "X"; } ?></o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-fareast-font-family:
  "Times New Roman";mso-fareast-language:EN-US'><o:p><?php if($hasile == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 7) { echo "X"; } ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Taraf</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>intelegensi</span> yang <span class=SpellE>dimiliki</span> <span
  class=SpellE>pelamar</span><o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Daya</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>Tangkap</span> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=top style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=top style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 2) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=top style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=top style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=top style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=top style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($hasile == 7) { echo "X"; } ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.75pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:double windowtext 2.25pt;border-right:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.75pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kemampuan</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>menangkap</span> <span class=SpellE>informasi</span> yang <span
  class=SpellE>diperlukan</span><span style='mso-spacerun:yes'>  </span>yang <span
  class=SpellE>disampaikan</span> <span class=SpellE>oleh</span> orang lain <span
  class=SpellE>serta</span> <span class=SpellE>mengolah</span> <span
  class=SpellE>informasi</span> verbal<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 style='width:140.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:13.5pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:none;
  border-left:double windowtext 2.25pt;border-bottom:double windowtext 2.25pt;
  border-right:double black 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-fareast-language:EN-US'><span style='mso-spacerun:yes'>  </span>S I K A
  P<span style='mso-spacerun:yes'>   </span>K E R J A <o:p></o:p></span></b></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>7<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Sistematika</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>Kerja</span> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['sis_kerja'] == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['sis_kerja'] == 2) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['sis_kerja'] == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['sis_kerja'] == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['sis_kerja'] == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['sis_kerja'] == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['sis_kerja'] == 7) { echo "X"; } ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-ansi-language:SV;mso-fareast-language:EN-US'>Menunjukkan cara bekerja
  yang metodis dan sistematis<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Motivasi</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>Berprestasi</span> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['motiv_prestasi'] == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['motiv_prestasi'] == 2) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['motiv_prestasi'] == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['motiv_prestasi'] == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['motiv_prestasi'] == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['motiv_prestasi'] == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['motiv_prestasi'] == 7) { echo "X"; } ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:10.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal><i><span lang=FI style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-ansi-language:FI;mso-fareast-language:EN-US'>Dorongan, kemauan dan
  kesanggupan<span style='mso-spacerun:yes'>  </span>untuk melaksanakan tugas
  secara optimal<o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><i><span style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-fareast-language:EN-US'>Nurturance<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['nurturance'] == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['nurturance'] == 2) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['nurturance'] == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['nurturance'] == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['nurturance'] == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['nurturance'] == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['nurturance'] == 7) { echo "X";} ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-ansi-language:SV;mso-fareast-language:EN-US'>Kecenderungan untuk melayani
  atau memberikan bantuan kepada orang lain<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;mso-border-left-alt:
  double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-right:
  double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:solid windowtext 1.0pt;
  border-left:double windowtext 2.25pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Mobilitas</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:double windowtext 2.25pt;mso-border-alt:
  solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['mobilitas'] == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['mobilitas'] == 2) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['mobilitas'] == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['mobilitas'] == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['mobilitas'] == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['mobilitas'] == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['mobilitas'] == 7) { echo "X"; } ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kesanggupan</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>untuk</span> <span class=SpellE>bekerja</span> <span
  class=SpellE>secara</span> mobile, outdoors, moving area<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-fareast-font-family:
  "Times New Roman";mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kepercayaan</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>diri</span> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kepercayaan'] == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kepercayaan'] == 2) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kepercayaan'] == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kepercayaan'] == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kepercayaan'] == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kepercayaan'] == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kepercayaan'] == 7) { echo "X"; }?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal><i><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-ansi-language:SV;mso-fareast-language:EN-US'>Kesanggupan untuk tampil di
  muka umum dengan percaya diri, bersikap terbuka dan representatif<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=SV
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  SV;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:solid windowtext 1.0pt;
  border-left:double windowtext 2.25pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Ketelitian</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>dan</span> detail <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['ketelitian'] == 1) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['ketelitian'] == 2) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['ketelitian'] == 3) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['ketelitian'] == 4) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['ketelitian'] == 5) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['ketelitian'] == 6) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['ketelitian'] == 7) { echo "X"; }?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal><i><span lang=FI style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-ansi-language:FI;mso-fareast-language:EN-US'>Menunjukkan ketelitian
  kerja, kesanggupan mengerjakan tugas-tugas yang membutuhkan ketelitian<o:p></o:p></span></i></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=FI
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-ansi-language:
  FI;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:13.5pt'>
  <td width=518 nowrap colspan=2 style='width:388.15pt;border-top:none;
  border-left:double windowtext 2.25pt;border-bottom:double windowtext 2.25pt;
  border-right:double black 2.25pt;mso-border-top-alt:double windowtext 2.25pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal><b><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Arial;
  mso-ansi-language:SV;mso-fareast-language:EN-US'><span
  style='mso-spacerun:yes'>  </span></span></b><b><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>K E P R I B A D I A N<o:p></o:p></span></b></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>6<o:p></o:p></span></p>
  </td>
  <td width=27 nowrap style='width:20.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>7<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>1<o:p></o:p></span></p>
  </td>
  <td width=498 nowrap style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Stabilitas</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>Emosi</span> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['emosi'] == 1) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['emosi'] == 2) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['emosi'] == 3) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['emosi'] == 4) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['emosi'] == 5) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['emosi'] == 6) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['emosi'] == 7) { echo "X"; }?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:19.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.5pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Menunjukkan</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>kematangan</span> <span class=SpellE>pribadi</span>, <span
  class=SpellE>mampu</span> <span class=SpellE>mengendalkan</span> <span
  class=SpellE>emosi</span>, <span class=SpellE>tidak</span> <span
  class=SpellE>mudah</span> <span class=SpellE>marah</span> <span class=SpellE>serta</span>
  <span class=SpellE>mampu</span> <span class=SpellE>untuk</span> <span
  class=SpellE>menyesuaikan</span> (<span class=SpellE>emosinya</span>) <span
  class=SpellE>dengan</span> <span class=SpellE>situasi</span><o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:12.75pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>2<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Komitmen</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>pada</span> <span class=SpellE>tugas</span> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['komit'] == 1) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['komit'] == 2) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['komit'] == 3) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['komit'] == 4) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['komit'] == 5) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['komit'] == 6) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['komit'] == 7) { echo "X"; }?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kesediaan</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>untuk</span> <span class=SpellE>mengerjakan</span> <span
  class=SpellE>tugas</span> <span class=SpellE>hingga</span> <span
  class=SpellE>tuntas</span> <span class=SpellE>dengan</span> <span
  class=SpellE>hasil</span> yang <span class=SpellE>dapat</span> <span
  class=SpellE>dipertanggung</span> <span class=SpellE>jawabkan</span><o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border:
  none;border-right:double black 2.25pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:12.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:solid windowtext 1.0pt;
  border-left:double windowtext 2.25pt;border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>3<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kerjasama</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:double windowtext 2.25pt;mso-border-alt:
  solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kerjasama'] == 1) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kerjasama'] == 2) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kerjasama'] == 3) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kerjasama'] == 4) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  silver;padding:0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kerjasama'] == 5) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0in 5.4pt 0in 5.4pt;height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kerjasama'] == 6) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:double windowtext 2.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:12.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['kerjasama'] == 7) { echo "X"; } ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:19.5pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.5pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kemauan</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>dan</span> <span class=SpellE>kesanggupan</span> <span
  class=SpellE>untuk</span> <span class=SpellE>bekerjasama</span> <span
  class=SpellE>dan</span> <span class=SpellE>bertindak</span> <span
  class=SpellE>kooperatif</span> <span class=SpellE>dengan</span> <span
  class=SpellE>rekan</span> <span class=SpellE>dalam</span> <span class=SpellE>kelompok</span>
  <span class=SpellE>ataupun</span> <span class=SpellE>dengan</span> <span
  class=SpellE>lingkungan</span><o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:19.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:13.5pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>4<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Hubungan</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>
  Interpersonal <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['interpersonal'] == 1) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['interpersonal'] == 2) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['interpersonal'] == 3) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['interpersonal'] == 4) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['interpersonal'] == 5) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['interpersonal'] == 6) { echo "X"; }?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['interpersonal'] == 7) { echo "X"; } ?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;height:15.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-left-alt:
  double windowtext 2.25pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Kesanggupan</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>untuk</span> <span class=SpellE>menghadapi</span> <span
  class=SpellE>bermacam-macam</span> orang <span class=SpellE>secara</span> <span
  class=SpellE>efektif</span> <span class=SpellE>dalam</span> <span
  class=SpellE>berbagai</span> <span class=SpellE>situasi</span><o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 valign=bottom style='width:140.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double black 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;height:11.25pt'>
  <td width=20 nowrap style='width:15.0pt;border:none;border-left:double windowtext 2.25pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>5<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border:none;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;background:silver;padding:0in 5.4pt 0in 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Agresifitas</span></span><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>
  Verbal <o:p></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:double windowtext 2.25pt;mso-border-left-alt:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['agresifitas'] == 1) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['agresifitas'] == 2) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['agresifitas'] == 3) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['agresifitas'] == 4) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['agresifitas'] == 5) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['agresifitas'] == 6) { echo "X"; } ?></o:p></span></p>
  </td>
  <td width=27 nowrap valign=bottom style='width:20.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 2.25pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:11.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p><?php if($row['agresifitas'] == 7) { echo "X"; }?></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;mso-yfti-lastrow:yes;height:21.0pt'>
  <td width=20 nowrap style='width:15.0pt;border-top:none;border-left:double windowtext 2.25pt;
  border-bottom:double windowtext 2.25pt;border-right:none;background:silver;
  padding:0in 5.4pt 0in 5.4pt;height:21.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=498 style='width:373.15pt;border-top:none;border-left:none;
  border-bottom:double windowtext 2.25pt;border-right:double black 2.25pt;
  background:silver;padding:0in 5.4pt 0in 5.4pt;height:21.0pt'>
  <p class=MsoNormal><span class=SpellE><i><span style='font-size:8.0pt;
  font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:Arial;mso-fareast-language:EN-US'>Potensial</span></i></span><i><span
  style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:Arial;mso-fareast-language:EN-US'> <span
  class=SpellE>atau</span> <span class=SpellE>kecenderungan</span> <span
  class=SpellE>perilaku</span> <span class=SpellE>akan</span> <span
  class=SpellE>bersikap</span> <span class=SpellE>agresif</span> <span
  class=SpellE>secara</span> verbal yang <span class=SpellE>akan</span> <span
  class=SpellE>muncul</span> <span class=SpellE>pada</span> <span class=SpellE>kondisi</span>
  <span class=SpellE>tertentu</span> <span class=SpellE>atau</span> <span
  class=SpellE>potensi</span> <span class=SpellE>melakukan</span> <span
  class=SpellE>persuasi</span> <span class=SpellE>negatif</span> <span
  class=SpellE>terhadap</span> <span class=SpellE>rekan</span> <span
  class=SpellE>atau</span> <span class=SpellE>lingkungan</span> <span
  class=SpellE>kerjanya</span><o:p></o:p></span></i></p>
  </td>
  <td width=187 nowrap colspan=7 style='width:140.0pt;border-top:none;
  border-left:none;border-bottom:double windowtext 2.25pt;border-right:double black 2.25pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:double windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;mso-fareast-font-family:"Times New Roman";mso-fareast-language:
  EN-US'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span lang=IN
style='font-size:6.0pt;font-family:"Trebuchet MS","sans-serif";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Arial;mso-ansi-language:IN;mso-fareast-language:
IN'>(1 = Jauh dibawah rata-rata; 2 = Dibawah rata-rata; 3 = Rata-rata batas
bawah; 4 = Rata-rata; 5 = Rata-rata batas atas; 6 = Diatas rata-rata; 7 = Jauh
diatas rata-rata)<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:85.05pt 326.05pt 389.85pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:85.05pt 326.05pt 389.85pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:85.05pt 326.05pt 389.85pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:184.3pt 3.15in 382.75pt 396.9pt'><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'>  </span>REKOMENDASI :<span style='mso-tab-count:1'>                                                       </span><span
style='mso-spacerun:yes'>      </span><span style='mso-tab-count:1'>             </span><span
style='mso-tab-count:1'>                                                                     </span><span
style='mso-spacerun:yes'>      </span><span style='mso-tab-count:3'>        </span><span
style='mso-spacerun:yes'>  </span>Pelaksana<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:14.2pt'><v:shape id="Picture_x0020_1"
 o:spid="_x0000_s1028" type="#_x0000_t75" style='position:absolute;
 margin-left:422.25pt;margin-top:1.45pt;width:62.25pt;height:25.5pt;z-index:251661312;
 visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:9pt;
 mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image002.png" o:title="" croptop="15964f"
  cropbottom="44110f" cropleft="41294f" cropright="19115f"/>
</v:shape><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma'><span
style='mso-spacerun:yes'>  </span></span></b><b style='mso-bidi-font-weight:
normal'><span style='font-size:8.0pt;font-family:Wingdings;mso-ascii-font-family:
"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";mso-bidi-font-family:Tahoma;
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'>¨</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><span style='mso-spacerun:yes'>  </span></span></b><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>Disarankan<span
style='mso-spacerun:yes'>                                                                                                                                       
</span><o:p></o:p></span></p>

<p class=MsoNormal><v:shape id="Picture_x0020_5" o:spid="_x0000_s1027" type="#_x0000_t75"
 style='position:absolute;margin-left:430.05pt;margin-top:687.2pt;width:88.85pt;
 height:50.25pt;z-index:-251656192;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image003.png" o:title=""/>
</v:shape><v:shape id="Picture_x0020_3" o:spid="_x0000_s1026" type="#_x0000_t75"
 style='position:absolute;margin-left:430.05pt;margin-top:687.2pt;width:88.85pt;
 height:50.25pt;z-index:-251657216;visibility:visible;mso-wrap-style:square;
 mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image003.png" o:title=""/>
</v:shape><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma'><span
style='mso-spacerun:yes'>  </span></span></b><b style='mso-bidi-font-weight:
normal'><span style='font-size:8.0pt;font-family:Wingdings;mso-ascii-font-family:
"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";mso-bidi-font-family:Tahoma;
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'>¨</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><span style='mso-spacerun:yes'>  </span></span></b><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>Dipertimbangkan<span style='mso-tab-count:24'>                                                                                                                                                   </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:.25in;text-indent:-.25in'><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma'><span
style='mso-spacerun:yes'>  </span></span></b><b style='mso-bidi-font-weight:
normal'><span style='font-size:8.0pt;font-family:Wingdings;mso-ascii-font-family:
"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";mso-bidi-font-family:Tahoma;
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'>¨</span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><span style='mso-spacerun:yes'>  </span></span></b><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>Tidak disarankan<span
style='mso-spacerun:yes'>                                                 
</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:173.9pt;text-indent:10.7pt'><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'> </span><span style='mso-tab-count:6'>                                     </span><span
style='mso-spacerun:yes'>                                                
</span><span style='mso-tab-count:3'>              </span></span><span lang=SV
style='font-size:8.0pt;font-family:"Palatino Linotype","serif";mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>(Riska Asgarita)</span><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:2'>           </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:
1'>                                                                                  </span><span
style='mso-spacerun:yes'>  </span><span style='mso-tab-count:1'>                                                                                   </span><span
style='mso-spacerun:yes'>   </span><span style='mso-tab-count:1'> </span><span
style='mso-spacerun:yes'>  </span><span style='mso-tab-count:3'>                 </span><span
style='mso-spacerun:yes'> </span></span><span lang=SV style='font-size:8.0pt;
font-family:"Palatino Linotype","serif";mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'>NIK : 800060089</span><span lang=SV style='font-size:8.0pt;font-family:
"Trebuchet MS","sans-serif";mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-tab-count:1'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:170.1pt;text-indent:14.2pt'><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:
10'>                                                         </span></span><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-ansi-language:SV'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:
1'>                                                                                  </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS","sans-serif";
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>


