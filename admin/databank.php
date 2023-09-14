<?php session_start(); ?>
<html>
	<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css">
   <link rel="stylesheet" type="text/css" href="style/tcal.css" />
<script type="text/javascript" src="style/tcal.js"></script>
    <script type="text/javascript">
    <!--
    function toggle(box,theId) {
        if(document.getElementById) {
            var cell = document.getElementById(theId);
            if(box.checked) {
                cell.className = "on";
            }
            else {
                cell.className = "off";
            }
        }
    }
    // -->
    </script>
	    <style type="text/css">
    <!--
    .off {
    background-color: #fff;
    }
    .on {
    background-color: yellow;
    }
    -->
    </style>
			<script type="text/javascript" language="javascript" src="js/jquery-1.9.1.js"></script>
			<script>
		$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });
   
});
		</script>
  <script>
  var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
popupWindow = window.open(url,winName,settings)
}
		</script>
	</head>
	<body >
<font size='-1'><div id="demo">

<p>	   <form action="menu.php?data=databank&proses=ya" method="post" class="pure-form">
Cari Per tanggal :		<input type="text" name="tanggal" class="tcal" value="<?php echo $_POST['tanggal']; ?>"/> 
		Sort by : <input type="radio" name="jenis" value="input" required id="a"><label for="a">
		Date Input </label><input type="radio" name="jenis" value="psikotest" required id="b"><label for="b"> Date Psikotest </label>
		<input type="submit" value="cari"> </form></p>
<p>
<p>
<form action="menu.php?data=databank&proses=ya" method="post" class="pure-form">
	Search : <input type="text" name="nama" value="<?php echo $_POST['nama']; ?>">
								<select name="type">
									<option value="nama" <?php if($_POST['type'] == "nama") { echo "selected ";} ?> >Nama</option>
									<option value="hp" <?php if($_POST['type'] == "hp") { echo "selected ";} ?> >Nomor HP</option>
									<option value="ktp" <?php if($_POST['type'] == "ktp") { echo "selected ";} ?> >Nomor KTP</option>
								</select>	<input type="submit" value="Cari"></form>
</p>
<hr>
<?php if($_GET['proses'] == "ya") { ?>
<table>
	<tr>
		<th>#</th>
		<th>No</th>
		<th>Nama</th>
		<th>Tanggal Input</th>
		<th>Requester</th>
		<th>Status</th>
		<th>#</th>
		<th>#</th>