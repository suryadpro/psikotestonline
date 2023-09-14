<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=psikogram_psikotest_online.doc" );
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Pragma: public");
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
$verbal=($skor_i+$skor_ii)/2; $verbal=ceil($verbal);
$aritmatik=$skor_iii; $aritmatik=ceil($aritmatik);
$general=($skor_ii+$skor_iv)/2; $general=ceil($general);
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
  <o:Revision>3</o:Revision>
  <o:TotalTime>15</o:TotalTime>
  <o:LastPrinted>2011-10-17T07:51:00Z</o:LastPrinted>
  <o:Created>2014-12-15T02:47:00Z</o:Created>
  <o:LastSaved>2014-12-15T02:47:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>193</o:Words>
  <o:Characters>1105</o:Characters>
  <o:Company>no org</o:Company>
  <o:Lines>9</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1296</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="form_files/themedata.thmx">
<link rel=colorSchemeMapping href="form_files/colorschememapping.xml">
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
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:UseWord2010TableStyleRules/>
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
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073683329 9 0 511 0;}
@font-face
	{font-family:"Trebuchet MS";
	panose-1:2 11 6 3 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:647 3 0 0 159 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
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
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.0in right 6.0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.0in right 6.0in;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma",sans-serif;
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:Header;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:SimSun;
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:Footer;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:SimSun;
	mso-fareast-font-family:SimSun;
	mso-fareast-language:ZH-CN;}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-noshow:yes;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Segoe UI",sans-serif;
	mso-ascii-font-family:"Segoe UI";
	mso-fareast-font-family:SimSun;
	mso-hansi-font-family:"Segoe UI";
	mso-bidi-font-family:"Segoe UI";
	mso-fareast-language:ZH-CN;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;}
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
	font-family:"Times New Roman",serif;}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1036"/>
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
</v:shapetype><v:shape id="Picture_x0020_2" o:spid="_x0000_s1035" type="#_x0000_t75"
 alt="untitled" style='position:absolute;margin-left:393.3pt;margin-top:.2pt;
 width:189pt;height:99pt;z-index:-251656704;visibility:visible'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image001.png" o:title="untitled"/>
</v:shape><span style='font-size:9.0pt;font-family:"Trebuchet MS",sans-serif'>Team
Selection PT PERSONEL ALIH DAYA<o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;font-family:"Trebuchet MS",sans-serif;
mso-ansi-language:SV'>Gedung Persada<o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;font-family:"Trebuchet MS",sans-serif;
mso-ansi-language:SV'>Jl. Raya Poltangan No. 35 Tanjung Barat <o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;font-family:"Trebuchet MS",sans-serif;
mso-ansi-language:SV'>Jakarta Selatan<o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:9.0pt;font-family:"Trebuchet MS",sans-serif;
mso-ansi-language:SV'>Telp. 021-78846139 Fax. 021-78846138<o:p></o:p></span></p>

<p class=MsoNormal><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><v:line id="Line_x0020_1" o:spid="_x0000_s1034" style='position:absolute;
 z-index:251658752;visibility:visible;mso-wrap-distance-top:-3e-5mm;
 mso-wrap-distance-bottom:-3e-5mm' from="0,3.2pt" to="529.5pt,3.2pt" o:gfxdata="UEsDBBQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
