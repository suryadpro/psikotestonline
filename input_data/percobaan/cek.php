<html>
<head>
<title></title>
<META NAME="DESCRIPTION" CONTENT="">
<META NAME="KEYWORDS" CONTENT="">

<script type="text/javascript">
function chkcontrol(j) {
var total=0;
for(var i=0; i < document.form1.ckb.length; i++){
if(document.form1.ckb[i].checked){
total =total +1;}
if(total > 3){
alert("Please Select only three")
document.form1.ckb[j].checked = false ;
return false;
}
}
} </script>
</head>
<body>
<div id="subscriber_1">
    <input type="checkbox"name="ckb"value="1"onclick='chkcontrol(0)';>
    <input type="checkbox"name="ckb"value="2"onclick='chkcontrol(1)';>
    <input type="checkbox"name="ckb"value="3"onclick='chkcontrol(2)';>
    <input type="checkbox"name="ckb"value="4"onclick='chkcontrol(3)';>
    <input type="checkbox"name="ckb"value="5"onclick='chkcontrol(4)';>
    <input type="checkbox"name="ckb"value=""onclick='chkcontrol(5)';>
    </div></body></head></html>