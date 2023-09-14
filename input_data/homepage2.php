<html> <title>Psikotest Online</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
	<script language='JavaScript' type='text/JavaScript'> 
 // http://html-generator.weebly.com/html-right-click-disable-code.html 
 var tenth = ''; 
 
 function ninth() { 
   if (document.all) { 
     (tenth); 
     alert("Right Click Disable"); 
     return false; 
   } 
 } 
 
 function twelfth(e) { 
   if (document.layers || (document.getElementById && !document.all)) { 
     if (e.which == 2 || e.which == 3) { 
       (tenth); 
       return false; 
     } 
   } 
 } 
 if (document.layers) { 
   document.captureEvents(Event.MOUSEDOWN); 
   document.onmousedown = twelfth; 
 } else { 
   document.onmouseup = twelfth; 
   document.oncontextmenu = ninth; 
 } 
 document.oncontextmenu = new Function('alert("Right Click Disable"); return false') 
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
	width:900px;
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
    <body  style="">
	<br>
	<div class="form-1" align="center">
	<img src="logo.png">
	</div>
	<div class="form-2">
        <div class="login-header bordered">
            <h3><b>Pengantar Psikotest Online</b></h3>
        </div>
        <hr>
<h4 align="center">Selamat datang dan terima kasih anda telah bergabung di Psikotes Online Persada.<br><br>

Dalam Psikotes ini anda akan diberikan sebanyak 5 Tahapan Tes<br /><br />
Mohon untuk diperhatikan waktu penyelesaian soal<br />
Karena soal soal dalam tahapan ini menggunakan batasan waktu<br><br>

Sebelum memulai tes , anda akan diberikan form untuk input data diri anda di dalam database kami.<br><br>
Bila anda sudah siap jangan lupa berdoa lalu klik link di bawah ini <br><br><a href="verify_data.php"><button id="sub">Mulai Psikotest Online </button></a></h3>
    </div>



</body></html>