90jcwfIWJU67QAgl6YK0S0CoHGBkTxKLZGx5TGhvj5O2G0SRWNoz/78nu9wcxkFMGNg6quQqL6RA
0s5Y6ir5vt9lD1JwBDIwOMJKHpHlpr69KfdHjyxSmriSfYz+USnWPY7AufNIadK6MEJMx9ApD/oD
OlTrorhX2lFEilmcO2RdNtjC5xDF9pCuTyYBB5bi6bQ4syoJ3g9WQ0ymaiLzg5KdCXlKLjvcW893
SUOqXwnz5DrgnHtJTxOsQfEKIT7DmDSUCaxw7Rqn8787ZsmRM9e2VmPeBN4uqYvTtW7jvijg9N/y
JsXecLq0q+WD6m8AAAD//wMAUEsDBBQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAX3JlbHMvLnJl
bHOkkMFqwzAMhu+DvYPRfXGawxijTi+j0GvpHsDYimMaW0Yy2fr2M4PBMnrbUb/Q94l/f/hMi1qR
JVI2sOt6UJgd+ZiDgffL8ekFlFSbvV0oo4EbChzGx4f9GRdb25HMsYhqlCwG5lrLq9biZkxWOiqY
22YiTra2kYMu1l1tQD30/bPm3wwYN0x18gb45AdQl1tp5j/sFB2T0FQ7R0nTNEV3j6o9feQzro1i
OWA14Fm+Q8a1a8+Bvu/d/dMb2JY5uiPbhG/ktn4cqGU/er3pcvwCAAD//wMAUEsDBBQABgAIAAAA
IQD963CrEgIAACgEAAAOAAAAZHJzL2Uyb0RvYy54bWysU8uu2jAQ3VfqP1jeQxIauBARrqoEuqEt
0r39AGM7xKpjW7YhQVX/vWPzaGk3VdUsHD/OHJ+ZM14+D51EJ26d0KrE2TjFiCuqmVCHEn953Yzm
GDlPFCNSK17iM3f4efX2zbI3BZ/oVkvGLQIS5YrelLj13hRJ4mjLO+LG2nAFh422HfGwtIeEWdID
eyeTSZrOkl5bZqym3DnYrS+HeBX5m4ZT/7lpHPdIlhi0+TjaOO7DmKyWpDhYYlpBrzLIP6joiFBw
6Z2qJp6goxV/UHWCWu1048dUd4luGkF5zAGyydLfsnlpieExFyiOM/cyuf9HSz+ddhYJBt5hpEgH
Fm2F4igLlemNKwBQqZ0NudFBvZitpl8dUrpqiTrwqPD1bCAsRiQPIWHhDPDv+4+aAYYcvY5lGhrb
BUooABqiG+e7G3zwiMLmLHuagMUY0dtZQopboLHOf+C6Q2FSYgmaIzE5bZ0H6QC9QcI9Sm+ElNFs
qVBf4sV0Mo0BTkvBwmGAOXvYV9KiEwntEr9QByB7gFl9VCyStZyw9XXuiZCXOeClCnyQCsi5zi79
8G2RLtbz9Twf5ZPZepSndT16v6ny0WyTPU3rd3VV1dn3IC3Li1YwxlVQd+vNLP8776+v5NJV9+68
lyF5ZI8pgtjbP4qOXgb7Lo2w1+y8s6EawVZoxwi+Pp3Q77+uI+rnA1/9AAAA//8DAFBLAwQUAAYA
CAAAACEA48rdEtkAAAAEAQAADwAAAGRycy9kb3ducmV2LnhtbEyPy07DMBBF90j8gzVIbCrqEFCB
EKdCQHZs+kBsp/GQRMTjNHbblK9nygaWR3d075l8PrpO7WkIrWcD19MEFHHlbcu1gfWqvLoHFSKy
xc4zGThSgHlxfpZjZv2BF7RfxlpJCYcMDTQx9pnWoWrIYZj6nliyTz84jIJDre2AByl3nU6TZKYd
tiwLDfb03FD1tdw5A6F8p235PakmycdN7Sndvry9ojGXF+PTI6hIY/w7hpO+qEMhThu/YxtUZ0Ae
iQZmt6AkfLhLhTe/rItc/5cvfgAAAP//AwBQSwECLQAUAAYACAAAACEAtoM4kv4AAADhAQAAEwAA
AAAAAAAAAAAAAAAAAAAAW0NvbnRlbnRfVHlwZXNdLnhtbFBLAQItABQABgAIAAAAIQA4/SH/1gAA
AJQBAAALAAAAAAAAAAAAAAAAAC8BAABfcmVscy8ucmVsc1BLAQItABQABgAIAAAAIQD963CrEgIA
ACgEAAAOAAAAAAAAAAAAAAAAAC4CAABkcnMvZTJvRG9jLnhtbFBLAQItABQABgAIAAAAIQDjyt0S
2QAAAAQBAAAPAAAAAAAAAAAAAAAAAGwEAABkcnMvZG93bnJldi54bWxQSwUGAAAAAAQABADzAAAA
cgUAAAAA
"/><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=SV
style='font-family:"Trebuchet MS",sans-serif;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=SV
style='font-family:"Trebuchet MS",sans-serif;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></b></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=SV
style='font-family:"Trebuchet MS",sans-serif;mso-ansi-language:SV'>PSIKOGRAM<span
style='mso-spacerun:yes'>                                                  
</span><o:p></o:p></span></b></p>

<p class=MsoNormal align=right style='text-align:right'><b><span lang=SV
style='font-family:"Trebuchet MS",sans-serif;mso-ansi-language:SV'><span
style='mso-tab-count:9'>                                  </span></span></b><b><u><span
lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
mso-ansi-language:SV'>Rahasia<o:p></o:p></span></u></b></p>

