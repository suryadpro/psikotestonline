<html>
<head>
<script type="text/javascript">

/***********************************************
* Limit number of checked checkboxes script- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/

function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("You can only select a maximum of "+limit+" checkboxes")
			this.checked=false
			}
		}
	}
}

</script>

</head>
<body>
<p>Select your favorite two countries below:</p>

<form id="world" name="world">
<input type="checkbox" name="amerika" /> USA<br />
<input type="checkbox" name="kanada" /> Canada<br />
<input type="checkbox" name="jepang" /> Japan<br />
<input type="checkbox" name="china" /> China<br />
<input type="checkbox" name="france" /> France<br />
</form>
<script type="text/javascript">

//Syntax: checkboxlimit(checkbox_reference, limit)
checkboxlimit(document.forms.world, 2)

</script>
</body>
</form></html>