<p class=MsoNormal align=right style='text-align:right'><b><u><span lang=SV
style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'><o:p><span style='text-decoration:none'>&nbsp;</span></o:p></span></u></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=708
 style='width:531.0pt;margin-left:4.25pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:SV'>Nama<span style='mso-spacerun:yes'>  </span><span
  style='mso-tab-count:4'>                  </span>: <?php $nama=strtolower($row['nama_lengkap']); echo ucwords($nama); if($row['gender'] == "pria") { echo " ( L )"; } else { echo " ( P )"; } ?></span><b><u><span
  lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p></o:p></span></u></b></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:SV'>Pendidikan<span style='mso-tab-count:1'>    </span>: <?php echo $row['level_pend']." - ".$row['jurusan']; ?></span><b><u><span lang=SV style='font-size:10.0pt;
  font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;mso-ansi-language:
  SV'><o:p></o:p></span></u></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:FI'>Tanggal Psikotes<span style='mso-tab-count:1'>     </span>:
  <?php echo TanggalIndo($date); ?></span><b><u><span lang=SV style='font-size:10.0pt;
  font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;mso-ansi-language:
  SV'><o:p></o:p></span></u></b></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:FI'>Untuk Posisi<span style='mso-tab-count:1'>  </span>:
  <?php echo $row['posisi']; ?></span><b><u><span lang=SV style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p></o:p></span></u></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:FI'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:FI'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=343 valign=top style='width:257.15pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:FI'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=365 valign=top style='width:273.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span lang=FI style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
  mso-ansi-language:FI'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman";
display:none;mso-hide:all;mso-fareast-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=34 valign=top style='width:25.4pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#A6A6A6;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Trebuchet MS",sans-serif;color:white'>No<o:p></o:p></span></b></p>
  </td>
  <td width=178 valign=top style='width:133.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#A6A6A6;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Trebuchet MS",sans-serif;color:white'>Potensi<o:p></o:p></span></b></p>
  </td>
  <td width=419 valign=top style='width:314.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#A6A6A6;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Trebuchet MS",sans-serif;color:white'>Keterangan<o:p></o:p></span></b></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#A6A6A6;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;mso-bidi-font-size:
  8.0pt;font-family:"Trebuchet MS",sans-serif;color:white'>Hasil<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=34 valign=top style='width:25.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#F4B083;mso-background-themecolor:accent2;mso-background-themetint:
  153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>1<o:p></o:p></span></p>
  </td>
  <td width=178 valign=top style='width:133.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F4B083;mso-background-themecolor:
  accent2;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>Analogi
  Verbal<o:p></o:p></span></p>
  </td>
  <td width=419 valign=top style='width:314.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F4B083;mso-background-themecolor:
  accent2;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>Menunjukkan
  potensi kecerdasan yang berkaitan denga logika Bahasa. Kemampuan yang
  tersebut menggambarkan kemampuan penggunaan Bahasa, observasi dan pemahaman
  konsep<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#F4B083;mso-background-themecolor:
  accent2;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><?php echo $i; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=34 valign=top style='width:25.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#9CC2E5;mso-background-themecolor:accent1;mso-background-themetint:
  153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>2<o:p></o:p></span></p>
  </td>
  <td width=178 valign=top style='width:133.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#9CC2E5;mso-background-themecolor:
  accent1;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>Aritmatika<o:p></o:p></span></p>
  </td>
  <td width=419 valign=top style='width:314.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#9CC2E5;mso-background-themecolor:
  accent1;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>Menunjukkan
  potensi kecerdasan yang berkaitan dengan logika berpikir. Potensi yang
  menggambarkan daya nalar dan pemecahan masalah<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#9CC2E5;mso-background-themecolor:
  accent1;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><?php echo $ii; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=34 valign=top style='width:25.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#A8D08D;mso-background-themecolor:accent6;mso-background-themetint:
  153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>3<o:p></o:p></span></p>
  </td>
  <td width=178 valign=top style='width:133.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#A8D08D;mso-background-themecolor:
  accent6;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>General<o:p></o:p></span></p>
  </td>
  <td width=419 valign=top style='width:314.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#A8D08D;mso-background-themecolor:
  accent6;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'>Menunjukkan
  potensi berpikir analitis dan logis. Potensi yang menggambarkan kemampuan
  berpikir analitis dalam memecahkan masalah<o:p></o:p></span></p>
  </td>
  <td width=78 valign=top style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#A8D08D;mso-background-themecolor:
  accent6;mso-background-themetint:153;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><o:p>&nbsp;</o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:85.05pt 297.7pt 361.5pt'><span
  style='font-size:11.0pt;mso-bidi-font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><?php echo $iii; ?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='tab-stops:85.05pt 297.7pt 361.5pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:85.05pt 326.05pt 389.85pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:85.05pt 326.05pt 389.85pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:85.05pt 326.05pt 389.85pt'><span
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:184.3pt 3.15in 382.75pt 396.9pt'><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'>  </span>REKOMENDASI :<span style='mso-tab-count:1'>                                                       </span><span
style='mso-spacerun:yes'>      </span><span style='mso-tab-count:2'>                                                                                  </span><span
style='mso-spacerun:yes'>      </span><span style='mso-tab-count:3'>        </span><span
style='mso-spacerun:yes'>  </span>Pelaksana<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:14.2pt'><v:shape id="Picture_x0020_1"
 o:spid="_x0000_s1033" type="#_x0000_t75" style='position:absolute;
 margin-left:422.25pt;margin-top:1.45pt;width:62.25pt;height:25.5pt;z-index:251657728;
 visibility:visible'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image002.png" o:title="" croptop="15964f"
  cropbottom="44110f" cropleft="41294f" cropright="19115f"/>
</v:shape><b style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;
font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma'><span
style='mso-spacerun:yes'>  </span></span></b><b style='mso-bidi-font-weight:
normal'><span style='font-size:8.0pt;font-family:Wingdings;mso-ascii-font-family:
"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";mso-bidi-font-family:Tahoma;
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'><?php echo $srn; ?></span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><span style='mso-spacerun:yes'>  </span></span></b><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>Disarankan<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:14.2pt'><span lang=SV style='font-size:
8.0pt;font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;
mso-ansi-language:SV'><span style='mso-spacerun:yes'>  </span></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
Wingdings;mso-ascii-font-family:"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";
mso-bidi-font-family:Tahoma;mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'><?php echo $dpt; ?></span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><span style='mso-spacerun:yes'>  </span></span></b><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>Dipertimbangkan<span
style='mso-spacerun:yes'>                                                                                                      
</span><span style='mso-spacerun:yes'>                                 </span></span><v:shape
 id="Picture_x0020_5" o:spid="_x0000_s1032" type="#_x0000_t75" style='position:absolute;
 margin-left:430.05pt;margin-top:687.2pt;width:88.85pt;height:50.25pt;
 z-index:-251659776;visibility:visible;mso-position-horizontal-relative:text;
 mso-position-vertical-relative:text'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image003.png" o:title=""/>
</v:shape><v:shape id="Picture_x0020_3" o:spid="_x0000_s1031" type="#_x0000_t75"
 style='position:absolute;margin-left:430.05pt;margin-top:687.2pt;width:88.85pt;
 height:50.25pt;z-index:-251660800;visibility:visible;
 mso-position-horizontal-relative:text;mso-position-vertical-relative:text'>
 <v:imagedata src="http://www.personelalihdaya.com/psikotest_online/wp-admin/form_files/image003.png" o:title=""/>
</v:shape><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:
8'>                                                 </span><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:14.2pt'><span lang=SV style='font-size:
8.0pt;font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;
mso-ansi-language:SV'><span style='mso-spacerun:yes'>  </span></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;font-family:
Wingdings;mso-ascii-font-family:"Trebuchet MS";mso-hansi-font-family:"Trebuchet MS";
mso-bidi-font-family:Tahoma;mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'><?php echo $tds; ?></span></span></b><b
style='mso-bidi-font-weight:normal'><span lang=SV style='font-size:8.0pt;
font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'><span style='mso-spacerun:yes'>  </span></span></b><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>Tidak disarankan<span
style='mso-spacerun:yes'>                                                 
</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:173.9pt;text-indent:10.7pt'><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-spacerun:yes'> </span><span style='mso-tab-count:6'>                                     </span><span
style='mso-spacerun:yes'>                                                
</span><span style='mso-tab-count:3'>              </span></span><span lang=SV
style='font-size:8.0pt;font-family:"Palatino Linotype",serif;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'>(Riska Asgarita)</span><span lang=SV
style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;mso-bidi-font-family:
Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:2'>           </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:
1'>                                                                                  </span><span
style='mso-spacerun:yes'>  </span><span style='mso-tab-count:1'>                                                                                   </span><span
style='mso-spacerun:yes'>   </span><span style='mso-tab-count:1'> </span><span
style='mso-spacerun:yes'>  </span><span style='mso-tab-count:3'>                 </span><span
style='mso-spacerun:yes'> </span></span><span lang=SV style='font-size:8.0pt;
font-family:"Palatino Linotype",serif;mso-bidi-font-family:Tahoma;mso-ansi-language:
SV'>NIK : 800060089</span><span lang=SV style='font-size:8.0pt;font-family:
"Trebuchet MS",sans-serif;mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span
style='mso-tab-count:1'>   </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:170.1pt;text-indent:14.2pt'><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:
10'>                                                         </span></span><span
lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-ansi-language:SV'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><span style='mso-tab-count:
1'>                                                                                  </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:184.3pt;text-indent:-184.3pt;tab-stops:
184.3pt 375.65pt'><span lang=SV style='font-size:8.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:Tahoma;mso-ansi-language:SV'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>

